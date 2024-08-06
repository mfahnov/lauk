<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FISHOPIA</title>
    <link rel="stylesheet" href="homepage.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bxslider@4.2.17/dist/jquery.bxslider.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bxslider@4.2.17/dist/jquery.bxslider.min.js"></script>
</head>

<div class="header">
    <div class="header-item1" id="header-item">
        <a href="homepage.html" id="logo">
            <img src="img/logo.png" alt="">
        </a>
        <div class="header-item2" id="text">
            <h1>FISHOPIA</h1>
            <h3 style="white-space: pre;">珍しい魚のオ     ■ ンライン</h3>
        </div>
    </div>


    <div class="header-item3" id="header-item">
       <form class="search-bar">
            <input type="text" placeholder="Apa yang kamu cari hari ini?">
            <button onclick="search()"><i class="bi bi-search"></i></button>
       </form>
    </div>

    <div class="header-item4" id="header-item">
        <div class="popupparent">
                <span class="menu-item">
                    <div class="menu-icon" id="Account">
                        <button>
                            <i class="bi bi-person"></i>
                        <span>Account</span> </button>
                    </div>
                </span>
            <div class="popup">
                <h5>Masuk ke akun kamu</h5>
                <form action="login.html">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email" required>
                    <div class="password">
                        <label for="password">Password</label>
                        <a href="#" class="forgot-password">Forget Password</a>
                    </div>
                    <input type="password" id="password" name="password" required>
                    <button type="submit">Login <i class="bi bi-arrow-right"></i></button>
                </form>
                <p class="register">Don't have an account? <a href="register.html">Create Account</a></p>
            </div>
        </div>

        <div class="wishlistparent">
            <span class="menu-item">
                <div class="menu-icon">
                    <button>
                        <i class="bi bi-heart"></i>
                    <span>Wishlist</span></button>
                </div>
            </span>
                        <div class="wishlist">
                            <div class="menu-wishlist">
                                 <img src="img/wishlist1.png" alt="">
                                 <div class="text-wishlist">
                                    <h4>Ikan Koi EOS 1500D Slim Body+ 18-55 mm</h4>
                                    <h5>1 x <span>Rp. 150.000</span></h5>
                                 </div>
                                 <button><i class="bi bi-x-lg"></i></button>
                            </div>
                            <div class="menu-wishlist">
                                 <img src="img/wishlist2.png" alt="">
                                 <div class="text-wishlist">
                                    <h4>Ikan Cupang Mobile 5G LTE + 12-30 mm Mini 512GB</h4>
                                    <h5>1 x <span>Rp. 150.000</span></h5>
                                 </div>
                                 <button><i class="bi bi-x-lg"></i></button>
                            </div>
                        </div>        
        </div>

        <!-- <div class="wishlistparent">
            <span class="menu-item">
                <div class="menu-icon">
                    <button>
                        <i class="bi bi-cart3"></i>
                    <span>Checkout</span></button>
                </div>
            </span>
                        <div class="wishlist">
                            <div class="menu-wishlist">
                                 <img src="img/wishlist1.png" alt="">
                                 <div class="text-wishlist">
                                    <h4>Ikan Koi EOS 1500D Slim Body+ 18-55 mm</h4>
                                    <h5>1 x <span>Rp. 150.000</span></h5>
                                 </div>
                                 <button><i class="bi bi-x-lg"></i></button>
                            </div>
                            <div class="menu-wishlist">
                                 <img src="img/wishlist2.png" alt="">
                                 <div class="text-wishlist">
                                    <h4>Ikan Cupang Mobile 5G LTE + 12-30 mm Mini 512GB</h4>
                                    <h5>1 x <span>Rp. 150.000</span></h5>
                                 </div>
                                 <button><i class="bi bi-x-lg"></i></button>
                            </div>
                        </div>        
        </div> -->
    </div>
</div>


    <section class="nav">
        <nav class="navbar">
            <ul>
              <li class="dropdown" id="kategori">
                    <button>Kategori</button>
                    <div class="content">
                        <a href="">Ikan  Hias Air Tawar</a>
                        <a href="">Ikan  Hias Air Asin</a>
                        <a href="">Ikan  Hias Air Payau</a>
                        <a href="">Akuarium dan Stand</a>
                        <a href="">Makanan Ikan</a>
                        <a href="">Perawatan Ikan</a>
                        <a href="">Dekorasi Akuarium</a>
                        <a href="">Peralatan Aquarium</a>
                    </div>
            </li>
              <li id="about"><a href="#">Tentang Kami</a></li>
              <li id="blog"><a href="#">Blog</a></li>
              <li id="ketentuan"><a href="#">Ketentuan Layanan</a></li>
              <li id="kontak"><a href="#">Kontak</a></li>
                <!-- <div class="toko" id="toko">
                    <a href="#">
                    <img src="img/toko.png" alt="Toko">
                    <span>Toko Kami</span>
                    </a>
                </div> -->
        </ul>

        </nav>
    </section>

    <section class="hero">
        <div class="slider">
            <div><img src="img/slider1.png" alt="Slide 1"></div>
            <div><img src="img/slider2 (1).jpg" alt="Slide 1"></div>
            <div><img src="img/slider2 (2).jpg" alt="Slide 1"></div>
            <div><img src="img/slider1.png" alt="Slide 1"></div>
        </div>

        <div class="footer-banner">
            <p>Toko khusus akuarium yang didirikan pada tahun 2024. Kami membawakan Anda "kegembiraan" ikan hias.</p>
        </div>
    </section>

    <div class="banner-container">
        <div class="section-banner">
          <img src="img/group1.png" alt="Icon 1">
          <div class="text-banner">
            <h3>Fasted Delivery</h3>
            <p>Delivery in 24/H</p>
          </div>
        </div>
        <div class="section-banner">
          <img src="img/group2.png" alt="Icon 1">
          <div class="text-banner">
            <h3>24 HOURS RETURN</h3>
            <p>100% money-back guarantee</p>
          </div>
        </div>
        <div class="section-banner">
          <img src="img/group3.png" alt="Icon 2">
          <div class="text-banner">
            <h3>SECURE PAYMENT</h3>
            <p>Your money is safe</p>
          </div>
        </div>
        <div class="section-banner">
          <img src="img/group4.png" alt="Icon 3">
          <div class="text-banner">
            <h3>SUPPORT 24/7</h3>
            <p>Live contact/message</p>
          </div>
        </div>
      </div>

    <div class="cupang-container">
        <a href=""><img src="img/banner.png" alt=""></a>
    </div>

    <div class="category-container">
        <div class="h2k">
            <h2>Kategori</h2>
        </div>
        <div class="category-grid">
          <div class="category-item">
            <span>Peralatan</span>
            <img src="img/cat1.png" alt="Peralatan">
          </div>
          <div class="category-item">
            <span>Perawatan</span>
            <img src="img/cat1.png" alt="Perawatan">
          </div>
          <div class="category-item">
            <span>Dekorasi</span>
            <img src="img/cat1.png" alt="Dekorasi">
          </div>
          <div class="category-item">
            <span>Peralatan</span>
            <img src="img/cat1.png" alt="Peralatan">
          </div>
          <div class="category-item">
            <span>Perawatan</span>
            <img src="img/cat1.png" alt="Perawatan">
          </div>
          <div class="category-item">
            <span>Dekorasi</span>
            <img src="img/cat1.png" alt="Dekorasi">
          </div>
          <div class="category-item">
            <span>Peralatan</span>
            <img src="img/cat1.png" alt="Peralatan">
          </div>
          <div class="category-item">
            <span>Perawatan</span>
            <img src="img/cat1.png" alt="Perawatan">
          </div>
          <div class="category-item">
            <span>Dekorasi</span>
            <img src="img/cat1.png" alt="Dekorasi">
          </div>
          <div class="category-item">
            <span>Peralatan</span>
            <img src="img/cat1.png" alt="Peralatan">
          </div>
          <div class="category-item">
            <span>Perawatan</span>
            <img src="img/cat1.png" alt="Perawatan">
          </div>
          <div class="category-item">
            <span>Dekorasi</span>
            <img src="img/cat1.png" alt="Dekorasi">
          </div>
        </div>
    </div>
          

    <div class="produk-container">
        <div class="h2p">
            <h2>Produk Rekomendasi Berdasarkan Kategori</h2>
        </div>
        
    </div>

    <div class="produk-container1">
        <div class="h4p">
          <h4>Ikan Aquarium</h4>
        </div>
      <div class="produk-grid">
          <div class="produk-item">
              <img src="img/item.png" alt="">
              <span>Ikan Hias Air Laut</span>
              <h4>Rp.100.000</h4>
                  <div class="star">
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-half"></i>
                      <i class="bi bi-star"></i>
                      <i class="bi bi-star"></i>
                      <p>(144)</p>
                  </div>
              <button>beli</button>
          </div>

          <div class="produk-item">
              <img src="img/item.png" alt="">
              <span>Ikan Hias Air Laut</span>
              <h4>Rp.100.000</h4>
                  <div class="star">
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-half"></i>
                      <i class="bi bi-star"></i>
                      <i class="bi bi-star"></i>
                      <p>(144)</p>
                  </div>
              <button>beli</button>
          </div>

          <div class="produk-item">
              <img src="img/item.png" alt="">
              <span>Ikan Hias Air Laut</span>
              <h4>Rp.100.000</h4>
                  <div class="star">
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-half"></i>
                      <i class="bi bi-star"></i>
                      <i class="bi bi-star"></i>
                      <p>(144)</p>
                  </div>
              <button>beli</button>
          </div>

          <div class="produk-item">
              <img src="img/item.png" alt="">
              <span>Ikan Hias Air Laut</span>
              <h4>Rp.100.000</h4>
                  <div class="star">
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-half"></i>
                      <i class="bi bi-star"></i>
                      <i class="bi bi-star"></i>
                      <p>(144)</p>
                  </div>
              <button>beli</button>
          </div>
 
          <div class="produk-item">
              <img src="img/item.png" alt="">
              <span>Ikan Hias Air Laut</span>
              <h4>Rp.100.000</h4>
                  <div class="star">
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-half"></i>
                      <i class="bi bi-star"></i>
                      <i class="bi bi-star"></i>
                      <p>(144)</p>
                  </div>
              <button>beli</button>
          </div>
      
          <div class="produk-item">
              <img src="img/item.png" alt="">
              <span>Ikan Hias Air Laut</span>
              <h4>Rp.100.000</h4>
                  <div class="star">
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-half"></i>
                      <i class="bi bi-star"></i>
                      <i class="bi bi-star"></i>
                      <p>(144)</p>
                  </div>
              <button>beli</button>
          </div>

      </div>
    </div>

    <div class="produk-container1">
        <div class="h4p">
          <h4>Perlengkapan Aquarium</h4>
        </div>
      <div class="produk-grid">
          <div class="produk-item">
              <img src="img/slider1.png" alt="">
              <span>Ikan Hias Air Laut</span>
              <h4>Rp.100.000</h4>
                  <div class="star">
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-half"></i>
                      <i class="bi bi-star"></i>
                      <i class="bi bi-star"></i>
                      <p>(144)</p>
                  </div>
              <button>beli</button>
          </div>

          <div class="produk-item">
              <img src="img/item.png" alt="">
              <span>Ikan Hias Air Laut</span>
              <h4>Rp.100.000</h4>
                  <div class="star">
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-half"></i>
                      <i class="bi bi-star"></i>
                      <i class="bi bi-star"></i>
                      <p>(144)</p>
                  </div>
              <button>beli</button>
          </div>

          <div class="produk-item">
              <img src="img/item.png" alt="">
              <span>Ikan Hias Air Laut</span>
              <h4>Rp.100.000</h4>
                  <div class="star">
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-half"></i>
                      <i class="bi bi-star"></i>
                      <i class="bi bi-star"></i>
                      <p>(144)</p>
                  </div>
              <button>beli</button>
          </div>

          <div class="produk-item">
              <img src="img/item.png" alt="">
              <span>Ikan Hias Air Laut</span>
              <h4>Rp.100.000</h4>
                  <div class="star">
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-half"></i>
                      <i class="bi bi-star"></i>
                      <i class="bi bi-star"></i>
                      <p>(144)</p>
                  </div>
              <button>beli</button>
          </div>
 
          <div class="produk-item">
              <img src="img/item.png" alt="">
              <span>Ikan Hias Air Laut</span>
              <h4>Rp.100.000</h4>
                  <div class="star">
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-half"></i>
                      <i class="bi bi-star"></i>
                      <i class="bi bi-star"></i>
                      <p>(144)</p>
                  </div>
              <button>beli</button>
          </div>
      
          <div class="produk-item">
              <img src="img/item.png" alt="">
              <span>Ikan Hias Air Laut</span>
              <h4>Rp.100.000</h4>
                  <div class="star">
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-half"></i>
                      <i class="bi bi-star"></i>
                      <i class="bi bi-star"></i>
                      <p>(144)</p>
                  </div>
              <button>beli</button>
          </div>

      </div>
    </div>

    <div class="produk-container1">
      <div class="h4p">
        <h4>Tanaman Air</h4>
      </div>
      <div class="produk-grid">
        <div class="produk-item">
            <img src="img/slider1.png" alt="">
            <span>Ikan Hias Air Laut jdjdbjbsd dbjbjsc bdsjbjcb bc</span>
            <h4>Rp.100.000</h4>
                <div class="star">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-half"></i>
                    <i class="bi bi-star"></i>
                    <i class="bi bi-star"></i>
                    <p>(144)</p>
                </div>
            <button>beli</button>
        </div>

        <div class="produk-item">
            <img src="img/item.png" alt="">
            <span>Ikan Hias Air Laut</span>
            <h4>Rp.100.000</h4>
                <div class="star">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-half"></i>
                    <i class="bi bi-star"></i>
                    <i class="bi bi-star"></i>
                    <p>(144)</p>
                </div>
            <button>beli</button>
        </div>

        <div class="produk-item">
            <img src="img/item.png" alt="">
            <span>Ikan Hias Air Laut</span>
            <h4>Rp.100.000</h4>
                <div class="star">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-half"></i>
                    <i class="bi bi-star"></i>
                    <i class="bi bi-star"></i>
                    <p>(144)</p>
                </div>
            <button>beli</button>
        </div>

        <div class="produk-item">
            <img src="img/item.png" alt="">
            <span>Ikan Hias Air Laut</span>
            <h4>Rp.100.000</h4>
                <div class="star">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-half"></i>
                    <i class="bi bi-star"></i>
                    <i class="bi bi-star"></i>
                    <p>(144)</p>
                </div>
            <button>beli</button>
        </div>

        <div class="produk-item">
            <img src="img/item.png" alt="">
            <span>Ikan Hias Air Laut</span>
            <h4>Rp.100.000</h4>
                <div class="star">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-half"></i>
                    <i class="bi bi-star"></i>
                    <i class="bi bi-star"></i>
                    <p>(144)</p>
                </div>
            <button>beli</button>
        </div>
    
        <div class="produk-item">
            <img src="img/item.png" alt="">
            <span>Ikan Hias Air Laut</span>
            <h4>Rp.100.000</h4>
                <div class="star">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-half"></i>
                    <i class="bi bi-star"></i>
                    <i class="bi bi-star"></i>
                    <p>(144)</p>
                </div>
            <button>beli</button>
        </div>

    </div>
    </div>

  <footer>
    <div class="footer-content">
        <div class="col1">
            <div class="grid-container2">
                <div class="grid-footer1">
                        <img src="img/logo.png" alt="">
                </div>
        
                <div class="grid-footer2">
                    <h1>FISHOPIA</h1>
                    <h3 style="white-space: pre;">珍しい魚のオ     ■ ンライン</h3>
                </div>
            </div>
            <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas laudantium maiores ullam voluptate nemo tenetur? Corrupti aperiam, neque maiores quidem dicta excepturi repellat unde ratione nisi velit at dolores error.
            </p>
        </div>
        <div class="col2">
            <h4>Layanan</h4>
            <a href="#">Pusat Bantuan</a>
            <a href="#">Cara Pembayaran</a>
            <a href="#">Ongkos Kirim</a>
            <a href="#">Kebijakan pengembalian</a>
            <a href="#">FAQ</a>
        </div>

        <div class="col3">
            <h4>Jelajahi Fishopia</h4>
            <a href="#">Tentang Kami</a>
            <a href="#">Mitra</a>
            <a href="#">Ketentuan Layanan</a>
            <a href="#">Kebijakan Privasi</a>
            <a href="blog.html">Blog</a>
        </div>

        <div class="col4">
            <h4>Hubungi</h4>
            <p>Fishopia</p>
            <p>Antapani, Jl. Terusan Sekolah No.1-2, Cicaheum, Kec. Kiaracondong, Kota Bandung, Jawa Barat 40282</p> 
            <p>+62 e8736784772387 <br> fishopia@gmail.com</p> 
            <h4 class="follow">Sosial Media</h4>
                <div class="icon">
                    <a href="https://www.instagram.com/fishopia_?igsh=MXB1NnJ5d2dodzB2Zw=="><i class="bi bi-instagram"></i></a>
                    <a href="https://www.instagram.com/fishopia_?igsh=MXB1NnJ5d2dodzB2Zw=="><i class="bi bi-twitter-x"></i></a>
                </div>
        </div>
    </div>

    <div class="copyright">
        <p>&copy; Fishopia Corp 2024</p>
    </div>
</footer>
   <script src="homepgae.js"></script>
</body>
</html>