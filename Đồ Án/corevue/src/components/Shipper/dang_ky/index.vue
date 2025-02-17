<template>
    <div>
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
                                            <h3 class=""><i class="fa-solid fa-paper-plane fa-xl"></i> đăng ký tài khoản để trở thành shipper cho Hữu Hiếu</h3>
                                            <p>tham gia ngay Nào!!!
                                            </p>
                                        </div>
                                        <div class="login-separater text-center mb-4">
                                            <hr />
                                        </div>
                                        <div class="form-body">
                                            <form>
                                                <div class="row">
                                                    <div class="col-lg-6 mt-2">
                                                        <label for="">👨‍💻 Họ Và Tên</label>
                                                        <input type="text" class="form-control mt-2">
                                                    </div>
                                                    <div class="col-lg-6 mt-2">
                                                        <label for="">📧 Email</label>
                                                        <input type="text" class="form-control mt-2">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6 mt-2">
                                                        <label for="">📱 Số Điện Thoại</label>
                                                        <input type="text" class="form-control mt-2">
                                                    </div>
                                                    <div class="col-lg-6 mt-2">
                                                        <label for="">🎂 Ngày Sinh</label>
                                                        <input type="date" class="form-control mt-2">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12 mt-2">
                                                        <label for="">🔑 Mật Khẩu</label>
                                                        <input type="text" class="form-control mt-2">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12 mt-2">
                                                        <label for="">🔑 Nhập Lại Mật Khẩu</label>
                                                        <input type="text" class="form-control mt-2">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6 mt-2">
                                                        <label for="">🌃 Tỉnh Thành</label>
                                                        <select name="" id="" class="form-control mt-2">
                                                            <option value="0">-Chọn Tỉnh Thành-</option>
                                                            <option value="1">Đà Nẵng</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-6 mt-2">
                                                        <label for="">🏘️ Quận Huyện</label>
                                                        <select name="" id="" class="form-control mt-2">
                                                            <option value="0">-Chọn Quận Huyện-</option>
                                                            <option value="1">Liên Chiểu</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6 mt-2">
                                                        <label for="">🌏 Tọa Độ X</label>
                                                        <input type="text" class="form-control mt-2">
                                                    </div>
                                                    <div class="col-lg-6 mt-2">
                                                        <label for="">🌏 Tọa Độ Y</label>
                                                        <input type="text" class="form-control mt-2">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12 mt-2">
                                                        <label for="">🔑 Địa Chỉ Thường Trú</label>
                                                        <textarea name="" id="" cols="30" rows="3"
                                                            class="form-control mt-2"></textarea>
                                                    </div>

                                                </div>
                                                <div class="col-12 mt-4">
                                                    <div class="d-grid">
                                                        <button type="submit" class="btn btn-primary">Đăng Ký</button>
                                                    </div>
                                                </div>
                                                <div class="col-12 mt-2">
                                                    <div class="d-grid">
                                                        <button type="submit" class="btn btn-dark">Quay Trở Lại Đăng Nhập</button>
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
    </div>
</template>
<script>
export default {

}
</script>
<style></style>