<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Semua Arsip Penerimaan Laporan</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>  
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        ?>   

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center">
                        <h2>Sistem Informasi Penerimaan Laporan Pelanggaran Pemilu Batu Bara</h2>
                        <h4> Jalan Kurma Lingkungan VIII Perumahan Indah Permai Kelurahan Lima Puluh<br>
                              Kabupaten Batu Bara, Sumatera Utara, Kode Pos : 21655</h4>
                        <hr>
                        <h3>DATA SELURUH ARSIP PENERIMAAN LAPORAN</h3>
                        <table class="table table-bordered table-striped table-hover"> 
                        <tbody>
                                <thead>
								<tr>
									<th>No.</th><th>Jenis Pelanggaran</th><th>Nama Pelapor</th><th>Tempat kejadian</th><th>Tgl Masuk Laporan</th><th>Pihak Terlapor</th><th>Kronologi Kejadian</th><th>Bukti Dugaan Pelanggaran</th><th>Staff Penerima Laporan</th>
								</tr>
								</thead>
							<tbody>
                            <!--ambil data dari database, dan tampilkan kedalam tabel-->
                            <?php
                            //buat sql untuk tampilan data, gunakan kata kunci select
                            $sql = "SELECT * FROM arsip";
                            $query = mysqli_query($koneksi, $sql) or die("SQL Anda Salah");
                            //Baca hasil query dari databse, gunakan perulangan untuk 
                            //Menampilkan data lebh dari satu. disini akan digunakan
                            //while dan fungdi mysqli_fecth_array
                            //Membuat variabel untuk menampilkan nomor urut
                            $nomor = 0;
                            //Melakukan perulangan u/menampilkan data
                            while ($data = mysqli_fetch_array($query)) {
                                $nomor++; //Penambahan satu untuk nilai var nomor
                                ?>
                                <tr>
                                    <td><?= $nomor ?></td>
									<td><?= $data['jenis_pelanggaran'] ?></td>
                                    <td><?= $data['nama_pelapor'] ?></td>
                                    <td><?= $data['tempat_kejadian'] ?></td>
                                    <td><?= $data['tgl_masuk'] ?></td>
									<td><?= $data['pihak_terlapor'] ?></td>
									<td><?= $data['kronologi_kejadian'] ?></td>
									<td><?= $data['bukti_dugaan'] ?></td>
                                    <td><?= $data['staff_penerima'] ?></td>
                                </tr>
                                <!--Tutup Perulangan data-->
                            <?php } ?>
							</tbody>
                        </tbody>
                            <tfoot> 
                                <tr>
                                    <td colspan="10" class="text-right">
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