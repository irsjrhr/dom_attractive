	$(document).ready(function(e) {


		// //Event triger ketika nav menu header berada pada mode responsive
		$('.btn_menu_header').on('click', function(e) {
			menu_header_toggle();
		});	

	})

	function menu_header_toggle() {
		var menu_header = $('.menu_header');
		//Bentuknya jadi sidebar ketika responsive
		var content_menu = menu_header.find('.content_menu');
		if ( content_menu.is(":visible") == true ) {
			//Jika sedang terbuka, maka tutup
			content_menu.hide();
		}else{
			content_menu.show();
		}
	}



