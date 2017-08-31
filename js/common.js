$(document).ready(function() {

	$('a[data-target^="anchor"]').bind('click.smoothscroll', function(){
		var target = $(this).attr('href'),
			bl_top = $(target).offset().top - 53;
		$('body, html').animate({scrollTop: bl_top}, 700);
		return false;
	});



	$(".popup").magnificPopup();

	$("#form_02").submit(function() {
		$.ajax({
			type: "POST",
			url: "mail_02.php",
			data: $(this).serialize()
		}).done(function() {
			alert("Вы выбрали участок и заказали консультацию на сайте 'Svoi-Dom.INFO'. В ближайшее время мы Вам перезвоним");
			setTimeout(function() {
				$("#form_02").trigger("reset");
			}, 1000);
		});
		return false;
	});

});