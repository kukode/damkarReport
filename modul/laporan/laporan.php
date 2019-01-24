<?php
ob_start();
if(isset($_POST['save'])){
    $tgl_laporan = mysqli_real_escape_string($link,$_POST['tgl_laporan']);
    $waktu_laporan = mysqli_real_escape_string($link,$_POST['waktu_laporan']);
    $pelapor = mysqli_real_escape_string($link,$_POST['pelapor']);
    $lokasi_kejadian = mysqli_real_escape_string($link,$_POST['lokasi_kejadian']);
    $objek_terbakar = mysqli_real_escape_string($link,$_POST['objek_terbakar']);
    $pemilik = mysqli_real_escape_string($link,$_POST['pemilik']);
    $jam_berangkat = mysqli_real_escape_string($link,$_POST['jam_berangkat']);
    $jam_tiba = mysqli_real_escape_string($link,$_POST['jam_tiba']);
    $jam_selesai = mysqli_real_escape_string($link,$_POST['jam_selesai']);
    $sumber_api = mysqli_real_escape_string($link,$_POST['sumber_api']);
    $korban = mysqli_real_escape_string($link,$_POST['korban']);
    $kerugian = mysqli_real_escape_string($link,$_POST['kerugian']);
    $saksi_mata = mysqli_real_escape_string($link,$_POST['saksi_mata']);
    $alamat = mysqli_real_escape_string($link,$_POST['alamat']);
    $regu = mysqli_real_escape_string($link,$_POST['regu']);
    $kendaraan = mysqli_real_escape_string($link,$_POST['kendaraan']);
    $unit = mysqli_real_escape_string($link,$_POST['unit']);
    $keterangan = mysqli_real_escape_string($link,$_POST['keterangan']);

    $query = "INSERT INTO tm_laporan (
        tgl_laporan,
        waktu_laporan,
        pelapor,
        lokasi_kejadian,
        objek_terbakar,
        pemilik,
        jam_berangkat,
        jam_tiba,
        jam_selesai,
        sumber_api,
        korban,
        kerugian,
        saksi_mata,
        alamat,
        regu,
        kendaraan,
        unit,
        keterangan
    ) VALUES (
        '$tgl_laporan',
        '$waktu_laporan',
        '$pelapor',
        '$lokasi_kejadian',
        '$objek_terbakar',
        '$pemilik',
        '$jam_berangkat',
        '$jam_tiba',
        '$jam_selesai',
        '$sumber_api',
        '$korban',
        '$kerugian',
        '$saksi_mata',
        '$alamat',
        '$regu',
        '$kendaraan',
        '$unit',
        '$keterangan'

    )";
    $result = mysqli_query($link,$query);
    if($result){
        echo "<script>alert('sukses')</script>";
    }
    else {
        echo "<script>alert('gagal')</script>";
    }

}
?>
<div class="row">
    <!-- Trigger the modal with a button -->
    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal" data-backdrop="false">+ Laporan</button>

    <!-- Modal -->
    <form method="post" class="form-vertical">
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title text-center">Form Laporan Kejadian</h4>
                </div>
                <div class="modal-body">
                   
                        <table class="table table-striped" >
                            <tr>
                                <td> Tanggal : <input type="date" class="form-control" name="tgl_laporan"></td>
                                <td> Jam : <input type="time" class="form-control" name="waktu_laporan"></td>
                            </tr>
                            <tr>
                                <td> 
                                Sumber Berita Pelapor : 
                                <select class="form-control" name="pelapor">
                                    <option value="1">Cibinong</option>
                                    <option value="2">Ciawi</option>
                                    <option value="3">Cileungsi</option>
                                    <option value="4">Parung</option>
                                    <option value="5">Leuwiliang</option>
                                    <option value="6">Citereup</option>
                                    <option value="7">Cisarua</option>
                                    <option value="8">Cigombong</option>
                                    <option value="9">Parung Panjang</option>
                                    <option value="10">Jasinga</option>
                                </select>
                                </td>
                            </tr>
                            <tr>
                                <td> 
                                Lokasi Kejadian : 
                                <textarea name="lokasi_kejadian" class="form-control" cols="5" rows="5"></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td> Objek Terbakar : <input type="text" name="objek_terbakar" class="form-control" ></td>
                            </tr>
                            <tr>
                                <td> Pemilik  : <input type="text" name="pemilik" class="form-control" ></td>
                            </tr>
                            <tr>
                                <td> 
                                    Jam Berangkat : 
                                    <input type="time" name="jam_berangkat" class="form-control" >
                                </td>
                                <td> 
                                    Jam Tiba : 
                                    <input type="time" name="jam_tiba"  class="form-control" >
                                </td>
                            </tr>
                            <tr>
                                <td> 
                                    Jam Selesai Penanganan : 
                                    <input type="time" name="jam_selesai"  class="form-control" >
                                </td>
                            </tr>
                            <tr>
                                <td> Sumber API  : <input type="text" name="sumber_api" class="form-control" ></td>
                            </tr>
                            <tr>
                                <td> Korban  : <input type="text" name="korban" class="form-control" ></td>
                            </tr>
                            <tr>
                                <td> Perkiraan Kerugian  : <input type="text" name="kerugian" class="form-control" ></td>
                            </tr>
                            <tr>
                                <td> Saksi Mata  : <input type="text" class="form-control" name="saksi_mata"></td>
                            </tr>
                            <tr>
                                <td> 
                                Alamat  : 
                                <textarea class="form-control" cols="5" rows="5" name="alamat"></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td> Regu yang berangkat  : <input type="text" class="form-control" name="regu"></td>
                            </tr>
                            <tr>
                                <td> 
                                Kendaraan yang dipakai  : 
                                <textarea class="form-control" cols="5" rows="5" name="kendaraan"></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td> 
                                Unit yang menanggulangi : 
                                <textarea class="form-control" cols="5" rows="5" name="unit"></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td> 
                                Keterangan  : 
                                <textarea class="form-control" cols="5" rows="5" name="keterangan"></textarea>
                                </td>
                            </tr>
                        </table>
    
                    
                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-primary" value="simpan" name="save">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>
    </form>
</div>

<div class="row" style="margin-top:20px;">
    <table id="myTable" class="table">
        <thead>
            <tr>
                <th>Tanggal</th>
                <th>Sumber Berita / Pelapor</th>
                <th>Lokasi Tempat Kejadian</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        <?php 
            $queryData = mysqli_query($link,"SELECT * FROM tm_laporan");
            while($row = mysqli_fetch_array($queryData)){
                if($row['pelapor']==1){
                    $dataPelapor = "Cibinong";
                }
                elseif($row['pelapor']==2){
                    $dataPelapor = "Ciawi";
                }
                elseif($row['pelapor']==3){
                    $dataPelapor = "Cileungsi";
                }
                elseif($row['pelapor']==4){
                    $dataPelapor = "Parung";
                }
                elseif($row['pelapor']==5){
                    $dataPelapor = "Leuwiliang";
                }
                elseif($row['pelapor']==6){
                    $dataPelapor = "Citereup";
                }
                elseif($row['pelapor']==7){
                    $dataPelapor = "Cisarua";
                }
                elseif($row['pelapor']==8){
                    $dataPelapor = "Cigombong";
                }
                elseif($row['pelapor']==9){
                    $dataPelapor = "Parung Panjang";
                }
                elseif($row['pelapor']==10){
                    $dataPelapor = "Jasinga";
                }
        
        ?>
         
            <tr>
                <td><?php echo $row['tgl_laporan'] ?></td>
                <td><?php echo $dataPelapor ?></td>
                <td><?php echo $row['lokasi_kejadian'] ?></td>
                <td>
                    <a href="?page=delete&id=<?php echo $row['id_laporan'] ?>" class="btn btn-danger">Delete</a>
                    <a href="#" class="btn btn-warning">Edit</a>
                    <a href="#" class="btn btn-success">View</a>
                </td>
            </tr>
        <?php
            }
        ?>   
        </tbody>
    </table>
</div>
<?php 
$laporan = ob_get_clean();
?>