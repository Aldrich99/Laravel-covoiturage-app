<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class abonnementcontrollers extends Model
{
    use HasFactory;
    protected $fillable = ['ip_client' , 'email_visiteurs'];
}
