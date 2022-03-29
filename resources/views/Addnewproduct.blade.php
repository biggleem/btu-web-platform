@include('layouts/header')
<body>
@include('layouts/navigation')

<div class="container">
    <div class="add_products_section">
       <h1 class="add_product_title">Set deal to BTUBTU ?</h1>
        <input type="text" placeholder="Product’s name" class="add_product_input" id="productname">
        <select placeholder="Category" class="add_product_input" id="categoriesselect">
            <option value="0" class="" selected disabled>Category</option>
{{--            <option value="0" class="" >HOMEGOODS</option>--}}
{{--            <option value="1" class="">FACE AND HAIR</option>--}}
{{--            <option value="2" class="">EDIBLES</option>--}}
{{--            <option value="3" class="">AMAZON HURRIES</option>--}}
{{--            <option value="4" class="">WYDTYN</option>--}}
        </select>
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
@include('layouts/footer')
{{--<script src="{{asset('js/index.js')}}"></script>--}}
<script src="{{asset('js/newProduct.js')}}"></script>


</body>
</html>
