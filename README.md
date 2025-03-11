Question 2 : la commande pour ouvrir un shell bash interactif est "docker exec -it mysql_database bash" ensuite il faut se connecter "mysql -u db_client -p" puis ensuite pour vérifier la base de donnée on utilise les commande suivantes "SHOW DATABASES; ", "USE docker_doc_dev; ", "SHOW TABLES;", "SELECT * FROM article;".

Question 7 : la commande pour lancer l'environnement de développement est "docker compose --env-file .env.dev up -d" et la commande pour lancer l'environnement de production est "docker compose --env-file .env.prod up -d"

Question 8 : Non mettre des informations sensibles dans des varaibales d'environnement n'est pas une bonne pratique car elle peuvent etre exposé accidentellement, c'est informations peuvent etre lu par d'autre utilisateur ayant accès a la machine ou etre exposé dans les logs. Pour stocker les données sensible il existe un outils "Docker Secrets". il est permet de stocker les informations sensibles de manière sécurisé et les rendres utilisable seulement au services qui en ont besoin. Les secret ne sont pas stocker dans les images ni dans les fichier de configuration.



