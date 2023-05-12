<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stream extends Model
{
    use HasFactory;

    public $fillable = [
        'name',
        'abbrev',
    ];

    public function students()
    {
        return $this->hasMany(Student::class);
    }
}
