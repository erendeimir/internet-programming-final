<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Lotus Tur & Gezi</title>
    <link rel="stylesheet" href="styles/style.css"/>    
</head>
<body>
    <!--! header section start -->
    <header class="header">
        <a href="#" class ="logo">
            <img src="images/logo.jpg" alt="logo">
        </a>
        <nav class ="navbar">
        <a href = "index.php" class="active">AnaSayfa</a>
            <a href = "oteller.php">Oteller</a>
            <a href = "turlar.php">Turlar</a>
            <a href = "gunubirlik.php">Günübirlik</a>
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

    <!--! Anasayfa section start -->
    <section class= "home" id="home"> 
    <div class="content">       
    <h3>ERKEN REZERVASYON FIRSATLARINI KAÇIRMA!</h3>
        <p>
            rezervasyon yapmak için 
</p>
<a href="kayit.php" class="btn">Kayıt Ol</a>
</div>
</section>
    <!--! Menü section start -->
<section class ="menu" id="menu">
    <h1 class="heading"> otel <span>fırsatları</span> </h1>
    <div class="box-container">
    <div class="box">
        <div class="box-head">
<img src="images/otel1.jpg" alt="menu">
<span class="menu-category">ANTALYA</span>
<h3>GECELİK</h3>
<div class="price">2799.99 TL <span>2999.99</span></div>
        </div>
        <div class="box-bottom">
<a href="#" class="btn">Rezervasyon Yap</a>
        </div>
    </div>

    <div class="box">
        <div class="box-head">
<img src="images/otel2.jpg" alt="menu">
<span class="menu-category">BALIKESİR</span>
<h3>GECELİK</h3>
<div class="price">3499.99 TL <span>3799.99</span></div>
        </div>
        <div class="box-bottom">
<a href="#" class="btn">Rezervasyon Yap</a>
        </div>
    </div>

    <div class="box">
        <div class="box-head">
<img src="images/otel3.jpg" alt="menu">
<span class="menu-category">KÜTAHYA</span>
<h3>GECELİK</h3>
<div class="price">1499.99 TL <span>1699.99</span></div>
        </div>
        <div class="box-bottom">
<a href="#" class="btn">Rezervasyon Yap</a>
        </div>
    </div>

    <div class="box">
        <div class="box-head">
            <img src="images/otel4.jpg" alt="menu">
            <span class="menu-category">İZMİR</span>
            <h3>GECELİK</h3>
            <div class="price">999.99 TL <span>1049.99</span></div>
        </div>
        <div class="box-bottom">
                 <a href="#" class="btn">Rezervasyon Yap</a>
        </div>
    
    </div>

</div>
    
</section>
    <!--! Menü section end -->

    <!--! 2. Menü section start -->
    <section class ="menu" id="menu2">
    <h1 class="heading"> tur <span>fırsatları</span> </h1>
    <div class="box-container">
    <div class="box">
        <div class="box-head">
<img src="images/tur3.jpg" alt="menu">
<span class="menu-category">GAZİANTEP TURU</span>
<h3>3 Gece 4 Gün</h3>
<div class="price">5399.99 <span>5499.99</span></div>
        </div>
        <div class="box-bottom">
<a href="#" class="btn">Rezervasyon Yap</a>
        </div>
    </div>

    <div class="box">
        <div class="box-head">
<img src="images/tur1.jpg" alt="menu">
<span class="menu-category">KARADENİZ TURU</span>
<h3>3 GECE 4 GÜN</h3>
<div class="price">6899.99 TL <span>7199.99</span></div>
        </div>
        <div class="box-bottom">
<a href="#" class="btn">Rezervasyon Yap</a>
        </div>
    </div>

    <div class="box">
        <div class="box-head">
<img src="images/tatil4.jpg" alt="menu">
<span class="menu-category">KAPADOKYA TURU</span>
<h3>3 Gece 4 Gün</h3>
<div class="price">2699.99 TL <span>2999.99</span></div>
        </div>
        <div class="box-bottom">
<a href="#" class="btn">Rezervasyon Yap</a>
        </div>
    </div>

    <div class="box">
        <div class="box-head">
            <img src="images/tur4.jpg" alt="menu">
            <span class="menu-category">KÜTAHYA TURU</span>
            <h3>3 Gece 4 Gün</h3>
            <div class="price">4199.99 TL <span>4999.99</span></div>
        </div>
        <div class="box-bottom">
                 <a href="#" class="btn">Rezervasyon Yap</a>
        </div>
    
    </div>

</div>
    
</section>




    <!--! 2. Menü section end -->

    <!--! about section start -->
<section class="about" id="about">
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

    <!--! review section start -->
    <section class="review" id="review">
    <h1 class="heading"> müşteri <span>yorumları</span> </h1>
    <div class="box-container">
        <div class="box">
            <img src="images/yorum3.png" alt="yorum" />
        <p>kesinlikle çok güvenilir bir site, nafi bunu beğendi.</p>
        <img src="images/nafigural.jpg" alt="nafi" class="user" />
        <h3>Nafi Güral</h3>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
        </div>
        </div>

        <div class="box">
            <img src="images/yorum3.png" alt="yorum" />
        <p>kesinlikle çok güvenilir bir site, hadise bunu beğendi.</p>
        <img src="images/hadise.jpg" alt="hadise" class="user" />
        <h3>Hadise</h3>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
        </div>
        </div>

        <div class="box">
            <img src="images/yorum3.png" alt="yorum" />
        <p>kesinlikle çok güvenilir bir site, elon bunu beğendi.</p>
        <img src="images/elonun.jpg" alt="elon" class="user" />
        <h3>Elon Musk</h3>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
        </div>
        </div>
    </div>  
    </section>
    <!--! review section end -->

    <!--! contact section end -->
<section class="contact" id="contact">
<h1 class="heading"> İletİşİme <span>geç</span> </h1>
<div class="row">
<iframe class="map"src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d230.75088767723025!2d29.981246724980394!3d39.41810543794941!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14c9480c481654a9%3A0xa3c1972e107388ca!2sCumhuriyet%20Cd.%2C%20K%C3%BCtahya%20Merkez%2FK%C3%BCtahya!5e0!3m2!1str!2str!4v1671985138540!5m2!1str!2str" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
<form>
    <h3> İletİşİm bİlgİlerİnİz</h3>
    <div class="inputbox">
      <i class="fas fa-user"></i>
      <input type="text" placeholder="isim" />
    </div>
      <div class="inputbox">
      <i class="fas fa-envelope"></i>
      <input type="text" placeholder="e-mail" />
    </div>
      <div class="inputbox">
      <i class="fas fa-phone"></i>
      <input type="text" placeholder="telefon numarası" />
      </div>
      <input type="submit" class="btn" value="gönder" />      
      
</form>

</div>
</section>
<!--! contact section end -->

<!--! blog section start -->
<section class="blog" id="blog">
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
    <a href = "#home" class="active">AnaSayfa</a>
            <a href = "#menu">Oteller</a>
            <a href = "#menu2">Turlar</a>
            <a href = "#review">Yorumlar</a>
            <a href = "#about">Hakkımızda</a>
            <a href = "#contact">İletişim</a>
    </div>
    <div class="credit">
        Credit By <span>Eren Demir</span> | Tüm Hakları Saklıdır.
    </div>
</section>
<!--! footer section end -->

<script src="js/script.js"></script>

</body>
</html>