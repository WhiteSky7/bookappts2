<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $table = 'book';

    protected $fillable = ['lib_id', 'name' ];

    public function lib()
    {
        return $this->belongsTo(Lib::class);
    }
}
