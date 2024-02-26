<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/styles/style.css?v=<?php echo time(); ?>">
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="assets\styles\style_framework.css?v=<?php echo time(); ?>" />
</head>
<body>
    <!-- Header start -->
    <div class="container">
        <div class="logo">
            <b><h1>AirHujan</h1></b>
            <b><h1>Restaurant</h1></b>
        </div>
    </div>
    <!-- Header end -->

    <!-- Navbar start -->
    <nav>
        <div class="container">
            <ul >
                <li>
                    <b><a href="#home">Home</a></b>
                </li>
                <li>
                    <b><a href="#about">About</a></b>  
                </li>
                <li>
                    <b><a href="#product">Product</a></b>
                </li>
                <li>
                    <b><a href="#buku_tamu">Buku tamu</a></b>
                </li>
            </ul>
        </div>
    </nav>
    <!-- Navbar end -->

    <!-- Home start -->
    <section id="home">
        <div class="container">
            <h1>The Authentic Restaurant for Indonesian Food</h1>
            <p>Telah mempertahankan kualitas masakan sejak tahun 1975. Selalu menyajikan yang terbaik untuk menghidangkan cita rasa Indonesia. Dengan perpaduan bahan premium pilihan sehingga menciptakan cita rasa yang tak terlupakan. Hanya memiliki satu cabang sebagai bentuk komitmen menjaga kualitas masakan tetap sama.</p>
        </div>
    </section>
    <!-- Home end -->

    <!-- About start -->
    <section id="about">
        <div class="container">
            <div class="title">
                <h1>About</h1>
            </div>
            <div class="card">
                <div class="deskripsi">
                    <p>Selamat datang di AirHujan Restaurant. Di restoran ini kami menyediakan segala jenis kuliner khas indonesia. Dengan segala bumbu, rempah, dan bahan-bahan premium lainnya kami siap memanjakan lidah anda.</p>
                    <p>Selamat menikmati perjalanan rasa yang memukau melalui ragam hidangan kami. AirHujan Restaurant, di sini bukan hanya menyajikan makanan, tapi juga kisah cita rasa Indonesia yang tak terlupakan. Mari merasakan kekayaan kuliner Nusantara dalam setiap sajian di meja kami.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- About end -->

    <!-- Product start -->
    <section id="product">  
        <div class="container">
            <div class="title">
                <h1>Product</h1>
            </div>
            <div class="menu_wrapper swiper mySwiper">
                <div class="menu swiper-wrapper ">
                    <div class="menu_card swiper-slide">
                        <img src="assets\images\empalgentong.jpg" alt="">
                        <h4>Empal Gentong</h4>
                        <p>Daging sapi yang dimasak dengan kuah bumbu kuning</p>
                        <div class="price">
                            <div class="price-tag"><b>Start from:</b></div>
                            <div class="price-num">
                                <b>Rp 25 <sup>Ribu</sup></b>
                            </div>
                        </div>
                        <div class="button_selengkapnya">
                            <a href="https://id.wikipedia.org/wiki/Empal_gentong" class="btn">selengkapnya</a>
                        </div>
                    </div>
                    <div class="menu_card swiper-slide">
                        <img src="assets/images/Gudeg-Yogyakarta.webp" alt="">
                        <h4>nasi gudeg</h4>
                        <p>Ayam dan nangka yang dimasak dengan bumbu manis</p>
                        <div class="price">
                            <div class="price-tag"><b>Start from:</b></div>
                            <div class="price-num">
                                <b>Rp 25 <sup>Ribu</sup></b>
                            </div>
                        </div>
                        <div class="button_selengkapnya">
                            <a href="https://id.wikipedia.org/wiki/Gudeg" class="btn">selengkapnya</a>
                        </div>
                    </div>
                    <div class="menu_card swiper-slide">
                        <img src="assets/images/nasiuduk.jpg" alt="">
                        <h4>nasi uduk</h4>
                        <p>Nasi gurih dengan ayam serundeng dan sayur-sayuran</p>
                        <div class="price">
                            <div class="price-tag"><b>Start from:</b></div>
                            <div class="price-num">
                                <b>Rp 25 <sup>Ribu</sup></b>
                            </div>
                        </div>
                        <div class="button_selengkapnya">
                            <a href="https://id.wikipedia.org/wiki/Nasi_uduk" class="btn">selengkapnya</a>
                        </div>
                    </div>
                    <div class="menu_card swiper-slide">
                        <img src="assets\images\rendang.jpg" alt="">
                        <h4>Daging Rendang</h4>
                        <p>Daging sapi yang dimasak dengan santan dan rempah dalam waktu lama</p>
                        <div class="price">
                            <div class="price-tag"><b>Start from:</b></div>
                            <div class="price-num">
                                <b>Rp 25 <sup>Ribu</sup></b>
                            </div>
                        </div>
                        <div class="button_selengkapnya">
                            <a href="https://id.wikipedia.org/wiki/Rendang" class="btn">selengkapnya</a>
                        </div>
                    </div>
                    <div class="menu_card swiper-slide">
                        <img src="assets\images\rawonfix.webp" alt="">
                        <h4>nasi rawon</h4>
                        <p>Daging sapi yang dimasak dengan kuah bumbu hitam</p>
                        <div class="price">
                            <div class="price-tag"><b>Start from:</b></div>
                            <div class="price-num">
                                <b>Rp 25 <sup>Ribu</sup></b>
                            </div>
                        </div>
                        <div class="button_selengkapnya">
                            <a href="https://id.wikipedia.org/wiki/Rawon" class="btn">selengkapnya</a>
                        </div>
                    </div>
                    <div class="menu_card swiper-slide">
                        <img src="assets/images/sateayamfix.jpg" alt="">
                        <h4>sate ayam</h4>
                        <p>Daging ayam yang dibakar dengan bumbu kacang manis</p>
                        <div class="price">
                            <div class="price-tag"><b>Start from:</b></div>
                            <div class="price-num">
                                <b>Rp 20 <sup>Ribu</sup></b>
                            </div>
                        </div>
                        <div class="button_selengkapnya">
                            <a href="https://id.wikipedia.org/wiki/Sate_ayam" class="btn">selengkapnya</a>
                        </div>
                    </div>
                    <div class="menu_card swiper-slide">
                        <img src="assets/images/bakso.webp" alt="">
                        <h4>bakso</h4>
                        <p>Sup gurih yang dicampur dengan olahan daging dan sayur</p>
                        <div class="price">
                            <div class="price-tag"><b>Start from:</b></div>
                            <div class="price-num">
                                <b>Rp 20 <sup>Ribu</sup></b>
                            </div>
                        </div>
                        <div class="button_selengkapnya">
                            <a href="https://id.wikipedia.org/wiki/Bakso" class="btn">selengkapnya</a>
                        </div>
                    </div>
                    <div class="menu_card swiper-slide">
                        <img src="assets\images\gado-gado-fix.jpg" alt="">
                        <h4>gado-gado</h4>
                        <p>Campuan sayur-sayuran yang dilumuri saus kacang</p>
                        <div class="price">
                            <div class="price-tag"><b>Start from:</b></div>
                            <div class="price-num">
                                <b>Rp 15 <sup>Ribu</sup></b>
                            </div>
                        </div>
                        <div class="button_selengkapnya">
                            <a href="https://id.wikipedia.org/wiki/Gado-gado" class="btn">selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>
    <!-- Product end -->

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
    var swiper = new Swiper(".mySwiper", {
        slidesPerView:4,
        spaceBetween: 25,
        // centeredSlides: true,
        pagination: {
        el: ".swiper-pagination",
        clickable: true,
        },
    });
    </script>

    <!-- Buku tamu start -->
    <section id="buku_tamu">    
        <div class="container">
            <div class="title">
                <h1>Buku Tamu</h1>
            </div>
            <div class="post">
                <form action="<?php echo $_SERVER ['PHP_SELF'];?>" method="POST">
                    <label for="nama">Nama </label><br>
                    <input type="text" placeholder="" name="fnama"><br>

                    <label for="email">Email</label><br>
                    <input type="email" placeholder="" name="femail"><br>

                    <label for="alamat">Alamat</label><br>
                    <input type="text" placeholder="" name="falamat"><br>

                    <label for="pesan">Pesan</label><br>
                    <input type="text" placeholder="" name="fpesan"> <br>
                    
                    <!-- <input type="submit" value="Kirim"> -->
                    <button type="submit" value="Kirim" >Kirim</button>
                </form>
            </div>

            <!-- POST -->
            <div class="php">
                <?php
                if(isset($_POST['fnama'])){
                    $nama = $_POST['fnama'];
                    $email = $_POST['femail'];
                    $alamat = $_POST['falamat'];
                    $pesan = $_POST['fpesan']; 
                ?>  
                <div class="output">
                    <p>Hallo <?php echo $nama;?> dari <?php echo $alamat; ?>, Terima kasih telah berkunjung. Promo menarik akan kami kirim melalui email <?php echo $email; ?> anda.</p>
                    <br>
                    <p>Pesan anda: <br> <?php echo $pesan; ?></p>
                </div>
                <?php
                }
                ?>
            </div>

            <div class="get">
                <form action="<?php echo $_SERVER ['PHP_SELF'];?>" method="GET" >
                    <label for="favorit">Apa makanan yang membuat anda tertarik?</label>
                    <select name="ffavorit" id="favorit">
                        <option value="">Pilih</option>
                        <option value="Empal Gentong">Empal Gentong</option>
                        <option value="Nasi Gudeg">Nasi Gudeg</option>
                        <option value="Uduk">Nasi Uduk</option>
                        <option value="Rendang">Daging Rendang</option>
                        <option value="Rawon">Nasi Rawon</option>
                        <option value="Sate">Sate Ayam </option>
                        <option value="Bakso">Bakso</option>
                    </select>
                    <button type="submit" value="Kirim" >Kirim</button>
                </form>
            </div>
            <div class="php" >
                <!-- GET -->
                <?php
                if(isset($_GET['ffavorit'])) {
                    $favorit = $_GET['ffavorit'];
                    if($favorit !== "") { 
                ?>
                    <div class="output">
                        <p>Segera pesan <?php echo $favorit; ?> sebelum kehabisan!</p>
                    </div>
                <?php
                    } else {
                ?>
                    <div class="output">
                        <p>Dimohon untuk memilih makanan terlebih dahulu.</p>
                    </div>
                <?php
                    }
                }
                ?>
            </div>
        </div>
        

    </section>
    <!-- Buku tamu end -->

                <!-- echo "Nama: $nama <br>"; -->
                <!-- echo "Email: $email <br>"; -->
                <!-- echo "Alamat: $alamat <br>"; -->
                <!-- echo "Pesan: $pesan <br>"; -->

    <!-- Footer start -->
    <footer>Copyright @ 2024 | Design by Audi Husen Mustofa</footer>
    <!-- Footer end -->
</body>
</html>