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
<div class="container bootstrap snippets bootdey">
    <div class="panel-body inf-content">
        <div class="row">
            <div class="col-md-4">
                <img alt="" style="width:600px;" title="" class="img-circle img-thumbnail isTooltip" src="https://bootdey.com/img/Content/avatar/avatar7.png" data-original-title="Usuario">
                <ul title="Ratings" class="list-inline ratings text-center">
                    <li><a href="#"><span class="glyphicon glyphicon-star"></span></a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-star"></span></a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-star"></span></a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-star"></span></a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-star"></span></a></li>
                </ul>
            </div>
            <div class="col-md-6">
                <strong> البيانات الشخصية</strong><br>
                <div class="table-responsive">
                    <table class="table table-user-information">
                        <tbody>
                        <tr>
                            <td>
                                <strong>
                                    <span class="glyphicon glyphicon-asterisk text-primary"></span>
                                    الرقم الوظيفي
                                </strong>
                            </td>
                            <td class="text-primary">
                                {{$user->id}}
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>
                                    <span class="glyphicon glyphicon-user  text-primary"></span>
                                    الاسم الاول
                                </strong>
                            </td>
                            <td class="text-primary">
                                {{$user->first_name}}
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>
                                    <span class="glyphicon glyphicon-user  text-primary"></span>
                                    الاسم الاخير                            </strong>
                            </td>
                            <td class="text-primary">
                                {{$user->last_name}}
                            </td>
                        </tr>



                        <tr>
                            <td>
                                <strong>
                                    <span class="glyphicon glyphicon-eye-open text-primary"></span>
                                    المنصب (الصلاحية)
                                </strong>
                            </td>
                            <td class="text-primary">
                                {{$user->roles}}
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>
                                    <span class="glyphicon glyphicon-envelope text-primary"></span>
                                    Email
                                </strong>
                            </td>
                            <td class="text-primary">
                                {{$user->email}}
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>
                                    <span class="glyphicon glyphicon-calendar text-primary"></span>
                                     تاريخ الميلاد
                                </strong>
                            </td>
                            <td class="text-primary">
                                {{$user->date_birth}}
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>
                                    <span class="glyphicon glyphicon-asterisk text-primary"></span>
                                    الهوايات
                                </strong>
                            </td>
                            <td class="text-primary">
                                {{$user->hobby}}
                            </td>
                        </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script type="text/javascript">

</script>
</body>
</html>
