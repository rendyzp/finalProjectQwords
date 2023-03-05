<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://kit.fontawesome.com/910ce80589.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="{{ asset('style.css') }}" />
  <title>webpageDesign</title>
</head>

<body>
  <div class="container">
    <header>
      <div class="logo">
        <img src="{{ asset('img/logo.png') }}" />
      </div>
      <div class="menu">
        <ul>
          <li><a href="" class="active">Cloud Hosting</a></li>
          <li><a href="">Server</a></li>
          <li><a href="">Domain</a></li>
          <li><a href="">Email Suite</a></li>
          <li><a href="">Services</a></li>
          <li><a href="">Internet Access</a></li>
        </ul>
      </div>
      <div class="btns">
        <a href=""><i class="fa-regular fa-user"></i> Sign in</a>
      </div>
    </header>
    <div class="content">
      <div class="info">
        <p class="title">Kunci Kesuksesan Websitemu!</p>
        <h1>
          Qwords menawarkan layanan Cloud Hosting yang Cepat, Aman, dan
          Dukungan 24 jam untuk memenuhi kebutuhan hosting Anda.
          Tersertifikasi ISO 27001 dengan Data Center Tier 3. <br />
        </h1>
      </div>
      <div class="imgContent">
        <img src="{{ asset('img/marketing.png') }}" />
      </div>
    </div>
    <div class="videoContent">
      <div class="mainVideo">
        <video src="video/video.mp4" controls></video>
      </div>
      <div class="closeBtn">
        <i class="fa-solid fa-xmark"></i>
      </div>
    </div>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
  <script>
    const playBtn = document.querySelector(".clickIcon");
    const videoContent = document.querySelector(".videoContent");
    const closeBtn = document.querySelector(".closeBtn");

    playBtn.addEventListener("click", function() {
      videoContent.classList.add("is-active");
    });

    closeBtn.addEventListener("click", function() {
      videoContent.classList.remove("is-active");
    });

    let animation = anime({
      targets: "header",
      translateY: [-50, 0],
      opacity: [0, 1],
      duration: 800,
      easing: "easeInOutSine",
    });

    anime({
      targets: ".content .info .title",
      translateX: [50, 0],
      opacity: [0, 1],
      duration: 800,
      easing: "easeInOutSine",
    });

    anime({
      targets: ".content .info h1",
      translateX: [-50, 0],
      opacity: [0, 1],
      duration: 800,
      easing: "easeInOutSine",
    });

    anime({
      targets: ".content .info .text",
      translateX: [50, 0],
      opacity: [0, 1],
      duration: 800,
      easing: "easeInOutSine",
    });

    anime({
      targets: ".content .info form",
      translateX: [-50, 0],
      opacity: [0, 1],
      duration: 800,
      easing: "easeInOutSine",
    });

    anime({
      targets: ".content .info .link",
      translateY: [50, 0],
      opacity: [0, 1],
      duration: 800,
      easing: "easeInOutSine",
    });

    anime({
      targets: ".content .imgContent",
      weight: "20",
      translateX: [150, 0],
      opacity: [0, 1],
      duration: 800,
      easing: "easeInOutSine",
      delay: 500,
    });
  </script>
</body>

</html>
