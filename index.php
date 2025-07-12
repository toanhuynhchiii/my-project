<?php
$pageTitle = 'Trang chủ - Lafarm';
include 'includes/header.php';
?>
  <section class="hero">
    <div class="slideshow-container">
      <div class="slide"><img src="assets/images/banner1.jpg" alt="Banner 1"></div>
      <div class="slide"><img src="assets/images/banner2.jpg" alt="Banner 2"></div>
      <div class="slide"><img src="assets/images/banner3.jpg" alt="Banner 3"></div>
    </div>
  </section>

  <section id="about" class="section">
    <h2>Yến Sào - Thực Phẩm Bổ Dưỡng Số 1 Cho Sức Khỏe Hiện Tại</h2>
    <div class="blog-grid">
      <!-- công dụng -->
      <div class="blog-card1">
        <img src="assets/images/congdung.jpg" alt="congdung">
        <h3>Công dụng thần thánh của yến sào</h3>
        <p>Trên thực tế, nhiều người đã nói rằng chỉ với 1 hủ nước yến sào ( đã chế biến từ tổ yến ) có thể xóa bỏ trạng thái mệt mỏi ngay lập tức</p>
        <a href="#">Xem thêm</a>
      </div>
      <!-- Các món ăn liên quan -->
      <div class="blog-card1">
        <img src="assets/images/chebien.jpg" alt="chebien">
        <h3>Một số món ăn được chế biến từ tổ yến</h3>
        <p>Tổ yến thô sẽ có mùi khá tanh, vì thế chúng ta cần chế biến kỹ lưỡng trước khi sử dụng để có trải nghiệm tốt. Dưới đây là 1 mốt cách chế biến mà bạn có thể làm tại nhà </p>
          <table>
        <thead>
            <tr>
                <th>Tên</th>
                <th>Nguyên liệu và tác dụng</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                
                <td>Chè yến chưng đường phèn</td>
                <td>Món cổ điển, dễ làm, giữ trọn dưỡng chất, ó thể thêm: táo đỏ, kỷ tử, hạt sen, long nhãn.</td>
            </tr>
            <tr>
                
                <td>Súp yến</td>
                <td>Nấu cùng gà xé, nấm đông cô, trứng cút. Thích hợp cho người bệnh, người lớn tuổi.</td>
            </tr>
            <tr>
                
                <td>Yến chưng hạt sen – bạch quả</td>
                <td>Bổ não, an thần, tốt cho người mất ngủ, làm việc trí óc.</td>
            </tr>
            <tr>
                
                <td>Yến chưng sữa tươi</td>
                <td>Ngon miệng, bổ sung canxi, vitamin D, thích hợp cho trẻ em và người lớn tuổi.</td>
            </tr>
            <tr>
                
                <td>Yến chưng táo đỏ</td>
                <td>Tốt cho phụ nữ sau sinh, bổ máu, làm đẹp da.</td>
            </tr>
            <tr>
                
                <td>Tổ yến hầm gà ác</td>
                <td>Đại bổ, phục hồi sau phẫu thuật, tốt cho sản phụ sau sinh.</td>
            </tr>
        </tbody>
    </table>
        <a href="#">Xem thêm</a>
      </div>
    </div>
  </section>

  <section id="products" class="section">
    <h2>Sản phẩm nổi bật</h2>
    <div class="product-grid">
      <!-- Sản phẩm mẫu --> 
      <div class="product-card">
        <img src="assets/images/product1.jpg" alt="Yến 1">
        <h3>Yến Sào</h3>
        <p>100% tự nhiên</p>
        <span>600.000đ</span>
        <button onclick="addToCart('Yến Sào', 60000)">Thêm vào giỏ</button>
      </div>
      <div class="product-card">
        <img src="assets/images/product2.jpg" alt="Yến 2">
        <h3>Yến Huyết Sào</h3>
        <p>100% tự nhiên</p>
        <span>1.180.000đ</span>
        <button onclick="addToCart('Yến Huyết Sào', 180000)">Thêm vào giỏ</button>
      </div>
      <div class="product-card">
        <img src="assets/images/product3.jpg" alt="Yến 3">
        <h3>Yến Thô</h3>
        <p>100% tự nhiên</p>
        <span>600.000đ</span>
        <button onclick="addToCart('Yến Thô', 30000)">Thêm vào giỏ</button>
      </div>
      <!-- Sản phẩm mẫu 
      <div class="product-card">
        <img src="assets/images/product4.jpg" alt="Yến 4">
        <h3>Hồng Yến Thô</h3>
        <p>100% tự nhiên</p>
        <span>60.000đ</span>
        <button onclick="addToCart('Hồng Yến Thô', 60000)">Thêm vào giỏ</button>
      </div> -->
      <!-- Có thể thêm sản phẩm tương tự -->
    </div>
  </section>

  <section id="blog" class="section">
    <h2>Những Chuyện Bên Lề</h2>
    <div class="blog-grid">
      <div class="blog-card">
        <img src="assets/images/post1.jpg" alt="Blog 1">
        <h3>Hãy Cẩn Thận Yến Thật Và Yến Giả</h3>
        <p>Hiện nay vì đồng tiền mà con người đã trở thành con thú, có thể sản xuất ra hàng nghìn sản phẩm giả để trục lợi. Thị trường yến sào cũng không thể tránh khỏi vấn đề này. Hãy cẩn thận với những sản phẩm yến giá rẻ!!!!</p>
        <a href="#">Xem thêm</a>
      </div>
    </div>
  </section>

  <section id="contact" class="section">
    <h2>Đặt lịch tư vấn</h2>
    <form action="contact.php" method="post">
      <input type="text" name="fullname" placeholder="Họ tên" required>
      <input type="email" name="email" placeholder="Email" required>
      <textarea name="message" placeholder="Lời nhắn..." required></textarea>
      <button type="submit">Gửi</button>
    </form>
  </section>
  <button id="back-to-top" onclick="scrollToTop()" title="Lên đầu trang">↑</button>

<?php include 'includes/footer.php'; ?>

<script src="assets/js/cart.js"></script>
<script src="assets/js/slider.js"></script>
<script src ="assets/js/header.js"></script>
<script src="assets/js/products.js"></script>