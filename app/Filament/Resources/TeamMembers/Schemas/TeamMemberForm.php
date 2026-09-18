<?php

namespace App\Filament\Resources\TeamMembers\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;
use Filament\Forms\Components\FileUpload;

class TeamMemberForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('firstname')
                    ->required(),
                TextInput::make('lastname')
                    ->required(),
                TextInput::make('email')
                    ->label('Email address')
                    ->email()
                    ->required(),
                TextInput::make('phone')
                    ->tel(),
                TextInput::make('position')
                    ->required(),
                FileUpload::make('profile_picture')
                    ->visibility('public')
                    ->previewable()
                    ->directory('members')
                    ->image()
                    ->disk('public')
                    ->required(),
                Textarea::make('bio')
                    ->columnSpanFull(),
            ]);
    }
}
