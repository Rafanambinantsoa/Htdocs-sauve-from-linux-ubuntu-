<?php include_once 'list.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="jquery-ui.css">
  

</head>
<body>
  <div id="conteneur">
    <div id="contenu">
    <!--
    Implémentation
    -->
      <div id="auCentre">
        <div class="moteur">
          Mots clés :<br />
          <input type="text" id="kim" />
        </div>
      </div>
    </div>
  </div>
   
   
  <script src="jquery/jquery.js"></script>
  <script src="jquery-ui.js"></script>
  <script>
    $( "#accordion" ).accordion();
    
    var availableTags = <?php $kim ?>
    $( "#kim" ).autocomplete({
      source: availableTags
    });
  </script>

  </script>  
</body>
</html>