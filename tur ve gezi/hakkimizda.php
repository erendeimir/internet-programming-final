<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Hakkımızda</title>
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
            <a href = "gunubirlik.php">Günübirlik</a>
            <a href = "yorumlar.php">Yorumlar</a>
            <a href = "hakkimizda.php" class="active">Hakkımızda</a>
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

    <!--! about section start -->
<section class="about">
<h1 class="heading"> () <span>hakkımızda</span> </h1>
<div class="row">
    <div class="image">
        <img src="images/logo.jpg" alt="about" >
    </div>
    <div class="content">
        <h3>Geleceğe seyahat…</h3>
        <p>LOTUS demek seyahate, tatile, keşfetmeye dair her şey demek…
             Kurulduğu günden bugüne, sahip olduğu 60 yıla yakın deneyimi,
              üstün hizmet anlayışı, en iyiyi, en kaliteliyi, 
              en seçkini hedefleyen vizyonuyla, turizmin, 
              seyahatin ve ulaşımın her noktasında faaliyet gösteren
               bir markalar topluluğu hâline gelen LOTUS, ülkemizin 
               en güvenilir markalarından biri olmanın gururunu taşıyor.
                Dünyaca tanınan, trendleri belirleyen, sadece bugünün değil 
                yarının da markası olmak için her geçen gün yenilenen ve 
                gelişen bir kurumsal yapı, alanında en iyilerin bir arada 
                olduğu bir kurum kültürü ve sektöre her gün tam donanımlı, 
                her yönüyle kalifiye profesyoneller kazandıran bir kurum… LOTUS, 
                kısa vadeli başarılarla değil, yarattığı uzun vadeli değerlerle 
                adından söz ettiren bir marka olarak, geçmişte de, bugün de, 
                gelecekte de bu vizyonu sürdürmek üzere çalışıyor.</p>
                <a href="vizyonmisyon.php" class="btn">vizyon ve misyon</a>
    </div>
</div>
</section>



    <!--! about section end -->

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