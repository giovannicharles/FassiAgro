<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use HasFactory;




    protected $table = 'admins';
    protected $primaryKey = 'ID_Admin';
    public $timestamps = true;

    protected $fillable = [
        'Nom',
        'password',
        'email',
        'role'
    ];

    protected $hidden = [
        'password',
    ];


}
