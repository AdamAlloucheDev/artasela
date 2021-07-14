Bonjour,

Vous trouverez sur ce Repository Git : - le test en structure MVC locale, - Le fichier SQL de la BDD (dans les Assets),

Le test technique est aussi disponible en ligne, voici le lien :

    https://webstart-dev.ovh/~dv20allouche/artasela/

Quelques commentaires :

Pour ce qui est de la popup qui indique à l'utilisateur que le formulaire à bien été pris en compte,
elle a initialement été codée avec JS, néanmoins je me suis hurté à des bug la faisant disparaitre.
Dans le temps imparti, j'ai préféré avoir recours à une autre solution.
J'ai quand même laissé le code pour qu'il y ai une trensparence sur les methodes employées en JS.

La popup est finalement integrée en PHP et à l'aide de bootstrap.
Elle est stockée comme variable dans le tableau de $\_ SESSION, qui comporte une clé "message".
La variable est affichée à l'envoi du formulaire, ci celui ci ne contient pas d'erreurs.

En ce qui concerne les infos utilisateurs,
Imaginons que l'accès à ces infos sont possibles uniquement par un admin,
l'ID de ceux-ci sont visible pour faciliter le debug, la moération, ou simplement l'accès a leurs infos.
La date de création est aussi disponible,
Notez qu'en local elle apparaitra en englais, Une fois le site déployé sur un serveur distant, elle s'affichera correctement en français.

Bonne review :)
