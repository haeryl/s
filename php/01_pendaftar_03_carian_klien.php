<!--
	Nama Pengaturcara	: Mohd. Hafidz Bin Abdul Kadir
	Tarikh Dibangunkan	: 04/02/2014
	Tujuan				: Menjana form bagi sub modul Pendaftar Fail bagi menjana carian fail klien
-->
<div id="sm_carian_fail_klien_detail" title="Sub Modul Pendaftar Fail : Kemaskini Fail Klien">
	<fieldset><legend>Kemudahan Carian</legend>	
		<table width="100%">
			<tr><td width="30%">Pilihan Carian</td>
				<td width="5%">:</td>
				<td width="65%">
					<select id="jenis_carian">
						<option value="0">- - - Sila Pilih - - -</option>
						<option value="1">No. Fail</option>
						<option value="2">MyKad Klien</option>
						<option value="3">Nama Kaunselor</option>
						<option value="4">Status Klien</option>
						<option value="5">Tarikh Fail ISO</option>
					</select>&nbsp;<button id="sm_carian_fail_klien_jana">Jana Carian</button>
				</td>
			</tr>
			<tr id="carian_divider"><td colspan="3"><hr/></td></tr>
			<tr id="carian_nofail"><td >No. Fail</td>
				<td >:</td>
				<td ><input type="text" id="nama"  /></td>
			</tr>
			<tr id="carian_mykad"><td>No. MyKad Klien</td>
				<td>:</td>
				<td><input type="text" id="klien_nokp" class="nokp"/></td>
			</tr>
			<tr id="carian_kaunselor"><td>Nama Kaunselor</td>
				<td>:</td>
				<td><select>
						<option value="0">- - - Sila Pilih - - -</option>
						<option value="1">Abu</option>
						<option value="2">Ali</option>
						<option value="3">Apis</option>
						<option value="4">Muhammad Hafidz Bin Abdul Kadir</option>
						<option value="5">Muhammad Fahmy Iskandar Bin Mohd. Hafidz</option>
					</select>
				</td>
			</tr>
			<tr id="carian_status"><td style="vertical-align:middle">Status Klien</td>
				<td style="vertical-align:middle">:</td>
				<td>
					<div id="radio">
						<input type="radio" id="radio1" name="radio" /><label for="radio1">Aktif</label>
						<input type="radio" id="radio2" name="radio" /><label for="radio2">Tamat</label>
					</div>
				</td>
			</tr>
			<tr id="carian_iso"><td style="vertical-align:middle">Tarikh Fail ISO</td>
				<td style="vertical-align:middle">:</td>
				<td><input type="text" id="tkh_iso_mula" class="datesize"/> sehingga <input type="text" id="tkh_iso_tamat"  class="datesize"/></td>
			</tr>
		</table>
	</fieldset>
	<div id="sm_carian_fail_klien_keputusan">
		<br/>	
		<fieldset><legend>Keputusan Carian</legend>	
			<div id="" style="border: solid 1px #0066FF;">
				<table id="mt" cellpadding="0" cellspacing="0" border="0" class="table">
					<tr class="header">
						<th width="50%">
							No. Fail
						</th>
						<th width="10%">
							Tarikh Daftar
						</th>
						<th width="10%">
							Status Fail
						</th>
						<th width="10%">
							Status Klien
						</th>
						<th width="10%">
							Catatan
						</th>
					</tr>
					<tr>
						<td><a href="#" id="kemaskini_fail_klien">JPA(S)K01/6358/2014- ATAN ALI</a></td>
						<td >23/01/2014</td>
						<td>Belum Direkod</td>
						<td>Aktif</td>
						<td>04</td>
					</tr>
					<tr>
						<td>JPA(S)K01/6358/2014- ALI ATAN</td>
						<td>23/01/2014</td>
						<td>Belum Direkod</td>
						<td>Aktif</td>
						<td>04</td>
					</tr>
					<tr>
						<td>JPA(S)K01/6358/2014- SAMSUDIN</td>
						<td>23/01/2014</td>
						<td>Belum Direkod</td>
						<td>Aktif</td>
						<td>04</td>
					</tr>
					<tr>
						<td>JPA(S)K01/6358/2014- ABU ALI</td>
						<td>23/01/2014</td>
						<td>Belum Direkod</td>
						<td>Aktif</td>
						<td>04</td>
					</tr>
					<tr>
						<td>JPA(S)K01/6358/2014- ATAN ABU</td>
						<td>23/01/2014</td>
						<td>Belum Direkod</td>
						<td>Aktif</td>
						<td>04</td>
					</tr>
					<tr>
						<td>JPA(S)K01/6358/2014- MUTHUSAMY</td>
						<td >23/01/2014</td>
						<td>Belum Direkod</td>
						<td>Aktif</td>
						<td>04</td>
					</tr>
					<tr>
						<td>JPA(S)K01/6358/2014- AZIZ SATAR</td>
						<td>23/01/2014</td>
						<td>Belum Direkod</td>
						<td>Aktif</td>
						<td>04</td>
					</tr>
					<tr>
						<td>JPA(S)K01/6358/2014- AH SENG</td>
						<td>23/01/2014</td>
						<td>Belum Direkod</td>
						<td>Aktif</td>
						<td>04</td>
					</tr>
					<tr>
						<td>JPA(S)K01/6358/2014- ALI BABA</td>
						<td>23/01/2014</td>
						<td>Belum Direkod</td>
						<td>Aktif</td>
						<td>04</td>
					</tr>
					<tr>
						<td>JPA(S)K01/6358/2014- KASIM BABA</td>
						<td>23/01/2014</td>
						<td>Belum Direkod</td>
						<td>Aktif</td>
						<td>04</td>
					</tr>
					<tr>
						<td>JPA(S)K01/6358/2014- ATAN ALI</td>
						<td >23/01/2014</td>
						<td>Belum Direkod</td>
						<td>Aktif</td>
						<td>04</td>
					</tr>
					<tr>
						<td>JPA(S)K01/6358/2014- SALMAH AHMAD</td>
						<td>23/01/2014</td>
						<td>Belum Direkod</td>
						<td>Aktif</td>
						<td>04</td>
					</tr>
					<tr>
						<td>JPA(S)K01/6358/2014- SARJAN HASSAN</td>
						<td>23/01/2014</td>
						<td>Belum Direkod</td>
						<td>Aktif</td>
						<td>04</td>
					</tr>
					<tr>
						<td>JPA(S)K01/6358/2014- ABU HASSAN</td>
						<td>23/01/2014</td>
						<td>Belum Direkod</td>
						<td>Aktif</td>
						<td>04</td>
					</tr>
					<tr>
						<td>JPA(S)K01/6358/2014- KASIM SELAMAT</td>
						<td>23/01/2014</td>
						<td>Belum Direkod</td>
						<td>Aktif</td>
						<td>04</td>
					</tr>
				</table>
				<div id="paging" style="margin: auto;"></div>
			</div>
		</fieldset>
	</div>		
</div>