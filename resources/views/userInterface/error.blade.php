@extends('layouts.app')

@section('content')
    <div class="vue-register">
        <div class="vue-container">
            <div class="vue-card">
                <i class="fas fa-exclamation-circle" id="i-error"></i>
                <h2 class="danger">ลงทะเบียนล้มเหลว</h2>

                <h3 class="danger">เลขบัตรประชาชนนี้สมัครแล้ว!</h3><br/>
                <p> เนื่องจาก เลขบัตรประชาชนของคุณถูกใช้ไปแล้ว อาจเนื่องด้วยคุณได้สมัครแล้ว หรือ มีผู้ใช้เลขบัตรประชาชนของคุณในการสมัครเข้าไปในระบบ ขอให้คุณตรวจสอบได้จากปุ่มด้านล่าง </p>
                <br/>
                <p> <b> หมายเหตุ : </b> หาก เป็นชื่อของผู้อื่น สามารถติดต่อผู้ดูแลระบบได้ที่</p>
                @foreach ($tels as $tel)
                <p>
                @php
                    echo strip_tags("$tel->news","<br>");
                @endphp
                </p> 
                @endforeach
                <button class="btn-submit" onclick="sure()">ตรวจสอบรายชื่อ</button>
            </div>
        </div>
    </div>

    <script>
        function sure() {
            Swal.fire({
                icon: 'warning',
                title: 'ย้อนกลับ?',
                html: '<button class="btn-select" onclick="onA()" >ยืนยัน</button>',
                showConfirmButton: false,
            })
        }
        function onA() {
            window.location.href = '{{ route("index") }}';
        }
    </script>
@endsection