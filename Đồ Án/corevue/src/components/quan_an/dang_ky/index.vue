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

                                    <div class="login-separater text-center mb-4">
                                        <hr />
                                    </div>

                                    <div class="form-body">
                                        <form class="row g-3">
                                            <div class="row mt-4">
                                                <div class="col-lg-6">
                                            <label for="">Tên Quán Ăn</label>
                                            <input type="text" class="form-control">
                                          </div>
                                          <div class="col-lg-6">
                                            <label for="">Email</label>
                                            <input type="text" class="form-control">
                                          </div>
                                            </div>
                                            <div class="row mt-4">
                                                <div class="col-lg-6">
                                            <label for="">Password</label>
                                            <input type="text" class="form-control">
                                          </div>
                                          <div class="col-lg-6">
                                            <label for="">Re Password</label>
                                            <input type="text" class="form-control">
                                          </div>
                                            </div>
                                            <div class="row mt-4">
                                                <div class="col-lg-6">
                                            <label for="">Số Điện Thoại</label>
                                            <input type="text" class="form-control">
                                          </div>
                                          <div class="col-lg-6">
                                            <label for="">Mã Số Thuế</label>
                                            <input type="text" class="form-control">
                                          </div>
                                            </div>
                                            <div class="row mt-4">
                                                <div class="col-lg-6">
                                            <label for="">Tỉnh Thành</label>
                                            <select name="" id="" class="form-control">
                                                <option value="0">Hà Nội</option>
                                                <option value="1">Đà Nẵng</option>
                                            </select>
                                          </div>
                                          <div class="col-lg-6">
                                            <label for="">Quận Huyện</label>
                                            <select name="" id="" class="form-control">
                                                <option value="0">Quận 1</option>
                                                <option value="1">Quận 2</option>
                                            </select>
                                          </div>
                                            </div>
                                            <div class="row mt-4">
                                                <div class="col-lg-12">
                                                    <label for="">Đại Chỉ</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row mt-4 ">
                                                <div class="col-12">
                                                <div class="d-grid">
                                                    <button type="submit" class="btn btn-primary">Đăng Ký</button>
                                                </div>
                                            </div>
                                            <div class="row mt-2">
                                                <p>bạn đã có tài khoản <b class="text-primary">Đăng Nhập</b></p>
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

export default {

}
</script>
<style></style>