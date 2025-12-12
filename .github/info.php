<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introduction au PHP - Affichage de Variables</title>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; max-width: 800px; margin: 30px auto; padding: 0 20px; background-color: #f4f4f4; }
        .container { background: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); }
        h1, h2 { color: #333; border-bottom: 2px solid #ccc; padding-bottom: 5px; }
        .variable-output { margin-bottom: 15px; padding: 10px; background: #e9ecef; border-left: 5px solid #007bff; }
        code { background: #e0e0e0; padding: 2px 4px; border-radius: 3px; }
    </style>
</head>
<body>
    <div class="container">
        <h1> Introduction au PHP</h1>
        <p>Cette page démontre l'affichage de variables et les calculs simples effectués côté serveur avec PHP.</p>
        
        <?php
            
            $etablissement = "Université des Technologies";
            $module = "Développement Web Avancé";
            $annee = 2025;
            $nombreA = 42;
            $nombreB = 33;
            $pi = 3.14159;

            
            $somme = $nombreA + $nombreB;
            $produit = $nombreA * $nombreB;
            $division = $nombreA / $nombreB;
            $message_resultat = "Le résultat de la somme est : " . $somme;
        ?>

        <h2>Informations Générales</h2>
        <div class="variable-output">
            <p><strong>Nom de l’établissement :</strong> <?php echo $etablissement; ?></p>
            <p><strong>Module :</strong> <?php echo $module; ?></p>
            <p><strong>Année :</strong> <?php echo $annee; ?></p>
        </div>

        <h2>Exemples de Variables Numériques et Calculs</h2>
        
        <h3>Variables brutes</h3>
        <div class="variable-output">
            <p>Variable <code>\$nombreA</code> (Entier) : <?php echo $nombreA; ?></p>
            <p>Variable <code>\$nombreB</code> (Entier) : <?php echo $nombreB; ?></p>
            <p>Variable <code>\$pi</code> (Flottant) : <?php echo $pi; ?></p>
        </div>

        <h3>Résultats d'opérations</h3>
        <div class="variable-output">
            <p><strong>Addition :</strong> <?php echo $nombreA . " + " . $nombreB . " = " . $somme; ?></p>
            <p><strong>Multiplication :</strong> <?php echo $nombreA . " × " . $nombreB . " = " . $produit; ?></p>
            <p><strong>Division :</strong> <?php echo $nombreA . " ÷ " . $nombreB . " = " . $division; ?></p>
            <p><strong>Message de résultat :</strong> <?php echo $message_resultat; ?></p>
        </div>

    </div>
</body>
</html>