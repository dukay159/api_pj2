<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'name', 'phone', 'address', 'email', 'company'
    ];
    protected $primaryKey = 'id';
    protected $table = 'users';
    use HasFactory;
}
