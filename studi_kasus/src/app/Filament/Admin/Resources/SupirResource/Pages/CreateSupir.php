<?php

namespace App\Filament\Admin\Resources\SupirResource\Pages;

use App\Filament\Admin\Resources\SupirResource;
use Filament\Resources\Pages\CreateRecord;

class CreateSupir extends CreateRecord
{
    protected static string $resource = SupirResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
