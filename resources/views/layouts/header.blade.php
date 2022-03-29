<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1" name="viewport" />

    <title>Title</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('styles/style.css')}}">
    <link rel="stylesheet" href="{{asset('styles/responsive.css')}}">

    <meta name="_token" content="{{ csrf_token() }}">
    <meta name="imagePath" content="{{ asset('images') }}">
    <meta http-equiv="Cache-Control" content="max-age=20, must-revalidate">
    @auth
        <meta name="isAuth" content=true>
        <meta name="userId" content={{Auth::user()->id}}>
        <meta name="userName" content={{Auth::user()->name}}>
    @else
        <meta name="isAuth" content=false>
    @endauth
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
