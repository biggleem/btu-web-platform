@include('layouts/header')
<body>
<div class="signup_page">
    <div class="signup_container1">
        <div class="signup_container2">
            <span class="sign_title">Sign up</span>
            <div class="inputs_block">
                <form action="{{route('register')}}" id="registerForm" method="post">
                    @csrf
                <input type="text" placeholder="Name to appear as" class="input_block" id="nameInput" name="name" required>
                <input type="email" placeholder="Email" class="input_block" id="emailInput" name="email" required>
                <input type="password" placeholder="Password" class="input_block" id="passwordInput" name="password" required>
                <input type="password" placeholder="Repeat password" class="input_block" id="confirmpasswordInput" required>
                <p class="error_sign"></p>
                <button type="submit" class="signup_button">Sign up</button>

            </form>
            </div>
            <div class="acc_log">
                <span class="have_account">Already have an account?</span>
                <a href="{{route('loginPage')}}" class="login">Log in</a>
            </div>
        </div>
    </div>
</div>

<script src="{{asset('js/register.js')}}"></script>
</body>
</html>
