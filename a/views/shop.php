<?php include 'header.php' ?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    
    <h2 class="mb-4">Cửa hàng</h2>
    <div class="row">
        <?php foreach ($sanpham as $sp): ?>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><?= htmlspecialchars($product['name']) ?></h5>
                        <img src="<?= htmlspecialchars($sp['image']) ?>" class="card-img-top" alt="Product Image" style="width: 100%; height: auto;">
                        <p class="card-text"><?= number_format($sp['giaTien']) ?>đ</p>
                        <a href="index.php?action=cart&do=add&id=<?= $product['id'] ?>" class="btn btn-primary">Thêm vào giỏ</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>