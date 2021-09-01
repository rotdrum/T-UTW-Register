@extends('layouts.app')

@section('content')
    <form class="vue-register" enctype="multipart/form-data">
        <div class="vue-container">
            <div class="vue-card">
                <h2>ระบบสมัครสอบมัธยมต้น</h2>
                
                <div class="row">
                    <div class="form-group">
                        <p class="">คำนำหน้า</p>
                        <select class="">
                            <option value="">--- เลือก ---</option>
                            <option value="">เด็กชาย</option>
                            <option value="">เด็กหญิง</option>
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group-half">
                        <p class="">ชื่อ</p>
                        <input type="text" class="txt-form" placeholder="ระบุชื่อ (ไม่ต้องระบุคำนำหน้า)">
                    </div>
                    <div class="form-group-half">
                        <p>นามสกุล</p>
                        <input type="text" class="txt-form" placeholder="ระบุนามสกุล">
                    </div>
                </div>

                <div class="row">
                    <div class="form-group">
                        <p class="">เลขประจำตัวบัตรประชาชน</p>
                        <input type="text" class="txt-form" placeholder="ระบุเลขบัตรประชาชน">
                    </div>
                </div>

                <br><br>

                <div class="row">
                    <div class="form-group">
                        <p class="">กำลังศึกษาชั้น ป.6 อยู่โรงเรียน</p>
                        <input type="text" class="txt-form" placeholder="ระบุชื่อโรงเรียน">
                    </div>
                </div>

                <div class="row">
                    <div class="form-group-half">
                        <p class="">อำเภอ (โรงเรียน)</p>
                        <input type="text" class="txt-form" placeholder="ระบุชื่อโรงเรียน">
                    </div>
                    <div class="form-group-half">
                        <p class="">จังหวัด (โรงเรียน)</p>
                        <input type="text" class="txt-form" placeholder="ระบุชื่อโรงเรียน">
                    </div>
                </div>

                <br><br>

                <div class="row">
                    <div class="form-group-half">
                        <p class="">ปัจจุบันอยู่บ้านเลขที่</p>
                        <input type="text" class="txt-form" placeholder="ระบุบ้านเลขที่">
                    </div>
                    <div class="form-group-half">
                        <p class="">หมู่</p>
                        <input type="text" class="txt-form" placeholder="ระบุหมู่">
                    </div>
                </div>

                <div class="row">
                    <div class="form-group-half">
                        <p class="">ถนน</p>
                        <input type="text" class="txt-form" placeholder="ระบุถนน">
                    </div>
                    <div class="form-group-half">
                        <p class="">ตำบล</p>
                        <input type="text" class="txt-form" placeholder="ระบุตำบล">
                    </div>
                </div>

                <div class="row">
                    <div class="form-group-half">
                        <p class="">อำเภอ</p>
                        <input type="text" class="txt-form" placeholder="ระบุอำเภอ">
                    </div>
                    <div class="form-group-half">
                        <p class="">จังหวัด</p>
                        <input type="text" class="txt-form" placeholder="ระบุจังหวัด">
                    </div>
                </div>

                <div class="row">
                    <div class="form-group-half">
                        <p class="">รหัสไปรษณีย์</p>
                        <input type="text" class="txt-form" placeholder="ระบุรหัสไปรษณีย์">
                    </div>
                    <div class="form-group-half">
                        <p class="">เบอร์โทรศัพท์ที่สามารถติดต่อได้</p>
                        <input type="text" class="txt-form" placeholder="ระบุเบอร์โทรศัพท์">
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
                        <p>อัพโหลดไฟล์หลักฐาน</p>
                        <div class="form-upload">
                            {{-- upload --}}
                            <label for="file-upload-1">อัพโหลดไฟล์
                                <input type="file" id="file-upload-1" class="file-upload">
                            </label>
                            <p id="filename-1" class="filename">รูปนักเรียน (รูปถ่ายหน้าตรง)</p>
                        </div>
                        <div class="form-upload">
                            {{-- upload --}}
                            <label for="file-upload-2">อัพโหลดไฟล์
                                <input type="file" id="file-upload-2" class="file-upload">
                            </label>
                            <p id="filename-2" class="filename">ปพ.1 หรือ ปพ.7 (รูปภาพ หรือ PDF)</p>
                        </div>
                        <div class="form-upload">
                            {{-- upload --}}
                            <label for="file-upload-3">อัพโหลดไฟล์
                                <input type="file" id="file-upload-3" class="file-upload">
                            </label>
                            <p id="filename-3" class="filename">ทะเบียนบ้านนักเรียน (รูปภาพ หรือ PDF)</p>
                        </div>
                        <div class="form-upload">
                            {{-- upload --}}
                            <label for="file-upload-4">อัพโหลดไฟล์
                                <input type="file" id="file-upload-4" class="file-upload">
                            </label>
                            <p id="filename-4" class="filename">บัตรประชาชน (รูปภาพ หรือ PDF)</p>
                        </div>
                    </div>
                </div>

                ข้าพเจ้าขอรับรองว่า ข้อความข้างต้นเป็นความจริงทุกประการ หากปรากฎเป็นความเท็จข้าพเจ้าขอรับผิดตามกฏหมาย โดยให้ถือคำให้การนี้เป็นหลักฐานในชั้นศาลได้

                <input class="btn-submit" type="submit" value="ลงทะเบียน">

            </div>
        </div>
    </form>

    <script src={{asset('js/uploadFile.js')}}></script>

@endsection
