<?php
require_once '../model/produitModel.php';

$Pr = new ProduitModel();
$listeProduit = $Pr->afficher();
?>

<titre>Produits</titre>
</head>
<body>
    
</body>