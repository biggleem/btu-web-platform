@include('layouts/adminhead')
<body class="body_admin_dashboard">
@include('layouts/adminheader')
@include('layouts/adminsidebar')


<div class="section1_admin_dashboard_admin">
    <div class="section1_admin_dashboard_title" >Homegoods</div>
    <div class="section2_items_admin_dashboard" id="partproducts_1">
{{--        <div class="section2_item1 ">--}}
{{--            <img src="{{asset('images')}}/Rectangle%205%20(2).png" alt="" class="item_img  myBtn">--}}
{{--            <i onclick="myFunction(this)" class="fa fa-heart fa-heart-o heart_img_all_products " aria-hidden="true"></i>--}}
{{--            <div class="item_name_block">--}}
{{--                <div class="item_name">--}}
{{--                    <p class="item_name1">Cursus quam</p>--}}
{{--                    <p class="item_name2">Cursus quam</p>--}}
{{--                </div>--}}
{{--                <div class="item_price">$25</div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="section2_item2 ">--}}
{{--            <img src="{{asset('images')}}/Rectangle%205.png" alt="" class="item_img myBtn">--}}
{{--            <i onclick="myFunction(this)" class="fa fa-heart-o heart_img_all_products " aria-hidden="true"></i>--}}
{{--            <div class="item_name_block">--}}
{{--                <div class="item_name">--}}
{{--                    <p class="item_name1">Cursus quam</p>--}}
{{--                    <p class="item_name2">Cursus quam</p>--}}
{{--                </div>--}}
{{--                <div class="item_price">$25</div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="section2_item1 ">--}}
{{--            <img src="{{asset('images')}}/Rectangle%205.png" alt="" class="item_img myBtn">--}}
{{--            <i onclick="myFunction(this)" class="fa fa-heart-o heart_img_all_products " aria-hidden="true"></i>--}}
{{--            <div class="item_name_block">--}}
{{--                <div class="item_name">--}}
{{--                    <p class="item_name1">Cursus quam</p>--}}
{{--                    <p class="item_name2">Cursus quam</p>--}}
{{--                </div>--}}
{{--                <div class="item_price">$25</div>--}}
{{--            </div>--}}
{{--        </div>--}}
    </div>
    <a class="see_all_admin_dashboard" href="{{route('adminhomegoods')}}">See all</a>
    <span class="section1_admin_dashboard_title" >Face and Hair</span>
    <div class="section2_items_admin_dashboard" id="partproducts_2">
{{--        <div class="section2_item1 ">--}}
{{--            <img src="{{asset('images')}}/Rectangle%205.png" alt="" class="item_img myBtn">--}}
{{--            <i onclick="myFunction(this)" class="fa fa-heart-o heart_img_all_products " aria-hidden="true"></i>--}}
{{--            <div class="item_name_block">--}}
{{--                <div class="item_name">--}}
{{--                    <p class="item_name1">Cursus quam</p>--}}
{{--                    <p class="item_name2">Cursus quam</p>--}}
{{--                </div>--}}
{{--                <div class="item_price">$25</div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="section2_item2 ">--}}
{{--            <img src="{{asset('images')}}/Rectangle%205%20(2).png" alt="" class="item_img myBtn">--}}
{{--            <i onclick="myFunction(this)" class="fa fa-heart fa-heart-o heart_img_all_products " aria-hidden="true"></i>--}}
{{--            <div class="item_name_block">--}}
{{--                <div class="item_name">--}}
{{--                    <p class="item_name1">Cursus quam</p>--}}
{{--                    <p class="item_name2">Cursus quam</p>--}}
{{--                </div>--}}
{{--                <div class="item_price">$25</div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="section2_item1 ">--}}
{{--            <img src="{{asset('images')}}/Rectangle%205.png" alt="" class="item_img myBtn">--}}
{{--            <i onclick="myFunction(this)" class="fa fa-heart fa-heart-o heart_img_all_products " aria-hidden="true"></i>--}}
{{--            <div class="item_name_block">--}}
{{--                <div class="item_name">--}}
{{--                    <p class="item_name1">Cursus quam</p>--}}
{{--                    <p class="item_name2">Cursus quam</p>--}}
{{--                </div>--}}
{{--                <div class="item_price">$25</div>--}}
{{--            </div>--}}
{{--        </div>--}}
    </div>
    <a class="see_all_admin_dashboard" href="{{route('faceandhair')}}">See all</a>
    <span class="section1_admin_dashboard_title" >Edibles</span>
    <div class="section2_items_admin_dashboard" id="partproducts_3">
{{--        <div class="section2_item1 ">--}}
{{--            <img src="{{asset('images')}}/Rectangle%205%20(2).png" alt="" class="item_img myBtn">--}}
{{--            <i onclick="myFunction(this)" class="fa fa-heart-o heart_img_all_products " aria-hidden="true"></i>--}}
{{--            <div class="item_name_block">--}}
{{--                <div class="item_name">--}}
{{--                    <p class="item_name1">Cursus quam</p>--}}
{{--                    <p class="item_name2">Cursus quam</p>--}}
{{--                </div>--}}
{{--                <div class="item_price">$25</div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="section2_item2 ">--}}
{{--            <img src="{{asset('images')}}/Rectangle%205.png" alt="" class="item_img myBtn">--}}
{{--            <i onclick="myFunction(this)" class="fa fa-heart fa-heart-o heart_img_all_products " aria-hidden="true"></i>--}}
{{--            <div class="item_name_block">--}}
{{--                <div class="item_name">--}}
{{--                    <p class="item_name1">Cursus quam</p>--}}
{{--                    <p class="item_name2">Cursus quam</p>--}}
{{--                </div>--}}
{{--                <div class="item_price">$25</div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="section2_item1 ">--}}
{{--            <img src="{{asset('images')}}/Rectangle%205%20(2).png" alt="" class="item_img myBtn">--}}
{{--            <i onclick="myFunction(this)" class="fa fa-heart-o heart_img_all_products " aria-hidden="true"></i>--}}
{{--            <div class="item_name_block">--}}
{{--                <div class="item_name">--}}
{{--                    <p class="item_name1">Cursus quam</p>--}}
{{--                    <p class="item_name2">Cursus quam</p>--}}
{{--                </div>--}}
{{--                <div class="item_price">$25</div>--}}
{{--            </div>--}}
{{--        </div>--}}
    </div>
    <a class="see_all_admin_dashboard" href="{{route('adminedibles')}}">See all</a>
    <span class="section1_admin_dashboard_title" >Amazon hurries</span>
    <div class="section2_items_admin_dashboard" id="partproducts_4">
{{--        <div class="section2_item1 ">--}}
{{--            <img src="{{asset('images')}}/Rectangle%205.png" alt="" class="item_img myBtn ">--}}
{{--            <i onclick="myFunction(this)" class="fa fa-heart fa-heart-o heart_img_all_products " aria-hidden="true"></i>--}}
{{--            <div class="item_name_block">--}}
{{--                <div class="item_name">--}}
{{--                    <p class="item_name1">Cursus quam</p>--}}
{{--                    <p class="item_name2">Cursus quam</p>--}}
{{--                </div>--}}
{{--                <div class="item_price">$25</div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="section2_item2 ">--}}
{{--            <img src="{{asset('images')}}/Rectangle%205%20(2).png" alt="" class="item_img myBtn">--}}
{{--            <i onclick="myFunction(this)" class="fa fa-heart fa-heart-o heart_img_all_products " aria-hidden="true"></i>--}}
{{--            <div class="item_name_block">--}}
{{--                <div class="item_name">--}}
{{--                    <p class="item_name1">Cursus quam</p>--}}
{{--                    <p class="item_name2">Cursus quam</p>--}}
{{--                </div>--}}
{{--                <div class="item_price">$25</div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="section2_item1 ">--}}
{{--            <img src="{{asset('images')}}/Rectangle%205.png" alt="" class="item_img myBtn">--}}
{{--            <i onclick="myFunction(this)" class="fa fa-heart-o heart_img_all_products " aria-hidden="true"></i>--}}
{{--            <div class="item_name_block">--}}
{{--                <div class="item_name">--}}
{{--                    <p class="item_name1">Cursus quam</p>--}}
{{--                    <p class="item_name2">Cursus quam</p>--}}
{{--                </div>--}}
{{--                <div class="item_price">$25</div>--}}
{{--            </div>--}}
{{--        </div>--}}
    </div>
    <a class="see_all_admin_dashboard" href="{{route('adminamazonhurries')}}">See all</a>
    <span class="section1_admin_dashboard_title" >WYDTYN</span>
    <div class="section2_items_admin_dashboard" id="partproducts_5">
{{--        <div class="section2_item1 ">--}}
{{--            <img src="{{asset('images')}}/Rectangle%205.png" alt="" class="item_img  myBtn">--}}
{{--            <i onclick="myFunction(this)" class="fa fa-heart-o heart_img_all_products " aria-hidden="true"></i>--}}
{{--            <div class="item_name_block">--}}
{{--                <div class="item_name">--}}
{{--                    <p class="item_name1">Cursus quam</p>--}}
{{--                    <p class="item_name2">Cursus quam</p>--}}
{{--                </div>--}}
{{--                <div class="item_price">$25</div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="section2_item2 ">--}}
{{--            <img src="{{asset('images')}}/Rectangle%205.png" alt="" class="item_img myBtn">--}}
{{--            <i onclick="myFunction(this)" class="fa fa-heart-o heart_img_all_products " aria-hidden="true"></i>--}}
{{--            <div class="item_name_block">--}}
{{--                <div class="item_name">--}}
{{--                    <p class="item_name1">Cursus quam</p>--}}
{{--                    <p class="item_name2">Cursus quam</p>--}}
{{--                </div>--}}
{{--                <div class="item_price">$25</div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="section2_item1 ">--}}
{{--            <img src="{{asset('images')}}/Rectangle%205%20(2).png" alt="" class="item_img myBtn">--}}
{{--            <i onclick="myFunction(this)" class="fa fa-heart fa-heart-o heart_img_all_products " aria-hidden="true"></i>--}}
{{--            <div class="item_name_block">--}}
{{--                <div class="item_name">--}}
{{--                    <p class="item_name1">Cursus quam</p>--}}
{{--                    <p class="item_name2">Cursus quam</p>--}}
{{--                </div>--}}
{{--                <div class="item_price">$25</div>--}}
{{--            </div>--}}
{{--        </div>--}}
    </div>
    <a class="see_all_admin_dashboard" href="{{route('adminwydtyn')}}">See all</a>
</div>

@include('layouts/categoriesmodal')
{{--<script src="{{asset('js/index.js')}}"></script>--}}
<script src="{{asset('js/admin/adminallproducts.js')}}"></script>
</body>
</html>
