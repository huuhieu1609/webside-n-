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
                                <h4><b>Danh Sách Quán Ăn</b></h4>
                            </div>
                            <div class="col-lg-6 text-end">
                                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#themmoi"><i
                                        class="fa-solid fa-plus"></i> Thêm Mới</button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr class="text-center">
                                    <th>#</th>
                                    <th>Tên Quán Ăn</th>
                                    <th>Email</th>
                                    <th>Số Điện Thoại</th>
                                    <th>Chi Tiết</th>
                                    <th>Trạng Thái</th>
                                    <th>Kích Hoạt</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <template v-for="(value, index) in danhsachquanan" :key="index">
                                    <tr class="text-center">
                                        <td>{{ index + 1 }}</td>
                                        <td>{{ value.ten_quan_an }}</td>
                                        <td>{{ value.email }}</td>
                                        <td>{{ value.so_dien_thoai }}</td>
                                        <td>
                                            <button class="btn btn-info"  v-if="value.chi_tiet== 0"><i class="fa-solid fa-info fa-lg"></i> Chi Tiết</button>
                                        </td>
                                        <td>
                                            <button class="btn btn-success" v-if="value.trang_thai == 0">Hiển
                                                Thị</button>
                                            <button class="btn btn-danger" v-if="value.trang_thai == 1">Tạm Tắt</button>
                                        </td>
                                        <td>
                                            <button class="btn btn-success" v-if="value.kich_hoat == 0">Đã Kích
                                                Hoạt</button>
                                            <button class="btn btn-danger" v-if="value.kich_hoat == 1">Chưa Kích
                                                Hoạt</button>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#capnhap"
                                                v-on:click="Object.assign(capnhatdanhmuc, value)">
                                                cập nhập
                                            </button>
                                            <button type="button" class="btn btn-danger ms-3" data-bs-toggle="modal"
                                                data-bs-target="#xoa" v-on:click="Object.assign(xoa, value)">
                                                Xóa
                                            </button>
                                        </td>
                                    </tr>
                                </template>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="themmoi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Thêm Mới Danh Sách Quán Ăn</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <label for="" class="mt-2">Tên Quán Ăn</label>
                                <input v-model="abc.ten_quan_an" type="text" class="form-control">
                            </div>
                            <div class="col-lg-6">
                                <label for="" class="mt-2">Email</label>
                                <input v-model="abc.email" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <label for="" class="mt-2">Số Điện Thoại</label>
                                <input v-model="abc.so_dien_thoai" type="text" class="form-control">
                            </div>
                            <div class="col-lg-6">
                                <label for="" class="mt-2">Chi Tiết</label>
                                <select v-model="abc.chi_tiet" name="" id="" class="form-control">
                                    <option value="0"><i class="fa-solid fa-info fa-lg"></i> Chi
                                        Tiết</option>
                                </select>
                            </div>
                        </div>

                        <label for="" class="mt-2">Trạng Thái</label>
                        <select v-model="abc.trang_thai" name="" id="" class="form-control">
                            <option value="0">Hiển Thị</option>
                            <option value="1">Tạm Tắt</option>
                        </select>
                        <label for="" class="mt-2">Kích Hoạt</label>
                        <select v-model="abc.kich_hoat" name="" id="" class="form-control">
                            <option value="0">Đã Kích Hoạt</option>
                            <option value="1">Chưa Kích Hoạt</option>
                        </select>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal"
                            v-on:click="themdulieu()">Thêm
                            Mới</button>
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
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal" v-on:click="xoaDanhDach()">Xóa</button>
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
                        <div class="row">
                            <div class="col-lg-6">
                                <label for="" class="mt-2">Tên Quán Ăn</label>
                                <input v-model="capnhatdanhmuc.ten_quan_an" type="text" class="form-control">
                            </div>
                            <div class="col-lg-6">
                                <label for="" class="mt-2">Email</label>
                                <input v-model="capnhatdanhmuc.email" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <label for="" class="mt-2">Số Điện Thoại</label>
                                <input v-model="capnhatdanhmuc.so_dien_thoai" type="text" class="form-control">
                            </div>
                            <div class="col-lg-6">
                                <label for="" class="mt-2">Chi Tiết</label>
                                <select v-model="capnhatdanhmuc.chi_tiet" name="" id="" class="form-control">
                                    <option value="0"><i class="fa-solid fa-info fa-lg"></i> Chi
                                        Tiết</option>
                                </select>
                            </div>
                        </div>
                        <label for="" class="mt-2">Trạng Thái</label>
                        <select v-model="capnhatdanhmuc.trang_thai" name="" id="" class="form-control">
                            <option value="0">Hiển Thị</option>
                            <option value="1">Tạm Tắt</option>
                        </select>
                        <label for="" class="mt-2">Kích Hoạt</label>
                        <select v-model="capnhatdanhmuc.kich_hoat" name="" id="" class="form-control">
                            <option value="0">Đã Kích Hoạt</option>
                            <option value="1">Chưa Kích Hoạt</option>
                        </select>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">đóng</button>
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal" v-on:click="updated()">cập
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
            danhsachquanan: [],
            xoa:{ ten_quan_an: '', email: '', so_dien_thoai: '', chi_tiet: '', trang_thai: '', kich_hoat: '' },
            capnhatdanhmuc: { ten_quan_an: '', email: '', so_dien_thoai: '', chi_tiet: '', trang_thai: '', kich_hoat: '' },
            abc: { ten_quan_an: '', email: '', so_dien_thoai: '', chi_tiet: '', trang_thai: '', kich_hoat: '' }
        }
    },
    mounted() {
        this.laydata();
    },
    methods: {
        laydata() {
            axios
                .get('http://127.0.0.1:8000/api/danh-sach-quan-an')
                .then(res => {
                    this.danhsachquanan = res.data.data;
                })
                .catch(error => {
                    console.log(error);
                });
        },
        themdulieu() {
            axios
                .post('http://127.0.0.1:8000/api/them-moi/danh-sach-quan-an', this.abc)
                .then(res => {
                    if (res.data.status == true) {

                        this.$toast.success(res.data.message);
                        this.laydata();
                    } else {

                        elert("thêm mới thất bại");

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
        updated() {
            axios
                .post('http://127.0.0.1:8000/api/cap-nhat/danh-sach-quan-an', this.capnhatdanhmuc)
                .then((res) => {
                    if (res.data.status == true) {
                        this.$toast.success(res.data.message);
                        this.laydata();
                    } else {

                        elert("cập nhật thất bại");

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
        xoaDanhDach() {
            axios
                .post('http://127.0.0.1:8000/api/xoa/danh-sach-quan-an', this.xoa)
                .then(res => {
                    if (res.data.status == true) {

                       this.$toast.success(res.data.message);
                        this.laydata();
                    } else {

                        elert("xóa thất bại");

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
    },
}
</script>
<style></style>