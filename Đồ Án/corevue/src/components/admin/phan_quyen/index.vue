<template>
    <div>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
            integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        <div class="row">
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <div class="row text-nowrap">
                            <div class="col-lg-6">
                                <p>Danh Sách Quyền</p>
                            </div>
                            <div class="col-lg-6 text-end">
                                <button class="btn btn-primary">Thêm Quyền</button>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-lg-12">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1"><i
                                            class="fa-solid fa-magnifying-glass"></i></span>
                                    <input type="text" class="form-control" placeholder="Search.." aria-label="Username"
                                        aria-describedby="basic-addon1">
                                    <button class="btn btn-outline-secondary" type="button" id="button-addon2">Tìm
                                        Kiếm</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr class="text-center" style="background-color: #6495ED;">
                                    <th>#</th>
                                    <th>Tên Quyền</th>
                                    <th>Cấp Quyền</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="text-center">
                                    <td>1</td>
                                    <td>Admin</td>
                                    <td><button class="btn btn-info">Phân Quyền</button></td>
                                    <td><button class="btn btn-info me-2"><i class="fa-solid fa-pen-to-square fa-lg"></i></button>
                                    <button class="btn btn-danger"><i class="fa-solid fa-trash fa-lg"></i></button></td>

                                </tr>
                                <tr class="text-center">
                                    <td>2</td>
                                    <td>Shipper</td>
                                    <td><button class="btn btn-info">Phân Quyền</button></td>
                                    <td><button class="btn btn-info me-2"><i class="fa-solid fa-pen-to-square fa-lg"></i></button>
                                    <button class="btn btn-danger"><i class="fa-solid fa-trash fa-lg"></i></button></td>

                                </tr>
                                <tr class="text-center">
                                    <td>3</td>
                                    <td>Quán Ăn</td>
                                    <td><button class="btn btn-info">Phân Quyền</button></td>
                                    <td><button class="btn btn-info me-2"><i class="fa-solid fa-pen-to-square fa-lg"></i></button>
                                    <button class="btn btn-danger"><i class="fa-solid fa-trash fa-lg"></i></button></td>

                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <p>Danh Sách Chức Năng</p>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-hover text-nowrap">
                            <thead>
                                <tr class="text-center" style="background-color: #6495ED;">
                                    <th>#</th>
                                    <th>Tên Chức Năng</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th class="text-center">1</th>
                                    <td>lấy danh sách các quán ăn</td>
                                    <td class="text-center"><button class="btn btn-success">Cấp Quyền</button></td>
                                </tr>
                                <tr>
                                    <th class="text-center">2</th>
                                    <td>Tạo Mới Quán Ăn</td>
                                    <td class="text-center"><button class="btn btn-success">Cấp Quyền</button></td>
                                </tr>
                                <tr>
                                    <th class="text-center">3</th>
                                    <td>Xóa Quán Ăn</td>
                                    <td class="text-center"><button class="btn btn-success">Cấp Quyền</button></td>
                                </tr>
                                <tr>
                                    <th class="text-center">4</th>
                                    <td>cập nhật Quán Ăn</td>
                                    <td class="text-center"><button class="btn btn-success">Cấp Quyền</button></td>
                                </tr>
                                <tr>
                                    <th class="text-center">5</th>
                                    <td>Thêm Món Ăn</td>
                                    <td class="text-center"><button class="btn btn-success">Cấp Quyền</button></td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header mt-2">
                        <p>đang phân Quyền cho <b class="text-danger">Admin</b></p>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-hover text-nowrap ">
                            <thead>
                                <tr style="background-color: #6495ED;" class="text-center">
                                    <th>Tên Chức Năng</th>
                                    <th>Tên Quyền</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>lấy danh sách các quán ăn</td>
                                    <td>admin</td>
                                    <td class="text-center"><button class="btn btn-danger">Xóa</button></td>
                                </tr>
                                <tr>
                                    <td>Tạo Mới Quán Ăn</td>
                                    <td>admin</td>
                                    <td class="text-center"><button class="btn btn-danger">Xóa</button></td>
                                </tr>
                                <tr>
                                    <td>Xóa Quán Ăn</td>
                                    <td>admin</td>
                                    <td class="text-center"><button class="btn btn-danger">Xóa</button></td>
                                </tr>
                                <tr>
                                    <td>cập nhật Quán Ăn</td>
                                    <td>admin</td>
                                    <td class="text-center"><button class="btn btn-danger">Xóa</button></td>
                                </tr>
                                <tr>
                                    <td>Thêm Món Ăn</td>
                                    <td>admin</td>
                                    <td class="text-center"><button class="btn btn-danger">Xóa</button></td>
                                </tr>
                            </tbody>
                        </table>
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