$(document).ready(function(){
	$('a[href^="#"]').on('click',function (e) {
	    e.preventDefault();

	    var target = this.hash;
	    var $target = $(target);

	    $('html, body').stop().animate({
	        'scrollTop': $target.offset().top
	    }, 900, 'swing', function () {
	        window.location.hash = target;
	    });
	});
});

function checkLength() {
  if($(this).val().length < 1) {
    $("fieldset:first").addClass("has-danger");
  } else {
    $("fieldset:first").removeClass("has-danger");
  }
}

$('#name').keyup(checkLength);
$('#name').focus(checkLength);
$('#message').keyup(checkLength);
$('#message').focus(checkLength);
