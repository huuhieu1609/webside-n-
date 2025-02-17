<template>
    <div>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
            integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        <div class="row">
            <div class="col-lg-12">
                <div class="card ">
                    <div class="card-header text-nowrap">
                        <div class="row mt-2">
                            <div class="col-lg-6">
                                <h4><b>Danh Sách Mã Giảm Giá</b></h4>
                            </div>
                            <div class="col-lg-6 text-end">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#themmoi">
                                    Thêm Mã Giảm Giá
                                </button>

                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-hover ">
                            <thead class="text-primary">
                                <tr class="text-center">
                                    <th>#</th>
                                    <th>Mã Code</th>
                                    <th>Thời Gian Bắt Dầu</th>
                                    <th>Thời Gian Kết thúc</th>
                                    <th>Loại Giảm</th>
                                    <th>Số Giá Giảm</th>
                                    <th>Số Tiền Tối Đa</th>
                                    <th>Đơn Hàng Đối Thiểu</th>
                                    <th>Tình Trạng</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <template v-for="(value, index) in voucher" :key="index">
                                <tbody>
                                    <tr class="text-center">
                                        <td>{{ index + 1 }}</td>
                                        <td>{{ value.ma_code }}</td>
                                        <td>{{ value.thoi_gian_bat_dau }}</td>
                                        <td>{{ value.thoi_gian_ket_thuc }}</td>
                                        <td>{{ value.loai_giam }}</td>
                                        <td>{{ value.so_gia_giam }}</td>
                                        <td>{{ value.so_tien_doi_da }}</td>
                                        <td>{{ value.don_gia_doi_thieu }} </td>
                                        <td><button class="btn btn-info" v-if="value.tinh_trang == 0">Hiển Thị</button>
                                            <button class="btn btn-danger" v-if="value.tinh_trang == 1">tạm tắt</button>
                                        </td>

                                        <td>

                                            <button v-on:click="Object.assign(updated_voucher,value)" type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#capnhap">
                                                cập nhập
                                            </button>
                                            <button v-on:click="Object.assign(delete_voucher,value)" type="button" class="btn btn-danger ms-3" data-bs-toggle="modal"
                                                data-bs-target="#xoa">
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
        <div class="modal fade" id="themmoi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Thêm Mới Mã Giảm Giá</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <label for="">Mã Code</label>
                        <input v-model="abc.ma_code" type="text" class="form-control mt-2">
                        <label for="">Thời Gian Bắt Dầu</label>
                        <input v-model="abc.thoi_gian_bat_dau" type="date" class="form-control mt-2">
                        <label for="">Thời Gian Kết thúc</label>
                        <input v-model="abc.thoi_gian_ket_thuc" type="date" class="form-control mt-2">
                        <label for="">Loại Giảm</label>
                        <input v-model="abc.loai_giam" type="text" class="form-control mt-2">
                        <label for="">Số Giá Giảm</label>
                        <input v-model="abc.so_gia_giam" type="text" class="form-control mt-2">
                        <label for="">Số Tiền Tối Đa</label>
                        <input v-model="abc.so_tien_doi_da" type="text" class="form-control mt-2">
                        <label for="">Đơn Hàng Đối Thiểu</label>
                        <input v-model="abc.don_gia_doi_thieu" type="text" class="form-control mt-2">
                        <label for="">Tình Trạng</label>
                        <select v-model="abc.tinh_trang" name="" id="" class="form-control mt-2">
                            <option value="0">Hiển Thị</option>
                            <option value="1">Tạm Tắt</option>

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
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal" v-on:click="DeleteVoucher()">Xóa</button>
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
                        <label for="">Mã Code</label>
                        <input v-model="updated_voucher.ma_code" type="text" class="form-control mt-2">
                        <label for="">Thời Gian Bắt Dầu</label>
                        <input v-model="updated_voucher.thoi_gian_bat_dau" type="text" class="form-control mt-2">
                        <label for="">Thời Gian Kết thúc</label>
                        <input v-model="updated_voucher.thoi_gian_ket_thuc" type="text" class="form-control mt-2">
                        <label for="">Loại Giảm</label>
                        <input v-model="updated_voucher.loai_giam" type="text" class="form-control mt-2">
                        <label for="">Số Giá Giảm</label>
                        <input v-model="updated_voucher.so_gia_giam" type="text" class="form-control mt-2">
                        <label for="">Số Tiền Tối Đa</label>
                        <input v-model="updated_voucher.so_tien_doi_da" type="text" class="form-control mt-2">
                        <label for="">Đơn Hàng Đối Thiểu</label>
                        <input v-model="updated_voucher.don_gia_doi_thieu" type="text" class="form-control mt-2">
                        <label for="">Tình Trạng</label>
                        <select v-model="updated_voucher.tinh_trang" name="" id="" class="form-control mt-2">
                            <option value="0">Hiển Thị</option>
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
            voucher: [ ],
            delete_voucher: { ma_code: '', thoi_gian_bat_dau: '', thoi_gian_ket_thuc: '', loai_giam: '', so_gia_giam: '', so_tien_doi_da: '', don_gia_doi_thieu: '', tinh_trang: '' },
            updated_voucher: { ma_code: '', thoi_gian_bat_dau: '', thoi_gian_ket_thuc: '', loai_giam: '', so_gia_giam: '', so_tien_doi_da: '', don_gia_doi_thieu: '', tinh_trang: '' },
            abc: { ma_code: '', thoi_gian_bat_dau: '', thoi_gian_ket_thuc: '', loai_giam: '', so_gia_giam: '', so_tien_doi_da: '', don_gia_doi_thieu: '', tinh_trang: '' }
        }
    },
    mounted() {
        this.laydata();
    },
    methods: {
        laydata() {
            axios
                .get('http://127.0.0.1:8000/api/voucher')
                .then(res => {
                    this.voucher = res.data.data;
                })
                .catch(error => {
                    console.log(error);
                });
        },
        themdulieu() {
            axios
                .post('http://127.0.0.1:8000/api/them-moi', this.abc)
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
                .post('http://127.0.0.1:8000/api/capnhat', this.updated_voucher)
               
                .then((res)=>{
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
        DeleteVoucher() {
            axios
                .post('http://127.0.0.1:8000/api/xoa', this.delete_voucher)
                .then(res => {
                    if (res.data.status == true) {

                        // this.$toast.primary(res.data.message);
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
    }
}
</script>
<style></style>