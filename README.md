
# Jotacom Test

The objective is create a hotsite!

* [Requisitos](#requisitos-mínimos)
* [Running the project](#running-the-project)
  * [Locally](#locally)
  * [Globally](#globally)
* [Endpoints](#endpoints)

## Running the project
### Locally
1. Create a new database called `jotacom`
	```sql
	CREATE DATABASE jotacom;
	```
2. Copy the **.env.backup** file content and paste on the **.env** file. Remember to check your database informations like: DB_HOST, DB_USERNAME, DB_PASS and etc. 
3. Go to the directory in your terminal and run the following commands:
	a. Installing the project dependencies:
	```bash
	$ composer install
	```
	b. Migrating the table to the database:
	```bash
	$ php artisan migrate
	```	
	c. Starting the project:
	```bash
	$ php artisan serve
	```
### Globally
1. Open the project in the Web: [https://jotacom-exam.herokuapp.com/](https://jotacom-exam.herokuapp.com/)
## Routes

**/** =>  GET method
Render the hotsite page.

**/** => POST method:
Add a new lead to the database.

**/register** => GET method:
Render the register page.

**/register** => POST method:
Add a new user to the database.

**/login** => GET method:
Render the login page.

**/login** => POST method:
Verify if the user exist and the credentials are correct.

**Login credentials:**
```
	Email: admin@admin
	Password: admin123
```

**/panel** => GET method:
Check if the user are logged and show all the leads in a table.

## Requirements
 1. The layout needs to be equals to the .psd file
 2. The layout needs to be responsive
 3. The name and email fields needs to be required
 4. The email field needs to  be unique
 5. Needs to show error message
 6. All the user informations needs to be stored in the database

 
