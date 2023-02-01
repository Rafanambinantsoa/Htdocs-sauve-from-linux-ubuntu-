$(document).ready(function () {

    $('#kom').click(function () {
        // alert("nda");
        $('#agent').modal('show');
    })
    
    
    
    $('#login').click(function () {
        var nom = $('#nom').val();
        var code = $('#code').val();
        if (code != "" && nom != "") {
            $.ajax({
                url: 'admin.php',
                method: 'POST',
                data: { nom: nom, code: code },
                success: function (data) {
                     alert(data);
                    
                }
            })
        }
        else {
            alert("Veuiller remplir tous les champs");
        }
    })











})

