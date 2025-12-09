const API_BASE = '../api/api_router.php?resource=';

async function loadDishes() {
  const res = await fetch(API_BASE + 'api/dishes');
  const dishes = await res.json();
  const cont = document.getElementById('dishes');
  cont.innerHTML = dishes.map(d => `
    <article class="card">
      <h3>${d.name}</h3>
      <p class="price">$${Number(d.price).toFixed(2)}</p>
      <p><strong>Categoría:</strong> ${d.category}</p>
      <p><strong>ID:</strong> ${d.id}</p>
    </article>
  `).join('');
}

document.getElementById('orderForm').addEventListener('submit', async (e) => {
  e.preventDefault();
  const payload = {
    dish_id: Number(document.getElementById('dish_id').value),
    customer_name: document.getElementById('customer_name').value,
    notes: document.getElementById('notes').value
  };

  const res = await fetch(API_BASE + 'api/orders', {
    method: 'POST',
    headers: { 'Content-Type': 'application/json' },
    body: JSON.stringify(payload)
  });

  const data = await res.json();
  document.getElementById('orderResult').textContent = JSON.stringify(data, null, 2);
});

loadDishes();
