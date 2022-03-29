@include('layouts/adminhead')
<body class="body_admin_dashboard">
@include('layouts/adminheader')
@include('layouts/adminsidebar')
<div class="admin_my_Profile_title">My profile</div>
<div class="admin_my_Profile_container">
    <div class="admin_my_Profile_container1">
        <div class="admin_my_Profile_container1_inner">
            <div class="admin_my_Profile_container1_pic">
                <img src="{{asset('images')}}/my_profile_pic.png" alt="" class="my_profile_pic">
                <img src="{{asset('images')}}/Camera.png" alt="" class="my_profile_pic_camera">
                <input type="file" id="newavatarinput" style="display: none" accept=".jpg, .jpeg, .png">
            </div>
            <span class="admin_my_Profile_container1_title1">Lorem Ipsum</span>
            <span class="admin_my_Profile_container1_title2">Admin</span>
            <span class="admin_my_Profile_container1_title3">LoremIpsum@gmail.com</span>
        </div>
    </div>
    <div class="admin_my_Profile_container2">
        <div class="admin_my_Profile_container2_inner">
            <div class="admin_my_Profile_container2_title">Products</div>
{{--            <div class="admin_notifications_block_item_my_profile">--}}
{{--                <div class="admin_notifications_block_item_inner">--}}
{{--                    <div class="admin_notifications_block_item_section">--}}
{{--                        <div class="admin_notifications_block_item_section1">--}}
{{--                            <img src="{{asset('images')}}/product/1_1.png" class="my_profile_product_img" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="admin_notifications_block_item_section2">--}}
{{--                            <div class="admin_notifications_block_item_section2_block1">--}}
{{--                                <span class="admin_notifications_blocks_title1">Cursus quam</span>--}}
{{--                                <div>--}}
{{--                                    <img src="{{asset('images')}}/X.png" alt="" class="x_image">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <span class="admin_notifications_blocks_title2">Cursus quam</span>--}}
{{--                            <div>--}}
{{--                                <span class="admin_notifications_blocks_title3">From</span>--}}
{{--                                <span class="admin_notifications_blocks_title3_">UserName</span>--}}
{{--                                <img src="{{asset('images')}}/Liberty_pic.png" alt="">--}}
{{--                            </div>--}}
{{--                            <div class="admin_notifications_block_item_section2_block2">--}}
{{--                                <span class="admin_notifications_blocks_title4">$25</span>--}}
{{--                                <div>--}}
{{--                                    <button class="admin_notifications_blocks_title5 myBtn">More details</button>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="admin_notifications_block_item_my_profile">--}}
{{--                <div class="admin_notifications_block_item_inner">--}}
{{--                    <div class="admin_notifications_block_item_section">--}}
{{--                        <div class="admin_notifications_block_item_section1">--}}
{{--                            <img src="{{asset('images')}}/Rectangle%206%20mini.png" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="admin_notifications_block_item_section2">--}}
{{--                            <div class="admin_notifications_block_item_section2_block1">--}}
{{--                                <span class="admin_notifications_blocks_title1">Cursus quam</span>--}}
{{--                                <div>--}}
{{--                                    <img src="{{asset('images')}}/X.png" alt="" class="x_image">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <span class="admin_notifications_blocks_title2">Cursus quam</span>--}}
{{--                            <div>--}}
{{--                                <span class="admin_notifications_blocks_title3">From</span>--}}
{{--                                <img src="{{asset('images')}}/Liberty_pic.png" alt="">--}}
{{--                            </div>--}}
{{--                            <div class="admin_notifications_block_item_section2_block2">--}}
{{--                                <span class="admin_notifications_blocks_title4">$25</span>--}}
{{--                                <div>--}}
{{--                                    <button class="admin_notifications_blocks_title5 myBtn">More details</button>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="admin_notifications_block_item_my_profile">--}}
{{--                <div class="admin_notifications_block_item_inner">--}}
{{--                    <div class="admin_notifications_block_item_section">--}}
{{--                        <div class="admin_notifications_block_item_section1">--}}
{{--                            <img src="{{asset('images')}}/Rectangle%206%20mini.png" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="admin_notifications_block_item_section2">--}}
{{--                            <div class="admin_notifications_block_item_section2_block1">--}}
{{--                                <span class="admin_notifications_blocks_title1">Cursus quam</span>--}}
{{--                                <div>--}}
{{--                                    <img src="{{asset('images')}}/X.png" alt="" class="x_image">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <span class="admin_notifications_blocks_title2">Cursus quam</span>--}}
{{--                            <div>--}}
{{--                                <span class="admin_notifications_blocks_title3">From</span>--}}
{{--                                <img src="{{asset('images')}}/Liberty_pic.png" alt="">--}}
{{--                            </div>--}}
{{--                            <div class="admin_notifications_block_item_section2_block2">--}}
{{--                                <span class="admin_notifications_blocks_title4">$25</span>--}}
{{--                                <div>--}}
{{--                                    <button class="admin_notifications_blocks_title5 myBtn">More details</button>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="admin_notifications_block_item_my_profile">--}}
{{--                <div class="admin_notifications_block_item_inner">--}}
{{--                    <div class="admin_notifications_block_item_section">--}}
{{--                        <div class="admin_notifications_block_item_section1">--}}
{{--                            <img src="{{asset('images')}}/Rectangle%206%20mini.png" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="admin_notifications_block_item_section2">--}}
{{--                            <div class="admin_notifications_block_item_section2_block1">--}}
{{--                                <span class="admin_notifications_blocks_title1">Cursus quam</span>--}}
{{--                                <div>--}}
{{--                                    <img src="{{asset('images')}}/X.png" alt="" class="x_image">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <span class="admin_notifications_blocks_title2">Cursus quam</span>--}}
{{--                            <div>--}}
{{--                                <span class="admin_notifications_blocks_title3">From</span>--}}
{{--                                <img src="{{asset('images')}}/Liberty_pic.png" alt="">--}}
{{--                            </div>--}}
{{--                            <div class="admin_notifications_block_item_section2_block2">--}}
{{--                                <span class="admin_notifications_blocks_title4">$25</span>--}}
{{--                                <div>--}}
{{--                                    <button class="admin_notifications_blocks_title5 myBtn">More details</button>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
    </div>
</div>


@include('layouts/categoriesmodal')
{{--<script src="{{asset('js/index.js')}}"></script>--}}
<script src="{{asset('js/admin/adminprofile.js')}}"></script>
</body>
</html>
