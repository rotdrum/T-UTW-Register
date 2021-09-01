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
    
    <script language="javascript">
	    var today = new Date();
        var dd = String(today.getDate());
        var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
        var yyyy = today.getFullYear();

        if(mm == "01"){
            mm = "มกราคม" ;
        }
        else if(mm == "02"){
            mm = "กุมภาพันธ์" ;
        }
        else if(mm == "03"){
            mm = "มีนาคม" ;
        }
        else if(mm == "04"){
            mm = "เมษายน" ;
        }
        else if(mm == "05"){
            mm = "พฤษภาคม" ;
        }
        else if(mm == "06"){
            mm = "มิถุนายน" ;
        }
        else if(mm == "07"){
            mm = "กรกฎาคม" ;
        }
        else if(mm == "08"){
            mm = "สิงหาคม" ;
        }
        else if(mm == "09"){
            mm = "กันยายน" ;
        }
        else if(mm == "10"){
            mm = "ตุลาคม" ;
        }
        else if(mm == "11"){
            mm = "พฤศจิกายน" ;
        }
        else if(mm == "12"){
            mm = "ธันวาคม" ;
        } 

    </script>
    
    @foreach ($years as $year)
        @php $y = $year->year ; @endphp
    @endforeach
    <div class="print">
        <br>
        <br>


        <button class="btn-print" onclick="printPage()" id="prt">กดปุ่มนี้ เพื่อพิมพ์เอกสาร</button>
        @foreach ($students as $student)
        <div class="print-card" id="printableArea">
            <div class="p-evidence">
                หมายเหตุ : นักเรียนเก็บไว้เป็นหลักฐาน 
                <br>และนำมาแสดงในวันสอบ/รายงานตัว/มอบตัวด้วย
            </div>
            <div class="p-id">
                เลขประจำตัวผู้สมัคร {{ $student->student_id }}
            </div>
            <div class="p-personal">
                <img src="{{asset('storage/')}}/../../storage/app/public/{{$y}}/{{ $student->student_id }}/{{ $student->pic_file }}"  height="180"> 
            </div>
            <div class="p-header">
                <div class="logo">
                    <img src="http://www.utw.ac.th/wp-content/uploads/2018/04/_%E0%B8%95%E0%B8%A3%E0%B8%B2-1-e1523680375187.png">
                </div>
                <p>ใบสมัครเข้าเรียนชั้นมัธยมศึกษาปีที่ 4</p>
                <p>โรงเรียนอุทัยวิทยาคม ปีการศึกษา  {{ $y }}</p>
                <p>โรงเรียนเดิม / โรงเรียนอื่น</p>
                <p>วันที่ <script>document.write(dd);</script> เดือน <script>document.write(mm);</script> พ.ศ. {{ $y }}</p>
            </div>
            <br><br>
            <div class="p-content">
                <b>ข้าพเจ้าชื่อ</b><span> {{ $student->tname }}{{ $student->fname }} {{ $student->lname }}</span>
            </div>
            <div class="p-content">
                <b>เลขประจำตัวประชาชน  </b>
                <label>{{ $student->number_id[0] }}</label>
                <label>{{ $student->number_id[1] }}</label>
                <label>{{ $student->number_id[2] }}</label>
                <label>{{ $student->number_id[3] }}</label>
                <label>{{ $student->number_id[4] }}</label>
                <label>{{ $student->number_id[5] }}</label>
                <label>{{ $student->number_id[6] }}</label>
                <label>{{ $student->number_id[7] }}</label>
                <label>{{ $student->number_id[8] }}</label>
                <label>{{ $student->number_id[9] }}</label>
                @if(empty($student->number_id[10]))

                @else
                    <label>{{ $student->number_id[10] }}</label>
                @endif
                @if(empty($student->number_id[11]))

                @else
                    <label>{{ $student->number_id[11] }}</label>
                @endif
                @if(empty($student->number_id[12]))

                @else
                    <label>{{ $student->number_id[12] }}</label>
                @endif
            </div>
            <div class="p-content">
                <b>กำลังศึกษาชั้น ม.3 </b><span>{{ $student->name_school }}</span>
                <b>อำเภอ </b><span>{{ $student->district_school }}</span>
                <b>จังหวัด </b><span>{{ $student->province_school }}</span>
            </div>
            <br>
            <div class="p-content">
                <b>ปัจจุบันอยู่บ้านเลขที่ </b><span> {{ $student->home_id }}</span>
                <b>หมู่</b><span> {{ $student->group }}</span>
                <b>ถนน</b><span> {{ $student->road }}</span>
                <b>ตำบล</b><span> {{ $student->parish }}</span>
            </div>
            <div class="p-content">
                <b>อำเภอ</b><span> {{ $student->district }}</span>
                <b>จังหวัด</b><span> {{ $student->province }}</span>
                <b>รหัสไปรษณีย์</b><span> {{ $student->postcode }}</span>
                <b>โทรศัพท์</b><span> {{ $student->tel }}</span>
            </div>
            <div class="p-content">
                <b>แผนการเรียน</b><span>  ลำดับที่ 1: {{ $student->rank_edu1 }} ลำดับที่ 2: {{ $student->rank_edu2 }} ลำดับที่ 3: {{ $student->rank_edu3 }}</span>
            </div>
            <div class="p-content">
                <b>ความสามารถพิเศษ</b><span>  {{ $student->extra }}</span>
            </div>
            <div class="p-content" style="margin: 30px;">
                มีความประสงค์จะสมัครสอบคัดเลือกเข้าเรียนประเภทในเขตพื้นที่บริการ/ทั่วไปชั้นมัธยมศึกษาปีที่ 4 ปีการศึกษา {{ $y }}
            </div>
            @endforeach




<br>



            <div>...........................................................................................................................................................................................................................................................</div>
            <br><br>
            {{-- ------------------------------------------------------------------------------------------------------ --}}














            @foreach ($students as $student)
            <div class="p-header">
                <br>
                <h2>ตารางสอบชั้นมัธยมศึกษาปีที่ 4 ปีการศึกษา  {{ $y }}</h2>
                <h2>ประเภทห้องเรียนปกติ</h2>
                <h3>วันเสาร์ที่ 7 มิถุนายน พ.ศ. 2563 สนามสอบ โรงเรียนอุทัยวิทยาคม</h3>


            </div>
            <br><br>
            <div class="p-header">
            <table border="1" >
                <tr class="text-center"  style="height: 50px;">
                    <th style="width: 300px;"><h3>เวลา</h3></th>
                    <th style="width: 450px;"><h3>วิชา</h3></th>
                </tr>
                <tr class="text-center">
                    <td style="width: 300px;"><h3>09.30 - 10.30 น.</h3></td>
                    <td style="width: 450px;"><h3>คณิตศาสตร์ / ภาษาไทย</h3></td>
                </tr>
                <tr class="text-center">
                    <td style="width: 300px;"><h3>10.30 - 12.00 น.</h3></td>
                    <td style="width: 450px;"><h3>วิทยาศาสตร์ / ภาษาอังกฤษ</h3></td>
                </tr>
            </table>
            </div>
            <div class="p-header">
                <br/>
                <br/>

            </div>
            <div class="p-content">

                <h4>                   
                    - นักเรียนทุกคน ต้องสวมหน้ากากอนามัยทางการแพทย์ มาในวันสอบคัดเลือกเข้าศึกษา <br/>
                    เพื่อเป็นการร่วมป้องกันโรคติดเชื้อไวรัสโคโรน่า 2019 (COVID 19) สอดคล้องกับแนวปฏิบัติ
                    ของกรมควบคุมโรคกระทรวงสาธารณสุขและปฏิบัติตามแนวทางการรับนักเรียน <br/>
                    ปีการศึกษา  {{ $y }}
                </h4>
                <br/>
            </div>
        </div>
        @endforeach
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