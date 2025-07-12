document.addEventListener('DOMContentLoaded', () => {
  document.querySelectorAll('.btn-add-cart').forEach(btn => {
    btn.addEventListener('click', () => {
      const id = btn.dataset.id;
      const name = btn.dataset.name;
      const price = parseInt(btn.dataset.price, 10);
      const image = btn.dataset.image;
      const qtyInput = document.querySelector(`.qty-select[data-id="${id}"]`);
      let qty = qtyInput ? parseInt(qtyInput.value, 10) : 1;
      if (isNaN(qty) || qty < 1) qty = 1;
      let cart = JSON.parse(localStorage.getItem('cart')) || [];
      const existIndex = cart.findIndex(item => item.id === id);
      if (existIndex > -1) {
        cart[existIndex].qty += qty;
      } else {
        cart.push({ id, name, price, image, qty });
      }
      localStorage.setItem('cart', JSON.stringify(cart));
      alert(`${name} (x${qty}) đã được thêm vào giỏ hàng!`);
      if (qtyInput) qtyInput.value = 1; // reset
    });
  });
});