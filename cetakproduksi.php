<?php
require 'function.php';
require 'cek.php';
?>
<html>
<head>
  <title>Stock Barang</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
</head>

<body>
<div class="container">
			<h2>PT MAYORA</h2>
			<h4>(Data Produksi)</h4>
				<div class="data-tables datatable-dark">
					
                <div class="card-body">
                                <table id="mauexport">
                                    <thead>
                                        <tr>
                                            <th>Id Produksi</th>
                                            <th>Id Barang</th>
                                            <th>Id Biaya Produksi</th>
                                            <th>Jumlah Produksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        $ambilsemuadatabiaya = mysqli_query($conn, "select * from produksi p,barang b,biaya i where p.idbarang=b.idbarang and p.idbiaya=i.idbiaya");
                                        while($data=mysqli_fetch_array($ambilsemuadatabiaya)){
                                            $idpro = $data['idproduksi'];
                                            $idbar = $data['idbarang'];
                                            $idbi = $data['idbiaya'];
                                            $jml =$data['jumlahproduksi'];
                                        ?>
                                        <tr>
                                            <td><?=$idpro;?></td>
                                            <td><?=$idbar;?></td>
                                            <td><?=$idbi;?></td>
                                            <td><?=$jml;?></td>
                                        </tr>
                                        
                                        <?php
                                        };
                                        ?>
                                    </tbody>
                                </table>
                            </div>
</div>
	
<script>
$(document).ready(function() {
    $('#mauexport').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy','csv','excel', 'pdf', 'print'
        ]
    } );
} );

</script>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>

	

</body>

</html>