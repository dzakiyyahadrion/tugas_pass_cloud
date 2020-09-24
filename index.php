<html>
<head>
	<title>UTS Web</title>
<style type="text/css">
 * {
	margin:0;
	padding:0;
	font-family: sans-serif;
	}
	.tepi {
		margin: 1%;
	}
	.header {
			width:100%;
			height:100px;
			overflow:hidden;
	}
	.logo {
			background: #1b5b13;
			width:250px;
			height:100px;
			float:left;
	}
	img {
			width:150px;
			height:90px;
			padding-left:45px;
			padding-top:5px;
	}
	.title {
			background: #32CD32;
			width:985px;
			height:100px;
			float:left;
	}
	.judul {
		text-align: center;
		padding-top:30px;
	}
	.tanggal {
	 	font-size: 18px;
	 	font-family: sans-serif;
	 	font-style: italic;
	 	color: white;
	 	text-align: right;
	 	padding-top: 15px;
	 	padding-right: 15px;
	}

	.menu {
		background:#3cb371;
		width:250px;
		height:450px;
		float:left;
		margin: 0px;
		margin-top:0px;
	}
	ul{
		text-align:left;
		padding-top:20px;
		padding-left:20px;
	}
	li{
		padding-top:15px;
		padding-left:20px;
	}
	.content {
		background: #8FBC8B;
		width:985px;
		height: 450px;
		float:left;
	}
	#tes{
		font-family: sans-serif;
	 	color: white;
	 	font-size: 24px;
		padding-left 50px;
		padding-top: 30px;
	}
	.tulisanhome{
		padding-top: 100px;
		color:white;
	}
	.tulisan{
		padding-top: 30px;
		padding-left: 50px;
	}
	.footer {
		padding-top:550px;
		background:#9ACD32;
		width:1235px;
		height:40px;
	}
	marquee{
		width:"1235px";
		height:"30px";
		padding-left:30px;
		color:white;
		font-size:25px;
	}
</style>
</head>
<head>
		<title> "UTS Perancangan dan Pemograman WEB" </title>
		<link rel ="stylesheet" type="text/css" href="css/style.css" >
	</head>
	
	<body>

		<div class = "tepi">
			
			<div class = "logo">
				<img src="img/uin.png" />
			</div>
			<div class = "title">
				<h1 class="judul">Latihan PASS Cloud Komputing</h1>
				<div class="tanggal">
					<?php
					$tgl=date('l, d-m-Y');
					echo $tgl;
					?>
				</div>
			</div>
			<div class = "menu">
				<ul><br>
					<li><a class="link" href="<?php $_SERVER['PHP_SELF']; ?>?op=home">Home</a></li>
					<hr>
					<li><a class="link" href="<?php $_SERVER['PHP_SELF']; ?>?op=pendaftaran">Pendaftaran</a></li>
					<hr>
					<li><a class="link" href="<?php $_SERVER['PHP_SELF']; ?>?op=beratideal">Mengukur Berat Badan Ideal</a></li>
					<hr>
				</ul>
			</div>
			<div class = "content">
				<?php
				if (@$_GET['op']=="home") {
					?>
					<center>
						<form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
							<div class="tulisanhome">
								<h2>UTS Pemograman WEB</h2>
								<table>
									<h2>Annisa Dzakiyyahtul Hanifah</h2>
									<h2>11180910000048</h2>
									<h2>TI - 2018</h2>
									<h2>Fakultas Sains dan Teknologi</h2>
									<h2>UIN Syarif Hidayatullah Jakarta</h2>
								</table>
							</div>
						</form>
					</center>
					<?php
				}
				elseif (@$_GET['op']=="pendaftaran") {
					?>
					<form method="post" action="<?php $_SERVER['PHP_SELF']; ?>?show=pendaftaran">
						<div class="tulisan">
							<h2><center>FORMULIR PENDAFTARAN</center></h2>
							<font color="white">
								<table>
								  <tr><td>Nama Anda</td><td>:</td><td><input type="text" name="nama" size="30"></td></tr>
								  <tr><td>Tempat Lahir</td><td>:</td><td><input type="text" name="tmptlhr" size="30"></td></tr>
								  <tr>
									   <td>Pilih Pekerjaan</td>
									   <td>:</td>
									   <td>
									   <select name="tgllhr">
										 <option value="1">1</option>
										 <option value="2">2</option>
										 <option value="3">3</option>
										 <option value="4">4</option>
										 <option value="5">5</option>
										 <option value="6">6</option>
										 <option value="7">7</option>
										 <option value="8">8</option>
										 <option value="9">9</option>
										 <option value="10">10</option>
										 <option value="11">11</option>
										 <option value="12">12</option>
										 <option value="13">13</option>
										 <option value="14">14</option>
										 <option value="15">15</option>
										 <option value="16">16</option>
										 <option value="17">17</option>
										 <option value="18">18</option>
										 <option value="19">19</option>
										 <option value="20">20</option>
										 <option value="21">21</option>
										 <option value="22">22</option>
										 <option value="23">23</option>
										 <option value="24">24</option>
										 <option value="25">25</option>
										 <option value="26">26</option>
										 <option value="27">27</option>
										 <option value="28">28</option>
										 <option value="29">29</option>
										 <option value="30">30</option>
										 <option value="31">31</option>
									   </select>
									   <select name="blnlhr">
										 <option value="Jan">Jan</option>
										 <option value="Feb">Feb</option>
										 <option value="Mar">Mar</option>
										 <option value="Apr">Apr</option>
										 <option value="Mei">Mei</option>
										 <option value="Jun">Jun</option>
										 <option value="Jul">Jul</option>
										 <option value="Agt">Agt</option>
										 <option value="Sep">Sep</option>
										 <option value="Okt">Okt</option>
										 <option value="Nov">Nov</option>
										 <option value="Des">Des</option>
									   </select>
									   <select name="thnlhr">
										 <option value="1970">1970</option>
										 <option value="1971">1971</option>
										 <option value="1972">1972</option>
										 <option value="1973">1973</option>
										 <option value="1974">1974</option>
										 <option value="1975">1975</option>
										 <option value="1976">1976</option>
										 <option value="1977">1977</option>
										 <option value="1978">1978</option>
										 <option value="1979">1979</option>
										 <option value="1980">1980</option>
										 <option value="1981">1981</option>
										 <option value="1982">1982</option>
										 <option value="1983">1983</option>
										 <option value="1984">1984</option>
										 <option value="1985">1985</option>
										 <option value="1986">1986</option>
										 <option value="1987">1987</option>
									   </select>
									   </td>
								  </tr>
								  <tr><td>Alamat</td><td>:</td><td><textarea name="alamat" rows="10" cols="20"></textarea></td></tr>
								  <tr><td>Jenis Kelamin</td><td>:</td><td><input type="radio" name="sex" value="L">Laki-laki <input type="radio" name="sex" value="P">Perempuan </td></tr>
								  <tr><td>Asal Sekolah</td><td>:</td><td><input type="text" name="sklh" size="30"></td></tr>
								  <tr><td>Nilai UAN</td><td>:</td><td><input type="text" name="uan" size="30"></td></tr>
								</table>
								<input type="submit" name="submit" value="Submit">
								<input type="reset" name="reset" value="Hapus">
								</table>
							</font>
						</div>
					</form>
					<?php
				}
				elseif (@$_GET['op']=="beratideal") {
					?>

					<form method="post" action="<?php $_SERVER['PHP_SELF']; ?>?show=beratideal">
						<div class="tulisan">
							<h2><center>MENGUKUR BERAT BADAN IDEAL</center></h2>
							<font color="white">
								<table>
								  <tr><td>Nama Anda</td><td>:</td><td><input type="text" name="nama" size="30"></td></tr>
								  <tr><td>Tinggi Anda (cm)</td><td>:</td><td><input type="text" name="tgi" size="30"></td></tr>
								  <tr><td>Berat Anda (kg)</td><td>:</td><td><input type="text" name="brt" size="30"></td></tr>
								</table>
								<input type="submit" name="submit" value="Submit">
								<input type="reset" name="reset" value="Hapus">
							</font> 
						</div>
					</form>
					<?php
				}
				?>
			</div>
			<div class = "footer">
				<marquee>Selamat Datang </marquee>
			</div>
		</div>

	</body>
</html>
