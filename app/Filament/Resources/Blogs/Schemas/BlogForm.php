<?php

namespace App\Filament\Resources\Blogs\Schemas;

use App\Enums\BlogType;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;

class BlogForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->label('Titre')
                    ->required(),
                Select::make('blog_category_id')
                    ->required()
                    ->relationship('category', 'name'),
                Select::make('type')
                    ->required()
                    ->options(BlogType::class)
                    ->default(BlogType::BLOG->value),
                TextInput::make('location')
                ->label('Lieu (pour les évenements seulement)'),
                DatePicker::make('running_date')
                    ->label('date (Optionelle)'),
                FileUpload::make('avatar')
                    ->label('Image')
                    ->image()
                    ->disk('public')
                    ->columnSpanFull()
                    ->directory('blogs')
                    ->visibility('public')
                    ->previewable()
                    ->required(),
                RichEditor::make('description')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }
}
