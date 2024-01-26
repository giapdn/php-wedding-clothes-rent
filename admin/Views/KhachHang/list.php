<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Khách hàng /</span> Danh sách Khách hàng</h4>
    <a href="?url=add-baiviet"><input class="btn btn-primary" type="submit" name="them" value="Thêm"></a>
    <a href="?url=export-baiviet"><input class="btn btn-primary" type="submit" name="them" value="Xuất ds"></a>
    <form action="?url=timkiemBaiDang" method="post">
        <div class="d-flex justify-content-end" style="margin-bottom: 10px;">
            <input class="p o v" type="text" name="tieude" placeholder="nhập tên tiêu đề" style="border-radius: 5px;">
            <input class="btn btn-primary p o v" type="submit" name="bd-seaarch-submit" value="Tìm kiếm">
        </div>
    </form>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Username</th>
                            <th>Password</th>
                            <th>Tên</th>
                            <th>SDT</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>Quyền</th>
                            <th>Status</th>
                            <th>Tương tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data as $key => $value) :
                            $xoa = "?url=xoa-user&id=" . $value['username'];
                            $sua = "?url=sua-user&id=" . $value['username']; ?>
                            <tr>
                                <td><?= $value['username'] ?></td>
                                <td><?= $value['password'] ?></td>
                                <td><?= $value['ten_khach_hang'] ?></td>
                                <td><?= $value['dien_thoai'] ?></td>
                                <td><?= $value['email'] ?><< /td>
                                <td><?= $value['dia_chi'] ?></td>
                                <td><?= $value['quyen_han'] ?></td>
                                <td><?= $value['trang_thai'] ?></td>
                                <td>
                                    <div class="change" style="display: flex; ">
                                        <form action="<?= $xoa ?>" method="post">
                                            <input type="submit" name="" value="xóa">
                                        </form>
                                        <form action="<?= $sua ?>" method="post">
                                            <input type="submit" name="sua" value="sửa">
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