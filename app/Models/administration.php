<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;
class administration extends Model
{
    use HasFactory;
    protected  $fillable = ['email','mot_de_passe','photo_profile'];
    
}
