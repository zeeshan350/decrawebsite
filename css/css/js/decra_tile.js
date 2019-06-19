var shingle = false;

function changehouse(id) {
    
	$('#tile_label').val(id);
	
	if(id == 'Shingle' && shingle == false) {
		$('#color_label').val('Bark');
		shingle = true;
	} else if(id != 'Shingle' && shingle == true) {
		$('#color_label').val('Cedar');
		shingle = false;
	}
	
	var tile_color = $('#color_label').val();
	
	if(tile_color == 'Copperred') {
		if(senator == true) {
			$('#color_label').val('Bark');
		} else {
			$('#color_label').val('Cedar');
		}
		tile_color = $('#color_label').val();
	}
	
	$('.rooftop').addClass('tile_unborder');
	$('.rooftop').removeClass('tile_border');
	$('#'+id).addClass('tile_border');
	$('#'+id).removeClass('tile_unborder');
	
	$('.decra_info_display').addClass('decra_info_invisible');
	$('.decra_info_display').removeClass('decra_info_visible');
	$('#decra_info'+id).addClass('decra_info_visible');
	$('#decra_info'+id).removeClass('decra_info_invisible');
	
	$('.absolute_adjust').removeClass('carousel_appear');
	$('.absolute_adjust').addClass('carousel_disappear');
	$('.carousel' + id).removeClass('carousel_disappear');
	$('.carousel' + id).addClass('carousel_appear');
	
	changetile();
	changecolor(tile_color);
}

function change_profile(id) {
	$('.tile_profile').removeClass('profile_appear');
	$('.tile_profile').addClass('profile_disappear');
	$('#profile' + id).removeClass('profile_disappear');
	$('#profile' + id).addClass('profile_appear');
}

function changeroof(id) {

	$('#roof_label').val(id);
	
	$('.trim').addClass('unhighlight');
	$('.trim').removeClass('highlight');
	$('#'+id).addClass('highlight');
	$('#'+id).removeClass('unhighlight');
	
	changetile();
}

function changecolor(id) {

	$('#color_label').val(id);
	var tile = $('#tile_label').val();
	
	$('.image_tile').addClass('tile_unselect');
	$('.image_tile').removeClass('tile_select');
	$('#'+tile+id).addClass('tile_select');
	$('#'+tile+id).removeClass('tile_unselect');
	
	changetile();
}

function change_image() {
	var a = $('#fieldA').val();
	var b = $('#fieldB').val();
	var c = $('#fieldC').val();
	
	$('.tile_house').addClass('tile_image_disappear');
	$('.tile_house').removeClass('tile_image_appear');
	$('#tile'+a+b+c).addClass('tile_image_appear');
	$('#tile'+a+b+c).removeClass('tile_image_disappear');
}

function popup(id) {
	$('.icon_disable').css({display: 'none'});
	$('#detail' + id).css({display: 'block'});
	
	$('#detail' + id).mouseleave(function() {
		$('#detail' + id).css({display: 'none'});
	});
}

function showDetail(id) {
	$('#icon_show' + id).css({display:'block'});
}