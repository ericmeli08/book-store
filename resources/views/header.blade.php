<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('img/logo.png') }}">
        <link rel="icon" sizes="64x64" type="image/png" href="{{ asset('img/bookLogo.png') }}">
        <title>Librairie - catalogue</title>
        <link href="{{ asset('css/header.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('css/footer.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('css/book_register.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('css/find_book.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('css/successfull.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('css/edit_book.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('css/boutique.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('css/voir_caddie.css') }}" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="{{ asset('css/fontawesome-free-6.5.1-web/css/all.css') }}">
    </head>
<body>
    <div id="container-{{ $page }}" class="container">
        <header>
            <div class="header-lang-tools">
                <div class="lang">
                    <a href="#">ENIT </a><span>FR | EN</span>
                </div>
                <div class="header-tools">
                    <div class="tools">
                        <img src="{{ asset('images/face.png') }}" alt="" class="facebook-icon">
                        <img src="{{ asset('images/twitter.png') }}" alt="" class="twitter-icon">
                        <img src="{{ asset('images/youtube.png') }}" alt="" class="youtube-icon">
                        <img src="{{ asset('images/insta.png') }}" alt="" class="instagram-icon">
                        <img src="{{ asset('images/in.png') }}" alt="" class="in-icon">
                        <img src="" alt="">
                        <img src="" alt="">
                        <img src="" alt="">

                    </div>
                </div>
            </div>
            <div class="nav-fixed">
                <div class="logo-part">
                    <img src="{{ asset('img/logo.png') }}" alt="logo" class="logo">
                </div>
                <nav class="menu">
                    <div class="menu-icon">
                        <img id="" src="{{ asset('images/menu-white.png') }}" alt="">
                    </div>
                    <ul class="menu-ul">

                        @if (!empty($mon_panier) && $page=="boutique")

                            <a href="{{ route('voir_caddie.index') }}" class="cart">
                                <div class="panier">
                                    <img src="{{ asset('img/cart.png') }}" alt="">
                                    <span>{{ count($mon_panier) }}</span>
                                </div>

                            </a>

                        @endif
                        <li class='menu-li'>
                            <a href='{{ route('boutique.index') }}' class="menu-link {{ $page == 'boutique' ? 'active-nav' : '' }}  "> <i>Library</i> shop</a>
                            </li>
                            <li class='menu-li'>
                            <a href='{{ route('find_book.index') }}' class='menu-link {{ $page == 'find_book' ? 'active-nav' : '' }}  '> find book</a>
                            </li>
                            <li class='menu-li'>
                            <a href='{{ route('book_register.index') }}' class='menu-link {{ $page == 'book_register' ? 'active-nav' : '' }}  '> book register</a>
                            </li>
                            <li class='menu-li'>
                            <a href='' class='menu-link  '> sign in</a>
                            </li>
                            <li class='menu-li'>
                            <a href='' class='menu-link  '> sign up</a>
                            </li>
                            <li class='menu-li'>
                            <div id='log-out'  class='menu-link  '> <img src="{{ asset('img/icon/contacts.png') }}" alt=''></div>
                            </li>

                        <div class="user" id="user">
                            <p>MELI ERIC</p>
                            <p>fouegangmeli@gmail.com</p>
                            <a href="" >log out</a>
                        </div>
                    </ul>
                </nav>
            </div>
        </header>
