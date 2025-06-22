<?php
$pageTitle = "Счастье — Счастье рядом";
$activePage = "schastje";
include '../includes/header.php';
?>
  <main>
       <section class="banner banner--medium">
  <img src="/images/schastje-banner.webp" alt="Девушка радостно встречает рассвет на цветущем поле" class="banner-img" />
  <div class="banner-title-group">
  <div class="banner-title">Счастье</div>
  <div class="banner-subtitle">Всё о внутренней радости, гармонии и простых способах стать счастливее каждый день.</div>
  </div>
</section>
                <section class="cards-section">
      <h2 class="section-heading">Подразделы</h2>
      <div class="cards-list">
        <a href="/schastje/aphorisms.php" class="card">
          <div class="card-title">Афоризмы</div>
          <div class="card-desc">Коллекция вдохновляющих цитат и афоризмов о счастье.</div>
        </a>
        <a href="/schastje/articles.php" class="card">
          <div class="card-title">Статьи</div>
          <div class="card-desc">Полезные и вдохновляющие статьи о радости, гармонии и внутреннем балансе.</div>
        </a>
        <a href="/schastje/practices.php" class="card">
          <div class="card-title">Практики</div>
          <div class="card-desc">Упражнения и техники для развития счастья и позитивного мышления.</div>
        </a>
        <a href="/schastje/books.php" class="card">
          <div class="card-title">Книги</div>
          <div class="card-desc">Список лучших книг о счастье и личном росте.</div>
        </a>
      </div>
    </section>

    <section class="cards-section">
      <h2 class="section-heading">Популярные материалы</h2>
      <div class="cards-list">
        <a href="/schastje/article1.php" class="card">
          <div class="card-title">10 шагов к счастью</div>
        </a>
        <a href="/schastje/article2.php" class="card">
          <div class="card-title">Как сохранять радость каждый день</div>
        </a>
        <a href="/schastje/article3.php" class="card">
          <div class="card-title">Практики благодарности</div>
        </a>
      </div>
      <div class="quote-block" style="margin-top:36px;">
        <strong>Цитата дня:</strong>
        <em>«Счастье — это не пункт назначения, а способ путешествовать»</em>
      </div>
    </section>
  </main>

 <?php include '../includes/footer.php'; ?>