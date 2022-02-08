<!DOCTYPE html>
<html>

<head>
    <style>

    </style>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/test.css">
</head>

<body>
<div class="sidenav">
    <a href="https://www.w3schools.com/">W3 Schools</a>
    <a href="https://portal.hz.nl/">HZ portal</a>
    <a href="https://learn.hz.nl/my/">HZ learn</a>
</div>
<div style="margin-left:13%">
    <section id = "home">
        <ul>
            <li><a class="active" href="/">Home</a></li>
            <li><a href="profile">Profiel</a></li>
            <li><a href="blog">Blog</a></li>
            <li><a href="faq">FAQ</a></li>
            <li><a href="motivatie">Waarom ICT?</a></li>
            <li><a href="surprise">YourSurprise</a></li>
            <li style="float:right"><a href="tabel">Tabel</a></li>
        </ul>
        <br>

        <div class="slideshow-container">

            <div class="mySlides fade">
                <img src="img/frezen.jpg" style="width:100%">
            </div>

            <div class="mySlides fade">
                <img src="img/schuurpapier.jpg" style="width:100%">
            </div>

            <div class="mySlides fade">
                <img src="img/klemmen.jpg" style="width:100%">
            </div>

        </div>
        <br>

        <script>
            var slideIndex = 0;
            showSlides();

            function showSlides() {
                var i;
                var slides = document.getElementsByClassName("mySlides");
                var dots = document.getElementsByClassName("dot");
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";
                }
                slideIndex++;
                if (slideIndex > slides.length) { slideIndex = 1 }
                for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" active", "");
                }
                slides[slideIndex - 1].style.display = "block";
                setTimeout(showSlides, 5000); // Change image every 2 seconds
            }
        </script>
    </section>

    <div class="row">
        <div class="column">
            <div class="card">
                <img src="img/huis.jpg" width="100%"><br>
                <h3>Mijn Home's (dit is hoe de website er eerst uitzag)</h3>
                <p></p>
                <a button class="button button1" href="home">Home's</a>
            </div>
        </div>

        <div class="column">
            <div class="card">

                <img src="img/2-IMG_5320.jpg" width="100%"><br>
                <h3>Over mezelf</h3>
                <p></p>
                <a button class="button button1" href="profile">Profiel</a>
            </div>
        </div>
    </div>
</div>

</body>

</html>
