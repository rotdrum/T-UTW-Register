@extends('layouts.app')

@section('content')
    <div class="vue-register">
        <div class="vue-container">
            <div class="vue-card">
                <i id="i-success" class="fas fa-check-circle"></i>
                <h2>ลงทะเบียนเสร็จสมบูรณ์</h2>

                <div class="info-form danger">
                    <div class="title">รหัสการสมัคร</div>
                    <div class="detail">000000 (โปรดจดรหัสนี้ไว้)</div>
                </div>

                <div class="info-form">
                    <div class="title">ชื่อ-สกุล</div>
                    <div class="detail">นายอนันต์ ใจดี</div>
                </div>

                <div class="info-form">
                    <div class="title">เลขบัตรประจำตัวประชาชน</div>
                    <div class="detail">1234567890123</div>
                </div>

                <br>

                <div class="info-form">
                    <div class="title">กำลังศึกษาอยู่</div>
                    <div class="detail">โรงเรียน</div>
                </div>
                <div class="info-form">
                    <div class="title">อำเภอ</div>
                    <div class="detail">อำเภอ</div>
                </div>
                <div class="info-form">
                    <div class="title">จังหวัด</div>
                    <div class="detail">จังหวัด</div>
                </div>

                <br>

                <div class="info-form">
                    <div class="title">ปัจจุบันบ้านเลขที่</div>
                    <div class="detail">1 หมู่ - ถนน - ตำบล - อำเภอ - จังหวัด - 00000</div>
                </div>
                <div class="info-form">
                    <div class="title">เบอร์โทรศัพท์</div>
                    <div class="detail">000-000-0000</div>
                </div>


                <button class="btn-submit" onclick="sure()">ตรวจสอบรายชื่อ</button>
            </div>
        </div>
    </div>

    <script>
        function sure() {
            Swal.fire({
                icon: 'warning',
                title: 'ท่านได้จดรหัสการสมัครแล้วหรือไม่?',
                html: '<button class="btn-select" onclick="onA()" >จดแล้ว</button>',
                showConfirmButton: false,
            })
        }
        function onA() {
            window.location.href = '{{ route("index") }}';
        }
    </script>
@endsection