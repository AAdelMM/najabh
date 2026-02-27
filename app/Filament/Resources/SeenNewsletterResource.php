<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SeenNewsletterResource\Pages;
use App\Filament\Resources\SeenNewsletterResource\RelationManagers;
use App\Models\SeenNewsletter;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\TextColumn;


class SeenNewsletterResource extends Resource
{
    protected static ?string $model = SeenNewsletter::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $modelLabel = 'طلب النشرة البريدية'; // للمفرد
    protected static ?string $pluralModelLabel = 'طلبات النشرة البريدية'; // للجمع
    protected static ?string $navigationLabel = 'النشرة البريدية'; // الاسم في القائمة الجانبية


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('email')->label('البريد الإلكتروني')->searchable(),
                 Tables\Columns\TextColumn::make('status')
                ->label('الحالة')
                ->colors([
                    'success' => 'active',
                    'danger' => 'unsubscribed',
                ]),
             Tables\Columns\TextColumn::make('created_at')->label('تاريخ الاشتراك')->dateTime(),//
            ])
            ->filters([
           
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSeenNewsletters::route('/'),
            'create' => Pages\CreateSeenNewsletter::route('/create'),
            'edit' => Pages\EditSeenNewsletter::route('/{record}/edit'),
        ];
    }
}
