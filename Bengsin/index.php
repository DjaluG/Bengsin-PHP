<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bengsin</title>
</head>
<body>

    <div class="container mt-5">
      <h1>Form Pembelian Bengsin</h1>
      <form class="row g-3" method="post" action="">
        <div class="col-md-6">
          <label for="firstName" class="form-label">Liter</label>
          <input type="number" name="liter" class="form-control" required>
        </div>
        <div class="row-md-6 mb-2">
          <label for="lastName" class="form-label">Last Name</label>
          <select name="jenis" class="form-select" aria-label="Default select example" required>
                        <option value="Super">Shell Super</option>
                        <option value="Vpower">Shell V-Power</option>
                        <option value="Vdiesel">Shell V-Power-Diesel</option>
                        <option value="Vnitro">Shell V-Power-Nitro</option>
           </select>
        </div>
        <input type="submit" class="btn btn-success col-1 mb-5" value="Beli" name="Kirim"></input>
      </form>
    </div> 

<?php
include 'logic.php';
$proses = new Beli();
$proses->setHarga(15420, 16130, 18310, 16510);
if (isset($_POST['Kirim'])) {
    $proses->jumlah = $_POST['liter'];
    $proses->jenis = $_POST['jenis'];

    $proses->hargaBeli();
    $proses->cetakPembelian();
}
?>
  

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
</body>
</html>