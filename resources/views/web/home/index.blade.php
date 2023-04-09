@extends('web.layout')

@section('content')
<!-- ========================= hero-section start ========================= -->
<section id="home" class="hero-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-5 col-lg-6">
                <div class="hero-content-wrapper">
                    <h2 class="mb-25 wow fadeInDown" data-wow-delay=".2s">Düzce Üniversitesi</h2>
                    <h1 class="mb-25 wow fadeInDown" data-wow-delay=".2s">Değer Üreten Üniversite</h1>
                    <p class="mb-35 wow fadeInLeft" data-wow-delay=".4s">Zorlukların üstesinden gelerek başarıya ulaşan
                        bir vizyonla hareket eden bir eğitim kurumunu temsil eder. Değer üreten
                        bir yaklaşımla, öğrencilere sosyal, kültürel ve akademik açıdan zengin bir eğitim deneyimi
                        sunar. Nitelikli akademik
                        kadrosu ve yenilikçi programlarıyla öğrencilerin potansiyelini ortaya çıkartır ve onları
                        geleceğe hazırlar.</p>
                    <a href="javascript:void(0)" class="theme-btn">İletişime Geç!</a>
                </div>
            </div>
            <div class="col-xl-7 col-lg-6">
                <div class="hero-img">
                    <div class="d-inline-block hero-img-right">

                        <video id="du-video" class="cover-image dot-shape image wow fadeInRight" autoplay="" loop=""
                            muted="" playsinline="" preload="auto"
                            poster="https://duzce.edu.tr/Content/theme-v2/video/intro.mp4" title="Düzce Üniversitesi">
                            <source type="video/mp4" src="https://duzce.edu.tr/Content/theme-v2/video/intro.mp4">
                        </video>
                        <div class="video-btn">
                            <a href="https://duzce.edu.tr/Content/theme-v2/video/intro.mp4" class="glightbox"><i
                                    class="lni lni-play"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ========================= hero-section end ========================= -->

<!-- ========================= client-logo-section start ========================= -->
<section class="client-logo-section pt-100">
    <div class="container">
        <div class="client-logo-wrapper">
            <div class="client-logo-carousel d-flex align-items-center justify-content-between">
                <div class="client-logo">
                    <img src="assets/img/client-logo/1.png" alt="">
                </div>
                <div class="client-logo">
                    <img src="assets/img/client-logo/2.png" alt="">
                </div>
                <div class="client-logo">
                    <img src="assets/img/client-logo/3.svg" alt="">
                </div>
                <div class="client-logo">
                    <img src="assets/img/client-logo/4.png" alt="">
                </div>
                <div class="client-logo">
                    <img src="assets/img/client-logo/5.png" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ========================= client-logo-section end ========================= -->

<!-- ========================= feature-section start ========================= -->
<section class="feature-section pt-130">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-7 col-md-9 mx-auto">
                <div class="section-title text-center mb-55">
                    <span class="wow fadeInDown" data-wow-delay=".2s">Geçmişten Bugüne..</span>
                    <h2 class="wow fadeInUp" data-wow-delay=".4s">Neler Yaptık</h2>
                    <p class="wow fadeInUp" data-wow-delay=".6s">Düzce Üniversitesi, eğitimde mükemmeli hedefleyen,
                        akademik birikimi yüksek, çağdaş ve dinamik bir üniversitedir. Geniş
                        bir kampüse sahip olan üniversite, modern laboratuvarlar, kapsamlı kütüphane, donanımlı sınıflar
                        ve sosyal aktivite
                        alanları ile öğrencilerin her türlü ihtiyacını karşılamaktadır. Nitelikli akademik kadrosu,
                        zengin lisans ve doktora
                        programları, uluslararası işbirlikleri ve proje fırsatları ile öğrencilere kapsamlı bir eğitim
                        sunmaktadır.</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="feature-box box-style">
                    <div class="feature-icon box-icon-style">
                        <i class="lni lni-layers"></i>
                    </div>
                    <div class="box-content-style feature-content">
                        <h4>Tubitak Projeleri</h4>
                        <p>Halen geliştirme aşamasında olan projeler, ileri teknolojilerin kullanımını içeren yenilikçi
                            yaklaşımları değerlendiren,
                            araştırma ve geliştirme faaliyetlerine destek veren Tubitak projeleri.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="feature-box box-style">
                    <div class="feature-icon box-icon-style">
                        <i class="lni lni-code-alt"></i>
                    </div>
                    <div class="box-content-style feature-content">
                        <h4>BAP PROJESİ</h4>
                        <p>BAP projeleri, üniversitelerde ve araştırma merkezlerinde gerçekleştirilen bilimsel
                            araştırmaları destekleyen
                            inisiyatiflerdir. </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="feature-box box-style">
                    <div class="feature-icon box-icon-style">
                        <i class="lni lni-agenda"></i>
                    </div>
                    <div class="box-content-style feature-content">
                        <h4>PATENT</h4>
                        <p>Yenilikçi buluşlara verilen tescil hakkıdır, icatların korunması ve ticari
                            değerlendirilmesini sağlar.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ========================= feature-section end ========================= -->

<!--========================= about-section start========================= -->
<section id="about" class="pt-100">
    <div class="about-section">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="about-img-wrapper">
                        <div class="about-img position-relative d-inline-block wow fadeInLeft" data-wow-delay=".3s">
                            <img src="assets/img/about/headline-back-01.png" alt="">

                            <div class="about-experience">
                                <h3>Uzun yıllar edinilmiş bilgi</h3>
                                <p>Daima teknolojiyi yakından takip eder ve kaliteli işler çıkarırız</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="about-content-wrapper">
                        <div class="section-title">
                            <span class="wow fadeInUp" data-wow-delay=".2s">About Us</span>
                            <h2 class="mb-40 wow fadeInRight" data-wow-delay=".4s">Built-With Boostrap 5, a New
                                Experiance</h2>
                        </div>
                        <div class="about-content">
                            <p class="mb-45 wow fadeInUp" data-wow-delay=".6s">Düzce Üniversitesi, akademik birikimi,
                                gençlik enerjisi, umut dolu gelecek beklentileri, eğlenceli etkinlikleri ve
                                başarı odaklı yaklaşımı ile öğrencilere güzel bir deneyim sunmaktadır.</p>
                            <div class="counter-up wow fadeInUp" data-wow-delay=".5s">
                                <div class="counter">
                                    <span id="secondo" class="countup count color-1" cup-end="30"
                                        cup-append="k">10</span>
                                    <h4>Happy Client</h4>
                                    <p>We Crafted an awesome design <br class="d-none d-md-block d-lg-none d-xl-block">
                                        library that is robust and</p>
                                </div>
                                <div class="counter">
                                    <span id="secondo" class="countup count color-2" cup-end="42"
                                        cup-append="k">5</span>
                                    <h4>Project Done</h4>
                                    <p>We Crafted an awesome design <br class="d-none d-md-block d-lg-none d-xl-block">
                                        library that is robust and</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--========================= about-section end========================= -->

<!-- ========================= service-section start ========================= -->
<section id="service" class="service-section pt-130 pb-80">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-7 col-md-9 mx-auto">
                <div class="section-title text-center mb-55">
                    <span class="wow fadeInDown" data-wow-delay=".2s">Services</span>
                    <h2 class="wow fadeInUp" data-wow-delay=".4s">Our Best Services</h2>
                    <p class="wow fadeInUp" data-wow-delay=".6s">At vero eos et accusamus et iusto odio
                        dignissimos ducimus quiblanditiis praesentium</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="service-box box-style">
                    <div class="service-icon box-icon-style">
                        <i class="lni lni-capsule"></i>
                    </div>
                    <div class="box-content-style service-content">
                        <h4>Refreshing Design</h4>
                        <p>Lorem ipsum dolor sit amet, adipscing elitr, sed diam nonumy eirmod tempor ividunt
                            labor dolore magna.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-box box-style">
                    <div class="service-icon box-icon-style">
                        <i class="lni lni-bootstrap"></i>
                    </div>
                    <div class="box-content-style service-content">
                        <h4>Solid Bootstrap 5</h4>
                        <p>Lorem ipsum dolor sit amet, adipscing elitr, sed diam nonumy eirmod tempor ividunt
                            labor dolore magna.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-box box-style">
                    <div class="service-icon box-icon-style">
                        <i class="lni lni-shortcode"></i>
                    </div>
                    <div class="box-content-style service-content">
                        <h4>100+ Components</h4>
                        <p>Lorem ipsum dolor sit amet, adipscing elitr, sed diam nonumy eirmod tempor ividunt
                            labor dolore magna.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-box box-style">
                    <div class="service-icon box-icon-style">
                        <i class="lni lni-dashboard"></i>
                    </div>
                    <div class="box-content-style service-content">
                        <h4>Speed Optimized</h4>
                        <p>Lorem ipsum dolor sit amet, adipscing elitr, sed diam nonumy eirmod tempor ividunt
                            labor dolore magna.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-box box-style">
                    <div class="service-icon box-icon-style">
                        <i class="lni lni-layers"></i>
                    </div>
                    <div class="box-content-style service-content">
                        <h4>Fully Customizable</h4>
                        <p>Lorem ipsum dolor sit amet, adipscing elitr, sed diam nonumy eirmod tempor ividunt
                            labor dolore magna.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-box box-style">
                    <div class="service-icon box-icon-style">
                        <i class="lni lni-reload"></i>
                    </div>
                    <div class="box-content-style service-content">
                        <h4>Regular Updates</h4>
                        <p>Lorem ipsum dolor sit amet, adipscing elitr, sed diam nonumy eirmod tempor ividunt
                            labor dolore magna.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ========================= service-section end ========================= -->

<!-- ========================= contact-section start ========================= -->
<section id="contact" class="contact-section cta-bg img-bg pt-110 pb-100"
    style="background-image: url('assets/img/bg/cta-bg.jpg');">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-5 col-lg-7">
                <div class="section-title mb-60">
                    <span class="text-white wow fadeInDown" data-wow-delay=".2s">Contact</span>
                    <h2 class="text-white wow fadeInUp" data-wow-delay=".4s">Do you have any project Right now?</h2>
                    <p class="text-white wow fadeInUp" data-wow-delay=".6s">At vero eos et accusamus et iusto odio
                        dignissimos ducimus quiblanditiis praesentium</p>
                </div>
            </div>
            <div class="col-xl-7 col-lg-5">
                <div class="contact-btn text-start text-lg-end">
                    <a href="contact.html" class="theme-btn">Contact Now</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ========================= contact-section end ========================= -->



@endsection