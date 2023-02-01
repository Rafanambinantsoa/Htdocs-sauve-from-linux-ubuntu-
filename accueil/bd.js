$(document).ready(function () {
    $('#contrib').click(function () {
        $('#contri').modal('show');
    })

    $('#login_btn').click(function () {
        var cin = $('#cin').val();
        var nif = $('#nif').val();
        if (nif != "" && cin != "") {
            $.ajax({
                url: 'connexion_contri.php',
                method: 'POST',
                data: { nif: nif, cin: cin },
                success: function (data) {
                    // alert(data)
                    if (data == 'No') {
                        alert("Wrong Data");
                    } else {
                        document.location.href = 'indexa.php'
                        $('#contri').modal('hide');
                        $("#cin").val("");
                        $("#nif").val("");
                        alert("Success loged in");
                    }
                }
            })
        }
        else {
            alert("Veuiller remplir tous les champs");
        }
    })

    $('#kom').click(function () {
        // alert("nda");
        $('#agent').modal('show');
        $("#logan").click(function () {
            var nom = $('#nom').val();
            var code = $('#code').val();
             if (nom != "" && code != "") {
                 $.ajax({
                     url: 'connexion_agent.php',
                     method: 'POST',
                     data: { nom: nom, code: code },
                     success: function (data) {
                         // alert(data);
                         if (data == 'suc') {
                             document.location.href = 'indexi.php'
                             $('#contri').modal('hide');
                             $("#code").val("");
                             $("#nom").val("");
                             alert("Success loged in");
                         } else {
            alert("diso")
                         }

                     }
                 })

             }
             else {
                 alert('Complete all the fields')
             }
        })


    })

    $('#logout').click(function () {
        var action = "logout";
        $.ajax({
            url: 'indexa.php',
            method: 'POST',
            data: { action: action },
            success: function () {
                document.location.href = 'index.php';
            }
        })
    })



})