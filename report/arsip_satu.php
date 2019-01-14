<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Arsip Penerimaan Laporan</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>  
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        $sql = "SELECT * FROM arsip WHERE id='" . $_GET ['id'] . "'";
        //proses query ke database
        $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
        //Merubaha data hasil query kedalam bentuk array
        $data = mysqli_fetch_array($query);
        ?>   

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center">
                        <h2>Sistem Informasi Penerimaan Laporan Pelanggaran Pemilu Batu Bara </h2>
                        <h4> Jalan Kurma Lingkungan VIII Perumahan Indah Permai Kelurahan Lima Puluh<br>
                              Kabupaten Batu Bara, Sumatera Utara, Kode Pos : 21655</h4>
                        <hr>
                        <h3>DATA ARSIP PENERIMAAN LAPORAN</h3>
                        <table class="table table-bordered table-striped table-hover"> 
                            <tbody>
                                <tr>
                                    <td width="200">Jenis Pelanggaran</td> <td><?= $data['jenis_pelanggaran'] ?></td>
                                </tr>
                                <tr>
                                    <td>Nama Pelapor</td> <td><?= $data['nama_pelapor'] ?></td>
                                </tr>
								<tr>
                                    <td>Tempat Kejadian</td> <td><?= $data['tempat_kejadian'] ?></td>
                                </tr>
								<tr>
                                    <td>Tanggal Masuk Laporan</td> <td><?= $data['tgl_masuk'] ?></td>
                                </tr>
								<tr>
                                    <td>Pihak Terlapor</td> <td><?= $data['pihak_terlapor'] ?></td>
                                </tr>
                                <tr>
                                    <td>Kronologi Kejadian</td> <td><?= $data['kronologi_kejadian'] ?></td>
                                </tr>
                                <tr>
                                    <td>Bukti Dugaan Pelanggaran</td> <td><?= $data['bukti_dugaan'] ?></td>
                                </tr>
                                <tr>
                                    <td>Staff Penerima Laporan</td> <td><?= $data['staff_penerima'] ?></td>
                                </tr>
                            </tbody>
                            <tfoot> 
                                <tr>
                                    <td colspan="2" class="text-right">
                                      Batu Bara  <?= date("d-m-Y") ?>
                                        <br><br><br><br>
                                        <u>Ketua BAWASLU Batu Bara, S.H<strong></u><br>
                                        NIP.102871291416712
									</td>
								</tr>
							</tfoot> 
                        </table>
                    </div>
                </div>
            </div>
    </body>
</html>