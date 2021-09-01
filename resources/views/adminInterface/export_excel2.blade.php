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
<script>
    window.onload = function() {
     if(!window.location.hash) {
         window.location = window.location + '#loaded';
         window.location.reload();
     }
 }
</script>
<body>
    
    <div class="print">
        <button class="btn-print" onclick="exportTableToExcel('tblData')">คลิกที่นี่! ดาวน์โหลดไฟล์ Excel</button>
        <table id="tblData">
            <tr>
                <th>รหัสประจำตัวสมัคร</th>
                <th>รหัสบัตรประชาชน</th>
                <th>คำนำหน้า</th>
                <th>ชื่อ</th>
                <th>สกุล</th>
                <th>โรงเรียนเดิม</th>
                <th>อำเภอโรงเรียนเดิม</th>
                <th>จังหวัดโรงเรียนเดิม</th>
                <th>บ้านเลขที่</th>
                <th>หมู่</th>
                <th>ถนน</th>
                <th>ตำบล</th>
                <th>อำเภอ</th>
                <th>จังหวัด</th>
                <th>รหัสไปรษณีย์</th>
                <th>เบอร์โทร</th>
                <th>แผนการเรียนลำดับ1</th>
                <th>แผนการเรียนลำดับ2</th>
                <th>แผนการเรียนลำดับ3</th>
                <th>ความสามารถพิเศษ</th>
                <th>o-net ภาษาไทย</th>
                <th>o-net คณิตศาสตร์</th>
                <th>o-net วิทยาศาสตร์</th>
                <th>o-net ภาษาอังกฤษ</th>
                <th>o-net คะแนนรวม</th>
            </tr>
            @foreach ($students as $student)
            <tr>
                <td>{{ $student->student_id }}</td>
                <td>{{ $student->number_id }}</td>
                <td>{{ $student->tname }}</td>
                <td>{{ $student->fname }}</td>
                <td>{{ $student->lname }}</td>
                <td>{{ $student->name_school }}</td>
                <td>{{ $student->district_school }}</td>
                <td>{{ $student->province_school }}</td>
                <td>{{ $student->home_id }}</td>
                <td>{{ $student->group }}</td>
                <td>{{ $student->road }}</td>
                <td>{{ $student->parish }}</td>
                <td>{{ $student->district }}</td>
                <td>{{ $student->province }}</td>
                <td>{{ $student->postcode }}</td>
                <td>{{ $student->tel }}</td>
                <td>{{ $student->rank_edu1 }}</td>
                <td>{{ $student->rank_edu2 }}</td>
                <td>{{ $student->rank_edu3 }}</td>
                <td>{{ $student->extra }}</td>
                <td>{{ $student->thai_onet }}</td>
                <td>{{ $student->math_onet }}</td>
                <td>{{ $student->science_onet }}</td>
                <td>{{ $student->eng_onet }}</td>
                <td>{{ $student->sum_onet }}</td>
            </tr>
            @endforeach
        </table>
        </div>
    </div>
    <script>
        function exportTableToExcel(tableID, filename = ''){
    var downloadLink;
    var dataType = 'application/vnd.ms-excel';
    var tableSelect = document.getElementById(tableID);
    var tableHTML = tableSelect.outerHTML.replace(/ /g, '%20');
    
    // Specify file name
    filename = filename?filename+'.xls':'excel_dataM4.xls';
    
    // Create download link element
    downloadLink = document.createElement("a");
    
    document.body.appendChild(downloadLink);
    
    if(navigator.msSaveOrOpenBlob){
        var blob = new Blob(['\ufeff', tableHTML], {
            type: dataType
        });
        navigator.msSaveOrOpenBlob( blob, filename);
    }else{
        // Create a link to the file
        downloadLink.href = 'data:' + dataType + ', ' + tableHTML;
    
        // Setting the file name
        downloadLink.download = filename;
        
        //triggering the function
        downloadLink.click();
    }
}
    </script>

</body>
</html>