<?php
session_start();
require __DIR__ . '/../includes/db.php';
$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = trim($_POST['user']);
    $pass = trim($_POST['pass']);
    $stmt = $pdo->prepare('SELECT * FROM admin_users WHERE username = ?');
    $stmt->execute([$user]);
    $admin = $stmt->fetch();
    if ($admin && password_verify($pass, $admin['password'])) {
        $_SESSION['admin'] = $admin['id'];
        header('Location: orders.php'); exit;
    } else {
        $error = 'Tài khoản hoặc mật khẩu không đúng.';
    }
}
$pageTitle = 'Admin Đăng nhập';
include  __DIR__ . '/../includes/header.php';

?>
<main class="section auth-page">
  <div class="container auth-container">
    <h2>Đăng nhập Admin</h2>
    <?php if ($error): ?>
      <p class="error"><?= htmlspecialchars($error) ?></p>
    <?php endif; ?>
    <form class="auth-form" method="post" action="admin/login.php">
      <input type="text" name="user" placeholder="Tên đăng nhập" required>
      <input type="password" name="pass" placeholder="Mật khẩu" required>
      <button type="submit">Đăng nhập</button>
    </form>
    <p>Chưa có tài khoản? <a href="admin/register.php">Đăng ký</a></p>
  </div>
</main>
<?php include __DIR__ .  '/../includes/footer.php'; ?>