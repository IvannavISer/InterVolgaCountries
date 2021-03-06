<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, maximum-scale=1">
    <title>{{$title}}</title>
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" type="text/css">

    <script type="text/javascript" src="{{asset('assets/js/jquery-1.11.0.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/bootstrap-filestyle.min.js')}}"></script>
    <!--[if lt IE 9]>
    <script src="{{asset('assets/js/respond-1.1.0.min.js')}}"></script>
    <script src="{{asset('assets/js/html5shiv.js')}}"></script>
    <script src="{{asset('assets/js/html5element.js')}}"></script>
    <![endif]-->

</head>
<body>
<header id="header_wrapper">
    <div id="filters" class="sixteen columns">
        <ul style="padding: 0px 0px 0px 0px">
            <li>
                <a href="{{route('showCountries')}}">
                    <h5>Показать все Страны</h5>
                </a>
            </li>
        </ul>
    </div>
    @if(count($errors)>0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if(session('status'))
        <div class="alert alert-success">
            {{session('status')}}
        </div>
    @endif
</header>
@yield('content')
</body>