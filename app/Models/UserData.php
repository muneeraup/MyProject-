<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserData extends Model
{
    public $timestamps = false;
    use HasFactory;
    protected $table="_registration";
    protected $primarykey="id";
}
