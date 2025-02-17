<template>
    <div>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
            integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row text-nowrap">
                            <div class="col-lg-6">
                                <h4><b>Danh Sách Shipper</b></h4>
                            </div>
                            <div class="col-lg-6 text-end">
                                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#themmoi"><i
                                        class="fa-solid fa-plus"></i> Thêm Mới Shipper</button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover ">
                                <thead>
                                    <tr class="text-center">
                                        <th>STT</th>
                                        <th>Ho Và Tên</th>
                                        <th>Số Điện Thoại</th>
                                        <th>Email</th>
                                        <th>CMND</th>
                                        <th>Địa Chỉ Thường Trú</th>
                                        <th>Tỉnh Thành</th>
                                        <th>Quận Huyện</th>
                                        <th>Tọa Độ X</th>
                                        <th>Tọa Độ Y</th>
                                        <th>Trạng Thái</th>
                                        <th>Tình Trạng</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <template v-for="(value, index) in danhsachshipper" :key="index">
                                    <tbody>
                                        <tr class="text-center">
                                            <td>{{ index + 1 }}</td>
                                            <td>{{ value.ho_va_ten }}</td>
                                            <td>{{ value.so_dien_thoai }}</td>
                                            <td>{{ value.email }}</td>
                                            <td>{{ value.cmnd }}</td>
                                            <td>{{ value.dia_chi_thuong_tru }}</td>
                                            <td>{{ value.tinh_thanh }}</td>
                                            <td>{{ value.quan_huyen }}</td>
                                            <td>{{ value.toa_do_x }}</td>
                                            <td>{{ value.toa_do_y }}</td>
                                            <td>
                                                <button class="btn btn-success" v-if="value.trang_thai == 0">Hoạt
                                                    Động</button>
                                                <button class="btn btn-danger" v-if="value.trang_thai == 1">Tạm
                                                    Tắt</button>
                                            </td>
                                            <td>
                                                <button class="btn btn-success" v-if="value.tinh_trang == 0">Đã Kích
                                                    Hoạt</button>
                                                <button class="btn btn-info" v-if="value.tinh_trang == 1">Chưa Kích
                                                    Hoạt</button>
                                            </td>
                                            <td class="text-nowrap">
                                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                    data-bs-target="#capnhap"
                                                    v-on:click="Object.assign(CapNhapDanhSach, value)">
                                                    cập nhập
                                                </button>
                                                <button type="button" class="btn btn-danger ms-3" data-bs-toggle="modal"
                                                    data-bs-target="#xoa"
                                                    v-on:click="Object.assign(XoaDanhSach, value)">
                                                    Xóa
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </template>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="themmoi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Thêm Mới Danh Sách Shipper</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-6">
                                
                                    <label for="">Họ Và Tên</label>
                                    <input v-model="abc.ho_va_ten" type="text" class="form-control">
                                    <label for="">Số Điện Thoại</label>
                                    <input v-model="abc.so_dien_thoai" type="text" class="form-control">
                                    <label for="">Email</label>
                                    <input v-model="abc.email" type="text" class="form-control">
                                    <label for="">CMND</label>
                                    <input v-model="abc.cmnd" type="text" class="form-control">
                                    <label for="">Địa Chỉ Thường Trú</label>
                                    <input v-model="abc.dia_chi_thuong_tru" type="text" class="form-control">
                                   
                                
                            </div>
                            <div class="col-lg-6">
                                <label for="">Tỉnh Thành</label>
                                <input v-model="abc.tinh_thanh" type="text" class="form-control">
                                    <label for="">Quận Huyện</label>
                                    <input v-model="abc.quan_huyen" type="text" class="form-control">
                                    <label for="">Toạ Độ X</label>
                                    <input v-model="abc.toa_do_x" type="text" class="form-control">
                                    <label for="">Toạ Độ Y</label>
                                    <input v-model="abc.toa_do_y" type="text" class="form-control">
                                    <label for="">Trạng Thái</label>
                                    <select v-model="abc.trang_thai" name="" id="" class="form-control">
                                        <option value="0">Hoạt Động</option>
                                        <option value="1">Đã Chặn</option>
                                    </select>
                                    
                               
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <label for="">Tình Trạng</label>
                                    <select v-model="abc.tinh_trang" name="" id="" class="form-control">
                                        <option value="0">Đã Kích Hoạt</option>
                                        <option value="1">Chưa Kích Hoạt</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!-- <label for="">Họ Và Tên</label>
                      <input v-model="abc.ho_va_ten" type="text" class="form-control">
                      <label for="">Số Điện Thoại</label>
                      <input v-model="abc.so_dien_thoai" type="text" class="form-control">
                      <label for="">Email</label>
                      <input v-model="abc.email" type="text" class="form-control">
                      <label for="">CMND</label>
                      <input v-model="abc.cmnd" type="text" class="form-control">
                      <label for="">Địa Chỉ Thường Trú</label>
                      <input v-model="abc.dia_chi_thuong_tru" type="text" class="form-control">
                      <label for="">Tỉnh Thành</label>
                      <input v-model="abc.tinh_thanh" type="text" class="form-control"> -->
                        <!-- <label for="">Quận Huyện</label>
                      <input v-model="abc.quan_huyen" type="text" class="form-control">
                      <label for="">Toạ Độ X</label>
                      <input v-model="abc.toa_do_x" type="text" class="form-control">
                      <label for="">Toạ Độ Y</label>
                      <input v-model="abc.toa_do_y" type="text" class="form-control">
                      <label for="">Trạng Thái</label>
                      <select v-model="abc.trang_thai" name="" id="" class="form-control">
                        <option value="0">Hoạt Động</option>
                        <option value="1">Đã Chặn</option>
                      </select>
                      <label for="">Tình Trạng</label>
                      <select v-model="abc.tinh_trang" name="" id="" class="form-control">
                        <option value="0">Đã Kích Hoạt</option>
                        <option value="1">Chưa Kích Hoạt</option>
                      </select> -->
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal"
                            v-on:click="themdulieu()">Chấp
                            nhận</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="xoa" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Xóa</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="alert alert-danger" role="alert">

                            bạn có chắc chắn muốn xóa không !!
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">đóng</button>
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal"
                            v-on:click="xoadanhsach()">Xóa</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="capnhap" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Cập Nhập</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <label for="">Họ Và Tên</label>
                        <input v-model="CapNhapDanhSach.ho_va_ten" type="text" class="form-control">
                        <label for="">Số Điện Thoại</label>
                        <input v-model="CapNhapDanhSach.so_dien_thoai" type="text" class="form-control">
                        <label for="">Email</label>
                        <input v-model="CapNhapDanhSach.email" type="text" class="form-control">
                        <label for="">CMND</label>
                        <input v-model="CapNhapDanhSach.cmnd" type="text" class="form-control">
                        <label for="">Địa Chỉ Thường Trú</label>
                        <input v-model="CapNhapDanhSach.dia_chi_thuong_tru" type="text" class="form-control">
                        <label for="">Tỉnh Thành</label>
                        <input v-model="CapNhapDanhSach.tinh_thanh" type="text" class="form-control">
                        <label for="">Quận Huyện</label>
                        <input v-model="CapNhapDanhSach.quan_huyen" type="text" class="form-control">
                        <label for="">Toạ Độ X</label>
                        <input v-model="CapNhapDanhSach.toa_do_x" type="text" class="form-control">
                        <label for="">Toạ Độ Y</label>
                        <input v-model="CapNhapDanhSach.toa_do_y" type="text" class="form-control">
                        <label for="">Trạng Thái</label>
                        <select v-model="CapNhapDanhSach.trang_thai" name="" id="" class="form-control">
                            <option value="0">Hoạt Động</option>
                            <option value="1">Đã Chặn</option>
                        </select>
                        <label for="">Tình Trạng</label>
                        <select v-model="CapNhapDanhSach.tinh_trang" name="" id="" class="form-control">
                            <option value="0">Đã Kích Hoạt</option>
                            <option value="1">Chưa Kích Hoạt</option>
                        </select>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">đóng</button>
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal"
                            v-on:click="capnhapdanhsach()">cập
                            nhật</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import axios from 'axios';
export default {
    data() {
        return {
            danhsachshipper: [],
            CapNhapDanhSach: { ho_va_ten: '', so_dien_thoai: '', email: '', cmnd: '', dia_chi_thuong_tru: '', tinh_thanh: '', quan_huyen: '', toa_do_x: '', toa_do_y: '', trang_thai: '', tinh_trang: '' },
            XoaDanhSach: { ho_va_ten: '', so_dien_thoai: '', email: '', cmnd: '', dia_chi_thuong_tru: '', tinh_thanh: '', quan_huyen: '', toa_do_x: '', toa_do_y: '', trang_thai: '', tinh_trang: '' },
            abc: { ho_va_ten: '', so_dien_thoai: '', email: '', cmnd: '', dia_chi_thuong_tru: '', tinh_thanh: '', quan_huyen: '', toa_do_x: '', toa_do_y: '', trang_thai: '', tinh_trang: '' },

        }
    },
    mounted() {
        this.laydata();
    },
    methods: {
        laydata() {
            axios
                .get('http://127.0.0.1:8000/api/danh-sach-shipper')
                .then(res => {
                    this.danhsachshipper = res.data.data;
                })
                .catch(error => {
                    console.log(error);
                });
        },
        themdulieu() {
            axios
                .post('http://127.0.0.1:8000/api/danh-sach-shipper/them-moi', this.abc)
                .then(res => {
                    if (res.data.status == true) {

                        this.$toast.success(res.data.message);
                        this.laydata();
                    } else {

                        this.$toast.error('Thêm Mới Thất Bại');

                    }
                })
                .catch(error => { // Dữ liệu mà server trả về khi bị lỗi
                    var obj = error.response.data.errors;
                    var result = Object.keys(obj).map((key) => [key, obj[key]]);
                    result.forEach((value_1, key_1) => {
                        var xxx = value_1[1];
                        xxx.forEach((value, key) => {
                            // console.log(value);
                            this.$toast.error(value);
                        });
                    });
                });
        },
        xoadanhsach() {
            axios
                .post('http://127.0.0.1:8000/api/danh-sach-shipper/xoa', this.XoaDanhSach)
                .then(res => {
                    if (res.data.status == true) {

                        this.$toast.success(res.data.message);
                        this.laydata();
                    } else {

                        this.$toast.error('Xóa Thất Bại');

                    }
                })
                .catch(error => { // Dữ liệu mà server trả về khi bị lỗi
                    var obj = error.response.data.errors;
                    var result = Object.keys(obj).map((key) => [key, obj[key]]);
                    result.forEach((value_1, key_1) => {
                        var xxx = value_1[1];
                        xxx.forEach((value, key) => {
                            // console.log(value);
                            this.$toast.error(value);
                        });
                    });
                });
        },
        capnhapdanhsach() {
            axios
                .post('http://127.0.0.1:8000/api/danh-sach-shipper/cap-nhat', this.CapNhapDanhSach)
                .then(res => {
                    if (res.data.status == true) {

                        this.$toast.success(res.data.message);
                        this.laydata();
                    } else {

                        this.$toast.error('Cập Nhật Thất Bại');

                    }
                })
                .catch(error => { // Dữ liệu mà server trả về khi bị lỗi
                    var obj = error.response.data.errors;
                    var result = Object.keys(obj).map((key) => [key, obj[key]]);
                    result.forEach((value_1, key_1) => {
                        var xxx = value_1[1];
                        xxx.forEach((value, key) => {
                            // console.log(value);
                            this.$toast.error(value);
                        });
                    });
                });
        },
    }
}
</script>
<style></style>