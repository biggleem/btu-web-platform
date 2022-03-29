<div id="myModal_addNewProduct" class="modal" style="z-index:2">
    <!-- Modal content -->
    <div class="modal-content">
        <div class="modal_content_all">
            <div class="modal-content_section1">
                <div class="close_modal_border1">
                    <div class="close_modal_border_inner">
                        <span class="close_modal_addNewProduct">&times;</span>
                    </div>
                </div>
                <div class="admin_add_products_section">
                    <h1 class="add_product_title">Set deal to BTUBTU ?</h1>
                    <input type="text" placeholder="Product’s name" id="productname" class="add_product_input">
                    <select placeholder="Category" class="add_product_input" id="categoriesselect">
                        <option value="0" class="" selected disabled>Category</option>
                        {{--                        <option value="0" class="">HOMEGOODS</option>--}}
                        {{--                        <option value="1" class="">FACE AND HAIR</option>--}}
                        {{--                        <option value="2" class="">EDIBLES</option>--}}
                        {{--                        <option value="3" class="">AMAZON HURRIES</option>--}}
                        {{--                        <option value="4" class="">WYDTYN</option>--}}
                    </select>
                    <input type="number" id="productidforchange" style="display: none">
                    <input type="text" placeholder="Price" class="add_product_input" id="productprice">
                    <input type="text" placeholder="Sale" class="add_product_input" id="productsale">
                    <input type="text" placeholder="link" class="add_product_input" id="productlink">
                    <form action="">
                        <textarea name=""  cols="100" rows="7" class="add_product_input_textarea" placeholder="Description" id="productdescription"></textarea >
                    </form>
                    <div class="download_photo_block">
                        <div class="download_photo_block_inner">
                            <img src="{{asset('images/photodownload.png')}}" alt="" class="download_photo_photo">
                            <input
                                id="upload_input"
                                type="file"
                                name="images[]"
                                style="display:none"
                                multiple="multiple"
                                data-regex="image"
                                data-max-mb-size=3
                            />

                            <button class="download_photo_button">Upload image</button>
                            {{--        <a href="" class="drop_photo">Or Drop photo here</a>--}}
                            <p id="uploadimagecounter">0 files selected</p>
                            <p id="uploadimageerror" style="display: none; color:red"></p>
                        </div>
                    </div>
                    <button class="add_product_button">Add product</button>
                    <p id="createproducterror" style="display: none; color:red"></p>
                </div>
            </div>
        </div>
    </div>
    <div>
    </div>
</div>
