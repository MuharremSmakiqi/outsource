<style>
   header .item {
        height: 50vh;
        position: relative;
    }

    header .item img {
        width: 100%;
        height: 100%;
        object-fit: cover;

    }

    header .item .cover {
      
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;

        display: flex;
        align-items: center;
    }

    header .item .cover .header-content {
        position: relative;
        padding: 36px;
        overflow: hidden;
    }

    header .item .cover .header-content .line {
        content: "";
        display: inline-block;
        width: 100%;
        height: 100%;
        left: 0;
        top: 0;
        position: absolute;
        border: 1px solid #ffffff;
        border-left: 1px solid #ffffff;
        border-bottom: 1px solid #ffffff; 
        clip-path: polygon(0 0, 95% 0, 95% 100%, 0 100%);
        background: rgba(34, 109, 163, 0.3);
    }

    header .item .cover .header-content h2 {
        font-weight: 300;
        font-size: 30px;
        color: #fff;
    }

    header .item .cover .header-content h6 {
        font-size: 35px;
        font-weight: 500;
        margin: 3px 0 0px;
        word-spacing: 3px;
        color: #fff;
    } 
    header .item .cover .header-content h4 {
        font-size: 20px;
        font-weight: 300;
        line-height: 16px;
        color: #fff;
    }

    header .owl-item.active h6   {
        -webkit-animation-duration: 1s;
        animation-duration: 1s;
        -webkit-animation-fill-mode: both;
        animation-fill-mode: both;
        animation-name: fadeInDown;
        animation-delay: 0.3s;
        color: #fff;
        font-size: 45px !important;
    }
    .recruSlider{
        -webkit-animation-duration: 1s;
        animation-duration: 1s;
        -webkit-animation-fill-mode: both;
        animation-fill-mode: both;
        animation-name: fadeInDown;
        animation-delay: 0.3s;
        color: #fff;
        font-size: 42px !important;
        font-weight: bold;
    }

    header .owl-item.active h2 {
        -webkit-animation-duration: 1s;
        animation-duration: 1s;
        -webkit-animation-fill-mode: both;
        animation-fill-mode: both;
        animation-name: fadeInDown;
        animation-delay: 0.3s;
        font-size: 26px !important;
    }

    header .owl-item.active h4 {
        -webkit-animation-duration: 1s;
        animation-duration: 1s;
        -webkit-animation-fill-mode: both;
        animation-fill-mode: both;
        animation-name: fadeInUp;
        animation-delay: 0.3s;
    }

    header .owl-item.active .line {
        -webkit-animation-duration: 1s;
        animation-duration: 1s;
        -webkit-animation-fill-mode: both;
        animation-fill-mode: both;
        animation-name: fadeInLeft;
        animation-delay: 0.3s;
    }

    header .owl-nav .owl-prev {
        position: absolute;
        left: 15px;
        top: 43%;
        opacity: 0;
        -webkit-transition: all 0.4s ease-out;
        transition: all 0.4s ease-out;
        background: rgba(0, 0, 0, 0.5) !important;
        width: 40px;
        cursor: pointer;
        height: 40px;
        position: absolute;
        display: block;
        z-index: 1000;
        border-radius: 0;
    }

    header .owl-nav .owl-prev span {
        font-size: 1.6875rem;
        color: #fff;
    }

    header .owl-nav .owl-prev:focus {
        outline: 0;
    }

    header .owl-nav .owl-prev:hover {
        background: #000 !important;
    }

    header .owl-nav .owl-next {
        position: absolute;
        right: 15px;
        top: 43%;
        opacity: 0;
        -webkit-transition: all 0.4s ease-out;
        transition: all 0.4s ease-out;
        background: rgba(0, 0, 0, 0.5) !important;
        width: 40px;
        cursor: pointer;
        height: 40px;
        position: absolute;
        display: block;
        z-index: 1000;
        border-radius: 0;
    }

    header .owl-nav .owl-next span {
        font-size: 1.6875rem;
        color: #fff;
    }

    header .owl-nav .owl-next:focus {
        outline: 0;
    }

    header .owl-nav .owl-next:hover {
        background: #000 !important;
    }

    header:hover .owl-prev {
        left: 0px;
        opacity: 1;
    }

    header:hover .owl-next {
        right: 0px;
        opacity: 1;
    }

    .item{
    -webkit-backface-visibility: hidden !important;
    -webkit-transform: translateZ(0) scale(1.0, 1.0) !important;
    }
</style>
 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"> 
<script src="//cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"></script>
 
<header>
    <div class="owl-carousel owl-theme">
        <div class="item img-fluid">
            <img src="assets/img/s1.jpg" alt="GSI">
            <div class="cover">
                <div class="container">
                    <div class="header-content" > 
                        <div class="line"></div>
                        <h6>BENEFITS</h6>
                        <h2 class="" style="color:#ffffff"><b> Significant cost savings, managed HR, dedicated workforce and employment flexibility</b>
                        </h2>
                    </div>
                </div>
            </div>

        </div>
        <div class="item img-fluid">
            <img src="assets/img/s2.jpg" alt="GSI">
            <div class="cover">
                <div class="container">
                    <div class="header-content">
                        <div class="line animated bounceInLeft "></div> 
                        <p class="recruSlider">RECRUITMENT</p>
                        <h2 class="lead"><b>We will source people that match your requirements</b></h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="item img-fluid">
            <img src="assets/img/s3.jpg" alt="GSI">
            <div class="cover">
                <div class="container">
                    <div class="header-content">
                        <div class="line animated bounceInLeft "></div> 
                        <h6>INTERVIEWS</h6>
                        <h2 class="lead"><b>Interviews arranged at your convenience</b></h2>
                    </div>
                </div>
            </div>
        </div> 
    </div>
</header>
<script>
    $('.owl-carousel').owlCarousel({ 
        animateIn: 'fadeIn',
    loop:true,
    margin:0,
    dots:false,
    nav:true,
    mouseDrag:true,
    autoplay:true,
    autoplayTimeout:6000, 
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        600:{
            items:1
        }
    }
});
</script>
