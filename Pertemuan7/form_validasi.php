<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form Input dengan Validasi</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <h1>Form Input dengan Validasi</h1>
    <form id="myForm">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama">
        <span id="nama-error" style="color: red;"></span>
        <br>
        pertemuan7_soal7.2
        <label for="email">Email:</label>
        <input type="text" name="email" id="email">
        <span id="email-error" style="color: red;"></span>
        <br>

        <input type="submit" value="Submit">
    </form>

    <div id="hasil">

    </div>

    <script>
        $(document).ready(function () {
            $("#myForm").submit(function (event) {

                event.preventDefault();

                var formdata = $("#myForm").serialize();

                
                $.ajax({
                    url: "proses_validasi.php",
                    type: "POST",
                    data: formdata,
                    success: function (response) {
                        $("#hasil").html(response);
                    }
                });
            });
        });
    </script>

</body>
</html>