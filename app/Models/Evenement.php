<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evenement extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_evenement';
    protected $fillable = [
        'nom',
        'lieu',
        'date',
        'description',
        'photo',
    ];





}
