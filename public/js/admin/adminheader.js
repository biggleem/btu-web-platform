let modal_1 = document.getElementById("myModal_1");
let imagepath =$('meta[name="imagePath"]').attr('content');
function elemental(el){
    el.oneEventListener = (event, func) => {
        if(el.lastEventListener == null){
            el.lastEventListener = {};
        }
        if(el.lastEventListener[event] != null){
            el.removeEventListener(event, el.lastEventListener[event]);
        }
        el.addEventListener(event, func);
        el.lastEventListener[event] = func;
    }
    return el;
}


function proxy(el) {
    if(!(el instanceof NodeList)){
        return elemental(el);
    }else{
        el.forEach(ele=>{
            ele = elemental(ele);
        });
        return el;
    }
}

function createApprovingModal(element){
    modal_1.style.display = "block";
    document.getElementById('approvemodal_title').innerHTML = element['title'];
    document.getElementById('approvemodal_price').innerHTML = '$' + element['price'];
    document.getElementById('approvemodal_author').children[0].innerHTML = element['name'];
    document.getElementById('approvemodal_description').innerHTML = element['description'];
    document.getElementById('approvemodal_link').href = 'gotopage/?link=' + element['link'];
    proxy(document.getElementById('cancel_product_modal')).oneEventListener('click', function(){
        axios.get('deleteProduct/' + element['id']).then(r => {location.reload()});
    });
    proxy(document.getElementById('approve_product_modal')).oneEventListener('click', function(){
        axios.get('approveProduct/' + element['id']).then(r => {location.reload()});
    });
    let imgblock = document.getElementById('approveModal_content_img_block');
    imgblock.innerHTML = '';
    let row = document.createElement('div');
    row.classList.add('row');
    for (let i = 1; i <= element['imagecount']; i++) {
        let column = document.createElement('div');
        column.classList.add('column');
        let columnimg = document.createElement('img');
        columnimg.classList.add('column_img');
        columnimg.src = imagepath + '/product/' + element['id'] + '_' + i + '.' + element['imageextensions'][i - 1];
        column.append(columnimg);
        row.append(column);
    }

    imgblock.append(row);
    let imggallery = document.createElement('div');
    imggallery.classList.add('img_gallery');
    let expandedi = document.createElement('img');
    expandedi.id = 'expandedImg';
    expandedi.classList.add('img_gallery_img');
    expandedi.src = imagepath + '/product/' + element['id'] + '_1.png';
    expandedi.style.width = '100%';
    imggallery.append(expandedi);
    imgblock.append(imggallery);

    // Product modal img carousel
    let sliderImg = document.querySelectorAll(".column_img");
    let expandImg = document.getElementById("expandedImg");
    let expandImg_1 = document.getElementById("expandedImg_1");
    for (let i = 0; i < sliderImg.length; i++) {
        sliderImg[i].addEventListener("click", function () {
                if (expandImg) {
                    expandImg.src = sliderImg[i].src;
                    expandImg.parentElement.style.display = "block";

                }
                if (expandImg_1) {
                    expandImg_1.src = sliderImg[i].src;
                    expandImg_1.parentElement.style.display = "block";
                }

            }
        )
    }
}
axios.get((location.pathname == '/admin' ? '/admin/' : '')+'getlastnotifications/4').then(r => {
   console.log(r.data);
   console.log(r.data.length);
   if(r.data != 'No products') {
       for (let i = 0; i < r.data.length; i++) {
           let element = r.data[i];
           let dropdown = document.getElementById('notificationsdropdown');
           if (i == 0) {
               let maincontent = document.createElement('div');
               maincontent.classList.add('dropdown_content_block');
               let content = document.createElement('span');
               content.classList.add('notification_title');
               content.innerHTML = 'New notifications';
               maincontent.append(content);
               let notblock = document.createElement('div');
               notblock.classList.add('dropdown_notification_block', 'myBtn_1');
               notblock.addEventListener('click', function () {
                   createApprovingModal(element);
               });
               let notimg = document.createElement('img');
               notimg.src = imagepath + '/userAvatars/' + element['userId'] + '_avatar.' + element['avatarext'];
               notimg.classList.add('dropdown_notification_block_img');
               notblock.append(notimg);
               let notmaintext = document.createElement('div');
               notmaintext.classList.add('dropdown_notification_block_text');
               let notmaintext1 = document.createElement('div');
               notmaintext1.classList.add('dropdown_notification_block_text1');
               let notmaintext1span = document.createElement('span');
               notmaintext1span.innerHTML = element['name'];
               notmaintext1.append(notmaintext1span);
               notmaintext1.innerHTML += (element['status'] == 'edited' ? 'edited product' : 'added a new product');
               notmaintext.append(notmaintext1);
               let notmaintext2 = document.createElement('div');
               notmaintext2.classList.add('dropdown_notification_block_text2');
               notmaintext2.innerHTML = moment(element['updated_at']).fromNow();
               notmaintext.append(notmaintext2);
               notblock.append(notmaintext);
               maincontent.append(notblock);
               dropdown.append(maincontent);

           } else {
               let notblock = document.createElement('div');
               notblock.classList.add('dropdown_notification_block_2', 'myBtn_1');
               notblock.addEventListener('click', function () {
                   createApprovingModal(element);
               });
               let notimg = document.createElement('img');
               notimg.src = imagepath + '/userAvatars/' + element['userId'] + '_avatar.' + element['avatarext'];
               notimg.classList.add('dropdown_notification_block_img');
               notblock.append(notimg);
               let notmaintext = document.createElement('div');
               notmaintext.classList.add('dropdown_notification_block_text');
               let notmaintext1 = document.createElement('div');
               notmaintext1.classList.add('dropdown_notification_block_text1');
               let notmaintext1span = document.createElement('span');
               notmaintext1span.innerHTML = element['name'];
               notmaintext1.append(notmaintext1span);
               notmaintext1.innerHTML += (element['status'] == 'edited' ? 'edited product' : 'added a new product');
               notmaintext.append(notmaintext1);
               let notmaintext2 = document.createElement('div');
               notmaintext2.classList.add('dropdown_notification_block_text2');
               notmaintext2.innerHTML = moment(element['updated_at']).fromNow();
               notmaintext.append(notmaintext2);
               notblock.append(notmaintext);
               dropdown.append(notblock);
           }

           if (i != r.data.length - 1) {
               let nothr = document.createElement('hr');
               nothr.classList.add('dropdown_notification_block_line');
               dropdown.append(nothr);
           }
       }
   }
});
