<!DOCTYPE html>
<html lang="en">
<?php echo form_open('c_main/update2_trainer');?>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../docs-assets/ico/favicon.png">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script type="text/javascript" src="http://rawgit.com/BobKnothe/autoNumeric/master/autoNumeric.js"></script>
<script type="text/javascript">
jQuery(function($) {
    $('.auto').autoNumeric('init');
});
</script>
<style>
input[type="text"] {
	text-align:right;
}
.method {
	margin-top: 25px;
	margin-bottom:25px;
}
.method td {
	height:25px;
}
</style>
    <title>Aplikasi Pengelolaan Tempat Fitness</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url()?>assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url() ?>assets/jumbotron.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../docs-assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  <script type="text/javascript"></script><link rel='stylesheet' type='text/css' href='/B1D671CF-E532-4481-99AA-19F420D90332/netdefender/hui/ndhui.css' /></head>

  <body background="<?php echo base_url()?>assets/wallpaper/wallpaper05.jpg"><script type='text/javascript' language='javascript' src='/B1D671CF-E532-4481-99AA-19F420D90332/netdefender/hui/ndhui.js?0=0&amp;0=0&amp;0=0'></script>

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
		              <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
		  <li><?php echo anchor('c_main/user_area', 'Home'); ?> </li>
                <li> <?php echo anchor('c_main/display_member', 'Data Member'); ?> </li>                 <div class="dropdown">                 <button class="dropbtn">Laporan Akuntansi</button>             <div class="dropdown-content">             <li><?php echo anchor('c_main/display_jurnal_umum', 'Jurnal Umum'); ?> </li>             <li><?php echo anchor('c_main/display_pilih_akun', 'Buku Besar'); ?> </li>              <li><?php echo anchor('c_main/display_pilih_bulan_profit', 'P/L Statement'); ?> </li>             </div> </div>
                <li  class="active"><?php echo anchor('c_main/display_trainer', 'Data Trainer'); ?></li>
                 <li><?php echo anchor('c_main/display_transaksi', 'Data Transaksi'); ?></li>
                 <li><?php echo anchor('c_main/display_pembayaran_member', 'Data Pembayaran'); ?></li>
                <li><?php echo anchor('c_main/display_alat_latihan', 'Data Alat Latihan'); ?></li>
                <li><?php echo anchor('c_main/display_jadwal_latihan', 'Jadwal Latihan'); ?></li>
		<li><?php echo anchor('c_main/display_kehadiran', 'Kehadiran'); ?> </li> 		
				
		<li><?php echo anchor('c_login/logout', 'Logout'); ?></li>
				 </ul>
            </div>
        </div>
        <div class="navbar-collapse collapse">
        </div><!--/.navbar-collapse -->
      </div>
    </div>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <table  Align="center" class="table table-bordered opik">
		<h3>Edit Data Trainer </h3>	
      <?php
		foreach($list_data->result()as $row){
			$id_trainer=$row->ID_Trainer;
			$nama=$row->Nama_Trainer;
			$umur=$row->Umur;
			$jeniskelamin=$row->Jenis_Kelamin;
			$biayalatihan=$row->Biaya_Trainer;
			
			
		}
		?>		
	<tr>
	<th>Nama :</th>
	<td><input name = "nama" type = "text" placeholder="Isi Nama Trainer" value = "<?php echo $nama?>" ></td>
	<input name= "id_trainer" type = "text" value = "<?php echo $id_trainer ?>" hidden >
	</tr>
		
	<tr>
	<th>Umur :</th>
	<td><input name = "umur" type = "text" placeholder="Isi Umur Member" value = "<?php echo $umur?>" ></td>
	</tr>
	
	<tr>
	<th>Jenis Kelamin :</th>
        <?php 
        
        if($jeniskelamin=="Male")
        {
        echo '
	<td><input type="radio" name="jeniskelamin" value="Male" checked>Male</input>
      <input type="radio" name="jeniskelamin" value="Female">Female</input></td>';
        }
        
 else {
     echo
     '<td><input type="radio" name="jeniskelamin" value="Male">Male</input>
      <input type="radio" name="jeniskelamin" value="Female" checked>Female</input></td>';
 }
                
                ?>
	</tr>
	
	<tr>
	<th>Biaya Latihan :</th>
        <td><input class="auto"  name = "biayalatihan" type = "text" placeholder="Isi Biaya Latihan" value = "<?php echo $biayalatihan?>" ></td>
	</tr>
	
	<tr>
	<td>
            <input class="btn btn-default" type = "submit" name = "submit" value = "Submit">
	</td>
	</tr>
	 </table>
      </div>
    </div>

    


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
  </body>
  <?php echo form_close();?>
</html>
