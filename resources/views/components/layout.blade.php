<!doctype html>
<html lang="{{App::currentLocale()}}">
<head>
    <meta name="yandex-verification" content="f238ab72de4142a3" />
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-9969651043683101"
            crossorigin="anonymous"></script>
    <meta name="google-adsense-account" content="ca-pub-9969651043683101">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-T5QRJ9YT96"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-T5QRJ9YT96');
    </script>
    <script>
        var $window = (window)
        window.scroll(0, localStorage.getItem('scrollPosition')|0)
        $window.scroll(function () {
            localStorage.setItem('scrollPosition', $window.scrollTop())
        })
    </script>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta http-equiv="x-ua-compatible" content="ie=edge"/>
    <link rel="alternate" hreflang="ru" href="{{Request::root()}}/ru{{Str::substr(url()->current(), 33 , 1000)}}"  />
{{--    <link rel="alternate" hreflang="ua" href="{{Request::root()}}/ua{{Str::substr(url()->current(), 33 , 1000)}}"  />--}}
    <link rel="alternate" hreflang="x-default" href="{{Request::root()}}/ua{{Str::substr(url()->current(), 33 , 1000)}}"  />
    <meta property="og:image" content="@yield('og:image', "https://articles.madeis.com.ua/public/images/logoOG.jpg" )"/>
    <meta property="og:title" content="@yield('og:title', 'Корисні статті від "MadeIS". ')"/>
    <meta property="og:description" content="@yield('og:description', '✅Все про свічковаріння, від А до Я.
✅Виготовлення дифузорів та рум спреїв.
✅Аромаолії: правила використання.')"/>
    <meta property="og:page_url" content="@yield('og:page_url', 'hhttps://articles.madeis.com.ua/' )"/>
    <link rel="apple-touch-icon" sizes="180x180" href="https://articles.madeis.com.ua/images/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="https://articles.madeis.com.ua/images/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="/images/favicon-16x16.png" />
    <link rel ="icon" type = "image/x-icon" href ="https://articles.madeis.com.ua/images/favicon-32x32.png" />
    <link rel="manifest" href="https://articles.madeis.com.ua/images/site.webmanifest" />
    <link rel="mask-icon" href="https://articles.madeis.com.ua/images/safari-pinned-tab.svg" color="#5bbad5" />
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    @if(App::currentLocale() ==='ua')
        <title>@yield('title', 'Виготовлення свічок із соєвого воску, все про виготовлення свічок з нуля. Виготовлення дифузорів, виготовлення рум спреїв. Виготовлення свічок з віддушками та ароматизаторами. Формові та контейнерні свічки.')</title>
        <meta name="title" content="@yield('title_m', 'Виготовлення свічок із соєвого воску, все про виготовлення свічок з нуля. Виготовлення дифузорів, виготовлення рум спреїв. Виготовлення свічок з віддушками та ароматизаторами. Формові та контейнерні свічки.')">
        <meta name="description" content="@yield('description', 'Як правильно виготовити свічку? Скільки додати віддушки у свічку? Як зробити дифузор для дому? Чому свічка погано горить,тухне? Всі проблеми зі свічками і не тільки вирішуємо разом із "MadeIS".')">
        <meta name="keywords" content="@yield('keywords', 'Магазин Madeis, товари для свічок, як виготовити свічку, виготовлення свічок з соєвого воску,які ароматизатори підходять для свічок, все про виготовлення свічок, як зробити аромадифузор для дому, скільки віддушки додати у віск, проблеми зі свічками, як зробити ароматичну свічку, види восків, які бувають воски, види гнотів для свічок, як зробити свічку з деревяним гнотом, madeis.com.ua madeis')">
    @else
        <title>@yield('title', 'Изготовление свечей из соевого воска, все об изготовлении свечей с нуля. Изготовление диффузоров, изготовление рум спреев. Изготовление свечей с отдушками и ароматизаторами. Формовые и контейнерные свечи.')</title>
        <meta name="title" content="@yield('title_m', 'Изготовление свечей из соевого воска, все об изготовлении свечей с нуля. Изготовление диффузоров, изготовление рум спреев. Изготовление свечей с отдушками и ароматизаторами. Формовые и контейнерные свечи. ')">
        <meta name="description" content="@yield('description', 'Как правильно изготовить свечу? Сколько добавить отдушки в свечу? Как сделать диффузор для дома? Почему свеча плохо горит, гаснет? Все проблемы со свечами и не только решаем вместе с "MadeIS".')">
        <meta name="keywords" content="@yield('keywords', 'Магазин Madeis, товары для свечей, как изготовить свечу, изготовление свечей из соевого воска, которые ароматизаторы подходят для свечей, все об изготовлении свечей, как сделать аромадифузор для дома, сколько отдушки добавить в воск, проблемы со свечами, как сделать ароматическую свечу, виды восков, какие бывают воски, виды фитилей для свечей, как сделать свечу с деревянным фитилем, madeis.com.ua madeis')">    @endif
    <link rel="canonical" href="{{url()->current()}}"/>
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">


    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">


    <script src="{{ asset('js/bootstrap.bundle.min.js') }}" defer async></script>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Caveat">



    <style>
        html {
            scroll-behavior: smooth;
        }
        .clamp {
            display: -webkit-box;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
        .clamp.one-line {
            -webkit-line-clamp: 1;
        }
    </style>
</head>
<body style="font-family: Open Sans, sans-serif">
<div class="  bg-gray-100 border-opacity-5  text-right py-1 px-4 ">
    <div class="py-1 text-centre">
        <div class="inline float-left">
            <a href="{{ url('/ua/') }}">UA</a>|<a href="{{ url('/ru/') }}">RU</a>
        </div>
        <div class="dropdown px-1 inline-block">
            {{--            <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">--}}
            <a class="text-sm  lg:text-base  text-black inline  px-1  rounded-full nav-link dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false"
               style=" position: relative; top: 0px !important;
           text-decoration: none;  border: 3px solid rgb(255, 179, 0);padding-top: 0rem;padding-bottom: 0rem;"
            >
                {{__('До товарів')}}
            </a>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="width: auto; min-width: max-content;" >
                <li><a class="dropdown-item "  href="https://madeis.com.ua/{{app()->getLocale()}}/"  >{{__("Всі категорії")}}</a></li>
                <li><hr class="dropdown-divider"></li>
                @foreach (App\Models\Category::all() as $category)


                                <li><a class="dropdown-item"   href="https://madeis.com.ua/{{app()->getLocale()}}/?category={{ $category->slug }}&{{ http_build_query(request()->except('category', 'page')) }}">{{ __(ucwords($category->name))}}</a></li>
                @endforeach
                {{--                <li><a class="dropdown-item" href="/{{app()->getLocale()}}/info_delivery">{{__("Доставка")}}</a></li>--}}
            </ul>
        </div>
{{--        <div class="dropdown px-1 inline-block">--}}
{{--            <a class="text-sm lg:text-base text-black inline px-1 rounded-full nav-link dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false" style="position: relative; top: 0px !important; text-decoration: none; border: 3px solid rgb(255, 179, 0); padding-top: 0rem; padding-bottom: 0rem;">--}}
{{--                {{__('Інформація')}}--}}
{{--            </a>--}}
{{--            <ul class="dropdown-menu " aria-labelledby="dropdownMenuLink" style="width: auto; min-width: max-content;">--}}
{{--                <li><a class="dropdown-item" href="/{{app()->getLocale()}}/info_payment">{{__("Оплата")}}</a></li>--}}
{{--                <li><a class="dropdown-item" href="/{{app()->getLocale()}}/info_delivery">{{__("Доставка")}}</a></li>--}}
{{--                <li><a class="dropdown-item" href="/{{app()->getLocale()}}/info_contact">{{ __('Контакти')}}</a></li>--}}
{{--            </ul>--}}
{{--        </div>--}}
        <div class=" hidden  lg:inline-flex  inline-block   rounded-full">
            <a href="https://instagram.com/madeis.ua" rel=”nofollow" target="_blank">
                <img src="/images/instagram.webp" alt="" style="width: 22px; position: relative;  top: 6px !important;">
            </a>
        </div>
        <div class=" hidden  lg:inline-flex  inline-block   rounded-full">
            <a href="https://t.me/MadeIS_UA" rel=”nofollow" target="_blank">
                <img src="/images/telegram.webp" alt="" style="width: 22px; position: relative;  top: 6px !important;">
            </a>
        </div>
        <div class=" hidden  lg:inline-flex  inline-block   rounded-full">
            <a href="https://www.facebook.com/madeis.ua/" rel=”nofollow" target="_blank">
                <img src="/images/facebook.png" alt="" style="width: 22px; position: relative;  top: 6px !important;">
            </a>
        </div>

    </div>
</div>
<nav class="md:flex  flex md:justify-between justify-between items-center  md:items-center">
    <div class=" px-2 ">
        <a href="/{{app()->getLocale()}}">
            <img src="/images/logo.webp" alt="Logo" width="100" height="60">
        </a>
    </div>
    <div class="mt-8 md:mt-0 flex inline-block items-center  px-15">
{{--        <a href="{{ route('cart.list',app()->getLocale()) }}" class="flex mr-18 items-center"--}}
{{--           style="  text-decoration-color: #747171;">--}}
{{--            <img src="/images/cart.png" alt="cart" width="40" height="40">--}}
{{--            <i class="ya-share1__item text-lg lg:text-xl "> <span--}}
{{--                    class="hidden  lg:inline-flex  ">  {{__("Всього:")}}</span> {{ Cart::getTotal() }} грн</i></a>--}}
    </div>

</nav>
{{--<div style="float: right; width: 25%; background-color: #f2f2f2;">--}}
{{--    <!-- Содержимое колонки -->--}}
{{--</div>--}}

{{ $slot }}

<footer class="bg-gray-100  border-opacity-5 rounded-xl text-center py-1 px-1 mt-5" style="
  left: 0;
  bottom: 0;
  width: 100%;
  height: 100px; /* высота элемента footer */
  background-color: #f8f8f8;
  border-radius: 16px;
  text-align: center;
  padding: 1rem;
  box-sizing: border-box;">
    <div class=" inline py-1 px-2 bg-gray-200 rounded-full  "
         style="position: relative;   height: 200px; border: 3px solid rgb(255, 179, 0);">
        <span>{{__("Приєднуйтесь до нас у соцмережах")}}</span>
    </div>
    <div style=" position: relative; top: 8px !important;">
        <div class="relative inline-block mx-auto lg:bg-gray-200 rounded-full">
            <a href="https://instagram.com/madeis.ua" target="_blank">
                <img src="/images/instagram.webp" alt="" class="mx-auto " style="width: 50px;">
            </a>
        </div>
        <div class="relative inline-block mx-auto lg:bg-gray-200 rounded-full">
            <a href="https://t.me/MadeIS_UA" target="_blank">
                <img src="/images/telegram.webp" alt="" rel=”nofollow" class="mx-auto " style="width: 50px;">
            </a>
        </div>
        <div class="relative  inline-block mx-auto lg:bg-gray-200 rounded-full">
            <a href="https://www.facebook.com/madeis.ua/" target="_blank">
                <img src="/images/facebook.png" alt="" class="mx-auto " style="width: 50px;">
            </a>
        </div>
    </div>

    <div class="fixed  py-1 px-3 rounded-full bottom-3 right-3   text-xl" style="background-color:hsla(0,0%,100%,0.71);">
        <a href="https://madeis.com.ua/{{app()->getLocale()}}" class="flex mr-18 items-center">
            <img src="/images/cart12.png" alt="cart" width="35" height="35">
            <i class=" text-lg lg:text-xl " style=" padding: 0.5em 20px 11px 0px;font-weight: 600;">

                <span>  {{__("До покупок")}}</span></i></a>

    </div>

</footer>

<x-flash/>

</body>

