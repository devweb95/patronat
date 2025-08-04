<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ServiceResource\Pages;
use App\Filament\Resources\ServiceResource\RelationManagers;
use App\Models\Service;
use Faker\Provider\Image;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ServiceResource extends Resource
{
    protected static ?string $model = Service::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                Forms\Components\TextInput::make('titre')
                ->required()
                ->maxLength(255),
                Forms\Components\Hidden::make('user_id')
                ->dehydrateStateUsing(fn ($state) => auth()->id()),
                Forms\Components\FileUpload::make('image_avant')
                ->required()
                ->maxSize(size: 3000)
                ->label('Image')
                ->directory('services'),
                Forms\Components\Textarea::make('contenu')
                ->required()
                ->columnSpanFull(),
                Forms\Components\FileUpload::make('galerie')
                ->label('galerie')
                ->disk('public')
                ->directory('services/galeries')
                ->image()
                ->multiple()
                ->reorderable()
                ->imagePreviewHeight('150')
                ->maxFiles(4)
                ->helperText('Vous pouvez télécharger jusqu\'à 4 images pour la galerie.'),
                Forms\Components\DateTimePicker::make('date_de_publication')
                ->default(now()),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                Tables\Columns\TextColumn::make('titre')
                ->sortable(),
                Tables\Columns\ImageColumn::make('image_avant')
                ->disk('public'),
                Tables\Columns\ImageColumn::make('galerie')
                ->label('Images galerie')
                ->hidden(),
                Tables\Columns\TextColumn::make('contenu')
                ->limit(20),
                Tables\Columns\TextColumn::make('date_de_publication')
                ->dateTime()
                ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                ->dateTime()
                ->sortable()
                ->toggleable(isToggledHiddenByDefault:true),
                Tables\Columns\TextColumn::make('updated_at')
                ->dateTime()
                ->sortable()
                ->toggleable(isToggledHiddenByDefault:true),
                            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->defaultSort('date_de_publication', 'desc');
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
            'index' => Pages\ListServices::route('/'),
            'create' => Pages\CreateService::route('/create'),
            'edit' => Pages\EditService::route('/{record}/edit'),
        ];
    }
}
