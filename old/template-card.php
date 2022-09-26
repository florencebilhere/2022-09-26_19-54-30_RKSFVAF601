
 <?php 
 

 function TemplateCardRender ($name, $phone, $website, $suite, $street, $zipcode, $city) { ?>
 <style>
<?php 
include 'style.css'; 
?>
</style>
    <div class='card-container'>
        <div class='card u-clearfix'>
    <div class='card-body'>
      <span class='card-number card-circle subtle'>1</span>
      <span class='card-author subtle'><? echo ($website) ?></span>
      <h2 class='card-title'> <?  echo ($name) ?> </h2>
      <span class='card-description subtle'><? echo ($suite)?> <? echo($street)?> <? echo ($zipcode)?> <? echo ($city) ?></span>
      
      <div class='card-read'>Read</div>
      <span class='card-tag card-circle subtle'> 1</span>
    </div>
    <img src='http://www.barbare.brutdelab.fr/wp-content/uploads/2022/05/avatar-profil-copie.jpg' alt='' class='card-media' />
  </div>
  <div class='card-shadow'></div>
</div>
<?php } ?>



