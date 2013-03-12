		<div id="system-content">	
			<div class="topline-content"></div>
			<div class="margin-contentmenu">
				<ul class="content-submenu">				
					<a href="<?php echo base_url(); ?>skripsi/getuploadproposal"><li id="tab" class="current">Upload Proposal</li></a>
					<a href="<?php echo base_url(); ?>skripsi/getbimbingan"><li id="tab">Proses Bimbingan</li></a>
					<a href="<?php echo base_url(); ?>skripsi/getdfraft"><li id="end-tab">Upload Draft</li></a>
					</ul>					
			</div>
			<div id="content-space">
				<div id="space">
					<div class="content-value">
						<form class="form-horizontal">
							<div class="control-group">
								<label class="control-label" for="inputEmail">Masukkan Proposal Skripsi</label>
								<div class="controls">
									<div id="input-file">
										<input type="file" name="file"/>
									</div>
								</div>
							</div>							
							<div class="control-group">
								<label class="control-label"></label>
								<div class="controls">
									<input class="btn" type="submit" value="Kirim Laporan">
								</div>
							</div>
							<div class="control-group">
								<label class="control-label">Status Proposal Terakhir</label>
								<div class="controls">
									<div class="statussudah">Disetujui</div>
								</div>
							</div>
						</form>
						<div id="separate" ></div>
						<table class="table table-bordered table-hover">
							<tr>
								<th width="10px"><center>No</center></th>
								<th><center>File Proposal</center></th>
								<th><center>Tanggal Upload</center></th>
								<th width="125px"><center>Status Proposal</center></th>
							</tr>							
							<tr class="error">
								<td><center>1</center></td>
								<td>Aplikasi Android</td>
								<td><center>10 Mei 2013</center></td>
								<td><center>Ditolak</center></td>
							</tr>
							<tr class="error">
								<td><center>2</center></td>
								<td>Aplikasi Web</td>
								<td><center>15 Mei 2013</center></td>
								<td><center>Ditolak</center></td>
							</tr>
							<tr class="success">
								<td><center>3</center></td>
								<td>Rancang Bangun Sistem Informasi</td>
								<td><center>21 Mei 2013</center></td>
								<td><center>Disetujui</center></td>
							</tr>
						</table>													
					</div>					
				</div>					
			</div>
		</div>
	</div>