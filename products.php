<?php
$pageTitle = 'Sản phẩm - Lafarm';
include  'includes/header.php';
?>
<main class="section products-page">
  <div class="container">
    <h2 class="section-title">Sản phẩm nổi bật</h2>
    <div class="product-grid">
      <!-- Sản phẩm mẫu với tùy chọn số lượng -->
      <div class="product-card">
        <img src="assets/images/product1.jpg" alt="Yến Sào">
        <h3>Yến Sào</h3>
        <p>100% tự nhiên</p>
        <span>600.000đ</span>
        <div class="qty-block">
          <label>Số lượng:</label>
          <input type="number" class="qty-select" data-id="1" value="1" min="1">
        </div>
        <br>
        <button class="btn-add-cart" data-id="1" data-name="Yến Sào" data-price="600000" data-image="assets/images/product1.jpg">Thêm vào giỏ</button>
      </div>
      <div class="product-card">
        <img src="assets/images/product2.jpg" alt="Yến Huyết Sào">
        <h3>Yến Huyết Sào</h3>
        <p>100% tự nhiên</p>
        <span>1.180.000đ</span>
        <div class="qty-block">
          <label>Số lượng:</label>
          <input type="number" class="qty-select" data-id="2" value="1" min="1">
        </div>
        <br>
        <button class="btn-add-cart" data-id="2" data-name="Yến Huyết Sào" data-price="1180000" data-image="assets/images/product2.jpg">Thêm vào giỏ</button>
      </div>
      <div class="product-card">
        <img src="assets/images/product3.jpg" alt="Yến Thô">
        <h3>Yến Thô</h3>
        <p>100% tự nhiên</p>
        <span>300.000đ</span>
        <div class="qty-block">
          <label>Số lượng:</label>
          <input type="number" class="qty-select" data-id="3" value="1" min="1">
        </div>
        <br>
        <button class="btn-add-cart" data-id="3" data-name="Yến Thô" data-price="300000" data-image="assets/images/product3.jpg">Thêm vào giỏ</button>
      </div>
    </div>
  </div>
</main>
<?php include  'includes/footer.php'; ?>
<script src="assets/js/products.js"></script>
<script src="assets/js/cart.js"></script>
