<header class="oleez-header">
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="/"><img src="{{ asset('assets/images/Logo_2.svg') }}" alt="Oleez"></a>
        <ul class="nav nav-actions d-lg-none ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="#!" data-toggle="searchModal">
                    <img src="{{ asset('assets/images/search.svg') }}" alt="search">
                </a>
            </li>
            <li class="nav-item nav-item-cart">
                <a class="nav-link" href="#!">
                    <span class="cart-item-count">0</span>
                    <img src="{{ asset('assets/images/shopping-cart.svg') }}" alt="cart">
                </a>
            </li>
            <li class="nav-item dropdown d-none d-sm-block">
                <a class="nav-link dropdown-toggle" href="#!" id="languageDropdown" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">ENG</a>
                <div class="dropdown-menu" aria-labelledby="languageDropdown">
                    <a class="dropdown-item" href="#!">ARB</a>
                    <a class="dropdown-item" href="#!">FRE</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#!" data-toggle="offCanvasMenu">
                    <img src="{{ asset('assets/images/social icon@2x.svg') }}" alt="social-nav-toggle">
                </a>
            </li>
        </ul>

        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#oleezMainNav"
            aria-controls="oleezMainNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="oleezMainNav">
            <ul class="navbar-nav mx-auto mt-2 mt-lg-0">
                <li class="nav-item {{ $active === 'home' ? 'active' : '' }}">
                    <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item {{ $active === 'about' ? 'active' : '' }}">
                    <a class="nav-link" href="/about">About</a>
                </li>
                <li class="nav-item {{ $active === 'blog' ? 'active' : '' }}">
                    <a class="nav-link " href="/blog">Blog</a>
                </li>
                <li class="nav-item {{ $active === 'categories' ? 'active' : '' }}">
                    <a class="nav-link " href="/categories">Category</a>
                </li>
            </ul>




            <ul class="navbar-nav d-none d-lg-flex">
                <li class="nav-item">
                    <a class="nav-link nav-link-btn" href="#!" data-toggle="searchModal">
                        <img src="{{ asset('assets/images/search.svg') }}" alt="search">
                    </a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle " href="#!" id="languageDropdown" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">ENG</a>
                    <div class="dropdown-menu" aria-labelledby="languageDropdown">
                        <a class="dropdown-item" href="#!">ARB</a>
                        <a class="dropdown-item" href="#!">FRE</a>
                    </div>
                </li>

                @auth
                <li class="nav-item dropdown d-none d-sm-block">
                    <a class="nav-link" href="#!" id="languageDropdown" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">Welcome Back, {{ auth()->user()->name }}</a>
                    <div class="dropdown-menu" aria-labelledby="languageDropdown">
                        <a class="dropdown-item" href="/dashboard">My Dashboard</a>

                        <form action="/logout" method="post">
                            @csrf
                            <button type="submit" class="dropdown-item">Logout</button>
                        </form>

                    </div>
                </li>
                @else
                    <li class="nav-item">
                        <a href="/login" class="nav-link {{ $active === 'login' ? 'active' : '' }}">
                            <i class="mdi mdi-tooltip-image:"><img src="{{ asset('assets/icons/box-arrow-left.svg') }}"
                                    class="nav-img small" alt=""></i></a>
                    </li>
                @endauth
                <li class="nav-item ml-5">
                    <a class="nav-link pr-0 nav-link-btn" href="#!" data-toggle="offCanvasMenu">
                        <img src="{{ asset('assets/images/social icon@2x.svg') }}" alt="social-nav-toggle">
                    </a>
                </li>

            </ul>


        </div>
    </nav>
</header>
