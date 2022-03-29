@include('layouts/header')
<body>
@include('layouts/navigation')

<div class="container">
    <div class="categories_section">
        <p class="categories_title">Categories</p>
        <div class="categories_section1">
            <div class="category_item">
                <a href="{{route('homegoods')}}"><img src="{{asset('images/Homegoods_small.png')}}" alt="" class="categories_img"></a>
                <a class="category_item_title" href="{{route('homegoods')}}" >Homegoods</a>
            </div>
            <div class="category_item">
                <a href="{{route('edibles')}}"><img src="{{asset('images/Endible.png')}}" alt="" class="categories_img"></a>
                <a class="category_item_title" href="{{route('edibles')}}">Edibles</a>
            </div>
            <div class="category_item">
                <a href="{{route('faceandhair')}}"><img src="{{asset('images/Face%20and%20Hair.png')}}" alt="" class="categories_img"></a>
                <a class="category_item_title"  href="{{route('faceandhair')}}">face and hair</a>
            </div>
            <div class="category_item">
                <a href="{{route('amazonhurries')}}"><img src="{{asset('images/Homegoods_small.png')}}" alt="" class="categories_img"></a>
                <a class="category_item_title" href="{{route('amazonhurries')}}">Amazon hurries</a>
            </div>
        </div>
     <div class="section_wydtyn">
            <a href="{{route('wydtyn')}}"><img src="{{asset('images/Homegoods.png')}}" alt="" class="section_wydtyn_img"></a>
            <a class="category_item_title" href="{{route('wydtyn')}}">WYDTYN</a>
        </div>
    </div>
</div>
</div>
@include('layouts/footer')
<script src="{{asset('js/index.js')}}"></script>
</body>
</html>
