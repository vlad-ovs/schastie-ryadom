<?php
$pageTitle = "Библиотека — Счастье рядом";
$activePage = "biblioteka";
include '../includes/header.php';
?>

<main id="main-content">
    <!-- Хлебные крошки -->
    <nav class="breadcrumbs" aria-label="breadcrumb">
        <ul>
            <li><a href="/">Главная</a></li>
            <li><span aria-current="page">Библиотека</span></li>
        </ul>
    </nav>

    <div class="main-with-sidebar">
        <aside class="sidebar">
            <nav class="sidebar-menu">
                <div class="sidebar-title">Разделы библиотеки</div>
                <ul>
                    <li><a href="#read"><svg class="sidebar-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M4 19V5c0-1.1.9-2 2-2h12c1.1 0 2 .9 2 2v14c0 1.1-.9 2-2 2H6c-1.1 0-2-.9-2-2zm14 0V5H6v14h12zM9 10h6c.55 0 1-.45 1-1s-.45-1-1-1H9c-.55 0-1 .45-1 1s.45 1 1 1zm0 4h6c.55 0 1-.45 1-1s-.45-1-1-1H9c-.55 0-1 .45-1 1s.45 1 1 1zm0 4h6c.55 0 1-.45 1-1s-.45-1-1-1H9c-.55 0-1 .45-1 1s.45 1 1 1z"/></svg> Прочитать</a></li>
                    <li><a href="#watch"><svg class="sidebar-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M10 16.5l6-4.5-6-4.5v9zM12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"/></svg> Посмотреть</a></li>
                    <li><a href="#listen"><svg class="sidebar-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M12 3v10.55c-.59-.34-1.27-.55-2-.55-2.21 0-4 1.79-4 4s1.79 4 4 4 4-1.79 4-4V7h4V3h-8zm0 16c-1.66 0-3-1.34-3-3s1.34-3 3-3 3 1.34 3 3-1.34 3-3 3z"/></svg> Прослушать</a></li>
                    <li><a href="#categories"><svg class="sidebar-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M10 3H4c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V7c0-1.1-.9-2-2-2h-8l-2-2zM4 19V5h16l-.01 14H4zM11 12H9v-2h2v2zm4 0h-2v-2h2v2zm4 0h-2v-2h2v2z"/></svg> Книги и статьи по темам</a></li>
                </ul>
            </nav>
            <div class="sidebar-block">
                <div class="sidebar-title">Советуем</div>
                <ul>
                    <li><a href="#recommended-read"><svg class="sidebar-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M13 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0-6c1.1 0 2 .9 2 2s-.9 2-2 2-2-.9-2-2 .9-2 2-2zm0 7c-2.67 0-8 1.34-8 4v3h16v-3c0-2.66-5.33-4-8-4zm-6 4c.22-.72 3.31-2 6-2 2.69 0 5.78 1.28 6 2H7z"/></svg> Книги</a></li>
                    <li><a href="#recommended-watch"><svg class="sidebar-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zM12 6c-3.31 0-6 2.69-6 6s2.69 6 6 6 6-2.69 6-6-2.69-6-6-6z"/></svg> Фильмы</a></li>
                    <li><a href="#recommended-listen"><svg class="sidebar-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M12 3v10.55c-.59-.34-1.27-.55-2-.55-2.21 0-4 1.79-4 4s1.79 4 4 4 4-1.79 4-4V7h4V3h-8zm0 16c-1.66 0-3-1.34-3-3s1.34-3 3-3 3 1.34 3 3-1.34 3-3 3z"/></svg> Аудио</a></li>
                </ul>
            </div>
        </aside>

        <section class="section-content">
            <nav class="cards-section" style="margin-top:1.5em;">
                <div class="cards-list">
                    <a class="card" href="#read">
                        <img src="https://via.placeholder.com/240x120/FFD66B/FFFFFF?text=Прочитать" alt="Иконка книги" class="card-img" />
                        <div class="card-icon">📚</div>
                        <div class="card-title">Прочитать</div>
                        <div class="card-desc">Книги и статьи для онлайн-чтения</div>
                    </a>
                    <a class="card" href="#watch">
                        <img src="https://via.placeholder.com/240x120/FFD66B/FFFFFF?text=Посмотреть" alt="Иконка фильма" class="card-img" />
                        <div class="card-icon">🎬</div>
                        <div class="card-title">Посмотреть</div>
                        <div class="card-desc">Фильмы, видео и вдохновляющие сюжеты</div>
                    </a>
                    <a class="card" href="#listen">
                        <img src="https://via.placeholder.com/240x120/FFD66B/FFFFFF?text=Прослушать" alt="Иконка аудио" class="card-img" />
                        <div class="card-icon">🎧</div>
                        <div class="card-title">Прослушать</div>
                        <div class="card-desc">Аудиокниги, лекции, медитации</div>
                    </a>
                </div>
            </nav>

            <div class="cards-section" id="recommended-read">
                <h2 class="section-heading">Советуем прочитать</h2>
                <div class="cards-list">
                    <!-- Книжные карточки, как в твоём демо HTML (можно скопировать из предыдущего примера) -->
                </div>
            </div>

            <div class="cards-section" id="recommended-watch">
                <h2 class="section-heading">Советуем посмотреть</h2>
                <ul class="media-list">
                    <!-- Список фильмов -->
                </ul>
            </div>

            <div class="cards-section" id="recommended-listen">
                <h2 class="section-heading">Советуем прослушать</h2>
                <ul class="media-list">
                    <!-- Список аудио -->
                </ul>
            </div>

            <div class="cards-section" id="categories">
                <h2 class="section-heading">Книги и статьи по темам</h2>
                <ul class="popular-list">
                    <!-- Список тематик -->
                </ul>
            </div>
        </section>
    </div>

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
            <a href="/biblioteka/quotes.php" class="card card-happiness card-quote">
                <img src="/images/biblioteka-quotes.webp" alt="Цитаты и афоризмы" class="card-img" />
                <div class="card-icon card-quote-icon">💬</div>
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