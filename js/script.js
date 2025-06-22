document.addEventListener('DOMContentLoaded', function () {
  const burger = document.getElementById('menu-toggle');
  const navList = document.getElementById('nav-list');
  const navItems = document.querySelectorAll('.nav-item > a');

  // Открытие/закрытие бургер-меню
  burger.addEventListener('click', function () {
    burger.classList.toggle('active');
    navList.classList.toggle('show');
    document.body.classList.toggle('menu-opened'); // Добавляем/убираем класс для затемнения main
    // Закрываем все подменю при открытии/закрытии основного меню
    document.querySelectorAll('.nav-item').forEach(item => item.classList.remove('open'));
  });

  // Управление подменю для мобильных устройств
  navItems.forEach(link => {
    link.addEventListener('click', function (e) {
      if (window.innerWidth <= 768) {
        e.preventDefault();
        const parent = this.parentElement;
        // Сворачиваем другие открытые подменю
        document.querySelectorAll('.nav-item').forEach(item => {
          if (item !== parent) item.classList.remove('open');
        });
        parent.classList.toggle('open');
      }
    });
  });

  // Автоматическое закрытие меню при клике на пункт (не подменю)
  document.querySelectorAll('.nav-menu a:not(.nav-item > a)').forEach(link => {
    link.addEventListener('click', function () {
      if (window.innerWidth <= 768) {
        burger.classList.remove('active');
        navList.classList.remove('show');
        document.body.classList.remove('menu-opened');
        document.querySelectorAll('.nav-item').forEach(item => item.classList.remove('open'));
      }
    });
  });

  // Закрывать меню при изменении размера окна на десктоп
  window.addEventListener('resize', function () {
    if (window.innerWidth > 768) {
      burger.classList.remove('active');
      navList.classList.remove('show');
      document.body.classList.remove('menu-opened');
      document.querySelectorAll('.nav-item').forEach(item => item.classList.remove('open'));
    }
  });
});