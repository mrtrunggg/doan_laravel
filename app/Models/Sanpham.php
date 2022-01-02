<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sanpham extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'sanpham_name',
        'loaisanpham',
        'thuonghieu',
        'dongia',
        'soluong',
        'mota',
        'chatlieu',
        'kichthuoc',
        'hinhanh',
        'nhacungcap_id',
        'trangthai',
    ];
}
