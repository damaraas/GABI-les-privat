<?php

namespace App\Filament\Resources\Blogs\Tables;

use Filament\Tables\Table;
use Illuminate\Support\Str;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Actions\ActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Enums\RecordActionsPosition;

class BlogsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('status')
                    ->badge()
                    ->sortable()
                    ->color(fn(string $state): string => match ($state) {
                        'draft' => 'gray',
                        'published' => 'success',
                    }),
                ImageColumn::make('thumbnail')
                    ->disk('public')          // <- WAJIB sama dengan FileUpload
                    ->label('Thumbnail'),
                TextColumn::make('title')
                    ->limit(50)
                    ->searchable(),
                TextColumn::make('meta_description')
                    ->limit(50)
                    ->searchable(),
                TextColumn::make('meta_keywords')
                    ->limit(50)
                    ->searchable(),
                TextColumn::make('slug')
                    ->limit(50)
                    ->searchable(),
                TextColumn::make('content')
                    ->getStateUsing(fn($record) => Str::limit(strip_tags($record->content), 80))
                    ->tooltip(fn($record) => strip_tags($record->content))
                    ->wrap(),
                TextColumn::make('published_at')
                    ->dateTime()
                    ->sortable(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                ActionGroup::make([
                    ViewAction::make(),
                    EditAction::make(),
                    DeleteAction::make(),
                ]),
            ], position: RecordActionsPosition::BeforeColumns)
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
