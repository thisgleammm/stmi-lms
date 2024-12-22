<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enrollment extends Model
{
    use HasFactory;

    protected $table = "enrollment";
    protected $primaryKey = "id_enrollments";
    protected $keyType = "int";
}
