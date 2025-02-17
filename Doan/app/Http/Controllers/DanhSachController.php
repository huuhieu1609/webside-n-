<?php

namespace App\Http\Controllers;

use App\Models\DanhSach;
use Illuminate\Http\Request;

class DanhSachController extends Controller
{
    public function danhsach(){
        $data = DanhSach::all();
        return response()->json([
            'data' => $data,
        ]);
    }
    public function themmoi(Request $request)
    {
        DanhSach::create([
            'ho_va_ten'            =>$request->ho_va_ten,
        'email'            =>$request->email,
        'so_dien_thoai'            =>$request->so_dien_thoai,
        'ngay_sinh'            =>$request->ngay_sinh,
        'tinh_trang'            =>$request->tinh_trang,
        'kich_hoat'            =>$request->kich_hoat,
        ]);
        return response()->json([
            'status'    => true,
            'message'   => 'Them thanh cong',
        ]);
    }
    public function xoa( Request $request){
        DanhSach::where('id', $request-> id )->delete();

        return response()->json([
            'status' => true,
            'message'=>'Xóa thành công!!'
        ]);
    }
    public function capnhat(Request $request){
        DanhSach::where('id', $request-> id )
        ->update([
            'ho_va_ten'            =>$request->ho_va_ten,
            'email'            =>$request->email,
            'so_dien_thoai'            =>$request->so_dien_thoai,
            'ngay_sinh'            =>$request->ngay_sinh,
            'tinh_trang'            =>$request->tinh_trang,
            'kich_hoat'            =>$request->kich_hoat,
        ]);
        return response()->json([
            'status' => true,
            'message'=>'cập nhật thành công!!'
        ]);
    }
}
