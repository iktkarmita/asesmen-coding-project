 @extends('layouts.frontend')
 @section('styles')
 @endsection
 @section('content')
     <!--====== SLIDER PART START ======-->

     <section id="home" class="slider-area pt-100">
         <div class="container-fluid position-relative">
             <div class="slider-active">
                 <div class="single-slider">
                     <div class="">
                         <div class="row no-gutters align-items-center ">
                             <div class="col-lg-4 col-md-5">
                                 <div class="slider-product-image d-none d-md-block">
                                     <img src="assets/images/slider/kemeja1.jpg" alt="Slider">
                                     <div class="slider-discount-tag">
                                         <p>-20% <br> OFF</p>
                                     </div>
                                 </div> <!-- slider product image -->
                             </div>
                             <div class="col-lg-8 col-md-7"
                                 style="background: linear-gradient(30deg,hsla(0,0%,100%,.1),rgba(71,144,240,.507))">
                                 <div class="slider-product-content">
                                     <h1 class="slider-title mb-10" data-animation="fadeInUp" data-delay="0.3s">
                                         <span>short</span> <span> sleeves</span> <span>shirt</span></h1>
                                     <p class="mb-25" data-animation="fadeInUp" data-delay="0.9s">This shirt is
                                         made in Indonesia<br> and 50% discount let's buy.</p>
                                     <a class="main-btn" href="{{ url('/home') }}" data-animation="fadeInUp"
                                         data-delay="1.5s"
                                         style="background: linear-gradient(30deg,hsla(0,0%,100%,.1),rgba(71,000,240,.507))">Explore
                                         More <i class="lni-chevron-right"></i></a>
                                 </div> <!-- slider product content -->
                             </div>
                         </div> <!-- row -->
                     </div> <!-- container -->
                 </div> <!-- single slider -->

                 <div class="single-slider">
                     <div class="">
                         <div class="row no-gutters align-items-center">
                             <div class="col-lg-4 col-md-5">
                                 <div class="slider-product-image d-none d-md-block">
                                     <img src="assets/images/slider/kemeja30.jpg" alt="Slider">
                                     <div class="slider-discount-tag">
                                         <p>-20% <br> OFF</p>
                                     </div>
                                 </div> <!-- slider product image -->
                             </div>
                             <div class="col-lg-8 col-md-7"
                                 style="background: linear-gradient(30deg,hsla(0,0%,100%,.1),rgba(71,144,240,.507))">
                                 <div class="slider-product-content">
                                     <h1 class="slider-title mb-10" data-animation="fadeInUp" data-delay="0.3s">
                                         <span>long</span> <span> sleeves</span> <span>shirt</span></h1>
                                     <p class="mb-25" data-animation="fadeInUp" data-delay="0.9s">This shirt is
                                         made in Indonesia<br> and 20% discount let's buy.</p>
                                     <a class="main-btn" href="{{ url('/home') }}" data-animation="fadeInUp"
                                         data-delay="1.5s"
                                         style="background: linear-gradient(30deg,hsla(0,0%,100%,.1),rgba(71,000,240,.507))">Explore
                                         More <i class="lni-chevron-right"></i></a>
                                 </div> <!-- slider product content -->
                             </div>
                         </div> <!-- row -->
                     </div> <!-- container -->
                 </div> <!-- single slider -->

                 <div class="single-slider">
                     <div class="">
                         <div class="row no-gutters align-items-center">
                             <div class="col-lg-4 col-md-5">
                                 <div class="slider-product-image d-none d-md-block">
                                     <img src="assets/images/slider/kemeja2.jpg" alt="Slider">
                                     <div class="slider-discount-tag">
                                         <p>FREE<br>SHIPPING</p>
                                     </div>
                                 </div> <!-- slider product image -->
                             </div>
                             <div class="col-lg-8 col-md-7"
                                 style="background: linear-gradient(30deg,hsla(0,0%,100%,.1),rgba(71,144,240,.507))">
                                 <div class="slider-product-content">
                                     <h1 class="slider-title mb-10" data-animation="fadeInUp" data-delay="0.3s">
                                         <span>short</span> <span> sleeves</span> <span>shirt</span></h1>
                                     <p class="mb-25" data-animation="fadeInUp" data-delay="0.9s">This shirt is
                                         made in Indonesia<br> and free shipping let's buy.</p>
                                     <a class="main-btn text-light" href="{{ url('/home') }}" data-animation="fadeInUp"
                                         data-delay="1.5s"
                                         style="background: linear-gradient(30deg,hsla(0,0%,100%,.1),rgba(71,000,240,.507))">Explore
                                         More <i class="lni-chevron-right"></i></a>
                                 </div> <!-- slider product content -->
                             </div>
                         </div> <!-- row -->
                     </div> <!-- container -->
                 </div> <!-- single slider -->
             </div> <!-- slider active -->
             <hr>
         </div> <!-- container fluid -->
     </section>

     <!--====== SLIDER PART ENDS ======-->



     <!--====== PRODUCT PART START ======-->

     <section id="product" class="product-area pt-100 pb-130">
         <div class="container">
             <div class="row">
                 <div class="col-lg-3 col-md-4">
                     <div class="collection-menu text-center mt-30">
                         <h4 class="collection-tilte">OUR PRODUCT</h4>
                         <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                             <a class="active" id="shirt-tab" data-toggle="pill" href="#shirt" role="tab"
                                 aria-controls="shirt" aria-selected="true">MEN'S CLOATING</a>



                         </div> <!-- nav -->
                     </div> <!-- collection menu -->
                 </div>
                 <div class="col-lg-9 col-md-8">
                     <div class="tab-content" id="v-pills-tabContent">
                         <div class="tab-pane fade show active" id="shirt" role="tabpanel" aria-labelledby="shirt-tab">
                             <div class="product-items mt-30">
                                 <div class="row product-items-active">
                                     @if (isset($Produk))
                                         @foreach ($Produk as $p)
                                             <div class="col-md-4">
                                                 <div class="single-product-items">
                                                     <div class="product-item-image">
                                                         <a href="{{ $p->id }}">
                                                             <img src="{{ asset('storage/' . $p->image) }}" alt="Product"
                                                                 height="320px">
                                                         </a>

                                                     </div>
                                                     <div class="product-item-content text-center mt-30">
                                                         <h5 class="product-title"><a href="#">{{ $p->nama }}</a></h5>
                                                         <ul class="rating">
                                                             <li><i class="lni-star-filled"></i></li>
                                                             <li><i class="lni-star-filled"></i></li>
                                                             <li><i class="lni-star-filled"></i></li>
                                                             <li><i class="lni-star-filled"></i></li>
                                                         </ul>
                                                         <span class="regular-price">Rp.{{ $p->harga }}</span>
                                                     </div>
                                                 </div> <!-- single product items -->
                                             </div>
                                         @endforeach
                                     @endif
                                 </div> <!-- row -->
                             </div> <!-- product items -->
                         </div> <!-- tab pane -->

                         <div class="tab-pane fade" id="v-pills-drink" role="tabpanel" aria-labelledby="v-pills-drink-tab">
                             <div class="product-items mt-30">
                                 <div class="row product-items-active">
                                     @if (isset($Produk))
                                         @foreach ($Produk as $p)
                                             <div class="col-md-4">
                                                 <div class="single-product-items">
                                                     <div class="product-item-image">
                                                         <a href="{{ $p->id }}">
                                                             <img src="{{ asset('storage/' . $p->image) }}" alt="Product"
                                                                 height="320px">
                                                         </a>
                                                     </div>
                                                     <div class="product-item-content text-center mt-30">
                                                         <h5 class="product-title"><a href="#"></a>{{ $p->nama }}</h5>
                                                         <ul class="rating">
                                                             <li><i class="lni-star-filled"></i></li>
                                                             <li><i class="lni-star-filled"></i></li>
                                                             <li><i class="lni-star-filled"></i></li>
                                                             <li><i class="lni-star-filled"></i></li>
                                                         </ul>
                                                         <span class="regular-price">Rp.{{ $p->harga }}</span>
                                                     </div>
                                                 </div> <!-- single product items -->
                                             </div>
                                         @endforeach
                                     @endif
                                 </div>
                             </div>
                         </div> <!-- tab pane -->
                     </div>
                 </div>
             </div> <!-- row -->
         </div> <!-- container -->
     </section>

     <!--====== PRODUCT PART ENDS ======-->


     <!--====== TEAM PART START ======-->

     <section id="team" class="pt-125 pb-130"
         style="background: linear-gradient(30deg,hsla(0,0%,100%,.1),rgba(71,144,240,.507))">
         <div class="container">
             <div class="row justify-content-center">
                 <div class="col-lg-6">
                     <div class="section-title text-center pb-25">
                         <h3 class="title mb-15">Web Developer</h3>
                     </div>
                 </div>
             </div> <!-- row -->
             <div class="row justify-content-center">
                 <div class="col-lg-3 col-md-6 col-sm-8">
                     <div class="single-temp text-center mt-30">
                         <div class="team-image">
                             <img src="assets/images/team/img.jpeg" alt="Team">
                         </div>
                         <div class="team-content mt-30">
                             <h4 class="title mb-10"><a href="#">I KETUT KARMITA</a></h4>
                             <span>FOUNDER</span>
                             <ul class="social mt-15">
                                 <li><a href="#"><i class="lni-facebook-filled"></i></a></li>
                                 <li><a href="#"><i class="lni-twitter-original"></i></a></li>
                                 <li><a href="#"><i class="lni-instagram"></i></a></li>
                             </ul>
                         </div>
                     </div> <!-- single temp -->
                 </div>
             </div> <!-- row -->
         </div> <!-- container -->
     </section>

     <!--====== TEAM PART ENDS ======-->


     <!--====== FOOTER PART START ======-->

     <section id="footer" class="">
         <div class="container">
             <div class="footer-widget pt-75 pb-120">
                 <div class="row">
                     <div class="col-lg-3 col-md-5 col-sm-7">
                         <div class="footer-logo mt-40">
                             <h5 class="f-title">WebKarmite</h5>
                             <p class="mt-10">This website is an online shopping website</p>
                             <ul class="footer-social mt-25">
                                 <li><a href="#"><i class="lni-facebook-filled"></i></a></li>
                                 <li><a href="#"><i class="lni-twitter-original"></i></a></li>
                                 <li><a href="#"><i class="lni-instagram"></i></a></li>
                             </ul>
                         </div> <!-- footer logo -->
                     </div>

                     <div class="col-lg-4 col-md-5 col-sm-7">
                         <div class="footer-info mt-50">
                             <h5 class="f-title">Contact Info</h5>
                             <ul>
                                 <li>
                                     <div class="single-footer-info mt-20">
                                         <span>Phone :</span>
                                         <div class="footer-info-content">
                                             <p>+6287887313420</p>
                                         </div>
                                     </div> <!-- single footer info -->
                                 </li>
                                 <li>
                                     <div class="single-footer-info mt-20">
                                         <span>Email :</span>
                                         <div class="footer-info-content">
                                             <p>h.21101033.karmita@gmail.com</p>
                                         </div>
                                     </div> <!-- single footer info -->
                                 </li>
                                 <li>
                                     <div class="single-footer-info mt-20">
                                         <span>Address :</span>
                                         <div class="footer-info-content">
                                             <p>Denpasar Bali, Indonesian</p>
                                         </div>
                                     </div> <!-- single footer info -->
                                 </li>
                             </ul>
                         </div> <!-- footer link -->
                     </div>
                 </div> <!-- row -->
             </div> <!-- footer widget -->
             <div class="footer-copyright pt-15 pb-15">
                 <div class="row">
                     <div class="col-lg-12">
                         <div class="copyright text-center">
                             <p>KarmiteShop&copy;<a rel="">2022</a></p>
                         </div> <!-- copyright -->
                     </div>
                 </div> <!-- row -->
             </div> <!--  footer copyright -->
         </div> <!-- container -->
     </section>

     <!--====== FOOTER PART ENDS ======-->

     <!--====== BACK TO TOP PART START ======-->

     <a href="#" class="back-to-top"><i class="lni-chevron-up"></i></a>

     <!--====== BACK TO TOP PART ENDS ======-->

 @endsection

 @section('scripts')
 @endsection
