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
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <style type="text/css">
        .inf-content {
            border: 1px solid #DDDDDD;
            -webkit-border-radius: 10px;
            -moz-border-radius: 10px;
            border-radius: 10px;
            box-shadow: 7px 7px 7px rgba(0, 0, 0, 0.3);
        }

        body {
            background-color: #eee;
        }

        *[role="form"] {
            max-width: 530px;
            padding: 15px;
            margin: 0 auto;
            background-color: #fff;
            border-radius: 0.3em;
        }

        *[role="form"] h2 {
            margin-left: 5em;
            margin-bottom: 1em;


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
<div class="container">
    <form class="form-horizontal" role="form" method="post" action="{{route('GroupActivityStore')}}">
        @csrf
        <h2>أضافة نشاط جماعي جديد للموظفين </h2>
        <!-- the type of activity will come from back end(admin add all this type) -->

        <div class="form-group">
            <label for="birthDate" class="col-sm-3 control-label">وصف قصير للنشاط</label>
            <div class="col-sm-9">
                <input type="text" id="birthDate" class="form-control" name="description">
            </div>

        </div>

        <div class="form-group">
            <label for="birthDate" class="col-sm-3 control-label">التاريخ</label>
            <div class="col-sm-9">
                <input type="date" id="birthDate" class="form-control" name="date">
            </div>
        </div>

        <div class="form-group">
            <label for="birthDate" class="col-sm-3 control-label">الوقت</label>
            <div class="col-sm-9">
                <input type="time" id="birthDate" class="form-control" name="time">
            </div>
        </div>


        <div class="form-group">
            <label for="birthDate" class="col-sm-3 control-label">الموقع</label>
            <div class="col-sm-9">
                <input type="text" id="birthDate" class="form-control" name="location">
            </div>

        </div>



        <div class="form-group">
            <div class="col-sm-9 col-sm-offset-3">
                <button type="submit" class="btn btn-primary btn-block">أضافة</button>
            </div>
        </div>
    </form> <!-- /form -->
</div> <!-- ./container -->

</script>
</body>

</html>
