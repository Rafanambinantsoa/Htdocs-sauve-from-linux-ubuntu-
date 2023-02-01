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




