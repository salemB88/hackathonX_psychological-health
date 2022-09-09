<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!--  This file has been downloaded from bootdey.com    @bootdey on twitter -->
    <!--  All snippets are MIT license http://bootdey.com/license -->
    <title>Table user information - Bootdey.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style type="text/css">
        .inf-content{
            border:1px solid #DDDDDD;
            -webkit-border-radius:10px;
            -moz-border-radius:10px;
            border-radius:10px;
            box-shadow: 7px 7px 7px rgba(0, 0, 0, 0.3);
        }
        h1{
            text-align: center;
        }
        .card.user-card {
            border-top: none;
            -webkit-box-shadow: 0 0 1px 2px rgba(0,0,0,0.05), 0 -2px 1px -2px rgba(0,0,0,0.04), 0 0 0 -1px rgba(0,0,0,0.05);
            box-shadow: 0 0 1px 2px rgba(0,0,0,0.05), 0 -2px 1px -2px rgba(0,0,0,0.04), 0 0 0 -1px rgba(0,0,0,0.05);
            -webkit-transition: all 150ms linear;
            transition: all 150ms linear;
        }

        .card {
            border-radius: 5px;
            -webkit-box-shadow: 0 1px 2.94px 0.06px rgba(4,26,55,0.16);
            box-shadow: 0 1px 2.94px 0.06px rgba(4,26,55,0.16);
            border: none;
            margin-bottom: 30px;
            -webkit-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
        }

        .card .card-header {
            background-color: transparent;
            border-bottom: none;
            padding: 25px;
        }

        .card .card-header h5 {
            margin-bottom: 0;
            color: #222;
            font-size: 14px;
            font-weight: 600;
            display: inline-block;
            margin-right: 10px;
            line-height: 1.4;
        }

        .card .card-header+.card-block, .card .card-header+.card-block-big {
            padding-top: 0;
        }

        .user-card .card-block {
            text-align: center;
        }

        .card .card-block {
            padding: 25px;
        }

        .user-card .card-block .user-image {
            position: relative;
            margin: 0 auto;
            display: inline-block;
            padding: 5px;
            width: 110px;
            height: 110px;
        }

        .user-card .card-block .user-image img {
            z-index: 20;
            position: absolute;
            top: 5px;
            left: 5px;
            width: 100px;
            height: 100px;
        }

        .img-radius {
            border-radius: 50%;
        }

        .f-w-600 {
            font-weight: 600;
        }

        .m-b-10 {
            margin-bottom: 10px;
        }

        .m-t-25 {
            margin-top: 25px;
        }

        .m-t-15 {
            margin-top: 15px;
        }

        .card .card-block p {
            line-height: 1.4;
        }

        .text-muted {
            color: #919aa3!important;
        }

        .user-card .card-block .activity-leval li.active {
            background-color: #2ed8b6;
        }

        .user-card .card-block .activity-leval li {
            display: inline-block;
            width: 15%;
            height: 4px;
            margin: 0 3px;
            background-color: #ccc;
        }

        .user-card .card-block .counter-block {
            color: #fff;
        }

        .bg-c-blue {
            background: linear-gradient(45deg,#4099ff,#73b4ff);
        }

        .bg-c-green {
            background: linear-gradient(45deg,#2ed8b6,#59e0c5);
        }

        .bg-c-yellow {
            background: linear-gradient(45deg,#FFB64D,#ffcb80);
        }

        .bg-c-pink {
            background: linear-gradient(45deg,#FF5370,#ff869a);
        }

        .m-t-10 {
            margin-top: 10px;
        }

        .p-20 {
            padding: 20px;
        }

        .user-card .card-block .user-social-link i {
            font-size: 30px;
        }

        .text-facebook {
            color: #3B5997;
        }

        .text-twitter {
            color: #42C0FB;
        }

        .text-dribbble {
            color: #EC4A89;
        }

        .user-card .card-block .user-image:before {
            bottom: 0;
            border-bottom-left-radius: 50px;
            border-bottom-right-radius: 50px;
        }

        .user-card .card-block .user-image:after, .user-card .card-block .user-image:before {
            content: "";
            width: 100%;
            height: 48%;
            border: 2px solid #4099ff;
            position: absolute;
            left: 0;
            z-index: 10;
        }

        .user-card .card-block .user-image:after {
            top: 0;
            border-top-left-radius: 50px;
            border-top-right-radius: 50px;
        }

        .user-card .card-block .user-image:after, .user-card .card-block .user-image:before {
            content: "";
            width: 100%;
            height: 48%;
            border: 2px solid #4099ff;
            position: absolute;
            left: 0;
            z-index: 10;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Dashboard</a>
        </div>
        <ul class="nav navbar-nav">
            <li class="active"><a href="{{route('userinfo')}}">البيانات الشخصية</a></li>
            <li><a href="{{route('employeesActivity')}}">النشاطات الشخصية</a></li>
            <li><a href="{{route('Group_Activities')}}">النشاطات الجماعية</a></li>
            <li> <a href="{{route('ActivityReg')}}">تسجيل نشاط شخصي</a></li>
            @if(\Illuminate\Support\Facades\Auth::check()):
            @if(\Illuminate\Support\Facades\Auth::user()->roles == 'admin')
                <li> <a href="{{route('GroupActivityReg')}}">تسجيل نشاط جماعي</a></li>
                <li> <a href="{{route('employeesInformation')}}">نشاطات الموظفين</a></li>
            @endif
            @endif
        </ul>
        <ul class="nav navbar-nav navbar-right" style="padding-right: 20px; padding-top: 10px;">
            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <x-dropdown-link :href="route('logout')"
                                 onclick="event.preventDefault();
                                                this.closest('form').submit();">
                    {{ __('Log out') }}
                </x-dropdown-link>
            </form>
        </ul>
    </div>
</nav>

<div >
    <h1>النشاطات السابقة</h1>
</div>


@foreach($activities as $activity):
<div class="col-md-4">


    <div class="card user-card">
        <div class="card-header">


        </div>
        <div class="card-block">


            <div class="user-image">
                <img src="{{asset('img/runner.svg')}}" class="img-radius" alt="User-Profile-Image">
            </div>
            <h6 class="f-w-600 m-t-25 m-b-10">رقم النشاط: {{$activity->id}}</h6>

            <hr>
            <p class="text-muted m-t-15">مستوى   التمرين :  % 87</p>
            <ul class="list-unstyled activity-leval">
                <li class="active"></li>
                <li class="active"></li>
                <li class="active"></li>
                <li></li>
                <li></li>
            </ul>
            <div class="bg-c-green counter-block m-t-10 p-20">
                <div class="row">
                    <div class="col-4">
                        <i class="fa fa-comment"></i>
                        <p> نوع النشاط: {{$activity->activity_type}}  </p>
                    </div>
                    <div class="col-4">
                        <i class="fa fa-user"></i>
                        <p> تاريخ انجاز النشاط: {{$activity->date}} </p>
                    </div>
                    <div class="col-4">
                        <i class="fa fa-suitcase"></i>
                        <p>وقت بدأ النشاط: {{$activity->start_time}} </p>
                    </div>
                    <div class="col-4">
                        <i class="fa fa-suitcase"></i>
                        <p>وقت أنهاء النشاط: {{$activity->end_time}} </p>
                    </div>
                    <div class="col-4">
                        <i class="fa fa-suitcase"></i>
                        <p> السعرات التي تم حرقها خلال التمرين:  {{$activity->calories}}</p>
                    </div>
                </div>
            </div>



            <hr>

        </div>

    </div>

</div>

@endforeach








<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script type="text/javascript">

</script>
</body>
</html>
