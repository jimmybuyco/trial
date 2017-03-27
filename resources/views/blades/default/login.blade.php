@extends('layouts.default.layout')

@section('title')
Login
@endsection

@section('content')
<div class="div-login">
    <b>Member Login</b>
    <p>Please provide your details</p>

    <div class="div-input">
        <span class="glyphicon glyphicon-user"></span>|<input class="input" type="text" placeholder="Username">
    </div>

    <div class="div-input">
        <span class="glyphicon glyphicon-lock"></span>|<input class="input" type="password" placeholder="Password">
    </div>
    <div>
            <div class="text-right">
                <input type="button" class="login-btn" value="Log In">
            </div>
    </div>

</div>
<style>
    .div-login {
        border: 2px solid gray;
        width: 210px;
        margin: 0 auto;
        margin-top: 50px;
        padding: 10px;
        /*background-color: rgb(250, 248, 251);*/
        background-color: white;
        border-radius: 5px;
        font-size:12px;
    }

    span {
        /*border: 1px solid black;*/
        padding: 8px;

    }
    .login-btn{
        border: 2px solid gray;
        border-radius: 5px;
    }
    .div-input {
        width: 100%;
        border: 2px solid gray;
        margin-top: 5px;
        margin-bottom: 5px;
        border-radius: 5px;
    }

    .input {
        padding: 5px;
        border:0px
        /*background-color: rgb(245, 243, 246);*/
    }


</style>
@endsection