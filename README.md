# staticfile-to-mysql
php script to insert static file to mysql

# what is this
This is php snippet to convert your static files (normally in markdown) to mysql data

Case you might use this, when move from SSG (static site generator)  to server side that requires database like mysql

I don't write the "connection" and "insert into part", feel free write with your own need.

# How to
Inside index.php is just snippet.

You need to complete it with your own code.

- prepare your database, table and columns that you need
- add mysql connection
- customize the "php snippet" inside index.php
- write "insert into query" for each of your column

# What it does
- It will loop a certain folder where you put your static files
- separate between meta tag and the body, it could be with "+++" or "---" sign
- you can insert the avalable data to your DB

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

tag: how to move from static site generator to mysql, how to export static files to mysql, move from hugo to php, ...
