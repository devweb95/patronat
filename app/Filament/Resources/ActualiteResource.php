<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ActualiteResource\Pages;
use App\Filament\Resources\ActualiteResource\RelationManagers;
use App\Models\Actualite;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ActualiteResource extends Resource
{
    protected static ?string $model = Actualite::class;

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
                Forms\Components\FileUpload::make(name: 'image_avant')
                ->required()
                ->maxSize(500)
                ->label('Image')
                ->directory('actualites'),
                Forms\Components\Textarea::make('contenu')
                ->required()
                ->columnSpanFull(),  
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
                Tables\Columns\TextColumn::make('contenu'),
                Tables\Columns\TextColumn::make('date_de_publication')
                ->dateTime()
                ->sortable(),
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
            'index' => Pages\ListActualites::route('/'),
            'create' => Pages\CreateActualite::route('/create'),
            'edit' => Pages\EditActualite::route('/{record}/edit'),
        ];
    }
}
