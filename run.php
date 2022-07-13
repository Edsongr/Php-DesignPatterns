<?php 

$users = (new App\Model\Users)->getAll(); 

echo '<ul>';

foreach($users AS $user){
    echo '<li>' .$user['name']. '<li>';
}

echo '</ul>';