@include('layouts/header')
<body>
<input type="number" id="categoryId" value="1" style="display: none" disabled>
@include('layouts/navigation')
<div class="homeGoods_section1">
    <img src="{{asset('images/Homegoods.png')}}" alt="">
    <span class="homeGoods_title">Homegoods</span>
</div>
<div class="homeGoods_section2">
    @include('layouts/filters')
    <div class="homeGoods_section2_2">
        <div class="homeGoods_section2_2_block1">

        </div>
       @include('layouts/category_pagination')
    </div>

</div>

@include('layouts/footer')
@include('layouts/categoriesmodal')
<script src="{{asset('js/categories.js')}}"></script>
</body>
</html>
