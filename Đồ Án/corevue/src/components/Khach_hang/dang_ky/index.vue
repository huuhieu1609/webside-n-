<template>

    <div class="wrapper">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
            integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        <div class="section-authentication-signin d-flex align-items-center justify-content-center my-5 my-lg-0">
            <div class="container-fluid">
                <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
                    <div class="col mx-auto">
                        <div class="mb-4 text-center">
                            <img src="assets/images/logo-img.png" width="180" alt="" />
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="border p-4 rounded">
                                    <div class="text-center">
                                        <h3 class=""><i class="fa-solid fa-cookie-bite fa-2xl"></i> đăng ký Quán Ăn</h3>

                                    </div>

                                    <div class="d-grid">
                                        <a class="btn my-4 shadow-sm btn-white" href="javascript:;"> <span
                                                class="d-flex justify-content-center align-items-center">
                                                <img class="me-2" src="../../../assets/images/icons/search.svg"
                                                    width="16" alt="Image Description">
                                                <span>Sign in with Google</span>
                                            </span>
                                        </a> <a href="javascript:;" class="btn btn-facebook"><i
                                                class="bx bxl-facebook"></i>Sign in with Facebook</a>
                                    </div>
                                    <div class="login-separater text-center mb-4"> <span>OR SIGN IN WITH EMAIL</span>
                                        <hr />
                                    </div>

                                    <div class="form-body">
                                        <form class="row g-3">
                                            <div class="col-12">
                                                <label for="">👨‍💻 Họ Và Tên</label>
                                                <input type="text" class="form-control" id="inputEmailAddress"
                                                    placeholder="nhập họ và tên của bạn">
                                            </div>
                                            <div class="col-12">
                                                <label for="inputEmailAddress" class="form-label">📧 Email
                                                    Address</label>
                                                <input type="email" class="form-control" id="inputEmailAddress"
                                                    placeholder="Email">
                                            </div>
                                            <div class="col-12">
                                                <label for="">📱 Số Điện Thoại:</label>
                                                <input type="text" class="form-control"
                                                    placeholder="Nhập Số Điện Thoại">
                                            </div>
                                            <div class="col-12">
                                                <label for="">🎂 Ngày Sinh:</label>
                                                <input type="date" class="form-control">
                                            </div>
                                            <div class="col-12">
                                                <label for="">🔑 Mật Khẩu:</label>
                                                <input type="text" class="form-control" placeholder="Nhập Mật Khẩu">
                                            </div>
                                            <div class="col-12">
                                                <label for="">⏳ Xác Nhận Mật Khẩu:</label>
                                                <input type="text" class="form-control" placeholder="Xác Nhận Mật Khẩu">
                                            </div>

                                            <div class="col-12">
                                                <div class="d-grid">
                                                    <button type="submit" class="btn btn-success">Đăng Ký</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
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
            dangky: [],
            abc: { ho_va_ten: '', email: '', so_dien_thoai: '', ngay_sinh: '', mat_khau: '', xac_nhan_mat_khau: '' },
        }
    },
    mounted() {
        this.laydata();
    }, methods: {
        laydata() {
            axios
                .get('http://127.0.0.1:8000/api/dang-ky-khach-hang')
                .then(res => {
                    this.dangky = res.data.data;
                })
                .catch(error => {
                    console.log(error);
                });
        },
        themdulieu() {
            axios
                .post('http://127.0.0.1:8000/api/dang-ky-khach-hang/them-moi', this.abc)
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
    }
}
</script>
<style></style>