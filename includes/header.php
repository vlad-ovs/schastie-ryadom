<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?= isset($pageTitle) ? $pageTitle : "Счастье рядом" ?></title>
  <!-- <link rel="stylesheet" href="/css/style.css"> -->
  <link rel="stylesheet" href="/css/reset.css">
<link rel="stylesheet" href="/css/header.css">
<link rel="stylesheet" href="/css/nav.css">
<link rel="stylesheet" href="/css/banner.css">
<link rel="stylesheet" href="/css/cards.css">
<link rel="stylesheet" href="/css/sections.css">
<link rel="stylesheet" href="/css/aphorisms.css">
<link rel="stylesheet" href="/css/search.css">
<link rel="stylesheet" href="/css/footer.css">
<link rel="stylesheet" href="/css/typography-adaptive.css">
<link rel="stylesheet" href="/css/biblioteka.css">
<link rel="stylesheet" href="/css/sidebar.css">
<link rel="stylesheet" href="/css/global-font.css">
<link rel="stylesheet" href="/css/recommend-card-responsive.css">
  <!-- VK Open API для виджета комментариев -->
  <script src="https://vk.com/js/api/openapi.js?169" type="text/javascript"></script>
  <script type="text/javascript">
    VK.init({ apiId: 53754976, onlyWidgets: true });
  </script>
</head>
<body>
  <header class="main-header">
    <a href="/index.php" class="logo-title">
  <span class="logo-emoji">😊</span>
  <span class="site-title">Счастье рядом</span>
</a>
    <!-- Поле поиска -->
    <div class="search-link-bar"
      tabindex="0"
      role="button"
      aria-label="Открыть поиск по сайту"
      onclick="location.href='/search.php'"
      onkeydown="if(event.key==='Enter'||event.key===' '){location.href='/search.php'}"
    >
      <span class="search-icon" aria-hidden="true">
        <svg width="22" height="22" viewBox="0 0 20 20" fill="none">
          <circle cx="9" cy="9" r="7" stroke="#8d929a" stroke-width="2"/>
          <line x1="14.07" y1="14.07" x2="18" y2="18" stroke="#8d929a" stroke-width="2" stroke-linecap="round"/>
        </svg>
      </span>
      <span class="search-placeholder">Поиск...</span>
    </div>
    <button id="menu-toggle" class="burger" aria-label="Открыть меню">
      <span></span><span></span><span></span>
    </button>
    <nav class="nav">
      <ul class="nav-menu" id="nav-list">
        <li><a href="/schastje/index.php" class="<?= ($activePage == 'schastje') ? 'active' : '' ?>">Счастье</a></li>
        <li><a href="/uspeh/index.php" class="<?= ($activePage == 'uspeh') ? 'active' : '' ?>">Успех</a></li>
        <li class="nav-item <?= in_array($activePage, ['love','semia','deti','relations']) ? 'active' : '' ?>">
          <a href="#">Отношения</a>
          <ul class="submenu">
            <li><a href="/love/index.php" class="<?= ($activePage == 'love') ? 'active' : '' ?>">Любовь</a></li>
            <li><a href="/semia/index.php" class="<?= ($activePage == 'semia') ? 'active' : '' ?>">Семья</a></li>
            <li><a href="/deti/index.php" class="<?= ($activePage == 'deti') ? 'active' : '' ?>">Дети</a></li>
          </ul>
        </li>
        <li><a href="/zdorovie/index.php" class="<?= ($activePage == 'zdorovie') ? 'active' : '' ?>">Здоровье</a></li>
        <li><a href="/biblioteka/index.php" class="<?= ($activePage == 'biblioteka') ? 'active' : '' ?>">Библиотека</a></li>
        <li><a href="https://partner-magazin.ru/" target="_blank" class="<?= ($activePage == 'shop') ? 'active' : '' ?>">Магазин</a></li>
        <li><a href="/search.php" class="<?= $activePage === 'search' ? 'active' : '' ?>">Поиск</a></li>
      </ul>
    </nav>
  </header>