let searchIndex = [];

fetch('/search-index.json')
  .then(response => response.json())
  .then(data => {
    searchIndex = data;
  });

document.addEventListener('DOMContentLoaded', function () {
  const input = document.getElementById('site-search');
  const results = document.getElementById('search-results');

  if (!input) return;

  input.addEventListener('input', function () {
    const query = this.value.trim().toLowerCase();
    results.innerHTML = '';
    if (!query) return;

    const found = searchIndex.filter(item =>
      item.title.toLowerCase().includes(query) ||
      item.description.toLowerCase().includes(query)
    );

    if (found.length === 0) {
      results.innerHTML = '<p>Ничего не найдено.</p>';
      return;
    }

    found.forEach(item => {
      const div = document.createElement('div');
      div.className = 'search-result';
      div.innerHTML = `<a href="${item.url}"><strong>${item.title}</strong></a><span>${item.description}</span>`;
      results.appendChild(div);
    });
  });
});