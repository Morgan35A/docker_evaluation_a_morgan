Question 1 : Un conteneur est un environnement d'éxécution contenant tous les composants nécéssaires, tels que le code, les dépendances et les bibliothèques, nécéssaires pour exécuter le code de l'application sans utiliser les dépendances de la machine hote.

Question 2 : Non docker n'a pas inventé les noyaux linux (cgroups ou namespace) permettant l'isolation des processus, cependant il a ajouter de nombreuse fonctionnalité, il a facilité l'utilisation des conteneur avec une interface utilisateur (docker hub) et des outils de gestion d'infrastructure (docker compose). Docker a contribuer a la standardisation.

Question 3 : Docker est principalement conçu pour cela car chaque conteneur peut etre démarré, arreté ou supprimer facilement sans impact sur l'état de l'application. Les conteneurs sont éphémères.

Question 4 : l'artefact déployer est l'image docker (fichier exécutable contenant tout le nécéssaires pour éxécuter une application). Les propriété désirable sont : sa taille minimal, sa portabilité, et sa cohérence.

Question 5 : Docker run = créer et démarrer un nouveau conteneur et docker exec = exécuter une commande dans un conteneur déja en cours d'exécution.

Question 6 : Oui il est possible de lancer des des processus supplémentaire dans un conteneur en cours d'exécution, cependant cela n'est pas recommandé

Question 7 : Utilisé un tag précis est important pour garantir d'avoir toujours la meme version d'une image pour la stabilité et la reproductibilité.

Question 8 : Docker run lance un nouveau conteneur, "-d" lance le conteneur en arrière-plan en mode détacher, "-p 9001:80" lie le port 80 au port 9001 de la machien hote, "--name my-php" ici cela donne le nom au conteneur my-php, "-v "$PWD":/var/www/html" cela monte un volume entre le repertoire de travail pwd et l erepertoire du conteneur /var/www/htmm, "php:8.2-apache" ici c'est l'image docker que l'on va utiliser

Question 9 : la commande est "docker stop $(docker ps -q)"

Question 10 : Pour cela il faut utilisé des images légéres "alpine", reduire le nombre d'instruction dans le dockerfile et supprimer les fichiers temporaire.

Question 11 : C'est faux, l'état temporaire est perdu, mais les données sur les volumes ou les fichiers systèmes montés sont conservées.

Question 12 : Vrai si l'on souhaite modifié une image noius devons créer une noivelle image bsé sur l'ancienne

Question 13 : On peut publier des images via docker hub avec les commande "docker push" pour publier et "docker pull" pour les obtenir

Question 14 : l'image la plus petitte possible s'appel "l'alpine", elle contient seulement les composants nécéssaires a l'exécution d'une application minimale

Question 15 : Il communique avec le serveur Dockerd via une API RESTful via docker.sock ou une connexion tcp. Il est possible de configuré Docker pour qu'il accepte les connexions http meme si par défaut il est recommandé d'utilisé HTTPS

Question 16 : Le processus par défaut est défini dans le dockerfile par la commande "entrypoint", on peut remplacer un processus par un autre avec la commande "CMD" 
