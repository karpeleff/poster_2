<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Advert extends Model
{
    use HasFactory;
    protected $fillable = [
        'autor',
        'tel',
        'email',
        'sity',
        'cat',
        'header',
        'text',
        'image',
        'status'
    ];
}
