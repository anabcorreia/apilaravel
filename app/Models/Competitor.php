<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class competitor extends Model
{
    use HasFactory;

    protected $table = "competitors";

    protected $fillable = [
        'name',
        'age',
        'Height',
        'Weight',
        'Sex',
        'CPF',
        'RG',
        'Team',
    ];
}
