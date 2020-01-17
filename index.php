<?php

require_once("inc/init.php");



$pdoST_company = $pdo->query("SELECT * FROM employee ORDER BY  recruitment_date git ASC");

$company = $pdoST_company-> fetchAll();

//print"<pre>";
    //print_r($company);
//print"</pre>";





?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Company</title>
    <link rel="stylesheet" href="assets/css/style.css" media="screen">
    <link rel="stylesheet" href="assets/css/custom.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

        <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only"></span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Company</a>
                </li>
            
            </ul>
            <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search">
            <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>

<?php

print"<table border='1'>";
    print "<tr>";
        for($i=0; $i < $pdoST_company->columnCount();$i++)
        {
            $colonne = $pdoST_company->getColumnMeta($i);

            print"<th>" . ucfirst(str_replace("_", " ",$colonne["name"])) . "</th>";
    
        }

    print "</tr>";

    foreach($company as $company)
{
    print "<tr>";
    foreach($company as $key =>$value){
        print "<td>$value</td>";
}
print "</tr>";

}
print"</table>";




?>







</body>
</html>