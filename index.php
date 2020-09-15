<?php
$auto = filter_input(INPUT_POST, "auta");
$spz = filter_input(INPUT_POST, "spz");
$rok = filter_input(INPUT_POST, "rok") ;
$submit = filter_input(INPUT_POST, "submit");
$types = array("osobní","nákladní","autobus","karavan","trolejbus")

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
if (isset ($submit)) { ?>
    Typ:<?= $auto ?> <br>
    SPZ:<?= $spz ?>  <br>
    Rok výroby:<?= $rok ?>
    <?php 
     ?>
     <?php
      if ($rok >= 2010) { ?>
        Moderní
       <?php 
      } elseif ($rok >= 1991) { ?>
          Ojeté
        <?php  
      } else { ?>
        Veterán
     <?php 
      }
      } else {
          
        ?>   
    <form action="index.php" method="post">
      Typ vozidla:<select name="auta" id="auta">
      <?php foreach ($types as $type) { ?>
        <option value="<?= $type ?>"><?= $type ?> </option>        
    <?php
    }
     ?>
     
    
    
   
    
 
 </select> 
    <br> 
   SPZ<input type="text" name="spz"><br>
 
   Rok výroby<input type="number" name="rok" max="2020" min="1886"><br>
   <input type="submit" name="submit" value="odeslat">
</form>
<?php
}
?>
    
  
</body>
</html>