<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>The Uma Resort</title>
  <link rel="shortcut icon" href="gambar/logotheuma.png" type="image/x-icon" />
  <link rel="stylesheet" href="style.css" />
  <script src="jquery.js"></script>
  <script src="sweetalert.all.min.js"></script>
  <link rel="stylesheet" href="sweetalert.min.css" />
  <script src="aos.js"></script>
  <link rel="stylesheet" href="aos.css" />
  <script src="smoth-scroll.js"></script>
</head>

<body>
  <div class="landing-page" id="landing-page">
    <h1 data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">WELCOME TO <br /><span> HKBP </span>
    </h1>
    <button onclick="enable()">Explore Now</button>
  </div>
  <div class="nav">
    <h1>HKBP</h1>
    <img src="gambar/backgroun2.jpg" id="nav-btn" alt="" />
    <div class="nav-menu">
      <a data-scroll data-easing="easeInQuint" href="#about">About</a>
      <a data-scroll data-easing="easeInQuint" href="#room">Jadwal Ibadah</a>
      <a data-scroll data-easing="easeInQuint" href="#aktivitas">Daftar Pendeta</a>
    </div>
  </div>
  <div class="nav-respon column">
    <img src="gambar/close.png" alt="" id="nav-close" />
    <a id="nav-link1" data-scroll data-easing="easeInQuint" href="#about">About</a>
    <a id="nav-link2" data-scroll data-easing="easeInQuint" href="#room">Jadwal Ibadah</a>
    <a id="nav-link3" data-scroll data-easing="easeInQuint" href="#aktivitas">Daftar Pendeta</a>
  </div>
  <div class="btn-music">
    <img class="play" id="play" src="gambar/mute.png" alt="" />
    <img class="mute none" id="mute" src="gambar/music.png" alt="" />
  </div>
  <div class="home container column p-ats" id="about">
    <h2 style="color:darkcyan;">"So be careful to live your life wisely, not foolishly."</h2>
    <p style="color:darkcyan;">
      &nbsp;- EPHESIANS 5:15
    </p>
  </div>
  <div class="villa column p-ats" id="room">
    <h1 class="judul" data-aos="zoom-in-up" data-aos-duration="800">
      Jadwal Ibadah
    </h1>
    <div class="area-room">
      <div class="box-room box-room1" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
        <div class="nama-room">
          <a href="">Ibadah Pagi</a>
          <a href="" class="plus-btn">+</a>
        </div>
      </div>
      <div class="box-room box-room2" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
        <div class="nama-room">
          <a href="">Ibadah Siang</a>
          <a href="" class="plus-btn">+</a>
        </div>
      </div>
      <div class="box-room box-room3" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
        <div class="nama-room">
          <a href="">Ibadah Sore</a>
          <a href="" class="plus-btn">+</a>
        </div>
      </div>
    </div>
  </div>

  <div class="aktivitas p-ats" id="aktivitas">
    <h1 class="judul" data-aos="zoom-in-up" data-aos-duration="800">
      Daftar Pendeta
    </h1>
    <div class="area-aktivitas">
      <div class="box-aktivitas wrap">
        <img src="gambar/pastor.jpg" alt="" /><div class="text-akti">
          <h1 data-aos="fade-up" data-aos-duration="800">PDT Jon Doe</h1>
          <p data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil numquam consectetur blanditiis officia, nobis natus similique quibusdam fuga, error maiores cumque veniam? Amet sunt odio ad. Cupiditate, laborum sit consectetur obcaecati velit aperiam explicabo dicta unde accusantium dolore, molestiae voluptates asperiores quas consequuntur modi quidem porro! Ab illo voluptate beatae?
          </p>
        </div>
      </div>
      <div class="box-aktivitas wrap-reverse">
        <div class="text-akti">
          <h1 data-aos="fade-up" data-aos-duration="800">PDT Jon Doe</h1>
          <p data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil numquam consectetur blanditiis officia, nobis natus similique quibusdam fuga, error maiores cumque veniam? Amet sunt odio ad. Cupiditate, laborum sit consectetur obcaecati velit aperiam explicabo dicta unde accusantium dolore, molestiae voluptates asperiores quas consequuntur modi quidem porro! Ab illo voluptate beatae?
          </p>
        </div>
        <img src="gambar/pastor.jpg" alt="" />
      </div>
      <div class="box-aktivitas wrap">
        <img src="gambar/pastor.jpg" alt="" /><div class="text-akti">
          <h1 data-aos="fade-up" data-aos-duration="800">PDT Jon Doe</h1>
          <p data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil numquam consectetur blanditiis officia, nobis natus similique quibusdam fuga, error maiores cumque veniam? Amet sunt odio ad. Cupiditate, laborum sit consectetur obcaecati velit aperiam explicabo dicta unde accusantium dolore, molestiae voluptates asperiores quas consequuntur modi quidem porro! Ab illo voluptate beatae?
          </p>
        </div>
      </div>
      <div class="box-aktivitas wrap-reverse">
        <div class="text-akti">
          <h1 data-aos="fade-up" data-aos-duration="800">PDT Jon Doe</h1>
          <p data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil numquam consectetur blanditiis officia, nobis natus similique quibusdam fuga, error maiores cumque veniam? Amet sunt odio ad. Cupiditate, laborum sit consectetur obcaecati velit aperiam explicabo dicta unde accusantium dolore, molestiae voluptates asperiores quas consequuntur modi quidem porro! Ab illo voluptate beatae?
          </p>
        </div>
        <img src="gambar/pastor.jpg" alt="" />
      </div>
      <div class="box-aktivitas wrap">
        <img src="gambar/pastor.jpg" alt="" />
        <div class="text-akti">
          <h1 data-aos="fade-up" data-aos-duration="800">PDT Jon Doe</h1>
          <p data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil numquam consectetur blanditiis officia, nobis natus similique quibusdam fuga, error maiores cumque veniam? Amet sunt odio ad. Cupiditate, laborum sit consectetur obcaecati velit aperiam explicabo dicta unde accusantium dolore, molestiae voluptates asperiores quas consequuntur modi quidem porro! Ab illo voluptate beatae?
          </p>
        </div>
      </div>
    </div>
  </div>
  <div class="terdekat p-ats" id="terdekat">
    <h1 class="judul" data-aos="fade-up" data-aos-duration="800">
      Artikel Terbaru
    </h1>
    <div class="area-terdekat">
      <div class="box-terdekat column" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
        <img src="gambar/kitab.png" alt="" />
        <p>01/08/2023</p>
        <h1>Natal Is Coming</h1>
        <a href="#">READ MORE</a>
      </div>
      <div class="box-terdekat column" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
        <img src="gambar/paskah.png" alt="" />
        <p>01/08/2023</p>
        <h1>Berangkat Ke Paskah</h1>
        <a href="#">READ MORE</a>
      </div>
      <div class="box-terdekat column" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
        <img src="gambar/kitab.png" alt="" />
        <p>01/08/2023</p>
        <h1>Natal Is Coming</h1>
        <a href="#">READ MORE</a>
      </div>
      <div class="box-terdekat column" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
        <img src="gambar/paskah.png" alt="" />
        <p>01/08/2023</p>
        <h1>Berangkat Ke Paskah</h1>
        <a href="#">READ MORE</a>
      </div>
      <div class="box-terdekat column" data-aos="fade-up" data-aos-duration="800" data-aos-delay="500">
        <img src="gambar/kitab.png" alt="" />
        <p>01/08/2023</p>
        <h1>Natal Is Coming</h1>
        <a href="#">READ MORE</a>
      </div>
      <div class="box-terdekat column" data-aos="fade-up" data-aos-duration="800" data-aos-delay="600">
        <img src="gambar/paskah.png" alt="" />
        <p>01/08/2023</p>
        <h1>Berangkat Ke Paskah</h1>
        <a href="#">READ MORE</a>
      </div>
      <div class="box-terdekat column" data-aos="fade-up" data-aos-duration="800" data-aos-delay="700">
        <img src="gambar/kitab.png" alt="" />
        <p>01/08/2023</p>
        <h1>Natal Is Coming</h1>
        <a href="#">READ MORE</a>
      </div>
      <div class="box-terdekat column" data-aos="fade-up" data-aos-duration="800" data-aos-delay="800">
        <img src="gambar/paskah.png" alt="" />
        <p>01/08/2023</p>
        <h1>Berangkat Ke Paskah</h1>
        <a href="#">READ MORE</a>
      </div>
    </div>
  </div>
  <div class="footer">
    <div class="footer-1 column">
      <h1>HKBP</h1>
      <hr />
      <p>Rumah Tuhan</p>
      <div class="sosial">
        <img src="gambar/facebook.png" alt="" />
        <img src="gambar/instagram.png" alt="" />
        <img src="gambar/twitter.png" alt="" />
      </div>
    </div>
    <div class="footer-2 column">
      <h1>Location</h1>
      <hr />
      <p>
        Jl. Dangin Uma No. 14 <br />
        Desa Tegallalang, Ubud <br />
        Gianyar, Bali
      </p>
    </div>
    <div class="footer-3 column">
      <h1>Information</h1>
      <hr />
      <a href="">Contact</a>
      <a href="">FAQ</a>
    </div>
    <div class="footer-3 column">
      <h1>Support</h1>
      <hr />
      <a href="">Term of Service</a>
      <a href="">Privacy Policy</a>
    </div>
  </div>
  <!-- <audio id="musik" controls hidden autoplay loop>
    <source src="audio/TabuhTelu.mp3" type="audio/mpeg" />
  </audio> -->
  <script>
    AOS.init();
    window.onload = disable();

    function disable() {
      TopScroll = window.pageYOffset || document.documentElement.scrollTop;
      (LeftScroll =
        window.pageXOffset || document.documentElement.scrollLeft),
        (window.onscroll = function () {
          window.scrollTo(LeftScroll, TopScroll);
        });
    }

    function enable() {
      window.onscroll = function () { };
      let landingpages = document.getElementById("landing-page");
      landingpages.classList.add("ke-atas");
      document.getElementById("musik").play();
    }

    let musik = document.getElementById("musik");
    let play = document.getElementById("play");
    let berhenti = document.getElementById("mute");

    play.onclick = function () {
      musik.pause();
      play.classList.add("none");
      berhenti.classList.remove("none");
    };

    berhenti.onclick = function () {
      musik.play();
      play.classList.remove("none");
      berhenti.classList.add("none");
    };

    function kirim() {
      swal("Succeed", "Message Successfully Sent", "success");
    }

    $("#nav-btn").click(function () {
      $(".nav-respon").toggleClass("active");
    });
    $("#nav-close").click(function () {
      $(".nav-respon").removeClass("active");
    });
    $("#nav-link1").click(function () {
      $(".nav-respon").removeClass("active");
    });
    $("#nav-link2").click(function () {
      $(".nav-respon").removeClass("active");
    });
    $("#nav-link3").click(function () {
      $(".nav-respon").removeClass("active");
    });
    $("#nav-link4").click(function () {
      $(".nav-respon").removeClass("active");
    });
    $("#nav-link5").click(function () {
      $(".nav-respon").removeClass("active");
    });

    var scroll = new SmoothScroll('a[href*="#"]', {
      speed: 300,
      speedAsDuration: true
    });
    var easeInQuint = new SmoothScroll('[data-easing="easeInQuint"]', { easing: 'easeInQuint' });
  </script>
</body>

</html>