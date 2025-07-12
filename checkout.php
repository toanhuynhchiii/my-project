<?php
// checkout.php - Trang thanh toán kết hợp FE & BE
require __DIR__ . '/includes/db.php';
$pageTitle = 'Thanh toán - Lafarm';
session_start();
include __DIR__ . '/includes/header.php';

// Xử lý đặt hàng khi submit form
$success = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Lấy dữ liệu từ form
    $fullname = trim($_POST['fullname'] ?? '');
    $email    = trim($_POST['email'] ?? '');
    $items    = $_POST['items'] ?? '';
    $total    = (int)($_POST['total'] ?? 0);

    // Lưu vào database
    $stmt = $pdo->prepare(
      "INSERT INTO orders (fullname, email, items, total_price)
       VALUES (?, ?, ?, ?)"
    );
    $stmt->execute([$fullname, $email, $items, $total]);
    $success = 'Cảm ơn bạn đã đặt hàng!';
}
?>
<main class="section checkout-page">
  <div class="container">
    <h2 class="section-title">Thanh toán</h2>
    <?php if ($success): ?>
      <p class="success"><?= htmlspecialchars($success) ?></p>
    <?php else: ?>
    <form method="post" action="checkout.php" id="checkout-form">
      <table class="checkout-table" id="checkout-summary">
        <thead>
          <tr><th>Sản phẩm</th><th>Đơn giá</th><th>Số lượng</th><th>Thành tiền</th></tr>
        </thead>
        <tbody>
          <!-- JS sẽ render các dòng sản phẩm -->
        </tbody>
        <tfoot>
          <tr>
            <td colspan="3" class="text-right"><strong>Tổng cộng:</strong></td>
            <td><span id="checkout-total">0</span> đ</td>
          </tr>
        </tfoot>
      </table>
      <input type="hidden" name="items" id="items-data">
      <input type="hidden" name="total" id="total-data">
      <div class="form-group">
        <input type="text" name="fullname" placeholder="Họ và tên" required>
      </div>
      <div class="form-group">
        <input type="email" name="email" placeholder="Email" required>
      </div>
      <button type="submit" class="btn btn-primary">Xác nhận đặt hàng</button>
    </form>
    <?php endif; ?>
  </div>
</main>
<script src="assets/js/checkout.js"></script>
<?php include __DIR__ . '/includes/footer.php'; ?>
