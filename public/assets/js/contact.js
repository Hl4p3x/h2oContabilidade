(function($) {
	"use strict";
	// Contact form valitation with jquery.validate plugin
	if ($.fn.validate) {
        var contactForm = $('#contact-form'),
            formBtn = contactForm.find('.btn');

        contactForm.validate({
            rules: {
                contactname: 'required',
                contactwebsite: {
                    required: true,
                    url: true
                },
                contactsubject: 'required',
                contactemail: {
                    required: true,
                    email: true
                },
                contactmessage: {
                    required: true,
                    minlength: 50
                }
            },
            messages: {
                contactname: "Este campo é obrigatório. Por favor, insira seu nome.",
                number: {
                    required: "este campo é obrigatório. Por favor, insira seu telefone para que possamos te ligar.",
                    email: "Por favor, insira um Telefone Válido."
                },
                contactsubject: "Este campo é obrigatório. Por favor insira um assunto.",
                contactemail: {
                    required: "Este campo é obrigatório. Por favor, indique o seu endereço de e-mail.",
                    email: "Por favor insira um endereço de e-mail válido."
                },
                contactmessage: {
                    required: "Este campo é obrigatório. Por favor, escreva seu assunto.",
                    minlength: "Sua mensagem deve conter pelo menos 50 caracteres."
                }
            },
            submitHandler: function (form) {
                $(document).ajaxStart(function() {
                    formBtn.button('loading');
                }).ajaxStop(function() {
                    formBtn.button('reset');
                });
                /* Ajax handler */
                $.ajax({
					type: 'post',
					url: 'assets/php/mail.php',
					data: $(form).serialize(),
				}).done(function( data ) {
					if ( data == 'success') {
						alert('Email has been sent successfully!')
					} else if ( data == 'already') {
						alert('You already sent a message. Please try again later');
					} else {
						alert('There is an error please try again later!');
					}
				}).error(function() {
					alert( 'There is an error please try again later!' );
				});
                return false;
            }
        });
    }
})(jQuery);