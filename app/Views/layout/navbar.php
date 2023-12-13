<header>
    <nav id="menu">
        <div class="logo">
            <a href="#"><img src="/img/gogreen.png" alt=""></a>
        </div>
        <input type="checkbox" name="" id="Responsive-menu">
        <label for="Responsive-menu"></label>
        <ul>
            <li><a href="#menu-nav">Home</a></li>
            <li><a href="#about-nav">About</a></li>
            <li><a href="#news-nav">News</a></li>
            <li><a href="#contact-nav">Contact</a></li>
            
            <?php if(!session()->has('usersData')) : ?>
            <li><a href="/Pages/login">Login</a></li>
            <?php else : ?>
    <!-- Jika pengguna sudah login -->
    <li class="nav-item dropdown pe-3">
        <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            
        <span class="d-none d-md-block dropdown-toggle ps-2"><?= session('usersData') ? session('usersData')['username'] : ''; ?></span>
        </a><!-- End Profile Image Icon -->

        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
                <h6>GoGreen Technology</h6>
            </li>
            <li><hr class="dropdown-divider"></li>

            <li>
                <a class="dropdown-item d-flex align-items-center" href="<?= site_url('/layout/profile') ?>">
                    <i class="bi bi-person"></i>
                    <span>My Profile</span>
                </a>
            </li>

            <li>
                <a class="dropdown-item d-flex align-items-center" href="<?= site_url('logout') ?>">
                    <i class="bi bi-box-arrow-right"></i>
                    <span>Sign Out</span>
                </a>
            </li>
        </ul>
    </li>
        <?php endif;?>
        </ul>
        
    </nav>
</header>
