		<div id="sm_daftar_fail_klien_detail" title="Sub Modul Pendaftar Fail : Daftar Fail Klien" >
			<div id="tabs">
				<ul>
					<li><a href="#tabs-1">Individu</a></li>
					<li><a href="#tabs-2">Berkelompok</a></li>
				</ul>
				<div id="tabs-1">	
					<p class="validateTips">Semua ruangan adalah wajib diisi.</p>
					<div id="tabs_1">
						<ul>
							<li><a href="#tabs-11">Maklumat Klien</a></li>
							<li><a href="#tabs-12">Tarikh-tarikh Rujukan</a></li>
						</ul>
						<div id="tabs-11">
							<table width="100%">
								<tr>
									<td width="30%">No. MyKad</td>
									<td width="5%">:</td>
									<td width="65%">
										<input type="text" id="klien_nokp"  class="nokp"/>
										<button id="semak_nokp_klien_daftar">Cari</button>
										<!--<img src="libraries/images/icons/semak.png"  class="semak" alt=""/>-->
									</td>
								</tr>
								<tr>
									<td >Nama</td>
									<td >:</td>
									<td ><input type="text" id="nama"  /></td>
								</tr>
								<tr>
									<td>Jenis</td>
									<td>:</td>
									<td><input type="text" id="name"  /></td>
								</tr>
								<tr>
									<td>Perkhidmatan</td>
									<td>:</td>
									<td><input type="text" id="name"  /></td>
								</tr>
								<tr>
									<td>Kementerian/Jabatan</td>
									<td>:</td>
									<td><input type="text"  id="name"  /></td>
								</tr>
								<tr>
									<td colspan="3"><hr/></td>
								</tr>
								<tr>
									<td>Pegawai Psikologi</td>
									<td>:</td>
									<td><input type="text" id="name"  class="nama_kaunselor"/>
										<button id="semak_kaunselor_klien_daftar">Semak</button>
										<!--img src="libraries/images/icons/semak.png" id="sm_semak_takwim_kaunselor" class="semak" alt=""/-->
									</td>
								</tr>
							</table>
						</div>
						<div id="tabs-12">
							<table>
								<tr>
									<td colspan="2">
										<fieldset><legend>Permohonan Diterima</legend>
											<table>
												<tr>
													<td width="36%">Tarikh</td>
													<td width="2%">:</td>
													<td width="62%"><input type="text" id="tkh_klien_terima" class="datesize"/></td>
												</tr>
												<tr>
													<td>Tajuk Surat/Memo</td>
													<td>:</td>
													<td><input type="text" id="name" /></td>
												</tr>
												<tr>
													<td>No. Fail Rujukan Pejabat</td>
													<td>:</td>
													<td><input type="text" id="name" /></td>
												</tr>
											</table>
										</fieldset>
									</td>										
								</tr>
								<tr>
									<td colspan="2">&nbsp;</td>
								</tr>
								<tr>
									<td width="45%">
										<table>
											<tr>
												<td width="46%">Daftar Klien</td>
												<td width="2%">:</td>
												<td width="524%"><input type="text" id="tkh_klien_daftar" class="datesize"/></td>
											</tr>
											<tr>
												<td>Klien Dihubungi</td>
												<td>:</td>
												<td><input type="text" id="tkh_klien_hubungi"  class="datesize"/></td>
											</tr>
											<tr>
												<td>Sesi Dicadangkan</td>
												<td>:</td>
												<td><input type="text" id="tkh_klien_sesi"  class="datesize"/></td>
											</tr>
										</table>
									</td>	
									<td width="55%">
										<table>
											<tr>
												<td width="58%">Dipersetujui Klien</td>
												<td width="2%">:</td>
												<td width="40%"><input type="text" id="tkh_klien_setuju" class="datesize"/></td>
											</tr>
											<tr>
												<td>Surat Jawapan Difaks/ Emel</td>
												<td>:</td>
												<td><input type="text" id="tkh_klien_surat"  class="datesize"/></td>
											</tr>
										</table>	
									</td>	
								</tr>		
							</table>
						</div>
					</div>
				</div>
				<div id="tabs-2">	
					<p class="validateTips">Semua ruangan adalah wajib diisi.</p>
					<fieldset>
						<table width="100%">
							<tr>
								<td width="30%">Nama Pegawai</td>
								<td width="5%">:</td>
								<td width="65%"><input type="text" id="nama_pegawai"/></td>
							</tr>
							<tr>
								<td>Tarikh Daftar</td>
								<td>:</td>
								<td><input type="text" id="tkh_klien_kelompok" class="datesize"  /></td>
							</tr>
						</table>
					</fieldset>	
				</div>
			</div>	
		</div>