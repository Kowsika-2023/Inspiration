<?php

namespace Fhsinchy\Inspire\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inspiration extends Model
{
    use HasFactory;

    protected $fillable = ['quote', 'author'];
}
