# Database-creation-and-data-storage
Creating a database for a custom `infinityfree` server and inserting data through it. Two steps are needed in order to achieve this.

## Step one: Database creation

- create a database and name it in the `infinityfree` website.

Like so:

![Image ALT](https://github.com/Bandr-Mohammed/Database-creation-and-data-storage/blob/main/Screenshot%20(22).png?raw=true)

![Image ALT](https://github.com/Bandr-Mohammed/Database-creation-and-data-storage/blob/main/Screenshot%20(25).png?raw=true)

![Image ALT](https://github.com/Bandr-Mohammed/Database-creation-and-data-storage/blob/main/Screenshot%20(26).png?raw=true)


Then going to the database via `phpMyAdmin` to create a table and assign the number and type of columns.

Like so:

![Image ALT](https://github.com/Bandr-Mohammed/Database-creation-and-data-storage/blob/main/Screenshot%20(27).png?raw=true)

![Image ALT](https://github.com/Bandr-Mohammed/Database-creation-and-data-storage/blob/main/Screenshot%20(28).png?raw=true)
Naming the table `users` and giving it three columns.

![Image ALT](https://github.com/Bandr-Mohammed/Database-creation-and-data-storage/blob/main/Screenshot%20(29).png?raw=true)
First column for the ID (INT, primary key), second column for the name (VARCHAR), and third column is for the age (INT)

Now the data base is ready to receive and store data.

![Image ALT](https://github.com/Bandr-Mohammed/Database-creation-and-data-storage/blob/main/Screenshot%20(30).png?raw=true)



## Step two: Webpage creation and database bounding

Creating an HTML web page for displaying and inserting data to the database through it. However, it must be uploaded as a php file.

- The webpage HTML code that has been converted to a php file is uploaded in this repository -

1- Make sure to put the appropriate `server name`, `username`, `password`, and `dbname` that you get from `infinityfree`.
3- Edit the name of columns in the code.
2- Make sure the name of the file is `index.php` when uploading it.

For bounding the database we need to write another HTML code and convert it to a php file.

- The database bounding HTML code that has been converted to a php file is uploaded in this repository and it is `b.php` -

1- Make sure to put the appropriate `server name`, `username`, `password`, and `dbname` that you get from `infinityfree`.
2-Edit the name of columns in the code.
3- Add each column as a variable.

Then uploading the files through   `infinityfree`'s file manager like so:

![Image ALT](https://github.com/Bandr-Mohammed/Database-creation-and-data-storage/blob/main/Screenshot%20(33).png?raw=true)

![Image ALT](https://github.com/Bandr-Mohammed/Database-creation-and-data-storage/blob/main/Screenshot%20(34).png?raw=true)

![Image ALT](https://github.com/Bandr-Mohammed/Database-creation-and-data-storage/blob/main/Screenshot%20(35).png?raw=true)

![Image ALT](https://github.com/Bandr-Mohammed/Database-creation-and-data-storage/blob/main/Screenshot%20(36).png?raw=true)

And just like so, the webpage can get data and insert it into the data base while displaying the content of the table below the form.

![Image ALT](https://github.com/Bandr-Mohammed/Database-creation-and-data-storage/blob/main/Screenshot%20(37).png?raw=true)

![Image ALT](https://github.com/Bandr-Mohammed/Database-creation-and-data-storage/blob/main/Screenshot%20(38).png?raw=true)

![Image ALT](https://github.com/Bandr-Mohammed/Database-creation-and-data-storage/blob/main/Screenshot%20(39).png?raw=true)

![Image ALT](https://github.com/Bandr-Mohammed/Database-creation-and-data-storage/blob/main/Screenshot%20(40).png?raw=true)

![Image ALT](https://github.com/Bandr-Mohammed/Database-creation-and-data-storage/blob/main/Screenshot%20(41).png?raw=true)

`Note: the ID is 10 because i made previous records and deleted it`
