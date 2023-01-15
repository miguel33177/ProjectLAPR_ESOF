<!DOCTYPE html>
<html lang="en">

<head>
    <title> @yield('title' ,'Online Shop') </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon"  href="{{URL ::asset('assets/img/iconWebsite.png') }}">
    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ URL::asset('assets/css/bootstrap.min.css')}}" type="text/css" />

    <!-- Slick -->
    <link rel="stylesheet" href="{{ URL ::asset('assets/css/slick.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{ URL ::asset('assets/css/slick-theme.css')}}" type="text/css" />

    <!-- nouislider -->
    <link rel="stylesheet" href="{{ URL ::asset('assets/css/nouislider.min.css')}}" type="text/css" />

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="{{ URL ::asset('assets/css/font-awesome.min.css')}}">

    <!-- Custom stlylesheet -->
    <link rel="stylesheet" href="{{ URL ::asset('assets/css/style.css')}}" type="text/css" />

   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha384-oqVuAfXRKap7fdgcCY5uykM6+R9GqQ8K/uxy9rx7HNQlGYl1kPzQho1wx4JwY8wC"></script>

  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-oqVuAfXRKap7fdgcCY5uykM6+R9GqQ8K/uxy9rx7HNQlGYl1kPzQho1wx4JwY8wC"></script>
<body>
    @include ('includes.header')
    <main>@yield ('content')</main>
    @include ('includes.footer')

</body>