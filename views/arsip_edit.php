<?php
$id=$_GET['id'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM arsip WHERE id ='$id'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Update Data Arsip Penerimaan Laporan</h3>
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
                            <label for="nama_pelapor" class="col-sm-3 control-label">Nama Pelapor</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama_pelapor" value="<?=$data['nama_pelapor']?>"class="form-control" id="inputEmail3" placeholder="Nomor Rak/Lemari">
                            </div>
                        </div>
						<div class="form-group">
                            <label for="tempat_kejadian" class="col-sm-3 control-label">Tempat Kejadian</label>
                            <div class="col-sm-9">
                                <input type="text" name="tempat_kejadian" value="<?=$data['tempat_kejadian']?>"class="form-control" id="inputEmail3" placeholder="Nomor Tingkat/Laci">
                            </div>
                        </div>
						      <div class="form-group">


                            <label class="col-sm-3 control-label">Tanggal Masuk Laporan</label>
                            <!--untu tahun-->
                            <div class="col-sm-2 col-xs-9">
                                <select name="tahun" class="form-control">
                                    <?php for($i=2017;$i>1980;$i--) {?>
                                    <option value="<?=$i?>"> <?=$i?> </option>
                                    <?php }?>
                                    
                                </select>

                            </div>
                            <!--Untuk Bulan-->
                            <div class="col-sm-2 col-xs-9">
                                <select name="bulan" class="form-control">
                                    <?php 
                                    $bulan=  array("","Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
                                    for($j=12;$j>0;$j--) {?>
                                    <option value="<?=$j?>"> <?=$bulan[$j]?> </option>
                                    <?php }?>
                                    
                                </select>

                            </div>
                            <!--Untuk Tanggal-->
                            <div class="col-sm-2 col-xs-9">
                                <select name="tanggal" class="form-control">
                                    <?php for($k=31;$k>0;$k--) {?>
                                    <option value="<?=$k?>"> <?=$k?> </option>
                                    <?php }?>
                                    
                                </select>

                            </div>

                        </div>
						<div class="form-group">
                            <label for="pihak_terlapor" class="col-sm-3 control-label">Pihak Terlapor</label>
                            <div class="col-sm-9">
                                <input type="text" name="pihak_terlapor" value="<?=$data['pihak_terlapor']?>"class="form-control" id="inputEmail3" placeholder="Para Pihak">
                            </div>
                        </div>
							<div class="form-group">
                            <label for="kronologi_kejadian" class="col-sm-3 control-label">Kronologi Kejadian</label>
                            <div class="col-sm-9">
                                <input type="text" name="kronologi_kejadian" value="<?=$data['kronologi_kejadian']?>"class="form-control" id="inputEmail3" placeholder="Nomor Perkara" >
                            </div>
                        </div>
                        <!--untuk tanggal lahir form tahun-bulan-tanggal 1998-10-10-->
                       
                        <!--end tanggal lahir-->           

                        <div class="form-group">
                            <label for="bukti_dugaan" class="col-sm-3 control-label">Bukti Dugaan Pelanggaran</label>
                            <div class="col-sm-9">
                                <input type="text" name="bukti_dugaan" value="<?=$data['bukti_dugaan']?>" class="form-control" id="inputPassword3" placeholder="Pengantar Berkas">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="staff_penerima" class="col-sm-3 control-label">Staff Penerima laporan</label>
                            <div class="col-sm-9">
                                <input type="text" name="staff_penerima" value="<?=$data['staff_penerima']?>" class="form-control" id="inputPassword3" placeholder="Penerima Berkas">
                            </div>
                        </div>
                        <!--Status-->
                        
                       
                        <!--Akhir Status-->
                       
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-edit"></span> Update Data Arsip Penerimaan Laporan</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=arsip&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Arsip Penerimaan Laporan
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
    $tgl_masuk=$_POST['tahun']."_".$_POST['bulan']."_".$_POST['tanggal'];
	$pihak_terlapor=$_POST['pihak_terlapor'];
    $kronologi_kejadian=$_POST['kronologi_kejadian'];
    $bukti_dugaan=$_POST['bukti_dugaan'];
	$staff_penerima=$_POST['staff_penerima'];
   
    //buat sql
    $sql="UPDATE arsip SET jenis_pelanggaran='$jenis_pelanggaran',nama_pelapor='$nama_pelapor',tempat_kejadian='$tempat_kejadian',tgl_masuk='$tgl_masuk',pihak_terlapor='$pihak_terlapor',
	kronologi_kejadian='$kronologi_kejadian',bukti_dugaan='$bukti_dugaan',staff_penerima='$staff_penerima' WHERE id ='$id'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit MHS Error");
    if ($query){
        echo "<script>window.location.assign('?page=arsip&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



