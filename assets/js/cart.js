function renderCart() {
  const cartItemsEl = document.getElementById('cart-items');
  const cartTotalEl = document.getElementById('cart-total');
  const cart = JSON.parse(localStorage.getItem('cart')) || [];
  cartItemsEl.innerHTML = '';
  let total = 0;

  if (cart.length === 0) {
    cartItemsEl.innerHTML = '<tr><td colspan="5" class="empty-cart">Giỏ hàng của bạn đang trống.</td></tr>';
  } else {
    cart.forEach((item, index) => {
      total += item.price * item.qty;
      const row = document.createElement('tr');
      row.innerHTML = `
        <td class="product-info">
          <img src="${item.image}" alt="${item.name}" class="product-thumb">
          <span>${item.name}</span>
        </td>
        <td>${item.price.toLocaleString()} đ</td>
        <td><input type="number" data-index="${index}" value="${item.qty}" min="1" class="qty-input"></td>
        <td>${(item.price * item.qty).toLocaleString()} đ</td>
        <td><button data-index="${index}" class="btn-remove">Xóa</button></td>
      `;
      cartItemsEl.appendChild(row);
    });
  }
  cartTotalEl.textContent = total.toLocaleString();
}

document.addEventListener('DOMContentLoaded', () => {
  renderCart();
  const table = document.getElementById('cart-table');
  table.addEventListener('click', e => {
    if (e.target.classList.contains('btn-remove')) {
      let cart = JSON.parse(localStorage.getItem('cart')) || [];
      const index = parseInt(e.target.dataset.index, 10);
      cart.splice(index, 1);
      localStorage.setItem('cart', JSON.stringify(cart));
      renderCart();
    }
  });
  table.addEventListener('change', e => {
    if (e.target.classList.contains('qty-input')) {
      let cart = JSON.parse(localStorage.getItem('cart')) || [];
      const index = parseInt(e.target.dataset.index, 10);
      cart[index].qty = parseInt(e.target.value, 10) || 1;
      localStorage.setItem('cart', JSON.stringify(cart));
      renderCart();
    }
  });
});
