<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class account extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $fillable=['email','password','first_name','last_name'];
}
