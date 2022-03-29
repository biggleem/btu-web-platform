axios.get('/getmaincategories').then(function (response) {
    let links = ['homegoods','faceandhair','edibles','amazonhurries','wydtyn'];
    let index = 0;
    let navlinks = document.getElementsByClassName('nav_links')[0];
    let navlinksmobile = document.getElementsByClassName('nav_links_mobile')[0];
    response.data.forEach(element => {
        let el1 = document.createElement('a');
        // el1.href = 'catpage?id='+element['id'];
        el1.href = links[index];

        el1.innerText = element['categoryname'];
        el1.classList.add('nav_page');
        let el2 = document.createElement('a');
        // el2.href = 'catpage?id='+element['id'];
        el2.href = links[index];
        el2.innerText = element['categoryname'];
        el2.classList.add('nav_page_mobile');
        navlinks.append(el1);
        navlinksmobile.append(el2);
        index++;
    });
})
    .catch(function (error) {
        console.log(error);
    });

[...document.getElementsByClassName('search_input_block')].forEach(element => {
    element.addEventListener('click', function(){
        [...document.getElementsByClassName('search_input')].forEach(element2 => {
            if(element2.value.length != 0){
                location.href = '/search?s='+element2.value;
            }
        });
    })
});
