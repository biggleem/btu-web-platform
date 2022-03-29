function getUrlVars()
{
    var vars = [], hash;
    var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
    for(var i = 0; i < hashes.length; i++)
    {
        hash = hashes[i].split('=');
        vars.push(hash[0]);
        vars[hash[0]] = hash[1];
    }
    return vars;
}


document.getElementById("recoverPassForm").onsubmit = (e) => {
    e.preventDefault();
    let passwordInput = document.getElementById('passwordInput');
    let confirmpasswordInput = document.getElementById('confirmpasswordInput');
    let errorText = document.getElementsByClassName('error_newPass')[0];
    var sendForm = true;

    passwordInput.style.border = '1px solid #165B9C';
    confirmpasswordInput.style.border = '1px solid #165B9C';
    errorText.style.display = 'none';
    let errorTextt = '';


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
        axios.post('recoverPass', {
            _token: document.querySelector('meta[name="_token"]').content,
            email:getUrlVars()['email'],
            token:getUrlVars()['token'],
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
