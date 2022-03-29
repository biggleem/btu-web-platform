let salespanel = document.getElementById('salespanel');
let subpanel = document.getElementById('subpanel');

axios.get('getsales').then(response =>{
    console.log(response.data);
    response.data.forEach(element => {
        let salediscount = document.createElement('label');
        salediscount.classList.add('sale_discount');
        if(element['start'] == 0 && element['end'] == 0)
            salediscount.innerHTML = 'No discount';
        else if(element['start'] == 0 && element['end'] > 0)
            salediscount.innerHTML = 'up to '+element['end']+'%';
        else if(element['start'] > 0 && element['end'] == 100 && element['start'] < 100)
            salediscount.innerHTML = '+'+element['start']+'%';
        else if(element['start'] > 0 && element['end'] > 0 && element['start'] < 100 && element['end'] < 100)
            salediscount.innerHTML = element['start']+'%-'+element['end']+'%';

        var checkout = document.createElement('input');
        checkout.type = 'checkbox';
        checkout.classList.add('salecheckbox');
        salediscount.append(checkout);

        checkout = document.createElement('input');
        checkout.type = 'number';
        checkout.classList.add('firstsalecheckbox');
        checkout.style.display = 'none';
        checkout.value = element['start'];
        salediscount.append(checkout);

        checkout = document.createElement('input');
        checkout.type = 'number';
        checkout.classList.add('secondsalecheckbox');
        checkout.style.display = 'none';
        checkout.value = element['end'];
        salediscount.append(checkout);

        var checkmark = document.createElement('span');
        checkmark.classList.add('checkmark');
        salediscount.append(checkmark);
        salespanel.append(salediscount);
    });
    document.getElementsByClassName('homeGoods_section2_1')[0].display = 'none';
}).catch(error => {
    console.log(error);
});

axios.get('getsubs/'+document.getElementById('categoryId').value).then(response =>{
    console.log(response.data);
    response.data.forEach(element => {
        let salediscount = document.createElement('label');
        salediscount.classList.add('sale_discount');
        salediscount.innerHTML = element['categoryname'];
        let checkout = document.createElement('input');
        checkout.type = 'checkbox';
        checkout.classList.add('subcheckbox');
        salediscount.append(checkout);
        let checkmark = document.createElement('span');
        checkmark.classList.add('checkmark');
        salediscount.append(checkmark);
        subpanel.append(salediscount);
    });
}).catch(error => {
    console.log(error);
});
