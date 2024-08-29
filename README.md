<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">🚀 Development of a CRUD structure for future references</p>

## Resources Used
- Visual Studio Code
- SQL Server Management Studio (SSMS):
- PHP 8.0.3
- XAMPP
- Laravel 


# Initial environment setup


## Creating the project

The create-project command is used to create a new project from a template in Laravel. 

<details>
<summary>Click to show details about</summary>

```
composer create-project laravel/laravel CrudLaravel
```

### Use Artisan to Start the Server

``` 
php artisan serve 
```

</details>

## Database Connection

<details>
<summary>Click to show details about how to configure </summary>

### Check for the Extension File

Ensure that the php_pdo_sqlsrv.dll file is located in the correct directory:

![image](https://github.com/user-attachments/assets/2052b564-5392-4197-a30b-0dbf79ceb326)

Expected Path: C:\xampp\php\ext\php_pdo_sqlsrv.dll


<strong> If the file does not exist, follow the steps below: </strong>

<details>
<summary>Click to show details about how to configure </summary>

#### STEP 1

Check the PHP version.

![image](https://github.com/user-attachments/assets/e08ed15f-bfd3-47b1-b4df-7d36e8bbfa5e)


#### STEP 2

The pdo_sqlsrv extension must be compatible with the PHP version you are using. Download the correct version of the extension from the Microsoft Drivers for PHP for SQL Server.

Go to the SQL Server driver versions for PHP and download the version corresponding to your PHP version:

https://github.com/microsoft/msphpsql/releases 

![image](https://github.com/user-attachments/assets/7c6b92da-67e9-458f-bd0e-0ff19504748f)


#### STEP 3

Move the downloaded dll file to the following path and remove the version number from the file name:

C:\xampp\php\ext\php_pdo_sqlsrv.dll

![image](https://github.com/user-attachments/assets/e815bf3f-ee1c-40ea-837a-c42c1369f1f3)


#### STEP 4

Configure the php.ini file located in C:\xampp\php\ and add or verify the line to load the extension:

```
extension=pdo_sqlsrv
```

![image](https://github.com/user-attachments/assets/83d987e0-3a1f-4917-a23b-60295eac4b92)


</details>

<br>

### Configure Connection Files

##### .env for SQL Server Connection Configure 

Update the .env file to configure the connection to the SQL Server from SQL Server Management Studio.

![image](https://github.com/user-attachments/assets/d388ab97-fccd-4d07-9e66-f9869456ded0)


#### Configure database/config.php and Add the Connection

Edit the database/config.php file and add the connection settings for SQL Server.

![image](https://github.com/user-attachments/assets/439198b3-2800-4a3c-bb95-4ed86f0ee323)

<br>


</details>

# Project Documentation


## Create Models

#### Model Order: One to Many


## Migrations


## Template Inheritance

#### Layout (Master Page):

#### Rendering Content


## Controller

### Actions


## Routes


## Views


![image](https://github.com/user-attachments/assets/4b9869df-e9ee-454d-a36f-ba1b861219dd)

![image](https://github.com/user-attachments/assets/3074f2eb-fbb8-4335-96e5-69e9434b63b9)

![image](https://github.com/user-attachments/assets/6714470f-573c-4344-b806-7fd7f356f3e3)

![image](https://github.com/user-attachments/assets/f59ccf8e-3ef1-4d2a-a47e-3d21a74d40f8)






