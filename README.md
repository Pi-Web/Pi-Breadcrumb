# Pi-Breadcrumb bundle
## Description
Ce bundle Symfony 5 permet la génération d'un fil d'Ariane sur votre site.

## Pré-requis
En utilisant le template par défaut de ce bundle, vous devez ajouter Bootstrap 5 et Font-Awesome Icons. Vous pouvez néanmoins surcharger le template par défaut.

## Installation
```
composer require pi-web/pi-breadcrumb
```

## Utilisation
Injectez la classe suivante
```
<?php

use PiWeb\PiBreadcrumb\Model\Breadcrumb;

public function __construct(
    private Breadcrumb $breadcrumb,
) {
}
```
Ajoutez des items à votre fil d'Ariane
```
$this->breadcrumb->addItem(
    $label, // Texte affiché.
    $url // URL de la page
);
```
Enfin ajoutez le code suivant dans votre template twig pour render le fil d'Ariane
```
{{ render(path('pi_breadcrumb_block')) }}
```

## Pour aller plus loin
### Surcharge du template
Surchargez le template du fil d'Ariane en créant le fichier twig ***bundles/PiBreadcrumbBundle/breadcrumb.html.twig***
Utilisez ensuite la variable ***breadcrumb.items*** qui contient tous les éléments du fil d'Ariane à afficher.