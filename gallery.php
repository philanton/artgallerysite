<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="Picture gallery and auctions.">
    <meta name="keywords" content="Auction, Picture, Gallery">
    <meta name="author" content="Enthony Phil">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Картинна галерея.</title>
    <link href="jquery-ui/jquery-ui.min.css" rel="stylesheet">
    <script src="jquery-ui/external/jquery/jquery.js"></script>
    <script src="jquery-ui/jquery-ui.min.js"></script>
    <script src="unitegallery/js/unitegallery.min.js"></script>
    <link rel="stylesheet" href="unitegallery/css/unite-gallery.css">
    <script src="unitegallery/themes/tilesgrid/ug-theme-tilesgrid.js"></script>
    <link rel="stylesheet" href="https://www.meteoprog.ua/css/winformer.min.css?id=100">
    <link href="styles/styles.css" rel="stylesheet">
    <script type="text/javascript">
      $(document).ready(function() {
        $("#gallery").unitegallery({
          gallery_theme: "tilesgrid",
          tile_enable_textpanel:true,
          tile_textpanel_title_text_align: "center",
          tile_textpanel_always_on: true,
          tile_textpanel_bg_color: "var(--background-color)",
          tile_textpanel_title_color: "var(--text-color)",
          tile_textpanel_bg_opacity: 0.7,
          tile_enable_image_effect:true,
          tile_image_effect_reverse:true,
        });
        $("#slider").slider({
          min: 5000,
          max: 100000,
          range: true,
          values: [15000, 90000],
          step: 500
        });
        $("#spinner1").spinner({
          min: 5000,
          max: 100000,
          step: 500
        }).spinner("value", 15000);
        $("#spinner2").spinner({
          min: 5000,
          max: 100000,
          step: 500
        }).spinner("value", 90000);
        $( "#button" ).button();
        $( "#radioset" ).buttonset();
      });
    </script>
    <style media="screen">
      .ui-slider-handle:active {
        background-color: var(--default-color);
      }
      #spinners {
        width: 100%;
        padding: 10px 0;
      }
      .ui-spinner {
        margin-right: 5px;
        width: 45%;
      }
    </style>
  </head>
  <body>
    <?php
      $picType = "";
      $picMin = $picMax = 0;
      if ($_SERVER["REQUEST_METHOD"] == "GET") {
        if (!empty($_GET["radio"])) {
          $picType = clean($_GET["radio"]);
        }
        if (!empty($_GET["min"])) {
          $picMin = clean($_GET["min"]);
        }
        if (!empty($_GET["max"])) {
          $picMax = clean($_GET["max"]);
        }
      }
      function clean($data) {
        return htmlspecialchars(trim($data));
      }
    ?>
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
      <h1>Галерея</h1>
      <aside>
        <h2 style="margin: 0; padding: 10px;">Фільтрація</h2>
        <form class="" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="get" style="padding: 15px;">
          <div id="radioset">
            <input type="radio" id="radio1" name="radio" value="type1"><label for="radio1">Type 1</label>
            <input type="radio" id="radio2" name="radio" value="type2" checked="checked"><label for="radio2">Type 2</label>
          </div>
          <h3>Діапазон цін</h3>
          <div id="slider"></div>
          <div id="spinners">
            <input id="spinner1" name="min">
            <input id="spinner2" name="max">
          </div>
          <button id="button">Submit</button>
        </form>
        <?php echo "Ви вибрали картини типу ".$picType." у діапазоні цін від ".$picMin." до ".$picMax.".";?>
      </aside>
      <div class="Main">
        <div id="gallery">
          <img src="img/image_1.jpg" alt="Preview Image 1.1"
               data-image="img/image_1.jpg"
               data-description="Preview Image 1.2">
          <img src="img/image_2.jpg" alt="Preview Image 2.1"
               data-image="img/image_2.jpg"
               data-description="Preview Image 2.2">
          <img src="img/image_3.jpg" alt="Preview Image 3.1"
               data-image="img/image_3.jpg"
               data-description="Preview Image 3.2">
          <img src="img/image_4.jpg" alt="Preview Image 4.1"
               data-image="img/image_4.jpg"
               data-description="Preview Image 4.2">
          <img src="img/image_5.jpg" alt="Preview Image 5.1"
               data-image="img/image_5.jpg"
               data-description="Preview Image 5.2">
          <img src="img/image_6.jpg" alt="Preview Image 6.1"
               data-image="img/image_6.jpg"
               data-description="Preview Image 6.2">
        </div>
      </div>
    </div>
    <footer>
      <div class="Contacts">
        <h2>Контакти: </h2>
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
