<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <title>Forget Pass Email</title>
</head>
<body>
<div style="max-width: 1920px; width: 100%; height: 90px;background: #165B9C">
    <div style=" max-width: 123px;width: 100%;padding-top: 32px;margin: auto;">
            <img src="{{asset('images/logo.png')}}" alt="" style="width: 123px;height: 29px;cursor: pointer;">
    </div>
</div>
<div style=" max-width: 849px;width: 100%;margin: 68px auto;">
        <span style="font-size: 36px;font-style: normal;font-weight: 700;line-height: 49px; letter-spacing: 0em; color: #165B9C;
        display: block; text-align: center">Hello!</span>
    <span style="margin-top: 15px;font-size: 24px;font-style: normal;font-weight: 400;line-height: 33px;letter-spacing: 0em;color: #000000;text-align: center;
        display: block;">
            You are receiving this email because we received a password reset request for your account.</span>
    <a href="{{route('home')}}/recoverPass?email={{$email}}&&token={{$token}}" style=" margin-top: 42px;max-width: 470px;width: 100%;background-color: #165B9C;padding-top: 15px;padding-bottom: 15px;text-align: center;color: #FFFFFF;
    text-decoration: none;display: block; margin-right: auto; margin-left: auto; font-size: 24px">Reset   Password</a>
    <span style=" margin-top: 41px;font-size: 24px;font-style: normal;font-weight: 400;line-height: 33px;letter-spacing: 0em;
    color: #000000; display: block; text-align: center">This password reset link will expire in 60 minutes.</span>
    <span style=" margin-top: 20px;font-size: 24px;font-style: normal;font-weight: 400;line-height: 33px;letter-spacing: 0em;text-align: center;
    color: black;display: block;">If you did not request a password reset, no further action is required.</span>
    <hr style=" margin-top: 20px;width: 100%;border: 1px solid #B3CBE2; display: block; text-align: center">
    <span style="margin-top: 25px;font-size: 24px;font-style: normal;font-weight: 400;line-height: 33px;letter-spacing: 0em; text-align: center;
    color: black;display: block;">If you're having trouble clicking the "Reset Password" button, copy and paste the URL below into your web browser:</span>
    <a href="{{route('home')}}/recoverPass?email={{$email}}&&token={{$token}}" style=" margin-top: 25px;font-size: 24px;font-style: normal;font-weight: 700;line-height: 33px;letter-spacing: 0em;text-align: center;color: #165B9C;
    cursor: pointer;display: block;">{{route('home')}}/recoverPass?email={{$email}}&&token={{$token}}</a>
</div>
</body>
</html>

