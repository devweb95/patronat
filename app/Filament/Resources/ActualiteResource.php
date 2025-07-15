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
                Forms\Components\FileUpload::make('image_avant')
                ->label('Image')
                ->image()
                ->disk('public')
                ->directory('actualites/images')
                ->maxSize(500)
                ->required(),
                Forms\Components\Textarea::make('contenu')
                ->required()
                ->columnSpanFull(),
                Forms\Components\FileUpload::make('images')
                ->label('galerie d\'images')
                ->multiple()
                ->image()
                ->disk('public')
                ->directory('actualites/galerie')
                ->maxSize(1000)
                ->maxFiles(10)
                ->enableDownload()
                ->enableOpen()
                ->imagePreviewHeight(150)
                ->columnSpanFull()
                ->required(),
                Forms\Components\DatePicker::make('date_de_publication'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                Tables\Columns\TextColumn::make('titre')
                ->searchable()
                ->sortable(),
                Tables\Columns\ImageColumn::make('image_avant')
                ->disk('public')
                ->height(50),
                Tables\Columns\TextColumn::make('contenu'),
                Tables\Columns\TextColumn::make('images')
                    ->label('Galerie d\'images')
                    ->formatStateUsing(function ($state) {
                        if (empty($state)) {
                            return '0 image';
                        }
                        
                        if (is_array($state)) {
                            $count = count($state);
                            return $count . ' image' . ($count > 1 ? 's' : '');
                        }
                        
                        if (is_string($state)) {
                            $decoded = json_decode($state, true);
                            if (is_array($decoded)) {
                                $count = count($decoded);
                            } else {
                                $count = substr_count($state, ',') + 1;
                            }
                            return $count . ' image' . ($count > 1 ? 's' : '');
                        }
                        
                        return '1 image';
                    })
                    ->badge()
                    ->color(function ($state) {
                        if (empty($state)) return 'gray';
                        
                        $count = 0;
                        if (is_array($state)) {
                            $count = count($state);
                        } elseif (is_string($state)) {
                            $decoded = json_decode($state, true);
                            if (is_array($decoded)) {
                                $count = count($decoded);
                            } else {
                                $count = substr_count($state, ',') + 1;
                            }
                        }
                        
                        return $count > 3 ? 'success' : ($count > 1 ? 'primary' : 'warning');
                    }),


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
            'index' => Pages\ListActualites::route('/'),
            'create' => Pages\CreateActualite::route('/create'),
            'edit' => Pages\EditActualite::route('/{record}/edit'),
        ];
    }
}
