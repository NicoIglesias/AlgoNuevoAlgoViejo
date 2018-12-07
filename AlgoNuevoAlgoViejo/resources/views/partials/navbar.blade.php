<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Algo Nuevo, Algo Viejo</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans"
     rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
    body {
      margin: 0;
      font-family: 'Josefin Sans', sans-serif;
    }
    .headerDos {
      background: #F5CEB1;
      color: black;
      display: flex;
      justify-content:space-around;
      flex: 1;
      height: 90px;
      overflow: hidden;
    }
    .headerDos a:hover{
      background-color: #FCECF0;
      text-decoration: none;
    }
    .headerDos .icon {
      display: none;
    }
    .active {
      color: white;
    }


    .headerDos a{
      text-decoration: none;
      font-size: 23px;
      display: block;
      float: left;
      color: black;
      text-align: center;
      padding: 14px 16px;
    }

    .headerLeft{
      justify-content: flex-start;
      align-items: center;
      flex: 1;
      display: flex;
    }

    .headerRight{
      justify-content: flex-end;
      align-items: center;
      display: flex;
      flex: 1;
    }

    .headerRight a{
      font-size: 17px;
    }
    .sticky {
      position: fixed;
      top: 0;
      width: 100%;
    }

    .sticky + .content {
      padding-top: 102px;
    }
    .search-icon {
      width: 27px;
    	height: 37px;
      padding-top: 10px;
    }

    .cart-icon {
      width: 27px;
      height: 37px;
      padding-top: 10px;
    }
    .searchSpot{
      width: 300px;
      height: 35px;
    }
    @media screen and (max-width: 1137px) {
      .headerDos a:not(:first-child) {display: none;}
      .headerDos a.icon {
        float: right;
        display: block;
      }
    }

    @media screen and (max-width: 1137px) {
      .headerDos.responsive {position: relative;}
      .headerDos.responsive .icon {
        position: absolute;
        right: 0;
        top: 0;
      }
      .headerDos.responsive a {
        float: none;
        display: block;
        text-align: left;
      }
    }
    .hamburguesa{
      width: 50px;
      padding-top: 10px;
    }
    </style>
  <body>
    <div class="headerDos" id="elHeaderDos">
      <div class="headerLeft">
        <a href="/home"><input type="image" src="images/logo60s.png" class="active" style="width:100px"; height="75px"></a>
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
    <script>
    window.onscroll = function() {myFunction()};
    var header = document.getElementById("elHeaderDos");
    var headeruno = document.getElementById("myHeader");
    var sticky = header.offsetTop;
    var div= ("#elHeaderDos");
    var x = document.getElementById("elHeaderDos");

    function myFunction() {
      if (window.pageYOffset > sticky) {
        header.classList.add("sticky");
      } else {
        header.classList.remove("sticky");
      }
    }
    function myFunction() {
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
