$(document).ready(function(){

    // get all student
    getAllStudent();

    function getAllStudent(){
        $.ajax({
            url: "backend/read.php",
            method:"POST",
            dataType: "json",
            success: function(res){
                getStudent(res.userdata);
            }
        });
    }

    function reset(){
        $("#myModal").modal("hide");
        $("#numMatr").val("");
        $("#nom").val("");
        $("#prenom").val("");
        $("#age").val("");
        $("#dateNais").val("");
        $("#email").val("");
        $("#telephone").val("");
        $("#adresse").val("");
        $("#sexe").val("Masculin");
        $("#niveau").val("");
        $("#mention").val("");
        $("#annee").val("");
    }

    function getStudent(response){
        var data = "";
        $.each(response, function (index, value){
            data += "<tr>";
            data += "<td>"+(index+1)+"</td>";
            data += "<td>"+value.num_matr+"</td>";
            data += "<td>"+value.nom_etu+"</td>";
            data += "<td>"+value.prenom_etu+"</td>";
            data += "<td>"+value.age+"</td>";
            data += "<td>"+value.date_nais+"</td>";
            data += "<td>"+value.email+"</td>";
            data += "<td>"+value.telephone+"</td>";
            data += "<td>"+value.adresse+"</td>";
            data += "<td>"+value.sexe+"</td>";
            data += "<td>"+value.niveau+"</td>";
            data += "<td>"+value.mention+"</td>";
            data += "<td>"+value.anne_univ+"</td>";
            data += "<td data-attr ="+value.id+"><button class='btn btn-info btnEdit' id='edit'>Modifier</button></td>";
            data += "<td data-attr ="+value.id+"><button class='btn btn-danger btnDel' id='delete'>Supprimer</button></td>";
            data += "</tr>";
            

        });
        $("tbody").html(data);
    }

    //Add etudiant
    $("#btnAdd").click(function(){
        $.ajax({
            url:"backend/insert.php",
            method:"POST",
            data:$("#frm").serialize(),
            success: function (){
                toastr.success("Etudiant Ajouter" , 'Succes',{timeOut: 3000});
                getAllStudent();
                reset();
            }
        })
    })

    //Delete Student
    $("body").on("click",".btnDel", function(){
        var id = $(this).parent("td").data("attr");
        bootbox.confirm("Est ce que vous etes sur de supprimer cet etudiant(e)!", function(result){
            if(result){
                $.ajax({
                    url: "backend/delete.php",
                    method: "post",
                    data:{uid: id},
                    success: function(res){
                        $(this).parent("td").parent("tr").remove();
                        toastr.success(res,'Succes',{timeOut: 3000});
                        getAllStudent();
                    }
                })
            }else{
                bootbox.alert("La suppression est annuler");
            }
        });
    });

    //Edit student information
    $("body").on('click',".btnEdit", function(){
        var id        = $(this).parent("td").data("attr");
        var numMatr   = $(this).parent("td").prev("td").prev("td").prev("td").prev("td").prev("td").prev("td").prev("td").prev("td").prev("td").prev("td").prev("td").prev("td").text();
        var nom       = $(this).parent("td").prev("td").prev("td").prev("td").prev("td").prev("td").prev("td").prev("td").prev("td").prev("td").prev("td").prev("td").text();
        var prenom    = $(this).parent("td").prev("td").prev("td").prev("td").prev("td").prev("td").prev("td").prev("td").prev("td").prev("td").prev("td").text();
        var age       = $(this).parent("td").prev("td").prev("td").prev("td").prev("td").prev("td").prev("td").prev("td").prev("td").prev("td").text();
        var dateNais  = $(this).parent("td").prev("td").prev("td").prev("td").prev("td").prev("td").prev("td").prev("td").prev("td").text();
        var email     = $(this).parent("td").prev("td").prev("td").prev("td").prev("td").prev("td").prev("td").prev("td").text();
        var telephone = $(this).parent("td").prev("td").prev("td").prev("td").prev("td").prev("td").prev("td").text();
        var adresse   = $(this).parent("td").prev("td").prev("td").prev("td").prev("td").prev("td").text();
        var sexe      = $(this).parent("td").prev("td").prev("td").prev("td").prev("td").text();
        var niveau    = $(this).parent("td").prev("td").prev("td").prev("td").text();
        var mention   = $(this).parent("td").prev("td").prev("td").text();
        var annee     = $(this).parent("td").prev("td").text();
        $("#vid").val(id);
        $("#numMatr").val(numMatr);
        $("#nom").val(nom);
        $("#prenom").val(prenom);
        $("#age").val(age);
        $("#dateNais").val(dateNais);
        $("#email").val(email);
        $("#telephone").val(telephone);
        $("#adresse").val(adresse);
        $("#sexe").val(sexe);
        $("#niveau").val(niveau);
        $("#mention").val(mention);
        $("#annee").val(annee);
        $("#myModal").modal("show");
        $("#btnAdd").hide();
        $("#btnEdit").show();

    });

    $("#btnEdit").click(function(){
        $.ajax({
            url: "backend/edit.php",
            method: "post",
            data: $("#frm").serialize(),
            success: function(res){
                reset();
                toastr.success(res, 'Success', {timeOut: 3000});
                getAllStudent();
                $("#myModal").modal("hide");
            }
        })
    });

    //create button code
    $("#btnCreate").click(function(){
        $("#btnAdd").show();
        $("#btnEdit").hide();
    })

})