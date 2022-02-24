<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class state_lga extends Model
{
    use HasFactory;
    protected $fillable = ['location'];
}
