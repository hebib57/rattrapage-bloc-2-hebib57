# Guide du déploiement

## Expliquez ci-dessous les étapes de déploiement de cette application :

### Étape 1 : 

- J'ai utilisé mon terminal de commande pour cloner le projet depuis GitHub directement dans le dossier "www" de Wamp64.
- J'ai crée un virtualhost qui pointe vers le dossier "public" du projet.

### Étape 2 :

* Dans "phpMyAdmin", j'ai crée une base de données MySQL pour le projet.
* J'ai importé le fichier "ecf-blog.sql" pour créer les tables.
* Dans le fichier "db_connect", j'ai adapté le nom de la base de données et vérifié que toutes les informations de connexion correspondent bien à ma base de données locale(host, dbname, utilisateur et password).

### Étape 3 :

* J'ai lancé mon virtualhost et ouvert l'application dans le navigateur.
