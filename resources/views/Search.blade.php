@include('layouts/header')
<body>
@include('layouts/navigation')

<div class="Search_section1">
    <span class="Search_page_title">Search Results...</span>
</div>
<div class="homeGoods_section2">
    <div class="homeGoods_section2_2_Favourites_page">
{{--        <div class="section2_item2">--}}
{{--            <img src="{{asset('')}}/images/Rectangle%205.png" alt="" class="item_img myBtn">--}}
{{--            <i onclick="myFunction(this)" class="fa fa-heart-o heart_img" aria-hidden="true"></i>--}}
{{--            <div class="sale">--}}
{{--                <img src="{{asset('')}}/images/Clock.png" alt="" class="clock">--}}
{{--                <div class="day_sale">--}}
{{--                    <div>Only 3 days</div>--}}
{{--                    <div>-30%</div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="item_name_block">--}}
{{--                <div class="item_name">--}}
{{--                    <p class="item_name1">Cursus quam</p>--}}
{{--                    <p class="item_name2">Cursus quam</p>--}}
{{--                </div>--}}
{{--                <div class="item_price">$25</div>--}}
{{--            </div>--}}
{{--        </div>--}}
    </div>
</div>
@include('layouts/category_pagination')

@include('layouts/footer')
@include('layouts/categoriesmodal')
<script src="{{asset('js/search.js')}}"></script>
</body>
</html>
