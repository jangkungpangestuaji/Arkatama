<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users_Data extends Model
{
    use HasFactory;

    protected $table = "table_users_data";

    protected $fillable = [
        'name',
        'age',
        'city',
    ];
}
