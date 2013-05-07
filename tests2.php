<?php
require_once ('config.php');
$players_mapper_web = new players_mapper_web();
$players_info = $players_mapper_web->add_id('76561198067833250')->add_id('76561198058587506')->load();
foreach($players_info as $player_info) {
    echo $player_info->get('realname');
    echo '<img src="'.$player_info->get('avatarfull').'" alt="'.$player_info->get('personaname').'" />';
    echo '<a href="'.$player_info->get('profileurl').'">'.$player_info->get('personaname').'\'s steam profile</a>';
}
print_r($players_info);

?>

<p> hello!</p>