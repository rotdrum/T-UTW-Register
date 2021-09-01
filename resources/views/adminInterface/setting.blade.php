@extends('layouts.admin')
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
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
                <h2>ตั้งค่า</h2>
                <form class="row" class="row" method="POST" action="{{ route('postsettels') }}">
                    @csrf
                    <div class="form-group">
                        <p class="">ข้อมูลติดต่อหาผู้ดูแลระบบ</p>
                        @foreach ($tels as $tel)
                            <textarea type="text" name="value" id="area" class="txt-area" >{{ $tel->news }}</textarea>
                        @endforeach
                        <p class=""><h6><b>** หมายเหตุ</b> ถ้าต้องการขึ้นบรรทัดใหม่ ให้พิมพ์ <img src="https://www.computerhope.com/jargon/h/br.gif" style="width:50px;"></h6> </p>
                    </div>
                    <input type="submit" class="btn-submit" value="ยืนยัน" style="margin: 0;">
                </form>
                <br/>
                <br/>
                <br/>
                <form class="row" class="row" method="POST" action="{{ route('postsetnews') }}">
                    @csrf
                    <div class="form-group">
                        <p class="">ข่าวประชาสัมพันธ์ หน้าประกาศผล</p>
                        @foreach ($news as $new)
                            <textarea type="text"  name="value" id="area2"   class="txt-area" >{{ $new->news }}</textarea>
                        @endforeach
                        <p class=""><h6><b>** หมายเหตุ</b> ถ้าต้องการขึ้นบรรทัดใหม่ จะมี <img src="https://www.computerhope.com/jargon/h/br.gif" style="width:50px;"> </h6> </p>
                    </div>
                    <input type="submit" class="btn-submit" value="ยืนยัน" style="margin: 0;">
                </form>
                <br/>
                <br/>
                <br/>
                <div class="row">
                    <div class="form-group">
                        <p class="">เปิด-ปิด หน้าประกาศผล</p>
                    </div>
                    @foreach ($status as $s)
                        @if($s->status == 1)
                            <a href="{{route('updatestatus2')}}" class="btn-setting">เปิดการประกาศผล</a>
                        @else
                            <a href="{{route('updatestatus1')}}" class="btn-setting text-white"  style="background-color: #FF0033;"  >ปิดการประกาศผล</a>
                        @endif
                    @endforeach
                </div>
                <br/>
                <br/>
                <br/>
                
                <form class="row" method="POST" action="{{ route('postsetyear') }}">
                @csrf
                    <div class="form-group">
                        <p class="">เปลี่ยนปีการศึกษา</p>
                        @foreach ($years as $year)
                            <input type="text" id="value" name="value" value="{{ $year->year }}" class="txt-form" >
                        @endforeach
                        
                        <p class="">เปลี่ยนปีของรูปแบบรหัสนักเรียน</p>
                        @foreach ($yearstudents as $yearsstudent)
                            <input type="text" id="value2" name="value2" value="{{ $yearsstudent->year }}" class="txt-form" >
                        @endforeach
                        <p class=""><h6><b>** หมายเหตุ</b> เพื่อใช้ในการตั้งรหัสนักเรียนเป็นรูปแบบ : {{ $yearsstudent->year }}xxxxx </h6> </p>
                    </div>
                    <input type="submit" class="btn-submit" value="ยืนยัน" style="margin: 0;">
                </form>
                <br/>
                <br/>
                <br/>
                <div class="row">
                    <div class="form-group">
                        <p class="">ล้างข้อมูลทั้งหมดและรีเซ็ตระบบ</p>
                    </div>
                    <input type="submit" class="btn-submit" onclick="surede()" value="ยืนยัน" style="margin: 0;">
                </div>


            </div>
        </div>
    </div>
    <script>
            $('#area').ready(function() {
            $('#area').on('keypress',function(e) {
                if(e.which == 13) {
                    var msg = $("#area").val();
                    $("#area").val(msg + "<br>");
                }
            });
            });

            $('#area2').ready(function() {
            $('#area2').on('keypress',function(e) {
                if(e.which == 13) {
                    var msg = $("#area2").val();
                    $("#area2").val(msg + "<br>");
                }
            });
            });
    </script>
    <script>
        function surede() {
            Swal.fire({
                icon: 'warning',
                title: 'คุณต้องการลบข้อมูลทั้งหมด?',
                html: '<p>ข้อมูลนักเรียนและไฟล์ทั้งหมดจะถูกลบทิ้งและไม่สามารถนำกลับมาได้</p>'+
                '<button class="btn-select" onclick="onAD()" >ยืนยัน</button>',
                showConfirmButton: false,
            })
        }
        function onAD() {
            window.location.href = '{{ route("deletes") }}';
        }
    </script>
@endsection