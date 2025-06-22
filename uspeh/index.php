<?php
$pageTitle = "Успех — Счастье рядом";
$activePage = "uspeh";
include '../includes/header.php';
?>
  <main>

  <main>
     <section class="banner banner--medium">
  <img src="/images/uspeh-banner.webp" alt="Достижение целей" class="banner-img" />
  <div class="banner-title-group">
  <div class="banner-title">Успех</div>
  <div class="banner-subtitle">Здесь вы найдёте вдохновляющие материалы о достижении целей, развитии уверенности, самореализации и секретах успешных людей.</div>
</section>
   
    <section class="cards-section">
      <h2 class="section-heading">Материалы об успехе</h2>
      <div class="cards-list">
        <a href="/uspeh/goal.php" class="card card-happiness">
          <img src="/images/uspeh-goal.webp" alt="Постановка целей" class="card-img" />
          <div class="card-icon">🎯</div>
          <div class="card-title">Постановка целей</div>
          <div class="card-desc">Как правильно ставить и достигать свои мечты</div>
          <span class="card-btn">Подробнее</span>
        </a>
        <a href="/uspeh/motivation.php" class="card card-happiness">
          <img src="/images/uspeh-motivation.webp" alt="Мотивация каждый день" class="card-img" />
          <div class="card-icon">🚀</div>
          <div class="card-title">Мотивация каждый день</div>
          <div class="card-desc">Рабочие методы для поддержания энтузиазма</div>
          <span class="card-btn">Подробнее</span>
        </a>
        <a href="/uspeh/time.php" class="card card-happiness">
          <img src="/images/uspeh-time.webp" alt="Управление временем" class="card-img" />
          <div class="card-icon">⏰</div>
          <div class="card-title">Управление временем</div>
          <div class="card-desc">Секреты продуктивности для занятых людей</div>
          <span class="card-btn">Подробнее</span>
        </a>
        <a href="/uspeh/inspiration.php" class="card card-happiness">
          <img src="/images/uspeh-inspiration.webp" alt="Истории успеха" class="card-img" />
          <div class="card-icon">🏆</div>
          <div class="card-title">Истории успеха</div>
          <div class="card-desc">Вдохновляющие примеры знаменитых людей</div>
          <span class="card-btn">Подробнее</span>
        </a>
      </div>
    </section>
  </main>

  <?php include '../includes/footer.php'; ?>