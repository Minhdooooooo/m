<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Navbar Bootstrap</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand">Logo</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-between" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" href="home.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="shop.php">Shop</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="giohang.php">Giỏ hàng</a>
          </li>
        </ul>
      </div>

      <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
        <ul class="navbar-nav">

          <?php if (isset($_SESSION['user'])): ?>

            <li class="nav-item">
              <a class="nav-link active" href="#"><?= $_SESSION['user']['username'] ?></a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="index.php?action=logout">Đăng xuất</a>
            </li>

          <?php else: ?>

            <li class="nav-item">
              <a class="nav-link active" href="index.php?action=login">Đăng nhập</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="index.php?action=register">Đăng kí</a>
            </li>

          <?php endif; ?>

        </ul>
        
    </div>
  </nav>
</body>
</html>
</body>
</html>