<?php

  if(isset($_POST['words'])){

    //var_dump($_POST);
    $number_words = $_POST['words'];
    $password = "";

    $word_bank = array('alpha','bravo','charlie','delta','echo',
                       'foxtrot','golf','hotel','indigo','juliet',
                       'kilo','lima','mike','november','oscar',
                       'papa','quebec','romeo','sierra','tango',
                       'uniform','victor','whiskey','xray','yankee',
                       'zulu');

    $number_bank = array('1','2','3','4','5','6','7','8','9');

    $character_bank = array('!','@','#','$','%','^','&','*','-','+','=','?');

    $keys_to_add = (array)array_rand($word_bank, $number_words);

    foreach($keys_to_add as $key){

      $word_to_add = $word_bank[$key];
      $password .= "$word_to_add ";
    }


    if( isset($_POST['special']) ){

      $password .= $character_bank[array_rand($character_bank)];
    }
    if( isset($_POST['number']) ){

      $password .= $number_bank[array_rand($number_bank)];
    }
    if( isset($_POST['capitalize']) ){

      $password = ucfirst($password);
    }

  }

?>
