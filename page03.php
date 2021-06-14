<?php
  require_once("components/header.php");
  echo menu($menu, "page03.php");
?>
  <div class="paper">
    <div class="content">
      <?php
        echo numbers_anatomy(1001, 1500);
        ?>
    </div>
  </div>
<?php 
  require_once("components/footer.php");
?>