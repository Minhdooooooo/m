<?php include 'header.php'; ?>
<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Trang chủ - Điện thoại chính hãng</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"/>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet"/>
</head>
<body>

<div class="container py-5">

  <section class="mb-5">
    <div class="row align-items-center">
      <div class="col-lg-6 mb-4 mb-lg-0">
        <h1 class="fw-bold mb-3">Điện thoại chính hãng, giá tốt nhất</h1>
        <p class="lead text-muted">Cung cấp các mẫu smartphone mới nhất từ Apple, Samsung, Xiaomi... với giá ưu đãi và bảo hành đầy đủ.</p>
        <a href="index.php?action=shop" class="btn btn-dark btn-lg mt-3">
          <i class="bi bi-shop me-2"></i>Xem sản phẩm
        </a>
      </div>
      <div class="col-lg-6 text-center">
        <img src="https://via.placeholder.com/500x300?text=Banner+San+Pham" alt="Banner" class="img-fluid rounded shadow"/>
      </div>
    </div>
  </section>

  <section class="mb-5">
    <h2 class="text-center fw-bold mb-4">Sản phẩm nổi bật</h2>
    <div class="row g-4">
      

      <div class="col-md-4">
        <div class="card h-100 shadow-sm border-0">
          <img src="https://encrypted-tbn0.gstatic.com/shopping?q=tbn:ANd9GcQCPcEahXZF6Onypua_jHgWJ9FQxOYkYqkLaGrsNYTyIAUV-Rzn4IIdGQAFhmPDhx6HI7q-ed0bXHZvNjClLDVx8i9-WTl8brDMMOiBHY3M5pdPdZkE2tee5qIDmqDUJhkAUee-byg&usqp=CAc" 
               class="card-img-top" alt="Xiaomi Redmi Note 13 Pro" style="object-fit:cover; height:230px">
          <div class="card-body text-center">
            <h5 class="card-title">Xiaomi Redmi Note 13 Pro</h5>
            <p class="card-text text-danger fw-bold">8.990.000đ</p>
          </div>
          <div class="card-footer bg-transparent border-0">
            <a href="index.php?action=shop" class="btn btn-outline-dark w-100">Xem chi tiết</a>
          </div>
        </div>
      </div>


      <div class="col-md-4">
        <div class="card h-100 shadow-sm border-0">
          <img src="https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcT0sgZZ7FBcPYJb4rlKBTVcY5Fag0vq5oEac6qWlyqjklxPVzlrYBdzgWLwkRxXwXF2snYJT6DOERuNnbiTFvd9VH2ONMvWSR1c8eeCMRWw8s2O5BC9Xb0zlWJl_I6ncq3zR6S-ono&usqp=CAc" 
               class="card-img-top" alt="Samsung Galaxy S24 Ultra" style="object-fit:cover; height:230px">
          <div class="card-body text-center">
            <h5 class="card-title">Samsung Galaxy S24 Ultra</h5>
            <p class="card-text text-danger fw-bold">28.490.000đ</p>
          </div>
          <div class="card-footer bg-transparent border-0">
            <a href="index.php?action=shop" class="btn btn-outline-dark w-100">Xem chi tiết</a>
          </div>
        </div>
      </div>

      

      <div class="col-md-4">
        <div class="card h-100 shadow-sm border-0">
          <img src="https://encrypted-tbn3.gstatic.com/shopping?q=tbn:ANd9GcRT5AYDmGI5CQFzccazB7acCXioQr-wEN7vF8PSxWAqWQ46gOlwt41npS7xsaYZ5tWAhDJO9NU60aoZLrJT_vrt51h85iC64gUcajl0WYNd5youCvw7YNZPPcaS_hk_T-0NuEPs8iY&usqp=CAc" 
               class="card-img-top" alt="iPhone 15 Pro Max" style="object-fit:cover; height:230px">
          <div class="card-body text-center">
            <h5 class="card-title">iPhone 15 Pro Max</h5>
            <p class="card-text text-danger fw-bold">33.990.000đ</p>
          </div>
          <div class="card-footer bg-transparent border-0">
            <a href="index.php?action=shop" class="btn btn-outline-dark w-100">Xem chi tiết</a>
          </div>
        </div>
      </div>

    </div>
  </section>

  <section class="bg-light p-5 rounded shadow-sm">
    <h2 class="mb-4 text-center fw-bold">Tại sao chọn chúng tôi</h2>
    <div class="row">
      <div class="col-md-6">
        <div class="mb-4">
          <h5><i class="bi bi-shield-check text-success me-2"></i> Bảo hành 12 tháng</h5>
          <p class="text-muted">Sản phẩm bảo hành chính hãng toàn quốc.</p>
        </div>
        <div class="mb-4">
          <h5><i class="bi bi-truck text-success me-2"></i> Giao hàng nhanh</h5>
          <p class="text-muted">Giao hàng toàn quốc trong 2-3 ngày làm việc.</p>
        </div>
        <div class="mb-4">
          <h5><i class="bi bi-arrow-repeat text-success me-2"></i> Hỗ trợ đổi trả</h5>
          <p class="text-muted">Đổi trả trong vòng 7 ngày nếu có lỗi kỹ thuật.</p>
        </div>
      </div>
      <div class="col-md-6 text-center">
        <img src="https://via.placeholder.com/400x250?text=Chon+Chung+Toi" alt="Lý do chọn" class="img-fluid rounded">
      </div>
    </div>
  </section>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
