let dropBtn = document.querySelectorAll(".dropbtn");
let modal_1 = document.getElementById("myModal_1");
let modal_2 = document.getElementById("myModal_2");
let modal_3 = document.getElementById("myModal_3");
let modal_addNewProduct= document.getElementById("myModal_addNewProduct");
let modal_MyProducts= document.getElementById("myModal_MyProducts");
let modal_accordionItemAdd= document.getElementById("myModal_accordionItemAdd");
let imagepath =$('meta[name="imagePath"]').attr('content');
let modal = document.getElementById("myModal");
let postperpage = 20;
let pagescount = 0;
let currentpage = isNaN(parseInt(getUrlVars()['page'])) ? 1 : (parseInt(getUrlVars()['page']) <= 0 ? 1 : parseInt(getUrlVars()['page']));
let searchs = null;
if(getUrlVars()['s'] == null){
    location.href = '/';
}
else{
    searchs = getUrlVars()['s'].toLowerCase();
}

function getUrlVars()
{
    var vars = [], hash;
    var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
    for(var i = 0; i < hashes.length; i++)
    {
        hash = hashes[i].split('=');
        // vars.push(hash[0]);
        vars[hash[0]] = hash[1];
    }
    return vars;
}

function createElements(element){
    let mainElement = document.createElement('div');
    mainElement.classList.add('section2_item2');
    let img = document.createElement('img');
    img.src = imagepath+'/product/'+element['id']+'_1.'+element['imageextensions'][0];
    img.classList.add('item_img','myBtn');
    img.addEventListener('click', function(){
        modal.style.display = "block";
        document.getElementsByClassName('modal_title')[0].innerHTML = element['title'];
        document.getElementsByClassName('modal_item_price')[0].innerHTML = '$' + element['price'];
        document.getElementsByClassName('modal_title3')[0].children[0].innerHTML = element['name'];
        document.getElementsByClassName('modal_description')[0].innerHTML = element['description'];
        document.getElementsByClassName('shop_now')[0].href = 'gotopage/?link='+element['link'];
        let imgblock = document.getElementsByClassName('Modal_content_img_block')[0];
        imgblock.innerHTML = '';
        let row = document.createElement('div');
        row.classList.add('row');
        for(let i = 1; i <= element['imagecount']; i++){
            let column = document.createElement('div');
            column.classList.add('column');
            let columnimg = document.createElement('img');
            columnimg.classList.add('column_img');
            columnimg.src = imagepath+'/product/'+element['id']+'_'+i+'.'+element['imageextensions'][i-1];
            column.append(columnimg);
            row.append(column);
        }
        // <div class="img_gallery">
        //         <img id="expandedImg" class="img_gallery_img" src="{{asset('images/Rectangle%205.png')}}"
        //     style="width:100%">    <!--src="img_slideshow_big_img.jpg"-->
        //         </div>
        imgblock.append(row);
        let imggallery = document.createElement('div');
        imggallery.classList.add('img_gallery');
        let expandedi = document.createElement('img');
        expandedi.id = 'expandedImg';
        expandedi.classList.add('img_gallery_img');
        expandedi.src = imagepath+'/product/'+element['id']+'_1.'+element['imageextensions'][0];
        expandedi.style.width = '100%';
        imggallery.append(expandedi);
        imgblock.append(imggallery);

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
// comments part start ---
        let maincommentadd = document.getElementById('myDIV2');
        let opinionpart = document.getElementById('myDIV');
        maincommentadd.innerHTML = '';
        opinionpart.innerHTML = '';
        if($('meta[name="isAuth"]').attr('content') == 'true' && parseInt($('meta[name="userId"]').attr('content')) != element['userId']){

            axios.get('getmycomment/'+element['id']).then(r => {
                if(r.data != 'no auth') {
                    if (r.data == 'no comment') {
                        let fblocktitle = document.createElement('span');
                        fblocktitle.classList.add('feedback_block_title');
                        fblocktitle.innerHTML = 'Enter your feedback here';
                        maincommentadd.append(fblocktitle);
                        let blocksection1 = document.createElement('div');
                        blocksection1.classList.add('feedback_block_section1');
                        let blockinner = document.createElement('div');
                        blockinner.classList.add('feedback_block_inner');
                        blocksection1.append(blockinner);
                        maincommentadd.append(blocksection1);
                        opinionpart.style.display='none';
                        let commentblock = document.getElementsByClassName('feedback_block_inner')[0];
                        commentblock.innerHTML = '';

                        let selectopinion = document.createElement('select');
                        selectopinion.classList.add('select_opinion');
                        let option1 = document.createElement('option');
                        option1.classList.add('option_opinion');
                        option1.value = '1';
                        option1.innerHTML = 'Positive';
                        selectopinion.append(option1);
                        let option2 = document.createElement('option');
                        option2.classList.add('option_opinion');
                        option2.value = '0';
                        option2.innerHTML = 'Negative';
                        selectopinion.append(option2);
                        commentblock.append(selectopinion);
                        let feedbacktitledesc = document.createElement('div');
                        feedbacktitledesc.classList.add('feedback_block_title_desc');
                        let feedbacktextarea = document.createElement('textarea');
                        feedbacktextarea.classList.add('feedback_textarea');
                        feedbacktextarea.cols = 100;
                        feedbacktextarea.rows = 6;
                        feedbacktitledesc.append(feedbacktextarea);
                        let feedbackblockbuttons = document.createElement('div');
                        feedbackblockbuttons.classList.add('feedback_block_buttons');
                        let sendcommentbutton = document.createElement('button');
                        sendcommentbutton.classList.add('feedback_block_button_send');
                        sendcommentbutton.innerHTML = 'Send';
                        sendcommentbutton.addEventListener('click',function(){
                            // let element = document.getElementById("myDIV");
                            // let element2 = document.getElementById("myDIV2");
                            // element.classList.add("d-b");
                            // element2.classList.add("d-none");
                            let commentstatus = selectopinion.value;
                            let commentdescription = feedbacktextarea.value;
                            let productId = element['id'];
                            if(commentdescription.length >0 && commentdescription.length <= 500){
                                console.log(commentstatus);
                                axios.post('/addComment',{
                                    _token : document.querySelector('meta[name="_token"]').content,
                                    status : commentstatus,
                                    description: commentdescription,
                                    productId: productId

                                }).then(r => {
                                    if(r.data['status'] == 'success') {
                                        location.reload();
                                    }
                                    else{
                                        console.log(r.data);
                                    }
                                })
                            }
                        });
                        feedbackblockbuttons.append(sendcommentbutton);
                        let cancelcommentbutton = document.createElement('button');
                        cancelcommentbutton.classList.add('feedback_block_button_cancel');
                        cancelcommentbutton.innerHTML = 'Clear';
                        feedbackblockbuttons.append(cancelcommentbutton);
                        feedbacktitledesc.append(feedbackblockbuttons);
                        commentblock.append(feedbacktitledesc);

                    } else {
                        let fblocktitle = document.createElement('span');
                        fblocktitle.classList.add('feedback_block_title');
                        fblocktitle.innerHTML = 'Enter your feedback here';
                        opinionpart.append(fblocktitle);
                        let blocksection1 = document.createElement('div');
                        blocksection1.classList.add('feedback_block_section1');
                        let blockinner = document.createElement('div');
                        blockinner.classList.add('feedback_block_inner');
                        blocksection1.append(blockinner);
                        opinionpart.append(blocksection1);
                        opinionpart.style.display = 'block';
                        maincommentadd.style.display='none';
                        let commentblock = document.getElementsByClassName('feedback_block_inner')[0];
                        commentblock.innerHTML = '';
                        let opiniondiv = document.createElement('div');
                        opiniondiv.classList.add('positive_opinion');
                        let authorname = document.createElement('div');
                        authorname.classList.add('opinion_author_name_block');
                        let opinionauthor = document.createElement('span');
                        opinionauthor.classList.add('opinion_author');
                        opinionauthor.innerHTML = $('meta[name="userName"]').attr('content')+' <span class="opinion_author_me">(me)</span>';
                        authorname.append(opinionauthor);
                        let opinionimagevalue = document.createElement('input');
                        opinionimagevalue.style.display = 'none';
                        opinionimagevalue.setAttribute('value', r.data['status']);
                        authorname.append(opinionimagevalue);
                        let opinionimage = document.createElement('img');
                        opinionimage.src = imagepath + '/' + (r.data['status'] == true ? 'possitive.png' : 'negative.png');
                        opinionimage.addEventListener('click', function(){
                            if(opinionimagevalue.value == '1'){
                                opinionimagevalue.value = '0';
                            }
                            else{
                                opinionimagevalue.value = '1';
                            }
                            opinionimage.src = imagepath + '/' + (opinionimagevalue.value == '1' ? 'possitive.png' : 'negative.png');
                        });
                        authorname.append(opinionimage);
                        opiniondiv.append(authorname);
                        let opinionedit = document.createElement('div');
                        opinionedit.classList.add('opinion_author_opinion_edit');
                        let opiniontext = document.createElement('textarea');
                        opiniontext.classList.add('opinion_author_opinion_text');
                        opiniontext.cols = 120;
                        opiniontext.rows = 6;
                        opiniontext.innerHTML = r.data['description'];
                        opinionedit.append(opiniontext);
                        opiniondiv.append(opinionedit);
                        let opinioneditclose = document.createElement('div');
                        opinioneditclose.classList.add('edit_close');
                        let opinioneditimg = document.createElement('img');
                        opinioneditimg.src = imagepath + '/PencilLineblue.png';
                        opinioneditimg.addEventListener('click', function(){
                            axios.post('editComment', {
                                status: opinionimagevalue.value,
                                description: opiniontext.value,
                                commentId: r.data['id'],
                                _token : document.querySelector('meta[name="_token"]').content,
                            }).then(r => {
                                if(r.data['status'] == 'success'){
                                    location.reload();
                                }
                                console.log(r.data);
                            }).catch(e => {
                                console.log(e);
                            });
                        });
                        opinioneditclose.append(opinioneditimg);
                        let opinioncloseimg = document.createElement('img');
                        opinioncloseimg.src = imagepath + '/close.png';
                        opinioncloseimg.classList.add('close');
                        opinioncloseimg.addEventListener('click', function () {
                            axios.get('deleteComment/'+r.data['id']).then(r => {
                                if(r.data['status'] == 'success'){
                                    location.reload();
                                }
                                console.log(r.data);
                            }).catch(e => {
                                console.log(e);
                            });
                        });
                        opinioneditclose.append(opinioncloseimg);
                        opiniondiv.append(opinioneditclose);
                        commentblock.append(opiniondiv);
                    }
                }
            }).catch(e => {
                console.log(e);
            });
        }

        axios.get('getproductcomments/'+element['id']).then(r => {
            console.log(r.data);
            if (r.data == 'no comments') {
                document.getElementsByClassName('accordion_feedbacks')[0].style.display = 'none';
            } else{
                document.getElementsByClassName('accordion_feedbacks')[0].style.display = 'flex';
                document.getElementsByClassName('feedback_block_positive')[0].innerHTML = '';
                document.getElementsByClassName('feedback_blocks_negative')[0].innerHTML = '';
                r.data.forEach(comment => {
                    let mainblocktoadd = document.getElementsByClassName((comment['status'] ? 'feedback_block_positive' : 'feedback_blocks_negative'))[0];
                    let mainop = document.createElement('div');
                    mainop.classList.add(comment['status'] ? 'positive_opinion' : 'negative_opinion1');
                    let authornameblock = document.createElement('div');
                    authornameblock.classList.add('opinion_author_name_block');
                    let opauthor = document.createElement('span');
                    opauthor.classList.add('opinion_author');
                    opauthor.innerHTML = comment['name'];
                    authornameblock.append(opauthor);
                    let opmark = document.createElement('img');
                    opmark.src = imagepath + '/' + (comment['status'] ? 'possitive.png' : 'negative.png');
                    authornameblock.append(opmark);
                    mainop.append(authornameblock);
                    let opauthorop = document.createElement('div');
                    opauthorop.classList.add('opinion_author_opinion');
                    let opauthoropp = document.createElement('p');
                    opauthoropp.innerHTML = comment['description'];
                    opauthorop.append(opauthoropp);
                    mainop.append(opauthorop);
                    let feedbackline = document.createElement('hr');
                    feedbackline.classList.add('feedback_line');
                    mainop.append(feedbackline);
                    mainblocktoadd.append(mainop);

                });
            }
        }).catch(e => {
            console.log(e);
        })
        // comments part end ---
    });
    mainElement.append(img);
    let i = document.createElement('i');
    i.addEventListener('click', function(){
        myFunction(this, element['id']);
    });
    i.classList.add('fa','fa-heart-o','heart_img');
    if(element['liked']){
        i.classList.add('fa-heart');
    }
    i.ariaHidden = 'true';
    mainElement.append(i);

    if(element['sale'] > 0){
        let sale = document.createElement('div');
        sale.classList.add('sale');
        img = document.createElement('img');
        img.src =imagepath+'/Clock.png';
        img.classList.add('clock');
        sale.append(img);
        let div = document.createElement('div');
        div.classList.add('day_sale');
        let div2 = document.createElement('div');
        div2.innerHTML = '-'+element['sale']+'%';
        div.append(div2);
        sale.append(div);
        mainElement.append(sale);
    }
    let nameblock = document.createElement('div');
    nameblock.classList.add('item_name_block');
    let namediv = document.createElement('div');
    namediv.classList.add('item_name');
    let namep = document.createElement('p');
    namep.classList.add('item_name1');
    namep.innerHTML = element['title'];
    namediv.append(namep);
    nameblock.append(namediv);
    let pricediv = document.createElement('div');
    pricediv.classList.add('item_price');
    pricediv.innerHTML = '$'+element['price'];
    nameblock.append(pricediv);
    mainElement.append(nameblock);


    document.getElementsByClassName('homeGoods_section2_2_Favourites_page')[0].append(mainElement);
}
let products = [];


axios.get('getAllProducts').then(request => {
    request.data.forEach(searchelement => {
        if(searchelement['title'].toLowerCase().includes(searchs)){
            products.push(searchelement);
        }
    });
    pagescount = (products.length - products.length %postperpage)/postperpage + (products.length %postperpage != 0);

    // products = request.data;
    document.getElementsByClassName('homeGoods_section2_2_Favourites_page')[0].innerHTML = '';
    var pagecounter = 0;
    products.forEach(element=>{
        if(pagecounter >= (currentpage - 1)*postperpage && pagecounter <= postperpage*currentpage - 1){
            createElements(element);
        }
        pagecounter++;
    });

    let paginationblock = document.getElementById('paginationblock');
    let paginationpart = document.createElement('a');
    paginationpart.href = '?page=1';
    paginationpart.innerHTML = '&laquo;';
    paginationblock.append(paginationpart);


    if(currentpage > 1 && pagescount > 1){
        if(currentpage+1 <= pagescount){
            paginationpart = document.createElement('a');
            paginationpart.href = '?s='+searchs+'&page='+(currentpage-1);
            paginationpart.innerHTML = currentpage-1;
            paginationblock.append(paginationpart);

            paginationpart = document.createElement('a');
            paginationpart.href = '?s='+searchs+'&page='+(currentpage);
            paginationpart.innerHTML = currentpage;
            paginationblock.append(paginationpart);

            paginationpart = document.createElement('a');
            paginationpart.href = '?s='+searchs+'&page='+(currentpage+1);
            paginationpart.innerHTML = currentpage+1;
            paginationblock.append(paginationpart);
        }
        else{
            if(currentpage - 2 >= 1){
                paginationpart = document.createElement('a');
                paginationpart.href = '?s='+searchs+'&page='+(currentpage-2);
                paginationpart.innerHTML = currentpage-2;
                paginationblock.append(paginationpart);
            }
            paginationpart = document.createElement('a');
            paginationpart.href = '?s='+searchs+'&page='+(currentpage-1);
            paginationpart.innerHTML = currentpage-1;
            paginationblock.append(paginationpart);

            paginationpart = document.createElement('a');
            paginationpart.href = '?s='+searchs+'&page='+(currentpage);
            paginationpart.innerHTML = currentpage;
            paginationblock.append(paginationpart);
        }
    }
    else if(currentpage == 1){
        paginationpart = document.createElement('a');
        paginationpart.href = '?s='+searchs+'&page='+(currentpage);
        paginationpart.innerHTML = currentpage;
        paginationblock.append(paginationpart);
        if(pagescount > 1){
            paginationpart = document.createElement('a');
            paginationpart.href = '?s='+searchs+'&page='+(currentpage+1);
            paginationpart.innerHTML = currentpage+1;
            paginationblock.append(paginationpart);
        }
        if(currentpage+2 <= pagescount){
            paginationpart = document.createElement('a');
            paginationpart.href = '?s='+searchs+'&page='+(currentpage+2);
            paginationpart.innerHTML = currentpage+2;
            paginationblock.append(paginationpart);
        }
    }


    paginationpart = document.createElement('a');
    paginationpart.href = '?page='+pagescount;
    paginationpart.innerHTML = '&raquo;';
    paginationblock.append(paginationpart);

}).catch(response => {
    console.log('error');
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

// let test = 10;
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


// Get the button that opens the modal
//     let btn = document.querySelectorAll(".myBtn");

// Get the <span> element that closes the modal
let span = document.getElementsByClassName("close_modal")[0];

// When the user clicks the button, open the modal
//     for (let i = 0; i < btn.length; i++) {
//         btn[i].addEventListener("click", function () {
//             modal.style.display = "block";
//         })
//     }

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

/*heart*/
function myFunction(x, id) {
    if($('meta[name="isAuth"]').attr('content') == 'true' || $('meta[name="isAuth"]').attr('content') == true){
        axios.get('setLike/'+id).then(response => {
            if(response.data == 'success') {
                x.classList.toggle("fa-heart");
            }
            else{
                console.log(response.data);
            }
        }).catch(error => {
            console.log(error);
        });
    }
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
