
<?php
$pageTitle = "Библиотека — Счастье рядом";
$activePage = "biblioteka";
include '../includes/header.php';
?>
  <main id="main-content">
  <section class="banner banner--medium">
  <img src="/images/biblioteka-banner.webp" alt="Библиотека" class="banner-img" />
  <div class="banner-title-group">
  <div class="banner-title">Библиотека</div>
  <div class="banner-subtitle">В нашей библиотеке вы найдете подборки книг, статей и фильмов, которые вдохновляют, учат радости и помогают становиться лучше. Выбирайте, читайте, смотрите и делитесь открытиями!</div>
  </div>
</section>
    <section class="cards-section">
      <h2 class="section-heading">Подборки для чтения и вдохновения</h2>
      <div class="cards-list">
        <a href="/biblioteka/books.php" class="card card-happiness">
          <img src="/images/biblioteka-books.webp" alt="Лучшие книги" class="card-img" />
          <div class="card-icon">📚</div>
          <div class="card-title">Лучшие книги</div>
          <div class="card-desc">Список самых вдохновляющих и полезных книг</div>
          <span class="card-btn">Подробнее</span>
        </a>
        <a href="/biblioteka/articles.php" class="card card-happiness">
          <img src="/images/biblioteka-articles.webp" alt="Статьи" class="card-img" />
          <div class="card-icon">📰</div>
          <div class="card-title">Статьи</div>
          <div class="card-desc">Интересные статьи по теме счастья и саморазвития</div>
          <span class="card-btn">Подробнее</span>
        </a>
        <a href="/biblioteka/films.php" class="card card-happiness">
          <img src="/images/biblioteka-films.webp" alt="Фильмы и мультфильмы" class="card-img" />
          <div class="card-icon">🎬</div>
          <div class="card-title">Фильмы и мультфильмы</div>
          <div class="card-desc">Коллекция фильмов для вдохновения и хорошего настроения</div>
          <span class="card-btn">Подробнее</span>
        </a>
        <a href="/biblioteka/quotes.php" class="card card-happiness">
          <img src="/images/biblioteka-quotes.webp" alt="Цитаты и афоризмы" class="card-img" />
          <div class="card-icon">💬</div>
          <div class="card-title">Цитаты и афоризмы</div>
          <div class="card-desc">Коллекция мудрых мыслей и вдохновляющих афоризмов</div>
          <span class="card-btn">Подробнее</span>
        </a>
      </div>
    </section>
  </main>

  <footer>
    <p>© 2025 Счастье рядом. Все права защищены.</p>
  </footer>
  <script src="/js/script.js"></script>
</body>
</html>