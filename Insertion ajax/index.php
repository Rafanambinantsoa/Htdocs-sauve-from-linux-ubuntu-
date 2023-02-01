<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css">
    <script src="jquery.js"></script>
</head>

<body>
    <div class="container">
        <div class="form-group">
            <label for="">Nom</label>
            <input type="text" class="form-control" id="nom">
        </div>

        <div class="form-group">
            <label for="">Prenom</label>
            <input type="text" class="form-control" id="prenom">
        </div>

        <div class="div">
            <button id="karim" class="btn btn-success">Valider</button>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#karim').click(function() {
                var nom = $('#nom').val();
                var prenom = $('#prenom').val();

                if (nom != "" && prenom != "") {
                    $.ajax({
                        url: "save.php",
                        type: "POST",
                        data: {
                            nom: nom,
                            prenom: prenom
                        },
                        cache: false,
                        success: function(dataResult) {
                            alert(dataResult)
                            
                        }
                    })
                }
                else{
                    alert("please fill all the fiels");
                }

            })
        })
    </script>
</body>

</html>