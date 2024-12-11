<?php

namespace App\Filament\Resources;

use App\Enums\Color;
use App\Enums\Cut;
use App\Enums\Shape;
use App\Enums\Clarity;
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
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\Select::make('shape')
                    ->label('Shape')
                    ->options(Shape::class)
                    ->required(),
                Forms\Components\Select::make('cut')
                    ->label('Cut')
                    ->options(Cut::class)
                    ->required(),
                Forms\Components\Select::make('color')
                    ->label('Color')
                    ->options(Color::class)
                    ->required(),
                Forms\Components\Select::make('clarity')
                    ->label('Clarity')
                    ->options(Clarity::class)
                    ->required(),
                Forms\Components\TextInput::make('carat')
                    ->required()
                    ->label('Carat')
                    ->columnSpanFull(),
                Forms\Components\FileUpload::make('images')
                    ->label('Images')
                    ->multiple()
                    ->image()
                    ->directory('diamond_images')
                    ->preserveFilenames()
                    ->required(),
                Forms\Components\FileUpload::make('video_url')
                    ->label('Video')
                    ->directory('diamond_videos')
                    ->preserveFilenames()
                    ->acceptedFileTypes(['video/mp4', 'video/mpeg', 'video/quicktime']),
                Forms\Components\TextInput::make('original_price')
                    ->required()
                    ->label('Price')
                    ->numeric()
                    ->prefix('$'),
                Forms\Components\TextInput::make('mrp')
                    ->required()
                    ->label('MRP')
                    ->numeric()
                    ->prefix('$'),
                Forms\Components\TextInput::make('size')
                    ->required(),
                Forms\Components\TextInput::make('l_w_ratio')
                    ->required(),
                Forms\Components\TextInput::make('table')
                    ->required(),
                Forms\Components\TextInput::make('sku')
                    ->label('SKU')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('growth_type')
                    ->label('Growth Type')
                    ->required(),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('images')
                    ->getStateUsing(function ($record) {
                        return $record->images[0] ?? null;
                    })
                    ->circular(),
                Tables\Columns\TextColumn::make('shape'),
                Tables\Columns\TextColumn::make('original_price')
                    ->money()
                    ->sortable(),
                Tables\Columns\TextColumn::make('carat')
                    ->sortable(),
                Tables\Columns\TextColumn::make('cut'),
                Tables\Columns\TextColumn::make('color'),
                Tables\Columns\TextColumn::make('clarity'),
                Tables\Columns\TextColumn::make('size')
                    ->sortable(),
                Tables\Columns\TextColumn::make('l_w_ratio')
                    ->sortable(),
                Tables\Columns\TextColumn::make('table')
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
