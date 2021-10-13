@extends('template.frontend.front')

@section('content_frontend')
@include('template.frontend.section.search')

    <!-- Open Content -->
    <section class="bg-light">
      <div class="container pb-5">
          <div class="row">
              <div class="col-lg-5 mt-5">
                  <div class="card mb-3">
                      @yield('img')
                  </div>
       
              </div>
              <!-- col end -->
              <div class="col-lg-7 mt-5">
                  <div class="card">
                      <div class="card-body">
                          <h1 class="h2">Curry 8 </h1>
                          <p class="h3 py-2">$25.00</p>
                          <p class="py-2">
                              <i class="fa fa-star text-warning"></i>
                              <i class="fa fa-star text-warning"></i>
                              <i class="fa fa-star text-warning"></i>
                              <i class="fa fa-star text-warning"></i>
                              <i class="fa fa-star text-secondary"></i>
                              <span class="list-inline-item text-dark">Rating 4.8 | 36 Comments</span>
                          </p>
                          <ul class="list-inline">
                              <li class="list-inline-item">
                                  <h6>Brand:</h6>
                              </li>
                              <li class="list-inline-item">
                                  <p class="text-muted"><strong>Curry 8</strong></p>
                              </li>
                          </ul>

                          <h6>Description:</h6>
                          <p>
                            curry 8
                          </p>
                          <ul class="list-inline">
                              <li class="list-inline-item">
                                  <h6>Avaliable Color :</h6>
                              </li>
                              <li class="list-inline-item">
                                  <p class="text-muted"><strong>@yield('warna') </strong></p>
                              </li>
                          </ul>

                          <h6>Specification:</h6>
                          <ul class="list-unstyled pb-3">
                              <li>Country of indonesia</li>
                              <li>Ingredients smoscrepe</li>
                              <li>Dress/Skirt Lengt Maxi</li>
                          </ul>

                          <form action="" method="GET">
                              <input type="hidden" name="product-title" value="Activewear">
                              <div class="row">
                     
                                  <div class="col-auto">
                                      <ul class="list-inline pb-3">
                                          <li class="list-inline-item text-right">
                                              Quantity
                                              <input type="hidden" name="product-quanity" id="product-quanity"
                                                  value="1">
                                          </li>
                                          <li class="list-inline-item"><span class="btn btn-success"
                                                  id="btn-minus">-</span></li>
                                          <li class="list-inline-item"><span class="badge bg-secondary"
                                                  id="var-value">1</span></li>
                                          <li class="list-inline-item"><span class="btn btn-success"
                                                  id="btn-plus">+</span></li>
                                      </ul>
                                  </div>
                              </div>
                              <div class="row pb-3">
                                  <div class="col d-grid">
                                      <button type="submit" class="btn btn-success btn-lg" name="submit"
                                          value="buy">Buy</button>
                                  </div>
                                  <div class="col d-grid">
                                      <button type="submit" class="btn btn-success btn-lg" name="submit"
                                          value="addtocard">Add To Cart</button>
                                  </div>
                              </div>
                          </form>

                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- Close Content -->
    
@endsection