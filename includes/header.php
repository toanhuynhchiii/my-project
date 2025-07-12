
<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= $pageTitle ?? 'Lafarm' ?></title>
  <base href="/web1/">
<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<header class="main-header">
  <div class="container">
    <a href="index.php" class="logo"><img src="assets/images/logo.png" alt="Lafarm"></a>
    <input type="checkbox" id="menu-toggle">
    <label for="menu-toggle" class="menu-icon">☰</label>
    <nav class="nav-menu">
      <ul>
        <li><a href="index.php">Trang chủ</a></li>
        <li><a href="about.php">Giới thiệu</a></li>
        <li><a href="products.php">Sản phẩm</a></li>
        <li><a href="blog.php">Blog</a></li>
        <li><a href="contact.php">Liên hệ</a></li>
        <li><a href="cart.php">🛒 Giỏ hàng</a></li>
        <?php if(session_status() === PHP_SESSION_NONE) session_start(); ?>
        <?php if(isset($_SESSION['admin']) && $_SESSION['admin']): ?>
          <li><a href="admin/orders.php">Admin</a></li>
          <li><a href="admin/logout.php">Đăng xuất</a></li>
        <?php else: ?>
          <li><a href="admin/login.php">Đăng nhập</a></li>
        <?php endif; ?>
      </ul>
    </nav>
  </div>
</header>