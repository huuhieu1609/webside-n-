<template>
    <div class="container-fluid">
        <div class="row ">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row text-nowrap">
                            <div class="col-lg-6">
                                <h4><b>Danh Sách Khách Hàng</b></h4>
                            </div>
                            <div class="col-lg-6 text-end">
                                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#themmoi">thêm
                                    mới</button>
                            </div>
                        </div>

                    </div>
                    <div class="card-body ">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr class="text-center">
                                    <th>ID</th>
                                    <th>Họ Và Tên</th>
                                    <th>Email</th>
                                    <th>Số Điện Thoại</th>
                                    <th>Ngày Sinh</th>
                                    <th>Trạng Thái</th>
                                    <th>Kích Hoạt</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <template v-for="(value, index) in danhsach" :key="index">
                                    <tr class="text-center">
                                        <td>{{ index + 1 }}</td>
                                        <td>{{ value.ho_va_ten }}</td>
                                        <td>{{ value.email }}</td>
                                        <td>{{ value.so_dien_thoai }}</td>
                                        <td>{{ value.ngay_sinh }}</td>
                                        <td>
                                            <button class="btn btn-success" v-if="value.tinh_trang == 0">Hoạt
                                                Động</button>
                                            <button class="btn btn-danger" v-if="value.tinh_trang == 1">Tạm Tắt</button>
                                        </td>
                                        <td>
                                            <button class="btn btn-info" v-if="value.kich_hoat == 0">Đã Kích
                                                Hoạt</button>
                                            <button class="btn btn-danger" v-if="value.kich_hoat == 1">Chưa Kích
                                                Hoạt</button>
                                        </td>
                                        <td>
                                            <button v-on:click="Object.assign(capnhatdanhmuc, value)" type="button"
                                                class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#capnhap">
                                                cập nhập
                                            </button>
                                            <button v-on:click="Object.assign(xoadanhmuc, value)" type="button"
                                                class="btn btn-danger ms-3" data-bs-toggle="modal"
                                                data-bs-target="#xoa">
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
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Thêm Mới Danh Sách Khách Hàng</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <label for="">Họ Và Tên</label>
                        <input v-model="abc.ho_va_ten" type="text" class="form-control">
                        <label for="">Email</label>
                        <input v-model="abc.email" type="text" class="form-control">
                        <label for="">Số Điện Thoại</label>
                        <input v-model="abc.so_dien_thoai" type="text" class="form-control">
                        <label for="">Ngày Sinh</label>
                        <input v-model="abc.ngay_sinh" type="date" class="form-control">
                        <label for="">Tình Trạng</label>
                        <select v-model="abc.tinh_trang" name="" id="" class="form-control">
                            <option value="0">Hoạt Động</option>
                            <option value="1">Tạm Tắt</option>
                        </select>
                        <label for="">Kích Hoạt</label>
                        <select v-model="abc.kich_hoat" name="" id="" class="form-control">
                            <option value="0">Đã Kích Hoạt</option>
                            <option value="1">Chưa Kích Hoạt</option>
                        </select>
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
                            v-on:click="Deletedanhmuc()">Xóa</button>
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
                        <input v-model="capnhatdanhmuc.ho_va_ten" type="text" class="form-control">
                        <label for="">Email</label>
                        <input v-model="capnhatdanhmuc.email" type="text" class="form-control">
                        <label for="">Số Điện Thoại</label>
                        <input v-model="capnhatdanhmuc.so_dien_thoai" type="text" class="form-control">
                        <label for="">Ngày Sinh</label>
                        <input v-model="capnhatdanhmuc.ngay_sinh" type="date" class="form-control">
                        <label for="">Tình Trạng</label>
                        <select v-model="capnhatdanhmuc.tinh_trang" name="" id="" class="form-control">
                            <option value="0">Hoạt Động</option>
                            <option value="1">Tạm Tắt</option>
                        </select>
                        <label for="">Kích Hoạt</label>
                        <select v-model="capnhatdanhmuc.kich_hoat" name="" id="" class="form-control">
                            <option value="0">Đã Kích Hoạt</option>
                            <option value="1">Chưa Kích Hoạt</option>
                        </select>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">đóng</button>
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal"
                            v-on:click="CapNhatdanhmuc()">cập
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
            danhsach: [

            ],
            capnhatdanhmuc: { ho_va_ten: '', email: '', so_dien_thoai: '', ngay_sinh: '', tinh_trang: '', kich_hoat: '' },
            xoadanhmuc: { ho_va_ten: '', email: '', so_dien_thoai: '', ngay_sinh: '', tinh_trang: '', kich_hoat: '' },
            abc: { ho_va_ten: '', email: '', so_dien_thoai: '', ngay_sinh: '', tinh_trang: '', kich_hoat: '' }
        }
    },
    mounted() {
        this.laydata();
    },
    methods: {
        laydata() {
            axios
                .get('http://127.0.0.1:8000/api/danh-sach')
                .then(res => {
                    this.danhsach = res.data.data;
                })
                .catch(error => {
                    console.log(error);
                });
        },
        themdulieu() {
            axios
                .post('http://127.0.0.1:8000/api/khach-hang/them-moi', this.abc)
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
        Deletedanhmuc() {
            axios
                .post('http://127.0.0.1:8000/api/khach-hang/xoa', this.xoadanhmuc)
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
        CapNhatdanhmuc() {
            axios
                .post('http://127.0.0.1:8000/api/khach-hang/cap-nhat', this.capnhatdanhmuc)
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