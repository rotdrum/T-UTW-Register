@extends('layouts.app')
@section('content')

<script>
    window.onload = function() {
     if(!window.location.hash) {
         window.location = window.location + '#loaded';
         window.location.reload();
     }
 }
</script>
    <div class="vue-bg">
        <div class="vue-container">
            <div class="vue-img-logo">
                <img src="{{asset('img/logo.png')}}">
            </div>
            <h1>โรงเรียนอุทัยวิทยาคม</h1>
            
            @foreach ($years as $year)
                <h4>ระบบรับสมัครนักเรียนเข้าศึกษาต่อ</h4>
                <h4> ปีการศึกษา {{ $year->year }}</h4>
            @endforeach

    
            @foreach ($status as $s)
                @if($s->status == 1)
                    <div class="vue-btn-register">
                        <a class="btn-register"  onclick="myFunction()">สมัครสอบ</a>
                        <a class="btn-checklist" href="{{ route("checklist") }}">ตรวจสอบรายชื่อ</a>
                    </div>
                @else
                    <a class="btn-announce" onclick="myFunction2()">ประกาศรายชื่อผู้มีสิทธิ์สอบ</a>
                @endif
            @endforeach
        </div>
    </div>
    <script>
        function myFunction() {
            Swal.fire({
                icon: 'info',
                title: 'โปรดเลือกระดับชั้นเรียน',
                html: '<button class="btn-select" onclick="onA()" >ม.1</button>' +
                      '<button class="btn-select" onclick="onB()" >ม.4</button>',
                showConfirmButton: false,
            })
        }
        function onA() {
            window.location.href = '{{ route("register_first") }}';
        }
        function onB() {
            window.location.href = '{{ route("register_second") }}';
        }

        function myFunction2() {
            Swal.fire({
                icon: 'info',
                title: 'โปรดเลือกระดับชั้นเรียน',
                html: '<button class="btn-select" onclick="onC()" >ม.1</button>' +
                      '<button class="btn-select" onclick="onD()" >ม.4</button>',
                showConfirmButton: false,
            })
        }
        function onC() {
            window.location.href = '{{ route("announce") }}';
        }
        function onD() {
            window.location.href = '{{ route("announce_second") }}';
        }
    </script>
@endsection


