  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="/img/gogreen.png" alt="">
        <span class="d-none d-lg-block">GoGreen</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->


    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

      <?php if (session()->has('usersData')) : ?>
  <li class="nav-item dropdown pe-3">
    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
      <span class="d-none d-md-block dropdown-toggle ps-2"><?= session('usersData')['username']; ?></span>
    </a>
    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
           
           
           <hr class="dropdown-divider">

         <li>
           <a class="dropdown-item d-flex align-items-center" href="#">
             <i class="bi bi-box-arrow-right"></i>
             <span>Sign Out</span>
           </a>
         </li>

       </ul><!-- End Profile Dropdown Items -->
     </li><!-- End Profile Nav -->

   </ul>
<?php endif; ?>

</a><!-- End Profile Iamge Icon -->
          
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">
 
    <ul class="sidebar-nav" id="sidebar-nav">

     

      <li class="nav-heading">Pages</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="<?= base_url('pengguna/')?>">
          <i class="bi bi-person"></i>
          <span>Data Users</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="<?= base_url('news') ?>">
          <i class="bi bi-question-circle"></i>
          <span>News</span>
        </a>
      </li><!-- End F.A.Q Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="<?= base_url('contact') ?>">
          <i class="bi bi-envelope"></i>
          <span>Contact</span>
        </a>
      </li><!-- End Contact Page Nav -->

      
    </ul>

  </aside><!-- End Sidebar-->
