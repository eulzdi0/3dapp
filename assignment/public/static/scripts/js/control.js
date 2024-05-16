// JavaScript Document
$(document).ready(function(){


	var current = {};
	var allModels = {};

	$('[data-toggle="popover"]').popover(); 

	showPage("#home");


	$("#nav-models").on("click","li",function(){

		$(this).siblings('li').find("a").removeClass('active');
		$(this).find('a').addClass('active');
		var flag=$(this).find('.nav-link').attr('flag');
		
		current=allModels[flag];
		changeMessage(current);
		
	});


	function showPage(target) {
		$('#home, #about, #models').hide();
		$(target).show();
	}

	$('#navHome').click(function(){
		showPage('#home');
	});
	$('#navAbout').click(function(){
		showPage('#about');
	});
	$('#navModels').click(function(){
		showPage('#models');
	});



	$.getJSON('./index.php?action=getJsonData',function(obj){
		// console.log(obj);
		$('#title_home').html('<h2>' + obj.info[0].title + '<h2>');
		$('#subTitle_home').html('<h3>' + obj.info[0].subTitle + '</h3>');
		$('#description_home').html('<p>' + obj.info[0].description + '</p>');
		
		$("#about").html(obj.info[0].about);
		
		var cardContainer = $('#brand-info'); 
		cardContainer.empty();
		obj.brand.forEach(function(brand) {  

			var cardHtml = '<div class="col-sm-4">' +  
							   '<div class="card">' +  
								   '<a href="' + brand.subImg + '" data-fancybox data-caption="' + brand.caption + '" class="img-narrow">' +  
									   '<img class="card-img-top img-fluid img-thumbnail" src="' + brand.img + '" alt="' + brand.title + '">' +  
								   '</a>' +  
								   '<div class="card-body">' +  
									   '<div class="card-title drinksText"><h2>' + brand.title + '</h2></div>' +  
									   '<div class="card-subtitle drinksText"><h3>' + brand.subTitle + '</h3></div>' +  
									   '<div class="card-text drinksText"><p>' + brand.description + '</p></div>' +  
									   '<a href="' + brand.url + '" class="btn btn-primary btn-responsive">Find out more ...</a>' +  
								   '</div>' +  
							   '</div>' +  
						   '</div>';  
			cardContainer.append(cardHtml);  
		});  
		
		var navModels = $("#nav-models");
		navModels.empty();
		var first = true;
		obj.models.forEach(function(models){
			var activeClass = first?'active':'';
			var navHtml = '<li class="nav-item">'+
							'<a id="nav'+models.flag+'" class="nav-link '+activeClass+'" href="javascript:void();" flag="'+models.flag+'">'+models.flag+'</a>'+
                          '</li>';
			first = false;
			navModels.append(navHtml);
		});
		

		var cfirst = 0;

		obj.models.forEach(function(models){

			if(cfirst == 0){
				current=models;
			}
			allModels[models.flag]=models;
			cfirst++;
		});
		
		changeMessage(current);

		
		var galleryContainer = $("#gallery");
		galleryContainer.empty();
		obj.imgs.forEach(function(imgs){
			console.log(imgs);
			var galleryHtml = '<a href="'+imgs.img+' " data-fancybox="" data-caption="My X3D model render"> '+
			'<img class="card-img-top img-thumbnail" src="'+imgs.img+' "></a>';

			galleryContainer.append(galleryHtml);
		});
		
		

		
		
		
	});



	function changeMessage(current){
		$("#x3dModelTitle_main").html("<h2>"+current.title+"</h2>");
		$("#x3dCreationMethod_main").html("<p>"+current.description+"</p>");
		var timestamp = new Date().getTime(); // 使用当前时间戳
		var urlWithCacheBuster = current.files + "?t=" + timestamp; // 添加缓存破坏参数
		$("#main_scene").html('<inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel();" url="'+urlWithCacheBuster+'" > </inline>');
		
		$("#titleHistory").html("<h2>"+current.history_title+"</h2>");
		$("#subTitleHistory").html("<h3>"+current.history_sub_title+"</h3>");
		$("#descriptionHistory").html("<p>"+current.history_description+"</p>");
		$("#urlHistory").text("Visit "+current.flag).attr('href',current.history_url);		
	}


});








