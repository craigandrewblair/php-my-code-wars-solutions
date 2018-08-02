<?php

function findNb($m) {
  $n = 0;
  while ($m > 0) $m -= ++$n**3;
  return print_r($m ? -1 : $n);
}
findNb(100);
