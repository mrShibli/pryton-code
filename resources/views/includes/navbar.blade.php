@php
    $bg='';
    auth()->check() && auth()->user()->dark_mode == 'on' ? $bg=' black !important' : $bg='white !important';
    $txt = '';
    auth()->check() && auth()->user()->dark_mode == 'on' ? $txt='  white ' : $txt='black ';
@endphp
<style>
    .active-navbar .custom-header-button {
        border-color: black;
        color: black;
    }

    .custom-header-button {
        border: 1px solid white;
        color: white;
        font-size: 14px;
        font-weight: 300 !important;
        font-family: sans-serif;
    }

    .custom-navbar {
        /* background: transparent !important; */
        background: #07070763 !important;
        position: fixed;
        width: 100%;
        top: 0;
        left: 0;
        z-index: 99;
        /* padding: 20px; */
        transition: 300ms;
    }

    .custom-navbar.active-navbar {
        background: white !important;
    }

    .btn-hover-white {
        transition: 300ms;
    }

    .btn-hover-white:hover {
        background: white;
        color: black;
    }

    .active-navbar .header-buttons-part .header-get-started.custom-header-button {
        background: black;
        background-color: black !important;
        border-color: black;
        color: white !important;
    }

    .btn-hover-black {
        transition: 300ms;
    }

    .btn-hover-black:hover {
        background: black;
        color: white;
        border-color: black;
    }

    .active-navbar .company-text {
        color: black;
    }

    .company-text {
        text-transform: uppercase;
        font-size: 23px;
        font-family: sans-serif;
        color: white;
    }

    .custom-drop-down-menu {}

    .custom-drop-down-menu .nav-item {
        transition: 300ms;
    }

    .active-navbar .custom-drop-down-menu .nav-item .nav-link {
        color: black;
    }

    .custom-drop-down-menu .nav-item .nav-link {
        color: white;
        font-size: 14px;
        font-family: sans-serif;
        background: transparent;
        padding: 10px 20px;
        text-align: center;
        border-radius: 20px;
        transition: 300ms;
    }

    .active-navbar .tab-head-content .tab-head {
        color: rgb(107, 50, 164) !important;
    }

    .custom-drop-down-menu .nav-item:hover .nav-link {
        background: black;
        color: white ;
    }

    .tab-head-content .tab-head {
        color: white;
        font-size: 14px;
        font-family: sans-serif;
        background: transparent;
        padding: 10px 20px;
        text-align: center;
        border-radius: 20px;
        transition: 300ms;
    }

    .tab-head-content>li>a {
        text-decoration: none;
    }

    .tab-head-content .tab-head:hover {
        background: black;
        color: white;
    }

    /* DROPDOWN CSS */
    .drop-down-menu-item {
        width: 20%;
    }

    .drop-down-menu-part {
        width: 40%;
    }

    .company-logo-part {
        width: 20%;
    }

    .header-buttons-part {
        width: 40%;
    }

    .drop-down-menu {
        background: white;
        width: 100%;
        height: 33vh;
        transition: 300ms;
        top: -22px;
        left: 0;
        visibility: hidden;
        opacity: 0;
    }

    .tab-head:hover .drop-down-menu {
        top: 65px;
        visibility: visible;
        opacity: 1;
    }

    .tab-pane {
        position: absolute;
        background:  {{ $bg }} ;
        width: 100%;
        height: auto;
        transition: 300ms;
        top: -22px;
        left: 0;
        visibility: hidden;
        opacity: 0;
        padding: 20px 35px;
    }
    .tab-pane.active {
        top: 65px;
        visibility: visible;
        opacity: 1;
    }

    .drop-down-menu-part .menu-title {
        font-family: system-ui;
        font-weight: 400;
        color: black;
        opacity: 1;
        transition: 300ms;
        text-decoration: none;
        cursor: pointer;
    }

    .drop-down-menu-part .menu-title>span {
        transition: 300ms;
    }

    .drop-down-menu-part .menu-title:hover>span {
        margin-right: 5px;
    }

    .drop-down-menu-part .menu-title i {
        margin-left: 5px;
        font-size: 10px;
        opacity: 1;
    }

    .drop-down-menu-part .menu-body {
        margin-top: 20px;
    }

    .drop-down-menu-part .menu-item {
        font-family: system-ui;
        cursor: pointer;
        font-weight: normal;
        font-size: 12px;
        opacity: 0.6;
        margin-top: 5px;
        color: black;
        display: block;
        text-decoration: none;
    }

    .drop-down-menu-main {
        padding-top: 20px;
        transition: 300ms;
    }

    .search-box {
        position: relative;
    }

    .search-box>.fa-search {
        position: absolute;
        left: 10px;
        top: 50%;
        transform: translate(0%, -50%);
        font-size: 14px;
        color: white;
    }

    .search-box>.fa-times {
        cursor: pointer;
        position: absolute;
        right: 10px;
        top: 50%;
        transform: translate(0%, -50%);
        font-size: 14px;
        color: white;
    }

    .search-box>input {
        padding: 9px 15px 9px 30px;
        border-radius: 20px;
        background: transparent;
        width: 320px;
        color: white;
    }

    .search-box>input::placeholder {
        font-size: 12px;
        font-family: system-ui;
    }

    /* FIXED NAVBAR */
    .fixed-navbar.custom-navbar {
        backdrop-filter: blur(20px) brightness(100%);
    }

    .fixed-navbar.custom-navbar>div {
        padding: 10px !important;
    }

    .custom-navbar>div {
        transition: 400ms;
    }

</style>

{{-- MOBILE NAVBAR CSS --}}
<style>
    .show-in-mobile {
        display: none;
    }

    .show-in-mobile .custom-header-button {
        padding: 2px 8px !important;
        font-size: 12px;
        background: transparent !important;
        color: white !important;
    }

    .show-in-mobile .navbar-body {
        padding: 10px 20px !important;
    }

    .fixed-navbar.custom-navbar.show-in-mobile .navbar-body {
        padding: 7px 10px !important;
    }

    .custom-search-btn {
        right: 0;
        z-index: 99;
        background: gray !important;
        color: white;
        padding: 0 10px;
        font-size: 16px;
        height: 100%;
        border-radius: 0 2px 2px 0;
    }

    .explore-accordian::before {
        display: none !important;
    }

    @media only screen and (max-width: 968px) {
        .hide-in-mobile {
            display: none !important;
        }

        .show-in-mobile {
            display: block !important;
        }
    }

    .cd-accordion {
        padding-left: 0px;
        background: hsl(218, 7%, 32%);
        background: var(--cd-color-1);
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
        box-shadow: 0 1px 8px rgba(0, 0, 0, .1), 0 16px 48px rgba(0, 0, 0, .1), 0 24px 60px rgba(0, 0, 0, .1);
        box-shadow: var(--shadow-lg)
    }

    .cd-accordion--animated .cd-accordion__label::before {
        transition: -webkit-transform .3s;
        transition: transform .3s;
        transition: transform .3s, -webkit-transform .3s
    }

    .cd-accordion__sub {
        padding-left : 0px;
        display: none;
        overflow: hidden
    }

    .cd-accordion__sub--is-visible {
        display: block
    }

    .cd-accordion__item {
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none
    }

    .cd-accordion__input {
        position: absolute;
        opacity: 0
    }

    .cd-accordion__label {
        position: relative;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        padding: 0.75em 1.25em;
        padding: var(--space-sm) var(--space-md);
        background: hsl(218, 7%, 32%);
        background: var(--cd-color-1);
        --color-shadow: lightness(hsl(218, 7%, 32%), 1.2);
        --color-shadow: lightness(var(--cd-color-1), 1.2);
        box-shadow: inset 0 -1px lightness(hsl(218, 7%, 32%), 1.2);
        box-shadow: inset 0 -1px var(--color-shadow);
        color: hsl(0, 0%, 100%);
        color: var(--color-white);
        cursor: pointer;
    }

    .cd-accordion__label span {
        -ms-flex-order: 3;
        order: 3
    }

    .cd-accordion__label:hover {
        background: hsl(218, 7%, 35.2%);
        background: hsl(var(--cd-color-1-h), var(--cd-color-1-s), calc(var(--cd-color-1-l)*1.1))
    }

    .cd-accordion__label--icon-folder::before {
        content: '\203A';
        font-family: "Font Awesome 5 Free";
        display: block;
        font-size: 20px;
        font-weight: bold;
        background-repeat: no-repeat;
        margin-right: 0.25em;
        margin-right: var(--space-xxxs);
        position: absolute;
        right: 10px;
        top: 5px;
    }

    .cd-accordion__label--icon-folder::before {
        -ms-flex-order: 1;
        order: 1
    }


    .cd-accordion__label--icon-folder::before {
        background-position: 0 0;
        -webkit-transform: rotate(0deg);
        -ms-transform: rotate(0deg);
        transform: rotate(0deg);
        transition: -webkit-transform .3s;
        transition: transform .3s;
        transition: transform .3s, -webkit-transform .3s
    }


    .cd-accordion__input:checked+.cd-accordion__label::before {
        -webkit-transform: rotate(90deg);
        -ms-transform: rotate(90deg);
        transform: rotate(90deg);
        right: 10px;
        transition: -webkit-transform .3s;
        transition: transform .3s;
        transition: transform .3s, -webkit-transform .3s;
    }


    .cd-accordion__input:checked~.cd-accordion__sub {
        display: block
    }

    .cd-accordion__sub--l1 .cd-accordion__label {
        background: hsl(218, 7%, 20.8%);
        background: hsl(var(--cd-color-1-h), var(--cd-color-1-s), calc(var(--cd-color-1-l)*0.65));
        --color-shadow: lightness(hsl(218, 7%, 32%), 0.85);
        --color-shadow: lightness(var(--cd-color-1), 0.85);
        box-shadow: inset 0 -1px lightness(hsl(218, 7%, 32%), 0.85);
        box-shadow: inset 0 -1px var(--color-shadow);
        padding-left: calc(1.25em + 16px);
        padding-left: calc(var(--space-md) + 16px)
    }

    .cd-accordion__sub--l1 .cd-accordion__label:hover {
        background: hsl(218, 7%, 24%);
        background: hsl(var(--cd-color-1-h), var(--cd-color-1-s), calc(var(--cd-color-1-l)*0.75))
    }

    .cd-accordion__label {
        box-shadow: none;
        padding: 6px 10px 6px 10px;
        transition: 0.4s;
    }

    .cd-accordion__label:hover {
        color: var(--primary);
        background: linear-gradient(to right, #fff 0, #ccc 100%) !important;
    }

    .cd-accordion__sub--l2 .cd-accordion__label {
        padding-left: calc(1.5em + 32px);
        padding-left: calc(var(--space-md) + var(--space-xxxs) + 32px)
    }

    .cd-accordion__label span a {
        color: var(--text) !important;
        font-size: 14px;
        font-family: sans-serif;
    }

    .cd-accordion__label:hover span a {
        color: var(--primary) !important;
    }

    .cd-accordion__sub--l3 .cd-accordion__label {
        padding-left: calc(1.5em + 48px);
        padding-left: calc(var(--space-md) + var(--space-xxxs) + 48px)
    }

    .list-link {
        position: relative;
        font-size: 16px;
        font-weight: 400;
        color: var(--text);
        text-transform: initial;
        display: block;
        margin: 0;
        text-decoration: none;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: start;
        -ms-flex-pack: start;
        justify-content: flex-start;
        transition: all linear .3s;
        -webkit-transition: all linear .3s;
        -moz-transition: all linear .3s;
        -ms-transition: all linear .3s;
        -o-transition: all linear .3s;
        padding: 8px 0px 8px 18px;
        font-size: 15px;
        transition: 0.5s;
    }

    /* .cd-accordion .flaticon-groceries{
        font-size: 18px;
        margin-right: 10px;
    }
    .cd-accordion__label:hover .flaticon-groceries{
        color: var(--primary) !important;
    } */
    .cd-accordion .fa-angle-right {
        position: absolute;
        right: 18px;
        top: 50%;
        transform: translate(0, -50%);
    }

    .cd-accordion .fa-angle-right2 {
        position: absolute;
        right: 18px;
        top: 50%;
        transform: translate(0, -50%);
    }

    .cd-accordion .inner-cd-accordion__label {
        padding: 5px 10px 5px 22px !important;
    }

    .cd-accordion .only-text-item {
        padding: 5px 10px 5px 30px !important;
        cursor: pointer;
        transition: 0.4s;
    }

    .cd-accordion .inner-only-text-item {
        padding: 5px 10px 5px 50px !important;
    }

    .cd-accordion .only-text-item:hover {
        background: linear-gradient(to right, #fff 0, #ccc 100%) !important;
    }

    .cd-accordion .only-text-item a {
        color: var(--text);
        font-size: 13px;
    }

    .cd-accordion .only-text-item:hover a {
        color: var(--primary);
    }

    .cd-accordion__label {}

    .cd-accordion__label--icon-folder i {}

    /*========================================
            main-left-sidebar CSS START
    ========================================= */
    .main-left-sidebar .category-header {
        background-color: var(--white);
        box-shadow: inset 0px -1px 1px 0px rgb(0 0 0 / 40%);
    }

    .main-left-sidebar .category-title {
        text-align: center;
    }

    .main-left-sidebar .category-title i {
        font-size: 16px;
    }

    .main-left-sidebar .category-title span {
        font-size: 18px;
        text-transform: capitalize;
    }

    .category-menu-hide {
        position: absolute;
        right: 2px;
        top: 1px;
        background: transparent;
        border: none;
    }

    .category-menu-hide i {
        font-size: 16px;
    }

    .category-menu-btn {
        display: none;
        position: absolute;
        left: 10px;
        top: 18px;
        z-index: 999;
        border: none;
        background: transparent;
    }

    .fixed .category-menu-btn {
        top: 15px;
    }

    .category-menu-btn:focus {
        outline: none;
    }

    .category-menu-btn i {
        font-size: 20px;
    }

    .show-category-sidebar {
        display: block !important;
    }

    .search-bar .body-layout {
        position: relative;
    }

    .main-left-sidebar {
        padding: 20px 0px 50px 0 !important;
        position: fixed;
        width: 70%;
        height: 100vh;
        top: 0px;
        left: 0;
        overflow-y: auto;
        z-index: 9999999;
        background: white;
        transition: 0.4s;
        box-shadow: -1px 0px 8px 1px rgb(0 0 0 / 20%);
    }

    .fixed .main-left-sidebar {
        z-index: 9999999;
    }

    .main-left-sidebar .category-footer p {
        font-size: 12px;
    }

    .main-left-sidebar .category-footer {
        padding-bottom: 70px;
    }

    .main-left-sidebar .category-link {
        padding: 8px 0px 8px 18px;
        font-size: 15px;
        transition: 0.5s;
    }

    .main-left-sidebar .category-link i {
        font-size: 22px;
        margin-right: 10px;
    }

    .main-left-sidebar .category-link:hover {
        background: linear-gradient(to right, #fff 0, #ccc 100%);
    }

    .main-left-sidebar .dropdown-list {
        padding-right: 0;
        padding-left: 30px;
    }

    .main-left-sidebar .dropdown-list li a::before {
        left: 23px;
    }

    .main-left-sidebar .dropdown-list li a {
        padding-right: 0;
        border-radius: 0;
    }

    .main-left-sidebar .dropdown-list li a:hover {
        background: linear-gradient(to right, #fff 0, #ccc 100%);
        padding-right: 0;
        border-radius: 0;
    }

    .main-left-sidebar .dropdown-list li button {
        padding-right: 0;
        border-radius: 0;
        text-align: left;
    }

    .main-left-sidebar .dropdown-list li button {
        width: 100%;
        font-size: 15px;
        line-height: 18px;
        border-radius: 8px;
        padding: 10px 15px 10px 35px;
        color: var(--text);
        background: var(--white);
        position: relative;
        white-space: nowrap;
        text-transform: initial;
        transition: all linear .3s;
        -webkit-transition: all linear .3s;
        -moz-transition: all linear .3s;
        -ms-transition: all linear .3s;
        -o-transition: all linear .3s;
    }

    .main-left-sidebar .dropdown-list li button:hover {
        background: linear-gradient(to right, #fff 0, #ccc 100%);
        padding-right: 0;
        border-radius: 0;
    }

    .main-left-sidebar .dropdown-list li button::before {
        position: absolute;
        top: 50%;
        left: 15px;
        content: "\f068";
        font-size: 10px;
        font-weight: 900;
        font-family: "Font Awesome 5 Free";
        -webkit-transform: translateY(-50%);
        transform: translateY(-50%);
    }

    .main-left-sidebar .dropdown-list li button::before {
        left: 23px;
    }

    .main-left-sidebar .left-category-list {
        overflow-y: unset;
        padding: 0;
        height: 100%;
    }

    .main-left-sidebar .left-category-list .category-item {
        border-bottom: none;
    }

    .main-left-sidebar .category-header {
        padding: 3px 18px 13px 10px;
        border-bottom: 1px solid lightgray;
    }

    .main-left-sidebar .offer-food {
        margin-bottom: 25px;
        margin-left: 20px;
        margin-top: 15px;
        position: relative;
    }

    .main-left-sidebar-col .category-header::after {
        content: '';
        position: absolute;
        bottom: 5px;
        right: 0;
        height: 1px;
        width: 100%;
        background-color: #e0dbce;
    }

    .main-left-sidebar .offer-food span {
        color: #373f50;
    }

    .main-left-sidebar .offer-food .offers .offer-num {
        color: #FF4747;
        padding: 1px 3px;
        border: 1px solid #FF4747;
        border-radius: 6px;
    }

    .main-left-sidebar .category-offer span {
        color: #373f50;
        font-size: 14px;
    }

    .main-left-sidebar .category-offer .offer-num {
        color: #FF4747;
        font-size: 13px;
        padding: 3px;
        border: 1px solid;
        border-radius: 5px;
    }

    .main-left-sidebar .category-header .cross-times {
        height: 30px;
        width: 30px;
        border-radius: 50%;
        background-color: var(--white);
        line-height: 30px;
        position: absolute;
        right: -18px;
        top: -1px;
        text-align: center;
    }

    .main-left-sidebar .category-offer span {
        color: #373f50;
        font-size: 14px;
    }

    .main-left-sidebar .category-offer .offer-num {
        color: #FF4747;
        font-size: 13px;
        padding: 0 3px;
        border: 1px solid;
        border-radius: 5px;
    }

    .cd-accordion__label span a {
        font-size: 13px !important;
    }

    .cd-accordion__label {
        padding: 5px 15px 5px 15px !important;
        margin: 0 !important;
        color: black;
    }

    .cd-accordion__label--icon-folder::before {
        top: 2px !important;
    }

    /* ========================================
            main-left-sidebar CSS END
    ========================================= */
    
    @media only screen and (max-width: 1190px) and (min-width: 980px)  {
        .toggleRegister  {
            font-size: 11px;
            padding: 9px 8px;
        }
        .custom-header-button {
            font-size: 11px;
            padding: 9px 8px;
        }
        .tab-head-content .tab-head {
            padding: 10px;
        }

    }

    @media only screen and (max-width: 450px) and (min-width: 200px)  {
        .hayhay{
            width: 138px;
        }
        .show-in-mobile .navbar-body {
            padding: 10px 0px !important;
        }
        .mm-not{
            margin: 0px !important ;
        }
    }
    /* tab-pane */

</style>
@php
    
    
@endphp

{{-- NAVBAR IN LARGE DEVICE --}}
<nav class="custom-navbar hide-in-mobile" style="">

    <div class="position-relative" style="padding: 10px">
        <div class="d-flex align-items-center">

            {{-- DROPDOWN MENU --}}
            <div class="drop-down-menu-part">

                <!-- Nav pills -->
                <ul class="nav nav-pills tab-head-content">
                    <li class=""><a class="tab-head" href="#tab-1" data-toggle="tab">Home</a></li>
                    <li class=""><a class="tab-head" href="#tab-2" data-toggle="tab">Explore</a></li>
                    <li><a class="tab-head" href="#tab-3" data-toggle="tab">Features</a></li>
                    <li><a class="tab-head" href="#tab-4" data-toggle="tab">Pricing</a></li>
                    <li><a class="tab-head" href="#tab-5" target="_blank" data-target="#tab-4" data-hover="tab">Resources</a></li>
                    {{-- <li><a class="tab-head" href="" data-target="#tab-5" data-hover="tab">Explore</a></li> --}}
                </ul>

                <!-- Tab panes -->
                <div class="tab-content well">
                    <div class="tab-pane" id="tab-1">
                        <div class="d-flex drop-down-menu-main">
                            <div class="drop-down-menu-item">
                                <a href="/" class="menu-title d-flex align-items-center"><span>Home</span> <i class="fa fa-arrow-right"></i></a>
                                <div class="menu-body">
                                    <a href="#home" class="menu-item">Home</a>
                                    <a href="#Get_to_know_your_customers" class="menu-item">Get to know your customers</a>
                                    <a href="#Cut_through_the_noise" class="menu-item">Cut through the noise</a>
                                    <a href="#Straight_Up_Sisters" class="menu-item">Straight Up Sisters</a>
                                    <a href="#More_ways_to_get_paid" class="menu-item">More ways to get paid</a>
                                    <a href="#Other_Cafes_on_Patreonpass" class="menu-item">Other Cafes on Patreonpass</a>
                                    <a href="#Get_Start" class="menu-item">Get Start</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab-2">
                        <div class="d-flex drop-down-menu-main">
                            <div class="drop-down-menu-item">
                                <a href="{{ route('cafes') }}" class="menu-title d-flex align-items-center"><span>Cafes</span> <i class="fa fa-arrow-right"></i></a>
                                <div class="menu-body">
                                    <a href="#get-to-know-your-listeners" class="menu-item">Get to know your customers</a>
                                    <a href="#cut-through-the-noise" class="menu-item">Cut through the noise</a>
                                    <a href="#more-ways-to-get-paid" class="menu-item">More ways to get paid</a>
                                    <a href="#meet-other-Cafes" class="menu-item">Other Cafes on Patreon</a>
                                </div>
                            </div>
                            <div class="drop-down-menu-item">
                                <a href="{{ route('creators.page') }}" class="menu-title d-flex align-items-center"><span>Video creators</span> <i class="fa fa-arrow-right"></i></a>
                                <div class="menu-body">
                                    <a class="menu-item">Turn your viewers into your people</a>
                                    <a class="menu-item">Reach every fan, every time</a>
                                    <a class="menu-item">More ways to get paid</a>
                                    <a class="menu-item">Other video creators on Patreon</a>
                                </div>
                            </div>
                            <div class="drop-down-menu-item">
                                <a href="{{ route('Musicians') }}" class="menu-title d-flex align-items-center"><span>Musicians</span> <i class="fa fa-arrow-right"></i></a>
                                <div class="menu-body">
                                    <a class="menu-item">From your mind to their ears</a>
                                    <a class="menu-item">Share more than music</a>
                                    <a class="menu-item">More ways to get paid</a>
                                    <a class="menu-item">Other musicians on Patreon</a>
                                </div>
                            </div>
                            <div class="drop-down-menu-item">
                                <a href="{{ route('Artists') }}" class="menu-title d-flex align-items-center"><span>Artists</span> <i class="fa fa-arrow-right"></i></a>
                                <div class="menu-body">
                                    <a class="menu-item">Earning made easy</a>
                                    <a class="menu-item">Create what inspires you</a>
                                    <a class="menu-item">Build community around your art</a>
                                    <a class="menu-item">Other artists on Patreon</a>
                                </div>
                            </div>
                            <div class="drop-down-menu-item">
                                <a href="{{ route('Game') }}" class="menu-title d-flex align-items-center"><span>Game devs</span> <i class="fa fa-arrow-right"></i></a>
                                <div class="menu-body">
                                    <a class="menu-item">A safe way to get paid</a>
                                    <a class="menu-item">Selling made simple</a>
                                    <a class="menu-item">Where real community thrives</a>
                                    <a class="menu-item">Other game devs on Patreon</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab-3">
                        <div class="d-flex drop-down-menu-main">
                            <div class="drop-down-menu-item">
                                <a class="menu-title d-flex align-items-center"><span>Create on your terms</span> <i class="fa fa-arrow-right"></i></a>
                                <div class="menu-body">
                                    <a class="menu-item">Getting started on Patreon</a>
                                    <a class="menu-item">Make it your own</a>
                                    <a class="menu-item">Reach every fan, every time</a>
                                    <a class="menu-item">Showcase your work</a>
                                </div>
                            </div>
                            <div class="drop-down-menu-item">
                                <a class="menu-title d-flex align-items-center"><span>Build real community</span> <i class="fa fa-arrow-right"></i></a>
                                <div class="menu-body">
                                    <a class="menu-item">Every post, every time</a>
                                    <a class="menu-item">More ways to stay close</a>
                                    <a class="menu-item">Get to know your fans</a>
                                </div>
                            </div>
                            <div class="drop-down-menu-item">
                                <a class="menu-title d-flex align-items-center"><span>Expand your reach</span> <i class="fa fa-arrow-right"></i></a>
                                <div class="menu-body">
                                    <a class="menu-item">Bring in new fans</a>
                                    <a class="menu-item">Unlock growth</a>
                                    <a class="menu-item">App integrations</a>
                                </div>
                            </div>
                            <div class="drop-down-menu-item">
                                <a class="menu-title d-flex align-items-center"><span>Get business support</span> <i class="fa fa-arrow-right"></i></a>
                                <div class="menu-body">
                                    <a class="menu-item">Help when you need it</a>
                                    <a class="menu-item">Policies to protect you</a>
                                    <a class="menu-item">Payments powered by Patreon</a>
                                </div>
                            </div>
                            <div class="drop-down-menu-item">
                                <a class="menu-title d-flex align-items-center"><span>Earning made easy</span> <i class="fa fa-arrow-right"></i></a>
                                <div class="menu-body">
                                    <a class="menu-item">Run a membership</a>
                                    <a class="menu-item">Sell digital products</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab-4">
                        <div class="d-flex drop-down-menu-main">
                            <div class="drop-down-menu-item">
                                <a class="menu-title d-flex align-items-center"><span>Starting a Patreon is free</span> <i class="fa fa-arrow-right"></i></a>
                                <div class="menu-body">
                                    <a class="menu-item">Powerful core features</a>
                                    <a class="menu-item">Earning made easy</a>
                                    <a class="menu-item">Paid membership</a>
                                    <a class="menu-item">Commerce</a>
                                    <a class="menu-item">Payments powered by Patreon</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab-5">
                        <div class="d-flex drop-down-menu-main">
                            <div class="drop-down-menu-item">
                                <a class="menu-title d-flex align-items-center"><span>Creator Hub</span> <i class="fa fa-arrow-right"></i></a>
                                <div class="menu-body">
                                    <a class="menu-item">Resources to get started</a>
                                    <a class="menu-item">Grow your membership</a>
                                    <a class="menu-item">Connect with creators</a>
                                </div>
                            </div>
                            <div class="drop-down-menu-item">
                                <a class="menu-title d-flex align-items-center"><span>Newsroom</span> <i class="fa fa-arrow-right"></i></a>
                                <div class="menu-body">
                                    <a class="menu-item">Patreon HQ</a>
                                    <a class="menu-item">Read latest policy updates</a>
                                    <a class="menu-item">Explore product updates</a>
                                </div>
                            </div>
                            <div class="drop-down-menu-item">
                                <a class="menu-title d-flex align-items-center"><span>Help Center</span> <i class="fa fa-arrow-right"></i></a>
                                <div class="menu-body">
                                    <a class="menu-item">Getting started</a>
                                    <a class="menu-item">Patreon payments</a>
                                    <a class="menu-item">Member management</a>
                                    <a class="menu-item">Content & engagement</a>
                                </div>
                            </div>
                            <div class="drop-down-menu-item">
                                <a class="menu-title d-flex align-items-center"><span>Partners & integrations</span> <i class="fa fa-arrow-right"></i></a>
                                <div class="menu-body">
                                    <a class="menu-item">Featured integrations</a>
                                    <a class="menu-item">Full app directory</a>
                                </div>
                            </div>
                            <div class="drop-down-menu-item">
                                <a class="menu-title d-flex align-items-center"><span>Mobile</span> <i class="fa fa-arrow-right"></i></a>
                                <div class="menu-body">
                                    <a class="menu-item">Download the app</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            {{-- LOGO --}}
            <div class="company-logo-part text-center" style="display: flex;justify-content: center;">
                {{-- <div class="company-text">Patreon</div> --}}
                <a href="{{ url('/') }}">
                    <div class="company-text" style="height: 50px; width: 90px;">
                        <img src="{{ asset('public/logo.png') }}" alt="" height="50" width="90">
                        {{-- <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 36 40" class="logomark"><path fill="currentColor" d="M35.975 11.392c0 .312.021.627-.004.937-.03.361-.082.722-.149 1.08a22.535 22.535 0 0 1-.331 1.512 8.59 8.59 0 0 1-.359 1.084c-.313.767-.66 1.518-1.117 2.21-.282.427-.57.849-.864 1.266a4.12 4.12 0 0 1-.37.431c-.225.238-.442.483-.686.695a13.5 13.5 0 0 1-1.123.905c-.356.25-.756.431-1.12.674-.404.268-.866.384-1.296.587-.384.18-.795.24-1.186.38-.498.18-1.021.222-1.531.331-.544.117-1.097.203-1.643.315-.449.09-.894.198-1.34.298-.254.056-.51.098-.756.173-.304.093-.6.214-.896.324-.201.072-.412.126-.604.219-.28.14-.544.315-.823.464-.457.242-.838.585-1.184.96-.292.32-.546.681-.8 1.036-.418.587-.706 1.244-.964 1.916-.254.657-.487 1.322-.725 1.986-.221.625-.43 1.252-.655 1.875-.197.543-.407 1.079-.618 1.615a13.447 13.447 0 0 1-1.12 2.215c-.331.531-.685 1.049-1.142 1.478-.366.343-.72.704-1.17.944-.446.24-.906.448-1.4.557a6.636 6.636 0 0 1-1.807.129c-.229-.012-.455-.075-.684-.117-.137-.026-.276-.047-.409-.089-.112-.035-.215-.097-.322-.151-.302-.147-.624-.264-.9-.448a8.802 8.802 0 0 1-.96-.776c-.554-.492-.97-1.103-1.342-1.74a13.04 13.04 0 0 1-.681-1.319c-.192-.436-.336-.893-.492-1.345a24.916 24.916 0 0 1-.34-1.063c-.092-.317-.165-.641-.243-.963-.073-.298-.15-.594-.212-.895-.112-.536-.215-1.073-.32-1.609a35.827 35.827 0 0 1-.133-.68c-.06-.34-.114-.681-.171-1.022-.044-.254-.092-.506-.13-.76-.044-.28-.08-.56-.124-.839-.036-.242-.078-.483-.112-.725-.032-.226-.06-.452-.089-.678a70.143 70.143 0 0 1-.094-.73c-.03-.236-.055-.471-.082-.707a19421 19421 0 0 1-.096-.818c-.011-.098-.023-.193-.03-.291-.034-.401-.068-.804-.1-1.208-.02-.25-.04-.501-.05-.75-.021-.39-.042-.777-.05-1.166C.01 18.46.001 17.819 0 17.18c0-.378.002-.755.027-1.13.026-.392.08-.784.122-1.176.034-.312.064-.622.105-.934.023-.175.064-.348.1-.52.092-.432.176-.863.281-1.292.076-.31.181-.61.266-.916.157-.571.393-1.11.623-1.653.106-.25.236-.49.368-.725.186-.329.366-.66.576-.97.259-.378.533-.744.823-1.098.275-.336.567-.66.873-.965.24-.24.512-.448.77-.665.254-.212.501-.433.77-.624.412-.296.835-.576 1.263-.849.249-.158.514-.294.774-.434.405-.219.81-.44 1.22-.648.26-.13.527-.244.794-.354.683-.277 1.364-.557 2.055-.816.46-.17.932-.303 1.399-.452.24-.077.475-.161.717-.229.2-.056.402-.086.604-.133.22-.05.434-.119.656-.16.299-.059.603-.1.907-.147.34-.052.679-.105 1.02-.152.139-.019.283-.02.425-.03.47-.026.944-.054 1.414-.077.188-.01.382-.051.565-.019.443.08.889.017 1.332.05.428.03.853.076 1.278.127.306.038.608.103.914.15.268.04.535.065.802.107.215.035.43.081.645.128.46.103.919.196 1.374.317.404.11.797.275 1.204.37.469.113.899.332 1.351.479.462.149.86.424 1.3.608.515.217.96.546 1.418.858.347.238.685.492 1 .77.467.41.92.836 1.356 1.28.258.26.478.564.713.85.38.464.658.993.928 1.523.215.424.393.874.537 1.329.12.373.156.774.245 1.156.098.42.096.844.073 1.27l-.012.008Z"></path></svg> --}}
                    </div>
                </a>
            </div>

            {{-- HEADER BUTTONS --}}
            <div class="text-right header-buttons-part">
                <div class="form-inline my-2 my-lg-0 justify-content-end">

                    @if (! $settings->disable_search_creators)
                    <form method="get" action="{{url('creators')}}">
                        <div id="searchBar" class="search-box" style="display: none; border:1px solid white; border-radius:20px;height: 40px;">
                            <i style="color: white;position: absolute;
                            top: 12px;
                            left: 12px;"
                             class="fa fa-search"></i>
                            <input style="width: 100%" type="search" name="q" value="{{ request('q') }}" class="@if(auth()->guest() && request()->path() == '/') border-0 @endif" placeholder="{{ trans('general.find_user') }}">
                            <i  class="fa fa-times" id="closeSearchBox" style="color: white; position: absolute !important; top:12px !important; right: 13px;"></i>
                            {{-- <i class="fa-solid fa-magnifying-glass" id="closeSearchBox"></i> --}}
                        </div>

                        <div class="btn btn-hover-black my-2 my-sm-0 custom-header-button" id="toggleSearch">
                            <i class="fa fa-search" style="left: 5px"></i>
                            <span>{{ trans('general.find_user') }}</span>
                        </div>
                    </form>
                    @endif
                    @guest
                        <a  href="{{ url('login') }}" class="btn btn-hover-white my-2 my-sm-0 mx-2 custom-header-button">
                            {{trans('auth.login')}}
                        </a>
                        @if ($settings->registration_active == '1')
                        <a  href="{{ url('signup')}}" class="toggleRegister nav-link btn btn-hover-white bg-white my-2 my-sm-0 custom-header-button header-get-started text-dark">
                            {{ trans('general.getting_started') }}
                        </a>
                        @endif
                        @else


                        <li class="nav-item dropdown d-lg-block d-none" style="margin-left: 12px; margin-right: 12px;">
                            <a class="nav-link" href="#" id="nav-inner-success_dropdown_1" role="button" data-toggle="dropdown" style="display: flex;">
                                <img src="{{ Helper::getFile(config('path.avatar') . auth()->user()->avatar) }}" alt="User" class="rounded-circle avatarUser mr-1" width="28" height="28">
                                {{-- <img src="{{ asset('public/img/popular.png') }}" alt="User" class="rounded-circle avatarUser mr-1" width="28" height="28"> --}}
                                <span class="d-lg-none">{{ auth()->user()->first_name }}</span>
                                <i class="feather icon-chevron-down m-0 align-middle" style="margin-top: 6px !important;"></i>
                            </a>
                            <div class="dropdown-menu mb-1 dropdown-menu-right dd-menu-user" aria-labelledby="nav-inner-success_dropdown_1" style="">
                                @if (auth()->user()->role == 'admin')
                                <a class="dropdown-item dropdown-navbar" href="{{ url('panel/admin') }}"><i class="bi bi-speedometer2 mr-2"></i> {{ trans('admin.admin') }}</a>
                                <div class="dropdown-divider"></div>
                                @endif

                                @if (auth()->user()->verified_id == 'yes' || $settings->referral_system == 'on' || auth()->user()->balance != 0.0)
                                <span class="dropdown-item dropdown-navbar balance">
                                    <i class="iconmoon icon-Dollar mr-2"></i> {{ trans('general.balance') }}:
                                    {{ Helper::amountFormatDecimal(auth()->user()->balance) }}
                                </span>
                                @endif

                                @if (($settings->disable_wallet == 'on' && auth()->user()->wallet != 0.0) || $settings->disable_wallet == 'off')
                                @if ($settings->disable_wallet == 'off')
                                <a class="dropdown-item dropdown-navbar" href="{{ url('my/wallet') }}">
                                    <i class="iconmoon icon-Wallet mr-2"></i> {{ trans('general.wallet') }}:
                                    <span class="balanceWallet">{{ Helper::userWallet() }}</span>
                                </a>
                                @else
                                <span class="dropdown-item dropdown-navbar balance">
                                    <i class="iconmoon icon-Wallet mr-2"></i> {{ trans('general.wallet') }}:
                                    <span class="balanceWallet">{{ Helper::userWallet() }}</span>
                                </span>
                                @endif

                                <div class="dropdown-divider"></div>
                                @endif

                                @if ($settings->disable_wallet == 'on' && auth()->user()->verified_id == 'yes')
                                <div class="dropdown-divider"></div>
                                @endif

                                <a class="dropdown-item dropdown-navbar url-user" href="{{ url(auth()->User()->username) }}"><i class="feather icon-user mr-2"></i>
                                    {{ auth()->user()->verified_id == 'yes' ? trans('general.my_page') : trans('users.my_profile') }}
                                </a>
                                @if (auth()->user()->verified_id == 'yes')
                                <a class="dropdown-item dropdown-navbar" href="{{ url('dashboard') }}"><i class="bi bi-speedometer2 mr-2"></i> {{ trans('admin.dashboard') }}</a>
                                <a class="dropdown-item dropdown-navbar" href="{{ url('my/posts') }}"><i class="feather icon-feather mr-2"></i> {{ trans('general.my_posts') }}</a>
                                @endif

                                <div class="dropdown-divider"></div>
                                @if (auth()->user()->verified_id == 'yes')
                                <a class="dropdown-item dropdown-navbar" href="{{ url('my/subscribers') }}"><i class="feather icon-users mr-2"></i> {{ trans('users.my_subscribers') }}</a>
                                @endif
                                <a class="dropdown-item dropdown-navbar" href="{{ url('my/subscriptions') }}"><i class="feather icon-user-check mr-2"></i>
                                    {{ trans('users.my_subscriptions') }}
                                </a>
                                <a class="dropdown-item dropdown-navbar" href="{{ url('my/bookmarks') }}"><i class="feather icon-bookmark mr-2"></i> {{ trans('general.bookmarks') }}</a>
                                <a class="dropdown-item dropdown-navbar" href="{{ url('my/likes') }}"><i class="feather icon-heart mr-2"></i> {{ trans('general.likes') }}</a>

                                @if (auth()->user()->verified_id == 'no' && auth()->user()->verified_id != 'reject' && $settings->requests_verify_account == 'on')
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item dropdown-navbar" href="{{ url('settings/verify/account') }}"><i class="feather icon-star mr-2"></i>
                                    {{ trans('general.become_creator') }}
                                </a>
                                @endif

                                <div class="dropdown-divider"></div>

                                @if (auth()->user()->dark_mode == 'off')
                                <a class="dropdown-item dropdown-navbar" href="{{ url('mode/dark') }}"><i class="feather icon-moon mr-2"></i> {{ trans('general.dark_mode') }}</a>
                                @else
                                <a class="dropdown-item dropdown-navbar" href="{{ url('mode/light') }}"><i class="feather icon-sun mr-2"></i> {{ trans('general.light_mode') }}</a>
                                @endif

                                <div class="dropdown-divider dropdown-navbar"></div>
                                <a class="dropdown-item dropdown-navbar" href="{{ url('logout') }}"><i class="feather icon-log-out mr-2"></i> {{ trans('auth.logout') }}</a>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a href="{{ url('settings/page') }}" class="toggleRegister nav-link btn btn-hover-white bg-white my-2 my-sm-0 custom-header-button header-get-started text-dark btn-arrow btn-arrow-sm">
                                {{ auth()->user()->verified_id == 'yes' ? trans('general.edit_my_page') : trans('users.edit_profile') }}
                            </a>
                        </li>

                    @endguest
                </div>
            </div>


        </div>
    </div>

</nav>

{{-- MOBILE NAVBAR --}}
<nav class="custom-navbar show-in-mobile" style="padding-bottom: 3px;">

    <div class="position-relative navbar-body" style="padding: 20px">
        <div class="d-flex align-items-center">

            {{-- DROPDOWN MENU --}}
            <div class="drop-down-menu-part">
                <button class="menu-btn" style="color: white; background: transparent;font-size: 26px;">
                    <i class="fas fa-align-left"></i>
                </button>
            </div>


            {{-- LOGO --}}
            <div class="company-logo-part text-center" style="display: flex;justify-content: center;">
                <a href="{{ url('/') }}">
                    <div class="company-text" style="height: 40px; width: 93px;">
                        <img src="{{ asset('public/logo.png') }}" alt="" height="50" width="90">
                        {{-- <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 36 40" class="logomark"><path fill="currentColor" d="M35.975 11.392c0 .312.021.627-.004.937-.03.361-.082.722-.149 1.08a22.535 22.535 0 0 1-.331 1.512 8.59 8.59 0 0 1-.359 1.084c-.313.767-.66 1.518-1.117 2.21-.282.427-.57.849-.864 1.266a4.12 4.12 0 0 1-.37.431c-.225.238-.442.483-.686.695a13.5 13.5 0 0 1-1.123.905c-.356.25-.756.431-1.12.674-.404.268-.866.384-1.296.587-.384.18-.795.24-1.186.38-.498.18-1.021.222-1.531.331-.544.117-1.097.203-1.643.315-.449.09-.894.198-1.34.298-.254.056-.51.098-.756.173-.304.093-.6.214-.896.324-.201.072-.412.126-.604.219-.28.14-.544.315-.823.464-.457.242-.838.585-1.184.96-.292.32-.546.681-.8 1.036-.418.587-.706 1.244-.964 1.916-.254.657-.487 1.322-.725 1.986-.221.625-.43 1.252-.655 1.875-.197.543-.407 1.079-.618 1.615a13.447 13.447 0 0 1-1.12 2.215c-.331.531-.685 1.049-1.142 1.478-.366.343-.72.704-1.17.944-.446.24-.906.448-1.4.557a6.636 6.636 0 0 1-1.807.129c-.229-.012-.455-.075-.684-.117-.137-.026-.276-.047-.409-.089-.112-.035-.215-.097-.322-.151-.302-.147-.624-.264-.9-.448a8.802 8.802 0 0 1-.96-.776c-.554-.492-.97-1.103-1.342-1.74a13.04 13.04 0 0 1-.681-1.319c-.192-.436-.336-.893-.492-1.345a24.916 24.916 0 0 1-.34-1.063c-.092-.317-.165-.641-.243-.963-.073-.298-.15-.594-.212-.895-.112-.536-.215-1.073-.32-1.609a35.827 35.827 0 0 1-.133-.68c-.06-.34-.114-.681-.171-1.022-.044-.254-.092-.506-.13-.76-.044-.28-.08-.56-.124-.839-.036-.242-.078-.483-.112-.725-.032-.226-.06-.452-.089-.678a70.143 70.143 0 0 1-.094-.73c-.03-.236-.055-.471-.082-.707a19421 19421 0 0 1-.096-.818c-.011-.098-.023-.193-.03-.291-.034-.401-.068-.804-.1-1.208-.02-.25-.04-.501-.05-.75-.021-.39-.042-.777-.05-1.166C.01 18.46.001 17.819 0 17.18c0-.378.002-.755.027-1.13.026-.392.08-.784.122-1.176.034-.312.064-.622.105-.934.023-.175.064-.348.1-.52.092-.432.176-.863.281-1.292.076-.31.181-.61.266-.916.157-.571.393-1.11.623-1.653.106-.25.236-.49.368-.725.186-.329.366-.66.576-.97.259-.378.533-.744.823-1.098.275-.336.567-.66.873-.965.24-.24.512-.448.77-.665.254-.212.501-.433.77-.624.412-.296.835-.576 1.263-.849.249-.158.514-.294.774-.434.405-.219.81-.44 1.22-.648.26-.13.527-.244.794-.354.683-.277 1.364-.557 2.055-.816.46-.17.932-.303 1.399-.452.24-.077.475-.161.717-.229.2-.056.402-.086.604-.133.22-.05.434-.119.656-.16.299-.059.603-.1.907-.147.34-.052.679-.105 1.02-.152.139-.019.283-.02.425-.03.47-.026.944-.054 1.414-.077.188-.01.382-.051.565-.019.443.08.889.017 1.332.05.428.03.853.076 1.278.127.306.038.608.103.914.15.268.04.535.065.802.107.215.035.43.081.645.128.46.103.919.196 1.374.317.404.11.797.275 1.204.37.469.113.899.332 1.351.479.462.149.86.424 1.3.608.515.217.96.546 1.418.858.347.238.685.492 1 .77.467.41.92.836 1.356 1.28.258.26.478.564.713.85.38.464.658.993.928 1.523.215.424.393.874.537 1.329.12.373.156.774.245 1.156.098.42.096.844.073 1.27l-.012.008Z"></path></svg> --}}
                    </div>
                </a>
            </div>


            {{-- HEADER BUTTONS --}}
            <div class="text-right header-buttons-part">
                <div class="form-inline my-2 my-lg-0 justify-content-end hayhay">

                    @if (! $settings->disable_search_creators)
                    <div class="btn btn-hover-black my-2 my-sm-0 custom-header-button" type="button" data-toggle="modal" data-target="#headerLoginModal">
                        <i class="fa fa-search"></i>
                    </div>
                    @endif
                    
                        
                    {{-- <a @if (Helper::showLoginFormModal()) data-toggle="modal" data-target="#loginFormModal" @endif href="{{$settings->home_style == 0 ? url('login') : url('/')}}" class="btn btn-hover-white my-2 my-sm-0 mx-2 custom-header-button">
                        {{trans('auth.login')}}
                    </a> --}}
                    @guest
                        <a @if (Helper::showLoginFormModal()) data-toggle="modal" data-target="#loginFormModal" @endif href="{{$settings->home_style == 0 ? url('login') : url('/')}}" class="btn btn-hover-white my-2 my-sm-0 mx-2 custom-header-button">
                            {{trans('auth.login')}}
                        </a>
                        {{-- @if ($settings->registration_active == '1')
                        <a @if (Helper::showLoginFormModal()) data-toggle="modal" data-target="#loginFormModal" @endif href="{{$settings->home_style == 0 ? url('signup') : url('/')}}" class="toggleRegister nav-link btn btn-hover-white bg-white my-2 my-sm-0 custom-header-button header-get-started text-dark">
                            {{ trans('general.getting_started') }}
                        </a>
                        @endif --}}
                        @else


                        <li class="nav-item dropdown d-lg-none d-block mm-not" style="margin-left: 12px; margin-right: 12px;">
                            <a class="nav-link" href="#" id="nav-inner-success_dropdown_1" role="button" data-toggle="dropdown" style="display: flex;">
                                <img src="{{ Helper::getFile(config('path.avatar') . auth()->user()->avatar) }}" alt="User" class="rounded-circle avatarUser mr-1" width="28" height="28">
                                {{-- <img src="{{ asset('public/img/popular.png') }}" alt="User" class="rounded-circle avatarUser mr-1" width="28" height="28"> --}}
                                {{-- <span class="d-lg-none">{{ auth()->user()->first_name }}</span> --}}
                                <i class="feather icon-chevron-down m-0 align-middle" style="margin-top: 6px !important;"></i>
                            </a>
                            <div class="dropdown-menu mb-1 dropdown-menu-right dd-menu-user" aria-labelledby="nav-inner-success_dropdown_1">
                                @if (auth()->user()->role == 'admin')
                                <a class="dropdown-item dropdown-navbar" href="{{ url('panel/admin') }}"><i class="bi bi-speedometer2 mr-2"></i> {{ trans('admin.admin') }}</a>
                                <div class="dropdown-divider"></div>
                                @endif

                                @if (auth()->user()->verified_id == 'yes' || $settings->referral_system == 'on' || auth()->user()->balance != 0.0)
                                <span class="dropdown-item dropdown-navbar balance">
                                    <i class="iconmoon icon-Dollar mr-2"></i> {{ trans('general.balance') }}:
                                    {{ Helper::amountFormatDecimal(auth()->user()->balance) }}
                                </span>
                                @endif

                                @if (($settings->disable_wallet == 'on' && auth()->user()->wallet != 0.0) || $settings->disable_wallet == 'off')
                                @if ($settings->disable_wallet == 'off')
                                <a class="dropdown-item dropdown-navbar" href="{{ url('my/wallet') }}">
                                    <i class="iconmoon icon-Wallet mr-2"></i> {{ trans('general.wallet') }}:
                                    <span class="balanceWallet">{{ Helper::userWallet() }}</span>
                                </a>
                                @else
                                <span class="dropdown-item dropdown-navbar balance">
                                    <i class="iconmoon icon-Wallet mr-2"></i> {{ trans('general.wallet') }}:
                                    <span class="balanceWallet">{{ Helper::userWallet() }}</span>
                                </span>
                                @endif

                                <div class="dropdown-divider"></div>
                                @endif

                                @if ($settings->disable_wallet == 'on' && auth()->user()->verified_id == 'yes')
                                <div class="dropdown-divider"></div>
                                @endif

                                <a class="dropdown-item dropdown-navbar url-user" href="{{ url(auth()->User()->username) }}"><i class="feather icon-user mr-2"></i>
                                    {{ auth()->user()->verified_id == 'yes' ? trans('general.my_page') : trans('users.my_profile') }}
                                </a>
                                @if (auth()->user()->verified_id == 'yes')
                                <a class="dropdown-item dropdown-navbar" href="{{ url('dashboard') }}"><i class="bi bi-speedometer2 mr-2"></i> {{ trans('admin.dashboard') }}</a>
                                <a class="dropdown-item dropdown-navbar" href="{{ url('my/posts') }}"><i class="feather icon-feather mr-2"></i> {{ trans('general.my_posts') }}</a>
                                @endif

                                <div class="dropdown-divider"></div>
                                @if (auth()->user()->verified_id == 'yes')
                                <a class="dropdown-item dropdown-navbar" href="{{ url('my/subscribers') }}"><i class="feather icon-users mr-2"></i> {{ trans('users.my_subscribers') }}</a>
                                @endif
                                <a class="dropdown-item dropdown-navbar" href="{{ url('my/subscriptions') }}"><i class="feather icon-user-check mr-2"></i>
                                    {{ trans('users.my_subscriptions') }}
                                </a>
                                <a class="dropdown-item dropdown-navbar" href="{{ url('my/bookmarks') }}"><i class="feather icon-bookmark mr-2"></i> {{ trans('general.bookmarks') }}</a>
                                <a class="dropdown-item dropdown-navbar" href="{{ url('my/likes') }}"><i class="feather icon-heart mr-2"></i> {{ trans('general.likes') }}</a>

                                @if (auth()->user()->verified_id == 'no' && auth()->user()->verified_id != 'reject' && $settings->requests_verify_account == 'on')
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item dropdown-navbar" href="{{ url('settings/verify/account') }}"><i class="feather icon-star mr-2"></i>
                                    {{ trans('general.become_creator') }}
                                </a>
                                @endif

                                <div class="dropdown-divider"></div>

                                @if (auth()->user()->dark_mode == 'off')
                                <a class="dropdown-item dropdown-navbar" href="{{ url('mode/dark') }}"><i class="feather icon-moon mr-2"></i> {{ trans('general.dark_mode') }}</a>
                                @else
                                <a class="dropdown-item dropdown-navbar" href="{{ url('mode/light') }}"><i class="feather icon-sun mr-2"></i> {{ trans('general.light_mode') }}</a>
                                @endif

                                <div class="dropdown-divider dropdown-navbar"></div>
                                <a class="dropdown-item dropdown-navbar" href="{{ url('logout') }}"><i class="feather icon-log-out mr-2"></i> {{ trans('auth.logout') }}</a>
                            </div>
                        </li>

                        {{-- <li class="nav-item">
                            <a href="{{ url('settings/page') }}" class="toggleRegister nav-link btn btn-hover-white bg-white my-2 my-sm-0 custom-header-button header-get-started text-dark btn-arrow btn-arrow-sm">
                                {{ auth()->user()->verified_id == 'yes' ? trans('general.edit_my_page') : trans('users.edit_profile') }}
                            </a>
                        </li> --}}

                    @endguest
                </div>
            </div>


        </div>
    </div>

</nav>


{{-- MOBILE SEARCH MODAL --}}
<div class="modal" id="headerLoginModal" role="dialog" aria-labelledby="headerLoginModalLabel" aria-hidden="true" style="top: 20px; z-index: 99999 !important;" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h5 class="modal-title" id="headerLoginModalLabel"><i class="fa fa-search"></i> Find a Creator</h5>
                <button type="button" class="close text-black" style="color: black" data-dismiss="modal" aria-label="Close">
                    <i class="fa fa-times"></i>
                </button>
            </div>
            <div class="modal-body" style="padding: 20px 10px 40px 10px;">
                <form method="get" action="{{url('creators')}}">
                    <div class="header-search-box">
                        <div class="input-group mb-3 position-relative">
                            <input type="search" class="form-control" name="q" value="{{ request('q') }}" class="@if(auth()->guest() && request()->path() == '/') border-0 @endif" placeholder="{{ trans('general.find_user') }}" style="height: 38px; font-size: 15px; font-weight: normal; font-family: sans-serif">
                            <button class="custom-search-btn position-absolute" type="button"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

{{-- MOBILE MENU SIDEBAR --}}
<div class="main-left-sidebar category-menu-sidebar" style="display: none;">


    <div class="category-header">
        <h4 class="category-title">
            <i class="fas fa-align-left"></i>
            <span>Menu</span>
        </h4>
        <button class="category-menu-hide">
            <i class="fas fa-times"></i>
        </button>
    </div>

    <div class="main">

        <ul class="cd-accordion cd-accordion--animated margin-top-lg margin-bottom-lg" id="cd-accordion--animated">


            {{-- Creators --}}
            <li class="cd-accordion__item cd-accordion__item--has-children">

                <input class="cd-accordion__input" type="checkbox" id="group-1">

                <label class="cd-accordion__label cd-accordion__label--icon-folder" for="group-1">
                    <span><a href="{{ 'javascript:void(0)' }}">{{ 'Creators' }}</a></span>
                </label>



                <ul class="cd-accordion__sub cd-accordion__sub--l1" id="cd-accordion__sub">

                    <li class="cd-accordion__item cd-accordion__item--has-children inner-cd-accordion__item">
                        <input class="cd-accordion__input" type="checkbox" id="sub-group-11">
                        <label class="cd-accordion__label cd-accordion__label--icon-folder inner-cd-accordion__label" for="sub-group-11">
                            <span>
                                <a href="}}">{{ 'Cafes' }}</a>
                            </span>
                        </label>
                        <ul class="pl-0 cd-accordion__sub cd-accordion__sub--l2" id="cd-accordion__sub">
                            <li class="cd-accordion__item only-text-item inner-only-text-item">
                                <a class="clean-text" href="}}#get-to-know-your-listeners">{{ 'Get to know your customers' }}</a>
                            </li>
                            <li class="cd-accordion__item only-text-item inner-only-text-item">
                                <a class="clean-text" href="}}#cut-through-the-noise">{{ 'Cut through the noise' }}</a>
                            </li>
                            <li class="cd-accordion__item only-text-item inner-only-text-item">
                                <a class="clean-text" href="}}#more-ways-to-get-paid">{{ 'More ways to get paid' }}</a>
                            </li>
                            <li class="cd-accordion__item only-text-item inner-only-text-item">
                                <a class="clean-text" href="}}#meet-other-Cafes">{{ 'Other Cafes on Patreon' }}</a>
                            </li>
                        </ul>
                    </li>

                    <li class="cd-accordion__item cd-accordion__item--has-children inner-cd-accordion__item">
                        <input class="cd-accordion__input" type="checkbox" id="sub-group-12">
                        <label class="cd-accordion__label cd-accordion__label--icon-folder inner-cd-accordion__label" for="sub-group-12">
                            <span>
                                <a href="javascript:void(0)">{{ 'Video creators' }}</a>
                            </span>
                        </label>
                        <ul class="cd-accordion__sub cd-accordion__sub--l2" id="cd-accordion__sub">
                            <li class="cd-accordion__item only-text-item inner-only-text-item">
                                <a class="clean-text" href="javascript:void(0)">{{ 'Turn your viewers into your people' }}</a>
                            </li>
                            <li class="cd-accordion__item only-text-item inner-only-text-item">
                                <a class="clean-text" href="javascript:void(0)">{{ 'Reach every fan, every time' }}</a>
                            </li>
                            <li class="cd-accordion__item only-text-item inner-only-text-item">
                                <a class="clean-text" href="javascript:void(0)">{{ 'More ways to get paid' }}</a>
                            </li>
                            <li class="cd-accordion__item only-text-item inner-only-text-item">
                                <a class="clean-text" href="javascript:void(0)">{{ 'Other video creators on Patreon' }}</a>
                            </li>
                        </ul>
                    </li>

                    <li class="cd-accordion__item cd-accordion__item--has-children inner-cd-accordion__item">
                        <input class="cd-accordion__input" type="checkbox" id="sub-group-13">
                        <label class="cd-accordion__label cd-accordion__label--icon-folder inner-cd-accordion__label" for="sub-group-13">
                            <span>
                                <a href="javascript:void(0)">{{ 'Musicians' }}</a>
                            </span>
                        </label>
                        <ul class="cd-accordion__sub cd-accordion__sub--l2" id="cd-accordion__sub">
                            <li class="cd-accordion__item only-text-item inner-only-text-item">
                                <a class="clean-text" href="javascript:void(0)">{{ 'From your mind to their ears' }}</a>
                            </li>
                            <li class="cd-accordion__item only-text-item inner-only-text-item">
                                <a class="clean-text" href="javascript:void(0)">{{ 'Share more than music' }}</a>
                            </li>
                            <li class="cd-accordion__item only-text-item inner-only-text-item">
                                <a class="clean-text" href="javascript:void(0)">{{ 'More ways to get paid' }}</a>
                            </li>
                            <li class="cd-accordion__item only-text-item inner-only-text-item">
                                <a class="clean-text" href="javascript:void(0)">{{ 'Other musicians on Patreon' }}</a>
                            </li>
                        </ul>
                    </li>

                    <li class="cd-accordion__item cd-accordion__item--has-children inner-cd-accordion__item">
                        <input class="cd-accordion__input" type="checkbox" id="sub-group-14">
                        <label class="cd-accordion__label cd-accordion__label--icon-folder inner-cd-accordion__label" for="sub-group-14">
                            <span>
                                <a href="javascript:void(0)">{{ 'Artists' }}</a>
                            </span>
                        </label>
                        <ul class="cd-accordion__sub cd-accordion__sub--l2" id="cd-accordion__sub">
                            <li class="cd-accordion__item only-text-item inner-only-text-item">
                                <a class="clean-text" href="javascript:void(0)">{{ 'Earning made easy' }}</a>
                            </li>
                            <li class="cd-accordion__item only-text-item inner-only-text-item">
                                <a class="clean-text" href="javascript:void(0)">{{ 'Create what inspires you' }}</a>
                            </li>
                            <li class="cd-accordion__item only-text-item inner-only-text-item">
                                <a class="clean-text" href="javascript:void(0)">{{ 'Build community around your art' }}</a>
                            </li>
                            <li class="cd-accordion__item only-text-item inner-only-text-item">
                                <a class="clean-text" href="javascript:void(0)">{{ 'Other artists on Patreon' }}</a>
                            </li>
                        </ul>
                    </li>

                    <li class="cd-accordion__item cd-accordion__item--has-children inner-cd-accordion__item">
                        <input class="cd-accordion__input" type="checkbox" id="sub-group-15">
                        <label class="cd-accordion__label cd-accordion__label--icon-folder inner-cd-accordion__label" for="sub-group-15">
                            <span>
                                <a href="javascript:void(0)">{{ 'Game devs' }}</a>
                            </span>
                        </label>
                        <ul class="cd-accordion__sub cd-accordion__sub--l2" id="cd-accordion__sub">
                            <li class="cd-accordion__item only-text-item inner-only-text-item">
                                <a class="clean-text" href="javascript:void(0)">{{ 'A safe way to get paid' }}</a>
                            </li>
                            <li class="cd-accordion__item only-text-item inner-only-text-item">
                                <a class="clean-text" href="javascript:void(0)">{{ 'Selling made simple' }}</a>
                            </li>
                            <li class="cd-accordion__item only-text-item inner-only-text-item">
                                <a class="clean-text" href="javascript:void(0)">{{ 'Where real community thrives' }}</a>
                            </li>
                            <li class="cd-accordion__item only-text-item inner-only-text-item">
                                <a class="clean-text" href="javascript:void(0)">{{ 'Other game devs on Patreon' }}</a>
                            </li>
                        </ul>
                    </li>

                </ul>
            </li>


            {{-- Features --}}
            <li class="cd-accordion__item cd-accordion__item--has-children">

                <input class="cd-accordion__input" type="checkbox" id="group-2">

                <label class="cd-accordion__label cd-accordion__label--icon-folder" for="group-2">
                    <span><a href="{{ 'javascript:void(0)' }}">{{ 'Features' }}</a></span>
                </label>



                <ul class="cd-accordion__sub cd-accordion__sub--l1" id="cd-accordion__sub">

                    <li class="cd-accordion__item cd-accordion__item--has-children inner-cd-accordion__item">
                        <input class="cd-accordion__input" type="checkbox" id="sub-group-21">
                        <label class="cd-accordion__label cd-accordion__label--icon-folder inner-cd-accordion__label" for="sub-group-21">
                            <span>
                                <a href="{{ 'javascript:void(0)' }}">{{ 'Create on your terms' }}</a>
                            </span>
                        </label>
                        <ul class="cd-accordion__sub cd-accordion__sub--l2" id="cd-accordion__sub">
                            <li class="cd-accordion__item only-text-item inner-only-text-item">
                                <a class="clean-text" href="{{ 'javascript:void(0)' }}">{{ 'Getting started on Patreon' }}</a>
                            </li>
                            <li class="cd-accordion__item only-text-item inner-only-text-item">
                                <a class="clean-text" href="{{ 'javascript:void(0)' }}">{{ 'Make it your own' }}</a>
                            </li>
                            <li class="cd-accordion__item only-text-item inner-only-text-item">
                                <a class="clean-text" href="{{ 'javascript:void(0)' }}">{{ 'Reach every fan, every time' }}</a>
                            </li>
                            <li class="cd-accordion__item only-text-item inner-only-text-item">
                                <a class="clean-text" href="{{ 'javascript:void(0)' }}">{{ 'Showcase your work' }}</a>
                            </li>
                        </ul>
                    </li>

                    <li class="cd-accordion__item cd-accordion__item--has-children inner-cd-accordion__item">
                        <input class="cd-accordion__input" type="checkbox" id="sub-group-22">
                        <label class="cd-accordion__label cd-accordion__label--icon-folder inner-cd-accordion__label" for="sub-group-22">
                            <span>
                                <a href="{{ 'javascript:void(0)' }}">{{ 'Build real community' }}</a>
                            </span>
                        </label>
                        <ul class="cd-accordion__sub cd-accordion__sub--l2" id="cd-accordion__sub">
                            <li class="cd-accordion__item only-text-item inner-only-text-item">
                                <a class="clean-text" href="{{ 'javascript:void(0)' }}">{{ 'Every post, every time' }}</a>
                            </li>
                            <li class="cd-accordion__item only-text-item inner-only-text-item">
                                <a class="clean-text" href="{{ 'javascript:void(0)' }}">{{ 'More ways to stay close' }}</a>
                            </li>
                            <li class="cd-accordion__item only-text-item inner-only-text-item">
                                <a class="clean-text" href="{{ 'javascript:void(0)' }}">{{ 'Get to know your fans' }}</a>
                            </li>
                        </ul>
                    </li>

                    <li class="cd-accordion__item cd-accordion__item--has-children inner-cd-accordion__item">
                        <input class="cd-accordion__input" type="checkbox" id="sub-group-23">
                        <label class="cd-accordion__label cd-accordion__label--icon-folder inner-cd-accordion__label" for="sub-group-23">
                            <span>
                                <a href="{{ 'javascript:void(0)' }}">{{ 'Expand your reach' }}</a>
                            </span>
                        </label>
                        <ul class="cd-accordion__sub cd-accordion__sub--l2" id="cd-accordion__sub">
                            <li class="cd-accordion__item only-text-item inner-only-text-item">
                                <a class="clean-text" href="{{ 'javascript:void(0)' }}">{{ 'Bring in new fans' }}</a>
                            </li>
                            <li class="cd-accordion__item only-text-item inner-only-text-item">
                                <a class="clean-text" href="{{ 'javascript:void(0)' }}">{{ 'Unlock growth' }}</a>
                            </li>
                            <li class="cd-accordion__item only-text-item inner-only-text-item">
                                <a class="clean-text" href="{{ 'javascript:void(0)' }}">{{ 'App integrations' }}</a>
                            </li>
                        </ul>
                    </li>

                    <li class="cd-accordion__item cd-accordion__item--has-children inner-cd-accordion__item">
                        <input class="cd-accordion__input" type="checkbox" id="sub-group-24">
                        <label class="cd-accordion__label cd-accordion__label--icon-folder inner-cd-accordion__label" for="sub-group-24">
                            <span>
                                <a href="{{ 'javascript:void(0)' }}">{{ 'Get business support' }}</a>
                            </span>
                        </label>
                        <ul class="cd-accordion__sub cd-accordion__sub--l2" id="cd-accordion__sub">
                            <li class="cd-accordion__item only-text-item inner-only-text-item">
                                <a class="clean-text" href="{{ 'javascript:void(0)' }}">{{ 'Help when you need it' }}</a>
                            </li>
                            <li class="cd-accordion__item only-text-item inner-only-text-item">
                                <a class="clean-text" href="{{ 'javascript:void(0)' }}">{{ 'Policies to protect you' }}</a>
                            </li>
                            <li class="cd-accordion__item only-text-item inner-only-text-item">
                                <a class="clean-text" href="{{ 'javascript:void(0)' }}">{{ 'Payments powered by Patreon' }}</a>
                            </li>
                        </ul>
                    </li>

                    <li class="cd-accordion__item cd-accordion__item--has-children inner-cd-accordion__item">
                        <input class="cd-accordion__input" type="checkbox" id="sub-group-25">
                        <label class="cd-accordion__label cd-accordion__label--icon-folder inner-cd-accordion__label" for="sub-group-25">
                            <span>
                                <a href="{{ 'javascript:void(0)' }}">{{ 'Earning made easy' }}</a>
                            </span>
                        </label>
                        <ul class="cd-accordion__sub cd-accordion__sub--l2" id="cd-accordion__sub">
                            <li class="cd-accordion__item only-text-item inner-only-text-item">
                                <a class="clean-text" href="{{ 'javascript:void(0)' }}">{{ 'Run a membership' }}</a>
                            </li>
                            <li class="cd-accordion__item only-text-item inner-only-text-item">
                                <a class="clean-text" href="{{ 'javascript:void(0)' }}">{{ 'Sell digital products' }}</a>
                            </li>
                        </ul>
                    </li>

                </ul>
            </li>


            {{-- Pricing --}}
            <li class="cd-accordion__item cd-accordion__item--has-children">

                <input class="cd-accordion__input" type="checkbox" id="group-3">

                <label class="cd-accordion__label cd-accordion__label--icon-folder" for="group-3">
                    <span><a href="{{ 'javascript:void(0)' }}">{{ 'Pricing' }}</a></span>
                </label>


                <ul class="cd-accordion__sub cd-accordion__sub--l1" id="cd-accordion__sub">

                    <li class="cd-accordion__item cd-accordion__item--has-children inner-cd-accordion__item">
                        <input class="cd-accordion__input" type="checkbox" id="sub-group-31">
                        <label class="cd-accordion__label cd-accordion__label--icon-folder inner-cd-accordion__label" for="sub-group-31">
                            <span>
                                <a href="{{ 'javascript:void(0)' }}">{{ 'Starting a Patreon is free' }}</a>
                            </span>
                        </label>
                        <ul class="cd-accordion__sub cd-accordion__sub--l2" id="cd-accordion__sub">
                            <li class="cd-accordion__item only-text-item inner-only-text-item">
                                <a class="clean-text" href="{{ 'javascript:void(0)' }}">{{ 'Powerful core features' }}</a>
                            </li>
                            <li class="cd-accordion__item only-text-item inner-only-text-item">
                                <a class="clean-text" href="{{ 'javascript:void(0)' }}">{{ 'Earning made easy' }}</a>
                            </li>
                            <li class="cd-accordion__item only-text-item inner-only-text-item">
                                <a class="clean-text" href="{{ 'javascript:void(0)' }}">{{ 'Paid membership' }}</a>
                            </li>
                            <li class="cd-accordion__item only-text-item inner-only-text-item">
                                <a class="clean-text" href="{{ 'javascript:void(0)' }}">{{ 'Commerce' }}</a>
                            </li>
                            <li class="cd-accordion__item only-text-item inner-only-text-item">
                                <a class="clean-text" href="{{ 'javascript:void(0)' }}">{{ 'Payments powered by Patreon' }}</a>
                            </li>
                        </ul>
                    </li>

                </ul>
            </li>


            {{-- Resources --}}
            <li class="cd-accordion__item cd-accordion__item--has-children">

                <input class="cd-accordion__input" type="checkbox" id="group-4">

                <label class="cd-accordion__label cd-accordion__label--icon-folder" for="group-4">
                    <span><a href="{{ 'javascript:void(0)' }}">{{ 'Resources' }}</a></span>
                </label>



                <ul class="cd-accordion__sub cd-accordion__sub--l1" id="cd-accordion__sub">

                    <li class="cd-accordion__item cd-accordion__item--has-children inner-cd-accordion__item">
                        <input class="cd-accordion__input" type="checkbox" id="sub-group-41">
                        <label class="cd-accordion__label cd-accordion__label--icon-folder inner-cd-accordion__label" for="sub-group-41">
                            <span>
                                <a href="{{ 'javascript:void(0)' }}">{{ 'Creator Hub' }}</a>
                            </span>
                        </label>
                        <ul class="cd-accordion__sub cd-accordion__sub--l2" id="cd-accordion__sub">
                            <li class="cd-accordion__item only-text-item inner-only-text-item">
                                <a class="clean-text" href="{{ 'javascript:void(0)' }}">{{ 'Resources to get started' }}</a>
                            </li>
                            <li class="cd-accordion__item only-text-item inner-only-text-item">
                                <a class="clean-text" href="{{ 'javascript:void(0)' }}">{{ 'Grow your membership' }}</a>
                            </li>
                            <li class="cd-accordion__item only-text-item inner-only-text-item">
                                <a class="clean-text" href="{{ 'javascript:void(0)' }}">{{ 'Connect with creators' }}</a>
                            </li>
                        </ul>
                    </li>

                    <li class="cd-accordion__item cd-accordion__item--has-children inner-cd-accordion__item">
                        <input class="cd-accordion__input" type="checkbox" id="sub-group-42">
                        <label class="cd-accordion__label cd-accordion__label--icon-folder inner-cd-accordion__label" for="sub-group-42">
                            <span>
                                <a href="{{ 'javascript:void(0)' }}">{{ 'Newsroom' }}</a>
                            </span>
                        </label>
                        <ul class="cd-accordion__sub cd-accordion__sub--l2" id="cd-accordion__sub">
                            <li class="cd-accordion__item only-text-item inner-only-text-item">
                                <a class="clean-text" href="{{ 'javascript:void(0)' }}">{{ 'Patreon HQ' }}</a>
                            </li>
                            <li class="cd-accordion__item only-text-item inner-only-text-item">
                                <a class="clean-text" href="{{ 'javascript:void(0)' }}">{{ 'Read latest policy updates' }}</a>
                            </li>
                            <li class="cd-accordion__item only-text-item inner-only-text-item">
                                <a class="clean-text" href="{{ 'javascript:void(0)' }}">{{ 'Explore product updates' }}</a>
                            </li>
                        </ul>
                    </li>

                    <li class="cd-accordion__item cd-accordion__item--has-children inner-cd-accordion__item">
                        <input class="cd-accordion__input" type="checkbox" id="sub-group-43">
                        <label class="cd-accordion__label cd-accordion__label--icon-folder inner-cd-accordion__label" for="sub-group-43">
                            <span>
                                <a href="{{ 'javascript:void(0)' }}">{{ 'Help Center' }}</a>
                            </span>
                        </label>
                        <ul class="cd-accordion__sub cd-accordion__sub--l2" id="cd-accordion__sub">
                            <li class="cd-accordion__item only-text-item inner-only-text-item">
                                <a class="clean-text" href="{{ 'javascript:void(0)' }}">{{ 'Getting started' }}</a>
                            </li>
                            <li class="cd-accordion__item only-text-item inner-only-text-item">
                                <a class="clean-text" href="{{ 'javascript:void(0)' }}">{{ 'Patreon payments' }}</a>
                            </li>
                            <li class="cd-accordion__item only-text-item inner-only-text-item">
                                <a class="clean-text" href="{{ 'javascript:void(0)' }}">{{ 'Member management' }}</a>
                            </li>
                            <li class="cd-accordion__item only-text-item inner-only-text-item">
                                <a class="clean-text" href="{{ 'javascript:void(0)' }}">{{ 'Content & engagement' }}</a>
                            </li>
                        </ul>
                    </li>

                    <li class="cd-accordion__item cd-accordion__item--has-children inner-cd-accordion__item">
                        <input class="cd-accordion__input" type="checkbox" id="sub-group-44">
                        <label class="cd-accordion__label cd-accordion__label--icon-folder inner-cd-accordion__label" for="sub-group-44">
                            <span>
                                <a href="{{ 'javascript:void(0)' }}">{{ 'Partners & integrations' }}</a>
                            </span>
                        </label>
                        <ul class="cd-accordion__sub cd-accordion__sub--l2" id="cd-accordion__sub">
                            <li class="cd-accordion__item only-text-item inner-only-text-item">
                                <a class="clean-text" href="{{ 'javascript:void(0)' }}">{{ 'Featured integrations' }}</a>
                            </li>
                            <li class="cd-accordion__item only-text-item inner-only-text-item">
                                <a class="clean-text" href="{{ 'javascript:void(0)' }}">{{ 'Full app directory' }}</a>
                            </li>
                        </ul>
                    </li>

                    <li class="cd-accordion__item cd-accordion__item--has-children inner-cd-accordion__item">
                        <input class="cd-accordion__input" type="checkbox" id="sub-group-45">
                        <label class="cd-accordion__label cd-accordion__label--icon-folder inner-cd-accordion__label" for="sub-group-45">
                            <span>
                                <a href="{{ 'javascript:void(0)' }}">{{ 'Mobile' }}</a>
                            </span>
                        </label>
                        <ul class="cd-accordion__sub cd-accordion__sub--l2" id="cd-accordion__sub">
                            <li class="cd-accordion__item only-text-item inner-only-text-item">
                                <a class="clean-text" href="{{ 'javascript:void(0)' }}">{{ 'Download the app' }}</a>
                            </li>
                        </ul>
                    </li>

                </ul>
            </li>


            {{-- Explore --}}
            <li class="cd-accordion__item cd-accordion__item--has-children">
                <input class="cd-accordion__input" type="checkbox" id="group-5">
                <label class="cd-accordion__label cd-accordion__label--icon-folder explore-accordian" for="group-5">
                    <span><a href="{{ url('creators') }}" target="_blank">{{ 'Explore' }}</a></span>
                </label>
            </li>


        </ul>

    </div>
</div>