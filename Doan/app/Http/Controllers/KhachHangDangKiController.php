<?php

namespace App\Http\Controllers;

use App\Models\khachhangdangki;
use Illuminate\Http\Request;

class KhachHangDangKiController extends Controller
{
    public function dangky(){
        $data = khachhangdangki::all();
        return response()->json([
            'data' => $data,
        ]);
    }
    public function themmoi(Request $request)
    {
        khachhangdangki::create([
           'ho_va_ten'     =>$request->ho_va_ten,
            'email'     =>$request->email,
            'so_dien_thoai'     =>$request->so_dien_thoai,
            'ngay_sinh'     =>$request->ngay_sinh,
            'mat_khau'     =>$request->mat_khau,
            'xac_nhan_mat_khau'     =>$request->xac_nhan_mat_khau,
        ]);
        return response()->json([
            'status'    => true,
            'message'   => 'Them thanh cong',
        ]);
    }
}
