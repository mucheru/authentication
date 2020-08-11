<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

  function randomPassword()
  {
      $alphabet = "0123456789";
      $pass = array();
      $alphaLength = strlen($alphabet) - 1;
      for ($i = 0; $i < 8; $i++)
      {
          $n = rand(0, $alphaLength);
          $pass[] = $alphabet[$n];
      }
      return implode($pass);
  }

?>