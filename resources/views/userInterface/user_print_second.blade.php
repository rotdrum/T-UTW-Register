<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'UTW') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    {{-- Font Awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">

    {{-- Sweet Alert 2 --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

    {{-- Logo Browser --}}
    <link rel="shortcut icon" type="image/x-icon" href="http://www.utw.ac.th/wp-content/uploads/2018/04/_%E0%B8%95%E0%B8%A3%E0%B8%B2-1-e1523680375187.png" />
</head>

<body>
    
    <div class="print">
        <button class="btn-print" onclick="printPage()" id="prt">กดปุ่มนี้ เพื่อพิมพ์เอกสาร</button>

        <div class="print-card" id="printableArea">
            <div class="p-evidence">
                ส่วนที่ 1 : โรงเรียนเก็บไว้เป็นหลักฐาน
            </div>
            <div class="p-id">
                เลขประจำตัวสอบ 00000
            </div>
            <div class="p-personal">
                ติดรูปถ่ายขนาด 1.5 นิ้ว
            </div>
            <div class="p-header">
                <div class="logo">
                    <img src="http://www.utw.ac.th/wp-content/uploads/2018/04/_%E0%B8%95%E0%B8%A3%E0%B8%B2-1-e1523680375187.png">
                </div>
                <p>ใบสมัครเข้าเรียนชั้นมัธยมศึกษาปีที่ 1</p>
                <p>โรงเรียนอุทัยวิทยาคม ปีการศึกษา 2563</p>
                <p>ในเขตพื้นที่บริการ / ทั่วไป</p>
                <p>วันที่ 1 เดือน มีนาคม พ.ศ. 2563</p>
            </div>
            <br><br>
            <div class="p-content">
                <b>ข้าพเจ้าชื่อ</b><span> เด็กชายอนันต์ ใจดี</span>
                <b>เลขประจำตัวประชาชน</b>
                <label>1</label>
                <label>8</label>
                <label>0</label>
                <label>0</label>
                <label>0</label>
                <label>0</label>
                <label>0</label>
                <label>0</label>
                <label>0</label>
                <label>0</label>
                <label>0</label>
                <label>0</label>
                <label>0</label>
            </div>
            <div class="p-content">
                <b>กำลังศึกษาชั้น ป.6 </b><span>โรงเรียนอุทัยวิทยาคม</span>
                <b>อำเภอ </b><span>อุทัย</span>
                <b>จังหวัด </b><span>อุทัย</span>
            </div>
            <br>
            <div class="p-content">
                <b>ปัจจุบันอยู่บ้านเลขที่ </b><span> โรงเรียนอุทัยวิทยาคม</span>
                <b>หมู่</b><span> -</span>
                <b>ถนน</b><span> พัฒนาการคูขวาง</span>
                <b>ตำบล</b><span> ในเมือง</span>
            </div>
            <div class="p-content">
                <b>อำเภอ</b><span> เมือง</span>
                <b>จังหวัด</b><span> นครศรีธรรมราช</span>
                <b>รหัสไปรษณีย์</b><span> 80000</span>
                <b>โทรศัพท์</b><span> 012-345-6789</span>
            </div>
            <div class="p-content" style="margin: 30px;">
                มีความประสงค์จะสมัครสอบคัดเลือกเข้าเรียนประเภทในเขตพื้นที่บริการ/ทั่วไปชั้นมัธยมศึกษาปีที่ 1 ปีการศึกษา 2563
            </div>
            <div class="p-content">
                <b>มีความสามารถพิเศษ</b><span> ร้องเพลง</span>
                <b>แผนการเรียน</b><span> วิทย์-คณิต</span>
            </div>









            <br><br><br>
            <div>...........................................................................................................................................................................................................................................................</div>
            <br><br>
            {{-- ------------------------------------------------------------------------------------------------------ --}}















            <div class="p-evidence evidence-page2">
                ส่วนที่ 2 : นักเรียนเก็บไว้เป็นหลักฐาน 
                <br>และนำมาแสดงในวันสอบ/รายงานตัว/มอบตัวด้วย
            </div>
            <div class="p-id id-page2">
                เลขประจำตัวสอบ 00000
            </div>
            <div class="p-personal personal-page2">
                ติดรูปถ่ายขนาด 1.5 นิ้ว
            </div>
            <div class="p-header">
                <div class="logo">
                    <img src="http://www.utw.ac.th/wp-content/uploads/2018/04/_%E0%B8%95%E0%B8%A3%E0%B8%B2-1-e1523680375187.png">
                </div>
                <p>ใบสมัครเข้าเรียนชั้นมัธยมศึกษาปีที่ 1</p>
                <p>โรงเรียนอุทัยวิทยาคม ปีการศึกษา 2563</p>
                <p>ในเขตพื้นที่บริการ / ทั่วไป</p>
                <p>วันที่ 1 เดือน มีนาคม พ.ศ. 2563</p>
            </div>
            <br><br>
            <div class="p-content">
                <b>ข้าพเจ้าชื่อ</b><span> เด็กชายอนันต์ ใจดี</span>
                <b>เลขประจำตัวประชาชน</b>
                <label>1</label>
                <label>8</label>
                <label>0</label>
                <label>0</label>
                <label>0</label>
                <label>0</label>
                <label>0</label>
                <label>0</label>
                <label>0</label>
                <label>0</label>
                <label>0</label>
                <label>0</label>
                <label>0</label>
            </div>
            <div class="p-content">
                <b>กำลังศึกษาชั้น ป.6 </b><span>โรงเรียนอุทัยวิทยาคม</span>
                <b>อำเภอ </b><span>อุทัย</span>
                <b>จังหวัด </b><span>อุทัย</span>
            </div>
            <br>
            <div class="p-content">
                <b>ปัจจุบันอยู่บ้านเลขที่ </b><span> โรงเรียนอุทัยวิทยาคม</span>
                <b>หมู่</b><span> -</span>
                <b>ถนน</b><span> พัฒนาการคูขวาง</span>
                <b>ตำบล</b><span> ในเมือง</span>
            </div>
            <div class="p-content">
                <b>อำเภอ</b><span> เมือง</span>
                <b>จังหวัด</b><span> นครศรีธรรมราช</span>
                <b>รหัสไปรษณีย์</b><span> 80000</span>
                <b>โทรศัพท์</b><span> 012-345-6789</span>
            </div>
            <div class="p-content" style="margin: 30px;">
                มีความประสงค์จะสมัครสอบคัดเลือกเข้าเรียนประเภทในเขตพื้นที่บริการ/ทั่วไปชั้นมัธยมศึกษาปีที่ 1 ปีการศึกษา 2563
            </div>
            <div class="p-content">
                <b>มีความสามารถพิเศษ</b><span> ร้องเพลง</span>
                <b>แผนการเรียน</b><span> วิทย์-คณิต</span>
            </div>

        </div>

    </div>

    <script language="javascript">
		function printPage() {
			document.getElementById("prt").style.display='none';
			window.print();
			document.getElementById("prt").style.display='block';
		}
	</script>

</body>
</html>