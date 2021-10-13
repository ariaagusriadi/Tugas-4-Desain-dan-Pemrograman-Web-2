<?php 
 function check ($route){
   if (Route::current()->uri == $route) {
     return 'text-primary';
   }
 }
?>


<nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
  <div class="scrollbar-inner">
    <!-- Brand -->
    <div class="sidenav-header  align-items-center">
      <a class="navbar-brand" href="javascript:void(0)">
        <img src="{{ url('public/admin') }}/assets/img/brand/blue.png" class="navbar-brand-img" alt="...">
      </a>
    </div>
    <div class="navbar-inner">
      <!-- Collapse -->
      <div class="collapse navbar-collapse" id="sidenav-collapse-main">
        <!-- Nav items -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" href="{{ url('dashboard') }}">
              <i class="ni ni-tv-2 {{ check('dashboard') }}  "></i>
              <span class="nav-link-text">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('kategori') }}">
              <i class="ni  ni-bag-17 {{ check('kategori') }}"></i>
              <span class="nav-link-text">Kategori</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('produk') }}">
              <i class="ni  ni-shop {{ check('produk') }}"></i>
              <span class="nav-link-text">Produk</span>
            </a>
          </li>

        </ul>

      </div>
    </div>
  </div>
</nav>