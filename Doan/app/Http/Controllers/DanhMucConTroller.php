<?php

namespace App\Http\Controllers;

use App\Http\Requests\DanhMucRequest;
use App\Models\DanhMuc;
use Illuminate\Http\Request;

class DanhMucConTroller extends Controller
{
    public function danhmuc(){
        $data = DanhMuc::all();
        return response()->json([
            'data' => $data,
        ]);
    }
    public function themmoi(Request $request)
    {
        DanhMuc::create([
            'ten_danh_muc'  =>$request->ten_danh_muc,
            'mo_ta'  =>$request->mo_ta,
            'tinh_trang'  =>$request->tinh_trang,
        ]);
        return response()->json([
            'status'    => true,
            'message'   => 'Them thanh cong',
        ]);
    }
    public function capnhat(Request $request){
        DanhMuc::where('id', $request-> id )
        ->update([
           'ten_danh_muc'  =>$request->ten_danh_muc,
            'mo_ta'  =>$request->mo_ta,
            'tinh_trang'  =>$request->tinh_trang,
        ]);
        return response()->json([
            'status' => true,
            'message'=>'cập nhật thành công!!'
        ]);
    }
    public function xoa( Request $request){
        DanhMuc::where('id', $request-> id )->delete();

        return response()->json([
            'status' => true,
            'message'=>'Xóa thành công!!'
        ]);
    }
}
