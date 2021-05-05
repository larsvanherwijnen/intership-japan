require('./bootstrap');
import $ from "jquery";
import validate from 'jquery-validation'

$(document).ready(function () {

        let pages = ["#page1", "#page2", "#page3"];
        let currentPage = 0;


        let requiredFieldsPerPage = {
            '#page1': ['name', 'lastname', 'email', 'password', 'password_confirmation'],
            '#page2': [],
            '#page3': [],
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
            if (password && !hasError ) {
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
            return hasError;
        }


        $("#form-toggle-forwards").click(function () {
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

                if ($('#role').val() == 1){

                }
                if ($('#role').val() == 2){

                }
                if ($('#role').val() == 3){

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


    }
)
;
