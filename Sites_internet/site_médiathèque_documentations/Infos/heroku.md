# postgreSQL -> Symfony -> Heroku

Dans le dossier source

```
composer require doctrine/doctrine-bundle
```

Modifier config/packages/doctrine.yaml 

```yaml
driver: 'pdo_pgsql'
charset: utf8
```

Allez sur heroku :

https://dashboard.heroku.com/apps

choississez le nom de l'heroku que vous avez créez :

allez sur ce lien :

https://elements.heroku.com/addons

Cherchez Heroku postgres puis cliquez sur Install Heroku Postgres.

Add-on plan : Hobby Dev - Free

App to provision : l'heroku que vous avez crée

Submit order form

Pour vérifier que cela a bien été installez allez dans votre projet symfony-heroku source et tapez dans le terminal :

```
heroku addons
```

Vous devriez voir postgres apparaitre

Allez dans les settings de votre heroku sur le site

Reveal config vars, copiez ce qu'il y a dans DATABASE_URL vous devriez avoir quelque chose du type :

```
postgres://skklrmcnvrsflq:1f6edfa1f14342a4b26d61a267c951aa2f3160ba7f017a4345c9182deac46372@ec2-54-146-91-153.compute-1.amazonaws.com:5432/dcutu1c8od6v5c
```

mettez le dans votre .env pour DATABASE_URL

Et vous n'avez plus qu'à crée vos entités avec 

```
php bin/console make:entity
```
