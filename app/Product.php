<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product';
    // những dữ liệu cần lấy
    protected $fillable = ['id', 'name', 'price', 'cate_id'];

    public $timestamps = false;

    public function images(){
        return $this->hasMany('App\Images');
    }
}
