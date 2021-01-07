<!DOCTYPE html>
<html>
<head>
<title>ÜYE KAYIT</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
<!-- I only imported icons from this css style sheet-->
<style>
  
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

.input-container_sign_up_page {
  display: -ms-flexbox;
  display: flex;
  width: 100%;
  margin-bottom: 15px;
}

.icon_sign_up_page {
  padding: 20px;
  background: whitesmoke;
  color: gray;
  min-width: 50px;
  text-align: center;
}

.input-field_sign_up_page {
  width: 100%;
  padding: 10px;
  outline: none;
}


/* Set a style for the submit button */
.btn_sign_up_page {
  background-color: darkblue;
  color: white;
  font-size: 20px;
  padding: 15px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.8;
}



.sign_up_page a:link {
  text-decoration: none;
}

</style>
</head>

<body>
 
<div class="header_navbar_page" id="header_navbar_page">
       <div class="row_navbar_page">
           <div class="column_navbar_page ">
      <img src="logo.png" width="360" height="76"></img>
           </div>
           <div class="column_navbar_page ">
         <form class="arama_navbar_page">
        <input type="text" placeholder="Ürün,kategori veya marka ara" >
        <button type="submit"><i class="fa fa-search"> Ara</i></button>
        </form>
    </div>
    <div class="column_navbar_page ">
        <ul class="ullist_navbar_page">
            <li class="list_social_navbar_page">
                <i class="fas fa-shopping-bag" style=" width: 100%; color:blue;" onclick="document.location='shopping_chart.php'"><br>Sepet</i>
            </li>
            <li class="list_social_navbar_page">
                <i class="far fa-heart" style=" width: 100%;  color:blue;"><br>Favoriler</i>
              </li>
            <li class="list_social_navbar_page">
                <i class="fa fa-user-o" style="width: 100%; color: blue;" onclick="document.location='login.php'" ><br>Giriş Yap</i>   
            </li>
        </ul></div>
    </div>
        <ul class="ullist_navbar_page">
          <li class="dropdown_navbar_page list_navbar_page">
            <a href="products_women.php" class="dropbutton_navbar_page">KADIN</a>
            <div class="dropdown-content_navbar_page">
              <a href="">Kazak</a>
              <a href="">Sweetshirt</a>
              <a href="">Pantolon</a>
              <a href="">Jean</a>
              <a href="">Elbise</a>
              <a href="">Gömlek</a>
              <a href="">Hırka</a>
              <a href="">Bluz</a>
              <a href="">Pantolon</a>
              <a href="">Etek</a>
              <a href="">Tshirt</a>
              <a href="">Tayt</a>
            </div>
          </li>
          <li class="dropdown_navbar_page list_navbar_page">
            <a href="products_men.php" class="dropbutton_navbar_page">ERKEK</a>
            <div class="dropdown-content_navbar_page">
              <a href="">Sweetshirt</a>
              <a href="">Kazak</a>
              <a href="">Hırka ve Süveter</a>
              <a href="">Tshirt</a>
              <a href="">Gömlek</a>
              <a href="">Jean</a>
              <a href="">Pantolon</a>
              <a href="">Spor Giyim</a>
              <a href="">Chino Pantolon</a>
              <a href="">Şort</a>
              <a href="">Formal Giyim</a>
              <a href="">Plaj Giyim</a>
            </div>
          </li>
          <li class="dropdown_navbar_page list_navbar_page">
            <a href="products_child.php" class="dropbutton_navbar_page">ÇOCUK</a>
            <div class="dropdown-content_navbar_page">
              <a href="">Kazak</a>
              <a href="">Sweetshirt</a>
              <a href="">Pantolon</a>
              <a href="">Jean</a>
              <a href="">Elbise</a>
              <a href="">Gömlek</a>
              <a href="">Hırka</a>
              <a href="">Bluz</a>
              <a href="">Pantolon</a>
              <a href="">Etek</a>
              <a href="">Tshirt</a>
              <a href="">Tayt</a>
            </div>
          </li>
          <li class="dropdown_navbar_page list_navbar_page">
            <a href="javascript:void(0)" class="dropbutton_navbar_page">BEBEK</a>
            <div class="dropdown-content_navbar_page">
              <a href="">Sweetshirt</a>
              <a href="">Kazak</a>
              <a href="">Hırka ve Süveter</a>
              <a href="">Tshirt</a>
              <a href="">Gömlek</a>
              <a href="">Jean</a>
              <a href="">Pantolon</a>
              <a href="">Spor Giyim</a>
              <a href="">Chino Pantolon</a>
              <a href="">Şort</a>
              <a href="">Formal Giyim</a>
              <a href="">Plaj Giyim</a>
            </div>
          </li>
          <li class="dropdown_navbar_page list_navbar_page">
            <a href="" class="dropbutton_navbar_page">LCW HOME</a>
            <div class="dropdown-content_navbar_page">
              <a href="">Nevresim Takımı</a>
              <a href="">Yorgan Yastık</a>
              <a href="">Yatak Koruyucu</a>
            </div>
          </li>
          <li class="dropdown_navbar_page list_navbar_page">
            <a href="" class="dropbutton_navbar_page">MARKALAR</a>
            <div class="dropdown-content_navbar_page">
              <a href="">Lc Waikiki x Oopscool</a>
              <a href="">Allday</a>
              <a href="">Antebies</a>
              <a href="">Appleline</a>
              <a href="">Axesoire</a>
              <a href="">Bagmori</a>
              <a href="">Carioca</a>
              <a href="">Calico</a>
              <a href="">Casio</a>
              <a href="">Daisy Girl</a>
            </div>
          </li>
          <li class="dropdown_navbar_page list_navbar_page">
            <a href="" class="dropbutton_navbar_page" style="color: red;" >OUTLET</a>
            <div class="dropdown-content_navbar_page">
              <a href="">Kazak</a>
              <a href="">Sweetshirt</a>
              <a href="">Pantolon</a>
              <a href="">Jean</a>
              <a href="">Elbise</a>
              <a href="">Gömlek</a>
              <a href="">Hırka</a>
              <a href="">Bluz</a>
              <a href="">Pantolon</a>
              <a href="">Etek</a>
              <a href="">Tshirt</a>
              <a href="">Tayt</a>
            </div>
          </li>  
      <li class="list_siparis_navbar_page">
          <i class="fas fa-shuttle-van" style=" width: 100%;  color:blue;"> Sipariş Takip</i>
        </li>
    </ul> 
    </div>

<form action="/action_page.php" style="max-width:500px;margin:auto">
  <h2 style="margin-bottom: 15px"> ÜYEKAYIT</h2>
  <div class="input-container_sign_up_page">
    <i class="fa fa-envelope icon_sign_up_page"></i>
    <input class="input-field_sign_up_page" type="text" placeholder="E-Posta Adresiniz" name="name"/>
  </div>
  
  <div class="input-container_sign_up_page">
    <i class="fa fa-key icon_sign_up_page"></i>
    <input class="input-field_sign_up_page" type="password" placeholder="Şifreniz" name="password">
  </div>

  <p style="font-size: 80%; opacity: 0.5;">Şifreniz en az 6, en çok 20 karakter olmalıdır</p>

  <div class="input-container_sign_up_page">
    <i class="fa fa-mobile-phone icon_sign_up_page"></i>
    <input class="input-field_sign_up_page" type="text" placeholder="+90(Cep Telefonu)" name="phone"/>
  </div>

  <div>
    <input type="checkbox" name="checkbox1" value="false">Pazarlama ve verilen hizmetin iyileştirilmesi için tarafımla e-posta ile iletişime geçilmesini istiyorum.<br>
  </div>
<br>
  
  <div>
    <input type="checkbox" name="checkbox2" value="false">Pazarlama ve verilen hizmetin iyileştirilmesi için tarafımla SMS ile ya da aranarak iletişime geçilmesini istiyorum.<br>
  </div>
<br>

  <div>
    <input type="checkbox" name="checkbox3" value="false"><u>Kullanım ve Gizlilik Sözleşmesini okudum</u>, onaylıyorum <u>Aydınlatma Metnini</u> okudum.<br>
  </div>
<br>
<br>
<br>

  <input class="btn_sign_up_page " type="submit" value="Üye Ol">
</form>

<p style="text-align: center; font-size: 15px; margin-top: 20px;">veya</p>
<p style="text-align: center; font-size: 18px; margin-top: 10px;">Zaten üye misiniz? <a class="sign_up_page" href="login.php">Giriş Yap</a></p>

<div class="footer_footer_page">
        <div class="container_footer_page">
            <div class="row_footer_footer_page">
                <div class="footer-col-1_footer_page">
                    <span class="mobile-apps-label_footer_page">Uygulamayı indirin</span>
                    <a href="https://apps.apple.com/tr/app/id806222359">
                        <img src="app-store-png-logo.png"></img></a>
                    <a href="https://appgallery.huawei.com/#/app/C102105559">
                        <img src="app-gallery-png.png"></img></a>
                    <a href="https://play.google.com/store/apps/details?id=com.lcwaikiki.android&referrer=utm_source%3Dlcwwebsite%26utm_medium%3Dbanner%26utm_campaign%3Dappdownloadandroid">
                        <img src="play-store-png-logo.png"></img></a>
                    </div> 
                <div class="footer-col-2_footer_page">
                     <span class="mobile-apps-label_footer_page">Bizi Takip Edin</span>
                     <a href="https://www.facebook.com/lcwaikiki">
                        <i class="fa fa-facebook" style="color:grey ;"></i></a>
                    <a href="https://www.linkedin.com/company/lc-waikiki/">
                        <i class="fab fa-linkedin-in" style="color:grey ;"></i></a>
                    <a href="http://instagram.com/lcwaikiki">
                        <i class="fab fa-instagram" style="color:grey ;"></i></a>
                    <a href="https://www.youtube.com/lcwaikiki">
                        <i class="fab fa-youtube" style="color:grey ;"></i>
                      </a>     
                </div>
            </div>
        </div>
    </div>
        <div class="row_footer_footer_footer_page">
            <div class="column_footer_footer_page">
                <ul style="list-style-type: none;">
                    <h3>Yardım</h3>
                    <li>Sıkça Sorulan Sorular</li>
                    <li>İade ve Değişim</li>
                    <li>Site Haritası</li>
                    <li>Kullanım Koşulları</li>
                </ul>
            </div>
            <div class="column_footer_footer_page">
                <ul style="list-style-type: none;">
                    <h3>Kurumsal</h3>
                    <li>Hakkımızda</li>
                    <li>Mağazalarımız</li>
                    <li>Kurumsal/Corporate</li>
                    <li>Kariyer Fırsatları</li>
                    <li>Kurumsal Destek</li>
                </ul>
            </div>
            <div class="column_footer_footer_page">
                <ul style="list-style-type: none;">
                    <h3>Politikalar</h3>
                    <li>Aydınlatma Metni</li>
                    <li>Veri Gizliliği Ve Güvenliği Sertifikası</li>
                </ul>
            </div>
            <div class="column_footer_footer_page">
                <h3>LC Waikiki Destek</h3>
                <div class="btn_group">
                <a href="https://www.lcwaikiki.com/tr-TR/TR/iletisim" style="text-decoration: none;">
                    <button class="button_form"><i class="fab fa-wpforms"></i>İletişim Formu</a></button>
                    <button class="button_iletisim"><i class="fas fa-phone-alt"></i>444 4 529</button>
                </div>
                <div class="btn_group">
                <a href="https://api.whatsapp.com/send?phone=904444529">
                        <button class="button_wp"><i class="fab fa-whatsapp"></i> Whatsapp Destek 444 4 529</button>
                </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row_2_footer_page">
    <div class="column_1_footer_page">
        <h4>Güvenli Ödeme Sistemi Sunuyoruz</h4>
        <img class="img_masterpass" src="masterpass.png"></img>
        <img class="img_visa" src="Visa.png"></img>
        <img class="img_3d" src="3DSecure.png"></img>
        </div> 
    <div class="column_2_footer_page">
        <h4>LC Waikiki'de Taksit Avantajları</h4>
        <img src="paraf.png" width="25" ></img>
        <img src="world.png" width="40" ></img>
        <img src="bonus.png" width="60" ></img>
        <img src="axess.png" width="50" ></img>
        <img src="advantage.png" width="50" ></img>
        <img src="maximum.png" width="50"></img>
        <img src="bonus.png"width="50" ></img>
    </div>
</div>
<script>
  window.onscroll = function() {myFunction()};

var header_navbar_page = document.getElementById("header_navbar_page");

var sticky_navbar_page = header_navbar_page.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky_navbar_page) {
    header_navbar_page.classList.add("sticky_navbar_page")
  } else {
    header_navbar_page.classList.remove("sticky_navbar_page");
  }
}
</script>
</body>
</html>

