<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" type="text/css" href="/static/css/donate.css" />
    <link rel="shortcut icon" href="/static/img/stuff/favicon.ico" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
    <div class="wrapper">
      <?php require_once(ROOT."/theme/views/blocks/loader.php")?>
      <div class="messageContainer">
        <div class="left">
          <iframe class="don" src="https://widgets.freekassa.ru?type=payment-window&lang=ru&theme=light&default_amount=100&api_key=c7f3a73da1ad85f050ea8556d1546bd5&shopID=17598" width="300" height="500" frameborder="0"></iframe>
        </div>
        <div class="right">
            <img src="/static/img/stuff/happy_top.png">
        </div>
      </div>
      <div class="botlabel">
        <p>Вернуться на главную: <a href="/">Fairy Tail</a></p>
      </div>
    </div>
  </body>
</html>
