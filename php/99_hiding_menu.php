			<div id="top-panel" class="open">
				<div class="row">
					<div class="top-panel-inner">
						<div id="hiding_menu_01" >
							<!--div class="three columns">
								<div class="top-login">
									<h3>Daftar Masuk</h3>
									<form name="loginform" id="loginform" action="" method="post">
										<input type="text" name="log" id="user_login" class="input" value="" size="20" tabindex="10" placeholder="Masukkan No. Mykad anda"/>
										<input type="password" name="pwd" id="user_pass" class="input" value="" size="20" tabindex="20" placeholder="Masukkan katalaluan anda"/>
										<div class="links">
											<!--a class="submit" href="#" name="wp-submit">Tekan [ENTER] untuk capai sistem</a><br/><br/-->
											<!--a href="#" name="wp-submit">Tekan [ENTER] untuk capai sistem</a><br/><br/>
											Lupa katalaluan, klik di [<b>SINI</b>]<br/><br/>
											<a href="#"  id="papar_profil_pengguna_slide"/>Lihat Profil Pengguna [<b>SINI</b>]</a>
											<!--input type="submit" style="width:0; height: 0; overflow: hidden; padding: 0; border: none" hidden="hidden" -->
										<!--/div>
									</form>
								</div>
							</div-->
							<div class="offset-by-one top-text">
								<div class="icon"><img src="libraries/images/icons/top-panel-icon.png" alt="" /></div>
								<div class="subtitle">Utiliti Pengguna eSPKKPA</div>
								<div class="title">Kemudahan Pengguna</div>
								<style type="text/css">
										#papar_profil_pengguna table{
										background-color:#50b4e6 !important;
										border:0px;
										width:100%;										
										}
										#papar_profil_pengguna table tr{
										background-color:#50b4e6 !important;
										}
										#papar_profil_pengguna table td{
										background-color:#50b4e6 !important;
										}
										#papar_profil_pengguna fieldset{
										background-color:#50b4e6 !important;
										padding-bottom:4px;
										margin-bottom:2px;
										margin-right:50px;
										}
										#papar_profil_pengguna legend{
										background-color:#50b4e6 !important;
										}
										#kemaskini_profil_pengguna fieldset{
										background-color:#50b4e6 !important;
										padding-bottom:4px;
										margin-bottom:2px;
										margin-right:50px;
										}
										#kemaskini_profil_pengguna legend{
										background-color:#50b4e6 !important;
										}
										#kemaskini_profil_pengguna label{
										margin-top:1px;
										}
										/*setting untuk labeling if using div*/
										.label_field{width:48%; color:white; text-transform:capitalize; cursor:default; margin-bottom:1px; vertical-align:top;}
										.label_separate{width:2%; cursor:default; margin-bottom:1px; vertical-align:top;}
										.label_value{color:black; text-transform:capitalize; cursor:default; margin-bottom:1px;}
										.label_emel{text-transform:lowercase}
										/*.label_value{width:20%;}*/
										
										#btn_kemaskini_profile_kemaskini{display:none;}
										#btn_kemaskini_profile_simpan{display:none;}
										#btn_kemaskini_profile_batal{display:none;}
								</style>
								<div style="float:right; margin-right:60px;">
										<button id="btn_kemaskini_profile_kemaskini">Kemaskini</button>
										<button id="btn_kemaskini_profile_simpan">Simpan</button>
										<button id="btn_kemaskini_profile_batal">Batal</button>
								</div><br /><br />
								<p class="validateTips" style="margin-right:60px;"></p>
								<!--Buka paparan bagi profil pengguna -->
								<div id="papar_profil_pengguna" style="display:none; width:100%">
									<fieldset><legend>Maklumat Katalaluan</legend>
										<table>
											<tr>
												<td>Katalaluan semasa</td>
												<td>:</td>
												<td>********</td>
											</tr>
											<tr>
												<td>Katalaluan baru</td>
												<td>:</td>
												<td>*****</td>
											</tr>
											<tr>
												<td width="30%">Jenis Pengguna</td>
												<td width="5%">:</td>
												<td width="65%">Pendaftar Fail</td>
											</tr>
										</table>
									</fieldset>
									<fieldset><legend>Maklumat Profil</legend>
										<div class="user_profile"style="float:left; width:50%;" >
											<label class="label_field">No KP</label>
											<label class="label_separate">:</label>
											<label class="label_value">859291348171</label>
											<label class="label_field">Nama</label>
											<label class="label_separate">:</label>
											<label class="label_value">Amirah Bt Hassan</label>
											<label class="label_field">Umur</label>
											<label class="label_separate">:</label>
											<label class="label_value">35</label>
											<label class="label_field">Emel</label>
											<label class="label_separate">:</label>
											<label class="label_value label_emel">amirah@jpa.gov.my</label>
											<label class="label_field">No Tel</label>
											<label class="label_separate">:</label>
											<label class="label_value">01212121212</label>
											<label class="label_field">Tarikh Daftar</label>
											<label class="label_separate">:</label>
											<label class="label_value">12.01.2014</label>
											<label class="label_field">Tarikh Akhir Kemaskini</label>
											<label class="label_separate">:</label>
											<label class="label_value">12.01.2014</label>										
										</div>
										<div style="float:left; width:50%;">
											<label class="label_field">Jantina</label>
											<label class="label_separate">:</label>
											<label class="label_value">Lelaki</label>
											<label class="label_field">Klasifikasi Perkhidmatan</label>
											<label class="label_separate">:</label>
											<label class="label_value">Sistem Maklumat</label>
											<label class="label_field">Kump Jawatan</label>
											<label class="label_separate">:</label>
											<label class="label_value">Pelaksana</label>
											<label class="label_field">Gred Jawatan</label>
											<label class="label_separate">:</label>
											<label class="label_value">29</label>
											<label class="label_field">Kementerian/Agensi</label>
											<label class="label_separate">:</label>
											<label class="label_value">KPKT</label>
										</div>
									</fieldset>
									<br/>
								</div>
								<!--Tutup untuk paparan bagi profil_pengguna -->
								<!--Buka Kemaskini bagi profil_pengguna -->
								<div id="kemaskini_profil_pengguna" style="display:none; margin-right:60px;">
									<div>
										<fieldset><legend>Maklumat Katalaluan</legend>
											<label class="label_field" style="vertical-align:top;">Katalaluan semasa</label>
											<label class="label_separate" style="vertical-align:top;">:</label>
											<label class="label_value"><input type="text" id="katalaluan_semasa" value="" /></label>
											<label class="label_field">Katalaluan baru</label>
											<label class="label_separate">:</label>
											<label class="label_value"><input type="text" id="katalaluan_baru" value="" /></label>
											<label class="label_field">Jenis Pengguna</label>
											<label class="label_separate">:</label>
											<label class="label_value label_emel"><input type="text" id="jenis_pengguna" value="" /></label>
										</fieldset>
									</div>
									<br />
									<fieldset><legend>Maklumat Profil</legend>
										<div class="user_profile" style="float:left; width:50%;">
											<label class="label_field">No KP</label>
											<label class="label_separate">:</label>
											<label class="label_value"><input type="text" id="no_kp" value="" class="nokp" /></label>
											<label class="label_field">Nama</label>
											<label class="label_separate">:</label>
											<label class="label_value"><input type="text" id="nama" value="" /></label>
											<label class="label_field">Umur</label>
											<label class="label_separate">:</label>
											<label class="label_value"><input type="text" id="umur" value="" /></label>
											<label class="label_field">Emel</label>
											<label class="label_separate">:</label>
											<label class="label_value label_emel"><input type="text" id="emel" value="" /></label>
											<label class="label_field">No Tel</label>
											<label class="label_separate">:</label>
											<label class="label_value"><input type="text" id="notel" value="" /></label>
											<label class="label_field">Tarikh Daftar</label>
											<label class="label_separate">:</label>
											<label class="label_value"><input type="text" id="tkh_daftar" value=""  class="datesize"/></label>
											<label class="label_field">Tarikh Akhir Kemaskini</label>
											<label class="label_separate">:</label>
											<label class="label_value"><input type="text" id="tkh_akh_kemas" value="" class="datesize" /></label>
										</div>
										<div style="float:left; width:50%;">
											<label class="label_field">Jantina</label>
											<label class="label_separate">:</label>
											<label class="label_value">Lelaki</label>
											<label class="label_field">Klasifikasi Perkhidmatan</label>
											<label class="label_separate">:</label>
											<label class="label_value">Sistem Maklumat</label>
											<label class="label_field">Kump Jawatan</label>
											<label class="label_separate">:</label>
											<label class="label_value">Pelaksana</label>
											<label class="label_field">Gred Jawatan</label>
											<label class="label_separate">:</label>
											<label class="label_value">29</label>
											<label class="label_field">Kementerian/Agensi</label>
											<label class="label_separate">:</label>
											<label class="label_value">KPKT</label>
										</div>
									</fieldset>
								</div>
								<!--Tutup Kemaskini  bagi profil_pengguna -->
								<div id="info_profil_pengguna">
									<ul>Makluman<br/>
									<li>Sistem ini menyediakan pelbagai kemudahan kaunseling bagi semua kakitangan awam yang berminat dan memerlukan perkhidmatan ini.</li>
									<li>Anda boleh membuat capaian terhadap sistem di ruangan DAFTAR MASUK dengan memasukkan No. MyKad dan katalaluan masing-masing.</li>
									<li>Sekiranya anda menghadapi masalah untuk mendapatkan katalaluan, maklumat tersebut bolehlah diperolehi dengan memasukkan maklumat No. MyKad di ruangan LUPA KATALALUAN.</li>									
								</ul>
								<a href="#"  id="papar_profil_pengguna_slide"/>Lihat Profil Pengguna [<b>SINI</b>]</a><br /><br />
								</div>
							</div>
						</div>
						<div id="hiding_menu_02" style="display:none">
							<div class="eight columns offset-by-one top-text">
								<div class="icon"><img src="libraries/images/icons/top-panel-icon.png" alt="" /></div>
								<div class="subtitle">Utiliti Pengguna eSPKKPA</div>
								<div class="title">Kemudahan Pengguna</div>
								<ul>Makluman<br/>
								<li>Sistem ini menyediakan pelbagai kemudahan kaunseling bagi semua kakitangan awam yang berminat dan memerlukan perkhidmatan ini.</li>
								<li>Anda boleh membuat capaian terhadap sistem di ruangan DAFTAR MASUK dengan memasukkan No. MyKad dan katalaluan masing-masing.</li>
								<li>Sekiranya anda menghadapi masalah untuk mendapatkan katalaluan, maklumat tersebut bolehlah diperolehi dengan memasukkan maklumat No. MyKad di ruangan LUPA KATALALUAN.</li>									
								</ul>
							</div>
						</div>
					</div>
					<a id="open-top-panel" href="#">
						<img class="top-panel-closed" src="libraries/images/plus.gif" alt="open" />
						<img class="top-panel-opened" src="libraries/images/minus.gif" alt="close" />
					</a>
				</div>
			</div>