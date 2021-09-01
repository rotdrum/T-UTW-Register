<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <title>{{ config('app.name', 'TODO LIST') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    {{-- Font Awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">

    {{-- Logo Browser --}}
    <link rel="shortcut icon" type="image/x-icon" href="http://www.utw.ac.th/wp-content/uploads/2018/04/_%E0%B8%95%E0%B8%A3%E0%B8%B2-1-e1523680375187.png" />

</head>
<body>

    <header class="header">
        @foreach ($years as $year)
            <a href="" class="logo">ปีการศึกษา {{ $year->year }}</a>
        @endforeach
        <input class="menu-btn" type="checkbox" id="menu-btn" />
        <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
        <ul class="menu">
          <li><a href="{{route('indexAdmin')}}">ตรวจสอบรายชื่อ</a></li>
          <li><a href="{{route('approve1')}}">อนุมัติรายชื่อ ม.1</a></li>
          <li><a href="{{route('approve2')}}">อนุมัติรายชื่อ ม.4</a></li>
          <li><a onclick="excel()">รายงานผล</a></li>
          <li><a href="{{route('setting')}}">ตั้งค่าระบบ</a></li>
          <li><a href="{{route('index')}}">ออกจากระบบ</a></li>
        </ul>
    </header>


    @yield('content')
</body>

<footer>
    Copyright2020 - Develop by K.Natthakiat & K.Kiattikun
</footer>

{{-- Sweet Alert 2 --}}
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script>
    function excel() {
        Swal.fire({
            icon: 'info',
            title: 'โปรดเลือกระดับชั้นเรียน',
            html: '<button class="btn-select" onclick="onA()" >ม.1</button>' +
                  '<button class="btn-select" onclick="onB()" >ม.4</button>',
            showConfirmButton: false,
        })
    }
        function onA() {
            window.location.href = '{{ route("exportexcel") }}';
        }
        function onB() {
            window.location.href = '{{ route("exportexcel2") }}';
        }
</script>
</html>
