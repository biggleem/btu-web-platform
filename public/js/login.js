

document.getElementById("loginForm").onsubmit = (e) => {
    document.getElementsByClassName('error')[0].style.display = 'none';
    e.preventDefault();
    axios.post('login', {
        _token: document.querySelector('meta[name="_token"]').content,
        email: document.getElementById('emailInput').value,
        password: document.getElementById('passwordInput').value,
        rememberme: document.getElementById('rememberme').checked
    })
.then(function (response) {
        console.log(response);
    if(response['data']['status'] == 'success'){
        location.href = (response['data']['role'] == 'admin' ? '/admin' : '/');
        // location.href = '/';
    }
    else{
        document.getElementsByClassName('error')[0].style.display = 'block';
        console.log("Something went wrong");
    }
    })
        .catch(function (error) {
            console.log(error);
        });
};

