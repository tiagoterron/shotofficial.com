// JavaScript Document
$(document).ready(function(){	
$( "#datepicker" ).datepicker();
$('.bxslider').bxSlider({
	  pagerCustom: '#bx-pager',
	  infiniteLoop: false
	});
	$( ".select_tshirt" ).change(function() {
    $( ".select_tshirt option:selected" ).each(function() {
       var t_color = $( this ).val();
	   var id_color_tshirt = t_color.split('_');
	   var t_s_id = id_color_tshirt[0];
	   var t_s_color = id_color_tshirt[1];
	   if(t_color != "-"){
	   var img = $("#id_t_shirt_"+t_s_id);
	   var new_tshirt = "";
	   new_tshirt = $("#"+img.attr('id')).load(PATH+"_includes/_pags/sub-ajax.php", {'req': 'new-tshirt', 'id' : t_s_id, 'color' : t_s_color}, function(v){
	   $("#id_select_tshirt_"+t_s_id).attr("src",PATH+"_images/_uploads/imgs/_thumbs/"+img.text());
		});
	   }
    });
});					   
   $(".photos_n_1").colorbox({rel:'photos_n_1', transition:"fade"});
   $('.box_detalhes').colorbox({rel:'box_detalhes', maxWidth: '500', maxHeight: '500', opacity: 0.45});
   $(".inline").colorbox({
						 inline:true,
						 width:"50%",
						 scrolling:false,
						 preloading: false});
   $("#new_menu_top").css({ opacity: 0.6 });
   $("#id_info_release").css({ opacity: 0.6 });
   $("#id_info_release2").css({ opacity: 0.6 });
   $("#id_langs").css({ opacity: 0.6 });
	$("#form_manage_adicionar").validate();
	$("#form_emails").validate();
	$("#form_contact").validate();
	$("#form_signin").validate();
	$("#form_signup").validate({
		rules:{
			t_email_adress: {
				required: true,
				email: true
			},
			t_pass: {
				required: true,
				minlength: 5
			},
			t_conf_pass: {
				required: true,
				minlength: 5,
				equalTo: "#t_pass"
			},	
			t_pass2: {
				minlength: 5
			},
			t_conf_pass2: {
				minlength: 5,
				equalTo: "#t_pass2"
			}	
		},
		messages: {
			t_pass: {
				required: "Please provide a password",
				minlength: "Your password must be at least 5 characters long"
			},
			t_conf_pass: {
				required: "Please provide a password",
				minlength: "Your password must be at least 5 characters long",
				equalTo: "Please enter the same password as above"
			},
			t_email_adress: "* Invalid e-mail"
		}
	});
	$("#form_manage_adicionar").validate();
	$("#t_name").click(function(){
	var t_name = $(this);
		if(t_name.val() == "Name"){
			t_name.val("");
		}							
	});	
	$("#t_email").click(function(){
	var t_name = $(this);
		if(t_name.val() == "E-mail"){
			t_name.val("");
		}							
	});	
	
	$(".photos_album").colorbox({rel:'photos_album', transition:"fade"});
	$(".videos_n_1").colorbox({iframe:true, innerWidth:640, innerHeight:480});
	$(".photo_album").colorbox({rel:'photo_album', transition:"fade"});
	$(".photos_show_upload").colorbox({rel:'photos_show_upload', transition:"fade"});
	$(".ajax").colorbox({width:"50%"});
	
	/*$('#slider1').bxSlider({
    displaySlideQty: 4,
    moveSlideQty: 1,
	nextImage: PATH+'_images/arrow_right.png',
	prevImage: PATH+'_images/arrow_left.png'
  });*/
	
	$('#tabs').tabs();
	//alert($('#upload_banner'));
	$('#upload_banner').uberuploadcropper({
        //---------------------------------------------------
        // uploadify options..
        //---------------------------------------------------
        'uploader'  : PATH+'_js/_uberuploadcropper/scripts/uploadify.swf',
        'script'    : PATH+'_js/_uberuploadcropper/uploadify.php',
        'cancelImg' : PATH+'_js/_uberuploadcropper/cancel.png',
        'multi'      : false,
        'auto'      : true,
        'folder'    : PATH+'_images/_uploads',

        'allowSelect': false,            //can reselect
        'allowResize' : false,            //can resize selection
        'setSelect': [ 0, 0, 990, 365 ],    //these are the dimensions of the crop box x1,y1,x2,y2

        'cropScript': PATH+'_js/_uberuploadcropper/crop.php',
        'onComplete': function(imgs,data){
		//	alert("te");
			var i_name2 = RAND+"-"+replaceAll(strReplaceChr(imgs[0].name), " ", "-");
            $('#PhotoPrev').attr('src', PATH+"_images/_uploads/min_"+i_name2 +'?d='+ (new Date()).getTime());
			show_hide_image_button('photo_albumUploader','div_photo');
			$("#t_imagem").val(i_name2);
        }
    });
	
	$('#photo_album').uberuploadcropper({
        //---------------------------------------------------
        // uploadify options..
        //---------------------------------------------------
        'uploader'  : PATH+'_js/_uberuploadcropper/scripts/uploadify.swf',
        'script'    : PATH+'_js/_uberuploadcropper/uploadify.php',
        'cancelImg' : PATH+'_js/_uberuploadcropper/cancel.png',
        'multi'      : false,
        'auto'      : true,
        'folder'    : PATH+'_images/_uploads',

        'allowSelect': false,            //can reselect
        'allowResize' : true,            //can resize selection
        'setSelect': [ 0, 0, 200, 220 ],    //these are the dimensions of the crop box x1,y1,x2,y2

        'cropScript': PATH+'_js/_uberuploadcropper/crop.php',
        'onComplete': function(imgs,data){
			var i_name2 = RAND+"-"+replaceAll(strReplaceChr(imgs[0].name), " ", "-");
            $('#PhotoPrev').attr('src', PATH+"_images/_uploads/_thumbs/min_"+i_name2 +'?d='+ (new Date()).getTime());
			show_hide_image_button('photo_albumUploader','div_photo');
			$("#t_imagem").val(i_name2);
        }
    });
	
	$("#custom_file_upload").uploadify({
    'uploader'  : PATH+'_js/_uploadify/uploadify.swf',
    'script'    : PATH+'_js/_uploadify/uploadify.php',
    'cancelImg' : PATH+'_js/_uploadify/cancel.png',
    'folder'    : PATH+'_images/_uploads/imgs',
    'auto'      : true,
	'multi'		: true,
	
	onComplete: function(event, queueID, fileObj) {
	var i_name = replaceAll(strReplaceChr(fileObj.name), " ", "-");
	id_img = parseInt(Math.random()*9999);
    $('#view_fotos').append('<li id="li_'+id_img+'"><a href="javascript:void(0);" onclick="delete_img(\''+id_img+'\', \''+i_name+'\')"><img src="'+PATH+'_images/cancel.png" class="btn_cancel2" /></a><br /><div class="exibi_image"><img id="img_'+id_img+'" class="fotos" src="'+PATH+'_images/_uploads/imgs/_thumbs/min_'+i_name+'" /></div><br /><textarea class="manage_fotos_descricao noeditor" name="foto_txt_'+id_img+'">description...</textarea><br /><input type="radio" name="main_pic" value="'+i_name+'" /></li>');
	$("#t_imagem").val($("#t_imagem").val()+";"+i_name+":"+id_img);
	$('#img_'+id_img).load(function () {
		img_width = jQuery(this).width();
		img_height = jQuery(this).height();
		if(img_width > 217 ){
			new_altura = img_height/img_width*217;
			jQuery(this).width("217");
			jQuery(this).height(new_altura);
		}
	});
	}
  	});
	
	$("#custom_file_upload2").uploadify({
    'uploader'  : PATH+'_js/_uploadify/uploadify.swf',
    'script'    : PATH+'_js/_uploadify/uploadify.php',
    'cancelImg' : PATH+'_js/_uploadify/cancel.png',
    'folder'    : PATH+'_images/_uploads/imgs',
    'auto'      : true,
	'multi'		: true,
	
	onComplete: function(event, queueID, fileObj) {
	var i_name = replaceAll(strReplaceChr(fileObj.name), " ", "-");
	id_img = parseInt(Math.random()*9999);
    $('#view_fotos').append('<li id="li_'+id_img+'"><a href="javascript:void(0);" onclick="delete_img2(\''+id_img+'\', \''+i_name+'\')"><img src="'+PATH+'_images/cancel.png" class="btn_cancel2" /></a><br /><div class="exibi_image"><img id="img_'+id_img+'" class="fotos" src="'+PATH+'_images/_uploads/imgs/_thumbs/min_'+i_name+'" /></div><br /><textarea class="manage_fotos_descricao noeditor" name="foto_txt_'+id_img+'">description...</textarea></li>');
	$("#t_imagem_uploads").val($("#t_imagem_uploads").val()+";"+i_name+":"+id_img);
	$('#img_'+id_img).load(function () {
		img_width = jQuery(this).width();
		img_height = jQuery(this).height();
		if(img_width > 217 ){
			new_altura = img_height/img_width*217;
			jQuery(this).width("217");
			jQuery(this).height(new_altura);
		}
	});
	}
  	});
	

    var galleries = $('.ad-gallery').adGallery();
    $('#switch-effect').change(
      function() {
        galleries[0].settings.effect = $(this).val();
        return false;
      }
    );
    $('#toggle-slideshow').click(
      function() {
        galleries[0].slideshow.toggle();
        return false;
      }
    );
    $('#toggle-description').click(
      function() {
        if(!galleries[0].settings.description_wrapper) {
          galleries[0].settings.description_wrapper = $('#descriptions');
        } else {
          galleries[0].settings.description_wrapper = false;
        }
        return false;
      }
    );
	
	$(".tweet").tweet({
            username: "shotfuckband",
            join_text: "auto",
            avatar_size: 0,
            count: 3,
            auto_join_text_default: "we said,", 
            auto_join_text_ed: "we",
            auto_join_text_ing: "we were",
            auto_join_text_reply: "we replied to",
            auto_join_text_url: "we were checking out",
            loading_text: "loading tweets..."
        });
	
	
});



function func_sub_form(form){
document.forms[form].submit();	
}

 function strReplaceChr(texto) {
	var chrEspeciais = new Array("á", "à", "â", "ã", "ä", "é", "è", "ê", "ë",
					 "í", "ì", "î", "ï", "ó", "ò", "ô", "õ", "ö",
					 "ú", "ù", "û", "ü", "ç",
					 "Á", "À", "Â", "Ã", "Ä", "É", "È", "Ê", "Ë",
					 "Í", "Ì", "Î", "Ï", "Ó", "Ò", "Ô", "Õ", "Ö",
					 "Ú", "Ù", "Û", "Ü", "Ç");
	var chrNormais = new Array("a", "a", "a", "a", "a", "e", "e", "e", "e",
				   "i", "i", "i", "i", "o", "o", "o", "o", "o",
				   "u", "u", "u", "u", "c",
				   "A", "A", "A", "A", "A", "E", "E", "E", "E",
				   "I", "I", "I", "I", "O", "O", "O", "O", "O",
				   "U", "U", "U", "U", "C");
	for (index in chrEspeciais) {
		texto = texto.replace(chrEspeciais[index], chrNormais[index]);
		texto = texto.toLowerCase();
	}

	return texto;
}
function replaceAll(string, token, newtoken) {
	while (string.indexOf(token) != -1) {
 		string = string.replace(token, newtoken);
	}
	return string;
}

function delete_img(id_li, img){
$("#li_"+id_li).css('display', 'none');
$("#t_imagem").val($("#t_imagem").val().replace(";"+img, ""));
}

function delete_img2(id_li, img){
$("#li_"+id_li).css('display', 'none');
$("#t_imagem_uploads").val($("#t_imagem_uploads").val().replace(";"+img, ""));
}

function show_hide_image_button(id1, id2){
$("#"+id1).css('display', 'none');
$("#"+id2).css('display', 'block');
}

function contaCheckbox(){
  var inputs, x, selecionados=0;
  inputs = document.getElementsByTagName('input');
  for(x=0;x<inputs.length;x++){
    if(inputs[x].type=='checkbox'){
      if(inputs[x].checked==true && inputs[x].id == 'bands'){
        selecionados++;
      }
    }
  }
  return selecionados;
}

function check_box(id){
	var total; 
	total = contaCheckbox();
	if(total > 3){
		alert("Você pode votar em apenas 03 bandas por dia!");	
		id.checked = false;
	}
}

function check_votos(){
	var total; 
	total = contaCheckbox();
	if(total > 0){
	return true;
	}else{
	alert("Você deve selecionar pelo menos 01 banda!");
	return false;	
	}
}
function change_list_emails(w){
	if(w.value == "A"){
		$("#list_emails").fadeOut('fast');
	}else if(w.value == "Q"){
		$("#list_emails2").fadeIn('fast');
		$("#list_emails").fadeOut('fast')
	}else{
		$("#list_emails").fadeIn('fast');
		$("#list_emails2").fadeOut('fast')
	}
}

function add_to_cart(id, id_user, tshirt, logged){
	if(tshirt == "Y"){
		if(document.getElementById("size_"+id)){
			var color = document.getElementById("color_"+id).value;
			var size = document.getElementById("size_"+id).value;
			if(color == "-"){
			/*$("#cart_values").load(PATH+"_includes/_pags/sub-ajax.php", {'req': 'add-to-cart', 'color' : color, 'id' : id, 'logged' : logged}, function(v){
			alert("Item successfully added");
			location.href = PATH+'shopping-cart/';
			});*/
/*			}else{*/
			alert("Choose a t-shirt color");	
			}else if(size == "-"){
			alert("Choose the t-shirt size");	
			}else{
		$("#cart_values").load(PATH+"_includes/_pags/sub-ajax.php", {'req': 'add-to-cart', 'color' : color, 'size' : size, 'id' : id, 'id_user' : id_user, 'session' : SESSION}, function(v){
			alert("Item successfully added !!");
			location.href = PATH+'shopping-cart/';
			});	
		}
		}
		}else{
			
			var size = "";
			$("#cart_values").load(PATH+"_includes/_pags/sub-ajax.php", {'req': 'add-to-cart', 'id' : id, 'id_user' : id_user, 'session' : SESSION}, function(v){
			alert("Item successfully added");
			location.href = PATH+'shopping-cart/';	
			});
		}
	}
	
function checa_values(){
	$.ajax({
		url: PATH+"_includes/_pags/sub-ajax.php",
		data: { 
			req: "submit-checkout",
			id_trans: $("#id_custom").val()
			},
		statusCode: {
			200: function() {
			  document.formPaypal.submit();
			}
		  }
	});	
	return false;
}

function close_tab(v){
	var v_css = $("#"+v).css('display');
	if(v_css == "block"){
	$("#"+v).css('display', 'none');
	}else{
	$("#"+v).css('display', 'block');	
	}
}