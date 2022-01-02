<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nhanvien extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nhanvien_name',
        'cmnd',
        'email',
        'sdt',
        'sotaikhoan',
        'diachi',
        'hinhdaidien',
        'trangthai',
    ];
}
