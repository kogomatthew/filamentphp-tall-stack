# Cloning, Installing Dependencies, and Running the Project Locally

This guide outlines the steps required to clone a TallStack project from a remote repository, install its dependencies using Composer and npm, migrate the database, and run it locally on your machine. It also includes a guide for running Filament PHP, which is a Laravel package that provides a set of pre-built admin interfaces.

## Prerequisites

Before you begin, ensure that the following software is installed on your machine:

- Git: a version control system used for managing source code.
- PHP: a server-side scripting language that runs on the web server.
- Composer: a package manager used for managing PHP dependencies.
- Node.js: a JavaScript runtime environment that allows you to run JavaScript code on the server.
- MySQL: a relational database management system.

## Cloning the Project

1. Open a terminal or command prompt window.
2. Navigate to the directory where you want to store the cloned project.
3. Run the following command to clone the project:

   ```bash
   git clone https://github.com/kogomatthew/filamentphp-tall-stack.git
   ``` 

## Installing Dependencies

1. Navigate to the root directory of the cloned project.
2. Run the following command to install the project's PHP dependencies:

   ```bash
   composer install
   ```

   This will install all the required packages and dependencies that the project needs to run.

3. Run the following command to install the project's front-end dependencies:

   ```bash
   npm install
   ```

   This will install all the required packages and dependencies that the project needs to run.

## Migrating the Database

1. Ensure that MySQL is running on your machine.
2. Create a new MySQL database for the project.
3. Copy the `.env.example` file to a new file called `.env`, and set the `DB_DATABASE`, `DB_USERNAME`, and `DB_PASSWORD` variables to the appropriate values for your MySQL database.
4. Run the following command to migrate the database:

   ```bash
   php artisan migrate
   ```

   This will create the required tables in the database.
   
   5. (Optional) Seed test data

       ```bash
       php artisan db:seed
       ```


## Running Filament PHP 

1. Run the following command to create a new user account for Filament PHP:

  ```bash
  php artisan make:filament-user 
  ```

   This will prompt you to enter a name, email address, and password for the new user account.

2. Run the following command to start the development server:

   ```bash
   php artisan serve
   ```

   This will start the development server on `http://localhost:8000`.

3. Navigate to `http://localhost:8000/admin/login` to log in to the Filament PHP admin interface.

## Starting the Application

1. Run the following command to start the application:

   ```bash
   npm run dev
   ```

   This will start the application in development mode, which includes live reloading.

2. Once the application has started, open a web browser and navigate to `http://localhost:8000` to view the application.

## For more info
  https://filamentphp.com/docs/2.x/admin/installation
