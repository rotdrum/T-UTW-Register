@extends('layouts.app')
@section('content')
<!----------------------------------  Firebase ----------------------------------->
						<!-- The core Firebase JS SDK is always required and must be listed first -->
						<script src="https://www.gstatic.com/firebasejs/7.5.0/firebase-app.js"></script>
						<script src="https://www.gstatic.com/firebasejs/7.5.0/firebase.js"></script>
						<!-- TODO: Add SDKs for Firebase products that you want to use
							 https://firebase.google.com/docs/web/setup#available-libraries -->
						<script src="https://www.gstatic.com/firebasejs/7.5.0/firebase-analytics.js"></script>

						<script>
					        // Your web app's Firebase configuration
                            const firebaseConfig = {
                                apiKey: "AIzaSyD0uEfF6xXH2kMgugbRRlU3EEeBNbc8nJ0",
                                authDomain: "robotutw.firebaseapp.com",
                                databaseURL: "https://robotutw.firebaseio.com",
                                projectId: "robotutw",
                                storageBucket: "robotutw.appspot.com",
                                messagingSenderId: "368965513279",
                                appId: "1:368965513279:web:8c4126eb455b7a3093c88a",
                                measurementId: "G-H77E8W06QX"
                            };
							  // Initialize Firebase
							  firebase.initializeApp(firebaseConfig);
							  firebase.analytics();
						</script>
<!----------------------------------  Firebase ----------------------------------->

<script>
    window.onload = function() {
     if(!window.location.hash) {
         window.location = window.location + '#loaded';
         window.location.reload();
     }
 }
</script>
<script type="text/javascript" src="http://code.jquery.com/jquery.js"></script>

<script>
    var flag = 0 ;
        
    firebase.database().ref('flag').once('value').then(function(snapshot){
    BPM = snapshot.val();
    if(BPM == 2){
        document.getElementById("al").innerHTML = 
        '@foreach ($status as $s)' +
        '@if($s->status == 1)' +
        '<div class="vue-btn-register">' +
        '<a class="btn-register"  onclick="myFunction()">สมัครสอบ</a>' +
        '<a class="btn-checklist" href="{{ route("checklist") }}">ตรวจสอบรายชื่อ</a>' +
        '</div>' +
        '@else' +
        '<a class="btn-announce" onclick="myFunction2()">ประกาศรายชื่อผู้มีสิทธิ์สอบ</a>' +
        '@endif' +
        '@endforeach'
        ;
    }
    else if(BPM == 3){
        document.getElementById("al").innerHTML = 
        '<br/>' +
        '<h4>ปิดทำการรับสมัครแล้ว</h4>' +
        '<h4>โปรดรอประกาศรายชื่อผู้มีสิทธิ์สอบและพิมพ์บัตรประจำตัวสอบ</h4>'+
        '<h4>เที่ยงคืนของวันนี้เป็นต้นไป</h4>'
    }
    else{
        document.getElementById("al").innerHTML = 
        '<br/>' +
        '<h4>เปิดทำการรับสมัครระหว่าง</h4>' +
        '<h4>วันที่ 3-12 พฤษภาคม 2563</h4>'
    }
    });

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

            <div id="al"></div>
            <br/>
            <h5 class="text-white">** กรณีมีปัญหาในการสมัคร</h5>
            @foreach ($tels as $tel)
                <p class="text-white text-center">
                    @php
                    echo strip_tags("$tel->news","<br>");
                    @endphp
                </p>
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


