<!-- resources/views/components/navigation.blade.php -->
<header>
    <div class="header-area">
        <div class="header-top_area d-none d-lg-block">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-4 col-lg-4">
                        <div class="logo">
                            <a href="{{ route('home') }}">
                                <img src="img/logo.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-8 col-md-8">
                        <div class="header_right d-flex align-items-center">
                            <div class="short_contact_list">
                                <ul>
                                    <li><a href="#"> <i class="fa fa-envelope"></i> infodddd@docmed.com</a></li>
                                    <li><a href="#"> <i class="fa fa-phone"></i> 1601-609 6780</a></li>
                                </ul>
                            </div>


<div class="book_btn d-none d-lg-block">
    @if(auth()->check())
        <!-- عرض اسم المستخدم وتوجيهه إلى صفحة الملف الشخصي -->
        <a class="boxed-btn3-line" href="{{ route('frontend.profile.profile') }}">{{ auth()->user()->name }}</a>
        
        <!-- زر تسجيل الخروج -->
        <form action="{{ route('logout') }}" method="POST" style="display: inline;">
            @csrf
            <button type="submit" class="boxed-btn3-line">Logout</button>
        </form>
    @else
        <!-- عرض زر تسجيل الدخول في حالة عدم وجود تسجيل دخول -->
        <a class="boxed-btn3-line" href="{{ route('login') }}">Login</a>
    @endif
</div>


                

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="sticky-header" class="main-header-area">
            <div class="container">
                <div class="header_bottom_border">
                    <div class="row align-items-center">
                        <div class="col-12 d-block d-lg-none">
                            <div class="logo">
                                <a href="{{ route('home') }}">
                                    <img src="img/logo.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-9">
                            <div class="main-menu d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a href="{{ route('home') }}">Home</a></li>
                                        <li><a href="{{ route('service') }}">Services</a></li>
                                        <li><a href="{{ route('about') }}">About</a></li>
                                        <li>
                                            <a href="#">Pages <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="{{ route('service-details') }}">Service Details</a></li>
                                                <li><a href="{{ route('elements') }}">Elements</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">Blog <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="{{ route('blog') }}">Blog</a></li>
                                                <li><a href="{{ route('single-blog') }}">Single Blog</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{{ route('contact') }}">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
