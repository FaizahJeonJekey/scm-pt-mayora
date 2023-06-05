<?php 
session_start();

$conn = mysqli_connect("localhost","root","","testt");

//Tambah Data Gudang
if (isset($_POST['addgudang'])){
    $id =$_POST['id'];
    $nama =$_POST['nama'];
    $lokasi =$_POST['lokasi'];

    $addtotable = mysqli_query($conn,"insert into gudang(id, nama, lokasi) values('$id','$nama','$lokasi')");
    if($addtotable){
        header('location:gudang.php');
    } else{
        echo 'gagal';
        header('location:gudang.php');
    }
}

//Tambah Data Barang
if (isset($_POST['addbarang'])){
    $idb =$_POST['idbarang'];
    $idk =$_POST['idkategori'];
    $namab =$_POST['nama'];
    $harga =$_POST['harga'];

    $addtotable = mysqli_query($conn,"insert into barang(idbarang, idkategori, nama, harga) values('$idb','$idk','$namab','$harga')");
    if($addtotable){
        header('location:barang.php');
    } else{
        echo 'gagal';
        header('location:barang.php');
    }
}

//Tambah Data Bahan
if (isset($_POST['addbahan'])){
    $idbahan =$_POST['idbahan'];
    $namabahan =$_POST['nama'];
    $jumlahbahan =$_POST['jumlah'];
    $hargabahan =$_POST['harga'];

    $addtotable = mysqli_query($conn,"insert into bahanbaku(idbahan, nama, jumlah, harga) values('$idbahan','$namabahan','$jumlahbahan','$hargabahan')");
    if($addtotable){
        header('location:bahanbaku.php');
    } else{
        echo 'gagal';
        header('location:bahanbaku.php');
    }
}

//Tambah Data Pegawai
if (isset($_POST['addpegawai'])){
    $idp =$_POST['idpegawai'];
    $namapegawai =$_POST['namapegawai'];
    $alamat =$_POST['alamat'];
    $telp =$_POST['telp'];

    $addtotable = mysqli_query($conn,"insert into pegawai(idpegawai, namapegawai, alamat, telp) values('$idp','$namapegawai','$alamat','$telp')");
    if($addtotable){
        header('location:pegawai.php');
    } else{
        echo 'gagal';
        header('location:pegawai.php');
    }
}

//Tambah Data Tenaga Kerja
if (isset($_POST['addtenaga'])){
    $idt =$_POST['idtenaga'];
    $namat =$_POST['nama'];
    $alamat =$_POST['alamat'];

    $addtotable = mysqli_query($conn,"insert into tenagakerja(idtenaga, nama, alamat) values('$idt','$namat','$alamat')");
    if($addtotable){
        header('location:tenaga.php');
    } else{
        echo 'gagal';
        header('location:tenaga.php');
    }
}

//Tambah Data Biaya
if (isset($_POST['addbiaya'])){
    $idbiaya =$_POST['idbiaya'];
    $idb =$_POST['idba'];
    $idt =$_POST['idte'];

    $addtotable = mysqli_query($conn,"insert into biaya(idbiaya, idbahan, idtenaga) values('$idbiaya','$idb','$idt')");
    if($addtotable){
        header('location:biaya.php');
    } else{
        echo 'gagal';
        header('location:biaya.php');
    }
}

//Tambah Data Stock Barng
if (isset($_POST['addstokb'])){
    $idsb =$_POST['idstokbarang'];
    $idbar =$_POST['idbar'];
    $jumlah =$_POST['jumlah'];

    $addtotable = mysqli_query($conn,"insert into stokb(idstokbarang, idbarang, jumlah) values('$idsb','$idbar','$jumlah')");
    if($addtotable){
        header('location:stock.php');
    } else{
        echo 'gagal';
        header('location:stock.php');
    }
}

//Tambah Data Outlet
if (isset($_POST['addou'])){
    $ido =$_POST['idoutlet'];
    $idp =$_POST['idp'];
    $idbar =$_POST['idbar'];
    $lok =$_POST['lokasi'];

    $addtotable = mysqli_query($conn,"insert into outlet(idoutlet, idpegawai, idbarang,lokasi) values('$ido','$idp','$idbar','$lok')");
    if($addtotable){
        header('location:outlet.php');
    } else{
        echo 'gagal';
        header('location:outlet.php');
    }
}

//Tambah Data Produksi
if (isset($_POST['addpro'])){
    $idpr =$_POST['idproduksi'];
    $idbar =$_POST['idbar'];
    $idbi =$_POST['idbi'];
    $jml =$_POST['jumlahproduksi'];

    $addtotable = mysqli_query($conn,"insert into produksi(idproduksi, idbarang, idbiaya,jumlahproduksi) values('$idpr','$idbar','$idbi','$jml')");
    if($addtotable){
        header('location:produksi.php');
    } else{
        echo 'gagal';
        header('location:produksi.php');
    }
}

//Tambah Data Stok Produksi
if (isset($_POST['addsp'])){
    $ids =$_POST['idstok'];
    $idpr =$_POST['idpr'];
    $idg =$_POST['idg'];
    $jml =$_POST['jumlah'];

    $addtotable = mysqli_query($conn,"insert into stokp(idstok, idproduk, id,jumlah) values('$ids','$idpr','$idg','$jml')");
    if($addtotable){
        header('location:Stokproduksi.php');
    } else{
        echo 'gagal';
        header('location:Stokproduksi.php');
    }
}

//Update Data Gudang
if(isset($_POST['updategu'])){
    $id =$_POST['id'];
    $nama =$_POST['nama'];
    $lokasi =$_POST['lokasi'];

    $update =mysqli_query($conn,"update gudang set nama='$nama', lokasi='$lokasi' where id ='$id'");
    if($update){
        header('location:gudang.php');
    } else{
        echo 'gagal';
        header('location:gudang.php');
    }
}

//Update Data Barang
if(isset($_POST['updatebarang'])){
    $idb =$_POST['idbarang'];
    $idk =$_POST['idkategori'];
    $namab =$_POST['nama'];
    $harga =$_POST['harga'];

    $update =mysqli_query($conn,"update barang set idkategori='$idk', nama='$namab', harga='$harga' where idbarang ='$idb'");
    if($update){
        header('location:barang.php');
    } else{
        echo 'gagal';
        header('location:barang.php');
    }
}

//Update Data Bahan
if(isset($_POST['updatebahan'])){
    $idbahan =$_POST['idbahan'];
    $namabahan =$_POST['nama'];
    $jumlahbahan =$_POST['jumlah'];
    $hargabahan =$_POST['harga'];

    $update =mysqli_query($conn,"update bahanbaku set nama='$namabahan',jumlah='$jumlahbahan', harga='$hargabahan' where idbahan='$idbahan'");
    if($update){
        header('location:bahanbaku.php');
    } else{
        echo 'gagal';
        header('location:bahanbaku.php');
    }
}

//Update Data Pegawai
if(isset($_POST['updatepegawai'])){
    $idp =$_POST['idpegawai'];
    $namapegawai =$_POST['namapegawai'];
    $alamat =$_POST['alamat'];
    $telp =$_POST['telp'];

    $update =mysqli_query($conn,"update pegawai set namapegawai='$namapegawai',alamat='$alamat', telp='$telp' where idpegawai='$idp'");
    if($update){
        header('location:pegawai.php');
    } else{
        echo 'gagal';
        header('location:pegawai.php');
    }
}

//Update Data Tenaga Kerja
if(isset($_POST['updatetenaga'])){
    $idt =$_POST['idtenaga'];
    $namat =$_POST['nama'];
    $alamat =$_POST['alamat'];

    $update =mysqli_query($conn,"update tenagakerja set nama='$namat',alamat='$alamat' where idtenaga='$idt'");
    if($update){
        header('location:tenaga.php');
    } else{
        echo 'gagal';
        header('location:tenaga.php');
    }
}

//Update Data Biaya
if(isset($_POST['updatebia'])){
    $idbiaya =$_POST['idbiaya'];
    $idb =$_POST['idbahan'];
    $idt =$_POST['idtenaga'];
    

    $update =mysqli_query($conn,"update biaya set idbiaya='$idbiaya' where idbahan='$idb' and idtenaga='$idt'");
    if($update){
        header('location:biaya.php');
    } else{
        echo 'gagal';
        header('location:biaya.php');
    }
}

//Update Data Stock Barang
if(isset($_POST['updatesb'])){
    $idsb =$_POST['idstokbarang'];
    $idbar =$_POST['idbarang'];
    $jumlah =$_POST['jumlah'];
    

    $update =mysqli_query($conn,"update stokb set idstokbarang='$idsb',jumlah='$jumlah' where idbarang='$idbar'");
    if($update){
        header('location:stock.php');
    } else{
        echo 'gagal';
        header('location:stock.php');
    }
}

//Update Data Outlet
if(isset($_POST['updateo'])){
    $ido=$_POST['idoutlet'];
    $idp =$_POST['idpegawai'];
    $idbar =$_POST['idbarang'];
    $lok =$_POST['lokasi'];
    

    $update =mysqli_query($conn,"update outlet set idoutlet='$ido',lokasi='$lok' where idpegawai='$idp' and idbarang='$idbar'");
    if($update){
        header('location:outlet.php');
    } else{
        echo 'gagal';
        header('location:outlet.php');
    }
}

//Update Data Produksi
if(isset($_POST['updatepr'])){
    $idpro=$_POST['idproduksi'];
    $idbar =$_POST['idbarang'];
    $idbi =$_POST['idbiaya'];
    $jml =$_POST['jumlahproduksi'];
    

    $update =mysqli_query($conn,"update produksi set idproduksi='$idpro',jumlahproduksi='$jml' where idbiaya='$idbi' and idbarang='$idbar'");
    if($update){
        header('location:produksi.php');
    } else{
        echo 'gagal';
        header('location:produksi.php');
    }
}

//Update Data Stok Produksi
if(isset($_POST['updatesp'])){
    $ids=$_POST['idstok'];
    $idpr =$_POST['idproduk'];
    $idg =$_POST['id'];
    $jml =$_POST['jumlah'];
    

    $update =mysqli_query($conn,"update stokp set idstok='$ids',jumlah='$jml' where idproduk='$idpr' and id='$idg'");
    if($update){
        header('location:Stokproduksi.php');
    } else{
        echo 'gagal';
        header('location:Stokproduksi.php');
    }
}

//Hapus Data Gudang
if(isset($_POST['hapusgudang'])){
    $id=$_POST['id'];

    $hapus =mysqli_query($conn,"delete from gudang where id='$id'");
    if($hapus){
        header('location:gudang.php');
    } else{
        echo 'gagal';
        header('location:gudang.php');
    }
}

//Hapus Data Barang
if(isset($_POST['hapusbarang'])){
    $idb=$_POST['idbarang'];

    $hapus =mysqli_query($conn,"delete from barang where idbarang='$idb'");
    if($hapus){
        header('location:barang.php');
    } else{
        echo 'gagal';
        header('location:barang.php');
    }
}

//Hapus Data Bahan
if(isset($_POST['hapusbahan'])){
    $idbahan=$_POST['idbahan'];

    $hapus =mysqli_query($conn,"delete from bahanbaku where idbahan='$idbahan'");
    if($hapus){
        header('location:bahanbaku.php');
    } else{
        echo 'gagal';
        header('location:bahanbaku.php');
    }
}

//Hapus Data Pegawai
if(isset($_POST['hapuspegawai'])){
    $idp=$_POST['idpegawai'];

    $hapus =mysqli_query($conn,"delete from pegawai where idpegawai='$idp'");
    if($hapus){
        header('location:pegawai.php');
    } else{
        echo 'gagal';
        header('location:pegawai.php');
    }
}

//Hapus Data tenaga
if(isset($_POST['hapustenaga'])){
    $idt=$_POST['idtenaga'];

    $hapus =mysqli_query($conn,"delete from tenagakerja where idtenaga='$idt'");
    if($hapus){
        header('location:tenaga.php');
    } else{
        echo 'gagal';
        header('location:tenaga.php');
    }
}

//Hapus Data Biaya
if(isset($_POST['hapusbiaya'])){
    $idbiaya=$_POST['idbiaya'];

    $hapus =mysqli_query($conn,"delete from biaya where idbiaya='$idbiaya'");
    if($hapus){
        header('location:biaya.php');
    } else{
        echo 'gagal';
        header('location:biaya.php');
    }
}

//Hapus Data Stock Barang
if(isset($_POST['hapussb'])){
    $idsb=$_POST['idstokbarang'];

    $hapus =mysqli_query($conn,"delete from stokb where idstokbarang='$idsb'");
    if($hapus){
        header('location:stock.php');
    } else{
        echo 'gagal';
        header('location:stock.php');
    }
}

//Hapus Data Outlet
if(isset($_POST['hapuso'])){
    $ido=$_POST['idoutlet'];

    $hapus =mysqli_query($conn,"delete from outlet where idoutlet='$ido'");
    if($hapus){
        header('location:outlet.php');
    } else{
        echo 'gagal';
        header('location:outlet.php');
    }
}

//Hapus Data Produksi
if(isset($_POST['hapuspr'])){
    $idpro=$_POST['idproduksi'];

    $hapus =mysqli_query($conn,"delete from produksi where idproduksi='$idpro'");
    if($hapus){
        header('location:produksi.php');
    } else{
        echo 'gagal';
        header('location:produksi.php');
    }
}

//Hapus Data Stok Produksi
if(isset($_POST['hapussp'])){
    $ids=$_POST['idstok'];

    $hapus =mysqli_query($conn,"delete from stokp where idstok='$ids'");
    if($hapus){
        header('location:Stokproduksi.php');
    } else{
        echo 'gagal';
        header('location:Stokproduksi.php');
    }
}
?> 