<?= $head ?>
<!--
  Both variants will do the same.
  The 2nd one is slightly more efficient, though,
  since it doesn't use output buffering.
-->
<?php $main->print() ?>
