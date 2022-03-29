@include('layouts/adminhead')
<body class="body_admin_dashboard">
@include('layouts/adminheader')
@include('layouts/adminsidebar')

<div class="container_add_category">
    <button href=" " class="set_deal_button myBtn_4">Set deal to BTUBTU ?</button>
</div>
<div class="admin_my_products_page_container">
    <div class="admin_my_products_page_container2">
        <div class="section2_item2">
            <div class="admin_panel_item_add">
                <img src="{{asset('images')}}/plus_admin_panel.png" alt="" class="item_img_plus_admin myBtn_4">
            </div>
        </div>
{{--        <div class="section2_item1 ">--}}
{{--            <img src="{{asset('images')}}/Rectangle%205.png" alt="" class="item_img">--}}
{{--            <img src="{{asset('images')}}/PencilLine.png" alt="" class="heart_img myBtn_4">--}}
{{--            <div class="item_name_block">--}}
{{--                <div class="item_name">--}}
{{--                    <p class="item_name1">Cursus quam</p>--}}
{{--                    <p class="item_name2">Cursus quam</p>--}}
{{--                </div>--}}
{{--                <div class="item_price">$25</div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="section2_item2">--}}
{{--            <img src="{{asset('images')}}/Rectangle%205.png" alt="" class="item_img ">--}}
{{--            <img src="{{asset('images')}}/PencilLine.png" alt="" class="heart_img myBtn_4">--}}
{{--            <div class="sale">--}}
{{--                <img src="{{asset('images')}}/Clock.png" alt="" class="clock">--}}
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
{{--        <div class="section2_item2">--}}
{{--            <img src="{{asset('images')}}/Rectangle%205%20(2).png" alt="" class="item_img ">--}}
{{--            <img src="{{asset('images')}}/PencilLine.png" alt="" class="heart_img myBtn_4">--}}
{{--            <div class="sale">--}}
{{--                <img src="{{asset('images')}}/Clock.png" alt="" class="clock">--}}
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
{{--        <div class="section2_item1">--}}
{{--            <img src="{{asset('images')}}/Rectangle%205%20(2).png" alt="" class="item_img ">--}}
{{--            <img src="{{asset('images')}}/PencilLine.png" alt="" class="heart_img myBtn_4">--}}
{{--            <div class="item_name_block">--}}
{{--                <div class="item_name">--}}
{{--                    <p class="item_name1">Cursus quam</p>--}}
{{--                    <p class="item_name2">Cursus quam</p>--}}
{{--                </div>--}}
{{--                <div class="item_price">$25</div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="section2_item1">--}}
{{--            <img src="{{asset('images')}}/Rectangle%205%20(2).png" alt="" class="item_img ">--}}
{{--            <img src="{{asset('images')}}/PencilLine.png" alt="" class="heart_img myBtn_4">--}}
{{--            <div class="item_name_block">--}}
{{--                <div class="item_name">--}}
{{--                    <p class="item_name1">Cursus quam</p>--}}
{{--                    <p class="item_name2">Cursus quam</p>--}}
{{--                </div>--}}
{{--                <div class="item_price">$25</div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="section2_item1">--}}
{{--            <img src="{{asset('images')}}/Rectangle%205%20(2).png" alt="" class="item_img">--}}
{{--            <img src="{{asset('images')}}/PencilLine.png" alt="" class="heart_img myBtn_4">--}}
{{--            <div class="item_name_block">--}}
{{--                <div class="item_name">--}}
{{--                    <p class="item_name1">Cursus quam</p>--}}
{{--                    <p class="item_name2">Cursus quam</p>--}}
{{--                </div>--}}
{{--                <div class="item_price">$25</div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="section2_item1">--}}
{{--            <img src="{{asset('images')}}/Rectangle%205%20(2).png" alt="" class="item_img">--}}
{{--            <img src="{{asset('images')}}/PencilLine.png" alt="" class="heart_img myBtn_4">--}}
{{--            <div class="item_name_block">--}}
{{--                <div class="item_name">--}}
{{--                    <p class="item_name1">Cursus quam</p>--}}
{{--                    <p class="item_name2">Cursus quam</p>--}}
{{--                </div>--}}
{{--                <div class="item_price">$25</div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="section2_item2 ">--}}
{{--            <img src="{{asset('images')}}/Rectangle%205%20(2).png" alt="" class="item_img ">--}}
{{--            <img src="{{asset('images')}}/PencilLine.png" alt="" class="heart_img myBtn_4">--}}
{{--            <div class="sale">--}}
{{--                <img src="{{asset('images')}}/Clock.png" alt="" class="clock">--}}
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
{{--    <div class="pagination_block">--}}
{{--        <div class="pagination">--}}
{{--            <a href="#">&laquo;</a>--}}
{{--            <a href="#">1</a>--}}
{{--            <a href="#">2</a>--}}
{{--            <a href="#">3</a>--}}
{{--            <a href="#">&raquo;</a>--}}
{{--        </div>--}}
{{--    </div>--}}
</div>
</div>

@include('layouts/addnewproductmodal')
{{--<script src="{{asset('js/index.js')}}"></script>--}}
<script src="{{asset('js/admin/adminproducts.js')}}"></script>
</body>
</html>
