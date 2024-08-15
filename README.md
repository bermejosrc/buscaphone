# buscaPhone

A Content aggregator specialized in smartphones.

Originally a class project made in 2018, brought back to life as a way for me to learn modern PHP technologies and apply programming knowledge I've gathered over the years.

A history of the updates made to this project is kept in the [CHANGELOG.md](./CHANGELOG.md) file.

## Running this project locally

In order to run this project, you'll need [XAMPP 7.1.33](https://sourceforge.net/projects/xampp/files/) or any other LAMPP distribution that includes PHP 7.1.

Place all the files from this repository inside the `htdocs` directory and create a new `env.ini` file at the root of the website. The `env.ini` file must contain the following:

```
baseDatos = 
host = 
username = 
passwd = 
```

The values are: the database, host, username and password of the MySQL/MariaDB database, in that order.

At the moment, a full database backup is required in order to have all the needed data in the database, since some data is hardcoded. This will be fixed in future versions.