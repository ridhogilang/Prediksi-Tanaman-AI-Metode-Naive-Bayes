<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataTesting extends Model
{
    use HasFactory;

    protected $table = 'data_testing';

    protected $fillable = [
        'oksigen',
        'tekstur',
        'kelembapan',
        'suhu',
        'keasaman',
        'tanaman',
    ];
}
