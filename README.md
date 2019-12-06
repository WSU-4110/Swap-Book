# SwapBook  
SwapBook is intended to be a website for Wayne State University students to swap textbooks. The site allows students to list textbooks they no longer need to swap for textbooks they will need. The system can maintain a database of textbooks based on student listings, search functionality, verified access available only to WSU students and is moving toward being completely mobile responsive. 

## Built With:  
Wampserver 3.1.9 64 bit x64:  
PHP 7.3.6  
MySQL 5.7.24   
PhpMyAdmin 4.8.4  
Apache 2.4.37  

## Getting Started 
1.	Download, install, and configure WampServer. 
2.	Use a browser to access http<span></span>://localhost and gain access to the WampServer services.
3.	Establish MySQL databases and tables using PhpMyAdmin as follows:

    ### Test site:  
    All files are stored in the sbo folder of the repository master branch. 

    PhpMyAdmin Credentials (for PHP sessions):  
    Username: root  
    Password:  
    Database: swapbook  

    Structure for user table:  
    
    Column | Type | Null | Default
    -------|------|------|--------
    id | int(6) | No |
    first_name | varchar(40) | No |
    last_name | varchar(40) | Yes | NULL
    email | varchar(40) | Yes | NULL
    pw|varchar(40)|Yes|NULL
    acc_date|timestamp|No|CURRENT_TIMESTAMP
    pic|varchar(100)|Yes|NULL

    Structure for book table:  
    
    Column | Type | Null | Default
    -------|------|------|--------
    Author|varchar(40)|No|
    Title|varchar(255)|Yes|NULL
    type|tinyint(4)|Yes|NULL
    descp|text|Yes|NULL
    user|int(6)|No|
    image|varchar(100)|Yes|NULL
    book_id|int(11)|No|
    ISBN|varchar(26)|No|
    likes|int(11)|Yes|NULL

    ### Main site:  
    All files are stored in the primary folder of the repository master branch.

    PhpMyAdmin Credentials (for PHP sessions):  
    Username: root  
    Password: 2020  
    Database:  swapbook  
 
    Columns for User table:  
    user_id, username, password, permission_level, name  

    Columns for Book table:  
    book_id, type, Title, ISBN, Author, edition, year, condition  

    Columns for Rating table:  
    rating_id, user_id, ratedUser_id, product_id, value, description  

4.	Extract repository folders to the WampServer www directory.  
5.	Files will now load in the browser using http:<span></span>//localhost/{name of www folder}/{file page}  
