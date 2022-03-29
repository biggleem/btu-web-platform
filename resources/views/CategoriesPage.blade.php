@include('layouts/header')
<body>
<input type="number" id="categoryId" value="<?=$category?>" style="display: none" disabled>
@include('layouts/navigation')
<div class="homeGoods_section1">
    <img src="{{asset('images/mainImages/'.$categorypage.'.png')}}" alt="" class="face_page_pic">
    <span class="homeGoods_title"><?=$title?></span>
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
