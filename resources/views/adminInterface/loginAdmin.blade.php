@extends('layouts.app')

@section('content')
    <style>
        .container {
        width: 100%;
        height: 100vh;
        background-image: linear-gradient(125deg,#3498db,#8e44ad);
        }
        .card {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            background: #f1f1f1;
            height: 580px;
            width: 360px;
            border-radius: 10px;
            padding: 80px 40px;
            box-shadow: 0 0 200px rgba(0,0,0,0.2);
        }
        h2 {
        text-align: center;
        margin-bottom: 50px;
        }
        .form-control {
            position: relative;
        }
        .form-control input {
                width: 100%;
                height: 50px;
                margin: 10px 0;
                border: none;
                outline: none;
                font-size: 16px;
                font-weight: bold;
                padding: 0 10px;
                background: transparent;
                border-bottom: 2px solid #adadad;
        }
        span::before {
                content: attr(data-placeholder);
                position: absolute;
                left: 10px;
                top: 50%;
                transform: translateY(-50%);
                z-index: -1;
                transition: .5s;
        }
        span::after {
                content: "";
                position: absolute;
                left: 0;
                top: 82%;
                width: 0%;
                height: 2px;
                background: linear-gradient(125deg,#3498db,#8e44ad);
                transition: .5s;

        }
        .focus + span::before {
        top: 12px;
        font-size: 12px;
        }
        .focus + span::after {
        width: 100%;
        }
        .btn-submit {
        width: 100%;
        height: 60px;
        margin: 20px 0;
        color: #fff;
        background: linear-gradient(125deg,#3498db,#8e44ad,#3498db);
        background-size: 200%;
        border: none;
        cursor: pointer;
        transition: .5s;
        }
        .btn-submit:hover {
        background-position: right;
        }
        .signup {
        font-size: 12px;
        text-align: center;
        }
        .signup a {
            text-decoration: none;
        }
    </style>

    <div class="vue-bg">
        <form class="card-aof" method="POST" action="{{ route('postlogin') }}">
            @csrf
            <h2>ผู้ดูแลระบบ</h2>
            
            <div class="form-control-aof">
            <input type="text" id="username" name="username" >
            <span data-placeholder="บัญชีผู้ใช้">
            </div>
            
            <div class="form-control-aof">
            <input type="password" id="password" name="password">
            <span data-placeholder="รหัสผ่าน">
            </div>
            
            <input type="submit" class="btn-submit" value="เข้าสู่ระบบ">
            
            <div class="signup">
                <a href="{{route('index')}}">กลับสู่หน้าหลัก</a>
            </div>
        </form>
    </div>
        
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script>
        $(document).ready(function() {
            $(".form-control-aof input").on("focus", function() {
                $(this).addClass("focus");
            });

            $(".form-control-aof input").on("blur", function() {
                if($(this).val() == "")
                $(this).removeClass("focus");
            });
        });
    </script>
@endsection