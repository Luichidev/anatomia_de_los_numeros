<?php
  require_once("components/header.php");
  echo menu($menu, "page05.php");
?>
  <div class="paper">
    <div class="content">
      <?php
        echo numbers_anatomy(2001, 2500);
        ?>
    </div>
  </div>
<?php 
  require_once("components/footer.php");
?>