axios.get('/getallcategories').then(function (response) {
    let catselect = document.getElementById('categoriesselect');
    response.data.forEach(element => {
        let el = document.createElement('option');
        el.value = element['id'];
        el.innerText = element['categoryname'];
        catselect.append(el);
    });
})
    .catch(function (error) {
        console.log(error);
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

    var formData = new FormData();

    for (var i = 0; i < images.files.length; i++) {
        var file = images.files[i];
        // Check the file type.
        if (!file.type.match('image.*')) {
            continue;
        }
        // Add the file to the request.
        formData.append('images[]', file, file.name);
    }
    formData.append('name', name);
    formData.append('category', category);
    formData.append('price', price);
    formData.append('sale', sale);
    formData.append('link', link);
    formData.append('description', description);
    formData.append('_token', document.querySelector('meta[name="_token"]').content);
    var data = {
        name: name,
        category: category,
        price: price,
        sale: sale,
        link: link,
        description: description,
        images: images.files,
        _token: document.querySelector('meta[name="_token"]').content
    };

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

});

let dropBtn = document.querySelectorAll(".dropbtn");
let imagepath =$('meta[name="imagePath"]').attr('content');

window.onclick = function (event) {
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
