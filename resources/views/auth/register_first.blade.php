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
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <form class="vue-register" enctype="multipart/form-data"  method="POST" action="{{ route('postregister1') }}" onSubmit="return check();" name="register">
        @csrf
        <div class="vue-container">
            <div class="vue-card">
                @foreach ($years as $year)
                <h3 style="text-align: center;">โรงเรียนอุทัยวิทยาคม ปีการศึกษา {{ $year->year }}</h3>
                @endforeach
                <h2 class="h2">แบบลงทะเบียนการสมัครเข้าศึกษาต่อ ชั้น ม.1</h2>
                <div class="show-title">
                    <h3>แบบลงทะเบียน</h3>
                    <h3>รับสมัครเข้าศึกษาต่อ</h3>
                    <h3>ชั้น ม.1</h3>
                </div>
                
                <div class="row">
                    <div class="form-group">
                        <p class="">คำนำหน้า</p>
                        <select class="" name="tname" required>
                            <option value="">--- เลือก ---</option>
                            <option value="เด็กชาย">เด็กชาย</option>
                            <option value="เด็กหญิง">เด็กหญิง</option>
                            <option value="นาย">นาย</option>
                            <option value="นางสาว">นางสาว</option>
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group-half">
                        <p class="">ชื่อ (ตัวอย่าง : สมรัก)</p>
                        <input type="text" name="fname" class="txt-form" placeholder="ระบุชื่อ (ไม่ต้องระบุคำนำหน้า)" required>
                    </div>
                    <div class="form-group-half" >
                        <p>นามสกุล</p>
                        <input type="text"name="lname"  class="txt-form" placeholder="ระบุนามสกุล" required>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group">
                        <p class="">เลขประจำตัวบัตรประชาชน ตัวอย่าง 1-6199-00142-14-5</p>
                        <input class="id-card" type="number" id="card_id1" size="1" min="0" max="9" onKeyPress="if(this.value.length==1) return false;"   required>
                        <label  for="">-</label>
                        <input class="id-card" type="number"  id="card_id2" size="1" min="0" max="9" onKeyPress="if(this.value.length==1) return false;"   required>
                        <input class="id-card" type="number"  id="card_id3" size="1" min="0" max="9" onKeyPress="if(this.value.length==1) return false;"   required>
                        <input class="id-card" type="number"  id="card_id4" size="1" min="0" max="9" onKeyPress="if(this.value.length==1) return false;"   required>
                        <input class="id-card" type="number"  id="card_id5" size="1" min="0" max="9" onKeyPress="if(this.value.length==1) return false;"   required>
                        <label  for="">-</label>
                        <input class="id-card" type="number"  id="card_id6" size="1" min="0" max="9" onKeyPress="if(this.value.length==1) return false;"   required>
                        <input class="id-card" type="number"  id="card_id7" size="1" min="0" max="9" onKeyPress="if(this.value.length==1) return false;"   required>
                        <input class="id-card" type="number"   id="card_id8" size="1" min="0" max="9" onKeyPress="if(this.value.length==1) return false;"   required>
                        <input class="id-card" type="number"  id="card_id9" size="1" min="0" max="9" onKeyPress="if(this.value.length==1) return false;"   required>
                        <input class="id-card" type="number"  id="card_id10" size="1" min="0" max="9" onKeyPress="if(this.value.length==1) return false;"   required>
                        <label  for="">-</label>
                        <input class="id-card" type="number"  id="card_id11" size="1" min="0" max="9" onKeyPress="if(this.value.length==1) return false;"   required>
                        <input class="id-card" type="number"  id="card_id12" size="1" min="0" max="9" onKeyPress="if(this.value.length==1) return false;"  required>
                        <label  for="">-</label>

                        <input class="id-card" type="number"  id="card_id13" size="1" min="0" max="9" onKeyPress="if(this.value.length==1) return false;"   required>

                    </div>
                </div>

                <div class="row" id="number_div">
                    <div class="form-group">
                        <p class="">เลขประจำตัวบัตรประชาชน (ตัวอย่าง : 1619900142145)</p>
                        <input type="text" id="number_id" name="number_id" class="txt-form" placeholder="ระบุเลขบัตรประชาชน" required>
                    </div>
                </div>

                <br><br>

                <div class="row">
                    <div class="form-group">
                        <p class="">สำเร็จการศึกษาชั้น ป.6 จากโรงเรียน </p>
                        <select id="name_school_se" class="" name="" required>
                            <option value="">--- เลือกโรงเรียน ---</option>
                            <option value="n1">โกรกพระพิทยาคม</option>

                            <option value="u1">ชุมชนเทศบาลวัดมณีสถิตกปิฏฐาราม</option>
                            <option value="u1">ชุมชนวัดท่าซุง(เลิศ-สินอุปถัมภ์)</option>
                         
                            <option value="u1">เทศบาลวัดธรรมโศภิต</option>
                            <option value="u1">เทศบาลบ้านปากกะบาด</option>
                            <option value="u1">เทศบาลวัดอมฤตวารี</option>
                            <option value="u1">เทศบาลวัดหลวงราชาวาส สาธิตมหาวิทยาลัยรามคำแหง</option>
                            <option value="c3">เทศบาลวัดสิงห์สถิตย์</option>


                            <option value="u1">บ้านเกาะเทโพ</option>
                            <option value="u1">บ้านดงยางใต้</option>
                            <option value="n2">บ้านดอนกระชาย</option>
                            <option value="u1">บ้านภูมิธรรม</option>
                            <option value="u1">บ้านเนินตูม</option>
                            <option value="u1">บ้านท่าซุง</option>
                            <option value="u3">บ้านท่าชะอม</option>
                            <option value="u2">บ้านหลุมเข้ามิตรภาพที่ 117</option>
                            <option value="n1">บ้านหาดสูง</option>

                            <option value="n3">ประดับวิทย์</option>

                            <option value="n2">พยุหะวิทยา</option>
                            <option value="u1">พิทักษ์ศิษย์วิทยา</option>

                            <option value="c1">วรรณรัตน์วิทยา</option>
                            <option value="n1">วัดหนองพรมหน่อ</option>
                            <option value="n2">วัดคลองบางเดื่อ</option>
                            <option value="n2">วัดหนองคล่อ</option>
                            <option value="c2">วัดใหญ่</option>
                            <option value="c2">วัดหัวยาง(รัฐราษฎร์อนุเคราะห์)</option>
                            <option value="c2">วัดสะพานหิน</option>
                            <option value="c3">วัดดอนตาล</option>
                            <option value="c3">วัดคลองบุญ</option>
                            <option value="c3">วัดโคกสุก</option>
                            <option value="c3">วัดหนองจิก</option>
                            <option value="c3">วัดหนองน้อย</option>
                            <option value="u2">วัดท่าโพ</option>
                            <option value="u1">วัดสังกัสรัตนคีรี</option>
                            <option value="u1">วัดบุญลือ(อุเทสประชาสรรค์)</option>
                            <option value="u1">วัดบุญลือ(วัดเขาพะแวง)</option>
                            <option value="u1">วัดจักษา</option>
                            <option value="u1">วัดตานาด</option>
                            <option value="u1">วัดสะพานหิน</option>
                            <option value="u1">วัดหาดทนง</option>
                            <option value="u1">วัดอัมพวัน(ประชาชนูทิศ)</option>
                            <option value="u1">วัดอุโปสถาราม</option>
                            <option value="u1">วัดโนนเหล็ก(อุทัยประชาสรรค์)</option>

                            <option value="n2">อนุบาลพยุหะคีรี(วัดพระปรางค์เหลือง)</option>
                            <option value="u4">อนุบาลทัพทัน(อุดมพิทยา)</option>
                            <option value="u6">อนุบาลลานสัก</option>
                            <option value="u5">อนุบาลสว่างอารมณ์</option>
                            <option value="u1">อนุบาลเมืองอุทัยธานี</option>
                            <option value="u1">อนุศิษย์วิทยา 3</option>
                            <option value="u1">อนุศิษย์วิทยา 4</option>
                            <option value="u2">อนุบาลหนองขาหย่าง</option>
                            <option value="u1">อนุบาลวัดหนองเต่า</option>
                            <option value="u3">อนุบาลวัดหนองขุนชาติ(อุทิศพิทยาคาร)</option>
                            <option value="c4">อนุบาลหันคา(วัดท่ากฤษณาสุชัยประชาสรรค์)</option>

                            <option value="อื่นๆ">--- โรงเรียนอื่น ๆ (ไม่มีในรายการ) ---</option>
                        </select>
                    </div>
                </div>

                
                <div class="row">
                    <div class="form-group">
                        <p class="" id="name_school_p" >โปรดระบุชื่อโรงเรียน (ตัวอย่าง : อุทัยวิทยาคม)</p>
                        <input type="text" id="name_school" name="name_school" class="txt-form" placeholder="ระบุชื่อโรงเรียน" required>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group-half">
                        <p class="">อำเภอ (โรงเรียน)</p>
                        <input type="text" id="district_school"  name="district_school"  class="txt-form" placeholder="ระบุอำเภอโรงเรียน" required>
                    </div>
                    <div class="form-group-half">
                        <p class="">จังหวัด (โรงเรียน)</p>
                        <input type="text" id="province_school" name="province_school" class="txt-form" placeholder="ระบุจังหวัดโรงเรียน" required>
                    </div>
                </div>

                <br><br>

                <div class="row">
                    <div class="form-group-half">
                        <p class="">ปัจจุบันอยู่บ้านเลขที่</p>
                        <input type="text" name="home_id" class="txt-form" placeholder="ระบุบ้านเลขที่" required>
                    </div>
                    <div class="form-group-half">
                        <p class="">หมู่ ( ถ้าไม่มีใส่เครื่องหมาย - )</p>
                        <input type="text" name="group" class="txt-form" placeholder="ระบุหมู่" required>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group-half">
                        <p class="">ถนน ( ถ้าไม่มีใส่เครื่องหมาย - )</p>
                        <input type="text" name="road" class="txt-form" placeholder="ระบุถนน" required >
                    </div>
                    <div class="form-group-half">
                        <p class="">ตำบล</p>
                        <input type="text" name="parish" class="txt-form" placeholder="ระบุตำบล" required>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group-half">
                        <p class="">อำเภอ</p>
                        <input type="text"name="district" class="txt-form" placeholder="ระบุอำเภอ" required>
                    </div>
                    <div class="form-group-half">
                        <p class="">จังหวัด</p>
                        <input type="text" name="province" class="txt-form" placeholder="ระบุจังหวัด" required>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group-half">
                        <p class="">รหัสไปรษณีย์ ( ตัวอย่าง : 61000 )</p>
                        <input type="text" name="postcode" class="txt-form" placeholder="ระบุรหัสไปรษณีย์" required>
                    </div>
                    <div class="form-group-half">
                        <p class="">เบอร์โทรศัพท์ ( ตัวอย่าง : 0817845214 )</p>
                        <input type="text" name="tel" class="txt-form" placeholder="ระบุเบอร์โทรศัพท์" required>
                    </div>
                </div>

                <br><br>

                <div class="row">
                    @foreach ($years as $year)
                        <p class="show-onet">คะแนนผลการทดสอบทางการศึกษาระดับชาติขั้นพื้นฐาน (O-NET) ปีการศึกษา {{ $year->year - 1 }}</p>
                        <div class="onet">
                            <p>คะแนนผลการทดสอบทางการศึกษาระดับชาติขั้นพื้นฐาน (O-NET)</p>
                            <p>ปีการศึกษา {{ $year->year - 1 }}</p>
                        </div>
                            
                    @endforeach
                    <div class="form-group-half">
                        <p class="">วิชาภาษาไทย</p>
                        <input type="text" name="thai_onet" class="txt-form" placeholder="ระบุคะแนน" required>
                    </div>
                    <div class="form-group-half">
                        <p class="">วิชาคณิตศาสตร์</p>
                        <input type="text" name="math_onet" class="txt-form" placeholder="ระบุคะแนน" required>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group-half">
                        <p class="">วิชาวิทยาศาสตร์</p>
                        <input type="text" name="science_onet" class="txt-form" placeholder="ระบุคะแนน" required>
                    </div>
                    <div class="form-group-half">
                        <p class="">วิชาภาษาอังกฤษ</p>
                        <input type="text" name="eng_onet" class="txt-form" placeholder="ระบุคะแนน" required>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group-half">
                        <p class="">รวม  4 วิชา</p>
                        <input type="text" name="sum_onet" class="txt-form" placeholder="ระบุคะแนน" required>
                    </div>
                </div>

                <br><br>

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

                <div class="row">
                    <div class="form-group">
                        <p>เอกสารและหลักฐานประกอบการรับสมัคร (ถ่ายภาพ หรือ อัพโหลดไฟล์ .jpg .png .pdf)</p>
                        <div class="form-upload">
                            {{-- upload --}}
                            <a class="btn-example" onclick="A()">ตัวอย่าง</a>
                            <label for="file-upload-1">อัพโหลดไฟล์
                                <input type="file" id="file-upload-1" name="file-upload-1" class="file-upload">
                            </label>
                            <p id="filename-1" class="filename">ภาพถ่ายชุดนักเรียน 1.5 นิ้วถ่ายแล้วไม่เกิน 6 เดือน</p>
                        </div>
                        <div class="form-upload">
                            {{-- upload --}}
                            <a class="btn-example" onclick="C()">ตัวอย่าง</a>
                            <label for="file-upload-3">อัพโหลดไฟล์
                                <input type="file" id="file-upload-3" name="file-upload-3" class="file-upload">
                            </label>
                            <p id="filename-3" class="filename">สำเนาทะเบียนบ้านนักเรียน</p>
                        </div>
                        <div class="form-upload">
                            {{-- upload --}}
                            <a class="btn-example" onclick="D()">ตัวอย่าง</a>
                            <label for="file-upload-4">อัพโหลดไฟล์
                                <input type="file" id="file-upload-4" name="file-upload-4" class="file-upload">
                            </label>
                            <p id="filename-4" class="filename">สำเนาบัตรประชาชนนักเรียน</p>
                        </div>
                        <div class="form-upload">
                            {{-- upload --}}
                            <a class="btn-example" onclick="B()" >ตัวอย่าง</a>
                            <label for="file-upload-2">อัพโหลดไฟล์
                                <input type="file" id="file-upload-2" name="file-upload-2" class="file-upload">
                            </label>
                            <p id="filename-2" class="filename">สำเนาใบเปลี่ยนชื่อ / เปลี่ยนนามสกุล (ถ้ามี)</p>
                        </div>
                        <div class="form-upload">
                            {{-- upload --}}
                            <a class="btn-example" onclick="F()">ตัวอย่าง</a>
                            <label for="file-upload-5">อัพโหลดไฟล์
                                <input type="file" id="file-upload-5" name="file-upload-5" class="file-upload">
                            </label>
                            <p id="filename-5" class="filename">คะแนน O-NET</p>
                        </div>
                    </div>
                </div>
                ข้าพเจ้าได้ทำการตรวจสอบและรับรองความถูกต้องของเอกสารหลักฐานแล้ว หากโรงเรียนตรวจพบว่าเอกสารหลักฐานที่ได้รับไม่ตรงหรือเป็นเท็จนั้นจะถือเป็นโมฆะและมีความผิดทางกฏหมาย
                <input class="btn-submit" type="submit" value="ลงทะเบียน">

            </div>
        </div>
    </form>

    <script src={{asset('js/uploadFile.js')}}></script>
    <script>
        
        $('#number_div').hide() ;
        var str_card_id = "";
        $('#card_id1').keyup(function() {
            if($('#card_id1').val() == ""){

                $('#card_id2').val("");
                $('#card_id3').val("");
                $('#card_id4').val("");
                $('#card_id5').val("");
                $('#card_id6').val("");
                $('#card_id7').val("");
                $('#card_id8').val("");
                $('#card_id9').val("");
                $('#card_id10').val("");
                $('#card_id11').val("");
                $('#card_id12').val("");
                $('#card_id13').val("");

                $('#card_id1').focus();   
            }
            else{
                $('#card_id2').focus();   
            }
        });
        $('#card_id2').keyup(function() {
            if($('#card_id2').val() == ""){


                $('#card_id3').val("");
                $('#card_id4').val("");
                $('#card_id5').val("");
                $('#card_id6').val("");
                $('#card_id7').val("");
                $('#card_id8').val("");
                $('#card_id9').val("");
                $('#card_id10').val("");
                $('#card_id11').val("");
                $('#card_id12').val("");
                $('#card_id13').val("");

                $('#card_id2').focus();   
            }
            else{
                $('#card_id3').focus();   
            }
        });
        $('#card_id3').keyup(function() {
            if($('#card_id3').val() == ""){


                $('#card_id4').val("");
                $('#card_id5').val("");
                $('#card_id6').val("");
                $('#card_id7').val("");
                $('#card_id8').val("");
                $('#card_id9').val("");
                $('#card_id10').val("");
                $('#card_id11').val("");
                $('#card_id12').val("");
                $('#card_id13').val("");

                $('#card_id3').focus();   
            }
            else{
                $('#card_id4').focus();   
            }
        });
        $('#card_id4').keyup(function() {
            if($('#card_id4').val() == ""){
                $('#card_id5').val("");
                $('#card_id6').val("");
                $('#card_id7').val("");
                $('#card_id8').val("");
                $('#card_id9').val("");
                $('#card_id10').val("");
                $('#card_id11').val("");
                $('#card_id12').val("");
                $('#card_id13').val("");


                $('#card_id4').focus();   
            }
            else{
                $('#card_id5').focus();   
            }
        });
        $('#card_id5').keyup(function() {
            if($('#card_id5').val() == ""){
                $('#card_id6').val("");
                $('#card_id7').val("");
                $('#card_id8').val("");
                $('#card_id9').val("");
                $('#card_id10').val("");
                $('#card_id11').val("");
                $('#card_id12').val("");
                $('#card_id13').val("");

                $('#card_id5').focus();   
            }
            else{
                $('#card_id6').focus();   
            }
        });
        $('#card_id6').keyup(function() {
            if($('#card_id6').val() == ""){
                $('#card_id7').val("");
                $('#card_id8').val("");
                $('#card_id9').val("");
                $('#card_id10').val("");
                $('#card_id11').val("");
                $('#card_id12').val("");
                $('#card_id13').val("");

                $('#card_id6').focus();   
            }
            else{
                $('#card_id7').focus();   
            }
        });
        $('#card_id7').keyup(function() {
            if($('#card_id7').val() == ""){
                $('#card_id8').val("");
                $('#card_id9').val("");
                $('#card_id10').val("");
                $('#card_id11').val("");
                $('#card_id12').val("");
                $('#card_id13').val("");

                $('#card_id7').focus();   
            }
            else{
                $('#card_id8').focus();   
            }
        });
        $('#card_id8').keyup(function() {
            if($('#card_id8').val() == ""){
                $('#card_id9').val("");
                $('#card_id10').val("");
                $('#card_id11').val("");
                $('#card_id12').val("");
                $('#card_id13').val("");

                $('#card_id8').focus();   
            }
            else{
                $('#card_id9').focus();   
            }
        });
        $('#card_id9').keyup(function() {
            if($('#card_id9').val() == ""){
                $('#card_id10').val("");
                $('#card_id11').val("");
                $('#card_id12').val("");
                $('#card_id13').val("");

                $('#card_id9').focus();   
            }
            else{
                $('#card_id10').focus();   
            }
        });
        $('#card_id10').keyup(function() {
            if($('#card_id10').val() == ""){
                $('#card_id11').val("");
                $('#card_id12').val("");
                $('#card_id13').val("");

                $('#card_id10').focus();   
            }
            else{
                $('#card_id11').focus();   
            }
        });
        $('#card_id11').keyup(function() {
            if($('#card_id11').val() == ""){
                $('#card_id12').val("");
                $('#card_id13').val("");

                $('#card_id11').focus();   
            }
            else{
                $('#card_id12').focus();   
            }
        });
        $('#card_id12').keyup(function() {
            if($('#card_id12').val() == ""){
                $('#card_id13').val("");

                $('#card_id12').focus();   
            }
            else{
                $('#card_id13').focus();   
            }
        });
        $('#card_id13').keyup(function() {
            if($('#card_id13').val() == ""){
                $('#card_id13').focus();   
            }
            else{
                str_card_id = $('#card_id1').val() + $('#card_id2').val() + $('#card_id3').val() + $('#card_id4').val() 
                + $('#card_id5').val() + $('#card_id6').val()+ $('#card_id7').val() + $('#card_id8').val()
                + $('#card_id9').val()+ $('#card_id10').val()+ $('#card_id11').val() + $('#card_id12').val()
                + $('#card_id13').val() ;

                $('#number_id').val(str_card_id)  ;
                $('#name_school_se').focus();   
               // $('#number_div').hide() ;
            }
        });
        $('#name_school_se').ready(function() {
            if( $('#name_school_se').val() == ""){
                $('#name_school').val('') ;
                $('#district_school').val('') ;
                $('#province_school').val('') ;
                $('#name_school').hide() ;
                $('#name_school_p').hide() ;
            }   
        });
        $('#name_school_se').change(function() {
            if( $('#name_school_se').val() == ""){
                $('#name_school').val('') ;
                $('#district_school').val('') ;
                $('#province_school').val('') ;
                $('#name_school').hide() ;
                $('#name_school_p').hide() ;
            }   
            else if( $('#name_school_se').val() == "อื่นๆ"){
                $('#name_school').val('') ;
                $('#district_school').val('') ;
                $('#province_school').val('') ;
                $('#name_school').show() ;
                $('#name_school_p').show() ;
            }
            else if( $('#name_school_se').val() == "u1"){
                var text = $('#name_school_se option:selected').html() ;
                $('#name_school').val(text) ;
                $('#district_school').val('เมือง') ;
                $('#province_school').val('อุทัยธานี') ;
                $('#name_school').hide() ;
                $('#name_school_p').hide() ;
            }
            else if( $('#name_school_se').val() == "u2"){
                var text = $('#name_school_se option:selected').html() ;
                $('#name_school').val(text) ;
                $('#district_school').val('หนองขาหย่าง') ;
                $('#province_school').val('อุทัยธานี') ;
                $('#name_school').hide() ;
                $('#name_school_p').hide() ;
            }
            else if( $('#name_school_se').val() == "u3"){
                var text = $('#name_school_se option:selected').html() ;
                $('#name_school').val(text) ;
                $('#district_school').val('หนองฉาง') ;
                $('#province_school').val('อุทัยธานี') ;
                $('#name_school').hide() ;
                $('#name_school_p').hide() ;
            }
            else if( $('#name_school_se').val() == "u4"){
                var text = $('#name_school_se option:selected').html() ;
                $('#name_school').val(text) ;
                $('#district_school').val('ทัพทัน') ;
                $('#province_school').val('อุทัยธานี') ;
                $('#name_school').hide() ;
                $('#name_school_p').hide() ;
            }
            else if( $('#name_school_se').val() == "u5"){
                var text = $('#name_school_se option:selected').html() ;
                $('#name_school').val(text) ;
                $('#district_school').val('สว่างอารมณ์') ;
                $('#province_school').val('อุทัยธานี') ;
                $('#name_school').hide() ;
                $('#name_school_p').hide() ;
            }
            else if( $('#name_school_se').val() == "u6"){
                var text = $('#name_school_se option:selected').html() ;
                $('#name_school').val(text) ;
                $('#district_school').val('ลานสัก') ;
                $('#province_school').val('อุทัยธานี') ;
                $('#name_school').hide() ;
                $('#name_school_p').hide() ;
            }
            else if( $('#name_school_se').val() == "n1"){
                var text = $('#name_school_se option:selected').html() ;
                $('#name_school').val(text) ;
                $('#district_school').val('โกรกพระ') ;
                $('#province_school').val('นครสวรรค์') ;
                $('#name_school').hide() ;
                $('#name_school_p').hide() ;
            }
            else if( $('#name_school_se').val() == "n2"){
                var text = $('#name_school_se option:selected').html() ;
                $('#name_school').val(text) ;
                $('#district_school').val('พยุหะคีรี') ;
                $('#province_school').val('นครสวรรค์') ;
                $('#name_school').hide() ;
                $('#name_school_p').hide() ;
            }
            else if( $('#name_school_se').val() == "n3"){
                var text = $('#name_school_se option:selected').html() ;
                $('#name_school').val(text) ;
                $('#district_school').val('ตาคลี') ;
                $('#province_school').val('นครสวรรค์') ;
                $('#name_school').hide() ;
                $('#name_school_p').hide() ;
            }
            else if( $('#name_school_se').val() == "c1"){
                var text = $('#name_school_se option:selected').html() ;
                $('#name_school').val(text) ;
                $('#district_school').val('เมือง') ;
                $('#province_school').val('ชัยนาท') ;
                $('#name_school').hide() ;
                $('#name_school_p').hide() ;
            }
            else if( $('#name_school_se').val() == "c2"){
                var text = $('#name_school_se option:selected').html() ;
                $('#name_school').val(text) ;
                $('#district_school').val('มโนรมย์') ;
                $('#province_school').val('ชัยนาท') ;
                $('#name_school').hide() ;
                $('#name_school_p').hide() ;
            }
            else if( $('#name_school_se').val() == "c3"){
                var text = $('#name_school_se option:selected').html() ;
                $('#name_school').val(text) ;
                $('#district_school').val('วัดสิงห์') ;
                $('#province_school').val('ชัยนาท') ;
                $('#name_school').hide() ;
                $('#name_school_p').hide() ;
            }
            else if( $('#name_school_se').val() == "c4"){
                var text = $('#name_school_se option:selected').html() ;
                $('#name_school').val(text) ;
                $('#district_school').val('หันคา') ;
                $('#province_school').val('ชัยนาท') ;
                $('#name_school').hide() ;
                $('#name_school_p').hide() ;
            }
        });
    </script>
    <script>
        function check() {
            var text = $('#filename-1').text();
            if(text == "ภาพถ่ายชุดนักเรียน 1.5 นิ้วถ่ายแล้วไม่เกิน 6 เดือน") {
                Swal.fire(
                    'โปรดอัพโหลดไฟล์ภาพถ่ายชุดนักเรียน',
                    'อัพโหลดรูปภาพหรือไฟล์ให้ถูกต้อง',
                    'error'
                )
                return false;
            }

    

            var text = $('#filename-3').text();
            if(text == "สำเนาทะเบียนบ้านนักเรียน") {
                Swal.fire(
                    'โปรดอัพโหลดไฟล์สำเนาทะเบียนบ้าน',
                    'อัพโหลดรูปภาพหรือไฟล์ให้ถูกต้อง',
                    'error'
                )
                return false;
            }

            var text = $('#filename-4').text();
            if(text == "สำเนาบัตรประชาชนนักเรียน") {
                Swal.fire(
                    'โปรดอัพโหลดไฟล์สำเนาบัตรประชาชน',
                    'อัพโหลดรูปภาพหรือไฟล์ให้ถูกต้อง',
                    'error'
                )
                return false;
            }

            var text = $('#filename-5').text();
            if(text == "คะแนน O-NET") {
                Swal.fire(
                    'โปรดอัพโหลดไฟล์ O-NET',
                    'อัพโหลดรูปภาพหรือไฟล์ให้ถูกต้อง',
                    'error'
                )
                return false;
            }

			return true;


        }
        function A() {
            Swal.fire({
                title: 'ตัวอย่างภาพถ่ายนักเรียน',
                text: 'ถ่ายรูป หรือ สแกน',
                imageUrl: '{{asset("img/a1.jpg")}}',
                imageWidth: 600,
                imageHeight: 300,
                imageAlt: 'ตัวอย่างภาพถ่ายนักเรียน',
            })
        }
  
        function C() {
            Swal.fire({
                title: 'ตัวอย่างสำเนาทะเบียนบ้าน',
                text: 'เป็นรูปถ่าย หรือ ภาพสแกน',
                imageUrl: '{{asset("img/a2.jpg")}}',
                imageWidth: 600,
                imageHeight: 300,
                imageAlt: 'ตัวอย่างสำเนาทะเบียนบ้าน',
            })
        }
        function D() {
            Swal.fire({
                title: 'ตัวอย่าสำเนาบัตรประชาชน',
                text: 'เป็นรูปถ่าย หรือ ภาพสแกน',
                imageUrl: '{{asset("img/a3.jpg")}}',
                imageWidth: 600,
                imageHeight: 300,
                imageAlt: 'ตัวอย่าสำเนาบัตรประชาชน',
            })
        }
        function B() {
            Swal.fire({
                title: 'ตัวอย่างสำเนาใบเปลี่ยนชื่อ / เปลี่ยนสกุล',
                text: 'เป็นรูปถ่าย หรือ ภาพสแกน',
                imageUrl: '{{asset("img/a4.jpg")}}',
                imageWidth: 600,
                imageHeight: 300,
                imageAlt: 'ตัวอย่างสำเนาใบเปลี่ยนชื่อ / เปลี่ยนสกุล',
            })
        }
        function F() {
            Swal.fire({
                title: 'ตัวอย่าง O-NET',
                text: 'เป็นรูปถ่าย หรือ รูปภาพ',
                imageUrl: '{{asset("img/a5.jpg")}}',
                imageWidth: 600,
                imageHeight: 300,
                imageAlt: 'ตัวอย่าง O-NET',
            })
        }
      
    </script>

@endsection
