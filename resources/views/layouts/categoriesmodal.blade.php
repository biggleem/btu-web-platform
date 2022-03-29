<div id="myModal" class="modal">
    <!-- Modal content -->
    <div class="modal-content">
        <div class="modal_content_all">
            <div class="modal-content_section1">
                <span class="close_modal"></span>  <!--&times;-->
                <div class="Modal_content_img_block" id="productModal_content_img_block">
                    <div class="row">
                        <div class="column">
                            <img src="{{asset('images/Rectangle%205.png')}}" class="column_img">
                        </div>
                        <div class="column">
                            <img src="{{asset('images/img_slideshow_big_img.jpg')}}" class="column_img">
                        </div>
                        <div class="column">
                            <img src="{{asset('images/img_slideshow_big_img.jpg')}}" class="column_img">
                        </div>
                        <div class="column">
                            <img src="{{asset('images/img_slideshow_big_img.jpg')}}" class="column_img">
                        </div>
                        <div class="column">
                            <img src="{{asset('images/Rectangle%205.png')}}" class="column_img">
                        </div>
                    </div>

                    <div class="img_gallery">
                        <img id="expandedImg" class="img_gallery_img" src="{{asset('images/Rectangle%205.png')}}"
                             style="width:100%">    <!--src="img_slideshow_big_img.jpg"-->
                    </div>
                </div>
                <div class="modal_title_block">
                    <div CLASS="modal_title_block-inner">
                        <h1 class="modal_title" id="productmodal_title">Lorem ipsum dolor</h1>
                        {{--                        <p class="modal_title2">consectetur adipiscing elit</p>--}}
                        <h1 class="modal_item_price" id="productmodal_item_price">$ 600</h1>
                        <p class="modal_title3" id="productmodal_title3">From <span>Liberty</span></p>
                        <hr class="hr">

                        <div class="modal_description_block">
                            <p class="modal_description_details">Details:</p>
                            <p class="modal_description" id="productmodal_description">Lorem ipsum dolor sit amet,
                                consectetur adipiscing elit. Malesuada
                                sit aenean nulla diam. Pharetra in neque
                                eu tempus ac hendrerit massa rhoncus dictum.
                                Ipsum accumsan at tincidunt consectetur ante
                                massa urna. Arcu nisi, nam scelerisque lobortis
                                eget habitant nam.</p>
                        </div>
                        <div class="button_">
                            <a href="{{route('gotopage')}}" class="shop_now" id="productshop_now">Shop now</a>
                        </div>
                    </div>
                </div>
            </div>
            @include('layouts/categoriesmodalcomments')
        </div>
    </div>
</div>
