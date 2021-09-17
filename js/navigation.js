$(function(){

	$('ul.nav li').each(function(i)
						{

		var link = $(this).children('a').attr('href');
		var pathName = window.location.pathname;
		var href = pathName.indexOf('index.html')>-1 ? pathName.substring(0, pathName.lastIndexOf('/')) + '/' : pathName;

		if(link === href){

			$(this).addClass('active');
			$(this).children('ul:first').removeClass('hide');

		}

	});


})
