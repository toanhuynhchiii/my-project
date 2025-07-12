<?php
$pageTitle = 'Giỏ hàng - Lafarm';
include  'includes/header.php';
?>
<style>
/* Điều chỉnh kích thước ảnh sản phẩm trong giỏ hàng */
.product-thumb {
  width: 80px;
  height: 80px;
  object-fit: cover;
  border-radius: 4px;
}
.qty-input {
  width: 60px;
}
.btn-remove {
  background: #e74c3c;
  color: white;
  padding: 4px 8px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
.btn-remove:hover {
  background: #c0392b;
}
</style>
<main class="section cart-page">
  <div class="container">
    <h2 class="section-title">Giỏ hàng của bạn</h2>
    <form>
      <table class="cart-table" id="cart-table">
        <thead>
          <tr>
            <th>Sản phẩm</th>
            <th>Đơn giá</th>
            <th>Số lượng</th>
            <th>Thành tiền</th>
            <th>Hành động</th>
          </tr>
        </thead>
        <tbody id="cart-items"></tbody>
      </table>
      <div class="cart-summary">
        <p>Tổng cộng: <strong><span id="cart-total">0</span> đ</strong></p>
        <a href="checkout.php" class="btn-checkout">Thanh toán</a>
      </div>
    </form>
  </div>
</main>
<?php include  'includes/footer.php'; ?>
<script src="assets/js/cart.js"></script>
<script src="assets/js/products.js"></script>