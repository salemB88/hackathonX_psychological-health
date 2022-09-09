<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="{{asset('css/styleMain.css')}}">

    <style>
        body{
            /* background-image: url("tes1.png");
            background-attachment: fixed;
           background-size: contain;
  */
            background-color:
                #042454;
        }
        div.fount {
            font-family: Arial;
            font-size: 55px;
            font-weight: bold;
        }
        #divText {
            background-color:white;

            border-radius: 10px;
            width: 50%;
            height: 50%;
            color: black;


            padding: 10px;

            margin: auto;
            margin-top: 30px;
            text-align: center;
        }
        #containers {
            margin: 50px 0 0 0;
            text-align: center;
        }

        #text {
            display: inline-block;
            color:white;
            border-right: 3px solid no;
            /* background-color: #495464; */
            border-radius: 10px;
            background-size: contain;
            padding: 10px;
            margin: auto;
        }

        html body {
            direction: rtl;
        }
    </style>

</head>

<body>

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">منصة همة</a>
        </div>
        <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>

        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="{{route('register')}}"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
            <li><a href="{{route('login')}}"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        </ul>
    </div>
</nav>


<div id="containers">
    <div id="text" class="fount"></div>
</div>

<div id="divText">
    <h1>شعارانا "نحو صحة وعمل افضل"</h1>
</div>


<script type="text/javascript" src="{{asset('js/myscripts.js')}}"></script>

</body>

</html>
