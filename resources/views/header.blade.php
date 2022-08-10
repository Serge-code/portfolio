<header>
    <div class="fh5co-loader"></div>
    <nav class="fh5co-nav" role="navigation">
        <div class="container">
            <div class="fh5co-top-logo">
                <div id="fh5co-logo"><a href="{{ route('home') }}">Shift</a></div>
            </div>
            <div class="fh5co-top-menu menu-1 text-center">
                <ul>
                    <li class="{{ request()->is('works') ? 'active' : '' }}"><a href="{{ route('works') }}">Work</a></li>
                    <li class="{{ request()->is('profile') ? 'active' : '' }}"><a href="{{ route('profile') }}">Profile</a></li>
                    <li class="has-dropdown">
                        <a href="#">Dropdown</a>
                        <ul class="dropdown">
                            <li><a href="#">Web Design</a></li>
                            <li><a href="#">eCommerce</a></li>
                            <li><a href="#">Branding</a></li>
                            <li><a href="#">API</a></li>
                        </ul>
                    </li>
                    <li class="{{ request()->is('contact') ? 'active' : '' }}"><a href="{{ route('contact') }}">Contact</a></li>
                </ul>
            </div>
            <div class="fh5co-top-social menu-1 text-right">
                <ul class="fh5co-social">
                    <li><a href="#"><i class="icon-twitter"></i></a></li>
                    <li><a href="#"><i class="icon-dribbble"></i></a></li>
                    <li><a href="#"><i class="icon-github"></i></a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>
