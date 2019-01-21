<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ThanhViens extends Model
{
    protected $table = 'thanhviens';
    // những dữ liệu cần lấy
    protected $fillable = ['user', 'pass', 'level'];

    public $timestamps = false;

}
