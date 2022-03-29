@include('layouts/header')
<body>
<div class="login_page">
    <div class="login_container1">
        <div class="login_container2">
            <span class="sign_title">Forget Password?</span>
            <p class="forgetPass_text">Check the email address connected to your account for a password reset email</p>
            <div class="inputs_block">
                <form action="{{route('forgetPass')}}" id="forgetPassForm" method="post">
                    @csrf
                <input type="text" id='emailInput' placeholder="Email" class="input_block" required>
                <p class="error_forget"></p>
                <button class="submit_button_forgetPass" type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="{{asset('js/forgetPass.js')}}"></script>
</body>
</html>
