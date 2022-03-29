document.getElementById("forgetPassForm").onsubmit = (e) => {
    e.preventDefault();
    let emailText = document.getElementById('emailInput').value;
    if(emailText.length > 0){
        document.getElementsByClassName('error_forget')[0].style.display = 'none';
        document.getElementsByClassName('error_forget')[0].style.color = 'red';
        axios.post('forgetPass', {
            _token: document.querySelector('meta[name="_token"]').content,
            email: emailText
        })
            .then(function (response) {
                console.log(response);
                document.getElementsByClassName('error_forget')[0].style.display = 'block';
                document.getElementsByClassName('error_forget')[0].style.color = (response['data']['status'] == 'success' ? 'green' : 'red');
                document.getElementsByClassName('error_forget')[0].innerHTML = response['data']['text'];
            })
            .catch(function (error) {
                console.log(error);
            });
    }
};

