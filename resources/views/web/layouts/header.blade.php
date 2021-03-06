<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no">
     <title>{{ $seo['title'] }}</title>
    <meta name="description" content="{{ !empty($seo['description']) ? $seo['description'] : 'pdf'  }}" />
    <meta name="keywords" content="{{ !empty($seo['keywords']) ? $seo['keywords'] : 'pdf' }}" />
    <link rel="icon" href="" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/home/swiper.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/home/css.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/home/progressjs.css')}}" />

    <link rel="stylesheet" type="text/css" href="{{asset('css/home/webuploader.css')}}" />
    <script type="text/javascript" src="{{asset('js/home/jquery-2.1.4.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/home/webuploader.js')}}" ></script>
    <script>
        let host= "{{ get_host()}}";
        let menu=host+'/images/menu.png';
    </script>
</head>