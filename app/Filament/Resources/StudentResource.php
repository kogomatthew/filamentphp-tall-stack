<?php

namespace App\Filament\Resources;

use App\Filament\Resources\StudentResource\Pages;
use App\Filament\Resources\StudentResource\RelationManagers;
use App\Models\Student;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

use Filament\Tables\Filters\SelectFilter;

use Filament\Forms\Components\Select;

class StudentResource extends Resource {
    protected static ?string $model = Student::class;
    // students icons
    protected static ?string $navigationIcon = 'heroicon-o-user-group';

   


    public static function form( Form $form ): Form {
        return $form
        ->schema( [
            Select::make( 'stream_id' )
            ->relationship( 'stream', 'name' )->required(),
            Select::make( 'form' ) ->options( [
                '1' => 'Form 1',
                '2' => 'Form 2',
                '3' => 'Form 3',
                '4' => 'Form 4'
            ] )->required(),
            Forms\Components\TextInput::make( 'admno' )
            ->required()
            ->maxLength( 255 ),
            Forms\Components\TextInput::make( 'name' )
            ->required()
            ->maxLength( 255 ),
            Select::make( 'gender' ) ->options( [
                'M' => 'Male',
                'F' => 'Female'
            ] )->required(),

            Forms\Components\TextInput::make( 'kcpe' )
            ->required(),
        ] );
    }

    public static function table( Table $table ): Table {
        return $table
        ->columns( [
            Tables\Columns\TextColumn::make( 'admno' ),
            Tables\Columns\TextColumn::make( 'name' ),
            Tables\Columns\TextColumn::make( 'gender' ),
            Tables\Columns\TextColumn::make( 'kcpe' ),
            Tables\Columns\TextColumn::make( 'created_at' )
            ->dateTime(),
            Tables\Columns\TextColumn::make( 'updated_at' )
            ->dateTime(),
        ] )
        ->filters( [
            SelectFilter::make( 'form' ) ->options( [
                '1' => 'Form 1',
                '2' => 'Form 2',
                '3' => 'Form 3',
                '4' => 'Form 4'
            ] ),
            SelectFilter::make( 'stream' )->relationship( 'stream', 'name' ),
            SelectFilter::make( 'gender' )
            ->options( [
                'M' => 'Male',
                'F' => 'Female'
            ] ),
        ] )
        ->actions( [
            Tables\Actions\EditAction::make(),
            Tables\Actions\DeleteAction::make(),
        ] )
        ->bulkActions( [
            Tables\Actions\DeleteBulkAction::make(),
        ] );
    }

    public static function getPages(): array {
        return [
            'index' => Pages\ManageStudents::route( '/' ),
        ];
    }
}
