<?php

namespace App\Filament\Resources\SolutionRequestResource\Pages;

use App\Filament\Resources\SolutionRequestResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSolutionRequest extends EditRecord
{
    protected static string $resource = SolutionRequestResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
