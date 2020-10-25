# staticfile-to-mysql
php script to insert static file to mysql

# what is this
This is php snippet to convert your static files (normally in markdown) to mysql data

Case you might use this, when move from SSG (static site generator)  to server side that requires database like mysql

# How to
Inside index.php is just snippet.

You need to complete it with your own code.

-prepare your database, table and columns that you need
-add mysql connection
-php snippet inside index.php
-insert into query for each of your column

# Assumption
1. It assumes all your static files/contents are inside "blog" folder, feel free to change it
2. It assumes the file structure as follows:
```
+++
title = "its title here"
description = "description here"
date = "2018-11-17T18:20:39+00:00"
tag = "html"
+++ 
body here ...
```
