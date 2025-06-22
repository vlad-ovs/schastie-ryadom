<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=1600, initial-scale=1.0" />
  <title>Видео — Библиотека</title>
  <link rel="stylesheet" href="/css/style.css" />
</head>
<body>
  <header class="main-header">
    <!-- ... (тот же header) ... -->
  </header>
  <main>
    <section class="section-banner--small">
      <img src="/images/video-banner.webp" alt="Видео" class="section-banner-img" />
      <h1>Название видео</h1>
    </section>
    <section class="section-content">
      <div class="video-meta">
        <span class="video-date">14 июня 2025</span>
        <span class="video-author">Автор: Алексей Смирнов</span>
      </div>
      <div class="video-player">
        <video controls width="100%" poster="/images/video-poster.webp">
          <source src="/video/example-video.mp4" type="video/mp4">
          Ваш браузер не поддерживает видеоплеер.
        </video>
      </div>
      <p>
        Краткое описание видео. Почему стоит посмотреть, основные идеи и выводы.
      </p>
      <ol>
        <li>Тезис 1</li>
        <li>Тезис 2</li>
      </ol>
    </section>
  </main>
  <footer>
    <p>© 2025 Счастье рядом. Все права защищены.</p>
  </footer>
  <script src="/js/script.js"></script>
</body>
</html>