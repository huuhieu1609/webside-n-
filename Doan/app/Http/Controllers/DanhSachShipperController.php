<?php

namespace App\Http\Controllers;

use App\Models\DanhSachShipper;
use Illuminate\Http\Request;

class DanhSachShipperController extends Controller
{
    public function danhsachshipper(){
        $data = DanhSachShipper::all();
        return response()->json([
            'data' => $data,
        ]);
    }
    public function themmoi(Request $request)
    {
        DanhSachShipper::create([
           'ho_va_ten'         =>$request->ho_va_ten,
        'so_dien_thoai'         =>$request->so_dien_thoai,
        'email'         =>$request->email,
        'cmnd'         =>$request->cmnd,
        'dia_chi_thuong_tru'         =>$request->dia_chi_thuong_tru,
        'tinh_thanh'         =>$request->tinh_thanh,
        'quan_huyen'         =>$request->quan_huyen,
        'toa_do_x'         =>$request->toa_do_x,
        'toa_do_y'         =>$request->toa_do_y,
        'trang_thai'         =>$request->trang_thai,
        'tinh_trang'         =>$request->tinh_trang,
        ]);
        return response()->json([
            'status'    => true,
            'message'   => 'Them thanh cong',
        ]);
    }
    public function xoa( Request $request){
        DanhSachShipper::where('id', $request-> id )->delete();

        return response()->json([
            'status' => true,
            'message'=>'Xóa thành công!!'
        ]);
    }
    public function capnhat(Request $request){
        DanhSachShipper::where('id', $request-> id )
        ->update([
            'ho_va_ten'         =>$request->ho_va_ten,
        'so_dien_thoai'         =>$request->so_dien_thoai,
        'email'         =>$request->email,
        'cmnd'         =>$request->cmnd,
        'dia_chi_thuong_tru'         =>$request->dia_chi_thuong_tru,
        'tinh_thanh'         =>$request->tinh_thanh,
        'quan_huyen'         =>$request->quan_huyen,
        'toa_do_x'         =>$request->toa_do_x,
        'toa_do_y'         =>$request->toa_do_y,
        'trang_thai'         =>$request->trang_thai,
        'tinh_trang'         =>$request->tinh_trang,
        ]);
        return response()->json([
            'status' => true,
            'message'=>'cập nhật thành công!!'
        ]);
    }
}
