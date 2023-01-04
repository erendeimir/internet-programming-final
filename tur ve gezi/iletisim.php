<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>İletişim</title>
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
            <a href = "hakkimizda.php">Hakkımızda</a>
            <a href = "iletisim.php" class="active">İletişim</a>
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

    <!--! contact section end -->
<section class="contact">
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