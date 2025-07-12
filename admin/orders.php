<?php
// admin/orders.php
session_start();
if (empty($_SESSION['admin'])) {
  header('Location: login.php');
  exit;
}
require __DIR__ . '/../includes/db.php';
// xử lý cập nhật trạng thái
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update_status'])) {
  $stmt = $pdo->prepare('UPDATE orders SET status = ? WHERE id = ?');
  $stmt->execute([$_POST['status'], $_POST['order_id']]);
  header('Location: orders.php'); exit;
}
// lấy danh sách đơn
$orders = $pdo->query('SELECT * FROM orders ORDER BY created_at DESC')->fetchAll();
$pageTitle = 'Quản lý Đơn hàng';
include __DIR__ . '/../includes/header.php';
?>
<main class="section orders-page">
  <div class="container">
    <h2 class="section-title">Quản lý Đơn hàng</h2>
    <table class="orders-table">
      <thead>
        <tr>
          <th>ID</th>
          <th>Họ tên</th>
          <th>Email</th>
          <th>Sản phẩm</th>
          <th>Tổng tiền</th>
          <th>Trạng thái</th>
          <th>Ngày đặt</th>
          <th>Hành động</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($orders as $o): ?>
        <tr>
          <td><?= $o['id'] ?></td>
          <td><?= htmlspecialchars($o['fullname']) ?></td>
          <td><?= htmlspecialchars($o['email']) ?></td>
          <td><pre><?= htmlspecialchars($o['items']) ?></pre></td>
          <td><?= number_format($o['total_price']) ?> đ</td>
          <td>
            <form method="post" class="status-form">
              <input type="hidden" name="order_id" value="<?= $o['id'] ?>">
              <select name="status">
                <?php foreach (['Chờ xử lý','Đã xác nhận','Đã giao'] as $s): ?>
                <option value="<?= $s ?>" <?= $s === $o['status'] ? 'selected' : '' ?>><?= $s ?></option>
                <?php endforeach; ?>
              </select>
              <button type="submit" name="update_status">Lưu</button>
            </form>
          </td>
          <td><?= $o['created_at'] ?></td>
          <td><a href="orders.php?delete=<?= $o['id'] ?>" class="btn-remove" onclick="return confirm('Xoá đơn hàng?')">Xóa</a></td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</main>
<?php include __DIR__ . '/../includes/footer.php'; ?>
<style>
/* orders-page CSS */
.orders-page .container { padding: 40px 0; }
.orders-table {
  width: 100%;
  border-collapse: collapse;
  margin-top: 20px;
}
.orders-table th, .orders-table td {
  border: 1px solid #ddd;
  padding: 12px;
  text-align: left;
}
.orders-table th {
  background: #f4f4f4;
}
.status-form {
  display: flex;
  gap: 8px;
  align-items: center;
}
.status-form select {
  padding: 4px 8px;
  border: 1px solid #ccc;
  border-radius: 4px;
}
.status-form button {
  padding: 6px 12px;
  background: #007b44;
  color: #fff;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
.status-form button:hover { background: #055c31; }
.btn-remove {
  display: inline-block;
  padding: 6px 12px;
  background: #e74c3c;
  color: #fff;
  border-radius: 4px;
}
.btn-remove:hover { background: #c0392b; }
</style>


 