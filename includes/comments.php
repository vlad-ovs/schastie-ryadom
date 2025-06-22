  <div id="vk_comments"></div>
<script type="text/javascript">
  VK.Widgets.Comments("vk_comments", {
    limit: 10,
    attach: "*",
    width: "100%",
    page_id: location.pathname // чтобы у каждой страницы были свои комментарии
  });
</script>
<div id="disqus_thread"></div>
<script>
var disqus_config = function () {
    this.page.url = 'https://<?=$_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]?>'; // полный URL текущей страницы
    this.page.identifier = '<?=md5($_SERVER["REQUEST_URI"])?>'; // уникальный идентификатор для каждой страницы (можно заменить на свой вариант)
};
(function() {
    var d = document, s = d.createElement('script');
    s.src = 'https://statschaslivym.disqus.com/embed.js';
    s.setAttribute('data-timestamp', +new Date());
    (d.head || d.body).appendChild(s);
})();
</script>
<noscript>
    Пожалуйста, включите JavaScript для просмотра комментариев Disqus.
</noscript>
<script id="dsq-count-scr" src="//statschaslivym.disqus.com/count.js" async></script>
