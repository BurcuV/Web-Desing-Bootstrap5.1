<form class="d-flex  pe-4">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/1b1bb6f98c.js" crossorigin="anonymous"></script>

    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@0,500;1,400&display=swap" rel="stylesheet">
</head>
<style>
    *{
        margin: 0;
        padding: 0;
        font-family: sans-serif;
    }
    nav{
     
        background: linear-gradient(#E06459,#E09981);
        width: 100%;
        height: 80px;
        left: 0;
    }
    nav #menuBtn{
        display: none;
    }
    nav .menuBtn{
        font-size: 2rem;
        color: #f1faee;
        float: right;
        line-height: 80px;
        margin-right: 2rem;
        display: none;
    }
    nav .logo{
       
        font-size: 2rem;
        display: inline-block;
        height: 80px;
        line-height: 80px;
        padding: 0 2rem;
    }
    nav ul{
        float: right;
        margin-right: 2rem;
    }
    nav ul li{
        display: inline-block;
        line-height: 80px;
        margin: 0 .2rem;
    }
    nav ul li a{
        color: #f1faee;
        font-size: 1rem;
        padding: .5rem;
        border-radius: 3px;
        text-decoration: none;
        font-family: 'Fira Sans', sans-serif;
       border-bottom: 1px solid white;
       transition: border-bottom 1s ;
    }
    nav ul li a:hover{
      color: white;
      border-bottom: 1px solid transparent;
    }
    @media (max-width:991px){
        nav .menuBtn{
            display: block;
        }
        nav ul{
          position: absolute;
          background: linear-gradient(#E06459,#E09981);
            width: 60%;
            height: calc(100vh-80px);
            top: 80px;
            display: flex;
           flex-direction: column;
           align-items: center;
           justify-content: center;
           transition: all .5s;
           left: -100%;
           margin-left: 20%;
        
        }
        nav ul li{
            display: block;
            min-width: 80%;
            text-align: center;
            line-height: 4rem;
        }
        nav ul li a{
            display: block;
            font-size: 1.4rem;
        }
    }
    nav #menuBtn:checked ~ ul{
        left: 0;
    }
    nav #menuBtn:checked ~ label.menuBtn i::before{
        content: "\f00d";
    }
    .pe-4{
        padding-right: 0px!important;
    }
</style>
<body>
    <nav>
        <h1 class="logo">
            <img src="resimler/amera__6_-removebg-preview-min.png" width="60" height="60"   alt="">
        </h1>
        <input type="checkbox" id="menuBtn">
        <label for="menuBtn" class="menuBtn">  <i class="fa-solid fa-bars"></i></label>
      
        <ul>
            <li><a href="">Kültürel Resimler</a></li>
            <li><a href="">Doğa Resimleri</a></li>
            <li><a href="">Nesne Resimleri</a></li>
            <li><a href="">Canlı Resimleri</a></li>
        </ul>
    </nav>
   

</body>
</html>