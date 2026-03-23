<?php

namespace App\Filament\Resources\SeenArticles\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Support\Icons\Heroicon;

class SeenArticlesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->label('عنوان المقالة')
                    ->searchable(),
                TextColumn::make('subtitle')
                    ->label(' العنوان الفرعي')
                    ->searchable(),
                ImageColumn::make('image')
                    ->label('صورة المقال')
                    ->disk('public')
                    ->visibility('public'),
                // TextColumn::make('slug')
                //     ->label('العنوان اللطيف')
                //     ->searchable(),
                IconColumn::make('is_published')
                    ->label('حالة النشر')
                    ->boolean(),
                TextColumn::make('published_at')
                    ->Icon('heroicon-m-check')
                    ->label('وقت النشر')
                    ->dateTime()
                    ->sortable(),
                TextColumn::make('created_at')
                    ->label('تمت الاضافة فى')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->label('تم التعديل فى')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: false),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
