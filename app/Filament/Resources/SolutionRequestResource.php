<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SolutionRequestResource\Pages;
use App\Models\SolutionRequest;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class SolutionRequestResource extends Resource
{
    protected static ?string $model = SolutionRequest::class;

    protected static ?string $navigationIcon = 'heroicon-o-clipboard-document-list';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')->required(),
                Forms\Components\TextInput::make('email')->email()->required(),
                Forms\Components\TextInput::make('phone')->required(),
                Forms\Components\TextInput::make('company')->required(),
                Forms\Components\TextInput::make('type')->required(),
                Forms\Components\TextInput::make('budget')->required(),
                Forms\Components\TextInput::make('timeline')->required(),
                Forms\Components\TagsInput::make('features')->required(), // Renders array tags smoothly
                Forms\Components\Textarea::make('description')->columnSpanFull(),
                Forms\Components\Textarea::make('objective')->columnSpanFull(),
                Forms\Components\Textarea::make('audience')->columnSpanFull(),
                Forms\Components\TextInput::make('industry'),
                Forms\Components\TextInput::make('help'),
                Forms\Components\TextInput::make('method'),
                Forms\Components\TextInput::make('status'),
                Forms\Components\TextInput::make('project'),
                Forms\Components\TextInput::make('url'),
                Forms\Components\Textarea::make('custom_req')->columnSpanFull(),
                Forms\Components\Textarea::make('notes')->columnSpanFull(),
                Forms\Components\Toggle::make('agreed')->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('company')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('email')->searchable(),
                Tables\Columns\TextColumn::make('type')->badge(),
                Tables\Columns\TextColumn::make('budget'),
                Tables\Columns\TextColumn::make('timeline'),
                Tables\Columns\TextColumn::make('created_at')->dateTime()->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSolutionRequests::route('/'),
            'create' => Pages\CreateSolutionRequest::route('/create'),
            'edit' => Pages\EditSolutionRequest::route('/{record}/edit'),
        ];
    }
}
