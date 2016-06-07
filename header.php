<!DOCTYPE html>
<html <?php
// gestion des langues
language_attributes();
?> class="no-js">
<head>
    <meta charset="<?php
    // encodage
    bloginfo('charset');
    ?>">
    <meta name="viewport" content="width=device-width">
    <?php
    // fonction permettant d'ajouter les scripts wordpress (css et js)
    wp_head();
    ?>
</head>

<body <?php
// ajout auto des classes dans le body
body_class();
?>>
