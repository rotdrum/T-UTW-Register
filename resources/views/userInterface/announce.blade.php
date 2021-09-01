@extends('layouts.app')

@section('content')

    <div class="vue-register">
        <div class="vue-container">
            <div class="vue-card">
                <h2>ประกาศรายชื่อผู้มีสิทธิ์สอบ ม.1</h2>

                @foreach ($news as $new)
                <p>
                @php
                    echo strip_tags("$new->news","<br>");
                @endphp
                </p> 
                @endforeach
                <br>
                <p class="suggest">ค้นหาจากเลขประจำตัวผู้สมัคร หรือ เลขบัตรประชาชน หรือ ชื่อจริง</p>
                <form class="article-search"  method="GET" action="{{ route('searchannonce1') }}">
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
                    @foreach ($studentones as $studentone)
                    @php $id = $studentone->id ; @endphp
                    <div class="tr">
                        <div class="td"><p>รหัสสมัครสอบ</p> {{ $studentone->student_id }}</div>
                        <div class="td">{{ $studentone->tname }}{{ $studentone->fname }}  {{ $studentone->lname }}</div>
                        <div class="td"><p>โรงเรียนเดิม</p>{{ $studentone->name_school }} </div>
                        <div class="td"><p>สถานะการสมัคร</p><a href="{{route('user_print', $id)}}">พิมพ์เอกสาร</a></div>
                    </div> 
                    @endforeach
                </div>

                

            </div>
        </div>
    </div>
@endsection