<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lib extends Model
{
    use HasFactory;

    protected $table = 'lib';

    protected $fillable = ['name'];

    public function books()
    {
        return $this->hasMany(Book::class, 'lib_id' , 'id');
    }
}
