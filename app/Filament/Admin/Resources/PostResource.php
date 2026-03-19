<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\PostResource\Pages;
use App\Filament\Admin\Resources\PostResource\RelationManagers;
use App\Models\Post;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class PostResource extends Resource
{
    protected static ?string $model = Post::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Panel';

    protected static ?string $navigationLabel = 'Artykuły';

    protected static ?string $modelLabel = 'Artykuł';

    protected static ?string $pluralModelLabel = 'Artykuły';

    public static function canViewAny(): bool
    {
        $user = auth()->user();

        if (! $user) {
            return false;
        }

        return $user->hasRole('admin') || $user->hasPermissionTo('posts.view');
    }

    public static function canCreate(): bool
    {
        $user = auth()->user();

        if (! $user) {
            return false;
        }

        return $user->hasRole('admin') || $user->hasPermissionTo('posts.create');
    }

    public static function canEdit($record): bool
    {
        $user = auth()->user();

        if (! $user) {
            return false;
        }

        return $user->hasRole('admin') || $user->hasPermissionTo('posts.edit');
    }

    public static function canDelete($record): bool
    {
        $user = auth()->user();

        if (! $user) {
            return false;
        }

        return $user->hasRole('admin') || $user->hasPermissionTo('posts.delete');
    }

    public static function canDeleteAny(): bool
    {
        return static::canDelete(null);
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                    ->required()
                    ->maxLength(255)
                    ->live()
                    ->afterStateUpdated(function (callable $set, $state): void {
                        $set('slug', Str::slug($state));
                    }),

                TextInput::make('slug')
                    ->required()
                    ->maxLength(255)
                    ->unique(ignoreRecord: true)
                    ->hint('Adres URL /post/{slug}'),

                Select::make('categories')
                    ->label('Kategorie usług')
                    ->multiple()
                    ->relationship('categories', 'name')
                    ->preload()
                    ->searchable(),

                FileUpload::make('image_path')
                    ->label('Zdjęcie')
                    ->image()
                    ->imagePreviewHeight('180')
                    ->directory('posts')
                    ->disk('public'),

                RichEditor::make('content')
                    ->label('Treść')
                    ->required()
                    ->columnSpanFull(),

                TextInput::make('meta_title')
                    ->label('SEO: meta title')
                    ->helperText('Krótki tytuł (do ok. 60 znaków), zawierający główną frazę, np. „Smart Home – kompleksowe instalacje dla domu | CORPOTECH”.')
                    ->maxLength(255),

                Textarea::make('meta_description')
                    ->label('SEO: meta description')
                    ->rows(3)
                    ->helperText('2–3 zdania (do ok. 155 znaków), naturalnie opisujące usługę i korzyści, np. „Projektujemy i wdrażamy systemy Smart Home, które zwiększają bezpieczeństwo i komfort Twojego domu.”')
                    ->maxLength(2000),

                TextInput::make('meta_keywords')
                    ->label('SEO: meta keywords')
                    ->helperText('Opcjonalne. Wypisz kilka fraz oddzielonych przecinkami, np. „smart home, automatyka budynkowa, inteligentny dom, system alarmowy”.')
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('categories.name')
                    ->label('Kategorie')
                    ->badge()
                    ->separator(', '),

                TextColumn::make('author.name')
                    ->label('Autor')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: false),

                TextColumn::make('created_at')
                    ->label('Utworzono')
                    ->dateTime('d.m.Y H:i')
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                EditAction::make(),
                DeleteAction::make(),
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
            'index' => Pages\ListPosts::route('/'),
            'create' => Pages\CreatePost::route('/create'),
            'edit' => Pages\EditPost::route('/{record}/edit'),
        ];
    }
}
