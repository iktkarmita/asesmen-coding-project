 @extends('layouts.produkFront')
 @section('styles')
 @endsection
 @section('content') 
   
   
    <!--====== PRODUCT PART START ======-->
    
    <section id="product" class="product-area pt-100 pb-130">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4">
                    <div class="collection-menu text-center mt-30">
                        <h4 class="collection-tilte">OUR PRODUCT</h4>
                        
                    </div> <!-- collection menu -->
                </div>
                <div class="card mb-3 mt-2" style="">
                    <div class="row g-0">
                      <div class="col-md-4 text-center">
                        <a href="{{ $Produk['produk_id'] }}">
                            <img src="{{ asset('storage/' . $Produk['image']) }}"   alt="Product"
                            height="320px">
                        </a>
                      </div>
                      <div class="col-md-8">
                        <div class="card-body">
                          <h5 class="card-title">{{ $Produk['name'] }}</h5>
                          <p class="card-text">{{ $Produk['description'] }}</p>
                          <p class="card-text">Rp.{{ $Produk['price'] }}</p>
                          <p class="card-text">Qty : {{ $Produk['persediaan'] }} Pcs</p>
                          <p class="card-text"><small class="text-muted">{{ $Produk['updated_at'] }}</small></p>
                        </div>
                      </div>
                    </div>
                  </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    
    <!--====== PRODUCT PART ENDS ======-->


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
   