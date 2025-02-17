<?php

namespace App\Http\Controllers;

use App\Http\Requests\VoucherRequest;
use App\Models\Voucher;
use Illuminate\Http\Request;

class VoucherController extends Controller
{
    public function voucher(){
        $data = Voucher::all();
        return response()->json([
            'data' => $data,
        ]);
    }
    public function themmoi(Request $request)
    {
        Voucher::create([
                'ma_code'      => $request->ma_code,
            'thoi_gian_bat_dau'      => $request->thoi_gian_bat_dau,
            'thoi_gian_ket_thuc'      => $request->thoi_gian_ket_thuc,
            'loai_giam'      => $request->loai_giam,
            'so_gia_giam'  => $request->so_gia_giam,
            'so_tien_doi_da'      => $request->so_tien_doi_da,
            'don_gia_doi_thieu'      => $request->don_gia_doi_thieu,
            'tinh_trang'      => $request->tinh_trang,
        ]);
        return response()->json([
            'status'    => true,
            'message'   => 'Them thanh cong',
        ]);
    }
    public function capnhat(VoucherRequest $request){
        Voucher::where('id', $request-> id )
        ->update([
           'ma_code'      => $request->ma_code,
            'thoi_gian_bat_dau'      => $request->thoi_gian_bat_dau,
            'thoi_gian_ket_thuc'      => $request->thoi_gian_ket_thuc,
            'loai_giam'      => $request->loai_giam,
            'so_gia_giam'  => $request->so_gia_giam,
            'so_tien_doi_da'      => $request->so_tien_doi_da,
            'don_gia_doi_thieu'      => $request->don_gia_doi_thieu,
            'tinh_trang'      => $request->tinh_trang,
        ]);
        return response()->json([
            'status' => true,
            'message'=>'cập nhật thành công!!'
        ]);
    }
    public function xoa( Request $request){
        voucher::where('id', $request-> id )->delete();

        return response()->json([
            'status' => true,
            'message'=>'Xóa thành công!!'
        ]);
    }
}
