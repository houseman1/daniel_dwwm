<!--  tutorial address
https://codeshack.io/crud-application-php-pdo-mysql/  -->

<!--What each file contains:
index.php      - Home page for my CRUD app
create.php     - Create new records with an HTML form and send data to the server with a POST request.
read.php       - Display records from our database table and navigate with pagination.
update.php     - Update existing records with an HTML form and send data to the server with a POST request.
delete.php     - Confirm and delete records by ID (GET request to the get the ID).
functions.php  -  Basic templating functions and MySQL connection function (so we don't have to repeat code in every file).
style.css      -  The sylesheet for our app, this will change the appearance of our app.-->

<!--When you navigate to https://localhost/phpcrud/ it will serve the index.php file
/** @noinspection PhpVoidFunctionResultUsedInspection */
<?php
include 'functions.php';
// my php code here

// Home page template below.
?>

<?=template_header('Home')?>

<div class="content">
    <h2>Home</h2>
    <p>Welcome to the home page!</p>
</div>

<?=template_footer()?>
