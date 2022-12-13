<?php
if($_GET){
    $number = $_GET['number'];
    $phone = $_GET['phone'];
    $address = $_GET['address'];
    $message = $_GET['message'];
    $price = $_GET['number'] * 110000;
}

?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--=============== FAVICON ===============-->
        <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">

        <!--=============== REMIX ICONS ===============-->
        <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

        <!--=============== CSS ===============-->
        <link rel="stylesheet" href="assets/css/styles.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <title>Responsive plants website - Bedimcode</title>
    </head>
    <body>
        
        <!--==================== HEADER ====================-->
        <header class="header" id="header">
            <nav class="nav container">
                <a href="#" class="nav__logo">
                    <i class="ri-leaf-line nav__logo-icon"></i> Plantex
                </a>
                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a href="http://localhost/planweb/virtual-assistant-main" class="nav__link">Weather</a>
                        </li>
                    </ul>

                    <div class="nav__close" id="nav-close">
                        <i class="ri-close-line"></i>
                    </div>
                </div>
                <div class="nav__btns">
                    <i class="ri-moon-line change-theme" id="theme-button"></i>

                    <div class="nav__toggle" id="nav-toggle">
                        <i class="ri-menu-line"></i>
                    </div>
                </div>
                <span class="microphone" style="cursor:pointer">
                    <i class="fa fa-microphone"></i>
                </span>
            </nav>
        </header>
        <main class="main">
        <section class="about section container" id="about">
                <div class="about__container grid">
                    <img src="assets/img/product2.png" alt="" class="about__img">

                    <div class="about__data">
                        <h2 class="section__title about__title">
                            Order Details
                        </h2>
                        <div class="about__details">
                        <p class="about__details-description" id = "name">
                                <i class="ri-checkbox-fill about__details-icon"></i>
                               Product: Xương rồng Núi
                        </p>
                        <p class="about__details-description" id = "name">
                                <i class="ri-checkbox-fill about__details-icon"></i>
                               Price: <?php echo $price?> VND
                        </p>
                        <p class="about__details-description" id = "number">
                            <i class="ri-checkbox-fill about__details-icon"></i>
                            Quantity: <?php echo $number?>
                        </p>
                        <p class="about__details-description" id = "phone">
                            <i class="ri-checkbox-fill about__details-icon"></i>
                            Phone number: <?php echo $phone?>
                        </p>
                        <p class="about__details-description" id = "address">
                            <i class="ri-checkbox-fill about__details-icon"></i>
                            Address: <?php echo $address?>
                        </p>
                        <p class="about__details-description" id = "message">
                            <i class="ri-checkbox-fill about__details-icon"></i>
                            Message: <?php echo $message?>
                        </p>
                        <p class="about__details-description" id = "note">
                            <i class="ri-checkbox-fill about__details-icon"></i>
                            Delivery date: 20/10/2022
                        </p>
                        </div>

                        <a href="index.html" class="button--link button--flex" id = "home">
                            Về trang chủ<i class="ri-arrow-right-down-line button__icon"></i>
                        </a>
                    </div>
                </div>
            </section>
        </main>
        <footer class="footer section">
            <div class="footer__container container grid">
                <div class="footer__content">
                    <a href="#" class="footer__logo">
                        <i class="ri-leaf-line footer__logo-icon"></i> Plantex
                    </a>

                    <h3 class="footer__title">
                        Subscribe to our newsletter <br> to stay update
                    </h3>

                    <div class="footer__subscribe">
                        <input type="email" placeholder="Enter your email" class="footer__input">

                        <button class="button button--flex footer__button">
                            Subscribe
                            <i class="ri-arrow-right-up-line button__icon"></i>
                        </button>
                    </div>
                </div>

                <div class="footer__content">
                    <h3 class="footer__title">Our Address</h3>

                    <ul class="footer__data">
                        <li class="footer__information">1234 - Peru</li>
                        <li class="footer__information">La Libertad - 43210</li>
                        <li class="footer__information">123-456-789</li>
                    </ul>
                </div>

                <div class="footer__content">
                    <h3 class="footer__title">Contact Us</h3>

                    <ul class="footer__data">
                        <li class="footer__information">+999 888 777</li>
                        
                        <div class="footer__social">
                            <a href="https://www.facebook.com/" class="footer__social-link">
                                <i class="ri-facebook-fill"></i>
                            </a>
                            <a href="https://www.instagram.com/" class="footer__social-link">
                                <i class="ri-instagram-line"></i>
                            </a>
                            <a href="https://twitter.com/" class="footer__social-link">
                                <i class="ri-twitter-fill"></i>
                            </a>
                        </div>
                    </ul>
                </div>

                <div class="footer__content">
                    <h3 class="footer__title">
                        We accept all credit cards
                    </h3>
                    <div class="footer__cards">
                        <img src="assets/img/card1.png" alt="" class="footer__card">
                        <img src="assets/img/card2.png" alt="" class="footer__card">
                        <img src="assets/img/card3.png" alt="" class="footer__card">
                        <img src="assets/img/card4.png" alt="" class="footer__card">
                    </div>
                </div>
            </div>

            <p class="footer__copy">&#169; Bedimcode. All rigths reserved</p>
        </footer>
        
        <!--=============== SCROLL UP ===============-->
        <a href="#" class="scrollup" id="scroll-up"> 
            <i class="ri-arrow-up-fill scrollup__icon"></i>
        </a>

        <!--=============== SCROLL REVEAL ===============-->
        <script src="assets/js/scrollreveal.min.js"></script>
        <!--=============== MAIN JS ===============-->
        <script src="assets/js/main.js"></script>
        <script>
            let utter = new SpeechSynthesisUtterance();
            utter.lang = 'en-US';
            utter.text = '';
            utter.rate= 0.5;
            utter.volume = 0.1;

            var SpeechRecognition = SpeechRecognition || webkitSpeechRecognition;
            const recognition = new SpeechRecognition();
            recognition.lang = 'vi-VN';
            recognition.continious = false;
            recognition.start();
            result = true;
            const handlevoice = (text) =>{
                console.log('text', text);
                const handleText = text.toLowerCase();
                if(handleText.includes("về trang chủ")){
                    var home = document.getElementById('home');
                    home.click();
                }
                if(handleText.includes("chi tiết đơn hàng")){
                    var name = document.getElementById('name');
                    utter.text = name.value;
                    console.log(name.value);
                    window.speechSynthesis.speak(utter);   
                }     
            }
            recognition.onend = ()=>{
                if(result == false){
                    recognition.stop();

                } else{
                    result = true;
                    recognition.start();
                }
            }
            recognition.onerror = (err)=>{
                console.error(err);
            }
            recognition.onresult = (e)=>{
                console.log('onresult', e);
                const text = e.results[0][0].transcript;
                handlevoice(text);
            }

        </script>

    </body>
</html>
