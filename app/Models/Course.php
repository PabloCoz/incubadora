<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $guarded = ['id', 'status'];
    protected $withCount = ['students', 'reviews'];
    const ELABORACION = 1;
    const REVISIÓN = 2;
    const PUBLICADO = 3;
}
