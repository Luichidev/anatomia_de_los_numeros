<?php
  require_once("components/header.php");
  echo menu($menu, "index.php");
?>
  <div class="paper">
    <div class="content">
      <?php
        echo numbers_anatomy(1, 500);
        ?>
    </div>
  </div>
<?php 
  require_once("components/footer.php");
?>