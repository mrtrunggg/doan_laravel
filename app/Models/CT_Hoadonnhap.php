<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CT_Hoadonnhap extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'hoadonnhap_id',
        'sanpham_id',
        'soluong',
        'dongia',
        'thanhtien',
        'trangthai',
    ];
}
