// assets/js/checkout.js
// Render giỏ hàng từ localStorage lên bảng thanh toán

document.addEventListener('DOMContentLoaded', () => {
  const cart = JSON.parse(localStorage.getItem('cart')) || [];
  const tbody = document.querySelector('#checkout-summary tbody');
  const totalEl = document.getElementById('checkout-total');
  const itemsData = document.getElementById('items-data');
  const totalData = document.getElementById('total-data');
  let total = 0;

  // Nếu không có cart, thông báo
  if (cart.length === 0) {
    tbody.innerHTML = '<tr><td colspan="4" style="text-align:center; padding:20px;">Giỏ hàng của bạn đang trống.</td></tr>';
  } else {
    cart.forEach(item => {
      const row = document.createElement('tr');
      const amount = item.price * item.qty;
      total += amount;
      row.innerHTML = `
        <td>${item.name}</td>
        <td>${item.price.toLocaleString()} đ</td>
        <td>${item.qty}</td>
        <td>${amount.toLocaleString()} đ</td>
      `;
      tbody.appendChild(row);
    });
  }

  // Cập nhật tổng tiền trên UI và hidden inputs
  totalEl.textContent = total.toLocaleString();
  itemsData.value = JSON.stringify(cart);
  totalData.value = total;
});
