<?php

require __DIR__ . '\includes\db.php';

$success = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fullname = $_POST['fullname'] ?? '';
    $email    = $_POST['email'] ?? '';
    $message  = $_POST['message'] ?? '';

    $stmt = $pdo->prepare(
      "INSERT INTO contacts (fullname, email, message)
       VALUES (?, ?, ?)"
    );
    $stmt->execute([$fullname, $email, $message]);

    $success = 'Cảm ơn bạn đã liên hệ! Chúng tôi sẽ phản hồi sớm nhất.';
}

$pageTitle = 'Liên hệ - Lafarm';
include  'includes/header.php';
?>
<main class="section contact-page">
  <div class="container">
    <h2>Liên hệ với chúng tôi</h2>
    <?php if ($success): ?>
      <p class="success"><?= htmlspecialchars($success) ?></p>
    <?php endif; ?>
    <form method="post" action="contact.php">
      <input type="text" name="fullname" placeholder="Họ tên" required>
      <input type="email" name="email" placeholder="Email" required>
      <textarea name="message" placeholder="Lời nhắn..." required></textarea>
      <button type="submit">Gửi</button>
    </form>
  </div>
</main>
<?php include  'includes/footer.php'; ?>