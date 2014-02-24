/*
	Nama Pengaturcara	: Mohd. Hafidz Bin Abdul Kadir
	Tarikh Dibangunkan	: 05/02/2014
	Tujuan				: Menjana kawalan form, tabs, validation dan paging
*/
/*
	Nama Pengaturcara	: Sharifah Marhiza Bt. Syed Mat Dom
	Tarikh Dibangunkan	: 07/02/2014
	Tujuan				: Call dialog box to appear control by radiobutton,
						  Show and hide button kemaskini, batal and simpan - appear the messagebox
						  
    Tarikh Dikemaskini	: 11/02/2014
	Tujuan				: Edit again to declare button and trigger to a specific event
	
	Tarikh Dikemaskini	: 14/02/2014
	Tujuan				: Mula panggil div open profil pengguna
	
*/

$(function() {
	
	//****************Mula Form's Control****************//
	$( "#radio" ).buttonset();
	$( "#r_kemaskini_klien" ).buttonset();
	$( "#status_radio" ).buttonset();
	
	
	$('#paging')
		.smartpaginator({ 
			totalrecords: 15, 
			recordsperpage: 5, 
			datacontainer: 'mt', 
			dataelement: 'tr', 
			initval: 0, 
			next: 'Next', 
			prev: 'Prev', 
			first: 'First', 
			last: 'Last', 
			theme: 'green' 
		});
	
	$( "#tabs" ).tabs();
	$( "#tabs_1" ).tabs();
	$( "#tabs_2" ).tabs();
	$( "#t_kemaskini_klien_1" ).tabs();	
	$( "#t_kemaskini_klien_2" ).tabs();
	
	$( "input[type=submit], button" )
		.button()
		.click(function( event ) {
			event.preventDefault();
		});
	
	//disable rightclick...
	$(document).bind("contextmenu",function(e){
		return false;
	});
	//****************Tamat Form's Control****************//
	
	//****************Mula Tarikh****************//	
	$.datepicker.setDefaults({
		showOn: 'button', 
		buttonImageOnly: true, 
		buttonImage: 'libraries/images/icons/calendar.gif', 
		buttonText: 'Kalendar'				
	});
	$( "#tkh_klien_terima" ).datepicker();
	$( "#tkh_klien_daftar" ).datepicker();
	$( "#tkh_klien_hubungi" ).datepicker();
	$( "#tkh_klien_sesi" ).datepicker();
	$( "#tkh_klien_setuju" ).datepicker();
	$( "#tkh_klien_surat" ).datepicker();
	$( "#tkh_klien_kelompok" ).datepicker();
	$( "#tkh_iso_mula" ).datepicker();
	$( "#tkh_iso_tamat" ).datepicker();
	
	
	$( "#tkh_kemaskini_klien_terima" ).datepicker();
	$( "#tkh_kemaskini_klien_daftar" ).datepicker();
	$( "#tkh_kemaskini_klien_hubungi" ).datepicker();
	$( "#tkh_kemaskini_klien_sesi" ).datepicker();
	$( "#tkh_kemaskini_klien_setuju" ).datepicker();
	$( "#tkh__kemaskini_klien_surat" ).datepicker();
	$( "#tkh_kemaskini_klien_daftar2" ).datepicker();
	$( "#tkh_kemaskini_klien_hubungi2" ).datepicker();
	$( "#tkh_kemaskini_klien_sesi2" ).datepicker();
	$( "#tkh_kemaskini_klien_setuju2" ).datepicker();
	$( "#tkh_kemaskini_klien_surat2" ).datepicker();
	
	$( "#tkh_kemaskini_daftar" ).datepicker();
	$( "#tkh_akhir_kemaskini" ).datepicker();
	
	
	
	//****************Tamat Tarikh****************//
	
	//****************Mula Form's Validation****************//
	var name = $( "#name" ),
	email = $( "#email" ),
	password = $( "#password" ),
	allFields = $( [] ).add( name ).add( email ).add( password ),
	tips = $( ".validateTips" );
	
	
	//Untuk memaparkan mesej  rekod berjaya disimpan
	function message(t){
		tips
		.text(t)
		.addClass( "ui-state-highlight" );
		setTimeout(function() {
			tips.removeClass( "ui-state-highlight",0);
			tips.text("");
		}, 2000 );
	}
	function updateTips( t ) {
		tips
		.text( t )
		.addClass( "ui-state-highlight" );
		setTimeout(function() {
			tips.removeClass( "ui-state-highlight", 1500 );
		}, 500 );
	}

	function checkLength( o, n, min, max ) {
		if ( o.val().length > max || o.val().length < min ) {
			o.addClass( "ui-state-error" );
			updateTips( "Length of " + n + " must be between " +
			min + " and " + max + "." );
			return false;
		} else {
			return true;
		}
	}

	function checkRegexp( o, regexp, n ) {
		if ( !( regexp.test( o.val() ) ) ) {
			o.addClass( "ui-state-error" );
			updateTips( n );
			return false;
		} else {
			return true;
		}
	}
	//****************Tamat Form's Validation****************//
	
	//****************Mula Daftar Klien****************//
	$( "#sm_daftar_fail_klien_detail" )
		.dialog({
			autoOpen: false,
			height: "auto",
			width: 700,
			modal: true,
			/*buttons: {
				"Daftar": function() {
					/*
					var bValid = true;
					allFields.removeClass( "ui-state-error" );
					bValid = bValid && checkLength( name, "username", 3, 16 );
					bValid = bValid && checkLength( email, "email", 6, 80 );
					bValid = bValid && checkLength( password, "password", 5, 16 );
					bValid = bValid && checkRegexp( name, /^[a-z]([0-9a-z_])+$/i, "Username may consist of a-z, 0-9, underscores, begin with a letter." );
					// From jquery.validate.js (by joern), contributed by Scott Gonzalez: http://projects.scottsplayground.com/email_address_validation/
					bValid = bValid && checkRegexp( email, /^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i, "eg. ui@jquery.com" );
					bValid = bValid && checkRegexp( password, /^([0-9a-zA-Z])+$/, "Password field only allow : a-z 0-9" );
					if ( bValid ) {
						$( "#users tbody" ).append( "<tr>" +
						"<td>" + name.val() + "</td>" +
						"<td>" + email.val() + "</td>" +
						"<td>" + password.val() + "</td>" +
						"</tr>" );
						$( this ).dialog( "close" );
					}
					*/
					/*$( "#sm_daftar_fail_klien_mesej_1" ).dialog( "open" );
				},
				"Batal": function() {
					$( this ).dialog( "close" );
					$("#sm_daftar_fail_klien_detail :input").each(function(){
						$(this).val('');
					});
				}
			}, */
			buttons: {
				"Daftar": {
					//Untuk labelkan button
					text:"Daftar",
					//Declare id button
					id:"btn_daftar_fail_klien_detail_daftar",
					//button trigger
					click:function(){
						$( "#sm_daftar_fail_klien_mesej_1" ).dialog( "open" );
					}
				},
				"Batal": {
					//Untuk labelkan button
					text:"Batal",
					//Declare id button
					id:"btn_daftar_fail_klien_detail_batal",
					//button trigger
					click:function(){
						$( this ).dialog( "close" );
						$("#sm_daftar_fail_klien_detail :input").each(function(){
								$(this).val('');
						});
					}
				}
			},
			open: function() {
				//add icons for each buttons...
                    $('#btn_daftar_fail_klien_detail_daftar').button({
						icons: {
							primary: 'ui-icon-key'
						}
					});
                    $('#btn_daftar_fail_klien_detail_batal').button({
						icons: {
							primary: 'ui-icon-scissors'
						}
					});	
			}, 
			close: function() {
				allFields.val( "" ).removeClass( "ui-state-error" );
			}
		});
	
	$( "#sm_daftar_fail_klien" )
		.click(function() {
			$( "#sm_daftar_fail_klien_detail" ).dialog( "open" );
			$(".ui-dialog-titlebar-close").hide();
		});
	$( "#sm_daftar_fail_klien_detail" )
		.bind('keydown keyup', function(e) {
			//esc key...
			if (e.which == 27){ 
				 console.log('blocked');
				return false;
			}
			if(e.which === 82 && e.ctrlKey) {
			   console.log('blocked');
			   return false;
			}
			//f5 key...	
			if(e.which === 116) {
			   console.log('blocked');
			   return false;
			}
		});

	$( "#semak_nokp_klien_daftar" )
		.button({
		   icons: {
			  primary: "ui-icon-folder-open"
		   }, 
		   text: false
		});	
	$( "#semak_kaunselor_klien_daftar" )
		.button({
		   icons: {
			  primary: "ui-icon-folder-open"
		   }, 
		   text: false
		})
		.click(function() {
			$( "#takwim_kaunselor" ).dialog( "open" );
		});
		
		
	//****************Tamat Daftar Klien****************//
	
	//****************Mula Takwim Kaunselor****************//
	$( "#takwim_kaunselor" )
		.dialog({
			autoOpen: false,
			height: 450,
			width: 650,
			modal: true,
			closeText: "Tutup"
		});
	$( "#takwim_kaunselor" )
		.bind('keydown keyup', function(e) {
			//esc key...
			if (e.which == 27){ 
				 console.log('blocked');
				return false;
			}
			if(e.which === 82 && e.ctrlKey) {
			   console.log('blocked');
			   return false;
			}
			//f5 key...	
			if(e.which === 116) {
			   console.log('blocked');
			   return false;
			}
		});
	//****************Tamat Takwim Kaunselor****************//	
	
	//****************Mula Carian****************//
	$( "#sm_carian_fail_klien_detail" )
		.dialog({
			autoOpen: false,
			height: "auto",
			width: 700,
			modal: true,
			closeText: "Tutup",
			close: function() {
				//hapuskan semua nilai carian...
				$("#jenis_carian").val('');
				$( "#carian_nofail" ).val('');
				$( "#carian_mykad" ).val('');
				$( "#carian_kaunselor" ).val('');
				$( "#carian_status" ).val('');
				$( "#carian_iso" ).val('');
				//sembunyikan semua jenis dan hasil carian...
				$( "#carian_divider" ).hide();	
				$( "#carian_nofail" ).hide();
				$( "#carian_mykad" ).hide();
				$( "#carian_kaunselor" ).hide();
				$( "#carian_status" ).hide();
				$( "#carian_iso" ).hide();
				$( "#sm_carian_fail_klien_keputusan" ).hide( );	
			}
		});	
	
	//default state...
	$( "#carian_divider" ).hide();	
	$( "#carian_nofail" ).hide();
	$( "#carian_mykad" ).hide();
	$( "#carian_kaunselor" ).hide();
	$( "#carian_status" ).hide();
	$( "#carian_iso" ).hide();
	$( "#sm_carian_fail_klien_keputusan" ).hide( );
	
	function papar_jenis_carian() {
		
		var jenis_carian = $( "#jenis_carian" ).val();

		switch(jenis_carian){
			case "0": 
				$( "#carian_divider" ).hide();
				$( "#carian_nofail" ).hide();
				$( "#carian_mykad" ).hide();
				$( "#carian_kaunselor" ).hide();
				$( "#carian_status" ).hide();
				$( "#carian_iso" ).hide();
				$( "#sm_carian_fail_klien_keputusan" ).hide( );
			break;
			case "1": 
				$( "#carian_divider" ).show();
				$( "#carian_nofail" ).show();
				$( "#carian_mykad" ).hide();
				$( "#carian_kaunselor" ).hide();
				$( "#carian_status" ).hide();
				$( "#carian_iso" ).hide();
			break;
			case "2": 
				$( "#carian_divider" ).show();
				$( "#carian_nofail" ).hide();
				$( "#carian_mykad" ).show();
				$( "#carian_kaunselor" ).hide();
				$( "#carian_status" ).hide();
				$( "#carian_iso" ).hide();
			break;
			case "3": 
				$( "#carian_divider" ).show();
				$( "#carian_nofail" ).hide();
				$( "#carian_mykad" ).hide();
				$( "#carian_kaunselor" ).show();
				$( "#carian_status" ).hide();
				$( "#carian_iso" ).hide();
			break;
			case "4": 
				$( "#carian_divider" ).show();
				$( "#carian_nofail" ).hide();
				$( "#carian_mykad" ).hide();
				$( "#carian_kaunselor" ).hide();
				$( "#carian_status" ).show();
				$( "#carian_iso" ).hide();
			break;
			case "5": 
				$( "#carian_divider" ).show();
				$( "#carian_nofail" ).hide();
				$( "#carian_mykad" ).hide();
				$( "#carian_kaunselor" ).hide();
				$( "#carian_status" ).hide();
				$( "#carian_iso" ).show();
			break;						
		}
	}
	
	function papar_jenis_carian2() {
		
		var jenis_carian = $( "#jenis_carian" ).val();

		switch(jenis_carian){
			case "0": 
				$( "#sm_carian_fail_klien_keputusan" ).hide( );
			break;
			case "1": case "2": case "3": case "4": case "5":
				//$(".ui-dialog").css( "top", "259px" );
				$( "#sm_carian_fail_klien_keputusan" ).show( );
			break;
		}
	}
	
	$( "#jenis_carian" )
		.click(function() {
			papar_jenis_carian();
			return false;
		});
	
	$( "#sm_carian_fail_klien" )
		.click(function() {
			$( "#sm_carian_fail_klien_detail" ).dialog( "open" );
			$(".ui-dialog-titlebar-close").show();
		});
	
	$( "#sm_carian_fail_klien_jana" )
		.button({
		   icons: {
			  primary: "ui-icon-search"
		   }
		})	
		.click(function() {
			papar_jenis_carian2();
			return false;
		});	
	//****************Tamat Carian****************//	
	
	//****************Mula Kemaskini****************//
	$( "#kemaskini_fail_klien" )
		.click(function() {
			$( "#sm_kemaskini_fail_klien_detail" ).dialog( "open" );
			//$(".ui-dialog-titlebar-close").hide();
		});
	
	$( "#sm_kemaskini_fail_klien_detail" )
		.dialog({
			autoOpen: false,
			height: "auto",
			width: 700,
			modal: true,
			buttons: {
				"Kemaskini": {
					//Untuk labelkan button
					text:"Kemaskini",
					//Declare id button
					id:"btn_kemaskini_fail_klien_detail_kemaskini",
					//button trigger
					click:function(){
						//utk add icon dlm button
						$("#btn_kemaskini_fail_klien_detail_kemaskini").hide();
						$("#btn_kemaskini_fail_klien_detail_simpan").show();
						$("#btn_kemaskini_fail_klien_detail_batal").show();
						//Untuk show and hide form for editing
						$("#kemaskini_rekod_klien").show();
						$("#papar_rekod_klien").hide();
					}
				},
				"Simpan": { 
					//Untuk labelkan button
					text:"Simpan",
					//Declare id button
					id:"btn_kemaskini_fail_klien_detail_simpan",
					//button trigger
					click:function(){
					//dari file 01_pendaftar_06_mesej.php
					//$("#sm_kemaskini_fail_klien_mesej_3").dialog("open"); 
					var text="Maklumat klien telah berjaya disimpan";
					message(text);

					}
				},
				"Batal": {
					//Untuk labelkan button
					text:"Batal",
					//Declare id button
					id:"btn_kemaskini_fail_klien_detail_batal",
					//button trigger
					click:function(){
						//utk add icon dlm button
						$("#btn_kemaskini_fail_klien_detail_kemaskini").show();
						$("#btn_kemaskini_fail_klien_detail_simpan").hide();
						$("#btn_kemaskini_fail_klien_detail_batal").hide();
						//Untuk show and hide form for editing
						$("#kemaskini_rekod_klien").hide();
						$("#papar_rekod_klien").show();
						
					}
				}
			},
			open: function() {
				//default state...
				$( "#papar_rekod_klien" ).show();
				$( "#kemaskini_rekod_klien" ).hide();
				$("#btn_kemaskini_fail_klien_detail_kemaskini").show();
				$("#btn_kemaskini_fail_klien_detail_simpan").hide();
				$("#btn_kemaskini_fail_klien_detail_batal").hide();
				
				//add icons for each buttons...
				$('.ui-dialog-buttonpane')
                    .find('button:contains("Kemaskini")').button({
						icons: {
							primary: 'ui-icon-pencil'
						}
					});
				$('.ui-dialog-buttonpane')
                    .find('button:contains("Simpan")').button({
						icons: {
							primary: 'ui-icon-disk'
						}
					});
				$('.ui-dialog-buttonpane')
                    .find('button:contains("Batal")').button({
						icons: {
							primary: 'ui-icon-cancel'
						}
					});	
			}	
		});
	
	$( "#r_kemaskini_klien_1" )
		.button({
		   icons: {
			  primary: "ui-icon-circle-check"
		   }
		});	
	$( "#r_kemaskini_klien_2" )
		.button({
		   icons: {
			  primary: "ui-icon-circle-close"
		   }
		});
	$( "#semak_nokp_klien_kemaskini" )
		.button({
		   icons: {
			  primary: "ui-icon-wrench"
		   }, 
		   text: false
		});	
	$( "#semak_kaunselor_klien_kemaskini" )
		.button({
		   icons: {
			  primary: "ui-icon-wrench"
		   }, 
		   text: false
		});		
	$( "#kemaskini_klien").hide();
	//****************Tamat Kemaskini****************//	
	
	//****************Mula Mesej****************//
	$( "#sm_daftar_fail_klien_mesej_1" )
		.dialog({
			autoOpen: false,
			height: "auto",
			width: "auto",
			modal: false,
			buttons: {
				"OK": function() {
					$( "#sm_daftar_fail_klien_mesej_2" ).dialog( "open" );
				},
				"Batal": function() {
					$( this ).dialog( "close" );
				}
			}
		});
	
	$( "#sm_daftar_fail_klien_mesej_2" )
		.dialog({
			autoOpen: false,
			height: "auto",
			width: "auto",
			modal: false,
			buttons: {
				"OK": function() {
					$( "#sm_daftar_fail_klien_mesej_1" ).dialog( "close" );
					$( this ).dialog( "close" );
				}
			}
		}
		);
	//Untuk popup rekod klien berjaya dikemaskini	
	$( "#sm_kemaskini_fail_klien_mesej_3" )
		.dialog({
			autoOpen: false,
			height: "auto",
			width: "auto",
			modal: false,
			buttons: {
				"OK": function() {
					$( this ).dialog( "close" );
					$( "#papar_rekod_klien" ).show();
					$( "#kemaskini_rekod_klien" ).hide();
				}
			}
		}
		);
	//****************Tamat Mesej****************//
	//****************Mula panggil dialog box utk open****************//
	$( "#sm_kemaskini_fail_klien" )
	.click(function() {
		$( "#sm_kemaskini_fail_klien_detail" ).dialog( "open" );
	});
	//Untuk show hide form field,set by default form tak appear
	$("#kaunselor_baru").hide();
	$("#r_kemaskini_klien_1").click(function(){ //jika  ya, form appear
		$("#kaunselor_baru").show();
	});
	$("#r_kemaskini_klien_2") //jika tidak,form hide dan value direst
		.click(function(){
			$("#kaunselor_baru").hide();
			$("#pegawai_kaunselor").val(''); //utk reset value dalam form apabila direfresh
			$("#sebab").val(''); //utk reset value dalam form apabila direfresh
			$("#status_radio_31").val(''); //utk reset value dalam form apabila direfresh
			$("#status_radio_32").val(''); //utk reset value dalam form apabila direfresh
			$("#tkh_kemaskini_dirujuk").val(''); //utk reset value dalam form apabila direfresh
	});
	//****************Tamat panggil dialog utk open ****************//		
	//****************Mula panggil div open profil pengguna****************//
	 $("#papar_profil_pengguna_slide") //sapa yg panggil
		.click(function(){
		//Call from hiding_menu file
			$("#papar_profil_pengguna").show();
			$("#info_profil_pengguna").hide();
			$("#btn_kemaskini_profile_kemaskini") //button kemaskini show bile click , buat show hide button yg lain
				.show()
				.click(function(){
					$("#kemaskini_profil_pengguna").show();
					$("#papar_profil_pengguna").hide();
					$(this).hide(); //ini utk button kemaskini hide
					$("#btn_kemaskini_profile_simpan")
						.show()
						.click(function(){
							$(this).hide();
							$("#kemaskini_profil_pengguna").hide();
							$("#papar_profil_pengguna").show();
							$("#btn_kemaskini_profile_batal").hide();
							$("#btn_kemaskini_profile_kemaskini").show();
							//Data manipulation start here
							message("Maklumat anda telah berjaya disimpan");
						});
					$("#btn_kemaskini_profile_batal")
						.show()
						.click(function(){
							$("#kemaskini_profil_pengguna").hide();
							$("#papar_profil_pengguna").show();
							$(this).hide();
							$("#btn_kemaskini_profile_simpan").hide();
							$("#btn_kemaskini_profile_kemaskini").show();
						});
				});
		});
	//****************Tamat panggil div open profil pengguna****************//
	//****************Mula panggil dialog box utk open profil pengguna****************//
	/*$("#papar_profil_pengguna_slide") //sapa yg panggil
		.click(function(){
			$("#sm_papar_profil_pengguna" ).dialog("open");
			$("#papar_profil_pengguna").show();
			$("#kemaskini_profil_pengguna").hide();
		});*/
	//Sekiranya menggunakan dialog box
	$("#sm_papar_profil_pengguna")//buat dialog box
		.dialog({
			autoOpen: false,
			height: "auto",
			width: "auto",
			modal: false,
			buttons: {
			//Konfigurasi button kemaskini,simpan dan batal
				"Kemaskini": {
					//Untuk labelkan button
					text:"Kemaskini",
					//Declare id button
					id:"btn_kemaskini_profil_pengguna_kemaskini",
					//button trigger
					click:function(){
						$("#kemaskini_profil_pengguna").show();
						$("#papar_profil_pengguna").hide();
						$("#btn_kemaskini_profil_pengguna_kemaskini").hide();
						$("#btn_kemaskini_profil_pengguna_simpan").show();
						$("#btn_kemaskini_profil_pengguna_batal").show();
						//Data manipulation start here
						message("Semua ruangan adalah wajib diisi.");
					}
				},
				"Simpan": { 
					text:"Simpan",
					id:"btn_kemaskini_profil_pengguna_simpan",
					click:function(){
						$("#kemaskini_profil_pengguna").hide();
						$("#papar_profil_pengguna").show();
						$("#btn_kemaskini_profil_pengguna_kemaskini").show();
						$("#btn_kemaskini_profil_pengguna_simpan").hide();
						$("#btn_kemaskini_profil_pengguna_batal").hide();
						//Data manipulation start here
						message("Maklumat profil anda telah berjaya disimpan");
					}
				},
				"Batal": {
					text:"Batal",
					id:"btn_kemaskini_profil_pengguna_batal",
					click:function(){
						$("#btn_kemaskini_profil_pengguna_kemaskini").show();
						$("#btn_kemaskini_profil_pengguna_simpan").hide();
						$("#btn_kemaskini_profil_pengguna_batal").hide();
						$("#kemaskini_profil_pengguna").hide();
						$("#papar_profil_pengguna").show();
					}
				}
			},
			//Paparan semula pada keadaan asal.
			open:function(){
				$("#kemaskini_profil_pengguna").hide();
				$("#papar_profil_pengguna").show();
				$("#btn_kemaskini_profil_pengguna_kemaskini").show();
				$("#btn_kemaskini_profil_pengguna_simpan").hide();
				$("#btn_kemaskini_profil_pengguna_batal").hide();
				//tambah icon pada butang
				$("#btn_kemaskini_profil_pengguna_kemaskini")
					.button({
						icons:{
							primary:'ui-icon-pencil'
						}
					});
				$("#btn_kemaskini_profil_pengguna_simpan")
					.button({
						icons:{
							primary:'ui-icon-disk'
						}
					});
				$("#btn_kemaskini_profil_pengguna_batal")
					.button({
						icons:{
							primary:'ui-icon-cancel'
						}
					});
			}
		});
		//****************Tamat panggil dialog utk open profil pengguna ****************//	
});