<?php

use App\Http\Controllers\DanhMucConTroller;
use App\Http\Controllers\DanhSachController;
use App\Http\Controllers\DanhsachquananController;
use App\Http\Controllers\DanhSachShipperController;
use App\Http\Controllers\KhachHangDangKiController;
use App\Http\Controllers\VoucherController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

route::get('voucher',[VoucherController::class,'voucher']);
route::post('them-moi',[VoucherController::class,'themmoi']);
route::post('capnhat',[VoucherController::class,'capnhat']);
route::post('xoa',[VoucherController::class,'xoa']);

route::get('danhmuc',[DanhMucConTroller::class,'danhmuc']);
route::post('themmoi',[DanhMucConTroller::class,'themmoi']);
route::post('cap-nhat',[DanhMucConTroller::class,'capnhat']);
route::post('xoa-danh-muc',[DanhMucConTroller::class,'xoa']);
//danh sách quán ăn
route::get('danh-sach-quan-an',[DanhsachquananController::class,'danhsach']);
route::post('them-moi/danh-sach-quan-an',[DanhsachquananController::class,'themmoi']);
route::post('cap-nhat/danh-sach-quan-an',[DanhsachquananController::class,'capnhat']);
route::post('xoa/danh-sach-quan-an',[DanhsachquananController::class,'xoa']);

//khách hàng
route::get('danh-sach',[DanhSachController::class,'danhsach']);
route::post('khach-hang/them-moi',[DanhSachController::class,'themmoi']);
route::post('khach-hang/xoa',[DanhSachController::class,'xoa']);
route::post('khach-hang/cap-nhat',[DanhSachController::class,'capnhat']);
//đăng ký khách hàng
route::get('dang-ky-khach-hang',[KhachHangDangKiController::class,'dangky']);
route::post('dang-ky-khach-hang/them-moi',[KhachHangDangKiController::class,'themmoi']);


//shipper
route::get('danh-sach-shipper',[DanhSachShipperController::class,'danhsachshipper']);
route::post('danh-sach-shipper/them-moi',[DanhSachShipperController::class,'themmoi']);
route::post('danh-sach-shipper/xoa',[DanhSachShipperController::class,'xoa']);
route::post('danh-sach-shipper/cap-nhat',[DanhSachShipperController::class,'capnhat']);

