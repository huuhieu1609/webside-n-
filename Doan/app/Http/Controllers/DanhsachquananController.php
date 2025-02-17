<?php

namespace App\Http\Controllers;

use App\Models\danhsachquanan;
use Illuminate\Http\Request;

class DanhsachquananController extends Controller
{
    public function danhsach(){
        $data = danhsachquanan::all();
        return response()->json([
            'data' => $data,
        ]);
    }
    public function themmoi(Request $request)
    {
        danhsachquanan::create([
           'ten_quan_an'         =>$request->ten_quan_an,
        'email'         =>$request->email,
        'so_dien_thoai'         =>$request->so_dien_thoai,
        'chi_tiet'         =>$request->chi_tiet,
        'trang_thai'         =>$request->trang_thai,
        'kich_hoat'         =>$request->kich_hoat,
        ]);
        return response()->json([
            'status'    => true,
            'message'   => 'Them thanh cong',
        ]);
    }
    public function capnhat(Request $request){
        danhsachquanan::where('id', $request-> id )
        ->update([
            'ten_quan_an'         =>$request->ten_quan_an,
        'email'         =>$request->email,
        'so_dien_thoai'         =>$request->so_dien_thoai,
        'chi_tiet'         =>$request->chi_tiet,
        'trang_thai'         =>$request->trang_thai,
        'kich_hoat'         =>$request->kich_hoat,
        ]);
        return response()->json([
            'status' => true,
            'message'=>'cập nhật thành công!!'
        ]);
    }public function xoa( Request $request){
        danhsachquanan::where('id', $request-> id )->delete();

        return response()->json([
            'status' => true,
            'message'=>'Xóa thành công!!'
        ]);
    }


}
