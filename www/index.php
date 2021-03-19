<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cypress Demo</title>
    <link rel="stylesheet" href="/static/reset.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

    <link rel="stylesheet" href="/static/style.css" />
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

</head>
<body>
<div id="bg-op"></div>
<div id="grid" class="grid">
    <div class="menu">
        <a id="menu-hide" class="fa fa-bars hide-main-menu"></a>
        <ul id="menu-main" class="cy-main-menu show-main-menu">
            <li><a href="#home">Home</a></li>
            <li><a href="#what">What is Cypress?</a></li>
            <li><a href="#why">Why should you use it?</a></li>
            <li><a href="#who">Who is using it?</a></li>
            <li><a href="#install">How to install it?</a></li>
        </ul>
    </div>
    <div id="content">
        <h1 id="title"></h1>
        <div id="text"></div>
    </div>
</div>
<script>

  function getPage(page)
  {
    var data = $.getJSON('content.php?page=' + page, function (data) {
      $('#content #text').slideUp('slow');
      $('#content #title').slideUp('slow', function () {
        $('#content #title').html(data.title);
        $('#content #text').html(data.contents);
      });
      $('#content #title').slideDown('slow', function (){
        $('#content #text').slideDown('slow');
      });
    });
  }
  $('#menu-main li a').click(function (e) {
    e.stopPropagation();
    var href = $(this).attr('href').substring(1);
    getPage(href);
  });

  getPage('home');

  var show_menu = true;
  $('#menu-hide').click(function (e) {

      if (show_menu) {

        $('.menu').animate({'width': '20%'}, 'fast', function () {
          console.log('show');
          $('#menu-main').show('slow');
        });
        show_menu = false;
      } else {

        $('#menu-main').hide('slow', function () {
          $('.menu').animate({'width': '35px'}, 'fast');
        });
        show_menu = true;
      }
    }
  );

</script>
</body>
</html>