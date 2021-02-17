# laravel_practice

### Software
- php 7.4
- laravel 8
- composer 2.0.9
- apache 2.4.46
- phpmyadmin

### Description
Please watch the short recording (task_sample.gif) and create a data table which can nicely display the data in `Tennis_Rankings_2019.csv`.

### Back-end:

- create a migration (to create a table in DB)
 - file located at:
   database/migrations/2021_02_13_113816_create__info__table.php

- import `Tennis_Rankings_2019.csv` into the database
 - import file:
   App\Http/Controllers/api/TenController.php
 - function name is import and url:
   "/import"

- create CRUD APIs for front-end to consume
 - import file:
   App\Http\Controllers\api\TenController.php
 - Return data type:
   json
 - incoming parameters
   userid
 - view url:
   "/api/index" 

- practice: use sql sentence to read&creat table
 - show data
   import file:"app/Http/Controllers/InfoController.php"
   url:"/read"
   
 - insert data
   import file:"app/Http/Controllers/InfoInsertController.php"
   url:"/insert"
