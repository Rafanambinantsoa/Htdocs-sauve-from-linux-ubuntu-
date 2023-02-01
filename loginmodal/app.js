$(document).ready(function(){
    $('#connexion').click(function(){
        var cin = $('#cin').val();
        var nif = $('#nif').val();
        if(nif != "" && cin != ""){
            $.ajax({
                url:'tsuka.php',
                method: 'POST',
                data:{nif:nif , cin:cin},
                success:function(data){
                    alert(data)
                    if(data == 'No'){
                        alert("Wrong Data");
                    }else{
                        document.location.href = 'dest.php' 
                        $('#exampleModal').modal('hide');
                        $("#cin").val("");
                        $("#nif").val("");

                    }
                }
            })
        }
        else{
            alert("Veuiller remplir tous les champs");
        }
    })

    $('#logout').click(function(){
        var action = "logout";
        $.ajax({
            url: 'dest.php',
            method: 'POST',
            data:{action:action},
            success:function(){
                document.location.href ='index.php';
            }
        })
    })
})
