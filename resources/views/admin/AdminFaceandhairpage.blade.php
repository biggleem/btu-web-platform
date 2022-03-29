<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <title>Admin_Face_and_Hair_Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../assets/styles/style.css"/>
    <link rel="stylesheet" href="../../assets/styles/responsive.css"/>
</head>
<body class="body_admin_dashboard">
<div class="header_admin">
    <nav class="header_container_admin">
        <div class="buttons_box">
            <div class="dropdown">
                <button class="Bell_img dropbtn">
                    <img src="../../assets/images/BellSimple.png" alt="">
                </button>
                <div class="dropdown-content myDropdown">
                    <div class="dropdown_content_block">
                        <span class="notification_title">New notifications</span>
                        <div class="dropdown_notification_block myBtn_1">
                            <img src="../../assets/images/Avatar%2040x40.png" alt=""
                                 class="dropdown_notification_block_img">
                            <div class="dropdown_notification_block_text">
                                <span class="dropdown_notification_block_text1"><span>salondre</span>added a new product</span>
                                <span class="dropdown_notification_block_text2">2 week ago</span>
                            </div>
                        </div>
                    </div>
                    <hr class="dropdown_notification_block_line">
                    <div class="dropdown_notification_block_2 myBtn_1">
                        <img src="../../assets/images/Avatar%2040x40.png" alt=""
                             class="dropdown_notification_block_img">
                        <div class="dropdown_notification_block_text">
                            <span class="dropdown_notification_block_text1"><span>salondre</span>added a new product</span>
                            <span class="dropdown_notification_block_text2">2 week ago</span>
                        </div>
                    </div>
                    <hr class="dropdown_notification_block_line">
                    <div class="dropdown_notification_block_2 myBtn_1">
                        <img src="../../assets/images/Avatar%2040x40.png" alt=""
                             class="dropdown_notification_block_img">
                        <div class="dropdown_notification_block_text">
                            <span class="dropdown_notification_block_text1"><span>salondre</span>added a new product</span>
                            <span class="dropdown_notification_block_text2">2 week ago</span>
                        </div>
                    </div>
                    <hr class="dropdown_notification_block_line">
                    <div class="dropdown_notification_block_2 myBtn_1">
                        <img src="../../assets/images/Avatar%2040x40.png" alt=""
                             class="dropdown_notification_block_img">
                        <div class="dropdown_notification_block_text">
                            <span class="dropdown_notification_block_text1"><span>salondre</span>added a new product</span>
                            <span class="dropdown_notification_block_text2">2 week ago</span>
                        </div>
                    </div>
                    <div></div>
                </div>


            </div>
            <a class="sign_out_img" href="../AdminPanel/AdminPanelLogin.html">
                <img src="../../assets/images/SignOut.png" alt="">
            </a>
        </div>
    </nav>
</div>
<div class="sidebar">
    <div class="sidebar_container1">
        <a href="../AdminPanel/AdminDashboard.html">
            <img src="../../assets/images/logo.png" alt="" class="logo">
        </a>
        <div class="sidebar_menu_block">
            <a class="sidebar_menu_block_item" href="../../Pages/AdminPanel/AdminDashboard.html">DashBoard</a>
            <hr class="line_admin_dashboard">
            <a href="AdminAllProducts.blade.php" class="sidebar_menu_block_item">All Products</a>
            <hr class="line_admin_dashboard">
            <a href="AdminMyProducts.blade.php" class="sidebar_menu_block_item">My Products</a>
            <hr class="line_admin_dashboard">
            <a href="AdminNotifications.blade.php" class="sidebar_menu_block_item">Notifications</a>
            <hr class="line_admin_dashboard">
            <a class="accordion_admin_dashboard sidebar_menu_block_item">Categories</a>
            <div class="panel_admin_dashboard">
                <div class="panel_admin_dashboard_inner">
                    <a href="../../Pages/AdminPanel/AdminHomegoodspage.html" class="panel_admin_dashboard_item">Homegoods</a>
                    <a href="../AdminPanel/AdminFaceandhairpage.html" class="panel_admin_dashboard_item">Face and
                        Hair</a>
                    <a href="../AdminPanel/AdminEdiblepage.html" class="panel_admin_dashboard_item">Edibles</a>
                    <a href="../AdminPanel/AdminAmazonHurriespage.html" class="panel_admin_dashboard_item">Amazon
                        hurries</a>
                    <a href="../AdminPanel/AdminWYDTYNpage.html" class="panel_admin_dashboard_item">WYDTYN</a>
                </div>
            </div>
            <hr class="line_admin_dashboard">
        </div>
    </div>
    <div class="sidebar_container2">
        <div class="sidebar_container2">
            <div class="sidebar_menu_block_2">
                <a href="../../Pages/AdminPanel/AdminMyProfile.html" class="sidebar_menu_block2_item">My Profile</a>
                <a href="../../Pages/AdminPanel/AdminFAQ,S.html" class="sidebar_menu_block2_item">Faq's</a>
                <a href="../../Pages/AdminPanel/AdminTermsandPolicy.html" class="sidebar_menu_block2_item">Terms and
                    policy</a>
            </div>
        </div>
    </div>
</div>

<div class="container_save_category">
    <a href="" class="save_category_button">Save Category</a>
</div>
<div class="Admin_homeGoods_section1">
    <img src="../../assets/images/Face%20and%20Hair.png" alt="" class="admin_categories_img">
    <img src="../../assets/images/Camera.png" alt="" class="add_img_category">
    <span class="homeGoods_title">Face and Hair</span>
</div>
<div class="AdminPanel_section2">
    <div class="homeGoods_section2_1">
        <p class="filter_by">Filter by</p>
        <div class="filtered_category">
            <div>
                <button class="accordion">
                    <span>Sales</span>
                </button>
                <div class="panel">
                    <div class="admin_new_category_panel">
                        <label class="sale_discount">No discount
                            <input type="checkbox" checked="checked">
                            <span class="checkmark"></span>
                        </label>
                        <img src="../../assets/images/X.png" alt="">
                    </div>
                    <div class="admin_new_category_panel">
                        <label class="sale_discount">up to 30%
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <img src="../../assets/images/X.png" alt="">
                    </div>
                    <div class="admin_new_category_panel">
                        <label class="sale_discount"> 30%-50%
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <img src="../../assets/images/X.png" alt="">
                    </div>
                    <div class="admin_new_category_panel">
                        <label class="sale_discount">50%-60%
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <img src="../../assets/images/X.png" alt="">
                    </div>
                    <div class="admin_new_category_panel">
                        <label class="sale_discount">+60%
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <img src="../../assets/images/X.png" alt="">
                    </div>
                    <div class="admin_new_category_panel">
                        <img src="../../assets/images/plus_admin_panel.png" alt="" class="accordion_plus myBtn_6">
                    </div>
                </div>
            </div>
            <button class="accordion">
                <span>Price</span>
            </button>
            <div class="panel">
                <div class="input_money_block">
                    <input type="text" class="input_money" placeholder="$25">
                    <input type="text" class="input_money" placeholder="$250">
                </div>
                <div class="panel_sampleSlider" id="rSliderParent">

                </div>
            </div>

            <button class="accordion">
                <span>Subcategory</span>
            </button>
            <div class="panel">
                <div class="admin_new_category_panel">
                    <label class="sale_discount">----------
                        <input type="checkbox" checked="checked">
                        <span class="checkmark"></span>
                    </label>
                    <img src="../../assets/images/X.png" alt="">
                </div>
                <div class="admin_new_category_panel">
                    <label class="sale_discount">---------
                        <input type="checkbox">
                        <span class="checkmark"></span>
                    </label>
                    <img src="../../assets/images/X.png" alt="">
                </div>
                <div class="admin_new_category_panel">
                    <label class="sale_discount"> ------------
                        <input type="checkbox">
                        <span class="checkmark"></span>
                    </label>
                    <img src="../../assets/images/X.png" alt="">
                </div>
                <div class="admin_new_category_panel">
                    <label class="sale_discount">------------
                        <input type="checkbox">
                        <span class="checkmark"></span>
                    </label>
                    <img src="../../assets/images/X.png" alt="">
                </div>
                <div class="admin_new_category_panel">
                    <label class="sale_discount">----------
                        <input type="checkbox">
                        <span class="checkmark"></span>
                    </label>
                    <img src="../../assets/images/X.png" alt="">
                </div>
                <div class="admin_new_category_panel">
                    <img src="../../assets/images/plus_admin_panel.png" alt="" class="accordion_plus myBtn_6">
                </div>
            </div>
        </div>
    </div>
    <div class="homeGoods_section2_2">
        <div class="homeGoods_section2_2_block1">
            <div class="section2_item1 ">
                <img src="../../assets/images/Rectangle%205.png" alt="" class="item_img myBtn">
                <i onclick="myFunction(this)" class="fa fa-heart-o heart_img" aria-hidden="true"></i>
                <div class="item_name_block">
                    <div class="item_name">
                        <p class="item_name1">Cursus quam</p>
                        <p class="item_name2">Cursus quam</p>
                    </div>
                    <div class="item_price">$25</div>
                </div>
            </div>
            <div class="section2_item1 ">
                <img src="../../assets/images/Rectangle%205.png" alt="" class="item_img myBtn">
                <i onclick="myFunction(this)" class="fa fa-heart-o heart_img" aria-hidden="true"></i>
                <div class="item_name_block">
                    <div class="item_name">
                        <p class="item_name1">Cursus quam</p>
                        <p class="item_name2">Cursus quam</p>
                    </div>
                    <div class="item_price">$25</div>
                </div>
            </div>
            <div class="section2_item2">
                <img src="../../assets/images/Rectangle%205.png" alt="" class="item_img myBtn">
                <i onclick="myFunction(this)" class="fa fa-heart-o heart_img" aria-hidden="true"></i>
                <div class="sale">
                    <img src="../../assets/images/Clock.png" alt="" class="clock">
                    <div class="day_sale">
                        <div>Only 3 days</div>
                        <div>-30%</div>
                    </div>
                </div>
                <div class="item_name_block">
                    <div class="item_name">
                        <p class="item_name1">Cursus quam</p>
                        <p class="item_name2">Cursus quam</p>
                    </div>
                    <div class="item_price">$25</div>
                </div>
            </div>
            <div class="section2_item2">
                <img src="../../assets/images/Rectangle%205%20(2).png" alt="" class="item_img myBtn">
                <i onclick="myFunction(this)" class="fa fa-heart-o heart_img" aria-hidden="true"></i>
                <div class="sale">
                    <img src="../../assets/images/Clock.png" alt="" class="clock">
                    <div class="day_sale">
                        <div>Only 3 days</div>
                        <div>-30%</div>
                    </div>
                </div>
                <div class="item_name_block">
                    <div class="item_name">
                        <p class="item_name1">Cursus quam</p>
                        <p class="item_name2">Cursus quam</p>
                    </div>
                    <div class="item_price">$25</div>
                </div>
            </div>
            <div class="section2_item1">
                <img src="../../assets/images/Rectangle%205%20(2).png" alt="" class="item_img myBtn">
                <i onclick="myFunction(this)" class="fa fa-heart-o heart_img" aria-hidden="true"></i>
                <div class="item_name_block">
                    <div class="item_name">
                        <p class="item_name1">Cursus quam</p>
                        <p class="item_name2">Cursus quam</p>
                    </div>
                    <div class="item_price">$25</div>
                </div>
            </div>
            <div class="section2_item1">
                <img src="../../assets/images/Rectangle%205%20(2).png" alt="" class="item_img myBtn">
                <i onclick="myFunction(this)" class="fa fa-heart-o heart_img" aria-hidden="true"></i>
                <div class="item_name_block">
                    <div class="item_name">
                        <p class="item_name1">Cursus quam</p>
                        <p class="item_name2">Cursus quam</p>
                    </div>
                    <div class="item_price">$25</div>
                </div>
            </div>
            <div class="section2_item1">
                <img src="../../assets/images/Rectangle%205%20(2).png" alt="" class="item_img myBtn">
                <i onclick="myFunction(this)" class="fa fa-heart-o heart_img" aria-hidden="true"></i>
                <div class="item_name_block">
                    <div class="item_name">
                        <p class="item_name1">Cursus quam</p>
                        <p class="item_name2">Cursus quam</p>
                    </div>
                    <div class="item_price">$25</div>
                </div>
            </div>
            <div class="section2_item1">
                <img src="../../assets/images/Rectangle%205%20(2).png" alt="" class="item_img myBtn">
                <i onclick="myFunction(this)" class="fa fa-heart-o heart_img" aria-hidden="true"></i>
                <div class="item_name_block">
                    <div class="item_name">
                        <p class="item_name1">Cursus quam</p>
                        <p class="item_name2">Cursus quam</p>
                    </div>
                    <div class="item_price">$25</div>
                </div>
            </div>
            <div class="section2_item2 ">
                <img src="../../assets/images/Rectangle%205%20(2).png" alt="" class="item_img myBtn">
                <i onclick="myFunction(this)" class="fa fa-heart-o heart_img" aria-hidden="true"></i>
                <div class="sale">
                    <img src="../../assets/images/Clock.png" alt="" class="clock">
                    <div class="day_sale">
                        <div>Only 3 days</div>
                        <div>-30%</div>
                    </div>
                </div>
                <div class="item_name_block">
                    <div class="item_name">
                        <p class="item_name1">Cursus quam</p>
                        <p class="item_name2">Cursus quam</p>
                    </div>
                    <div class="item_price">$25</div>
                </div>
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
    </div>
</div>

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
                            <img src="../../assets/images/Rectangle%205.png" class="column_img"
                            >
                        </div>
                        <div class="column">
                            <img src="../../assets/images/img_slideshow_big_img.jpg" class="column_img"
                            >
                        </div>
                        <div class="column">
                            <img src="../../assets/images/img_slideshow_big_img.jpg" class="column_img"
                            >
                        </div>
                        <div class="column">
                            <img src="../../assets/images/img_slideshow_big_img.jpg" class="column_img"
                            >
                        </div>
                        <div class="column">
                            <img src="../../assets/images/Rectangle%205.png" class="column_img"
                            >
                        </div>
                    </div>

                    <div class="img_gallery">
                        <img id="expandedImg_1" class="img_gallery_img" src="../../assets/images/Rectangle%205.png"
                             style="width:100%">
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
                <a href=""><img src="../../assets/images/icons8-ok-96.png" alt=""></a>
            </div>
        </div>
    </div>
    <div>
    </div>
</div>
<div id="myModal" class="modal">
    <!-- Modal content -->
    <div class="modal-content">
        <div class="modal_content_all">
            <div class="modal-content_section1">
                <span class="close_modal"></span>  <!--&times;-->
                <div class="Modal_content_img_block">
                    <div class="row">
                        <div class="column">
                            <img src="../../assets/images/Rectangle%205.png" class="column_img"
                            >
                        </div>
                        <div class="column">
                            <img src="../../assets/images/img_slideshow_big_img.jpg" class="column_img"
                            >
                        </div>
                        <div class="column">
                            <img src="../../assets/images/img_slideshow_big_img.jpg" class="column_img"
                            >
                        </div>
                        <div class="column">
                            <img src="../../assets/images/img_slideshow_big_img.jpg" class="column_img"
                            >
                        </div>
                        <div class="column">
                            <img src="../../assets/images/Rectangle%205.png" class="column_img"
                            >
                        </div>
                    </div>

                    <div class="img_gallery">
                        <img id="expandedImg" class="img_gallery_img" src="../../assets/images/Rectangle%205.png"
                             style="width:100%">
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
                            <p class="modal_description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Malesuada sit aenean nulla diam. Pharetra in neque eu
                                tempus ac hendrerit massa rhoncus dictum. Ipsum accumsan
                                at tincidunt consectetur ante massa urna. Arcu nisi,
                                nam scelerisque lobortis eget habitant nam.</p>
                        </div>
                        <div class="button_">
                            <a href="../Pages/productpagewait.html" class="shop_now">Shop now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="feedback_block">
                <span class="feedback_block_title">Enter your feedback here</span>
                <div class="feedback_block_section1">
                    <div class="feedback_block_inner">
                        <select class="select_opinion">
                            <option value="0" class="option_opinion">Positive</option>
                            <option value="1" class="option_opinion">Negative</option>
                        </select>
                        <div class="feedback_block_title_desc">
                            <textarea placeholder="" cols="100" rows="6" class="feedback_textarea">      </textarea>
                            <div class="feedback_block_buttons">
                                <button class="feedback_block_button_send">Send</button>
                                <button class="feedback_block_button_cancel">Clear</button>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="accordion_feedbacks">
                    <span>See all feedbacks</span>
                </button>
                <div class="panel_feedbacks">
                    <div class="feedback_blocks">
                        <div class="feedback_block_positive">
                            <div class="positive_opinion">
                                <div class="opinion_author_name_block">
                                    <span class="opinion_author">Jack Jackson</span>
                                    <img src="../assets/images/possitive.png" alt="">
                                </div>
                                <div class="opinion_author_opinion">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        Facilisi sit neque, senectus tristique. Integer bibendum
                                        cras facilisi velit erat dictumst. Pretium venenatis,
                                        varius commodo lorem in sem eget. Vivamus vitae,
                                        morbi mattis dignissim et at arcu, nunc.</p>
                                </div>
                                <hr class="feedback_line">
                            </div>
                            <div class="positive_opinion">
                                <div class="opinion_author_name_block">
                                    <span class="opinion_author">Jack Jackson</span>
                                    <img src="../assets/images/possitive.png" alt="">
                                </div>
                                <div class="opinion_author_opinion">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        Facilisi sit neque, senectus tristique. Integer bibendum
                                        cras facilisi velit erat dictumst. Pretium venenatis,
                                        varius commodo lorem in sem eget. Vivamus vitae,
                                        morbi mattis dignissim et at arcu, nunc.</p>
                                </div>
                                <hr class="feedback_line">
                            </div>
                            <div class="positive_opinion">
                                <div class="opinion_author_name_block">
                                    <span class="opinion_author">Jack Jackson</span>
                                    <img src="../assets/images/possitive.png" alt="">
                                </div>
                                <div class="opinion_author_opinion">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        Facilisi sit neque, senectus tristique. Integer bibendum
                                        cras facilisi velit erat dictumst. Pretium venenatis,
                                        varius commodo lorem in sem eget. Vivamus vitae,
                                        morbi mattis dignissim et at arcu, nunc.</p>
                                </div>
                                <hr class="feedback_line">
                            </div>
                        </div>
                        <div class="feedback_blocks_negative">
                            <div class="negative_opinion1">
                                <div class="opinion_author_name_block">
                                    <span class="opinion_author">Jack Jackson</span>
                                    <img src="../assets/images/negative.png" alt="">
                                </div>
                                <div class="opinion_author_opinion">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        Facilisi sit neque, senectus tristique. Integer bibendum
                                        cras facilisi velit erat dictumst. Pretium venenatis,
                                        varius commodo lorem in sem eget. Vivamus vitae,
                                        morbi mattis dignissim et at arcu, nunc.</p>
                                </div>
                                <hr class="feedback_line">
                            </div>
                            <div class="negative_opinion1">
                                <div class="opinion_author_name_block">
                                    <span class="opinion_author">Jack Jackson</span>
                                    <img src="../assets/images/negative.png" alt="">
                                </div>
                                <div class="opinion_author_opinion">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        Facilisi sit neque, senectus tristique. Integer bibendum
                                        cras facilisi velit erat dictumst. Pretium venenatis,
                                        varius commodo lorem in sem eget. Vivamus vitae,
                                        morbi mattis dignissim et at arcu, nunc.</p>
                                </div>
                                <hr class="feedback_line">
                            </div>
                            <div class="negative_opinion1">
                                <div class="opinion_author_name_block">
                                    <span class="opinion_author">Jack Jackson</span>
                                    <img src="../assets/images/negative.png" alt="">
                                </div>
                                <div class="opinion_author_opinion">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        Facilisi sit neque, senectus tristique. Integer bibendum
                                        cras facilisi velit erat dictumst. Pretium venenatis,
                                        varius commodo lorem in sem eget. Vivamus vitae,
                                        morbi mattis dignissim et at arcu, nunc.</p>
                                </div>
                                <hr class="feedback_line">
                            </div>
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
                </div>
            </div>

        </div>
    </div>
    <div>
    </div>
</div>
<div id="myModal_accordionItemAdd" class="modal">
    <!-- Modal content -->
    <div class="modal-content_accordion_modal">
        <div class="modal_content_all">
            <div class="modal-content_accordion">
                <span class=""></span>
                <div class="admin_new_category_panel_modal">
                    <label class="sale_discount">
                        <input type="checkbox">
                        <span class="checkmark"></span>
                    </label>
                    <input type="text" class="sale_discount_input">

                </div>
            </div>
            <button class="accordion_add_save_button">Save</button>
        </div>
    </div>
</div>
<script src="../../assets/js/index.js"></script>
</body>
</html>
