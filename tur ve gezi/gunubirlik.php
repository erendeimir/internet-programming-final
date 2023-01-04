<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Günübirlik Turlar</title>
    <link rel="stylesheet" href="styles/style.css"/>    
</head>
<body>
    <!--! header section start -->
    <header class="header">
        <a href="#" class ="logo">
            <img src="images/logo.jpg" alt="logo">
        </a>
        <nav class ="navbar">
            <a href = "index.php" >AnaSayfa</a>
            <a href = "oteller.php">Oteller</a>
            <a href = "turlar.php">Turlar</a>
            <a href = "gunubirlik.php" class="active">Günübirlik</a>
            <a href = "yorumlar.php">Yorumlar</a>
            <a href = "hakkimizda.php">Hakkımızda</a>
            <a href = "iletisim.php">İletişim</a>
        </nav>
        <div   class= "buttons">
            <button id="search-btn">
                <i class="fas fa-search"></i>
            </button>
            <button>
            <a href="giris.php"><i class="fa-solid fa-user"></i></a>
            </button>
            <button id="menu-btn">
                <i class="fas fa-bars "></i>
            </button>
        </div>
        <div class="search-form">
            <input type="text" class="search-input" id="search-box" placeholder="search here"/>
            <i class="fas fa-search"></i> 
        </div>
    </header>
    <!--! header section end -->

    <!--! blog section start -->
<section class="blog">
<h1 class="heading"> GÜNÜBİRLİK <span>TURLAR</span> </h1>
<div class="box-container">
    <div class="box">
        <div class="image">
            <img src="images/cumalikizik.jpg" alt="bursa" />
        </div>
        <div class="content">
            <a href="#" class="title">10/01/2023, Pazar</a>
            <span>CumalıKızık Turu</span>
            <p>Cumalıkızık, Bursa'ya 10 kilometre, Yıldırım ilçesine 
                3 kilometre uzaklıkta yer alan, kestane ve incir ağaçları 
                arasında yan yana duran cumbalı evleri ve daracık parke taşlı sokaklarıyla,
                 rengarenk boyalı evleri ve kırmızı kiremitli çatılarıyla, Osmanlı dönemine 
                 ait en iyi sivil mimari örneğidir</p>           
            <a href="#" class="btn"> katıl</a>
        </div>
    </div>

    <div class="box">
        <div class="image">
            <img src="images/canakkalee.png" alt="gecilmez" />
        </div>
        <div class="content">
            <a href="#" class="title"> 18/03/2023, Pazar</a>
            <span>Şehitlik Turu</span>
            <p>Çanakkale Şehitleri Anıtı, Çanakkale il sınırları içindeki Gelibolu Yarımadası'nda,
                 Çanakkale Boğazı'nın ucunda Morto Koyu önündeki Hisarlık Tepe üzerinde yer alan anıt.
                  1915 yılında I. Dünya Savaşı sırasında Çanakkale Savaşları'nda hayatını kaybeden 
                  Türk askerlerin anısına yaptırıldı.</p>          
            <a href="#" class="btn"> katıl</a>
        </div>
    </div>

    <div class="box">
        <div class="image">
            <img src="images/uludağ.png" alt="bursa" />
        </div>
        <div class="content">
            <a href="#" class="title"> 22/02/2023, Pazar</a>
            <span>Uludağ Turu</span>
            <p>
                Uludağ, Olimpos Dağı olarak da bilinir. Bursa ili sınırları içinde,
                 2543 m yüksekliği ile Türkiye'nin en büyük kış ve doğa sporları merkezi olan dağ.
                 Evliya Çelebi seyahatnamesinde bu dağdan CEBELİ RUHBAN diye söz eder. 
                 Ayrıca halk arasında KEŞİŞ dağı olarakta bilinir.
                 Bursa Uludağ
            </p>
           
            <a href="#" class="btn"> katıl</a>
        </div>
    </div>


</div>
</section>
<!--! blog section end -->

    <!--! footer section start -->
<section class="footer">
    <div class="search">
        <input type="text" class="search-input" placeholder="Search" />
        <button class="btn btn-primary">search</button>
    </div>
    <div class="share">
        <a href="#" class="fab fa-facebook"></a>
        <a href="#" class="fab fa-twitter"></a>
        <a href="#" class="fab fa-instagram"></a>
        <a href="#" class="fab fa-linkedin"></a>
        <a href="#" class="fab fa-pinterest"></a>
    </div>
    <div class="links">
    <a href = "#" class="active">AnaSayfa</a>
            <a href = "#">Oteller</a>
            <a href = "#">Turlar</a>
            <a href = "#">Şehirler</a>
            <a href = "#">Hakkımızda</a>
            <a href = "#">İletişim</a>
    </div>
    <div class="credit">
        Credit By <span>Eren Demir</span> | Tüm Hakları Saklıdır.
    </div>
</section>
<!--! footer section end -->

<script src="js/script.js"></script>

</body>
</html>