<?php

namespace App\Filament\Resources;

use App\Enums\Color;
use App\Enums\Cut;
use App\Enums\Clarity;
use App\Enums\Shape;
use App\Filament\Resources\DiamondResource\Pages;
use App\Filament\Resources\DiamondResource\RelationManagers;
use App\Models\Diamond;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DiamondResource extends Resource
{
    protected static ?string $model = Diamond::class;

    protected static ?string $navigationIcon = 'icon-diamond';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->columnSpanFull(),
                Forms\Components\Select::make('shape')
                    ->label('Shape')
                    ->options(Shape::class),
                Forms\Components\Select::make('color')
                    ->label('Color')
                    ->options(Color::class),
                Forms\Components\TextInput::make('original_price')
                    ->label('Price')
                    ->numeric()
                    ->prefix('$'),
                Forms\Components\TextInput::make('mrp')
                    ->label('MRP')
                    ->numeric()
                    ->prefix('$'),

                Forms\Components\Select::make('cut')
                    ->label('Cut')
                    ->options(Cut::class),
                Forms\Components\Select::make('clarity')
                    ->label('Clarity')
                    ->options(Clarity::class),

                Forms\Components\FileUpload::make('images')
                    ->label('Images')
                    ->multiple()
                    ->image()
                    ->directory('diamond_images')
                    ->preserveFilenames()
                    ->disk('public')
                    ->maxSize(20480), // 20MB in kilobytes
                Forms\Components\FileUpload::make('video_url')
                    ->label('Video')
                    ->directory('diamond_videos')
                    ->preserveFilenames()
                    ->disk('public')
                    ->maxSize(20480) // 20MB in kilobytes
                    ->acceptedFileTypes(['video/mp4', 'video/mpeg', 'video/quicktime']),
                Forms\Components\TextInput::make('carat'),
                Forms\Components\TextInput::make('size'),
                Forms\Components\TextInput::make('l_w_ratio'),
                Forms\Components\TextInput::make('table'),
                Forms\Components\TextInput::make('sku')
                    ->label('SKU'),
                Forms\Components\TextInput::make('growth_type')
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('shape'),
                Tables\Columns\TextColumn::make('original_price')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('carat')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('cut'),
                Tables\Columns\TextColumn::make('color'),
                Tables\Columns\TextColumn::make('clarity'),
                Tables\Columns\TextColumn::make('size')
                    ->searchable(),
                Tables\Columns\TextColumn::make('l_w_ratio')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('table')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('sku')
                    ->label('SKU')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('mrp')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('growth_type')
                    ->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListDiamonds::route('/'),
            'create' => Pages\CreateDiamond::route('/create'),
            'edit' => Pages\EditDiamond::route('/{record}/edit'),
        ];
    }
}
