$(document).ready(function(){
    
    $("#btnAdd").click(function(){
        $.ajax({
            url:"insert.php",
            method:"POST",
            data:$("#frm").serialize(),
            success: function (){
                toastr.success("Etudiant Ajouter" , 'Succes',{timeOut: 3000});
                reset();
            }
        })
    })
})