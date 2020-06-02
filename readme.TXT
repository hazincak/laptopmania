The laptomania website has been developed for the Final project of Web Application Development subject in Higher Diplona in Software Development at GMIT.

This website is working with SQL relational database, therefore its tables need to be created before running the website. To process this step, create a database with the name "laptomania" on phpMyAdmin, copy a content of "laptopmania.sql" file. Paste and run the content on "laptopmania" database in phpMyAdmin SQL window. 

Before running this website copy and paste the laptopmania folder to htdocs folder which is located in your XAMPP folder. The usual path for the Windows 10 users is: C:\xampp\htdocs. Start Apache and MySQL module in your XAMPP Control Panel and if your port is set to default (3306) run the website with http://localhost/laptopmania/laptopmania.php from your browser.

This website is allowing users to browse through multiple laptops which are divided into 5 main categories. There is also the sixth category containing all the laptops and this category is being loaded when the user scrols down to the "shop section". This selection of the laptops cannot be accessed again after another category is chosen.

The user needs to be logged in to complete a purchase. At start there is just one user registered and its login details are "jan123"(username) and "jan"(password), after successful login the user can complete his purchase with the "checkout button" which is located in the dropdown shopping cart menu. The user can modify his cart before checking out. After clicking on the "Checkout out" button, the shop section is removed and the user is shown its personal, contact and payment details, provided upon the registration and the content of his shopping cart. After the confirmation the order details are sent to the "createOrder.php" file which pushes the data to "orders" table located in the "laptopmania" database . 

The laptopmania website allows its visitors to create new account after clicking on the "Create account" button. On click, the user is scrolled down to "Create account" section where details such as personal or contact details can be filled in. Almost all these forms (except eircode and passwords confirmation) are checked by jQuery validation plugin. 

The "laptomania's" "users" table contains UNIQUE constraint on the "user_name", therefore it is not possible to create account if the account with the same  "user_name" already exists. 

Responsiveness of the website is achieved mostly by using the Bootstrap's .flex rows and columns. In addition the media queries are stored in the "css/queries.css" file. 

