<html>

	<head>
		<title>Form Input Data Mahasiswa</title>
	</head>
	<body>
		<center>
			<form action="<?=  base_url('Tugas_uts/cetak'); ?>
			"method="post">
				<table>
					<tr>
						<th colspan="3">
							D-Lemas : Form Input Data Mahasiswa
						</th>
					</tr>
					
					<tr>
						<td colspan="3">
							<hr>
						</td>
					</tr>
					
					<tr>
						<td>
							<b>Nama Siswa</b>
							<th>:</th>
						</td>
						<td>
							<input type="text" name="nama" 
							id="nama" value="<?=set_value('nama');
							?>">
						</td>
					</tr>
					
					<tr>
						<th></th>
						<th></th>
						<td>
							<font style="color:red; font-size:8;
							align:center;"><?= form_error ('nama');
							?></font>
						</td>
					</tr>
					
					<tr>
						<td>
							<b>NIS</b>
							<th>:</th>
						</td>
						<th>
							<input type="text" name="nis" 
							id="nis" value="<?=set_value('nis');
							?>">
						</th>
					</tr>
					
					<tr>
						<th></th>
						<th></th>
						<td>
							<font style="color:red; font-size:8;
							align:center;"><?= form_error ('nis');
							?></font>
						</td>
					</tr>
					
					<tr>
						<td>
							<b>Kelas</b>
							<th>:</th>
						</td>
						<td>
							<input type="text" name="kelas" 
							id="kelas" value="<?=set_value('kelas');
							?>">
						</td>
					</tr>
					
					<tr>
						<th></th>
						<th></th>
						<td>
							<font style="color:red; font-size:8;
							align:center;"><?= form_error ('kelas');
							?></font>
						</td>
					</tr>
					
					<tr>
						<td>
							<b>Tanggal Lahir</b>
							<br>
						<b><font style="font-size:11;">(format : 2021-04-23)</font></b>
							<th>:</th>
						</td>
						<td>
							<input type="text" name="tgl" 
							id="tgl" value="<?=set_value('tgl');
							?>">
							
						</td>
					</tr>
					
					<tr>
						<th></th>
						<th></th>
						<td>
						
							<font style="color:red; font-size:8;
							align:center;"><?= form_error ('tgl');
							?></font>
						</td>
					</tr>
					
					<tr>
						<td>
							<b>Tempat Lahir</b>
							<th>:</th>
						</td>
						<td>
							<input type="text" name="tmpt" 
							id="tmpt" value="<?=set_value('tmpt');
							?>">
						</td>
					</tr>
					
					<tr>
						<th></th>
						<th></th>
						<td>
							<font style="color:red; font-size:8;
							align:center;"><?= form_error ('tmpt');
							?></font>
						</td>
					</tr>
					
					<tr>
						<td>
							<b>Alamat</b>
							<th>:</th>
						</td>
						<td>
							<input type="text" name="alamat" id="alamat"
							value="<?=set_value('alamat');
							?>">
							
						</td>
					</tr>
					
					<tr>
						<th></th>
						<td></td>
						<td>
							<font style="color:red; font-size:8;
							align:center;"><?= form_error ('alamat');
							?></font>
						</td>
					</tr>
					<tr>
						<td>
							<b>Jenis Kelamin</b>
							<th>:</th>
						</td>
						<td>
							<input type="radio" name="gender" value="Laki-laki"> Laki-laki <br>
							<input type="radio" name="gender" value="Perempuan"> Perempuan 
						</td>
					</tr>
					
					<tr>
						<th></th>
						<th></th>
						<td>
							<font style="color:red; font-size:8;
							align:center;"><?= form_error ('gender');
							?></font>
						</td>
					</tr>
					
					<tr>
						<td>
							<b>Agama</b>
							<th>:</th>
						</td>
						<td>
							<select name="agama" id="agama">
								<option value="" <?php echo set_select('agama','Pilih Agama',TRUE); ?>>Pilih Agama</option>
								<option value="Islam" <?php echo set_select('agama','Islam', 
								(!empty($this->input->post('agama') && $this->input->post('agama') == 'Islam' ? TRUE : FALSE))); ?>>Islam</option> 
								<option value="Kristen"<?php echo set_select('agama','Kristen',
								(!empty($this->input->post('agama') && $this->input->post('agama') == 'Kristen' ? TRUE : FALSE))); ?>>Kristen</option>
								<option value="Katolik"<?php echo set_select('agama','Katolik',
								(!empty($this->input->post('agama') && $this->input->post('agama') == 'Katolik' ? TRUE : FALSE))); ?>>Katolik</option>
								<option value="Budha"<?php echo set_select('agama','Budha',
								(!empty($this->input->post('agama') && $this->input->post('agama') == 'Budha' ? TRUE : FALSE))); ?>>Budha</option>
								<option value="Hindu"<?php echo set_select('agama','Hindu',
								(!empty($this->input->post('agama') && $this->input->post('agama') == 'Hindu' ? TRUE : FALSE))); ?>>Hindu</option>
								<option value=""<?php echo set_select('agama','Protestan',
								(!empty($this->input->post('agama') && $this->input->post('agama') == 'Protestan' ? TRUE : FALSE))); ?>>Protestan</option>
								<option value="Khonghucu"<?php echo set_select('agama','Khonghucu',
								(!empty($this->input->post('agama') && $this->input->post('agama') == 'Hindu' ? TRUE : FALSE))); ?>>Khonghucu</option>
							</select>
						</td>
					</tr>
					
					<tr>
						<th></th>
						<th></th>
						<td>
							<font style="color:red; font-size:8;
							align:center;"><?= form_error ('agama');
							?></font>
						</td>
					</tr>
						<tr>
							<td colspan="7">
								<hr>
							</td>
						</tr>
					
					<tr>
						<td colspan="3" align="center">
							<input type="Submit" value="Submit">
						</td>
					</tr>
					
				</table>
			</form>
		</center>
	</body>

</html>