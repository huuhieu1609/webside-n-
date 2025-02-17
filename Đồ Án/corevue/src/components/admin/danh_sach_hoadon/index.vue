<template>
    <div>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
            integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        <div class="row text-nowrap">
           <div class="col-lg-12">
            <div class="card">
                <div class="row mt-2">
                    <div class="col-lg-4">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-magnifying-glass"></i></span>
                    <input type="text" class="form-control" placeholder="Tìm Kiếm Đơn Đặt ...." aria-label="Username"
                        aria-describedby="basic-addon1">
                </div>
            </div>
            <div class="col-lg-8 text-end">
                <div class="btn-group">
                    <button class="btn btn-secondary btn-lg dropdown-toggle me-2" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Sắp Xếp Tăng Dần
                    </button>
                    <ul class="dropdown-menu">
                        ...
                    </ul>
                </div>
                <div class="btn-group">
                    <button class="btn btn-secondary btn-lg dropdown-toggle me-2" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Trạng Thái
                    </button>
                    <ul class="dropdown-menu">
                        ...
                    </ul>
                    
                    <button class="btn btn-secondary btn-lg dropdown-toggle me-2" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Khoảng Giá
                    </button>
                    <ul class="dropdown-menu">
                        ...
                    </ul>
                </div>
            </div>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr class="text-center">
                                <th>Mã Đơn </th>
                                <th>Khách Hàng</th>
                                <th>Tổng Tiền</th>
                                <th>Ngày Đắt</th>
                                <th>Trạng Thái</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="text-center">
                                <td>ABC123</td>
                                <td>Trần Hữu Hiếu</td>
                                <td>200.000đ</td>
                                <td>16/09/2024</td>
                                <td>
                                    <button class="btn btn-warning">chờ xác nhận</button>
                                </td>
                                <td>
                                    <button class="btn btn-info  me-2"><i class="fa-solid fa-eye fa-lg"></i> Chi Tiết</button>
                                    <button class="btn btn-success me-2"><i class="fa-solid fa-check fa-lg "></i> Xác Nhận</button>    
                                    <button class="btn btn-danger"><i class="fa-solid fa-x fa-lg"></i> Hủy</button>    
                                </td>
                            </tr>
                            <tr class="text-center">
                                <td>ABC124</td>
                                <td> Hữu Hiếu</td>
                                <td>260.000đ</td>
                                <td>04/10/2024</td>
                                <td>
                                    <button class="btn btn-info">đang giao</button>
                                </td>
                                <td>
                                    <button class="btn btn-info  me-2"><i class="fa-solid fa-eye fa-lg"></i> Chi Tiết</button>
                                        
                                    <button class="btn btn-danger"><i class="fa-solid fa-x fa-lg"></i> Hủy</button>    
                                </td>
                            </tr>
                        </tbody>
                        
                    </table>
                </div>
                <div class="card-footer">
                    <div class="row text-nowrap mt-2">
                        <div class="col-lg-6">
                            <p>Hiển Thị 1-10 trong tổng số 100 đơn hàng</p>
                        </div>
                        <div class="col-lg-6 text-end">
                            <div class="btn-group" role="group" aria-label="First group">
                                <button type="button" class="btn btn-primary"><i class="bx bx-left-arrow"></i></button>
											<button type="button" class="btn btn-primary">1</button>
											<button type="button" class="btn btn-primary">2</button>
											<button type="button" class="btn btn-primary">3</button>
											<button type="button" class="btn btn-primary">4</button>
                                            <button type="button" class="btn btn-primary"><i class="bx bx-right-arrow"></i></button>
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