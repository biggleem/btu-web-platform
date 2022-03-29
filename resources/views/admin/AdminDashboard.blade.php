@include('layouts/adminhead')
<body class="body_admin_dashboard">
@include('layouts/adminheader')
@include('layouts/adminsidebar')
<div class="section1">
    <div class="admin_dashboard_banner">
        <img src="{{asset('images')}}/boxed-water.png" alt="" class="boxed_water_img">
        <img src="{{asset('images')}}/Camera.png" alt="" class="boxed_water_img_plus">
        <input type="file" id="dashpicker" style="display: none" accept=".jpg, .jpeg, .png">
    </div>
    <div class="section1_textBlock_admin">
        <span class="section1_title">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
        <p class="section1_disc">Cursus quam tortor in convallis vel dolor sed mattis.
            Blandit nec nunc, sapien suscipit in tellus. Aliquam
            tellus est dictum nibh sagittis, nulla.</p>
{{--        <a href="../../../shop/Pages/sign.html">--}}
{{--            <button class="sign_post_button">Sign up to post</button>--}}
{{--        </a>--}}
    </div>
</div>
<div class="container">
    <div class="section2_admin_dashboard">
        <div class="section2_title">
            <span class="title">DOP</span>
            <span class="disc">Deals of prominence</span>
        </div>
        <div class="section2_items">
{{--            <div class="section2_item1">--}}
{{--                <img src="{{asset('images')}}/Rectangle%205.png" alt="" class="item_img myBtn">--}}
{{--                <i onclick="myFunction(this)" class="fa fa-heart-o heart_img" aria-hidden="true"></i>--}}
{{--                <div class="item_name_block">--}}
{{--                    <div class="item_name">--}}
{{--                        <p class="item_name1">Cursus quam</p>--}}
{{--                        <p class="item_name2">Cursus quam</p>--}}
{{--                    </div>--}}
{{--                    <div class="item_price">$25</div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="section2_item2">--}}
{{--                <img src="{{asset('images')}}/Rectangle%205.png" alt="" class="item_img myBtn">--}}
{{--                <i onclick="myFunction(this)" class="fa fa-heart-o heart_img" aria-hidden="true"></i>--}}
{{--                <div class="sale">--}}
{{--                    <img src="{{asset('images')}}/Clock.png" alt="" class="clock">--}}
{{--                    <div class="day_sale">--}}
{{--                        <div>Only 3 days</div>--}}
{{--                        <div>-30%</div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="item_name_block">--}}
{{--                    <div class="item_name">--}}
{{--                        <p class="item_name1">Cursus quam</p>--}}
{{--                        <p class="item_name2">Cursus quam</p>--}}
{{--                    </div>--}}
{{--                    <div class="item_price">$25</div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="section2_item1">--}}
{{--                <img src="{{asset('images')}}/Rectangle%205.png" alt="" class="item_img myBtn">--}}
{{--                <i onclick="myFunction(this)" class="fa fa-heart-o heart_img" aria-hidden="true"></i>--}}
{{--                <div class="item_name_block">--}}
{{--                    <div class="item_name">--}}
{{--                        <p class="item_name1">Cursus quam</p>--}}
{{--                        <p class="item_name2">Cursus quam</p>--}}
{{--                    </div>--}}
{{--                    <div class="item_price">$25</div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="section2_item2">--}}
{{--                <img src="{{asset('images')}}/Rectangle%205.png" alt="" class="item_img myBtn">--}}
{{--                <i onclick="myFunction(this)" class="fa fa-heart-o heart_img" aria-hidden="true"></i>--}}
{{--                <div class="sale">--}}
{{--                    <img src="{{asset('images')}}/Clock.png" alt="" class="clock">--}}
{{--                    <div class="day_sale">--}}
{{--                        <div>Only 3 days</div>--}}
{{--                        <div>-30%</div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="item_name_block">--}}
{{--                    <div class="item_name">--}}
{{--                        <p class="item_name1">Cursus quam</p>--}}
{{--                        <p class="item_name2">Cursus quam</p>--}}
{{--                    </div>--}}
{{--                    <div class="item_price">$25</div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="section2_item1">--}}
{{--                <img src="{{asset('images')}}/Rectangle%205%20(2).png" alt="" class="item_img myBtn">--}}
{{--                <i onclick="myFunction(this)" class="fa fa-heart-o heart_img" aria-hidden="true"></i>--}}
{{--                <div class="item_name_block">--}}
{{--                    <div class="item_name">--}}
{{--                        <p class="item_name1">Cursus quam</p>--}}
{{--                        <p class="item_name2">Cursus quam</p>--}}
{{--                    </div>--}}
{{--                    <div class="item_price">$25</div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="section2_item2 ">--}}
{{--                <img src="{{asset('images')}}/Rectangle%205%20(2).png" alt="" class="item_img myBtn">--}}
{{--                <i onclick="myFunction(this)" class="fa fa-heart-o heart_img" aria-hidden="true"></i>--}}
{{--                <div class="sale">--}}
{{--                    <img src="{{asset('images')}}/Clock.png" alt="" class="clock">--}}
{{--                    <div class="day_sale">--}}
{{--                        <div>Only 3 days</div>--}}
{{--                        <div>-30%</div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="item_name_block">--}}
{{--                    <div class="item_name">--}}
{{--                        <p class="item_name1">Cursus quam</p>--}}
{{--                        <p class="item_name2">Cursus quam</p>--}}
{{--                    </div>--}}
{{--                    <div class="item_price">$25</div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="section2_item1">--}}
{{--                <img src="{{asset('images')}}/Rectangle%205%20(2).png" alt="" class="item_img myBtn">--}}
{{--                <i onclick="myFunction(this)" class="fa fa-heart-o heart_img" aria-hidden="true"></i>--}}
{{--                <div class="item_name_block">--}}
{{--                    <div class="item_name">--}}
{{--                        <p class="item_name1">Cursus quam</p>--}}
{{--                        <p class="item_name2">Cursus quam</p>--}}
{{--                    </div>--}}
{{--                    <div class="item_price">$25</div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="section2_item1">--}}
{{--                <img src="{{asset('images')}}/Rectangle%205%20(2).png" alt="" class="item_img myBtn">--}}
{{--                <i onclick="myFunction(this)" class="fa fa-heart-o heart_img" aria-hidden="true"></i>--}}
{{--                <div class="item_name_block">--}}
{{--                    <div class="item_name">--}}
{{--                        <p class="item_name1">Cursus quam</p>--}}
{{--                        <p class="item_name2">Cursus quam</p>--}}
{{--                    </div>--}}
{{--                    <div class="item_price">$25</div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="section2_item1">--}}
{{--                <img src="{{asset('images')}}/Rectangle%205%20(2).png" alt="" class="item_img myBtn">--}}
{{--                <i onclick="myFunction(this)" class="fa fa-heart-o heart_img" aria-hidden="true"></i>--}}
{{--                <div class="item_name_block">--}}
{{--                    <div class="item_name">--}}
{{--                        <p class="item_name1">Cursus quam</p>--}}
{{--                        <p class="item_name2">Cursus quam</p>--}}
{{--                    </div>--}}
{{--                    <div class="item_price">$25</div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="section2_item1">--}}
{{--                <img src="{{asset('images')}}/Rectangle%205%20(2).png" alt="" class="item_img myBtn">--}}
{{--                <i onclick="myFunction(this)" class="fa fa-heart-o heart_img" aria-hidden="true"></i>--}}
{{--                <div class="item_name_block">--}}
{{--                    <div class="item_name">--}}
{{--                        <p class="item_name1">Cursus quam</p>--}}
{{--                        <p class="item_name2">Cursus quam</p>--}}
{{--                    </div>--}}
{{--                    <div class="item_price">$25</div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="section2_item1">--}}
{{--                <img src="{{asset('images')}}/Rectangle%205%20(2).png" alt="" class="item_img myBtn">--}}
{{--                <i onclick="myFunction(this)" class="fa fa-heart-o heart_img" aria-hidden="true"></i>--}}
{{--                <div class="item_name_block">--}}
{{--                    <div class="item_name">--}}
{{--                        <p class="item_name1">Cursus quam</p>--}}
{{--                        <p class="item_name2">Cursus quam</p>--}}
{{--                    </div>--}}
{{--                    <div class="item_price">$25</div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="section2_item2">--}}
{{--                <img src="{{asset('images')}}/Rectangle%205%20(2).png" alt="" class="item_img myBtn">--}}
{{--                <i onclick="myFunction(this)" class="fa fa-heart-o heart_img" aria-hidden="true"></i>--}}
{{--                <div class="sale">--}}
{{--                    <img src="{{asset('images')}}/Clock.png" alt="" class="clock">--}}
{{--                    <div class="day_sale">--}}
{{--                        <div>Only 3 days</div>--}}
{{--                        <div>-30%</div>--}}
{{--                    </div>--}}

{{--                </div>--}}
{{--                <div class="item_name_block">--}}
{{--                    <div class="item_name">--}}
{{--                        <p class="item_name1">Cursus quam</p>--}}
{{--                        <p class="item_name2">Cursus quam</p>--}}
{{--                    </div>--}}
{{--                    <div class="item_price">$25</div>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
    </div>
</div>

@include('layouts/categoriesmodal')
<script src="{{asset('js/admin/admindashboard.js')}}"></script>
{{--<script src="{{asset('js/index.js')}}"></script>--}}
</body>
</html>
