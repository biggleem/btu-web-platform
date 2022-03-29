<div class="header">
    <nav class="header_container">
        <a href="{{route('home')}}">
            <img src="{{asset('images/logo.png')}}" alt="" class="logo">
        </a>
        <div class="nav_links">
{{--            <a href="../../shop/Pages/HomeGoods.html" class="nav_page">Homegoods</a>--}}
{{--            <a href="../Pages/FaceandHairPage.html" class="nav_page">Face and Hair</a>--}}
{{--            <a href="../Pages/EdiblePage.html" class="nav_page">Edibles</a>--}}
{{--            <a href="../Pages/AmazonHurriesPage.html" class="nav_page">Amazon hurries</a>--}}
{{--            <a href="../../shop/Pages/WYDTYNPage.html" class="nav_page">WYDTYN</a>--}}
        </div>
        <div>
            <div class="search_box">
                <div class="search">
                    <div class="search_input_block">
                        {{--<a href="../Pages/Search.html"> --}}<input type="text" placeholder="Search . . ."
                                                              class="search_input">{{--</a>--}}
                    </div>
                </div>
            </div>
        </div>
        <div class="dropdown">
            <button class="user_img dropbtn">
                <img src="{{asset('images/User.png')}}" alt="">
            </button>
            <div class="dropdown-content myDropdown">
                @auth
                    <a href="{{route('addnewproductPage')}}"><button class="dropdown_button_signup">Add new post</button></a>
                    <div class="dropdown_login">
                        <a href="{{route('profile')}}" class="dropdown_login_profile">My Profile</a>
                        <a href="{{route('favoritesPage')}}" class="dropdown_login_favourites">Favorites</a>
                        <a href="{{route('logout')}}" class="dropdown_login_logout">Log Out</a>
                    </div>
                    @else
                    <a href="{{route('loginPage')}}">
                        <button class="dropdown_button_login">Log in</button>
                    </a>
                    <a href="{{route('registerPage')}}">
                        <button class="dropdown_button_signup">Sign up</button>
                    </a>

                    @endauth
            </div>
        </div>
    </nav>
</div>
<div class="header-mobile">
    <nav class="header_container_mobile">
        <div class="logo_navbar">
            <a href="{{route('home')}}">
                <img src="{{asset('images/logo.png')}}" alt="" class="logo">
            </a>
            <div class="header_navbar_mobile">
                <div class="navbar dropbtn"> &#9776;</div>
                <div class="dropdown-content_mobile myDropdown">
                    <div class="nav_links_mobile">
{{--                        <a href="../../shop/Pages/HomeGoods.html" class="nav_page_mobile">Homegoods</a>--}}
{{--                        <a href="../Pages/FaceandHairPage.html" class="nav_page_mobile">Face and Hair</a>--}}
{{--                        <a href="../Pages/EdiblePage.html" class="nav_page_mobile">Edibles</a>--}}
{{--                        <a href="../Pages/AmazonHurriesPage.html" class="nav_page_mobile ">Amazon hurries</a>--}}
{{--                        <a href="../Pages/WYDTYNPage.html" class="nav_page_mobile">WYDTYN</a>--}}
                    </div>
                </div>
            </div>
        </div>
        <div class="search_user">
            <div>
                <div class="search_box">
                    <div class="search">
                        <div class="search_input_block">
                            <a href="../../shop/Pages/Search.html"><input type="text" placeholder="Search . . ."
                                                                          class="search_input"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="dropdown">
                <button class="user_img dropbtn">
                    <img src="{{asset('images/User.png')}}" alt="">
                </button>
                <div class="dropdown-content myDropdown">
                    @auth
                        <a href="{{route('addnewproductPage')}}"><button class="dropdown_button_signup">Add new post</button></a>
                        <div class="dropdown_login">
                            <a href="{{route('profile')}}" class="dropdown_login_profile">My Profile</a>
                            <a href="{{route('favoritesPage')}}" class="dropdown_login_favourites">Favorites</a>
                            <a href="{{route('logout')}}" class="dropdown_login_logout">Log Out</a>
                        </div>
                    @else
                        <a href="{{route('loginPage')}}">
                            <button class="dropdown_button_login">Log in</button>
                        </a>
                        <a href="{{route('registerPage')}}">
                            <button class="dropdown_button_signup">Sign up</button>
                        </a>

                    @endauth
                </div>
            </div>
        </div>
    </nav>
</div>
<script src="{{asset('js/navigation.js')}}"></script>
