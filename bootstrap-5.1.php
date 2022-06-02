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
  <input type="submit" name="gonder" value="Gönder"  >
</form> -->
      </div>
    </div>
    
   <div class="row icerik">
           
              <div class="card col-3 col-md-3 me-4">
                  <img src="resimler/Fresh_ayran.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <p class="card-text">MS 552-745 yılları arasında hüküm süren Göktürkler, ekşiyen yoğurdun ekşiliğini azaltmak için üzerine su eklediler. Böylece tesadüfen ayran ortaya çıkmış oldu</p>
                  </div>
                </div>
                <div class="card col-3  col-md-3 me-4">
                  <img src="resimler/pexels-ahmed-11389292 (1).jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <p class="card-text">1543 yılında Yemen Valisi Özdemir Paşa, lezzetine hayran kaldığı kahveyi İstanbul'a getirdi. Türkler tarafından bulunan yepyeni hazırlama metodu sayesinde kahve, güğüm ve cezvelerde pişirilerek Türk Kahvesi adını aldı.</p>
                  </div>
                </div>
                <div class="card col-3 col-md-3 ">
                  <img src="resimler/pexels-ugur-tandogan-8739080.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <p class="card-text">2004 yılında Türkiye 205.500 tonluk (dünyanın toplam çay üretiminin %6,4) çay üretimi ile dünya üzerindeki en büyük çay pazarlarından biri olmuştur.[6] Ayrıca, 2004'te Türkiye kişi başına 2,5 kg'lık çay tüketimi ile dünya birincisi olmuş, onu kişi başına 2,1 kg ile İngiltere izlemiştir.</p>
                  </div>
                </div>
              <div class="icerik col-2 ms-4 ">
                <div class="kutu " >
                  <header class="card-header mb-4 text-center fs-5">Türklerin İçecek Kültürü</header>
                  <div class="ps-4" style="border-left: 1px solid black;">
                  <span>Köklü bir  içecek kültürü olan türklerin günümüzde en çok tükettiği içeceklerin başında ayran,kahve ve çay geliyor. Türklerin milli içeceği olarak bilinen ayran ise dünyanın tükettiği içecek olmuş durumda.
                    İlginizi çekerse ayranın yayık olanını,kahvenin bol köpüklüsünü ve çayın siyah çay(türk çayı) olanını içmeyi unutmayın. </span>

                  </div>
               
                </div>
              </div>
   </div>
   <div class="row icerik">
              <div class="card col-3 col-md-3 me-4">
                  <img src="resimler/frappe.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <p class="card-text">Yunanlılar kahveyi sever. Güçlü aromalı çok güçlü bir kahve içmeyi severler. Yunanlar kış mevsiminde Yunan kahvesi, cappuccino, cappuccino latte, sıcak çikolata gibi sıcak içecekleri tercih ederken, sıcak aylarda frappe ve buzlu espresso (freddo espresso), freddo cappuccino gibi soğuk buzlu kahveler tercih edilir. </p>
                  </div>
                </div>
                <div class="card col-3 col-md-3 me-4">
                  <img src="resimler/sarap.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <p class="card-text">Antik çağlardan beri Yunanistan, dünyanın en büyük ve en önemli şarap üreticilerinden biri olmuştur </p>
                  </div>
                </div>
                <div class="card col-3 col-md-3 me-2">
                  <img src="resimler/bıra.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <p class="card-text">Yunanistan’da bira üretimi oldukça yaygındır. Mithos, Alfa, Fix, Vergina, Eza en çok bilinen ve hemen hemen her taverna ve barda bulunabilen yerli Yunan biralarıdır. 
                    Yunanistan’da son yıllarda kurulan birçok küçük lokal bira fabrikası tarafından çok özel tatlarda ve birçok uluslararası yarışmada öne çıkan bira markaları da bulunmaktadır.</p>
                  </div>
                </div>
              <div class="icerik col-2 ">
                <div class="kutu " >
                  <header class="card-header mb-4 text-center fs-5">Yunanlıların İçecek Kültürü</header>
                  <div class="ps-4" style="border-left: 1px solid black;">
                  <span> Yunanlılar kahve ve içki içmeyi çok severler. Kendi üretimleri olan birçok şarap markası vardır. Yolunuz düşerse şaraplarını denemeyi unutmayın.</span>
                  </div>
               
                </div>
              </div>
           
   </div>
                <div class="col position-relative mt-4">
                  <button class="btn btn-info next position-absolute bottom-50 end-50">
                  <a href="page2.php"> İleri</a>  
                 </button>
                </div>
                <!-- <button class="btn btn-info previous" style="float: left;" onclick="window.location.href='http://site.com/geri.html'">Geri</button> -->


              </div>
              
             
            </div>
    
</body>
</html>