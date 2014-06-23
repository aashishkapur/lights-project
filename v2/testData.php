				var request = $.ajax({
						type: "POST",
						url: "/api/verify/",			            
						data: $("#email").val() + "/" + $("#password").val(),
						success: function () {
							alert("login works");
						}// /api/create/(EMAIL)/(PASSWORD)/(NAME)/(DOB)/(SKILLS)
				});

				request.fail(function( jqXHR, textStatus ) {
					alert( "Request failed: " + textStatus );
				});
