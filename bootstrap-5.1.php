<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<style>

.card{
  margin-bottom:30px;
  position: relative;
    -webkit-transform: scale(1);
    -ms-transform: scale(1);
    -moz-transform: scale(1);
    transition: all .3s ease-in;
    -moz-transition: all .3s ease-in;
    -webkit-transition: all .3s ease-in;
    -ms-transition: all .3s ease-in;

}
.card:hover{
  z-index:2;
    -webkit-transform: scale(1.1);
    -ms-transform: scale(1.1);  
    -moz-transform: scale(1.1);
    transform: scale(1.1);
}
.icerik{
  margin-top: 45px;
}
.form{
  position:absolute;
    top:-50px;
    left:-50px;
}
.card-header{
  font-family: 'Fira Sans', sans-serif;
}
.card{
  font-family: 'Fira Sans', sans-serif;
}
@media(max-width:991px) {
  .kutu{
    display:none;
  }
 .card{
    width: 30%;
  }
}
</style>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col mb-4">
      <?php
    include 'menu.php';
    ?>  
      </div>
    </div> 
    <div class="row" >
      <div class="col" style="z-index:-1;">
      <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="resimler/blue-mosque-520634_640.jpg" height="400px" class=" w-100" alt="...">
    </div>
  
  </div>
</div>
<!-- <form action="" name="arama" method="post" class="form">
  <input type="text" name="arama" placeholder="Arama">
  <input type="submit" name="gonder" value="G??nder"  >
</form> -->
      </div>
    </div>
    
   <div class="row icerik">
           
              <div class="card col-3 col-md-3 me-4">
                  <img src="resimler/Fresh_ayran.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <p class="card-text">MS 552-745 y??llar?? aras??nda h??k??m s??ren G??kt??rkler, ek??iyen yo??urdun ek??ili??ini azaltmak i??in ??zerine su eklediler. B??ylece tesad??fen ayran ortaya ????km???? oldu</p>
                  </div>
                </div>
                <div class="card col-3  col-md-3 me-4">
                  <img src="resimler/pexels-ahmed-11389292 (1).jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <p class="card-text">1543 y??l??nda Yemen Valisi ??zdemir Pa??a, lezzetine hayran kald?????? kahveyi ??stanbul'a getirdi. T??rkler taraf??ndan bulunan yepyeni haz??rlama metodu sayesinde kahve, g??????m ve cezvelerde pi??irilerek T??rk Kahvesi ad??n?? ald??.</p>
                  </div>
                </div>
                <div class="card col-3 col-md-3 ">
                  <img src="resimler/pexels-ugur-tandogan-8739080.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <p class="card-text">2004 y??l??nda T??rkiye 205.500 tonluk (d??nyan??n toplam ??ay ??retiminin %6,4) ??ay ??retimi ile d??nya ??zerindeki en b??y??k ??ay pazarlar??ndan biri olmu??tur.[6] Ayr??ca, 2004'te T??rkiye ki??i ba????na 2,5 kg'l??k ??ay t??ketimi ile d??nya birincisi olmu??, onu ki??i ba????na 2,1 kg ile ??ngiltere izlemi??tir.</p>
                  </div>
                </div>
              <div class="icerik col-2 ms-4 ">
                <div class="kutu " >
                  <header class="card-header mb-4 text-center fs-5">T??rklerin ????ecek K??lt??r??</header>
                  <div class="ps-4" style="border-left: 1px solid black;">
                  <span>K??kl?? bir  i??ecek k??lt??r?? olan t??rklerin g??n??m??zde en ??ok t??ketti??i i??eceklerin ba????nda ayran,kahve ve ??ay geliyor. T??rklerin milli i??ece??i olarak bilinen ayran ise d??nyan??n t??ketti??i i??ecek olmu?? durumda.
                    ??lginizi ??ekerse ayran??n yay??k olan??n??,kahvenin bol k??p??kl??s??n?? ve ??ay??n siyah ??ay(t??rk ??ay??) olan??n?? i??meyi unutmay??n. </span>

                  </div>
               
                </div>
              </div>
   </div>
   <div class="row icerik">
              <div class="card col-3 col-md-3 me-4">
                  <img src="resimler/frappe.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <p class="card-text">Yunanl??lar kahveyi sever. G????l?? aromal?? ??ok g????l?? bir kahve i??meyi severler. Yunanlar k???? mevsiminde Yunan kahvesi, cappuccino, cappuccino latte, s??cak ??ikolata gibi s??cak i??ecekleri tercih ederken, s??cak aylarda frappe ve buzlu espresso (freddo espresso), freddo cappuccino gibi so??uk buzlu kahveler tercih edilir. </p>
                  </div>
                </div>
                <div class="card col-3 col-md-3 me-4">
                  <img src="resimler/sarap.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <p class="card-text">Antik ??a??lardan beri Yunanistan, d??nyan??n en b??y??k ve en ??nemli ??arap ??reticilerinden biri olmu??tur </p>
                  </div>
                </div>
                <div class="card col-3 col-md-3 me-2">
                  <img src="resimler/b??ra.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <p class="card-text">Yunanistan???da bira ??retimi olduk??a yayg??nd??r. Mithos, Alfa, Fix, Vergina, Eza en ??ok bilinen ve hemen hemen her taverna ve barda bulunabilen yerli Yunan biralar??d??r. 
                    Yunanistan???da son y??llarda kurulan bir??ok k??????k lokal bira fabrikas?? taraf??ndan ??ok ??zel tatlarda ve bir??ok uluslararas?? yar????mada ??ne ????kan bira markalar?? da bulunmaktad??r.</p>
                  </div>
                </div>
              <div class="icerik col-2 ">
                <div class="kutu " >
                  <header class="card-header mb-4 text-center fs-5">Yunanl??lar??n ????ecek K??lt??r??</header>
                  <div class="ps-4" style="border-left: 1px solid black;">
                  <span> Yunanl??lar kahve ve i??ki i??meyi ??ok severler. Kendi ??retimleri olan bir??ok ??arap markas?? vard??r. Yolunuz d????erse ??araplar??n?? denemeyi unutmay??n.</span>
                  </div>
               
                </div>
              </div>
           
   </div>
                <div class="col position-relative mt-4">
                  <button class="btn btn-info next position-absolute bottom-50 end-50">
                  <a href="page2.php"> ??leri</a>  
                 </button>
                </div>
                <!-- <button class="btn btn-info previous" style="float: left;" onclick="window.location.href='http://site.com/geri.html'">Geri</button> -->


              </div>
              
             
            </div>
    
</body>
</html>