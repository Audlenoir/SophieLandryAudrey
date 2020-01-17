<a href="https://www.nhl.com/kings"><img src="https://upload.wikimedia.org/wikipedia/fr/5/5a/Kings_de_Los_Angeles.png" title="nhl" alt="kings"></a>

*** Exercice de mise en ligne d'un projet Ajax via GIT ***

# AJOUT DE FAVORIS 
> Des articles apparaissent pour l'utilisateur, au click l'article ajouté via la SESSION. Lors du déclick l'icone favori disparait et l'article est enlevé de la SESSION

> Tech : AJAX, JS, PHP

** N'oubliez pas de .... **
- Si vous souhaitez lier a une BBD, créez votre fichier d'initialisation dans le dossier inc.
- Les articles apparaissent en "dur" dans notre index, veuillez les remplacer par les votres.

> Ajout de notre GIF  [![Les favoris](https://media.giphy.com/media/aKjaEWISv9Ie4/giphy.gif)]()

## Table des matières 

-[Explication](#explication)
-[Remerciements](#remerciements)

---
## Explications
---
> Ajout d'une protion de code
``` PHP
// Retraits des favoris en SESSION
  if(isset($_POST["a"]) && $_POST["a"] == "remove")
            {
                foreach ($_SESSION['favorites'] as $key => $value)
                {
                  if($id == $value)
                  {
                    unset($_SESSION['favorites'][$key]);
                  }
                }
            }
```
- Pour retirer les favoris de ma SESSION je regarde bien que l'action demander est un "remove";
- Je fais concorder le $id envoyé en POST avec les valeurs enregistré en SESSION.

---
## Remerciements
---

A tous les étudiants !

[![Veuillez visiter notre site](https://media.giphy.com/media/UrcXN0zTfzTPi/giphy.gif)](https://www.keepizi.com)
