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
                        alert("oiui");
                    }
                }
            })
        }
        else{
            alert("Veuiller remplir tous les champs");
        }
    })
})