<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="Picture gallery and auctions.">
    <meta name="keywords" content="Auction, Picture, Gallery">
    <meta name="author" content="Enthony Phil">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Новини.</title>
    <link href="jquery-ui/jquery-ui.css" rel="stylesheet">
    <script src="jquery-ui/external/jquery/jquery.js"></script>
    <script src="jquery-ui/jquery-ui.js"></script>
    <link rel="stylesheet" href="https://www.meteoprog.ua/css/winformer.min.css?id=100">
    <link href="styles/styles.css" rel="stylesheet">
  </head>
  <body>
    <header>
      <nav>
        <a href="index.php" title="Повертайтесь сюди, як загубитеся"><img id="Logo" src="" alt="Logo">Головна</a>
        <a href="news.php" title="Слідкуйте за оновленнями">Новини</a>
        <a href="auction.php" title="Йдіть сюди, коли захочете продати чи
        купити картини">Аукціони</a>
        <a href="gallery.php" title="Йдіть сюди, коли захочете знайти чи просто
        подивитися картини">Галерея</a>
        <a href="account.php" title="Тут ваша секретна база, редагуйте все, що
        потрібно">Аккаунт</a>
      </nav>
    </header>
    <div class="Content">
      <h1>Новини</h1>
      <p>Тут будуть з'являтися новини в такому вигляді. Їх публікує лише
      адміністрація сайту.</p>
      <article class="News">
        <h3>Заголовок новини</h3>
        <p>Текст новини</p>
      </article>
    </div>
    <footer>
      <div class="Contacts">
        <h2>Контакти</h2>
        <ul>
          <li><a href="JavaScript: alert(contacts.phoneNumber);">Номер телефону</a></li>
          <li><a href="JavaScript: alert(contacts.address);">Адреса</a></li>
        </ul>
      </div>
      <div class="Info">
        <h2>Про нас</h2>
        <ul></ul>
      </div>
      <div class="Social">
        <h2>Соціальні мережі</h2>
        <div class="sharethis-inline-share-buttons"></div>
        <script src="https://platform-api.sharethis.com/js/sharethis.js#property=60474966406a11001102d54c&product=inline-share-buttons"
                async="async"></script>
      </div>
      <div class="meteoprog-informer"
           style="width: 167px"
           data-params='{"city_ids":"2533",
                         "domain":"https://www.meteoprog.com/en",
                         "id":"60474c542bac9212738b4a2c",
                         "lang":"en"}'>
        <a title="Weather in city of Kyiv"
           target="_blank"
           href="https://www.meteoprog.com/en/weather/Kyiv">
          <img style="margin: 0 auto; display: block"
               src="https://www.meteoprog.ua/images/preloader.gif"
               alt="Loading...">
        </a>
        <a target="_blank"
           class="constructor__met2wlink"
           href="https://www.meteoprog.com/en/review/Kyiv/">
          Weather For 2 Weeks
        </a>
        <a class="constructor__metlink"
           target="_blank"
           href="https://www.meteoprog.com/en">
          <img style="display: block; margin: 0 auto;"
               alt="Meteoprog"
               src="https://www.meteoprog.ua/images/meteoprog-inf.png">
        </a>
        <script src="https://www.meteoprog.ua/js/winformer.min.js?id=100"></script>
      </div>
      <div class="fcia_content">
        <a href="https://finance.ua/ru/currency" target="_top"
           title="Finance.ua" class="fcia">
          Курс валют на портале Finance.ua
        </a>
        <script>
          var fcia_region="ua",
              fcia_lang="ru",
              fcia_height="120",
              fcia_width="190";
        </script>
        <script src="https://finance.ua/script/informer-currency-code.js"></script>
      </div>
    </footer>
    <script src="scripts/script.js"></script>
  </body>
</html>
