@extends('layouts.app')

@section('content')
    <div class="vue-register">
        <div class="vue-container">
            <div class="vue-card">
                <i id="i-success" class="fas fa-check-circle"></i>
                <h2>ลงทะเบียนเสร็จสมบูรณ์</h2>
                @foreach ($students as $student)
                <div class="info-form danger">
                    <div class="title">รหัสการสมัคร</div>
                    <div class="detail">{{ $student->student_id }} (โปรดจดรหัสนี้ไว้)</div>
                </div>

                <div class="info-form">
                    <div class="title">ชื่อ-สกุล</div>
                    <div class="detail">{{ $student->tname }}{{ $student->fname }}  {{ $student->lname }} </div>
                </div>

                <div class="info-form">
                    <div class="title">เลขบัตรประจำตัวประชาชน</div>
                    <div class="detail">{{ $student->number_id }} </div>
                </div>

                <br>

                <div class="info-form">
                    <div class="title">สำเร็จการศึกษาจากโรงเรียน</div>
                    <div class="detail">{{ $student->name_school }}</div>
                </div>
                <div class="info-form">
                    <div class="title">อำเภอ</div>
                    <div class="detail">{{ $student->district_school }}</div>
                </div>
                <div class="info-form">
                    <div class="title">จังหวัด</div>
                    <div class="detail">{{ $student->province_school }}</div>
                </div>

                <br>

                <div class="info-form">
                    <div class="title">ปัจจุบันบ้านเลขที่</div>
                    <div class="detail"> {{ $student->home_id }}  หมู่ {{ $student->group }} ถนน{{ $student->road	 }} ตำบล{{ $student->parish }} อำเภอ{{ $student->district }} จังหวัด{{ $student->province }} {{ $student->postcode }}</div>
                </div>
                <div class="info-form">
                    <div class="title">เบอร์โทรศัพท์</div>
                    <div class="detail">{{ $student->tel }} </div>
                </div>
                @endforeach

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