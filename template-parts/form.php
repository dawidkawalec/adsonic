<?php
/**
 * Template part for form
 *
 */

?>

<div class="logotype">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 style="    position: absolute;
    color: #000;
    background: #3ac2cf;
    font-size: 40px;
    font-weight: 700;
    padding: 10px;
    top: -230px;
    width: 400px;
    text-align: center;
    left: calc(50% - 200px);">Zaufali nam</h2>
                <div class="logos__wrapper" style="display: block;
    margin: 0 auto;
    width: 900px;
    padding-top: 60px;">
                    <!-- Swiper -->
                    <div class="swiper-container">
                        <div class="swiper-wrapper" style="align-items: center;">
                            <div class="swiper-slide">
                                <img src="http://adsonic.pl/wp-content/uploads/2021/02/wowcars.png" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="http://adsonic.pl/wp-content/uploads/2021/02/labels.png" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="http://adsonic.pl/wp-content/uploads/2021/02/wowcars.png" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="http://adsonic.pl/wp-content/uploads/2021/02/labels.png" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="http://adsonic.pl/wp-content/uploads/2021/02/wowcars.png" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="http://adsonic.pl/wp-content/uploads/2021/02/labels.png" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="http://adsonic.pl/wp-content/uploads/2021/02/wowcars.png" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="http://adsonic.pl/wp-content/uploads/2021/02/labels.png" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="http://adsonic.pl/wp-content/uploads/2021/02/wowcars.png" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="http://adsonic.pl/wp-content/uploads/2021/02/labels.png" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="http://adsonic.pl/wp-content/uploads/2021/02/wowcars.png" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="http://adsonic.pl/wp-content/uploads/2021/02/labels.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Swiper JS -->
                <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

                <!-- Initialize Swiper -->
                <script>
                var swiper = new Swiper('.swiper-container', {
                    slidesPerView: 5,
                    spaceBetween: 30,
                    loop: true,
                    centeredSlides: true,
                });
                </script>
            </div>
        </div>
    </div>
</div>
<!-- Link Swiper's CSS -->
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">



<section class="form">
    <div class="container">
        <div class="row">
            <div class="col-xl-5 formtext-content text-center text-xl-left">
                <h3>Jesteśmy agencją skutecznej reklamy, która pomoże Ci osiągnąć nowy poziom sprzedaży.</h3>
                <h4>Nasze działania realnie zwiększają konwersję, ze wszystkich kanałów, w których powinieneś być
                    obecny!</h4>
                <p><span class="d-block">Wyróżnij się</span>i postaw na skuteczną<br>reklamę.</p>
            </div>
            <div class="col-xl-6 mt-5 mt-xl-0 offset-xl-1 form-content">
                <?php echo do_shortcode('[contact-form-7 id="7" title="Formularz 1"]'); ?>
                <img class="year-21" src="/wp-content/themes/adsonic/inc/assets/image/2021.png" alt="2021">
                <img class="person" src="/wp-content/themes/adsonic/inc/assets/image/form-person.png" alt="person">
            </div>
        </div>
    </div>
</section>