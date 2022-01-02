<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class taikhoan extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table = 'taikhoan';
    // protected $fillable = [
    //     'tentaikhoan',
    //     'matkhau',
    //     'khachhang_id',
    //     'nhanvien_id',
    //     'admin',
    //     'trangthai',
    // ];
    // /**
    //  * The attributes that should be hidden for serialization.
    //  *
    //  * @var array<int, string>
    //  */
    // protected $hidden = [
    //     'matkhau',
    // ];

}
