<?php
session_start();
require __DIR__ . '/../includes/db.php';

$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = trim($_POST['user']);
    $pass1 = $_POST['pass1'];
    $pass2 = $_POST['pass2'];
    if (empty($user) || empty($pass1) || $pass1 !== $pass2) {
        $error = 'Vui lòng nhập đúng và khớp mật khẩu.';
    } else {
        $hash = password_hash($pass1, PASSWORD_DEFAULT);
        $stmt = $pdo->prepare('INSERT INTO admin_users (username, password) VALUES (?, ?)');
        $stmt->execute([$user, $hash]);
        header('Location: login.php'); exit;
    }
}
$pageTitle = 'Admin Đăng ký';
include __DIR__ . '/../includes/header.php';
?>
<main class="section auth-page">
  <div class="container auth-container">
    <h2>Đăng ký Admin</h2>
    <?php if ($error): ?>
      <p class="error"><?= htmlspecialchars($error) ?></p>
    <?php endif; ?>
    <form class="auth-form" method="post" action="admin/register.php">
      <input type="text" name="user" placeholder="Tên đăng nhập" required>
      <input type="password" name="pass1" placeholder="Mật khẩu" required>
      <input type="password" name="pass2" placeholder="Nhập lại mật khẩu" required>
      <button type="submit">Đăng ký</button>
    </form>
    <p>Đã có tài khoản? <a href="admin/login.php">Đăng nhập</a></p>
  </div>
</main>
<?php include __DIR__ .  '/../includes/footer.php'; ?>
