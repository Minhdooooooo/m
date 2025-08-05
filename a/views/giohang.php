<?php include 'header.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <div class="row">
    <div class="col-12">
        <h2><i class="fas fa-shopping-cart me-2"></i>Giỏ hàng</h2>
    </div>
    
    <?php if (empty($cartItems)): ?>
    <div class="row">
        <div class="col-12">
            <div class="alert alert-info text-center">
                <i class="fas fa-info-circle me-2"></i>
                Giỏ hàng của bạn đang trống. 
                <a href="index.php" class="alert-link">Tiếp tục mua sắm</a>
            </div>
        </div>
    </div>
    <?php endif ; ?>
</div>
</body>
</html>