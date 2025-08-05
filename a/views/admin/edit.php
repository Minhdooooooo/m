<?php include '../header.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <h2 class="mb-4">Cập nhật sản phẩm</h2>
    <form method="post">
        <div class="mb-3">
            <label class="form-label">Tên sản phẩm</label>
            <input type="text" name="name" value="<?= htmlspecialchars($sp['name']) ?>" class="form-control" required>
        </div>
        
        <div class="mb-3">
            <label class="form-label">Ảnh</label>
            <input type="file" name="image" value="<?=htmlspecialchars($sp['image']) ?>" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Giá tiền </label>
            <input type="number" name="giaTien" min="1000" value="<?=htmlspecialchars($sp['giaTien']) ?>" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Tồn kho</label>
            <input type="number" name="tonKho" step="1" min="0" value="<?=htmlspecialchars($sp['tonKho']) ?>" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Cập nhật</button>
        <a href="index.php?action=admin" class="btn btn-secondary">Hủy</a>
    </form>
    
</body>
</html>