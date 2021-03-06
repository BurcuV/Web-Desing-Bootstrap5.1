

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
</head>
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
.carousel-item img{
object-fit: cover!important;
}

  </style>
<body>
<div class="container">
    <div class="row">
      <div class="col">
      <?php
    include 'menu.php';
    ?>  
      </div>
    </div> 
    <div class="row icerik">
              <div class="col-lg-3 col-md-4">
                <div class="card">
                  
                  <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  </div>
                </div>  
              </div>
        <div class="row">
          <div class="col mt-4">
            
          <button class="btn btn-info previous position-absolute bottom-50 end-50" onclick="window.location.href='bootstrap-5.1.php'">Geri</button>
          </div>
        </div>
        
      </div>
    <!--
opendir fonksiyonu= klos??r?? ya da dizini a??ar.
readdir fonksiyonu = opendir fonksiyonu ile belle??e y??klenen dosyalar?? okur.
is_file fonksiyonu = ula????lmak istenilen dosyan??n, dosya olup olmad??????n?? kontrol eder.
-->

<?php
# Resimleri cek
$dizin = "resimler";//Resminizin Bulundu??u Yolu Yaz??n??z
$dosya_verilerinin_tutuldu??u_de??i??ken = opendir($dizin); // dizin de??i??kenine eklenen dosyay?? a????yoruz
while($dosya = readdir($dosya_verilerinin_tutuldu??u_de??i??ken)){ //php y??klenen dosyay?? okuyor
if(is_file($dizin."/".$dosya)) //dizindeki dosyay?? yani resim dosyas??n?? kontrol ediyoruz.
$resim[] = $dosya; 
}
closedir($dosya_verilerinin_tutuldu??u_de??i??ken); // dosyan??n  resim dizinini okuyup,kapat??yoruz.

# ??n bilgiler
$limit = 10; //Bir sayfada g??sterilecek resim say??s??
$sayfa = $_GET["sayfa"];
if($sayfa < 1) $sayfa = 1;
$toplam = count($resim);

# Bu bilgiler do??rultusunda
$kactan = ($sayfa-1) * $limit;
$kaca = ($kactan+$limit);
if($kaca > $toplam) $kaca = $toplam;

# $kactan ba??lay??p $kaca kadar resim bas
for($i=$kactan; $i < $kaca; $i++){
echo " 
<a href='".$dizin."/".$resim[$i]."' target='_blank'>
<img onContextMenu='return false' src='".$dizin."/".$resim[$i]."' 
width='150' height='200' border='0'></a>";
}
echo" </br></br></br>";
# Birden ba??lay??p sayfa say??s?? kadar link bas
for($i=1; $i < $toplam / $limit; $i++){
if($sayfa == $i)
echo "$in"; else
echo "<a href='resim.php?sf=$i'>$i</a>n";
}
?>
 </div>
</body>
</html>