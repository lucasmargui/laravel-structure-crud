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
<summary>Click to show details about</summary>

### Check for the Extension File

Ensure that the `php_pdo_sqlsrv.dll` file is located in the correct directory:

![image](https://github.com/user-attachments/assets/2052b564-5392-4197-a30b-0dbf79ceb326)

**Expected Path:** `C:\xampp\php\ext\php_pdo_sqlsrv.dll`

### If the file does not exist (Optional):

#### STEP 1: Check the PHP version

![image](https://github.com/user-attachments/assets/e08ed15f-bfd3-47b1-b4df-7d36e8bbfa5e)

#### STEP 2: Download the Compatible Extension

The `pdo_sqlsrv` extension must be compatible with the PHP version you are using. Download the correct version of the extension from the Microsoft Drivers for PHP for SQL Server.

Go to the [SQL Server driver versions for PHP](https://github.com/microsoft/msphpsql/releases) and download the version corresponding to your PHP version:

![image](https://github.com/user-attachments/assets/7c6b92da-67e9-458f-bd0e-0ff19504748f)

#### STEP 3: Move the Downloaded DLL File

Move the downloaded `.dll` file to the following path and remove the version number from the file name:

`C:\xampp\php\ext\php_pdo_sqlsrv.dll`

![image](https://github.com/user-attachments/assets/e815bf3f-ee1c-40ea-837a-c42c1369f1f3)

#### STEP 4: Configure the `php.ini` File

Edit the `php.ini` file located in `C:\xampp\php\` and add or verify the following line to load the extension:

```ini
extension=pdo_sqlsrv
```

## Configure Connection Files

##### .env for SQL Server Connection Configure: 

Update the .env file to configure the connection to the SQL Server from SQL Server Management Studio.

![image](https://github.com/user-attachments/assets/d388ab97-fccd-4d07-9e66-f9869456ded0)


#### Configure database/config.php and Add the Connection:

Edit the database/config.php file and add the connection settings for SQL Server.

![image](https://github.com/user-attachments/assets/439198b3-2800-4a3c-bb95-4ed86f0ee323)


</details>

# Project Documentation

## Create Models

<details>
<summary>Click to show details about</summary>

### Create the Migration and Model MATERIAL 

Run the Artisan command to create the migration and model: 

```
php artisan make:model Material –m
```

This command creates a model called Material in app/Models/Material.php and a migration in database/migrations/xxxx_xx_xx_xxxxxx_create_materials_table.php for the corresponding table. 

###  Define Migration 

Open the generated migration in database/migrations/xxxx_xx_xx_xxxxxx_create_materials_table.php and define the table columns according to your Django class: 

![image](https://github.com/user-attachments/assets/4a3c1f15-eec8-420f-a7cd-74e8c35f60fa)


###  Define the Model 

Open the app/Models/Material.php file and define the model:

![image](https://github.com/user-attachments/assets/c9ab8e84-bf4c-4cb0-a884-242e61109230)


### Run Migrations 

Finally, run the migrations to create the table in the database: 

```
php artisan migrate
```

 
### Create the Migration and Model ORDER : One to Many 

Run the Artisan command to create the migration and model: 

```
php artisan make:model Order –m
```

This command creates a model called Material in app/Models/Order.php and a migration in database/migrations/xxxx_xx_xx_xxxxxx_create_order_table.php for the corresponding table. 

###  Define Migration 

Open the generated migration in database/migrations/xxxx_xx_xx_xxxxxx_create_order_table.php and define the table columns according to your Django class: 

![image](https://github.com/user-attachments/assets/e479cd94-f3e9-44e9-a63c-67466e2d9645)


###  Define the Model 

Open the app/Models/Order.php file and define the model:

![image](https://github.com/user-attachments/assets/fbf31bc2-6ab3-4096-aa45-1c73ae889780)

###  Change Model MATERIAL 

Open the app/Models/Material.php file and add the one-to-many relationship with Order

![image](https://github.com/user-attachments/assets/3f634060-844c-4127-b875-ef210b6be224)


### Run Migrations 

Finally, run the migrations to create the table in the database: 

```
php artisan migrate
```

</details>

## Migrations

<details>
<summary>Click to show details about</summary>

### Migration Structure

- **up() Method:** Defines the operations to be performed when the migration is applied, such as creating a table.
- **down() Method:** Defines the operations to revert the changes performed by the `up()` method, such as deleting a table.

### Creating Migrations

- **Command:** `php artisan make:migration migration_name`
  - **Example:** `php artisan make:migration create_products_table`
  - **Description:** This command creates a new migration file in the `database/migrations` folder. Migrations are used to create and modify tables in the database.

### Run Migrations

- **Command:** `php artisan migrate`
  - **Description:** Applies all pending migrations, creating or modifying tables in the database as defined in the migrations' `up()` methods.

### Check Migration Status

- **Command:** `php artisan migrate:status`
  - **Description:** Displays the status of each migration, indicating whether it was applied or not.

### Update Tables

- **Command:** `php artisan migrate:fresh`
  - **Description:** Removes all tables from the database using the `down()` method and recreates them using the `up()` method. **Warning:** This command will delete all tables from the database.

### Add Fields

- **Command:** `php artisan make:migration add_field_to_table`
  - **Example:** `php artisan make:migration add_category_to_products_table`
  - **Description:** Creates a new migration to add fields to an existing table. Use `Schema::table` to modify existing tables.

### Apply Changes

- **Command:** `php artisan migrate`
  - **Description:** After creating a migration to add or modify fields, run this command to apply the changes.

### Undo Changes

- **Command:** `php artisan migrate:rollback`
  - **Description:** Rolls back the last batch of migrations applied.

- **Command:** `php artisan migrate:reset`
  - **Description:** Rolls back all applied migrations and re-runs them. Deletes all tables and recreates them from the migrations.


</details>

## Template Inheritance

<details>
<summary>Click to show details about</summary>

### Layout (Master Page)

**Create the layouts folder:** In your Laravel project directory, navigate to `resources/views` and create a new folder called `layouts`.

**Add the main.blade.php file:** Inside the `layouts` folder, create a file called `main.blade.php`. This file will serve as the base layout for your pages.

![image](https://github.com/user-attachments/assets/0b647866-d364-482a-b31b-5bd06e878b1c)

**Main.blade.php file structure:** In the `main.blade.php` file, define the main HTML structure that will be shared across all pages that use this layout. Use the `@yield('content')` directive to indicate where the specific content of each page will be rendered.

![image](https://github.com/user-attachments/assets/14286e17-0e04-4b52-8fce-615864f2a1af)


### Rendering Content

**Create the home folder:** Create sessions that will be rendered within the main layout

**Create the material folder:** Create sessions that will be rendered within the main layout

**Create the order folder:** Create sessions that will be rendered within the main layout


![image](https://github.com/user-attachments/assets/a7fee61a-c73f-41e3-ad1d-42c25d7b81a6)

</details>

## Controller

<details>
<summary>Click to show details about</summary>

### Create the Controller 

Use Artisan, Laravel's command line tool, to generate the controller. Run the following command in the terminal: 

```
php artisan make:controller HomeController
````

This will create a HomeController.php file inside the app/Http/Controllers directory. 

 
### Define the Method for the Home Page: 

In the HomeController.php file, define an index method that will return the home.blade.php view: 

![image](https://github.com/user-attachments/assets/f1785cac-5aa0-41a4-9e61-3568503dd40e)


### Update the Route to Use the Controller:

Now, you need to update the route in the routes/web.php file so that it uses the HomeController instead of directly returning the view: 

![image](https://github.com/user-attachments/assets/879b50e2-898f-4175-835f-554da8ab6e4a)


### Actions

The `MaterialController` is responsible for managing all operations related to materials in the application. It allows users to view, create, edit and delete materials through a web interface. Below are described the main actions available in this controller and what each of them accomplishes.

![image](https://github.com/user-attachments/assets/392b7b9b-3111-4dc8-a853-44fe9c0e6070)


#### 1. `index()`
- **Description:** Lists all registered materials.
- **URL:** `GET /materials`
- **Return:** Renders the `material.material_list` view with the list of materials.

#### 2. `show($id)`
- **Description:** Displays the details of a specific material.
- **URL:** `GET /materials/{id}`
- **Parameters:**
  - `$id`: ID of the material that will be displayed.
- **Return:** Renders the `material.material_detail` view with the material details.

#### 3. `create()`
- **Description:** Displays the form to create a new material.
- **URL:** `GET /materials/create`
- **Return:** Renders the `material.material_form` view.

### 4. `store(Request $request)`
- **Description:** Processes the creation form and stores a new material in the database.
- **URL:** `POST /materials`
- **Parameters:**
  - `Request $request`: Creation form data.
- **Return:** Redirects to the details page of the newly created material.

#### 5. `edit($id)`
- **Description:** Displays the form to edit an existing material.
- **URL:** `GET /materials/{id}/edit`
- **Parameters:**
  - `$id`: ID of the material that will be edited.
- **Return:** Renders the `material.material_form` view with the material data.

#### 6. `update(Request $request, $id)`
- **Description:** Processes the edit form and updates the material in the database.
- **URL:** `PUT /materials/{id}`
- **Parameters:**
  - `$id`: ID of the material that will be updated.
  - `Request $request`: Edit form data.
- **Return:** Redirects to the list of materials with a success message.

#### 7. `destroy($id)`
- **Description:** Deletes an existing material from the database.
- **URL:** `DELETE /materials/{id}`
- **Parameters:**
  - `$id`: ID of the material that will be deleted.
- **Return:** Redirects to the list of materials after deletion.

</details>

## Routes

<details>
<summary>Click to show details about</summary>

![image](https://github.com/user-attachments/assets/55fa0ffb-c7e6-4596-9927-a4eba4c70cd7)

## Main Route

### 1. Home
- **URL:** `GET /`
- **Controller:** `HomeController`
- **Action:** `index()`
- **Route Name:** `home`
- **Description:** Renders the homepage of the application.

## Material Routes

Routes related to materials are grouped under the `materials` prefix.

### 1. List Materials
- **URL:** `GET /materials`
- **Controller:** `MaterialController`
- **Action:** `index()`
- **Route Name:** `material.index`
- **Description:** Displays a list of all registered materials.

### 2. Create Material
- **URL:** `GET /materials/create`
- **Controller:** `MaterialController`
- **Action:** `create()`
- **Route Name:** `material.create`
- **Description:** Displays the form to create a new material.

### 3. Store Material
- **URL:** `POST /materials/create`
- **Controller:** `MaterialController`
- **Action:** `store()`
- **Route Name:** `material.store`
- **Description:** Processes and stores the data for a new material in the database.

### 4. Show Material
- **URL:** `GET /materials/{id}`
- **Controller:** `MaterialController`
- **Action:** `show()`
- **Route Name:** `material.show`
- **Parameters:** 
  - `{id}`: ID of the material to be displayed.
- **Description:** Displays the details of a specific material.

### 5. Edit Material
- **URL:** `GET /materials/{id}/edit`
- **Controller:** `MaterialController`
- **Action:** `edit()`
- **Route Name:** `material.edit`
- **Parameters:** 
  - `{id}`: ID of the material to be edited.
- **Description:** Displays the form to edit an existing material.

### 6. Update Material
- **URL:** `PUT /materials/{id}`
- **Controller:** `MaterialController`
- **Action:** `update()`
- **Route Name:** `material.update`
- **Parameters:** 
  - `{id}`: ID of the material to be updated.
- **Description:** Processes and updates the data for an existing material in the database.

### 7. Delete Material
- **URL:** `DELETE /materials/{id}/delete`
- **Controller:** `MaterialController`
- **Action:** `destroy()`
- **Route Name:** `material.destroy`
- **Parameters:** 
  - `{id}`: ID of the material to be deleted.
- **Description:** Deletes a specific material from the database.

## Order Routes

Routes related to orders are grouped under the `orders` prefix.

### 1. List Orders
- **URL:** `GET /orders`
- **Controller:** `OrderController`
- **Action:** `index()`
- **Route Name:** `order.index`
- **Description:** Displays a list of all registered orders.

### 2. Create Order
- **URL:** `GET /orders/create`
- **Controller:** `OrderController`
- **Action:** `create()`
- **Route Name:** `order.create`
- **Description:** Displays the form to create a new order.

### 3. Store Order
- **URL:** `POST /orders/create`
- **Controller:** `OrderController`
- **Action:** `store()`
- **Route Name:** `order.store`
- **Description:** Processes and stores the data for a new order in the database.

### 4. Show Order
- **URL:** `GET /orders/{id}`
- **Controller:** `OrderController`
- **Action:** `show()`
- **Route Name:** `order.show`
- **Parameters:** 
  - `{id}`: ID of the order to be displayed.
- **Description:** Displays the details of a specific order.

### 5. Edit Order
- **URL:** `GET /orders/{id}/edit`
- **Controller:** `OrderController`
- **Action:** `edit()`
- **Route Name:** `order.edit`
- **Parameters:** 
  - `{id}`: ID of the order to be edited.
- **Description:** Displays the form to edit an existing order.

### 6. Update Order
- **URL:** `PUT /orders/{id}`
- **Controller:** `OrderController`
- **Action:** `update()`
- **Route Name:** `order.update`
- **Parameters:** 
  - `{id}`: ID of the order to be updated.
- **Description:** Processes and updates the data for an existing order in the database.

### 7. Delete Order
- **URL:** `DELETE /orders/{id}/delete`
- **Controller:** `OrderController`
- **Action:** `destroy()`
- **Route Name:** `order.destroy`
- **Parameters:** 
  - `{id}`: ID of the order to be deleted.
- **Description:** Deletes a specific order from the database.


</details>

## Views

<details>
<summary>Click to show details about</summary>

### Data Flow

1. **Reception of Request**
   
   When a user accesses a URL, the browser sends an HTTP request to the Laravel server.

2. **Routing**
   
   Laravel uses the routing system to map the URL to a specific controller and method. Routes are defined in the `routes/web.php` or `routes/api.php` files.

   **Routing Example:**
   ```php
   // routes/web.php
   Route::get('/', [MaterialController::class, 'index'])->name('material.index');


3. **Action and Controller**

The controller is responsible for processing the request and applying the business logic. The action method in the controller is called, which can process data and prepare the response.

![image](https://github.com/user-attachments/assets/291633b3-6318-491d-a5ec-ca9cc589351b)


5. **Render View**

![image](https://github.com/user-attachments/assets/ec56f2d7-c45b-4b39-9a7f-273be8daed45)


</details>

![image](https://github.com/user-attachments/assets/4b9869df-e9ee-454d-a36f-ba1b861219dd)

![image](https://github.com/user-attachments/assets/3074f2eb-fbb8-4335-96e5-69e9434b63b9)

![image](https://github.com/user-attachments/assets/6714470f-573c-4344-b806-7fd7f356f3e3)

![image](https://github.com/user-attachments/assets/f59ccf8e-3ef1-4d2a-a47e-3d21a74d40f8)






