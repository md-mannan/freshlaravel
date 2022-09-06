<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class CurdModel extends Model
{
    protected $table="customers";
    protected $primaryKey="id";
    public $incrementing=true;
    public $keyType='int';
    public $timestamps=false;
}
