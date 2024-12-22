<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class courseModel extends Model
{
    protected $table = "courses";
    protected $primaryKey = "id_course";
    protected $keyType = "int";
}
