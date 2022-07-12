#!/usr/bin/php
<?php 
  $n = "abc";

  foreach(file('/usr/share/dict/linux.words') as $line){
    if ( strpos( $line, $n ) !== false){
      echo "$line";
    }
  } 
?>