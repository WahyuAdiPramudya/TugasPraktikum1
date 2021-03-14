<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body>
    <div class="row">
        <div class="col-2"></div>
        <div class="col-6">
            <div class="container">
                <h2>Form Nilai Mahasiswa</h2>
                <form action="tabledata.php" method="action">
                    <div class="row">
                        <div class="col-md-10">
                            <label for="validationCustom01" class="form-label">NIM</label>
                            <input type="text" class="form-control" id="validationCustom01" placeholder="Masukan NIM" name="nim" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-10">
                            <label for="validationCustom01" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" id="validationCustom01" placeholder="Masukan Nama Lengkap" name="nama_lengkap" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-10">
                            <label for="validationCustom04" class="form-label">Mata Kuliah</label>
                            <select class="form-select" id="validationCustom04" name="matkul" required>
                                <option selected disabled value="">Pilih Matakuliah</option>
                                <option value="Pemrograman WEB2">Pemrograman WEB2</option>
                                <option value="Bahasa Inggris">Bahasa Inggris</option>
                                <option value="Statistika dan Probabilitas">Statistika dan Probabilitas</option>
                                <option value="Basis Data">Basis Data</option>
                                <option value="PPKN">PPKN</option>
                                <option value="Keterampilan Komunikasi">Keterampilan Komunikasi</option>
                                <option value="UI/UX">UI/UX</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-10">
                            <label for="validationCustomUsername" class="form-label">Nilai UTS </label>
                            <input type="text" class="form-control" id="validationCustomUsername" name="uts" placeholder="Masukan Nilai UTS" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-10">
                            <label for="validationCustom03" class="form-label">Nilai UAS</label>
                            <input type="text" class="form-control" id="validationCustom03" name="uas" placeholder="Masukan Nilai UAS" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-10">
                            <label for="validationCustom05" class="form-label">Nilai Praktik</label>
                            <input type="text" class="form-control" name="praktik" id="validationCustom05" placeholder="Masukan Nilai Praktik" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <button class="btn btn-success" type="submit">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-2">
        </div>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

</html>