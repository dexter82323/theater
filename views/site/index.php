<?php
use \yii\helpers\Url;
?>
<!--<div class="preloader d-flex align-items-center justify-content-center">-->
<!--    <div class="circle-preloader">-->
<!--        <img src="img/core-img/compact-disc.png" alt="">-->
<!--    </div>-->
<!--</div>-->
<section class="hero-area">
    <div class="hero-slides owl-carousel">

        <!-- Single Hero Slide -->
        <div class="single-hero-slide d-flex align-items-center justify-content-center">
            <!-- Slide Img -->
            <div class="slide-img bg-img" style="background-image: url(img/bg-img/back-5.jpg);"></div>
            <!-- Slide Content -->
            <div class="hero-slides-content text-center">
                <a href="<?php echo Url::to(['/site/about'])?>"><h2 style="margin-left:650px; margin-top: 300px " data-animation="fadeInUp" data-delay="100ms">Театр<span>Театр</span></h2>
                <br>
                <br>
                <p  data-animation="fadeInUp" data-delay="300ms">им.Горького</p></a>
            </div>
            <!-- Big Text -->
            <h2 class="big-text">Горького</h2>
        </div>

        <!-- Single Hero Slide -->
        <div class="single-hero-slide d-flex align-items-center justify-content-center">
            <!-- Slide Img -->
            <div class="slide-img bg-img" style="background-image: url(img/bg-img/back-6.jpg);"></div>
            <!-- Slide Content -->
            <div class="hero-slides-content text-center">
                <a href="<?php echo Url::to(['/site/repertoire','genre'=>'comedy'])?>"><h2 style="margin-left:550px; margin-top: 300px " data-animation="fadeInUp" data-delay="100ms">Комедия <span>Комедия</span></h2>
            </div></a>
            <!-- Big Text -->
            <h2 class="big-text">Комедия</h2>
        </div>

        <!-- Single Hero Slide -->
        <div class="single-hero-slide d-flex align-items-center justify-content-center">
            <!-- Slide Img -->
            <div class="slide-img bg-img" style="background-image: url(img/bg-img/back-7.jpg);"></div>
            <!-- Slide Content -->
            <div class="hero-slides-content text-center">
                <a href="<?php echo Url::to(['/site/repertoire','genre'=>'drama'])?>"><h2 style="margin-left:650px; margin-top: 300px " data-animation="fadeInUp" data-delay="100ms">Драма <span>Драма</span></h2>
            </div></a>
            <!-- Big Text -->
            <h2 class="big-text">Комедия</h2>
        </div>

        <!-- Single Hero Slide -->
        <div class="single-hero-slide d-flex align-items-center justify-content-center">
            <!-- Slide Img -->
            <div class="slide-img bg-img" style="background-image: url(img/bg-img/back-2.jpg);"></div>
            <!-- Slide Content -->
            <div class="hero-slides-content text-center">
                <a href="<?php echo Url::to(['/site/repertoire','genre'=>'musical'])?>"><h2 style="margin-left:600px; margin-top: 300px " data-animation="fadeInUp" data-delay="100ms">Мюзикл <span>Мюзикл</span></h2>
            </div></a>
            <!-- Big Text -->
            <h2 class="big-text">Комедия</h2>
        </div>

        <!-- Single Hero Slide -->
        <div class="single-hero-slide d-flex align-items-center justify-content-center">
            <!-- Slide Img -->
            <div class="slide-img bg-img" style="background-image: url(img/bg-img/back-9.jpg);"></div>
            <!-- Slide Content -->
            <div class="hero-slides-content text-center">
                <a href="<?php echo Url::to(['/site/repertoire','genre'=>'opera'])?>"><h2 style="margin-left:600px; margin-top: 300px " data-animation="fadeInUp" data-delay="100ms">Опера<span>Опера</span></h2>
            </div></a>
            <!-- Big Text -->
            <h2 class="big-text">Комедия</h2>
        </div>

    </div>
    <!-- bg gradients -->
    <div class="bg-gradients"></div>

    <!-- Slide Down -->
    <div class="slide-down" id="scrollDown">
        <h6>Подробнее</h6>
        <div class="line"></div>
    </div>
</section>
<!-- ##### Hero Area End ##### -->

<!-- ##### About Us Area Start ##### -->
<div class="about-us-area section-padding-100-0 bg-img bg-overlay" style="background-image: url(img/bg-img/back-10.jpg);" id="about">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading">
                    <h2>Ростовский аккадемический театр драммы</h2>
                    <h6>им.Максима Горького</h6>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- About Thumbnail -->
            <div class="col-12 col-lg-6">
                <br>
                <div class="about-thumbnail mb-100">
                    <img src="img/bg-img/back-10.jpg" alt="">
                </div>
            </div>
            <!-- About Content -->
            <div class="col-12 col-lg-6">
                <div class="about-content mb-100">
                    <h4>Мы приветствуем вас!</h4>
                    <p>Ростовский академический театр драмы им. М. Горького ведет свою историю c 23 июня 1863 года, когда в Ростове-на-Дону впервые поднялся занавес городского театра, давшего городу первую сезонную труппу, а затем и первую стационарную. Первый в городе театр, деревянный, был построен по инициативе губернатора на средства городских богачей – К.М. Гайрабетова, И.И. Грибанова, М.П. Драшкевича.Спустя 20 лет, в 1883 году, в Ростове появилось первое каменное здание театра, построенного владельцем табачной фабрики В. Асмоловым. С тех пор город стал по-настоящему театральным. На сцене Асмоловского театра шла почти вся русская драматическая классика – в талантливой постановке Синельникова, Собольщикова-Самарина, Марджанова, Далматова, Вульф. После революции театр получил имя А. Луначарского и оставался самым значительным в регионе. Спустя 15 лет было построено современное здание драматического театра, получившего имя Максима Горького.</p>
                    <img src="img/core-img/signature.png" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ##### About Us Area End ##### -->

<!-- ##### Upcoming Shows Area Start ##### -->
<div class="upcoming-shows-area section-padding-100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading">
                    <h2>Ближайшие представления</h2>
                    <h6>на этой неделе</h6>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <!-- Upcoming Shows Content -->
                <div class="upcoming-shows-content">

                    <!-- Single Upcoming Shows -->

                    <div class="single-upcoming-shows d-flex align-items-center flex-wrap">
                        <div class="shows-date">
                            <h2>17 <span>July</span></h2>
                        </div>
                        <div class="shows-desc d-flex align-items-center">
                            <div class="shows-img">
                                <img src="img/bg-img/s1.jpg" alt="">
                            </div>
                            <div class="shows-name">
                                <h6>Electric castle Festival</h6>
                                <p>Cluj, Romania</p>
                            </div>
                        </div>
                        <div class="shows-location">
                            <p>At the Castle</p>
                        </div>
                        <div class="shows-time">
                            <p>20:30</p>
                        </div>
                        <div class="buy-tickets">
                            <a href="#" class="btn musica-btn">Buy Tikets</a>
                        </div>
                    </div>

                    <!-- Single Upcoming Shows -->
                    <div class="single-upcoming-shows d-flex align-items-center flex-wrap">
                        <div class="shows-date">
                            <h2>23 <span>July</span></h2>
                        </div>
                        <div class="shows-desc d-flex align-items-center">
                            <div class="shows-img">
                                <img src="img/bg-img/s2.jpg" alt="">
                            </div>
                            <div class="shows-name">
                                <h6>Electric Festival</h6>
                                <p>Manhathan, NY, USA</p>
                            </div>
                        </div>
                        <div class="shows-location">
                            <p>Main Stadium</p>
                        </div>
                        <div class="shows-time">
                            <p>21:30</p>
                        </div>
                        <div class="buy-tickets">
                            <a href="#" class="btn musica-btn">Buy Tikets</a>
                        </div>
                    </div>

                    <!-- Single Upcoming Shows -->
                    <div class="single-upcoming-shows d-flex align-items-center flex-wrap">
                        <div class="shows-date">
                            <h2>25 <span>July</span></h2>
                        </div>
                        <div class="shows-desc d-flex align-items-center">
                            <div class="shows-img">
                                <img src="img/bg-img/s3.jpg" alt="">
                            </div>
                            <div class="shows-name">
                                <h6>Sunflower festival</h6>
                                <p>Paris, France</p>
                            </div>
                        </div>
                        <div class="shows-location">
                            <p>Sunflower Arena</p>
                        </div>
                        <div class="shows-time">
                            <p>20:30</p>
                        </div>
                        <div class="buy-tickets">
                            <a href="#" class="btn musica-btn">Buy Tikets</a>
                        </div>
                    </div>

                    <!-- Single Upcoming Shows -->
                    <div class="single-upcoming-shows d-flex align-items-center flex-wrap">
                        <div class="shows-date">
                            <h2>30 <span>July</span></h2>
                        </div>
                        <div class="shows-desc d-flex align-items-center">
                            <div class="shows-img">
                                <img src="img/bg-img/s4.jpg" alt="">
                            </div>
                            <div class="shows-name">
                                <h6>Electric castle Festival</h6>
                                <p>Cluj, Romania</p>
                            </div>
                        </div>
                        <div class="shows-location">
                            <p>At the Castle</p>
                        </div>
                        <div class="shows-time">
                            <p>20:30</p>
                        </div>
                        <div class="buy-tickets">
                            <a href="#" class="btn musica-btn">Buy Tikets</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- ##### Upcoming Shows Area End ##### -->

<!-- ##### Music Player Area Start ##### -->
<div class="music-player-area section-padding-100">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="music-player-slides owl-carousel">

                    <!-- Single Music Player -->
                    <div class="single-music-player">
                        <img src="img/bg-img/mp1.jpg" alt="">

                        <div class="music-info d-flex justify-content-between">
                            <div class="music-text">
                                <h5>Artist’s/Band Name</h5>
                                <p>Love is all Around</p>
                            </div>
                            <div class="music-play-icon">
                                <audio preload="auto" controls>
                                    <source src="audio/dummy-audio.mp3">
                                </audio>
                            </div>
                        </div>
                    </div>

                    <!-- Single Music Player -->
                    <div class="single-music-player">
                        <img src="img/bg-img/mp2.jpg" alt="">

                        <div class="music-info d-flex justify-content-between">
                            <div class="music-text">
                                <h5>Artist’s/Band Name</h5>
                                <p>Love is all Around</p>
                            </div>
                            <div class="music-play-icon">
                                <audio preload="auto" controls>
                                    <source src="audio/dummy-audio.mp3">
                                </audio>
                            </div>
                        </div>
                    </div>

                    <!-- Single Music Player -->
                    <div class="single-music-player">
                        <img src="img/bg-img/mp3.jpg" alt="">

                        <div class="music-info d-flex justify-content-between">
                            <div class="music-text">
                                <h5>Artist’s/Band Name</h5>
                                <p>Love is all Around</p>
                            </div>
                            <div class="music-play-icon">
                                <audio preload="auto" controls>
                                    <source src="audio/dummy-audio.mp3">
                                </audio>
                            </div>
                        </div>
                    </div>

                    <!-- Single Music Player -->
                    <div class="single-music-player">
                        <img src="img/bg-img/mp4.jpg" alt="">

                        <div class="music-info d-flex justify-content-between">
                            <div class="music-text">
                                <h5>Artist’s/Band Name</h5>
                                <p>Love is all Around</p>
                            </div>
                            <div class="music-play-icon">
                                <audio preload="auto" controls>
                                    <source src="audio/dummy-audio.mp3">
                                </audio>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- ##### Music Player Area End ##### -->

<!-- ##### Featured Album Area Start ##### -->
<div class="featured-album-area section-padding-100 clearfix">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="featured-album-content d-flex flex-wrap">

                    <!-- Album Thumbnail -->
                    <div class="album-thumbnail h-100 bg-img" style="background-image: url(img/bg-img/back-8.jpg);"></div>

                    <!-- Album Songs -->
                    <div class="album-songs h-100">

                        <!-- Album Info -->
                        <div class="album-info mb-50 d-flex flex-wrap align-items-center justify-content-between">
                            <div class="album-title">
                                <h6>Прослушать</h6>
                                <h4> Mozart, l’opéra rock</h4>
                            </div>
                            <div class="album-buy-now">
                                <a href="https://itunes.apple.com/au/artist/mozart-lopéra-rock/298886083" class="btn musica-btn">Buy it on Itunes</a>
                            </div>
                        </div>

                        <div class="album-all-songs">

                            <!-- Music Playlist -->
                            <div class="music-playlist">
                                <!-- Single Song -->
                                <div class="single-music active">
                                    <h6>Drop that beat</h6>
                                    <audio preload="auto" controls>
                                        <source src="audio/1.mp3">
                                    </audio>
                                </div>

                                <!-- Single Song -->
                                <div class="single-music">
                                    <h6>Hey, Mister Dj</h6>
                                    <audio preload="auto" controls>
                                        <source src="audio/dummy-audio.mp3">
                                    </audio>
                                </div>

                                <!-- Single Song -->
                                <div class="single-music">
                                    <h6>Message to my future self</h6>
                                    <audio preload="auto" controls>
                                        <source src="audio/dummy-audio.mp3">
                                    </audio>
                                </div>

                                <!-- Single Song -->
                                <div class="single-music">
                                    <h6>Bring back the love</h6>
                                    <audio preload="auto" controls>
                                        <source src="audio/dummy-audio.mp3">
                                    </audio>
                                </div>

                                <!-- Single Song -->
                                <div class="single-music">
                                    <h6>Hey, Mister Dj - Remix</h6>
                                    <audio preload="auto" controls>
                                        <source src="audio/dummy-audio.mp3">
                                    </audio>
                                </div>

                                <!-- Single Song -->
                                <div class="single-music">
                                    <h6>Message to my future self</h6>
                                    <audio preload="auto" controls>
                                        <source src="audio/dummy-audio.mp3">
                                    </audio>
                                </div>
                                <!-- Single Song -->
                                <div class="single-music">
                                    <h6>Drop that beat</h6>
                                    <audio preload="auto" controls>
                                        <source src="audio/dummy-audio.mp3">
                                    </audio>
                                </div>

                                <!-- Single Song -->
                                <div class="single-music">
                                    <h6>Hey, Mister Dj</h6>
                                    <audio preload="auto" controls>
                                        <source src="audio/dummy-audio.mp3">
                                    </audio>
                                </div>

                                <!-- Single Song -->
                                <div class="single-music">
                                    <h6>Message to my future self</h6>
                                    <audio preload="auto" controls>
                                        <source src="audio/dummy-audio.mp3">
                                    </audio>
                                </div>

                                <!-- Single Song -->
                                <div class="single-music">
                                    <h6>Bring back the love</h6>
                                    <audio preload="auto" controls>
                                        <source src="audio/dummy-audio.mp3">
                                    </audio>
                                </div>

                                <!-- Single Song -->
                                <div class="single-music">
                                    <h6>Hey, Mister Dj - Remix</h6>
                                    <audio preload="auto" controls>
                                        <source src="audio/dummy-audio.mp3">
                                    </audio>
                                </div>

                                <!-- Single Song -->
                                <div class="single-music">
                                    <h6>Message to my future self</h6>
                                    <audio preload="auto" controls>
                                        <source src="audio/dummy-audio.mp3">
                                    </audio>
                                </div>
                            </div>
                        </div>
                        <!-- Now Playing -->
                        <div class="now-playing d-flex flex-wrap align-items-center justify-content-between">
                            <div class="songs-name">
                                <p>Playing</p>
                                <h6>Drop that beat</h6>
                            </div>
                            <audio preload="auto" controls>
                                <source src="audio/dummy-audio.mp3">
                            </audio>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ##### Featured Album Area End ##### -->

<!-- ##### Music Artists Area Start ##### -->
<div class="musica-music-artists-area d-flex flex-wrap clearfix">
    <!-- Music Search -->
    <div class="music-search bg-img bg-overlay2 wow fadeInUp" data-wow-delay="300ms" style="background-image: url(img/bg-img/bg-9.jpg);">
        <!-- Content -->
        <div class="music-search-content">
            <h2>Music</h2>
            <h4>Search for the best music</h4>
        </div>
    </div>

    <!-- Artists Search -->
    <div class="artists-search bg-img bg-overlay2 wow fadeInUp" data-wow-delay="600ms" style="background-image: url(img/bg-img/bg-1.jpg);">
        <!-- Content -->
        <div class="music-search-content">
            <h2>Artists</h2>
            <h4>Search for the best artists</h4>
        </div>
    </div>
</div>