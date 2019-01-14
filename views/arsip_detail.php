<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Informasi Detail Arsip Penerimaan Laporan</h3>
                </div>
                <div class="panel-body">
                    <!--Menampilkan data detail arsip-->
                    <?php
                    $sql = "SELECT *FROM arsip WHERE id ='" . $_GET ['id'] . "'";
                    //proses query ke database
                    $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
                    //Merubaha data hasil query kedalam bentuk array
                    $data = mysqli_fetch_array($query);
                    ?>   

                    <!--dalam tabel--->
                    <table class="table table-bordered table-striped table-hover"> 
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
                    </table>
				
                </div> <!--end panel-body-->
                <!--panel footer--> 
                <div class="panel-footer">
                    <a href="?page=arsip&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali ke Data Arsip Penerimaan Laporan</a>

                </div>
                <!--end panel footer-->
            </div>

        </div>
    </div>
</div>

