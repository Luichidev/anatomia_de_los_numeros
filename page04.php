<?php
  require_once("components/header.php");
  echo menu($menu, "page04.php");
?>
  <div class="paper">
    <div class="content">
      <?php
        echo numbers_anatomy(1501, 2000);
        ?>
    </div>
  </div>
<?php 
  require_once("components/footer.php");
?>