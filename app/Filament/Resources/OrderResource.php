<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OrderResource\Pages;
use App\Filament\Resources\OrderResource\RelationManagers;
use App\Models\Order;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Enums\OrderStatus;
use App\Models\Diamond;
use App\Filament\Resources\OrderResource\Widgets\OrderStats;
use Filament\Notifications\Notification;
use Carbon\Carbon;
use App\Filament\Resources\CustomerResource;

class OrderResource extends Resource
{
    protected static ?string $model = Order::class;

    protected static ?string $navigationIcon = 'heroicon-o-shopping-bag';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                // Wizard
                Forms\Components\Wizard::make([
                    // Order Details Wizard Step
                    Forms\Components\Wizard\Step::make('Order Details')
                        ->schema([
                            Forms\Components\Section::make()
                                ->schema([
                                    // Customer Details
                                    Forms\Components\TextInput::make('order_number')
                                        ->default('OR-' . random_int(100000, 999999))
                                        ->disabled()
                                        ->dehydrated()
                                        ->required()
                                        ->maxLength(32)
                                        ->unique(Order::class, 'order_number', ignoreRecord: true),
                                    Forms\Components\Select::make('customer_id')
                                        ->label('Customer')
                                        ->relationship('customer', 'first_name')
                                        ->searchable()
                                        ->required()
                                        ->createOptionForm([
                                            Forms\Components\TextInput::make('first_name')
                                                ->required()
                                                ->maxLength(255),
                                            Forms\Components\TextInput::make('last_name')
                                                ->required()
                                                ->maxLength(255),
                                            Forms\Components\TextInput::make('display_name')
                                                ->required()
                                                ->maxLength(255),
                                            Forms\Components\TextInput::make('email')
                                                ->email()
                                                ->unique(ignoreRecord: true)
                                                ->required()
                                                ->maxLength(255),
                                            Forms\Components\TextInput::make('phone')
                                                ->tel()
                                                ->required()
                                                ->maxLength(255),
                                            Forms\Components\TextInput::make('password')
                                                ->password()
                                                ->maxLength(255),
                                        ])->columns(2),

                                    Forms\Components\ToggleButtons::make('shipping_status')
                                        ->inline()
                                        ->options(OrderStatus::class)

                                        ->required(),
                                ])->columns(2),

                            // Order Summary
                            Forms\Components\TextInput::make('subtotal')
                                ->required()
                                ->numeric(),
                            Forms\Components\TextInput::make('shipping_cost')
                                ->required()
                                ->numeric(),
                            Forms\Components\TextInput::make('total')
                                ->required()
                                ->numeric(),
                            Forms\Components\TextInput::make('payment_status')
                                ->required()
                                ->maxLength(255),
                            Forms\Components\TextInput::make('payment_method')
                                ->required()
                                ->maxLength(255),
                            Forms\Components\TextInput::make('full_name')
                                ->required()
                                ->maxLength(255),
                            Forms\Components\TextInput::make('email')
                                ->email()
                                ->required()
                                ->maxLength(255),
                            Forms\Components\TextInput::make('phone')
                                ->required()
                                ->maxLength(255),
                            // Shipping Address
                            Forms\Components\TextInput::make('address')
                                ->required()
                                ->maxLength(255),
                            Forms\Components\TextInput::make('city')
                                ->required()
                                ->maxLength(255),
                            Forms\Components\TextInput::make('state')
                                ->required()
                                ->maxLength(255),
                            Forms\Components\TextInput::make('zip')
                                ->required()
                                ->maxLength(255),
                            Forms\Components\TextInput::make('country')
                                ->required()
                                ->maxLength(255),

                        ]),

                    // Order Items Wizard Step
                    Forms\Components\Wizard\Step::make('Order Items')
                        ->schema([
                            Forms\Components\Select::make('order_id')
                                ->label('Order Number')
                                ->options(Order::all()->pluck('order_number', 'order_number'))
                                ->required(),
                            Forms\Components\Select::make('diamond_id')
                                ->label('Diamond')
                                ->options(Diamond::all()->pluck('name', 'id'))
                                ->required(),
                            Forms\Components\TextInput::make('price')
                                ->required()
                                ->numeric()
                                ->prefix('$'),
                            Forms\Components\TextInput::make('quantity')
                                ->required()
                                ->numeric(),
                        ])->columns(2)
                ])->columnSpanFull()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('order_number')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('customer.display_name')
                    ->sortable()
                    ->searchable()
                    ->icon('heroicon-o-user'),
                Tables\Columns\TextColumn::make('shipping_status')
                    ->badge()
                    ->color(fn($state) => OrderStatus::getColors()[$state]),
                Tables\Columns\TextColumn::make('total')
                    ->numeric()
                    ->sortable()
                    ->prefix('$')
                    ->summarize(Tables\Columns\Summarizers\Sum::make()
                        ->money(),),
                Tables\Columns\TextColumn::make('shipping_cost')
                    ->numeric()
                    ->sortable()
                    ->toggleable()
                    ->summarize(Tables\Columns\Summarizers\Sum::make()
                        ->money(),),


                Tables\Columns\TextColumn::make('payment_status')
                    ->searchable(),
                Tables\Columns\TextColumn::make('payment_method')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Order Date')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                // Tables\Filters\TrashedFilter::make(),

                Tables\Filters\Filter::make('created_at')
                    ->form([
                        Forms\Components\DatePicker::make('created_from')
                            ->placeholder(fn($state): string => 'Dec 18, ' . now()->subYear()->format('Y')),
                        Forms\Components\DatePicker::make('created_until')
                            ->placeholder(fn($state): string => now()->format('M d, Y')),
                    ])
                    ->query(function (Builder $query, array $data): Builder {
                        return $query
                            ->when(
                                $data['created_from'] ?? null,
                                fn(Builder $query, $date): Builder => $query->whereDate('created_at', '>=', $date),
                            )
                            ->when(
                                $data['created_until'] ?? null,
                                fn(Builder $query, $date): Builder => $query->whereDate('created_at', '<=', $date),
                            );
                    })
                    ->indicateUsing(function (array $data): array {
                        $indicators = [];
                        if ($data['created_from'] ?? null) {
                            $indicators['created_from'] = 'Order from ' . Carbon::parse($data['created_from'])->toFormattedDateString();
                        }
                        if ($data['created_until'] ?? null) {
                            $indicators['created_until'] = 'Order until ' . Carbon::parse($data['created_until'])->toFormattedDateString();
                        }

                        return $indicators;
                    }),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->groupedBulkActions([
                Tables\Actions\DeleteBulkAction::make()
                    ->action(function () {
                        Notification::make()
                            ->title('Now, now, don\'t be cheeky, leave some records for others to play with!')
                            ->warning()
                            ->send();
                    }),
            ])
            ->groups([
                Tables\Grouping\Group::make('created_at')
                    ->label('Order Date')
                    ->date()
                    ->collapsible(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    // Navigation Badge
    public static function getNavigationBadge(): ?string
    {
        return Order::count();
    }


    public static function getWidgets(): array
    {
        return [
            OrderStats::class,
        ];
    }

    // Pages
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListOrders::route('/'),
            'create' => Pages\CreateOrder::route('/create'),
            'edit' => Pages\EditOrder::route('/{record}/edit'),
        ];
    }

    /** @return Builder<Order> */
    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->withoutGlobalScope(SoftDeletingScope::class);
    }
}
