
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Algo Nuevo, Algo Viejo</title>
    <link href="css/styles.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  </head>
  <body>
    <div class="top-container">
      <nav class="interactive-nav">
       <input type="image" src="images/search-icon.png" class="search-icon">
       <input type="text" placeholder="Buscar un producto o marca">
       <input type="image" src="images/cart-icon.png" class="cart-icon">
       <a href="/logueo">Log in</a>
       <a href="/register">Registrate</a>
      </nav>
      <a href="/home"><img src="images/logo60s.png" alt="logo" class="main-logo" style="width: 300px"></a>
    </div>

    <div class="header" id="myHeader">
      <a href="/novias">Novias</a>
      <a href="/quinceaneras">Quinceaneras</a>
      <a href="/fiestas">Fiestas</a>
      <a href="/madrinas">Madrinas</a>
    </div>


    <div class="headerDos" id="elHeaderDos">
      <div class="headerLeft">
        <a href="/home"><input type="image" src="images/logo60s.png" class="logoEnHeader" style="width:100px"; height="75px"></a>
        <a href="/novias">Novias</a>
        <a href="/quinceaneras">Quinceaneras</a>
        <a href="/fiestas">Fiestas</a>
        <a href="/madrinas">Madrinas</a>
      </div>
      <div class="headerRight">
        <input type="image" src="images/search-icon.png" class="search-iconHeader" style="width:30px"; height="30px">
        <input type="text" placeholder="Buscar un producto o marca" class="searchSpot">
        <input type="image" src="images/cart-icon.png" class="cart-iconHeader" style=width:30px; height="30px">
        <a href="/logueo">Log in</a>
        <a href="/register">Registrate</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
        <img src="images/hamburger.png" class="hamburguesa"></a>
      </div>
    </div>

    <div class="banner">
      <img src="images/banner-friends-cut2.jpg" alt="" class="banner-friends">
    </div>

    <div class="catalogo-container">
      <div class="box">
        <img src="images/kids-partydress.jpg" alt="">
        <h4>Vestido de fiesta para nena</h4>
        <br>
        <h4>$400</h4>
      </div>
      <div class="box">
        <img src="images/party-dress.jpg" alt="">
        <h4>Vestido de fiesta, talle 1</h4>
        <br>
        <h4>$1200</h4>
        </div>
      <div class="box">
        <img src="images/party-dress2.jpg" alt="">
        <h4>Vestido de fiesta, talle 3</h4>
        <br>
        <h4>$900</h4>
        </div>
      <div class="box">
        <img src="images/party-dress3.jpg" alt="">
        <h4>Vestido de fiesta, talle 3</h4>
        <br>
        <h4>$1000</h4>
        </div>
      <div class="box">
        <img src="images/wedding-dress1.jpg" alt="">
        <h4>Vestido de novia, talle 2</h4>
        <br>
        <h4>$2300</h4>

      </div>
      </div>

    </div>
    <div class="footer">
      <a href="/faq">Preguntas frecuentes</a>
      <a href="/sobrenosotros">Sobre nosotros</a>
    </div>



      <script>
      window.onscroll = function() {myFunction()};

      var header = document.getElementById("elHeaderDos");
      var sticky = header.offsetTop;
      var div= ("#elHeaderDos");

      function myFunction() {
        if (window.pageYOffset > sticky) {
          header.classList.add("sticky");
          header.style.display="flex";
        } else {
          header.classList.remove("sticky");
          header.style.display="none";
        }
      }
      function myFunction2() {
          var x = document.getElementById("elHeaderDos");
          if (x.className === "headerDos") {
              x.className += " responsive";
          } else {
              x.className = "headerDos";
          }
      }


      </script>


  </body>
</html>
