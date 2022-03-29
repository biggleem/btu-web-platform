@include('layouts/adminhead')
<body class="body_admin_dashboard">
@include('layouts/adminheader')
@include('layouts/adminsidebar')
<input type="number" id="categoryId" value="<?=$category?>" style="display: none" disabled>
{{--<div class="container_save_category">--}}
{{--    <a href="" class="save_category_button">Save Category</a>--}}
{{--</div>--}}
<div class="Admin_homeGoods_section1">
    <img src="{{asset('images/mainImages/'.$categorypage.'.png')}}" alt="" class="admin_categories_img">
    <img src="{{asset('images')}}/Camera.png" alt="" class="add_img_category">
    <span class="homeGoods_title"><?=$title?></span>
    <input type="file" id="dashpicker" style="display: none" accept=".jpg, .jpeg, .png">
</div>
<div class="AdminPanel_section2">
    <div class="homeGoods_section2_1">
        <p class="filter_by">Filter by</p>
        <div class="filtered_category">
            <div>
                <button class="accordion">
                    <span>Sales</span>
                </button>
                <div class="panel" id="salespanel">
{{--                    <div class="admin_new_category_panel">--}}
{{--                        <label class="sale_discount">No discount--}}
{{--                            <input type="checkbox" checked="checked">--}}
{{--                            <span class="checkmark"></span>--}}
{{--                        </label>--}}
{{--                        <img src="{{asset('images')}}/X.png" alt="">--}}
{{--                    </div>--}}
{{--                    <div class="admin_new_category_panel">--}}
{{--                        <label class="sale_discount">up to 30%--}}
{{--                            <input type="checkbox">--}}
{{--                            <span class="checkmark"></span>--}}
{{--                        </label>--}}
{{--                        <img src="{{asset('images')}}/X.png" alt="">--}}
{{--                    </div>--}}
{{--                    <div class="admin_new_category_panel">--}}
{{--                        <label class="sale_discount"> 30%-50%--}}
{{--                            <input type="checkbox">--}}
{{--                            <span class="checkmark"></span>--}}
{{--                        </label>--}}
{{--                        <img src="{{asset('images')}}/X.png" alt="">--}}
{{--                    </div>--}}
{{--                    <div class="admin_new_category_panel">--}}
{{--                        <label class="sale_discount">50%-60%--}}
{{--                            <input type="checkbox">--}}
{{--                            <span class="checkmark"></span>--}}
{{--                        </label>--}}
{{--                        <img src="{{asset('images')}}/X.png" alt="">--}}
{{--                    </div>--}}
{{--                    <div class="admin_new_category_panel">--}}
{{--                        <label class="sale_discount">+60%--}}
{{--                            <input type="checkbox">--}}
{{--                            <span class="checkmark"></span>--}}
{{--                        </label>--}}
{{--                        <img src="{{asset('images')}}/X.png" alt="">--}}
{{--                    </div>--}}
                    <div class="admin_new_category_panel">
                        <img src="{{asset('images')}}/plus_admin_panel.png" alt="" class="accordion_plus myBtn_6">
                    </div>
                </div>
            </div>
            <button class="accordion">
                <span>Price</span>
            </button>
            <div class="panel">
                <div class="input_money_block">
                    <input type="text" class="input_money" id="firstmoney" placeholder="$25">
                    <input type="text" class="input_money" id="secondmoney" placeholder="$250">
                </div>
                <div class="panel_sampleSlider" id="rSliderParent">

                </div>
            </div>

            <button class="accordion">
                <span>Subcategory</span>
            </button>
            <div class="panel" id="subpanel">
{{--                <div class="admin_new_category_panel">--}}
{{--                    <label class="sale_discount">------------}}
{{--                        <input type="checkbox" checked="checked">--}}
{{--                        <span class="checkmark"></span>--}}
{{--                    </label>--}}
{{--                    <img src="{{asset('images')}}/X.png" alt="">--}}
{{--                </div>--}}
{{--                <div class="admin_new_category_panel">--}}
{{--                    <label class="sale_discount">-----------}}
{{--                        <input type="checkbox">--}}
{{--                        <span class="checkmark"></span>--}}
{{--                    </label>--}}
{{--                    <img src="{{asset('images')}}/X.png" alt="">--}}
{{--                </div>--}}
{{--                <div class="admin_new_category_panel">--}}
{{--                    <label class="sale_discount"> --------------}}
{{--                        <input type="checkbox">--}}
{{--                        <span class="checkmark"></span>--}}
{{--                    </label>--}}
{{--                    <img src="{{asset('images')}}/X.png" alt="">--}}
{{--                </div>--}}
{{--                <div class="admin_new_category_panel">--}}
{{--                    <label class="sale_discount">--------------}}
{{--                        <input type="checkbox">--}}
{{--                        <span class="checkmark"></span>--}}
{{--                    </label>--}}
{{--                    <img src="{{asset('images')}}/X.png" alt="">--}}
{{--                </div>--}}
{{--                <div class="admin_new_category_panel">--}}
{{--                    <label class="sale_discount">------------}}
{{--                        <input type="checkbox">--}}
{{--                        <span class="checkmark"></span>--}}
{{--                    </label>--}}
{{--                    <img src="{{asset('images')}}/X.png" alt="">--}}
{{--                </div>--}}
                <div class="admin_new_category_panel">
                    <img src="{{asset('images')}}/plus_admin_panel.png" alt="" class="accordion_plus myBtn_sub">
                </div>
            </div>
        </div>
    </div>
    <div class="homeGoods_section2_2">
        <div class="homeGoods_section2_2_block1">

        </div>
        <div class="pagination_block">
            <div class="pagination" id="paginationblock">
                {{--        <a href="#">&laquo;</a>--}}
                {{--        <a href="#">1</a>--}}
                {{--        <a href="#">2</a>--}}
                {{--        <a href="#">3</a>--}}
                {{--        <a href="#">&raquo;</a>--}}
            </div>
        </div>

    </div>
</div>


@include('layouts/categoriesmodal')
<div id="myModal_accordionItemAdd" class="modal">
    <!-- Modal content -->
    <div class="modal-content_accordion_modal">
        <div class="modal_content_all">
            <div class="modal-content_accordion">
                <span class=""></span>
                <div class="admin_new_category_panel_modal">
                    <input type="number"class="sale_discount_input" id="sale_disc_1">
                    <input type="number" class="sale_discount_input1" id="sale_disc_2">
                </div>
            </div>
            <button class="accordion_add_save_button" id="createnewsale">Save</button>
        </div>
    </div>
</div>
<div id="myModal_accordionSubcategoryAdd" class="modal">
    <!-- Modal content -->
    <div class="modal-content_accordion_modal">
        <div class="modal_content_all">
            <div class="modal-content_accordion">
                <span class=""></span>
                <div class="admin_new_category_panel_modal">
                    <input type="text" class="subCategory_input" id="sub_input">


                </div>
            </div>
            <button class="accordion_add_save_button" id="createnewsub">Save</button>
        </div>
    </div>
</div>
</div>
<script src="{{asset('js/admin/admincategories.js')}}"></script>
</body>
</html>
