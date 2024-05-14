<?php

use Password\Helpers\Hash;

require_once 'Hash.php';


echo Hash::create('!ashik$$');

echo "<pre>";
 
var_dump(Hash::check('!ashik$$', '$2y$10$GUy7Gdaclk9YQesxWhvBA.PiblVpn.lirW8zUPg1Uq/peCDAS1I3q'));

echo "</pre>";