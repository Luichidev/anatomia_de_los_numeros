<?php
  require_once("components/header.php");
  echo menu($menu, "page02.php");
?>
  <div class="paper">    
    <div class="content">
      <?php
        echo numbers_anatomy(501, 1000);
        ?>
    </div>
  </div>
<?php 
  require_once("components/footer.php");
?>