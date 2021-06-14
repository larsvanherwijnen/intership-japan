import 'bootstrap'
import $ from "jquery";
import intlTelInput from 'intl-tel-input';
import utils from 'intl-tel-input/build/js/utils';


$(document).ready(function () {

        $(function () {
            $(window).on('scroll', function () {
                if ($(window).scrollTop() > 10) {
                    $('.navbar').addClass('active');
                } else {
                    $('.navbar').removeClass('active');
                }
            });
        });

        const input = document.querySelector("#phone");
        let iti = intlTelInput(input, {
            nationalMode: true,
            utilsScript: utils,
        });

        let pages = ["#page1", "#page2", "#page3", "#page5"];
        let currentPage = 0;


        let requiredFieldsPerPage = {
            '#page1': ['name', 'lastname', 'email', 'phone', 'password', 'password_confirmation'],
            '#page2': ['nationality', 'Currentlyliving', 'field', 'graduated', 'nativelanguage', 'about', 'image'],
            '#page3': ['comp_name', 'comp_email', 'comp_contact_name', 'comp_contact_email'],
            '#page4': [],
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

            let filledInCompEmailAdres = $('#comp_email').val();
            if (filledInCompEmailAdres) {
                if (!emailFormat.test(filledInCompEmailAdres)) {
                    $('#email').addClass('border-warning')
                    $('#email-error').html('<small class="text-warning">The input is not a email</small>')
                    hasError = true;
                } else {
                    $('#email').removeClass('border-warning')
                    $('#email-error').html('')
                }
            }

            let filledInCompContactEmailAdres = $('#comp_contact_email').val();
            if (filledInCompContactEmailAdres) {
                if (!emailFormat.test(filledInCompContactEmailAdres)) {
                    $('#email').addClass('border-warning')
                    $('#email-error').html('<small class="text-warning">The input is not a email</small>')
                    hasError = true;
                } else {
                    $('#email').removeClass('border-warning')
                    $('#email-error').html('')
                }
            }

            let errorMap = ["Invalid number", "Invalid country code", "Too short", "Too long"];

            let phoneInput = $('#phone').val();
            if (phoneInput) {
                if (!iti.isValidNumber()) {
                    let errorCode = iti.getValidationError()
                    if (errorCode > 3 || errorCode < 0) {
                        errorCode = 3;
                    }
                    $('#phone').addClass('border-warning')
                    $('#phone-error').html('<small class="text-warning">' + errorMap[errorCode] + '</small>')
                    hasError = true;
                } else {
                    $('#phone').removeClass('border-warning')
                    $('#phone-error').html('')
                }
            }

            return hasError;
        }
    let nextPage = currentPage + 1;
        $("#role")
            .change(function () {
                if ($('#role').val() == 0){
                    currentPage = 0;
                    $("#page2").hide()
                    $("#page3").hide()
                    $("#page4").hide()
                    $("#form-toggle-submit").hide()
                    nextPage = currentPage + 1;
                }
                if ($('#role').val() == 1){
                    currentPage = 0;
                    $("#page2").show()
                    $("#page3").hide()
                    $("#page4").hide()
                    $("#form-toggle-submit").show()
                    nextPage = currentPage + 1;
                }
                if ($('#role').val() == 2){
                    currentPage = 0;
                    $("#page2").hide()
                    $("#page3").show()
                    $("#page4").hide()
                    $("#form-toggle-submit").show()
                    nextPage = currentPage + 1;
                }
                if ($('#role').val() == 3){
                    currentPage = 0;
                    $("#page2").hide()
                    $("#page3").hide()
                    $("#page4").show()
                    $("#form-toggle-submit").show()
                    nextPage = currentPage + 1;
                }
            });

        // $("#form-toggle-forwards").click(function () {
        //     let number = iti.getNumber();
        //     $('#phone').val(number);
        //     let hasError = validate()
        //     if (hasError === false) {
        //
        //         let nextPage = currentPage + 1;
        //
        //         if ($('#role').val() == 2) {
        //             nextPage = currentPage + 2;
        //         }
        //
        //         if (($('#role').val() == 3)) {
        //             nextPage = currentPage + 3;
        //         }
        //
        //         $(pages[currentPage]).hide();
        //         $(pages[nextPage]).show();
        //
        //         currentPage = nextPage;
        //
        //         if (currentPage == 1) {
        //             $("#form-toggle-backwards").show()
        //         }
        //
        //         if (currentPage == 2) {
        //             $("#form-toggle-forwards").hide()
        //             $("#form-toggle-submit").show()
        //         }
        //         if (currentPage == 3) {
        //             $("#form-toggle-forwards").hide()
        //             $("#form-toggle-submit").show()
        //         }
        //         if (currentPage == 4) {
        //             $("#form-toggle-forwards").hide()
        //             $("#form-toggle-submit").show()
        //         }
        //     }
        //
        // });


        // $("#form-toggle-backwards").click(function (event) {
        //     if (currentPage == 0 || 1) {
        //         event.preventDefault();
        //     }
        //     let nextPage = currentPage - 1;
        //
        //     if ($('#role').val() == 2) {
        //
        //         console.log($('#role').val(), '2')
        //         nextPage = currentPage - 2;
        //     }
        //
        //     if (($('#role').val() == 3)) {
        //         console.log($('#role').val(), '3')
        //         nextPage = currentPage - 3;
        //     }
        //
        //
        //     $(pages[currentPage]).hide();
        //     $(pages[nextPage]).show();
        //
        //     currentPage = nextPage;
        //
        //     if (currentPage == 0) {
        //         $("#form-toggle-backwards").hide()
        //     }
        //
        //     if (currentPage == 1) {
        //         $("#form-toggle-forwards").show()
        //         $("#form-toggle-submit").hide()
        //     }
        //
        //     if (currentPage == 2) {
        //         $("#form-toggle-forwards").show()
        //         $("#form-toggle-submit").hide()
        //     }
        //     if (currentPage == 3) {
        //         $("#form-toggle-forwards").show()
        //         $("#form-toggle-submit").hide()
        //     }
        //     if (currentPage == 4) {
        //         $("#form-toggle-forwards").show()
        //         $("#form-toggle-submit").hide()
        //     }
        // });

        $("#form-toggle-submit").click(function (event) {
            let hasError = validate()
            if (hasError === true) {
                event.preventDefault();
            }
        });
    }
)
;
