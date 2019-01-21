<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hocphan extends Model
{
    protected $table = 'hocphan';
    // những dữ liệu cần lấy
    protected $fillable = ['id', 'monhoc', 'giatien'];
}
