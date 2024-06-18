<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class users_info extends Model
{
    use HasFactory;
    protected $table = 'users_infos';
    protected $fillable= ['name','nid','bg','phone','city','thana','pass'];
}
