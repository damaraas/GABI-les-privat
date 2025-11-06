<?php

namespace App\Filament\Resources\Blogs\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\FileUpload;
use Filament\Schemas\Schema;
use Filament\Forms\Components\ToggleButtons;
use Filament\Support\Icons\Heroicon;

class BlogForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required(),
                ToggleButtons::make('status')
                    ->inline()
                    ->options([
                        'draft' => 'Draft',
                        'published' => 'Published'
                    ])
                    ->icons([
                        'draft' => Heroicon::OutlinedPencil,
                        'published' => Heroicon::OutlinedCheckCircle,
                    ])
                    ->colors([
                        'draft' => 'info',
                        'published' => 'success',
                    ]),
                TextInput::make('meta_keywords')
                    ->placeholder('pisahkan dengan koma'),
                Textarea::make('meta_description'),
                // TextInput::make('slug')
                //     ->placeholder('pisahkan dengan strip (-)')
                //     ->required(),
                FileUpload::make('thumbnail')
                    ->disk('public')              // ← ini yang penting
                    ->directory('thumbnails')     // folder di dalam storage/app/public
                    ->preserveFilenames()
                    ->image(),
                RichEditor::make('content')
                    ->toolbarButtons([
                        ['bold', 'italic', 'underline', 'strike', 'subscript', 'superscript', 'link'],
                        ['h1', 'h2', 'h3', 'alignStart', 'alignCenter', 'alignEnd', 'alignJustify'],
                        ['blockquote', 'codeBlock', 'bulletList', 'orderedList'],
                        ['table', 'attachFiles'],
                        ['undo', 'redo'],
                    ])
                    ->required()
                    ->columnSpanFull(),
                DatePicker::make('published_at'),
            ]);
    }
}
