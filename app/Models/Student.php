<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    public $fillable = [
      'stream_id',
       'form',
       'admno',
       'name',
       'gender',
       'kcpe'
    ];
    
    public function stream()
    {
        return $this->belongsTo(Stream::class);
    }
}
