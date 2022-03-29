@include('layouts/header')
<body>
<div class="login_page">
    <div class="login_container1">
        <div class="login_container2">
   <span class="sign_title">Log in</span>
            <div class="inputs_block">
    <form action="{{route('login')}}" method="post" id="loginForm">
        @csrf

            <input type="email" placeholder="Email" class="input_block" id="emailInput" name="email" required/>
            <input type="password" placeholder="Password" class="input_block"id="passwordInput" name="password" required/>
            <div class="remember_forget">
                <label class="sale_discount" for="rememberme">Remember Me
                    <input type="checkbox" checked="checked" id="rememberme" name="rememberme">
                    <span class="checkmark"></span>
                </label>
                <a href="{{route('forgetPassPage')}}" class="forget_pass">Forget Password?</a>
            </div>
            <p class="error">Wrong credentials</p>
            <button class="Login_button" type="submit">Log in</button>

    </form>
            </div>
   <div class="acc_sign">
       <span class="have_account">Don't have an account?</span>
       <a href="{{route('registerPage')}}" class="sign">Sign up</a>
   </div>
    </div>
</div>
</div>
<script src="{{asset('js/login.js')}}"></script>
</body>
</html>
