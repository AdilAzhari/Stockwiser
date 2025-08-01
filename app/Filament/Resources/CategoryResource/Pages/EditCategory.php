<?php

namespace App\Filament\Resources\CategoryResource\Pages;

use App\Filament\Resources\CategoryResource;
use App\Traits\HasNotifications;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCategory extends EditRecord
{
    use HasNotifications;

    protected static string $resource = CategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
