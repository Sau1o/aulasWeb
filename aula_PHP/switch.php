<!--
switch (n) {
  case label1:
    código executado se n=label1;
    break;
  case label2:
    código executado se n=label2;
    break;
  case label3:
    código executado se n=label3;
    break;
    ...
  default:
    código executado se n for diferente de todos os label;
}
-->

<?php
$favcolor = "red";

switch ($favcolor) {
  case "red":
    echo "Your favorite color is red!";
    break;
  case "blue":
    echo "Your favorite color is blue!";
    break;
  case "green":
    echo "Your favorite color is green!";
    break;
  default:
    echo "Your favorite color is neither red, blue, nor green!";
}
?>s