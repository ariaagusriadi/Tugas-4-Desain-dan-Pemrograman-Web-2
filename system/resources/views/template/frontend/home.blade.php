@extends('template.frontend.front')
 @section('content_frontend')
     <!-- Modal -->
 @include('template.frontend.section.search')

 <!-- Start Banner Hero -->
 <div id="template-mo-zay-hero-carousel" class="carousel slide" data-bs-ride="carousel">
    
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="container">
                <div class="row p-5">
                    <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                        <img class="img-fluid" src=" {{ url ('public/src_frontend') }}/assets/img/banner_img_01.jpg"
                            alt="">
                    </div>
                    <div class="col-lg-6 mb-0 d-flex align-items-center">
                        <div class="text-align-left align-self-center">
                            <h1 class="h1 text-success"><b>Curyy </b> store</h1>
                          
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>
 <!-- End Banner Hero -->

     <!-- preview -->
     <section class="container py-5">
        <div class="row text-center pt-3">
            <div class="col-lg-6 m-auto">
                <h1 class="h1">Categories of The Month</h1>
                <p>
                    best selling product
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-4 p-5 mt-3">
                <a href="#"><img src="{{ url('public/src_frontend') }}/assets/img/curry1.jpg"
                        class="rounded-circle img-fluid border"></a>
            </div>
            <div class="col-12 col-md-4 p-5 mt-3">
                <a href="#"><img src="{{ url('public/src_frontend') }}/assets/img/curry2.jpg"
                        class="rounded-circle img-fluid border"></a>
            </div>
            <div class="col-12 col-md-4 p-5 mt-3">
                <a href="#"><img src="{{ url('public/src_frontend') }}/assets/img/curry3.jpg"
                        class="rounded-circle img-fluid border"></a>
            </div>
        </div>
      </section>
     <!-- End  preview  -->
 @endsection
 