document.getElementById("registerForm").onsubmit = (e) => {
    e.preventDefault();
    let nameInput = document.getElementById('nameInput');
    let emailInput = document.getElementById('emailInput');
    let passwordInput = document.getElementById('passwordInput');
    let confirmpasswordInput = document.getElementById('confirmpasswordInput');
    let errorText = document.getElementsByClassName('error_sign')[0];
    var sendForm = true;

    nameInput.style.border = '1px solid #165B9C';
    emailInput.style.border = '1px solid #165B9C';
    passwordInput.style.border = '1px solid #165B9C';
    confirmpasswordInput.style.border = '1px solid #165B9C';
    errorText.style.display = 'none';
    let errorTextt = '';


    if(nameInput.value.length == 0 || nameInput.value.length > 255){
        nameInput.style.border = "1px solid red";
        errorTextt+='name length should be less than 255 characters,\n';
        sendForm = false;
    }
    if(emailInput.value.length == 0){
        emailInput.style.border = "1px solid red";
        sendForm = false;
    }
    if(passwordInput.value.length < 8){
        passwordInput.style.border = "1px solid red";
        errorTextt+='password length minimum is 8 characters,\n';
        sendForm = false;
    }
    if(confirmpasswordInput.value.length < 8){
        confirmpasswordInput.style.border = "1px solid red";
        errorTextt+='confirm password length minimum is 8 characters,\n';
        sendForm = false;
    }
    if(confirmpasswordInput.value != passwordInput.value){
        passwordInput.style.border = "1px solid red";
        confirmpasswordInput.style.border = "1px solid red";
        errorTextt+=' passwords aren\'t equal';
        sendForm = false;
    }
    if(errorTextt.length > 0){
        errorText.innerHTML = errorTextt;
        errorText.style.display = 'block';
    }

    if(sendForm){
        axios.post('register', {
            _token: document.querySelector('meta[name="_token"]').content,
            name: nameInput.value,
            email: emailInput.value,
            password: passwordInput.value
        })
            .then(function (response) {
                console.log(response);
                if(response['data']['status'] == 'success'){
                    location.href = (response['data']['role'] == 'admin' ? '/admin' : '/');
                }
                else{
                    emailInput.style.border = "1px solid red";
                    errorText.innerHTML = 'Account with this email is already registered!';
                    errorText.style.display = 'block';
                    console.log("Something went wrong");
                }
            })
            .catch(function (error) {
                console.log(error);
            });
    }
    else{
        console.log('error');
        errorText.style.display = 'block';
        // errorText.innerHTML = 'passwords doesn\'t match';
    }

};
