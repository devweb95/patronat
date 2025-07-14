<?php

namespace App\Filament\Admin\Resources\ActualiteResource\Pages;

use App\Filament\Admin\Resources\ActualiteResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditActualite extends EditRecord
{
    protected static string $resource = ActualiteResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
