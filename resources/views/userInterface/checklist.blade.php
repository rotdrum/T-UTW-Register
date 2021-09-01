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
    <div class="vue-register">
        <div class="vue-container">
            <div class="vue-card">
                <h2>ตรวจสอบรายชื่อ</h2>

                <p class="suggest">ค้นหาจากเลขประจำตัวผู้สมัคร หรือ เลขบัตรประชาชน หรือ ชื่อจริง</p>
                <form class="article-search"  method="GET" action="{{ route('searchchecklist') }}">
                    @csrf
                    <input class="search" type="search" name="value" placeholder="ค้นหาจากเลขประจำตัวผู้สมัคร หรือ เลขบัตรประชาชน หรือ ชื่อจริง">
                    <i class="fas fa-search"></i>
                    <button>ค้นหา</button>
                </form>

                <div class="table">
                    <div class="tr">
                        <div class="th">รหัสสมัครเรียน</div>
                        <div class="th">ชื่อ-สกุล</div>
                        <div class="th">ระดับชั้น</div>
                        <div class="th">สถานะการสมัคร</div>
                    </div>
                    {{-- ---------------------------------------------------------- --}}
                    @foreach ($studentones as $studentone)
                    <div class="tr">
                        <div class="td"><p>รหัสสมัครสอบ</p> {{ $studentone->student_id }}</div>
                        <div class="td">{{ $studentone->tname }}{{ $studentone->fname }}  {{ $studentone->lname }}</div>
                        <div class="td"><p>ระดับชั้น</p>ม.1 </div>
                        @if( $studentone->status == 1 )
                            <div class="td warning" ><p>สถานะการสมัคร</p><i class="fas fa-circle"></i>รอการตรวจสอบ</div>
                        @elseif( $studentone->status == 2 )          
                            <div class="td success" ><p>สถานะการสมัคร</p><i class="fas fa-circle"></i>ตรวจสอบแล้ว</div>
                        @endif
                    </div> 
                    @endforeach
                    @foreach ($studentfours as $studentfour)
                    <div class="tr">
                        <div class="td"><p>รหัสสมัครเรียน</p> {{ $studentfour->student_id }}</div>
                        <div class="td">{{ $studentfour->tname }}{{ $studentfour->fname }}  {{ $studentfour->lname }}</div>
                        <div class="td"><p>ระดับชั้น</p>ม.4 </div>
                        @if( $studentfour->status == 1 )
                            <div class="td warning"><p>สถานะการสมัคร</p><i class="fas fa-circle"></i>รอการตรวจสอบ</div>
                        @elseif( $studentfour->status == 2 )          
                            <div class="td success" ><p>สถานะการสมัคร</p><i class="fas fa-circle"></i>ตรวจสอบแล้ว</div>
                        @endif
                    </div> 
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection