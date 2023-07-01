# Base de dades Mysql

A continuació es detalla les sentències per a crear una base de dades d'exemple que es fa servir en diferents exemples de codi per fer consultes a una taula.
Realitzat sobre EC2 amb Maria DB 10.5.18


## Assignar una contrasenya a l'usuari root perquè per defecte vé en blanc

`ALTER USER 'root'@'localhost' IDENTIFIED BY 'ITB2023.';`

## Crear la BBDD

`create database curs;`

`use curs;`

## Crear una taula
Exemple de taula anomenada "employees"

```CREATE TABLE `employees` (`emp_no` int(11) NOT NULL AUTO_INCREMENT,`birth_date` date NOT NULL,`first_name` varchar(14) NOT NULL,`last_name` varchar(16) NOT NULL,`gender` enum('M','F') NOT NULL,`hire_date` date NOT NULL, PRIMARY KEY (`emp_no`));```

## Insertar un registre d'exemple

Crearció d'un usuari Jordi Casas

```INSERT INTO `employees` (first_name, last_name, birth_date, gender, hire_date) values("Jordi","Casas", CURDATE(), "M", CURDATE());```

## Habilitar la connexió des d'una altra EC2 al Mysql

Per exemple, crear un usuari query per no utilitzar root que habilita l'accés des de la EC2 amb ip interna 172.31.88.206 al Mysql

`CREATE USER 'query'@'172.31.88.206' IDENTIFIED BY 'ITB2023.';`

`GRANT ALL ON curs.* TO query@'172.31.88.206';`

Si es vol habilitar l'accés per tota màquina d'origen:

`CREATE USER 'query'@'%' IDENTIFIED BY 'ITB2023.';`

`GRANT ALL ON curs.* TO query@'%';`

