<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hoadonnhap extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nhacungcap_id',
        'nhanvien_id',
        'ngaylap',
        'tongtien',
        'ghichu',
        'trangthai',
    ];
}
