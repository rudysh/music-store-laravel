var countries = [
    "Afghanistan", "Albania", "Algeria", "Andorra", "Angola", "Antigua and Barbuda", "Argentina", "Armenia", "Australia", "Austria",
    "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bhutan",
    "Bolivia", "Bosnia and Herzegovina", "Botswana", "Brazil", "Brunei", "Bulgaria", "Burkina Faso", "Burundi", "Cabo Verde", "Cambodia",
    "Cameroon", "Canada", "Central African Republic", "Chad", "Chile", "China", "Colombia", "Comoros", "Congo (Congo-Brazzaville)", "Costa Rica",
    "Croatia", "Cuba", "Cyprus", "Czechia (Czech Republic)", "Democratic Republic of the Congo", "Denmark", "Djibouti", "Dominica", "Dominican Republic",
    "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Eswatini (fmr. 'Swaziland')", "Ethiopia", "Fiji", "Finland"
    ];

$(document).ready(function() {

    $("#inputPais").autocomplete({
        source: countries
    });

    $("#contactForm").submit(function(event) {
        event.preventDefault();

        var name = $("#inputNombre").val();
        var email = $("#inputEmail").val();
        var asunto = $("#inputAsunto").val();
        var pais = $("#inputPais").val();
        var mensaje = $("#inputMensaje").val();

        if (name.trim() === "") {
            $("#inputNombre").addClass("missingData")
            displayAlert("!Debe de Ingresar el Nombre!");
            $('#inputNombre').focus();
            return;
        }

        if (asunto.trim() === "") {
            $("#inputAsuntoe").addClass("issingData")
            displayAlert("!Debe de Ingresar el asunto!");
            $('#inputAsunto').focus();
            return;
        }
        if (pais.trim() === "") {
            $("#inputPaisbre").addClass("issingData")
            displayAlert("!Debe de Ingresar el pasi!");
            $('#inputPais').focus();
            return;
        }
        if (mensaje.trim() === "") {
            $("#inputMensaje").addClass("issingData")
            displayAlert("!Debe de Ingresar el detalle!");
            $('#inputMensaje').focus();
            return;
        }

        if (email.trim() === "") {
            $("#inputEmail").addClass("emptyEmail")
            displayAlert("!Debe de Ingresar el email!");
            $('#inputEmail').focus();
            return;
        }

        this.submit();
    });


    function displayAlert(message) {
        $("#error-message").text(message);
        $("#error-message").show().fadeOut(8000);
    }
});
