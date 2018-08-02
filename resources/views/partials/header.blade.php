<nav class="navbar navbar-expand-lg navbar-dark pb_navbar pb_scrolled-light bg-dark" id="pb-navbar"
     style="height: 50px">
    <div class="container">
        <a class="navbar-brand d-xl-none d-lg-none d-md-block d-sm-block" href="/">
            <img src="images/logo/logo.png" alt="Instant Logo" class="light" style="width: 80px; height: 80px;">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#probootstrap-navbar"
                aria-controls="probootstrap-navbar" aria-expanded="false" aria-label="Toggle navigation">
            <span><i class="ion-navicon"></i></span>
        </button>
        <div class="collapse navbar-collapse justify-content-md-center" id="probootstrap-navbar">
            <ul class="navbar-nav">
                <li class="nav-item" style="margin-top: 30px; margin-bottom: 30px;"><a
                            class="nav-link text-uppercase pb_letter-spacing-2" href="#">Home</a></li>
                <li class="nav-item" style="margin-top: 30px; margin-bottom: 30px;"><a
                            class="nav-link text-uppercase pb_letter-spacing-2" href="#">About</a></li>
                <li class="nav-item dropdown text-uppercase pb_letter-spacing-2"
                    style="margin-top: 30px; margin-bottom: 30px;">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        Adopt a Pet
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="http://google.com">Google</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Submenu</a></li>
                                <li><a class="dropdown-item" href="#">Submenu0</a></li>
                                <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Submenu
                                        1</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Subsubmenu1</a></li>
                                        <li><a class="dropdown-item" href="#">Subsubmenu1</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Submenu
                                        2</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Subsubmenu2</a></li>
                                        <li><a class="dropdown-item" href="#">Subsubmenu2</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                <li class="nav-item logo-center d-xl-block d-lg-block d-md-none d-sm-none d-none">
                    <a class="nav-link text-uppercase pb_letter-spacing-2" href="/">
                        <img src="images/logo/logo.png" alt="Instant Logo" class="light"
                             style="width: 80px; height: 80px;">
                    </a>
                </li>
                <li class="nav-item" style="margin-top: 30px; margin-bottom: 30px;"><a
                            class="nav-link text-uppercase pb_letter-spacing-2" href="#">Shop Accessories</a></li>
                <li class="nav-item" style="margin-top: 30px; margin-bottom: 30px;"><a
                            class="nav-link text-uppercase pb_letter-spacing-2" href="#">Pet Spa</a></li>
                <li class="nav-item" style="margin-top: 30px; margin-bottom: 30px;"><a
                            class="nav-link text-uppercase pb_letter-spacing-2" href="#">Contact</a></li>
            </ul>
        </div>
    </div>
    <ul class="nav navbar-nav navbar-right">
        <li><a data-toggle="modal" data-target="#loginModal" href="#" style="color: #9A8D7B"><span class="glyphicon glyphicon-log-in"></span> <i class="fas fa-user-circle"></i></a></li>
    </ul>

</nav>
<style>
    .navbar-nav li:hover > ul.dropdown-menu {
        display: block;
    }

    .dropdown-submenu {
        position: relative;
    }

    .dropdown-submenu > .dropdown-menu {
        top: 0;
        left: 100%;
        margin-top: -6px;
    }

    /* rotate caret on hover */
    .dropdown-menu > li > a:hover:after {
        text-decoration: underline;
        transform: rotate(-90deg);
    }

    /* Mask for background, by default is not display */
    #mask {
        display: none;
        background: #000;
        position: fixed;
        left: 0;
        top: 0;
        z-index: 10;
        width: 100%;
        height: 100%;
        opacity: 0.8;
        z-index: 999;
    }

</style>