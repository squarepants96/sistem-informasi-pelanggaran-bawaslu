<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Tambah Data Arsip Laporan Pelanggaran</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="jenis_pelanggaran" class="col-sm-3 control-label">Jenis Pelanggaran</label>
                               <div class="col-sm-2 col-xs-9">
                                <select name="jenis_pelanggaran" class="form-control">
                                    <option value="Administrasi">Administrasi</option>
                                    <option value="Pidana">Pidana</option>
                                    <option value="Kode Etik">Kode Etik</option>
                                </select>
                            </div>
                        </div>
						  <div class="form-group">
                            <label for="jenis_pelanggaran" class="col-sm-3 control-label">Nama Pelapor</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama_pelapor" class="form-control" id="inputEmail3" placeholder="Inputkan Nama Pelapor" required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="tempat_kejadian" class="col-sm-3 control-label">Tempat Kejadian</label>
                            <div class="col-sm-9">
                                <input type="text" name="tempat_kejadian" class="form-control" id="inputEmail3" placeholder="Inputkan Tempat Kejadian" required>
                            </div>
                        </div>
                        <div class="form-group">
                             <label for="tgl_masuk" class="col-sm-3 control-label">Tanggal Masuk Laporan</label>
                            <div class="col-sm-3">
                                <input type="date" name="tgl_masuk" class="form-control" id="inputEmail3" placeholder="Inputkan Tanggal Masuk" required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="pihak_terlapor" class="col-sm-3 control-label">Pihak Terlapor</label>
                            <div class="col-sm-9">
                                <input type="text" name="pihak_terlapor" class="form-control" id="inputEmail3" placeholder="Inputkan Pihak Terlapor " required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="kronologi_kejadian" class="col-sm-3 control-label">Kronologi Kejadian</label>
                            <div class="col-sm-9">
                                <input type="text" name="kronologi_kejadian"class="form-control" id="inputEmail3" placeholder="Inputkan Kronologi Kejadian" required>
                            </div>
                        </div>

                         <div class="form-group">
                            <label for="bukti_dugaan" class="col-sm-3 control-label">Bukti Dugaan Pelanggaran</label>
                            <div class="col-sm-9">
                                <input type="text" name="bukti_dugaan"class="form-control" id="inputEmail3" placeholder="Inputkan Bukti dugaan" required>
                            </div>
                        </div>

            
						<div class="form-group">
                            <label for="staff_penerima" class="col-sm-3 control-label"> Staff Penerima Laporan</label>
                            <div class="col-sm-9">
                                <input type="text" name="staff_penerima" class="form-control" id="inputPassword3" placeholder="Inputkan Staff Penerima Laporan" required>
                            </div>
                        </div>


                        <!--Status-->

                       
                        <!--Akhir Status-->

						

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> Simpan Arsip Laporan</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=arsip&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Arsip Laporan
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
if($_POST){
    //Ambil data dari form
    $jenis_pelanggaran=$_POST['jenis_pelanggaran'];
	$nama_pelapor=$_POST['nama_pelapor'];
	$tempat_kejadian=$_POST['tempat_kejadian'];
    $tgl_masuk=$_POST['tgl_masuk'];
    $pihak_terlapor=$_POST['pihak_terlapor'];
	$kronologi_kejadian=$_POST['kronologi_kejadian'];
    $bukti_dugaan=$_POST['bukti_dugaan'];
    $staff_penerima=$_POST['staff_penerima'];
    //buat sql
    $sql="INSERT INTO arsip VALUES ('','$jenis_pelanggaran','$nama_pelapor','$tempat_kejadian','$tgl_masuk','$pihak_terlapor','$kronologi_kejadian','$bukti_dugaan','$staff_penerima')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Arsip Error");
    if ($query){
        echo "<script>window.location.assign('?page=arsip&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
