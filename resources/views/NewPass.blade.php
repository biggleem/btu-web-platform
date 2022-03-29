@include('layouts/header')
<body>
<div class="login_page">
    <div class="login_container1">
        <div class="login_container2">
            <span class="sign_title">New Password</span>
            <div class="inputs_block">
                <form action="{{route('register')}}" id="recoverPassForm" method="post">
                    @csrf
                <input type="password" id="passwordInput" placeholder="Password" class="input_block" required>
                <input type="password" id="confirmpasswordInput" placeholder="Repeat Password" class="input_block" required>
                <p class="error_newPass">Error message</p>
                <button class="Login_button_newPass" type="submit">Log in</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="{{asset('js/newPass.js')}}"></script>
</body>
</html>
