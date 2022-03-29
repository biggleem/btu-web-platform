let dropBtn = document.querySelectorAll(".dropbtn");
let modal_1 = document.getElementById("myModal_1");
let modal_2 = document.getElementById("myModal_2");
let modal_3 = document.getElementById("myModal_3");
let modal_addNewProduct= document.getElementById("myModal_addNewProduct");
let modal_MyProducts= document.getElementById("myModal_MyProducts");
let modal_accordionItemAdd= document.getElementById("myModal_accordionItemAdd");
let inputsapp = document.getElementsByClassName('Faqs_inner')[0];

function createInputs(element){
    inputsapp.innerHTML+='<div class="faqs_block_cont">\n' +
        '                <div class="Faqs_Block">\n' +
        '                    <label class="faqs_label_question">Question<a id="count">'+(inputsapp.children.length+1)+'</a></label>\n' +
        '                    <textarea name="" class="textarea_question_block">'+element['question']+'  </textarea>\n' +
        '                    <label class="faqs_label_answer">Answer<a id="count2">'+(inputsapp.children.length+1)+'</a></label>\n' +
        '                    <textarea name="" class="textarea_answer_block">'+element['answer']+'  </textarea>\n' +
        '                </div>\n' +
        '            </div>';
}
axios.get('../faqslist').then(r => {
    console.log(r.data);
    if(r.data != 'No faqs'){
        r.data.forEach(element => {
            createInputs(element);
        });
    }

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


// When the user clicks the button, open the modal
for (let i = 0; i < btn.length; i++) {
    btn[i].addEventListener("click", function () {
        modal.style.display = "block";
    })
}

// When the user clicks on <span> (x), close the modal

/*modal 2*/

// Get the button that opens the modal
let btn1 = document.querySelectorAll(".myBtn_1");

// Get the <span> element that closes the modal


// When the user clicks the button, open the modal
for (let i = 0; i < btn1.length; i++) {
    btn1[i].addEventListener("click", function () {
        modal_1.style.display = "block";
    })
}

// When the user clicks on <span> (x), close the modal


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


// When the user clicks the button, open the modal
for (let i = 0; i < btn6.length; i++) {
    btn6[i].addEventListener("click", function () {
        modal_accordionItemAdd.style.display = "block";
    })
}

// When the user clicks on <span> (x), close the modal



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


/*modal accordion subcategory item add*/

// Get the button that opens the modal
let btnSub = document.querySelectorAll(".myBtn_sub");

// Get the <span> element that closes the modal
let spanSub = document.getElementsByClassName("")[0];

// When the user clicks the button, open the modal
for (let i = 0; i < btnSub.length; i++) {
    btnSub[i].addEventListener("click", function () {
        modal_accordionSubcategoryAdd.style.display = "block";
    })
}

// When the user clicks on <span> (x), close the modal
if (spanSub){
    spanSub.onclick = function () {
        modal_accordionSubcategoryAdd.style.display = "none";
    }
}


