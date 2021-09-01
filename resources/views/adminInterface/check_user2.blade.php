@extends('layouts.admin')

@section('content')
    <div class="vue-register">
        <div class="vue-container">
            <div class="vue-card">
                <h2>รายละเอียด</h2>
                <a href="#button" class="btn-setting">ต้องการแก้ไขข้อมูลส่วนตัว คลิกที่นี่</a>
                <br/>

                @foreach ($years as $year)
                    @php $y = $year->year ; @endphp
                @endforeach
                @foreach ($students as $student)
                <div class="check-form">
                <a href="{{asset('storage/')}}/../../storage/app/public/{{$y}}/{{ $student->student_id }}/{{ $student->pic_file }}" class="btn-check">รูปนักเรียน</a>
                <a href="{{asset('storage/')}}/../../storage/app/public/{{$y}}/{{ $student->student_id }}/{{ $student->home_file }}" class="btn-check">ทะเบียนบ้าน</a>
                <a href="{{asset('storage/')}}/../../storage/app/public/{{$y}}/{{ $student->student_id }}/{{ $student->number_file }}" class="btn-check">บัตรประชาชน</a>
                <a href="{{asset('storage/')}}/../../storage/app/public/{{$y}}/{{ $student->student_id }}/{{ $student->end_file }}" class="btn-check">ใบเปลี่ยนชื่อ</a>
                <a href="{{asset('storage/')}}/../../storage/app/public/{{$y}}/{{ $student->student_id }}/{{ $student->onet_file }}" class="btn-check">O-NET</a>
                </div>

                <div class="info-form">
                    <div class="title">รหัสการสมัคร</div>
                    <div class="detail">{{ $student->student_id }}</div>
                </div>

                <div class="info-form">
                    <div class="title">ชื่อ-สกุล</div>
                    <div class="detail">{{ $student->tname }}{{ $student->fname }}  {{ $student->lname }}</div>
                </div>

                <div class="info-form">
                    <div class="title">เลขบัตรประจำตัวประชาชน</div>
                    <div class="detail">{{ $student->number_id }}</div>
                </div>

                <br>

                <div class="info-form">
                    <div class="title">กำลังศึกษาอยู่</div>
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
                    <div class="detail">{{ $student->tel }}</div>
                </div>

                <br>

                <div class="info-form">
                    <div class="title">แผนการเรียน ลำดับที่ 1</div>
                    <div class="detail">{{ $student->rank_edu1 }}</div>
                </div>
                
                <div class="info-form">
                    <div class="title">แผนการเรียน ลำดับที่ 2</div>
                    <div class="detail">{{ $student->rank_edu2 }}</div>
                </div>
                
                <div class="info-form">
                    <div class="title">แผนการเรียน ลำดับที่ 3</div>
                    <div class="detail">{{ $student->rank_edu3 }}</div>
                </div>
                <div class="info-form">
                    <div class="title">ความสามารถพิเศษ</div>
                    <div class="detail">{{ $student->extra }}</div>
                </div>

                <br>

                <div class="info-form">
                    <div class="title">O-NET (ไทย)</div>
                    <div class="detail">{{ $student->thai_onet }} คะแนน</div>
                </div>
                <div class="info-form">
                    <div class="title">O-NET (คณิต)</div>
                    <div class="detail">{{ $student->math_onet }} คะแนน</div>
                </div>
                <div class="info-form">
                    <div class="title">O-NET (วิทย์)</div>
                    <div class="detail">{{ $student->science_onet }} คะแนน</div>
                </div>
                <div class="info-form">
                    <div class="title">O-NET (อังกฤษ)</div>
                    <div class="detail">{{ $student->eng_onet }} คะแนน</div>
                </div>
                <div class="info-form">
                    <div class="title">O-NET (รวม)</div>
                    <div class="detail">{{ $student->sum_onet }} คะแนน</div>
                </div>
                @php $id = $student->id ; @endphp
                @endforeach

                <div class="btn-manage">
                    <a href="{{route('getapprove2', $id)}}" class="btn-approve">อนุมัติ</a>
                    <a href="{{route('deletestudent2', $id)}}" class="btn-notApprove">ไม่อนุมัติ/ลบข้อมูล</a>
                </div>

                @foreach ($students as $student)
                <form class="vue-register" enctype="multipart/form-data"  method="POST" action="{{ route('updatesstudentfour') }}">
                    @csrf
                    <input type="hidden" name="id" value="{{ $student->id }}" >
                    <div class="vue-container">
                        <div class="vue-card">
                            <h2 id="button">แก้ไขข้อมูลส่วนตัว</h2>
                        
                            <div class="row">
                                <div class="form-group">
                                    <p class="">คำนำหน้า</p>
                                    <select class=""  name="tname" >
                                        <option value="{{ $student->tname }}">{{ $student->tname }}</option>
                                        <option value="เด็กชาย">เด็กชาย</option>
                                        <option value="เด็กหญิง">เด็กหญิง</option>
                                    </select>
                                </div>
                            </div>
            
                            <div class="row">
                                <div class="form-group-half">
                                    <p class="">ชื่อ</p>
                                    <input type="text" name="fname" class="txt-form" value="{{ $student->fname }}" required>
                                </div>
                                <div class="form-group-half">
                                    <p>นามสกุล</p>
                                    <input type="text"name="lname"  class="txt-form" value="{{ $student->lname }}" required>
                                </div>
                            </div>
            
                            <div class="row">
                                <div class="form-group">
                                    <p class="">เลขประจำตัวบัตรประชาชน</p>
                                    <input type="text" name="number_id" class="txt-form" value="{{ $student->number_id }}" required>
                                </div>
                            </div>
            
                            <br><br>
            
                            <div class="row">
                                <div class="form-group">
                                    <p class="">กำลังศึกษาชั้น ม.3 อยู่โรงเรียน</p>
                                    <input type="text" name="name_school" class="txt-form" value="{{ $student->name_school }}" required>
                                </div>
                            </div>
            
                            <div class="row">
                                <div class="form-group-half">
                                    <p class="">อำเภอ (โรงเรียน)</p>
                                    <input type="text" name="district_school"  class="txt-form" value="{{ $student->district_school }}" required>
                                </div>
                                <div class="form-group-half">
                                    <p class="">จังหวัด (โรงเรียน)</p>
                                    <input type="text" name="province_school" class="txt-form" value="{{ $student->province_school }}" required>
                                </div>
                            </div>
            
                            <br><br>
            
                            <div class="row">
                                <div class="form-group-half">
                                    <p class="">ปัจจุบันอยู่บ้านเลขที่</p>
                                    <input type="text" name="home_id" class="txt-form" value="{{ $student->home_id }}" required>
                                </div>
                                <div class="form-group-half">
                                    <p class="">หมู่</p>
                                    <input type="text" name="group" class="txt-form" value="{{ $student->group }}" required>
                                </div>
                            </div>
            
                            <div class="row">
                                <div class="form-group-half">
                                    <p class="">ถนน</p>
                                    <input type="text" name="road" class="txt-form" value="{{ $student->road }}" required >
                                </div>
                                <div class="form-group-half">
                                    <p class="">ตำบล</p>
                                    <input type="text" name="parish" class="txt-form" value="{{ $student->parish }}" required>
                                </div>
                            </div>
            
                            <div class="row">
                                <div class="form-group-half">
                                    <p class="">อำเภอ</p>
                                    <input type="text"name="district" class="txt-form" value="{{ $student->district }}" required>
                                </div>
                                <div class="form-group-half">
                                    <p class="">จังหวัด</p>
                                    <input type="text" name="province" class="txt-form" value="{{ $student->province }}" required>
                                </div>
                            </div>
            
                            <div class="row">
                                <div class="form-group-half">
                                    <p class="">รหัสไปรษณีย์</p>
                                    <input type="text" name="postcode" class="txt-form" value="{{ $student->postcode }}" required>
                                </div>
                                <div class="form-group-half">
                                    <p class="">เบอร์โทรศัพท์ที่สามารถติดต่อได้</p>
                                    <input type="text" name="tel" class="txt-form" value="{{ $student->tel }}" required>
                                </div>
                            </div>
            
                            <br><br>
            
                            <div class="row">
                                <p>กรอกคะแนนผลการทดสอบทางการศึกษาระดับชาติขั้นพื้นฐาน (O-NET) </p>
                                <div class="form-group-half">
                                    <p class="">กลุ่มสาระการเรียนรู้ภาษาไทย</p>
                                    <input type="text" name="thai_onet" class="txt-form" value="{{ $student->thai_onet }}" required>
                                </div>
                                <div class="form-group-half">
                                    <p class="">กลุ่มสาระการเรียนรู้คณิตศาสตร์</p>
                                    <input type="text" name="math_onet" class="txt-form" value="{{ $student->math_onet }}" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group-half">
                                    <p class="">กลุ่มสาระการเรียนรู้วิทยาศาสตร์</p>
                                    <input type="text" name="science_onet" class="txt-form" value="{{ $student->science_onet }}" required>
                                </div>
                                <div class="form-group-half">
                                    <p class="">กลุ่มสาระการเรียนรู้ภาษาต่างประเทศ</p>
                                    <input type="text" name="eng_onet" class="txt-form" value="{{ $student->eng_onet }}" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group-half">
                                    <p class="">คะแนนรวม</p>
                                    <input type="text" name="sum_onet" class="txt-form" value="{{ $student->sum_onet }}" required>
                                </div>
                            </div>
            
                            {{-- <div class="row">
                                <div class="form-group">
                                    <p>แผนการเรียน</p>
                                    <select>
                                        <option value="">--- เลือก ---</option>
                                        <option value="">วิทย์-คณิต</option>
                                        <option value="">ศิลป์สังคม</option>
                                    </select>
                                </div>
                            </div> --}}
        
                            <input class="btn-submit" type="submit" value="บันทึก">
            
                        </div>
                    </div>
                </form>
                @endforeach

            </div>
        </div>
    </div>

@endsection