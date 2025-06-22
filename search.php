<?php
$pageTitle = "Поиск по сайту — Счастье рядом";
$activePage = "search";
include 'includes/header.php';
?>
<main>
    <div class="search-container">
      <input type="text" id="site-search" placeholder="Поиск по сайту..." autofocus />
    </div>
    <div id="search-results">
      <div class="search-stub">Поиск по сайту появится позже.</div>
    </div>
</main>
<?php include 'includes/footer.php'; ?>