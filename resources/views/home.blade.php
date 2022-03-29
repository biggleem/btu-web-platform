@include('layouts/header')
<body>
@include('layouts/navigation')

<div class="section1">

    <div>
        <img src="{{asset('images/boxed-water.png')}}" alt="" class="boxed_water_img">
    </div>
    <div class="section1_textBlock">
        <span class="section1_title">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
        <p class="section1_disc">Cursus quam tortor in convallis vel dolor sed mattis.
            Blandit nec nunc, sapien suscipit in tellus. Aliquam
            tellus est dictum nibh sagittis, nulla.</p>
        @auth
            @else
        <a href="{{route('register')}}">
            <button class="sign_post_button">Sign up to post</button>
        </a>
            @endauth
    </div>
</div>
<div class="container">
    <div class="section2">
        <div class="section2_title">
            <span class="title">DOP</span>
            <span class="disc">Deals of prominence</span>
        </div>
        <div class="section2_items">

        </div>
    </div>
</div>
@include('layouts/footer')
@include('layouts/categoriesmodal')
<script src="{{asset('js/home.js')}}"></script>
</body>
</html>
