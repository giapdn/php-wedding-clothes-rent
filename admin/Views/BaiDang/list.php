<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Bài viết /</span> Danh sách bài viết</h4>
    <div class="d-flex">
        <a href="?url=add-baiviet"><input class="btn btn-success" type="submit" name="them" value="Thêm"></a>
        <a href="?url=export-baiviet"><input class="btn btn-info" type="submit" name="them" value="Xuất Danh Sách"></a>
        <form action="?url=timkiemBaiDang" method="post">
            <div class="d-flex justify-content-end" style="margin-bottom: 10px;">
                <input class="form-control" type="text" name="tieude" placeholder="nhập tên tiêu đề" style="border-radius: 5px;">
                <input class="btn btn-primary p o v" type="submit" name="bd-seaarch-submit" value="Tìm kiếm">
            </div>
        </form>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Tiêu đề</th>
                                <th scope="col">Nội dung</th>
                                <th scope="col">Ngày đăng</th>
                                <th scope="col">Ảnh</th>
                                <th scope="col">Người đăng</th>
                                <th scope="col">Trạng thái</th>
                                <th scope="col">thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($baidang as $key => $bai) :
                                $xoa = "?url=xoa-baiviet&id=" . $bai['id_bai_dang'];
                                $sua = "?url=sua-baiviet&id=" . $bai['id_bai_dang']; ?>
                                <tr>
                                    <td><?= $bai['id_bai_dang'] ?></td>
                                    <td><?= $bai['tieu_de'] ?></td>
                                    <td>
                                        <textarea readonly name="" id="" cols="25" rows="2"><?= $bai['noi_dung'] ?></textarea>
                                    </td>
                                    <td><?= $bai['ngay_dang'] ?></td>
                                    <td> <img style="width: 50px;height: auto;" src="uploads/<?= $bai['path'] ?>" alt=""></td>
                                    <td><?= $bai['username'] ?></td>
                                    <td><?= $bai['trangthai'] ?></td>
                                    <td>
                                        <div class="change" style="display: flex; ">
                                            <form action="<?= $xoa ?>" method="post">
                                                <input class="btn btn-warning" type="submit" name="" value="xóa">
                                            </form>
                                            <form action="<?= $sua ?>" method="post">
                                                <input class="btn btn-danger" type="submit" name="sua" value="sửa">
                                            </form>
                                        </div>
                                    </td>
                                <?php endforeach ?>
                                </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>