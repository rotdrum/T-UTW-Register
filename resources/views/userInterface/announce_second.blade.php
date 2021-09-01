@extends('layouts.app')

@section('content')

    <div class="vue-register">
        <div class="vue-container">
            <div class="vue-card">
                <h2>ประกาศรายชื่อผู้มีสิทธิ์สอบ ม.4</h2>

                @foreach ($news as $new)
                <p>
                @php
                    echo strip_tags("$new->news","<br>");
                @endphp
                </p> 
                @endforeach
                <br>
                <p class="suggest">ค้นหาจากเลขประจำตัวผู้สมัคร หรือ เลขบัตรประชาชน หรือ ชื่อจริง</p>
                <form class="article-search"  method="GET" action="{{ route('searchannonce2') }}">
                    @csrf
                    <input class="search" type="search" name="value" placeholder="ค้นหาจากเลขประจำตัวผู้สมัคร หรือ เลขบัตรประชาชน หรือ ชื่อจริง">
                    <i class="fas fa-search"></i>
                    <button>ค้นหา</button>
                </form>

                <div class="table">
                    <div class="tr">
                        <div class="th">รหัสสมัครสอบ</div>
                        <div class="th">ชื่อ-สกุล</div>
                        <div class="th">โรงเรียนเดิม</div>
                        <div class="th"></div>
                    </div>
                    {{-- ---------------------------------------------------------- --}}
                    @foreach ($studentfours as $studentfour)
                    @php $id = $studentfour->id ; @endphp
                    <div class="tr">
                        <div class="td"><p>รหัสสมัครสอบ</p> {{ $studentfour->student_id }}</div>
                        <div class="td">{{ $studentfour->tname }}{{ $studentfour->fname }}  {{ $studentfour->lname }}</div>
                        <div class="td"><p>โรงเรียนเดิม</p>{{ $studentfour->name_school }} </div>
                        <div class="td"><p>สถานะการสมัคร</p><a href="{{route('user_print2', $id)}}">พิมพ์เอกสาร</a></div>
                    </div> 
                    @endforeach
                </div>

                

            </div>
        </div>
    </div>
@endsection