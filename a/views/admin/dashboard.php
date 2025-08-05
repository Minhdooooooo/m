<?php include '../header.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    
    <h2 class="mb-4">Quản trị sản phẩm</h2>
    <a href="index.php?action=admin&do=add" class="btn btn-success mb-3">Thêm sản phẩm</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tên</th>
                <th>Ảnh</th>
                <th>Tồn kho</th>
                <th>Giá tiền</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($sanpham as $sp): ?>
            <tr>
                <td><?= $sp['id'] ?></td>
                <td><?= htmlspecialchars($sp['name']) ?></td>
                <td>
                    <img src="<?= htmlspecialchars($sp['image']) ?>" alt="Product Image" style="width: 100px; height: auto;">
                </td>
                <td><?= htmlspecialchars($sp['tonKho']) ?></td>
                <td><?= number_format($sp['giaTien']) ?>đ</td>
                <td>
                    <a href="index.php?action=admin&do=edit&id=<?= $sp['id'] ?>" class="btn btn-warning">Sửa</a>
                    <a href="index.php?action=admin&do=delete&id=<?= $sp['id'] ?>" class="btn btn-danger">Xóa</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>