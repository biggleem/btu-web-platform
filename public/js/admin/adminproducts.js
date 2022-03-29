let dropBtn = document.querySelectorAll(".dropbtn");
let modal_2 = document.getElementById("myModal_2");
let modal_3 = document.getElementById("myModal_3");
let modal_addNewProduct= document.getElementById("myModal_addNewProduct");
let modal_MyProducts= document.getElementById("myModal_MyProducts");
let modal_accordionItemAdd= document.getElementById("myModal_accordionItemAdd");
let isCreating = false;

function createProduct(element){
    var mainElement = document.createElement('div');
    mainElement.classList.add('section2_item1');
    var img = document.createElement('img');
    img.src = imagepath + '/product/' + element['id'] + '_1.'+element['imageextensions'][0];
    img.classList.add('item_img', 'myBtn');
    mainElement.append(img);

    var editimg = document.createElement('img');
    editimg.src = imagepath + '/PencilLine.png';
    editimg.classList.add('heart_img', 'myBtn_4');
    editimg.addEventListener("click", function () {
        isCreating = false;
        document.getElementById('productidforchange').value = element['id'];
        document.getElementById('productname').value = element['title'];
        document.getElementById('productprice').value = element['price'];
        document.getElementById('productsale').value = element['sale'];
        document.getElementById('productlink').value = element['link'];
        document.getElementById('categoriesselect').value = element['category'];
        document.getElementById('productdescription').innerHTML = element['description'];
        modal_addNewProduct.style.display = "block";
    });
    mainElement.append(editimg);
    if(element['sale'] > 0 && element['sale'] <= 100){
        var salediv = document.createElement('div');
        salediv.classList.add('sale');
        var clockimg = document.createElement('img');
        clockimg.classList.add('clock');
        clockimg.src = imagepath+'/Clock.png';
        salediv.append(clockimg);
        var daysalediv = document.createElement('div');
        daysalediv.classList.add('day_sale');
        var percentdiv = document.createElement('div');
        percentdiv.innerHTML = '-'+element['sale']+'%';
        daysalediv.append(percentdiv);
        salediv.append(daysalediv);
        mainElement.append(salediv);
    }
    var nameblock = document.createElement('div');
    nameblock.classList.add('item_name_block');
    var namediv = document.createElement('div');
    namediv.classList.add('item_name');
    var namep = document.createElement('p');
    namep.classList.add('item_name1');
    namep.innerHTML = element['title'];
    namediv.append(namep);
    nameblock.append(namediv);
    var pricediv = document.createElement('div');
    pricediv.classList.add('item_price');
    pricediv.innerHTML = '$' + element['price'];
    nameblock.append(pricediv);
    mainElement.append(nameblock);

    return mainElement;
}

axios.get('../getUserProducts').then(request => {
    console.log(request.data);
    request.data.forEach(element=>{
        document.getElementsByClassName('admin_my_products_page_container2')[0].append(createProduct(element));
    });

}).catch(response => {
    console.log(response);
});

window.onclick = function (event) {
    if (event.target === modal) {
        modal.style.display = "none";
    }
    if (event.target === modal_1) {
        modal_1.style.display = "none";
    }
    if (event.target === modal_2) {
        modal_2.style.display = "none";
    }
    if (event.target === modal_3) {
        modal_3.style.display = "none";
    }
    if (event.target === modal_addNewProduct) {
        modal_addNewProduct.style.display = "none";
    }
    if (event.target === modal_MyProducts) {
        modal_MyProducts.style.display = "none";
    }
    if (event.target === modal_accordionItemAdd) {
        modal_accordionItemAdd.style.display = "none";
    }
    for (let i = 0; i < dropBtn.length; i++) {
        if (!dropBtn[i].contains(event.target)) {
            dropBtn[i].nextElementSibling.classList.remove("show")
        }
    }
}

let test = 10;
for (let i = 0; i < dropBtn.length; i++) {
    dropBtn[i].addEventListener("click", function () {
        dropBtn[i].nextElementSibling.classList.toggle("show");
    })
}
/*accordion*/
let acc = document.getElementsByClassName("accordion");
let i;
for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function () {
        this.classList.toggle("active");
        let panel_feedbacks = this.nextElementSibling;
        if (panel_feedbacks.style.display === "block") {
            panel_feedbacks.style.display = "none";
        } else {
            panel_feedbacks.style.display = "block";
        }
    });
}

/*accordion_feedbacks*/
let acc1 = document.getElementsByClassName("accordion_feedbacks");
let j;
for (j = 0; j < acc1.length; j++) {
    acc1[j].addEventListener("click", function () {
        this.classList.toggle("active");
        let panel = this.nextElementSibling;
        if (panel.style.display === "block") {
            panel.style.display = "none";
        } else {
            panel.style.display = "block";
        }
    });
}

/*accordion_admin_dashboard*/
let acc2 = document.getElementsByClassName("accordion_admin_dashboard");
let k;
for (k = 0; k < acc2.length; k++) {
    acc2[k].addEventListener("click", function () {
        this.classList.toggle("active");
        let panel_admin_dashboard = this.nextElementSibling;
        if (panel_admin_dashboard.style.display === "block") {
            panel_admin_dashboard.style.display = "none";
        } else {
            panel_admin_dashboard.style.display = "block";
        }
    });
}


/*modal*/
// Get the modal
let modal = document.getElementById("myModal");

// Get the button that opens the modal
let btn = document.querySelectorAll(".myBtn");

// Get the <span> element that closes the modal
let span = document.getElementsByClassName("close_modal")[0];

// When the user clicks the button, open the modal
for (let i = 0; i < btn.length; i++) {
    btn[i].addEventListener("click", function () {
        modal.style.display = "block";
    })
}

// When the user clicks on <span> (x), close the modal
span.onclick = function () {
    modal.style.display = "none";
}

/*modal 2*/

// Get the button that opens the modal
let btn1 = document.querySelectorAll(".myBtn_1");

// Get the <span> element that closes the modal
let span1 = document.getElementsByClassName("close_modal")[0];

// When the user clicks the button, open the modal
for (let i = 0; i < btn1.length; i++) {
    btn1[i].addEventListener("click", function () {
        modal_1.style.display = "block";
    })
}

// When the user clicks on <span> (x), close the modal
span1.onclick = function () {
    modal_1.style.display = "none";
}

/*modal change password*/

// Get the button that opens the modal
let btn2 = document.querySelectorAll(".myBtn_2");

// Get the <span> element that closes the modal
let span2 = document.getElementsByClassName("close_modal_change_password")[0];

// When the user clicks the button, open the modal
for (let i = 0; i < btn2.length; i++) {
    btn2[i].addEventListener("click", function () {
        modal_2.style.display = "block";
    })
}

// When the user clicks on <span> (x), close the modal
if (span2){
    span2.onclick = function () {
        modal_2.style.display = "none";
    }
}

/*modal edit profile*/

// Get the button that opens the modal
let btn3 = document.querySelectorAll(".myBtn_3");

// Get the <span> element that closes the modal
let span3 = document.getElementsByClassName("close_modal_edit_profile")[0];

// When the user clicks the button, open the modal
for (let i = 0; i < btn3.length; i++) {
    btn3[i].addEventListener("click", function () {
        modal_3.style.display = "block";
    })
}

// When the user clicks on <span> (x), close the modal
if (span3){
    span3.onclick = function () {
        modal_3.style.display = "none";
    }
}


/*modal add new product*/

// Get the button that opens the modal
let btn4 = document.querySelectorAll(".myBtn_4");

// Get the <span> element that closes the modal
let span4 = document.getElementsByClassName("close_modal_addNewProduct")[0];

// When the user clicks the button, open the modal
for (let i = 0; i < btn4.length; i++) {
    btn4[i].addEventListener("click", function () {
        modal_addNewProduct.style.display = "block";
    })
}

// When the user clicks on <span> (x), close the modal
if (span4){
    span4.onclick = function () {
        modal_addNewProduct.style.display = "none";
    }
}



/*modal My_products*/

// Get the button that opens the modal
let btn5 = document.querySelectorAll(".myBtn_5");

// Get the <span> element that closes the modal
let span5 = document.getElementsByClassName("my_products_modal_close")[0];

// When the user clicks the button, open the modal
for (let i = 0; i < btn5.length; i++) {
    btn5[i].addEventListener("click", function () {
        modal_MyProducts.style.display = "block";
    })
}

// When the user clicks on <span> (x), close the modal
if (span5){
    span5.onclick = function () {
        modal_MyProducts.style.display = "none";
    }
}


/*modal My_products*/

// Get the button that opens the modal
let btn6 = document.querySelectorAll(".myBtn_6");

// Get the <span> element that closes the modal
let span6 = document.getElementsByClassName("")[0];

// When the user clicks the button, open the modal
for (let i = 0; i < btn6.length; i++) {
    btn6[i].addEventListener("click", function () {
        modal_accordionItemAdd.style.display = "block";
    })
}

// When the user clicks on <span> (x), close the modal
if (span6){
    span6.onclick = function () {
        modal_accordionItemAdd.style.display = "none";
    }
}



// Product modal img carousel
let sliderImg = document.querySelectorAll(".column_img");
let expandImg = document.getElementById("expandedImg");
let expandImg_1 = document.getElementById("expandedImg_1");
for (let i = 0; i < sliderImg.length; i++) {
    sliderImg[i].addEventListener("click", function () {
            if (expandImg){
                expandImg.src = sliderImg[i].src;
                expandImg.parentElement.style.display = "block";

            }
            if (expandImg_1){
                expandImg_1.src = sliderImg[i].src;
                expandImg_1.parentElement.style.display = "block";
            }

        }
    )
}


/*heart*/
function myFunction(x) {
    x.classList.toggle("fa-heart");
}


/*feedbacks_block_edit*/
function myFunction2() {
    let element = document.getElementById("myDIV");
    let element2 = document.getElementById("myDIV2");
    element.classList.add("d-b");
    element2.classList.add("d-none");
    console.log('kkk')
}

/*answer_question*/
function addCode() {
    let c = document.querySelectorAll("#app div").length
    let y = c +2
    document.getElementById("app").innerHTML +=
        "<div class=\"faqs_cont_question_answer_block\" id=\"add_question_section\">\n" +
        "                <label class=\"faqs_label_question\">Question<a id=\"count\">" + y +"</a></label>\n" +
        "                <textarea name=\"\" class=\"textarea_question_block\">  </textarea>\n" +
        "                <label class=\"faqs_label_answer\">Answer<a id=\"count2\">" + y +"</a></label>\n" +
        "                <textarea name=\"\" class=\"textarea_answer_block\">  </textarea>\n" +
        "            </div>";
}

axios.get('/getallcategories').then(function (response) {
    let catselect = document.getElementById('categoriesselect');
    response.data.forEach(element => {
        let el = document.createElement('option');
        el.value = element['id'];
        el.innerText = element['categoryname'];
        catselect.append(el);
    });

    let imageinput = document.getElementById('upload_input');
    let uploadimagecounter = document.getElementById('uploadimagecounter');
    let uploadimageerror = document.getElementById('uploadimageerror');
    let createproducterror = document.getElementById('createproducterror');
    document.getElementsByClassName('download_photo_block')[0].addEventListener('click', function(){
        imageinput.click();
    });
    imageinput.addEventListener('change', function(){
        if(this.files.length > 5){
            uploadimageerror.innerHTML = 'You can\'t select more than 5 images';
            uploadimageerror.style.display = 'block';
        }
        else if(this.files.length == 0){
            uploadimageerror.innerHTML = 'You should select at least one image';
            uploadimageerror.style.display = 'block';
        }
        else{
            uploadimageerror.style.display = 'none';
        }
        uploadimagecounter.innerHTML = this.files.length + " files selected";
    });

document.getElementsByClassName('add_product_button')[0].addEventListener('click', function(){
    var name = document.getElementById('productname').value;
    var category = document.getElementById('categoriesselect').value;
    var price = document.getElementById('productprice').value;
    var sale = document.getElementById('productsale').value;
    var link = document.getElementById('productlink').value;
    var description = document.getElementById('productdescription').value;
    var images = document.getElementById('upload_input');
    var changeid = document.getElementById('productidforchange').value;

    var formData = new FormData();

    if(isCreating){
        for (var i = 0; i < images.files.length; i++) {
            var file = images.files[i];
            // Check the file type.
            if (!file.type.match('image.*')) {
                continue;
            }
            // Add the file to the request.
            formData.append('images[]', file, file.name);
        }
    }

    formData.append('name', name);
    formData.append('category', category);
    formData.append('price', price);
    formData.append('sale', sale);
    formData.append('link', link);
    formData.append('description', description);
    formData.append('_token', document.querySelector('meta[name="_token"]').content);
    formData.append('id',changeid);
    // var data = {
    //     name: name,
    //     category: category,
    //     price: price,
    //     sale: sale,
    //     link: link,
    //     description: description,
    //     // images: images.files,
    //     _token: document.querySelector('meta[name="_token"]').content
    // };
    if(isCreating){
        axios.post('/createProduct', formData).then(response =>{
            if(response.data['status'] == 'success'){
                createproducterror.style.display = 'block';
                createproducterror.color = 'green';
                createproducterror.innerHTML = 'Success!';
            }
            else{
                createproducterror.style.display = 'block';
                createproducterror.color = 'red';
                createproducterror.innerHTML = response.data['status'];
            }
            console.log(response);
        }).catch(error => {
            console.log(error);
        });
    }
    else {
        axios.post('../changeProductWithoutImages', formData).then(response => {
            if (response.data['status'] == 'success') {
                document.getElementById('createproducterror').style.display = 'block';
                document.getElementById('createproducterror').color = 'green';
                document.getElementById('createproducterror').innerHTML = 'Success!';
            } else {
                document.getElementById('createproducterror').style.display = 'block';
                document.getElementById('createproducterror').color = 'red';
                document.getElementById('createproducterror').innerHTML = response.data['status'];
            }
            console.log(response);
        }).catch(error => {
            console.log(error);
        });
    }

});

})
    .catch(function (error) {
        console.log(error);
    });


document.getElementsByClassName('item_img_plus_admin')[0].addEventListener('click', function(){
    isCreating = true;
});

document.getElementsByClassName('set_deal_button')[0].addEventListener('click', function(){
    isCreating = true;
});

