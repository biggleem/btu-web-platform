@include('layouts/header')
<body>
@include('layouts/navigation')
<div class="container">
    <div class="section1_admin_dashboard">
        <div class="my_products_page">
            <div class="my_products_page_inner">
                <div class="profile_img_info">
                    <div class="my_profile_page_imgs">
                        <img id="avatarimage" src="" alt="">
                        <img src="{{asset('images')}}/Camera.png" alt="" class="profile_img_cam">
                        <input type="file" id="newavatarinput" style="display: none" accept=".jpg, .jpeg, .png">
                    </div>
                    <div class="profile_info">
                        <span class="profile_info_name"></span>
                        <span class="profile_info_email"></span>
{{--                        <span class="profile_info_site">Yourwebsite.com</span>--}}
                        <span class="profile_info_products">My products: <span id="productscount"></span></span>
                        <a class="profile_info_password myBtn_2">Change password</a>
                    </div>
                </div>
                <div class="profile_page_edit myBtn_3">
                    <img src="{{asset('images')}}/PencilLineblue.png" alt="">
                </div>
            </div>
        </div>
        <div class="section1_admin_dashboard_title">My Products</div>
        <div class="section2_items_my_profile" id="productsmini">
{{--            <div class="section2_item1">--}}
{{--                <img src="{{asset('images')}}/Rectangle%205.png" alt="" class="item_img">--}}
{{--                <div class="circle_block">--}}
{{--                    <span class="dot dot_blue"><img src="{{asset('images')}}/check.png" alt="" class="check"></span>--}}
{{--                    <span class="dot dot_orange"><img src="{{asset('images')}}/wall-clock.png" alt=""--}}
{{--                                                      class="pending"></span>--}}
{{--                    <span class="dot dot_red"><img src="{{asset('images')}}/close_white.png" alt=""--}}
{{--                                                   class="canceled"></span>--}}
{{--                </div>--}}
{{--                <img src="{{asset('images')}}/PencilLine.png" alt="" class="heart_img_my_profile myBtn_4">--}}
{{--                <img src="{{asset('images')}}/close_white.png" alt="" class="product_x">--}}
{{--                <div class="item_name_block">--}}
{{--                    <div class="item_name">--}}
{{--                        <p class="item_name1">Cursus quam</p>--}}
{{--                        <p class="item_name2">Cursus quam</p>--}}
{{--                    </div>--}}
{{--                    <div class="item_price">$25</div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="section2_item2">--}}
{{--                <img src="{{asset('images')}}/Rectangle%205%20(2).png" alt="" class="item_img ">--}}
{{--                <div class="circle_block">--}}
{{--                    <span class="dot dot_blue"><img src="{{asset('images')}}/check.png" alt="" class="check"></span>--}}
{{--                    <span class="dot dot_orange"><img src="{{asset('images')}}/wall-clock.png" alt=""--}}
{{--                                                      class="pending"></span>--}}
{{--                    <span class="dot dot_red"><img src="{{asset('images')}}/close_white.png" alt=""--}}
{{--                                                   class="canceled"></span>--}}
{{--                </div>--}}
{{--                <img src="{{asset('images')}}/PencilLine.png" alt="" class="heart_img_my_profile myBtn_4">--}}
{{--                <img src="{{asset('images')}}/close_white.png" alt="" class="product_x">--}}
{{--                <div class="item_name_block">--}}
{{--                    <div class="item_name">--}}
{{--                        <p class="item_name1">Cursus quam</p>--}}
{{--                        <p class="item_name2">Cursus quam</p>--}}
{{--                    </div>--}}
{{--                    <div class="item_price">$25</div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="section2_item1">--}}
{{--                <img src="{{asset('images')}}/Rectangle%205.png" alt="" class="item_img">--}}
{{--                <div class="circle_block">--}}
{{--                    <span class="dot dot_blue"><img src="{{asset('images')}}/check.png" alt="" class="check"></span>--}}
{{--                    <span class="dot dot_orange"><img src="{{asset('images')}}/wall-clock.png" alt=""--}}
{{--                                                      class="pending"></span>--}}
{{--                    <span class="dot dot_red"><img src="{{asset('images')}}/close_white.png" alt=""--}}
{{--                                                   class="canceled"></span>--}}
{{--                </div>--}}
{{--                <img src="{{asset('images')}}/PencilLine.png" alt="" class="heart_img_my_profile myBtn_4">--}}
{{--                <img src="{{asset('images')}}/close_white.png" alt="" class="product_x">--}}
{{--                <div class="item_name_block">--}}
{{--                    <div class="item_name">--}}
{{--                        <p class="item_name1">Cursus quam</p>--}}
{{--                        <p class="item_name2">Cursus quam</p>--}}
{{--                    </div>--}}
{{--                    <div class="item_price">$25</div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="section2_item1">--}}
{{--                <img src="{{asset('images')}}/Rectangle%205%20(2).png" alt="" class="item_img">--}}
{{--                <div class="circle_block">--}}
{{--                    <span class="dot dot_blue"><img src="{{asset('images')}}/check.png" alt="" class="check"></span>--}}
{{--                    <span class="dot dot_orange"><img src="{{asset('images')}}/wall-clock.png" alt=""--}}
{{--                                                      class="pending"></span>--}}
{{--                    <span class="dot dot_red"><img src="{{asset('images')}}/close_white.png" alt=""--}}
{{--                                                   class="canceled"></span>--}}
{{--                </div>--}}
{{--                <img src="{{asset('images')}}/PencilLine.png" alt="" class="heart_img_my_profile myBtn_4">--}}
{{--                <img src="{{asset('images')}}/close_white.png" alt="" class="product_x">--}}
{{--                <div class="item_name_block">--}}
{{--                    <div class="item_name">--}}
{{--                        <p class="item_name1">Cursus quam</p>--}}
{{--                        <p class="item_name2">Cursus quam</p>--}}
{{--                    </div>--}}
{{--                    <div class="item_price">$25</div>--}}
{{--                </div>--}}
{{--            </div>--}}

        </div>

        <div class=" see_all myBtn_5">See all</div>
        <span class="section1_admin_dashboard_title">Favorites</span>

        <div class="section2_items_my_profile" id="favoritespart">
{{--            <div class="section2_item2">--}}
{{--                <img src="{{asset('images')}}/Rectangle%205%20(2).png" alt="" class="item_img myBtn">--}}
{{--                <i onclick="myFunction(this)" class="fa fa-heart fa-heart-o heart_img" aria-hidden="true"></i>--}}
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
{{--            <div class="section2_item1 ">--}}
{{--                <img src="{{asset('images')}}/Rectangle%205.png" alt="" class="item_img myBtn">--}}
{{--                <i onclick="myFunction(this)" class="fa fa-heart fa-heart-o heart_img" aria-hidden="true"></i>--}}
{{--                <div class="item_name_block">--}}
{{--                    <div class="item_name">--}}
{{--                        <p class="item_name1">Cursus quam</p>--}}
{{--                        <p class="item_name2">Cursus quam</p>--}}
{{--                    </div>--}}
{{--                    <div class="item_price">$25</div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="section2_item1 ">--}}
{{--                <img src="{{asset('images')}}/Rectangle%205%20(2).png" alt="" class="item_img myBtn">--}}
{{--                <i onclick="myFunction(this)" class="fa fa-heart fa-heart-o heart_img" aria-hidden="true"></i>--}}
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
{{--                <i onclick="myFunction(this)" class="fa fa-heart fa-heart-o heart_img" aria-hidden="true"></i>--}}
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
{{--            <div class="section2_item2">--}}
{{--                <img src="{{asset('images')}}/Rectangle%205.png" alt="" class="item_img myBtn">--}}
{{--                <i onclick="myFunction(this)" class="fa fa-heart fa-heart-o heart_img" aria-hidden="true"></i>--}}
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
{{--            <div class="section2_item2">--}}
{{--                <img src="{{asset('images')}}/Rectangle%205.png" alt="" class="item_img myBtn">--}}
{{--                <i onclick="myFunction(this)" class="fa fa-heart fa-heart-o heart_img" aria-hidden="true"></i>--}}
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
{{--            <div class="section2_item1 ">--}}
{{--                <img src="{{asset('images')}}/Rectangle%205%20(2).png" alt="" class="item_img myBtn">--}}
{{--                <i onclick="myFunction(this)" class="fa fa-heart fa-heart-o heart_img" aria-hidden="true"></i>--}}
{{--                <div class="item_name_block">--}}
{{--                    <div class="item_name">--}}
{{--                        <p class="item_name1">Cursus quam</p>--}}
{{--                        <p class="item_name2">Cursus quam</p>--}}
{{--                    </div>--}}
{{--                    <div class="item_price">$25</div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="section2_item1 ">--}}
{{--                <img src="{{asset('images')}}/Rectangle%205.png" alt="" class="item_img myBtn">--}}
{{--                <i onclick="myFunction(this)" class="fa fa-heart fa-heart-o heart_img" aria-hidden="true"></i>--}}
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
    <a class=" see_all_a" href="{{route('favoritesPage')}}" >See all</a>
</div>
@include('layouts/footer')
<!--edit profile modal-->
<div id="myModal_3" class="modal">
    <!-- Modal content -->
    <div class="modal-content">
        <div class="edit_profile_container">
            <span class="close_modal_edit_profile">&times;</span>
            <span class="sign_title">Edit Profile</span>
            <div class="inputs_block">
                <label for="" class="input_block_label" >Name</label>
                <input type="text" class="input_block" id="profilemodalname">
{{--                <label for="" class="input_block_label">lastname</label>--}}
{{--                <input type="text" class="input_block">--}}
                <label for="" class="input_block_label" >Email</label>
                <input type="text" class="input_block" id="profilemodalemail">
{{--                <label for="" class="input_block_label">Website</label>--}}
{{--                <input type="text" class="input_block">--}}
                <p class="error_sign" id="editprofileerror">Error message</p>
{{--                <a href="../Pages/My_Profile_Login.html">--}}
                    <button class="Login_button" id="editProfileButton">Save</button>
{{--                </a>--}}
                <a href="">
                    <button class="cancel_button_changePassword">Cancel</button>
                </a>
            </div>
        </div>
    </div>
</div>
<!--Change Password modal-->
<div id="myModal_2" class="modal">
    <!-- Modal content -->
    <div class="modal-content">
        <div class="signup_container2">
            <span class="close_modal_change_password">&times;</span>
            <span class="sign_title">Change Password</span>
            <div class="inputs_block">
                <input type="password" placeholder="Old Password" id="oldpass" class="input_block">
                <input type="password" placeholder="New Password" id="newpass" class="input_block">
                <input type="password" placeholder="Repeat password" id="confirmpass" class="input_block">
                <p class="error_sign" id="editpassworderror">Error message</p>
{{--                <a href="../Pages/login.html">--}}
                    <button class="Login_button" id="changePassButton">Save</button>
{{--                </a>--}}
                <a href="">
                    <button class="cancel_button_changePassword">Cancel</button>
                </a>
            </div>
        </div>
    </div>
</div>
<!--Product item modals-->
<div id="myModal_1" class="modal">
    <!-- Modal content -->
    <div class="modal-content">
        <div class="modal_content_all">
            <div class="modal-content_section1">
                <div class="close_modal_border1">
                    <div class="close_modal_border_inner">
                        <span class="close_modal">&times;</span>
                    </div>
                </div>
                <div class="Modal_content_img_block">
                    <div class="row">
                        <div class="column">
                            <img src="{{asset('images')}}/Rectangle%205.png" class="column_img"
                            >
                        </div>
                        <div class="column">
                            <img src="{{asset('images')}}/img_slideshow_big_img.jpg" class="column_img"
                            >
                        </div>
                        <div class="column">
                            <img src="{{asset('images')}}/img_slideshow_big_img.jpg" class="column_img"
                            >
                        </div>
                        <div class="column">
                            <img src="{{asset('images')}}/img_slideshow_big_img.jpg" class="column_img"
                            >
                        </div>
                        <div class="column">
                            <img src="{{asset('images')}}/Rectangle%205.png" class="column_img"
                            >
                        </div>
                    </div>

                    <div class="img_gallery">
                        <img id="expandedImg_2" class="img_gallery_img" src="{{asset('images')}}/Rectangle%205.png"
                             style="width:100%">    <!--src="{{asset('images')}}/img_slideshow_big_img.jpg"-->
                    </div>
                </div>
                <div class="modal_title_block">
                    <div CLASS="modal_title_block-inner">
                        <h1 class="modal_title">Lorem ipsum dolor</h1>
                        <p class="modal_title2">consectetur adipiscing elit</p>
                        <h1 class="modal_item_price">$ 600</h1>
                        <p class="modal_title3">From <span>Liberty</span></p>
                        <hr class="hr">

                        <div class="modal_description_block">
                            <p class="modal_description_details">Details:</p>
                            <p class="modal_description">Lorem ipsum dolor sit amet,
                                consectetur adipiscing elit. Malesuada
                                sit aenean nulla diam. Pharetra in neque
                                eu tempus ac hendrerit massa rhoncus dictum.
                                Ipsum accumsan at tincidunt consectetur ante
                                massa urna. Arcu nisi, nam scelerisque lobortis
                                eget habitant nam.</p>
                            <p class="modal_description">Lorem ipsum dolor sit amet, consectetur adipiscing
                                elit. Malesuada sit aenean nulla diam. Pharetra
                                in neque eu tempus ac hendrerit massa rhoncus dictum.
                                Ipsum accumsan at tincidunt consectetur ante massa urna.
                                Arcu nisi, nam scelerisque lobortis eget habitant nam.</p>
                            <p class="modal_description">Lorem ipsum dolor sit amet, consectetur adipiscing
                                elit.
                                Malesuada sit aenean nulla diam. Pharetra in neque eu
                                tempus ac hendrerit massa rhoncus dictum. Ipsum accumsan
                                at tincidunt consectetur ante massa urna. Arcu nisi,
                                nam scelerisque lobortis eget habitant nam.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cancel_ok">
                <div class="cancel_product"><a href="" class="cancel_product_x"><span>&times;</span></a></div>
                <a href=""><img src="{{asset('images')}}/icons8-ok-96.png" alt=""></a>
            </div>
        </div>
    </div>
    <div>
    </div>
</div>
@include('layouts/categoriesmodal')
@include('layouts/addnewproductmodal')
<div id="myModal_MyProducts" class="modal">
    <!-- Modal content -->
    <div class="modal-content">
        <div class="modal_content_all">
            <div class="modal-content_section1">
                <div class="close_modal_border1">
                    <div class="close_modal_border_inner">
                        <span class="my_products_modal_close">&times;</span>
                    </div>
                </div>
                <div class="my_products_page_modal">
                    <div class="section1_admin_dashboard_title">My Products</div>
                    <div class="section2_items_my_profile" id="productsall">
{{--                        <div class="section2_item1">--}}
{{--                            <img src="{{asset('images')}}/Rectangle%205.png" alt="" class="item_img">--}}
{{--                            <div class="circle_block">--}}
{{--                                <span class="dot dot_blue"><img src="{{asset('images')}}/check.png" alt=""--}}
{{--                                                                class="check"></span>--}}
{{--                                <span class="dot dot_orange"><img src="{{asset('images')}}/wall-clock.png" alt=""--}}
{{--                                                                  class="pending"></span>--}}
{{--                                <span class="dot dot_red"><img src="{{asset('images')}}/close_white.png" alt=""--}}
{{--                                                               class="canceled"></span>--}}
{{--                            </div>--}}
{{--                            <img src="{{asset('images')}}/PencilLine.png" alt="" class="heart_img_my_profile myBtn_4">--}}
{{--                            <img src="{{asset('images')}}/close_white.png" alt="" class="product_x">--}}
{{--                            <div class="item_name_block">--}}
{{--                                <div class="item_name">--}}
{{--                                    <p class="item_name1">Cursus quam</p>--}}
{{--                                    <p class="item_name2">Cursus quam</p>--}}
{{--                                </div>--}}
{{--                                <div class="item_price">$25</div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="section2_item2">--}}
{{--                            <img src="{{asset('images')}}/Rectangle%205%20(2).png" alt="" class="item_img ">--}}
{{--                            <div class="circle_block">--}}
{{--                                <span class="dot dot_blue"><img src="{{asset('images')}}/check.png" alt=""--}}
{{--                                                                class="check"></span>--}}
{{--                                <span class="dot dot_orange"><img src="{{asset('images')}}/wall-clock.png" alt=""--}}
{{--                                                                  class="pending"></span>--}}
{{--                                <span class="dot dot_red"><img src="{{asset('images')}}/close_white.png" alt=""--}}
{{--                                                               class="canceled"></span>--}}
{{--                            </div>--}}
{{--                            <img src="{{asset('images')}}/PencilLine.png" alt="" class="heart_img_my_profile myBtn_4">--}}
{{--                            <img src="{{asset('images')}}/close_white.png" alt="" class="product_x">--}}
{{--                            <div class="item_name_block">--}}
{{--                                <div class="item_name">--}}
{{--                                    <p class="item_name1">Cursus quam</p>--}}
{{--                                    <p class="item_name2">Cursus quam</p>--}}
{{--                                </div>--}}
{{--                                <div class="item_price">$25</div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="section2_item1">--}}
{{--                            <img src="{{asset('images')}}/Rectangle%205.png" alt="" class="item_img">--}}
{{--                            <div class="circle_block">--}}
{{--                                <span class="dot dot_blue"><img src="{{asset('images')}}/check.png" alt=""--}}
{{--                                                                class="check"></span>--}}
{{--                                <span class="dot dot_orange"><img src="{{asset('images')}}/wall-clock.png" alt=""--}}
{{--                                                                  class="pending"></span>--}}
{{--                                <span class="dot dot_red"><img src="{{asset('images')}}/close_white.png" alt=""--}}
{{--                                                               class="canceled"></span>--}}
{{--                            </div>--}}
{{--                            <img src="{{asset('images')}}/PencilLine.png" alt="" class="heart_img_my_profile myBtn_4">--}}
{{--                            <img src="{{asset('images')}}/close_white.png" alt="" class="product_x">--}}
{{--                            <div class="item_name_block">--}}
{{--                                <div class="item_name">--}}
{{--                                    <p class="item_name1">Cursus quam</p>--}}
{{--                                    <p class="item_name2">Cursus quam</p>--}}
{{--                                </div>--}}
{{--                                <div class="item_price">$25</div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="section2_item1">--}}
{{--                            <img src="{{asset('images')}}/Rectangle%205%20(2).png" alt="" class="item_img">--}}
{{--                            <div class="circle_block">--}}
{{--                                <span class="dot dot_blue"><img src="{{asset('images')}}/check.png" alt=""--}}
{{--                                                                class="check"></span>--}}
{{--                                <span class="dot dot_orange"><img src="{{asset('images')}}/wall-clock.png" alt=""--}}
{{--                                                                  class="pending"></span>--}}
{{--                                <span class="dot dot_red"><img src="{{asset('images')}}/close_white.png" alt=""--}}
{{--                                                               class="canceled"></span>--}}
{{--                            </div>--}}
{{--                            <img src="{{asset('images')}}/PencilLine.png" alt="" class="heart_img_my_profile myBtn_4">--}}
{{--                            <img src="{{asset('images')}}/close_white.png" alt="" class="product_x">--}}
{{--                            <div class="item_name_block">--}}
{{--                                <div class="item_name">--}}
{{--                                    <p class="item_name1">Cursus quam</p>--}}
{{--                                    <p class="item_name2">Cursus quam</p>--}}
{{--                                </div>--}}
{{--                                <div class="item_price">$25</div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    </div>
{{--                    <div class="section2_items_my_profile">--}}
{{--                        <div class="section2_item1">--}}
{{--                            <img src="{{asset('images')}}/Rectangle%205.png" alt="" class="item_img">--}}
{{--                            <div class="circle_block">--}}
{{--                                <span class="dot dot_blue"><img src="{{asset('images')}}/check.png" alt=""--}}
{{--                                                                class="check"></span>--}}
{{--                                <span class="dot dot_orange"><img src="{{asset('images')}}/wall-clock.png" alt=""--}}
{{--                                                                  class="pending"></span>--}}
{{--                                <span class="dot dot_red"><img src="{{asset('images')}}/close_white.png" alt=""--}}
{{--                                                               class="canceled"></span>--}}
{{--                            </div>--}}
{{--                            <img src="{{asset('images')}}/PencilLine.png" alt="" class="heart_img_my_profile myBtn_4">--}}
{{--                            <img src="{{asset('images')}}/close_white.png" alt="" class="product_x">--}}
{{--                            <div class="item_name_block">--}}
{{--                                <div class="item_name">--}}
{{--                                    <p class="item_name1">Cursus quam</p>--}}
{{--                                    <p class="item_name2">Cursus quam</p>--}}
{{--                                </div>--}}
{{--                                <div class="item_price">$25</div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="section2_item2">--}}
{{--                            <img src="{{asset('images')}}/Rectangle%205%20(2).png" alt="" class="item_img ">--}}
{{--                            <div class="circle_block">--}}
{{--                                <span class="dot dot_blue"><img src="{{asset('images')}}/check.png" alt=""--}}
{{--                                                                class="check"></span>--}}
{{--                                <span class="dot dot_orange"><img src="{{asset('images')}}/wall-clock.png" alt=""--}}
{{--                                                                  class="pending"></span>--}}
{{--                                <span class="dot dot_red"><img src="{{asset('images')}}/close_white.png" alt=""--}}
{{--                                                               class="canceled"></span>--}}
{{--                            </div>--}}
{{--                            <img src="{{asset('images')}}/PencilLine.png" alt="" class="heart_img_my_profile myBtn_4">--}}
{{--                            <img src="{{asset('images')}}/close_white.png" alt="" class="product_x">--}}
{{--                            <div class="item_name_block">--}}
{{--                                <div class="item_name">--}}
{{--                                    <p class="item_name1">Cursus quam</p>--}}
{{--                                    <p class="item_name2">Cursus quam</p>--}}
{{--                                </div>--}}
{{--                                <div class="item_price">$25</div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="section2_item1">--}}
{{--                            <img src="{{asset('images')}}/Rectangle%205.png" alt="" class="item_img">--}}
{{--                            <div class="circle_block">--}}
{{--                                <span class="dot dot_blue"><img src="{{asset('images')}}/check.png" alt=""--}}
{{--                                                                class="check"></span>--}}
{{--                                <span class="dot dot_orange"><img src="{{asset('images')}}/wall-clock.png" alt=""--}}
{{--                                                                  class="pending"></span>--}}
{{--                                <span class="dot dot_red"><img src="{{asset('images')}}/close_white.png" alt=""--}}
{{--                                                               class="canceled"></span>--}}
{{--                            </div>--}}
{{--                            <img src="{{asset('images')}}/PencilLine.png" alt="" class="heart_img_my_profile myBtn_4">--}}
{{--                            <img src="{{asset('images')}}/close_white.png" alt="" class="product_x">--}}
{{--                            <div class="item_name_block">--}}
{{--                                <div class="item_name">--}}
{{--                                    <p class="item_name1">Cursus quam</p>--}}
{{--                                    <p class="item_name2">Cursus quam</p>--}}
{{--                                </div>--}}
{{--                                <div class="item_price">$25</div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="section2_item1">--}}
{{--                            <img src="{{asset('images')}}/Rectangle%205%20(2).png" alt="" class="item_img">--}}
{{--                            <div class="circle_block">--}}
{{--                                <span class="dot dot_blue"><img src="{{asset('images')}}/check.png" alt=""--}}
{{--                                                                class="check"></span>--}}
{{--                                <span class="dot dot_orange"><img src="{{asset('images')}}/wall-clock.png" alt=""--}}
{{--                                                                  class="pending"></span>--}}
{{--                                <span class="dot dot_red"><img src="{{asset('images')}}/close_white.png" alt=""--}}
{{--                                                               class="canceled"></span>--}}
{{--                            </div>--}}
{{--                            <img src="{{asset('images')}}/PencilLine.png" alt="" class="heart_img_my_profile myBtn_4">--}}
{{--                            <img src="{{asset('images')}}/close_white.png" alt="" class="product_x">--}}
{{--                            <div class="item_name_block">--}}
{{--                                <div class="item_name">--}}
{{--                                    <p class="item_name1">Cursus quam</p>--}}
{{--                                    <p class="item_name2">Cursus quam</p>--}}
{{--                                </div>--}}
{{--                                <div class="item_price">$25</div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="section2_items_my_profile">--}}
{{--                        <div class="section2_item1">--}}
{{--                            <img src="{{asset('images')}}/Rectangle%205.png" alt="" class="item_img">--}}
{{--                            <div class="circle_block">--}}
{{--                                <span class="dot dot_blue"><img src="{{asset('images')}}/check.png" alt=""--}}
{{--                                                                class="check"></span>--}}
{{--                                <span class="dot dot_orange"><img src="{{asset('images')}}/wall-clock.png" alt=""--}}
{{--                                                                  class="pending"></span>--}}
{{--                                <span class="dot dot_red"><img src="{{asset('images')}}/close_white.png" alt=""--}}
{{--                                                               class="canceled"></span>--}}
{{--                            </div>--}}
{{--                            <img src="{{asset('images')}}/PencilLine.png" alt="" class="heart_img_my_profile myBtn_4">--}}
{{--                            <img src="{{asset('images')}}/close_white.png" alt="" class="product_x">--}}
{{--                            <div class="item_name_block">--}}
{{--                                <div class="item_name">--}}
{{--                                    <p class="item_name1">Cursus quam</p>--}}
{{--                                    <p class="item_name2">Cursus quam</p>--}}
{{--                                </div>--}}
{{--                                <div class="item_price">$25</div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="section2_item2">--}}
{{--                            <img src="{{asset('images')}}/Rectangle%205%20(2).png" alt="" class="item_img ">--}}
{{--                            <div class="circle_block">--}}
{{--                                <span class="dot dot_blue"><img src="{{asset('images')}}/check.png" alt=""--}}
{{--                                                                class="check"></span>--}}
{{--                                <span class="dot dot_orange"><img src="{{asset('images')}}/wall-clock.png" alt=""--}}
{{--                                                                  class="pending"></span>--}}
{{--                                <span class="dot dot_red"><img src="{{asset('images')}}/close_white.png" alt=""--}}
{{--                                                               class="canceled"></span>--}}
{{--                            </div>--}}
{{--                            <img src="{{asset('images')}}/PencilLine.png" alt="" class="heart_img_my_profile myBtn_4">--}}
{{--                            <img src="{{asset('images')}}/close_white.png" alt="" class="product_x">--}}
{{--                            <div class="item_name_block">--}}
{{--                                <div class="item_name">--}}
{{--                                    <p class="item_name1">Cursus quam</p>--}}
{{--                                    <p class="item_name2">Cursus quam</p>--}}
{{--                                </div>--}}
{{--                                <div class="item_price">$25</div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="section2_item1">--}}
{{--                            <img src="{{asset('images')}}/Rectangle%205.png" alt="" class="item_img">--}}
{{--                            <div class="circle_block">--}}
{{--                                <span class="dot dot_blue"><img src="{{asset('images')}}/check.png" alt=""--}}
{{--                                                                class="check"></span>--}}
{{--                                <span class="dot dot_orange"><img src="{{asset('images')}}/wall-clock.png" alt=""--}}
{{--                                                                  class="pending"></span>--}}
{{--                                <span class="dot dot_red"><img src="{{asset('images')}}/close_white.png" alt=""--}}
{{--                                                               class="canceled"></span>--}}
{{--                            </div>--}}
{{--                            <img src="{{asset('images')}}/PencilLine.png" alt="" class="heart_img_my_profile myBtn_4">--}}
{{--                            <img src="{{asset('images')}}/close_white.png" alt="" class="product_x">--}}
{{--                            <div class="item_name_block">--}}
{{--                                <div class="item_name">--}}
{{--                                    <p class="item_name1">Cursus quam</p>--}}
{{--                                    <p class="item_name2">Cursus quam</p>--}}
{{--                                </div>--}}
{{--                                <div class="item_price">$25</div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="section2_item1">--}}
{{--                            <img src="{{asset('images')}}/Rectangle%205%20(2).png" alt="" class="item_img">--}}
{{--                            <div class="circle_block">--}}
{{--                                <span class="dot dot_blue"><img src="{{asset('images')}}/check.png" alt=""--}}
{{--                                                                class="check"></span>--}}
{{--                                <span class="dot dot_orange"><img src="{{asset('images')}}/wall-clock.png" alt=""--}}
{{--                                                                  class="pending"></span>--}}
{{--                                <span class="dot dot_red"><img src="{{asset('images')}}/close_white.png" alt=""--}}
{{--                                                               class="canceled"></span>--}}
{{--                            </div>--}}
{{--                            <img src="{{asset('images')}}/PencilLine.png" alt="" class="heart_img_my_profile myBtn_4">--}}
{{--                            <img src="{{asset('images')}}/close_white.png" alt="" class="product_x">--}}
{{--                            <div class="item_name_block">--}}
{{--                                <div class="item_name">--}}
{{--                                    <p class="item_name1">Cursus quam</p>--}}
{{--                                    <p class="item_name2">Cursus quam</p>--}}
{{--                                </div>--}}
{{--                                <div class="item_price">$25</div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>
            </div>
        </div>
    </div>
    <div>
    </div>
</div>

<script src="{{asset('js/profile.js')}}"></script>
</body>
</html>
