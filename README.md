Food Tracker - Symfony Projet
========================

Welcome to our project page. This is our Licence 3 MIAGE project. 

--------------
**Team member :**

* Mohammad Amir Azfar AJMAN

* Wan Hazmi WAN MOHD NOR

* Philippe MANGE

----------
This is a Symfony Standard Edition project with the version "3.4"

Project start date : December 2017

Project estimated end date : 30 March 2018

----

**Notes pour membres du projet**

* Avant de pusher votre travail, oubliez pas de **PULL** le projet pour avoir la version courrant de notre projet. Puis, vous pouvez push le votre tranquillemnet.
* Il faut preciser chaque message de votre commit
* N'oubliez pas de générer votre propre Controller avec le bon nom (FrontBundle:MenuController) et puis précisez les actions nécessaire(ou vous pouvez les ajouter manuellement) et générer le template de twig aussi(**Attention de les mettez dans le bon répertoire**)


------

**Note pour debugger quelque trucs**
* Si vous n'arrivez pas à afficher la page normalement(mais en app_dev.php est bon), vider la cache de prod s'il vous plaît avec ce commande :
    
    **php bin/console cache:clear --env=prod**
    
* S'il a marqué que symfony ne trouve pas votre Bundle(normalement le FrontBundle), faites-vous comme ceci:

    **php composer.phar dump-autoload**
    
    (**Attention** Si n'avez pas installer composer avec composer.exe, utilisez le composer.phar et copiezez-le dans le root de projet et puis lancer la commande ci-dessus)
    
* Pour le path render dans votre fonction action d'un controller, le syntaxe correct est comme ceci : 

    **'@Front/Votre_Controller/le_twig_correspondant'**

* N'oubliez pas de voir le routage correcte sur les actions de votre controller

* Pour faire fonctionner les bar de navigateur(des plusieurs menu), il faut mettre à jour **tous les paths** dans "href" des liste dans le fichier suivant:
    
    **app/Ressources/views/base.html.twig**

    Les nom de tous les path dépendent sur comment vous avez nommé votre répertoire local.
    


What's inside?
--------------

The Symfony Standard Edition is configured with the following defaults:

  * An AppBundle;

  * Twig as the only configured template engine;

  * Doctrine ORM/DBAL;

  * Swiftmailer;

  * Annotations enabled for everything.

It comes pre-configured with several necessary bundles.

All libraries and bundles included in the Symfony Standard Edition are
released under the MIT or BSD license.

