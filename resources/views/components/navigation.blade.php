<!-- resources/views/components/navigation.blade.php -->
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
