<?php

require_once("inc/init.php");

$req = $pdo->query("SELECT * FROM employee ORDER BY salary");

$info = $req->fetch();
// print "<pre>";
// print_r($info);
// print "</pre>";

print "Liste des salariés en fonction du salaire - du moins payé au mieux payé ";

print "<ul>";

while($info = $req->fetch())
{
print "<li>$info[firstname] : $info[salary]</li>";
}
print "</ul>";
?>