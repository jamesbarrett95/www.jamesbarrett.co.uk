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

// Check length of name field
function checkNameLength() {
  if($(this).val().length < 1) {
		$('#nameresult').addClass("has-danger");
		$('#nameresult').removeClass("has-success");
  } else {
		$('#nameresult').addClass("has-success");
		$('#nameresult').removeClass("has-danger");
  }
}

// Check length of message field
function checkMessageLength() {
  if($(this).val().length < 1) {
		$('#messageresult').addClass("has-danger");
		$('#messageresult').removeClass("has-success");
  } else {
		$('#messageresult').addClass("has-success");
		$('#messageresult').removeClass("has-danger");
  }
}

// Check if user's email is valid
function validateEmail(email) {
   var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
   if(emailReg.test(email)) {
     $('#emailresult').addClass("has-success");
		 $('#emailresult').removeClass("has-danger");
   } else {
		 $('#emailresult').removeClass("has-success");
		 $('#emailresult').addClass("has-danger");
   }
}

// Check if the error messages are visible or hidden
function checkIfHidden() {
	return $("#nameresult").hasClass('has-success') && $("#messageresult").hasClass('has-success')
	&& $("#emailresult").hasClass('has-success');
}

// Function to check the state of the submit button
function enableSubmitEvent() {
	$('#submit').prop('disabled', !checkIfHidden());
}

// Call to validate email function
$('#email').keyup(function(){
    validateEmail($('#email').val());
  });

// length calls
$('#name').keyup(checkNameLength);
$('#name').focus(checkNameLength);
$('#message').keyup(checkMessageLength);
$('#message').focus(checkMessageLength);

// Calls to state of the submit button
$('#name').keyup(enableSubmitEvent);
$('#email').keyup(enableSubmitEvent);
$('#message').keyup(enableSubmitEvent);
