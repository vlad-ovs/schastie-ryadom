<?php
$pageTitle = "Счастье рядом";
// $activePage не указываем
include 'includes/header.php';
?>
<!-- Контент главной -->
  <main id="main-content">
   <section class="banner banner--large">
  <img src="/images/main-banner.webp" alt="Счастье рядом" class="banner-img" />
  <div class="banner-title">Счастье рядом</div>
</section>
    <section class="welcome">
      <p>
        Добро пожаловать! Здесь вы найдёте вдохновляющие материалы о том, как стать счастливее, выстроить тёплые отношения в семье,
        вырастить гармоничных детей и заботиться о духовном и физическом здоровье.
      </p>
    </section>
    <section class="cards-section">
      <h2 class="section-heading">Популярные материалы</h2>
      <div class="cards-list">
        <a href="/schastje/article1.php" class="card">
          <img src="/images/card-steps.webp" alt="10 шагов к счастью" class="card-img" />
          <div class="card-title">10 шагов к счастью</div>
          <div class="card-desc">Пошаговое руководство к радостной жизни</div>
        </a>
        <a href="/schastje/article2.php" class="card">
          <img src="/images/card-joy.webp" alt="Как сохранять радость каждый день" class="card-img" />
          <div class="card-title">Как сохранять радость каждый день</div>
          <div class="card-desc">Советы и практики на каждый день</div>
        </a>
        <a href="/schastje/practices.php" class="card">
          <img src="/images/card-gratitude.webp" alt="Практики благодарности" class="card-img" />
          <div class="card-title">Практики благодарности</div>
          <div class="card-desc">Лучшие упражнения для осознанности</div>
        </a>
        <a href="/schastje/books.php" class="card">
          <img src="/images/card-books.webp" alt="Лучшие книги о счастье" class="card-img" />
          <div class="card-title">Лучшие книги о счастье</div>
          <div class="card-desc">Рекомендации для чтения</div>
        </a>
        <a href="/schastje/aphorisms.php" class="card">
          <img src="/images/card-aphorisms.webp" alt="Афоризмы о счастье" class="card-img" />
          <div class="card-title">Афоризмы о счастье</div>
          <div class="card-desc">Вдохновляющие цитаты</div>
        </a>
      </div>
    </section>
    <section class="cards-section">
      <h2 class="section-heading">Видео</h2>
      <div class="cards-list">
        <a href="https://www.youtube.com/watch?v=someid1" target="_blank" class="card card-video">
          <img src="/images/card-video1.webp" alt="Как стать счастливее: простые шаги" class="card-img" />
          <div class="card-title">Как стать счастливее: простые шаги</div>
        </a>
        <a href="https://www.youtube.com/watch?v=someid2" target="_blank" class="card card-video">
          <img src="/images/card-video2.webp" alt="Секреты гармонии и радости" class="card-img" />
          <div class="card-title">Секреты гармонии и радости</div>
        </a>
      </div>
    </section>
    <section class="cards-section">
      <h2 class="section-heading">Аудио</h2>
      <div class="cards-list">
        <a href="/audio/happy-mind.mp3" target="_blank" class="card card-audio">
          <img src="/images/card-audio1.webp" alt="Медитация на счастье" class="card-img" />
          <div class="card-title">Медитация на счастье</div>
        </a>
        <a href="/audio/gratitude.mp3" target="_blank" class="card card-audio">
          <img src="/images/card-audio2.webp" alt="Практика благодарности" class="card-img" />
          <div class="card-title">Практика благодарности</div>
        </a>
      </div>
    </section>
    <section class="cards-section">
      <h2 class="section-heading">Афоризмы</h2>
      <div class="cards-list">
        <div class="card card-quote">
          <div class="card-quote-icon">🌟</div>
          <div class="card-title">Счастье — это не пункт назначения, а способ путешествовать.</div>
        </div>
        <div class="card card-quote">
          <div class="card-quote-icon">🌻</div>
          <div class="card-title">Счастье — это когда тебя понимают.</div>
        </div>
      </div>
    </section>
  </main>
<?php include 'includes/footer.php'; ?>
 