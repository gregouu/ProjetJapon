<!DOCTYPE html>
<html lang="fr" xmlns:og="http://ogp.me/ns#">
<head>
    <meta charset="UTF-8">
    <meta property="og:url" content="https://www.projetjapon.com">
    <meta property="og:title" content="THE artist's">
    <meta property="og:description" content="Venez admierer des travaux plus qu'incroyable de plusieurs artistes">
    <meta property="og:image" content="https://journalmetro.com/wp-content/uploads/2019/11/iStock-1166277130-e1574864225841.jpg?w=860">
    
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.5.0/css/foundation.min.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/index.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <title>THE artist's</title>
    <style>
        *{
          margin: 0;
          padding: 0;
          box-sizing: border-box;
          font-family: 'Montserrat',sans-serif;
        }
        nav{
          background: #151515;
          padding: 5px 40px;
        }
        nav ul{
          list-style: none;
          display: flex;
          flex-wrap: wrap;
          align-items: center;
          justify-content: center;
        }
        nav ul li{
          padding: 15px 0;
          cursor: pointer;
        }
        nav ul li.items{
          position: relative;
          width: auto;
          margin: 0 16px;
          text-align: center;
          order: 3;
        }
        nav ul li.items:after{
          position: absolute;
          content: '';
          left: 0;
          bottom: 5px;
          height: 2px;
          width: 100%;
          background: #33ffff;
          opacity: 0;
          transition: all 0.2s linear;
        }
        nav ul li.items:hover:after{
          opacity: 1;
          bottom: 8px;
        }
        nav ul li.logo{
          flex: 1;
          color: white;
          font-size: 23px;
          font-weight: 600;
          cursor: default;
          user-select: none;
        }
        nav ul li a{
          color: white;
          font-size: 18px;
          text-decoration: none;
          transition: .4s;
        }
        nav ul li:hover a{
          color: cyan;
        }
        nav ul li i{
          font-size: 23px;
        }
        nav ul li.btn{
          display: none;
        }
        nav ul li.btn.hide i:before{
          content: '\f00d';
        }
        @media all and (max-width: 900px){
          nav{
            padding: 5px 30px;
          }
          nav ul li.items{
            width: 100%;
            display: none;
          }
          nav ul li.items.show{
            display: block;
          }
          nav ul li.btn{
            display: block;
          }
          nav ul li.items:hover{
            border-radius: 5px;
            box-shadow: inset 0 0 5px #33ffff,
                        inset 0 0 10px #66ffff;
          }
          nav ul li.items:hover:after{
            opacity: 0;
          }
        }

    </style>
</head>
<body>
  

   <figure class="logo"><img src="images/logo.png" alt="Logo du site"></figure>

<nav>
  <ul>
    <li class="logo">Pixie Coding</li>
    <li class="items"><a href="#">Home</a></li>
    <li class="items"><a href="#">About</a></li>
    <li class="items"><a href="#">Blogs</a></li>
    <li class="items"><a href="#">Contact</a></li>
    <li class="items"><a href="#">Feedback</a></li>
    <li class="btn"><a href="#"><i class="fas fa-bars"></i></a></li>
  </ul>
</nav>


