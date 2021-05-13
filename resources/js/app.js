import "./bootstrap"
import $ from "jquery";
import intlTelInput from 'intl-tel-input';
import utils from 'intl-tel-input/build/js/utils';


$(document).ready(function () {

        $(".nav-toggler").each(function (_, navToggler) {
            var target = $(navToggler).data("target");
            $(navToggler).on("click", function () {
                $(target).animate({
                    height: "toggle",
                });
            });
        });

        // const input = document.querySelector("#phone");
        // let iti = intlTelInput(input, {
        //     nationalMode: true,
        //     utilsScript: utils,
        // });

        let pages = ["#page1", "#page2", "#page3",];
        let currentPage = 0;


        let requiredFieldsPerPage = {
            '#page1': ['role'],
            '#page2': ['name', 'email', 'password', 'password_confirmation'],
            '#page3': []
        };

        function validate() {
            let hasError = false;
            let activeForm = pages[currentPage]
            let activeField = requiredFieldsPerPage[activeForm]

            activeField.forEach(element => {
                let field = $("#" + element);
                let fieldspan = $("#" + element + '-error');
                if (field.val() <= 0) {
                    field.addClass('border-danger')
                    fieldspan.html('<small class="text-danger">This field is required</small>')
                    hasError = true;
                } else {
                    field.removeClass('border-danger')
                    fieldspan.html('')
                }
            });

            let password = $('#password').val();
            let passwordCheck = $('#password_confirmation').val();
            if (password && passwordCheck) {
                if (password !== passwordCheck) {
                    $('#password').addClass('border-warning')
                    $('#password-error').html('<small class="text-warning">Passwords dont match up</small>')
                    $('#password_confirmation').addClass('border-warning')
                    $('#password_confirmation-error').html('<small class="text-warning">Passwords dont match up</small>')
                    hasError = true;
                } else {
                    $('#password').removeClass('border-warning')
                    $('#password-error').html('')
                    $('#password_confirmation').removeClass('border-warning')
                    $('#password_confirmation-error').html('')
                }

            }
            if (password && !hasError) {
                if (password.length < 6) {
                    $('#password').addClass('border-warning')
                    $('#password-error').html('<small class="text-warning">Passwords must be at least 6 characters</small>')
                    $('#password_confirmation').addClass('border-warning')
                    $('#password_confirmation-error').html('<small class="text-warning">Passwords must be at least 6 characters</small>')
                    hasError = true;
                } else {
                    $('#password').removeClass('border-danger')
                    $('#password-error').html('')
                }
            }


            let emailFormat = /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i
            let filledInEmailAdres = $('#email').val();
            if (filledInEmailAdres) {
                if (!emailFormat.test(filledInEmailAdres)) {
                    $('#email').addClass('border-warning')
                    $('#email-error').html('<small class="text-warning">The input is not a email</small>')
                    hasError = true;
                } else {
                    $('#email').removeClass('border-warning')
                    $('#email-error').html('')
                }
            }

            let errorMap = ["Invalid number", "Invalid country code", "Too short", "Too long", "Invalid number"];

            // let phoneInput = $('#phone').val();
            // if (phoneInput) {
            //     if (!iti.isValidNumber()) {
            //         console.log(iti.isValidNumber() + iti.getValidationError())
            //         let errorCode = iti.getValidationError()
            //         $('#phone').addClass('border-warning')
            //         $('#phone-error').html('<small class="text-warning">' + errorMap[errorCode] + '</small>')
            //         hasError = true;
            //     } else {
            //         console.log(iti.isValidNumber() + iti.getValidationError())
            //         $('#phone').removeClass('border-warning')
            //         $('#phone-error').html('')
            //     }
            // }


            return hasError;
        }

        $("#form-toggle-forwards").click(function () {
            // console.log($('#phone').val())
            // let number = iti.getNumber();
            //
            // $('#phone').val(number);
            let hasError = validate()
            if (hasError === false) {
                let nextPage = currentPage + 1;

                $(pages[currentPage]).hide();
                $(pages[nextPage]).show();

                currentPage = nextPage;

                if (currentPage == 1) {
                    $("#form-toggle-backwards").show()
                }

                if (currentPage == 2) {
                    $("#form-toggle-forwards").hide()
                    $("#form-toggle-submit").show()
                }

                if ($('#role').val() == 1) {

                }
                if ($('#role').val() == 2) {

                }
                if ($('#role').val() == 3) {

                }
            }


        });


        $("#form-toggle-backwards").click(function (event) {
            if (currentPage == 0 || 1) {
                event.preventDefault();
            }
            let nextPage = currentPage - 1;

            $(pages[currentPage]).hide();
            $(pages[nextPage]).show();

            currentPage = nextPage;

            if (currentPage == 0) {
                $("#form-toggle-backwards").hide()
            }

            if (currentPage == 1) {
                $("#form-toggle-forwards").show()
                $("#form-toggle-submit").hide()
            }

        });

        $(function () {
            $(window).on('scroll', function () {
                if ($(window).scrollTop() > 10) {
                    $('.navbar').addClass('active');
                } else {
                    $('.navbar').removeClass('active');
                }
            });
        });

    }
)
;
