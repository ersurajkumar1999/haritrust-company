<div class="container">
    <!-- Header Wrap Start  -->
    <div class="header-wrap">

        <div class="header-logo">
            <a href="{{ route('home') }}">
                <img src="{{asset('assets/images/logo/logo.png')}}" alt="Logo">
            </a>
        </div>

        <div class="header-menu d-none d-lg-block">
            <ul class="main-menu">
                <li class="{{ request()->routeIs('home') ? 'active-menu' : '' }}">
                    <a href="{{ route('home') }}">Home</a>
                </li>
                <li class="{{ request()->routeIs('about') ? 'active-menu' : '' }}">
                    <a href="{{ route('about') }}">About Us</a>
                </li>
                <li class="{{ request()->routeIs('services') ? 'active-menu' : '' }}">
                    <a href="{{ route('services') }}">Services</a>
                </li>
                <li class="{{ request()->routeIs('contacts') ? 'active-menu' : '' }}">
                    <a href="{{ route('contacts') }}">Contact</a>
                </li>

                <!-- <li class="{{ request()->routeIs('blog.*') ? 'active-menu' : '' }}">
                    <a href="{{ route('blog.index') }}">Blogs</a>
                </li> -->
            </ul>
        </div>
    </div>
</div>
