$(document).ready(function() {
    // รูปนักเรียน
    $('#file-upload-1').change(function() {
        var filepath = this.value;
        var m = filepath.match(/([^\/\\]+)$/);
        var filename = m[1];
        $('#filename-1').html(filename);
    });

    $('#file-upload-2').change(function() {
        var filepath = this.value;
        var m = filepath.match(/([^\/\\]+)$/);
        var filename = m[1];
        $('#filename-2').html(filename);
    });

    $('#file-upload-3').change(function() {
        var filepath = this.value;
        var m = filepath.match(/([^\/\\]+)$/);
        var filename = m[1];
        $('#filename-3').html(filename);
    });

    $('#file-upload-4').change(function() {
        var filepath = this.value;
        var m = filepath.match(/([^\/\\]+)$/);
        var filename = m[1];
        $('#filename-4').html(filename);
    });

    $('#file-upload-5').change(function() {
        var filepath = this.value;
        var m = filepath.match(/([^\/\\]+)$/);
        var filename = m[1];
        $('#filename-5').html(filename);
    });
});