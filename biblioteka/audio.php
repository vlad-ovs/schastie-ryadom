<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=1600, initial-scale=1.0" />
  <title>Аудио — Библиотека</title>
  <link rel="stylesheet" href="/css/style.css" />
</head>
<body>
  <header class="main-header">
    <!-- ... (тот же header) ... -->
  </header>
  <main>
    <section class="section-banner--small">
      <img src="/images/audio-banner.webp" alt="Аудио" class="section-banner-img" />
      <h1>Название аудиозаписи</h1>
    </section>
    <section class="section-content">
      <div class="audio-meta">
        <span class="audio-date">14 июня 2025</span>
        <span class="audio-author">Автор: Мария Петрова</span>
      </div>
      <audio controls>
        <source src="/audio/example-audio.mp3" type="audio/mpeg">
        Ваш браузер не поддерживает аудиоэлемент.
      </audio>
      <p>
        Краткое описание аудиозаписи: о чём она, зачем слушать, для кого полезно.
      </p>
      <ul>
        <li>Краткое содержание</li>
        <li>Основные идеи</li>
      </ul>
    </section>
  </main>
  <footer>
    <p>© 2025 Счастье рядом. Все права защищены.</p>
  </footer>
  <script src="/js/script.js"></script>
</body>
</html>