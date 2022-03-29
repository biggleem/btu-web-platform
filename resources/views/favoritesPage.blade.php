@include('layouts/header')
<body>
@include('layouts/navigation')

<div class="homeGoods_section1">
    <img src="{{asset('images/Homegoods.png')}}" alt="">
    <span class="homeGoods_title">Favorites</span>
</div>
<div class="homeGoods_section2">
    <div class="homeGoods_section2_2_Favourites_page">
    </div>
</div>
<div class="pagination_block">
    <div class="pagination">
        <a href="#">&laquo;</a>
        <a href="#">1</a>
        <a href="#">2</a>
        <a href="#">3</a>
        <a href="#">&raquo;</a>
    </div>
</div>
@include('layouts/footer')
@include('layouts/categoriesmodal')
<script src="{{asset('js/favorites.js')}}"></script>
</body>
</html>
