<?php
//sem argumento
function writeMsg() {
  echo "Hello world!";
}

writeMsg(); // call the function

//com passagem de argumento
function familyName($fname) {
  echo "$fname Refsnes.<br>";
}

familyName("Jani");
familyName("Hege");
familyName("Stale");
familyName("Kai Jim");
familyName("Borge");
?>