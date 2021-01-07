<!DOCTYPE html>
<html>
<head>
<?php include 'config.php';?>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>

/* Basic Styling */
html, body {
  height: 100%;
  width: 100%;
  margin: 0;
  font-family: 'Roboto', sans-serif;
}

.container_product_detail {
  max-width: 1800px;
  margin: 0 auto;
  padding: 15px;
  display: flex;
}

/* Columns */
.left-column_product_detail {
  width: 50%;
  position: relative;
  margin-right: 50px;
}

.right-column_product_detail {
  width: 40%;
  
}


/* Left Column */
.left-column_product_detailimg {
  
  position: absolute;
  left: 0;
  top: 0;
  opacity: 0;
  transition: all 0.3s ease;
}

.left-column_product_detail img.active {
  opacity: 1;
}


/* Right Column */

/* Product Description */
.product-description_product_detail {
  border-bottom: 1px solid #e2e2e2;
  margin-bottom: 20px;
}
.product-description_product_detail span {
  font-size: 12px;
  color: #969696;
  letter-spacing: 1px;
  text-decoration: none;
}
.product-description_product_detail h1 {
  font-weight: 300;
  font-size: 52px;
  color: #43484D;
  letter-spacing: -2px;
}
.product-description_product_detail p {
  font-size: 16px;
  font-weight: 300;
  color: #86939E;
  line-height: 24px;
}

.product-configuration_product_detail
.product-color_product_detail span,
.cable-config_product_detail span {
  font-size: 14px;
  font-weight: 400;
  color: #86939E;
  margin-bottom: 20px;
  display: inline-block;
}

/* Product Color */
.product-color_product_detail{
  margin-bottom: 30px;
}

.color-choose_product_detail div {
  display: inline-block;
}

.color-choose_product_detail input[type="radio"] {
  display: none;
}

.color-choose_product_detail input[type="radio"] + label span {
  display: inline-block;
  width: 40px;
  height: 40px;
  margin: -1px 4px 0 0;
  vertical-align: middle;
  cursor: pointer;
}

.color-choose_product_detail input[type="radio"] + label span {
  border: 2px solid #FFFFFF;
  box-shadow: 0 1px 3px 0 rgba(0,0,0,0.33);
}

.color-choose_product_detail input[type="radio"]#gray + label span {
  background-color: gray;
}
.color-choose_product_detail input[type="radio"]#navy + label span {
  background-color: navy;
}
.color-choose_product_detail input[type="radio"]#black + label span {
  background-color: black;
}

.color-choose_product_detail input[type="radio"]:checked + label span {
  background-image: url(images/check-icn.svg);
  background-repeat: no-repeat;
  background-position: center;
}

/* Cable Configuration */
.cable-choose_product_detail {
  margin-bottom: 20px;
  border-bottom: 2px solid #e2e2e2;
}

.cable-choose_product_detail button {
  border: 2px solid #e2e2e2;
  border-radius: 6px;
  padding: 13px 20px;
  font-size: 14px;
  color: #5E6977;
  background-color: #fff;
  cursor: pointer;
  transition: all .5s;
  margin-bottom: 20px;
}

.cable-choose_product_detail button:hover,
.cable-choose_product_detail button:active,
.cable-choose_product_detail button:focus {
  border: 2px solid #86939E;
  outline: none;
}

.cable-config_product_detail {
  border-bottom: 2px solid #e2e2e2;
  margin-bottom: 20px;
}

.cable-config_product_detail a {
  color: #358ED7;
  text-decoration: none;
  font-size: 12px;
  position: relative;
  margin: 10px 0;
  display: inline-block;
}
.cable-config_product_detail a:before {
  content: "?";
  height: 15px;
  width: 15px;
  border-radius: 50%;
  border: 2px solid rgba(53, 142, 215, 0.5);
  display: inline-block;
  text-align: center;
  line-height: 16px;
  opacity: 0.5;
  margin-right: 5px;
}
/* Product Price */
.product-price_product_detail {
  display: flex;
  align-items: center;
  border-bottom: 2px solid #e2e2e2;
}
.product-price_product_detail span {
  font-size: 26px;
  font-weight: 300;
  color: #43474D;
  margin-right: 20px;
  margin-bottom: 20px;
}
.cart-btn_product_detail {
  display: inline-block;
  background-color: #7DC855;
  border-radius: 6px;
  font-size: 16px;
  color: #FFFFFF;
  text-decoration: none;
  padding: 12px 30px;
  transition: all .5s;
}
.cart-btn_product_detail:hover {
  background-color: #64af3d;
}

/* Responsive */
@media (max-width: 940px) {
  .container_product_detail {
    flex-direction: column;
    margin-top: 60px;
  }

  .left-column_product_detail,
  .right-column_product_detail {
    width: 100%;
  }

  .left-column_product_detail img {
    width: 300px;
    right: 0;
    top: -65px;
    left: initial;
  }
}

@media (max-width: 535px) {
  .left-column_product_detail img {
    width: 220px;
    top: -85px;
  }
}

.btn1_product_detail {
  background-color: darkblue;
  color: white;
  font-size: 20px;
  padding: 15px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.8;
}
.btn2_product_detail {
  background-color:  white;
  color:darkblue ;
  font-size: 20px;
  padding: 15px 20px;
  cursor: pointer;
  width: 100%;
  opacity: 0.8;
  border-color: darkblue;
}

.description_product_detail{
  border-top: 2px solid #e2e2e2;
  margin-bottom: 20px;
}


</style>

<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tutorial</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">
    <!-- CSS -->
    <link href="style.css" rel="stylesheet">
    <meta name="robots" content="noindex,follow" />

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
    <main class="container_product_detail">

        <!-- Left Column / Headphones Image -->
        <div class="left-column_product_detail">
          <img width="605" height="780" class="active" src="l_20202-0wgi40z8-cvl_a.jpg">
        </div>
        
        <div class="left-column_product_detail">
          <img width="605" height="780" class="active" src="l_20202-0wgi40z8-cvl_a1.jpg">
        </div>
        

  
        <!-- Right Column -->
        <div class="right-column_product_detail">
  
          <!-- Product Description -->
          <div class="product-description_product_detail">
            <span>Ürün Kodu:</span>
            <br>
            <span>
                    <?php $sql1='SELECT * from urun_ozellik';    
                      $result=mysqli_query($connect, $sql1);
                        if(mysqli_num_rows($result)>0)
                         {
                              while($row=mysqli_fetch_assoc($result)){
                                 echo  $row["urun_id"] ;
                          }
                          }
                       else{
                        echo "0 results";
                      }?>
    </span>
            <br>
            <span style="font-size: 25px; color: #000;"><b><?php $sql1='SELECT * from urun_ozellik';    
                      $result=mysqli_query($connect, $sql1);
                        if(mysqli_num_rows($result)>0)
                         {
                              while($row=mysqli_fetch_assoc($result)){
                                 echo  $row["urun_adı"] ;
                          }
                          }
                       else{
                        echo "0 results";
                      }?></b></span>
          </div>

            <!-- Product Pricing -->
          <div class="product-price_product_detail">
            <span><p style="font-size: 13px;color: #000;">Peşin Fiyat</p></span>
            <br>
            <span style="color: rgb(0, 0, 182);"><b> <?php $sql1='SELECT * from urun_ozellik';    
                      $result=mysqli_query($connect, $sql1);
                        if(mysqli_num_rows($result)>0)
                         {
                              while($row=mysqli_fetch_assoc($result)){
                                 echo  $row["fiyat"] ;
                          }
                          }
                       else{
                        echo "0 results";
                      }?> TL</b></span>
          </div>


          <!-- Cable Configuration -->
          <div class="cable-config_product_detail">
            <span style="font-size: 15px;color: rgb(0, 0, 0);margin-top: 20px;">Beden</span>

            <div class="cable-choose_product_detail">
              <button>XS</button>
              <button>S</button>
              <button>M</button>
              <button>L</button>
              <button>XL</button>
              <button>XXL</button>

              <input style="margin-top: 15px;" class="btn1_product_detail" type="submit" value="SEPETE EKLE">
              <input style="margin-top: 15px;" class="btn2_product_detail" type="submit" value="KOMBİNİ TAMAMLA">

            </div>
          </div>
            
          <!-- Product Configuration -->
          <div class="product-configuration_product_detail">
  
            <!-- Product Color -->
            <div class="product-color_product_detail">
              <span><p style="font-size: 15px;color: #000;">Renkler</p></span>
  
              <div class="color-choose_product_detail">
                <div>
                  <input data-image="gray" type="radio" id="gray" name="color" value="gray" checked>
                  <label for="gray"><span></span></label>
                </div>
                <div>
                  <input data-image="navy" type="radio" id="navy" name="color" value="navy">
                  <label for="navy"><span></span></label>
                </div>
                <div>
                  <input data-image="black" type="radio" id="black" name="color" value="black">
                  <label for="black"><span></span></label>
                </div>
              </div>

              <div style="margin-top: 30px;" class="description_product_detail">
                <h4 style="color: rgb(0, 174, 255);">AÇIKLAMA</h4>
                <h3 style="color: rgb(0, 0, 0);padding-top: 10px;">Ürün Açıklaması</h3>
                <p> <?php $sql1='SELECT * from urun_ozellik';    
                      $result=mysqli_query($connect, $sql1);
                        if(mysqli_num_rows($result)>0)
                         {
                              while($row=mysqli_fetch_assoc($result)){
                                 echo  $row["urun_acıklama"] ;
                          }
                          }
                       else{
                        echo "0 results";
                      }?></p>
                <p><?php $sql1='SELECT * from urun_ozellik';    
                      $result=mysqli_query($connect, $sql1);
                        if(mysqli_num_rows($result)>0)
                         {
                              while($row=mysqli_fetch_assoc($result)){
                                 echo  $row["urun_acıklama2"] ;
                          }
                          }
                       else{
                        echo "0 results";
                      }?></p>
                <h3 style="color: rgb(0, 0, 0);padding-top: 10px;">Manken Bilgisi</h3>
                <p><b>Göğüs: </b><?php $sql1='SELECT * from urun_ozellik';    
                      $result=mysqli_query($connect, $sql1);
                        if(mysqli_num_rows($result)>0)
                         {
                              while($row=mysqli_fetch_assoc($result)){
                                 echo  $row["manken_gogus"] ;
                          }
                          }
                       else{
                        echo "0 results";
                      }?><b> Bel: </b><?php $sql1='SELECT * from urun_ozellik';    
                      $result=mysqli_query($connect, $sql1);
                        if(mysqli_num_rows($result)>0)
                         {
                              while($row=mysqli_fetch_assoc($result)){
                                 echo  $row["manken_bel"] ;
                          }
                          }
                       else{
                        echo "0 results";
                      }?><b> Basen: </b><?php $sql1='SELECT * from urun_ozellik';    
                      $result=mysqli_query($connect, $sql1);
                        if(mysqli_num_rows($result)>0)
                         {
                              while($row=mysqli_fetch_assoc($result)){
                                 echo  $row["manken_basen"] ;
                          }
                          }
                       else{
                        echo "0 results";
                      }?><b> Boy: </b><?php $sql1='SELECT * from urun_ozellik';    
                      $result=mysqli_query($connect, $sql1);
                        if(mysqli_num_rows($result)>0)
                         {
                              while($row=mysqli_fetch_assoc($result)){
                                 echo  $row["manken_boy"] ;
                          }
                          }
                       else{
                        echo "0 results";
                      }?></p>
                <p>Manken <b><?php $sql1='SELECT * from urun_ozellik';    
                      $result=mysqli_query($connect, $sql1);
                        if(mysqli_num_rows($result)>0)
                         {
                              while($row=mysqli_fetch_assoc($result)){
                                 echo  $row["manken_kıyafet_beden"] ;
                          }
                          }
                       else{
                        echo "0 results";
                      }?></b> beden ürün giyiyor.</p>
                <h3 style="color: rgb(0, 0, 0);padding-top: 10px;">Ürün İçeriği ve Özellikleri</h3>
                <h4 style="color: rgb(0, 0, 0);padding-top: 10px;">Ürün İçeriği</h4>
                <p><b>Ana Kumaş: </b><?php $sql1='SELECT * from urun_ozellik';    
                      $result=mysqli_query($connect, $sql1);
                        if(mysqli_num_rows($result)>0)
                         {
                              while($row=mysqli_fetch_assoc($result)){
                                 echo  $row["urun_icerigi"] ;
                          }
                          }
                       else{
                        echo "0 results";
                      }?></p>
                <h4 style="color: rgb(0, 0, 0);padding-top: 10px;">Ürün Özellikleri</h4>
                <p><b>Ürün Tip: </b><?php $sql1='SELECT * from urun_ozellik';    
                      $result=mysqli_query($connect, $sql1);
                        if(mysqli_num_rows($result)>0)
                         {
                              while($row=mysqli_fetch_assoc($result)){
                                 echo  $row["urun_tip"] ;
                          }
                          }
                       else{
                        echo "0 results";
                      }?></p>
                <p><b>Malzeme: </b><?php $sql1='SELECT * from urun_ozellik';    
                      $result=mysqli_query($connect, $sql1);
                        if(mysqli_num_rows($result)>0)
                         {
                              while($row=mysqli_fetch_assoc($result)){
                                 echo  $row["malzeme"] ;
                          }
                          }
                       else{
                        echo "0 results";
                      }?></p>
              </div>
      </main>
       
    <div class="footer_footer_page" style="margin-top: 200px;">
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
<div  class="row_2_footer_page">
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
      <!-- Scripts -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js" charset="utf-8"></script>
      <script src="script.js" charset="utf-8"></script>
</body>
</html>