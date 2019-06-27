<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no">
    <title></title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/home/swiper.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/home/css.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/home/progressjs.css')}}" />
    <script>
        let host= "{{ get_host()}}";
        let menu=host+'/images/menu.png';
    </script>
</head>