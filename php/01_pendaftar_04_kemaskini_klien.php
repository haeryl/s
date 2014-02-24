<!--
	Nama Pengaturcara	: Mohd. Hafidz Bin Abdul Kadir
	Tarikh Dibangunkan	: 08/02/2014
	Tujuan				: Menjana form bagi sub modul Pendaftar Fail bagi mengemaskini fail klien
-->
<!--
	Nama Pengaturcara	: Sharifah Marhiza Bt. Syed Mat Dom
	Tarikh Dibangunkan	: 10/02/2014
	Tujuan				: Create a portion to preview or  edit form
	
	Tarikh Dikemaskini	: 
	Tujuan				: 
-->
<div id="sm_kemaskini_fail_klien_detail" title="Sub Modul Pendaftar Fail : Kemaskini Fail Klien" >
	<!--Untuk paparan bagi rekod kaunselor -->
	<div id="papar_rekod_klien">
		<p class="validateTips">Semua ruangan adalah wajib diisi.</p>
		<div id="t_kemaskini_klien_1">
			<ul>
				<li><a href="#t_kemaskini_klien_11">Maklumat Klien</a></li>
				<li><a href="#t_kemaskini_klien_12">Tarikh-tarikh Rujukan</a></li>
				<li><a href="#t_kemaskini_klien_13">Maklumat Kaunselor</a></li>
			</ul>
			<div id="t_kemaskini_klien_11">
				<table width="100%">
					<tr>
						<td width="30%">No. MyKad</td>
						<td width="5%">:</td>
						<td width="65%">791207086360</td>
					</tr>
					<tr>
						<td >Nama</td>
						<td >:</td>
						<td >apapa je la</td>
					</tr>
					<tr>
						<td>Jenis</td>
						<td>:</td>
						<td>perempuan</td>
					</tr>
					<tr>
						<td>Perkhidmatan</td>
						<td>:</td>
						<td>blah blah blah</td>
					</tr>
					<tr>
						<td>Kementerian/Jabatan</td>
						<td>:</td>
						<td>JPA</td>
					</tr>
					<tr>
						<td colspan="3"><hr/></td>
					</tr>
					<tr>
						<td>Pegawai Psikologi</td>
						<td>:</td>
						<td>MOHD ATAN ALI</td>
					</tr>
				</table>
			</div>
			<div id="t_kemaskini_klien_12">
				<table>
					<tr>
						<td colspan="2">
							<fieldset><legend>Permohonan Diterima</legend>
								<table>
									<tr>
										<td width="36%">Tarikh</td>
										<td width="2%">:</td>
										<td width="62%">12.01.2014</td>
									</tr>
									<tr>
										<td>Tajuk Surat/Memo</td>
										<td>:</td>
										<td>PSIKO</td>
									</tr>
									<tr>
										<td>No. Fail Rujukan Pejabat</td>
										<td>:</td>
										<td>PSIKO123</td>
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
									<td width="524%">12.01.2014</td>
								</tr>
								<tr>
									<td>Klien Dihubungi</td>
									<td>:</td>
									<td>12.01.2014</td>
								</tr>
								<tr>
									<td>Sesi Dicadangkan</td>
									<td>:</td>
									<td>12.01.2014</td>
								</tr>
							</table>
						</td>	
						<td width="55%">
							<table>
								<tr>
									<td width="58%">Dipersetujui Klien</td>
									<td width="2%">:</td>
									<td width="40%">12.01.2014</td>
								</tr>
								<tr>
									<td>Surat Jawapan Difaks/ Emel</td>
									<td>:</td>
									<td>12.01.2014</td>
								</tr>
							</table>	
						</td>	
					</tr>		
				</table>
			</div>
			<div id="t_kemaskini_klien_13">
				<table>
					<tr>
						<td colspan="3">
								<div id="r_kemaskini_klien">
									Dirujuk kepada pegawai psikologi lain? &nbsp; TIDAK
								</div>
						</td>										
					</tr>
				</table>
				<div id="kemaskini_klien"> 
					<table>
						<tr>
							<td colspan="3"><hr/></td>
						</tr>
						<tr>
							<td width="46%">Daftar Klien</td>
							<td width="2%">:</td>
							<td width="52%">12.01.2014</td>
						</tr>
						<tr>
							<td>Klien Dihubungi</td>
							<td>:</td>
							<td>12.01.2014</td>
						</tr>
						<tr>
							<td>Sesi Dicadangkan</td>
							<td>:</td>
							<td>12.01.2014</td>
						</tr>
						<tr>
							<td width="58%">Dipersetujui Klien</td>
							<td width="2%">:</td>
							<td width="40%">12.01.2014</td>
						</tr>
						<tr>
							<td>Surat Jawapan Difaks/ Emel</td>
							<td>:</td>
							<td>12.01.2014</td>
						</tr>
					</table>
				</div>			
			</div>
		</div>
	</div>
	<!--Tutup untuk paparan bagi rekod kaunselor -->
	<!-- Untuk Kemaskini bagi rekod kaunselor -->
	<div id="kemaskini_rekod_klien">
		<p class="validateTips">Semua ruangan adalah wajib diisi.</p>
		<div id="t_kemaskini_klien_2">
			<ul>
				<li><a href="#t_kemaskini_klien_21">Maklumat Klien</a></li>
				<li><a href="#t_kemaskini_klien_22">Tarikh-tarikh Rujukan</a></li>
				<li><a href="#t_kemaskini_klien_23">Maklumat Kaunselor</a></li>
			</ul>
			<div id="t_kemaskini_klien_21">
				<table width="100%">
					<tr>
						<td width="30%">No. MyKad</td>
						<td width="5%">:</td>
						<td width="65%">
							<input type="text" id="klien_nokp"  class="nokp"/>
							<button id="semak_nokp_klien_kemaskini">Semak</button>
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
							<button id="semak_kaunselor_klien_kemaskini">Semak</button>
						</td>
					</tr>
				</table>
			</div>
			<div id="t_kemaskini_klien_22">
				<table>
					<tr>
						<td colspan="2">
							<fieldset><legend>Permohonan Diterima</legend>
								<table>
									<tr>
										<td width="36%">Tarikh</td>
										<td width="2%">:</td>
										<td width="62%"><input type="text" id="tkh_kemaskini_klien_terima" class="datesize"/></td>
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
									<td width="524%"><input type="text" id="tkh_kemaskini_klien_daftar" class="datesize"/></td>
								</tr>
								<tr>
									<td>Klien Dihubungi</td>
									<td>:</td>
									<td><input type="text" id="tkh_kemaskini_klien_hubungi"  class="datesize"/></td>
								</tr>
								<tr>
									<td>Sesi Dicadangkan</td>
									<td>:</td>
									<td><input type="text" id="tkh_kemaskini_klien_sesi"  class="datesize"/></td>
								</tr>
							</table>
						</td>	
						<td width="55%">
							<table>
								<tr>
									<td width="58%">Dipersetujui Klien</td>
									<td width="2%">:</td>
									<td width="40%"><input type="text" id="tkh_kemaskini_klien_setuju" class="datesize"/></td>
								</tr>
								<tr>
									<td>Surat Jawapan Difaks/ Emel</td>
									<td>:</td>
									<td><input type="text" id="tkh__kemaskini_klien_surat"  class="datesize"/></td>
								</tr>
							</table>	
						</td>	
					</tr>		
				</table>
			</div>
			<div id="t_kemaskini_klien_23">
				<table>
					<tr>
						<td colspan="3">
								<div id="r_kemaskini_klien">
									Dirujuk kepada pegawai psikologi lain? &nbsp;
									<input type="radio" id="r_kemaskini_klien_1" name="radio" /><label for="r_kemaskini_klien_1">YA</label>
									<input type="radio" id="r_kemaskini_klien_2" name="radio" checked="checked"/><label for="r_kemaskini_klien_2">TIDAK</label>
								</div>
						</td>										
					</tr>
				</table>
				<fieldset id="kaunselor_baru">
					<table>
						<tr>
							<td width="40%">Pegawai Kaunselor</td>
							<td width="5%">:</td>
							<td width="65%">
								<select id="pegawai_kaunselor">
									<option value="0">- - - Sila Pilih - - -</option>
									<option value="1">atan</option>
									<option value="2">ali</option>
								</select>
							</td>
						</tr>
						<tr>
							<td width="40%">Ulasan / Sebab</td>
							<td width="5%">:</td>
							<td cols="4"><textarea id="sebab"></textarea></td>
						</tr>
						<tr>
							<td style="vertical-align:middle">Status Klien</td>
							<td style="vertical-align:middle">:</td>
							<td>
								<div id="status_radio">
									<input type="radio" id="status_radio_31" name="radio" value="1" /><label for="status_radio_31">Aktif</label>
									<input type="radio" id="status_radio_32" name="radio" value="2"/><label for="status_radio_32">Tidak Aktif</label>
								</div>
							</td>
						</tr>
						<tr>
							<td width="36%">Tarikh Dirujuk</td>
							<td width="2%">:</td>
							<td><input type="text" id="tkh_kemaskini_dirujuk" class="datesize"/></td>
						</tr>
					</table>
					<p>Jika klien dirujuk kepada pegawai kaunselor lain atau fail klien adalah ditutup, sila berikan sebab</p>
				</fieldset>		
			</div>
		</div>

	</div>
	<!--Tutup Kemaskini  bagi rekod kaunselor -->

</div>