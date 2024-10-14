<header class="header-section">
    <div class="header-bottom">
        <div class="container">
            <nav class="navbar navbar-expand-xl">
                <a class="site-logo site-title" href="{{ route('home.index') }}">
                    <span class="site-title-blue">{!! substr(config('app.name'), 0, 2) !!} </span><span class="site-title-black">{{ substr(config('app.name'), 2) }}</span>

                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="menu-toggle"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav main-menu me-auto">
                        <li><a href="{{ route('dashboard') }}">So funktioniert’s</a></li>
                        <li><a href="{{ route('lottery-ticket.index') }}">Meine Lottoscheine</a>
                        {{-- <li><a href="{{ route('privacy_policy') }}">Datenschutzhinweise</a> --}}
                            {{-- <li class="menu_has_children"><a href="#0">lotteries</a>
                            <ul class="sub-menu">
                                <li><a href="all-lottery-one.html">all lotteries One</a></li>
                                <li><a href="all-lottery-two.html">all lotteries Two</a></li>
                                <li><a href="all-lottery-three.html">all lotteries three</a></li>
                            </ul>
                        </li>
                        <li class="menu_has_children"><a href="#0">blog</a>
                            <ul class="sub-menu">
                                <li><a href="blog-one.html">Blog one</a></li>
                                <li><a href="blog-two.html">Blog two</a></li>
                                <li><a href="blog-three.html">Blog three</a></li>
                                <li><a href="blog-four.html">Blog four</a></li>
                                <li><a href="blog-details.html">Blog details</a></li>
                            </ul>
                        </li>
                        <li class="menu_has_children"><a href="#0">pages</a>
                            <ul class="sub-menu">
                                <li><a href="about.html">about us</a></li>
                                <li><a href="affiliate.html">affiliate</a></li>
                                <li><a href="how-to-play.html">how to play</a></li>
                                <li><a href="latest-winner.html">latest winner</a></li>
                                <li><a href="faq.html">faq</a></li>
                                <li><a href="error-404.html">ERROR-404</a></li>
                            </ul>
                        </li> --}}
                            {{-- <li><a href="contact.html">contact us</a></li> --}}
                    </ul>
                    <div class="header-join-part d-flex justify-content-center align-items-center">
                        @auth
                            <div class="px-4 d-flex gap-3 ">
                                <div class="fw-bold">
                                    <a href="{{ route('customer.profile') }}">
                                        {{ Auth::user()->name }}
                                    </a>
                                </div>
                                {{-- <div class="fw-bold">{{ Auth::user()->email }}</div> --}}
                            </div>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <a href="{{ route('logout') }}" type="button" class="cmn-btn m-0"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                    Log Out
                                </a>
                            </form>
                        @else
                            <a href="{{ route('login') }}" type="button" class="cmn-btn">Log in</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" type="button" class="cmn-btn">Register</a>
                            @endif
                        @endauth
                    </div>
                </div>
            </nav>
        </div>
    </div><!-- header-bottom end -->
</header>
