<template>
    <div>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
            integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        <div class="row mt-2">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h6>Quản Lý Danh Mục</h6>
                    </div>
                    <div class="card-body mt-3">
                        <div class="row text-nowrap">
                            <div class="col-lg-6">
                                <h3><b>Danh Sách Danh Mục</b></h3>
                            </div>
                            <div class="col-lg-6 text-end">

                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#themmoi">
                                    <i class="fa-solid fa-plus fa-lg"></i> Thêm Danh Mục
                                    Mới
                                </button>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-lg-12">
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr class="text-center">
                                            <th>ID</th>
                                            <th>Tên Danh Mục</th>
                                            <th>Mô Tả</th>
                                            <th>Trạng thái</th>
                                            <th>Thao Tác</th>
                                        </tr>
                                    </thead>

                                    <template v-for="(value, index) in danhmuc" :key="index">
                                        <tbody>
                                            <tr class="text-center">
                                                <td>{{ index + 1 }}</td>
                                                <td>{{ value.ten_danh_muc }}</td>
                                                <td>{{ value.mo_ta }}</td>
                                                <td>
                                                    <button class="btn btn-success" v-if="value.tinh_trang == 0">Hoạt
                                                        Động</button>
                                                    <button class="btn btn-danger" v-else>Tạm
                                                        Tắt</button>
                                                </td>
                                                <td>
                                                    <button v-on:click="Object.assign(capnhatdanhmuc,value)"
                                                        class="btn btn-warning me-2" data-bs-toggle="modal"
                                                        data-bs-target="#capnhap"><i class="fa-solid fa-pen-to-square fa-lg"></i> Sửa</button>
                                                    <button v-on:click="Object.assign(xoadanhmuc,value)" class="btn btn-danger"  data-bs-toggle="modal" data-bs-target="#xoa"><i class="fa-solid fa-trash fa-lg"></i>
                                                        Xóa</button>
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
        </div>
        <div class="modal fade" id="themmoi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Thêm Danh Mục
                            Mới</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <label for="">Ten Danh Mục</label>
                        <input v-model="abc.ten_danh_muc" type="text" class="form-control">
                        <label for="" class="mt-2">Mô Tả</label>
                        <input v-model="abc.mo_ta" type="text" class="form-control">
                        <label for="" class="mt-2">Trạng Thái</label>
                        <select v-model="abc.tinh_trang" name="" id="" class="form-control">
                            <option value="0">Hoạt Động</option>
                            <option value="1">Tạm Tắt</option>
                        </select>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">đóng</button>
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal"
                            v-on:click="themdulieu()">chấp
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
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal" v-on:click="xoaDanhMuc()">Xóa</button>
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
                        <label for="">Ten Danh Mục</label>
                        <input v-model="capnhatdanhmuc.ten_danh_muc" type="text" class="form-control">
                        <label for="" class="mt-2">Mô Tả</label>
                        <input v-model="capnhatdanhmuc.mo_ta" type="text" class="form-control">
                        <label for="" class="mt-2">Trạng Thái</label>
                        <select v-model="capnhatdanhmuc.tinh_trang"  class="form-control">
                            <option value="0">Hoạt Động</option>
                            <option value="1">Tạm Tắt</option>
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
            danhmuc: [],
            capnhatdanhmuc: { ten_danh_muc: '', mo_ta: '', tinh_trang: '' },
            xoadanhmuc: { ten_danh_muc: '', mo_ta: '', tinh_trang: '' },
            abc: { ten_danh_muc: '', mo_ta: '', tinh_trang: '' }
        }
    },
    mounted() {
        this.laydata();
    },
    methods: {
        laydata() {
            axios
                .get('http://127.0.0.1:8000/api/danhmuc')
                .then(res => {
                    this.danhmuc = res.data.data;
                })
                .catch(error => {
                    console.log(error);
                });
        },
        themdulieu() {
        axios
            .post('http://127.0.0.1:8000/api/themmoi', this.abc)
            .then(res => {
                if (res.data.status == true) {

                    // this.$toast.primary(res.data.message);
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
            .post('http://127.0.0.1:8000/api/cap-nhat', this.capnhatdanhmuc)
            .then((res) => {
                if (res.data.status == true) {
                    // this.$toast.primary(res.data.message);
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
     xoaDanhMuc() {
            axios
                .post('http://127.0.0.1:8000/api/xoa-danh-muc', this.xoadanhmuc)
                .then(res => {
                    if (res.data.status == true) {

                        // this.$toast.success(res.data.message);
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