# 📝 CodeIgniter 3 Form Validation Project

A form validation system built using **CodeIgniter 3, Html,Css,Javascript,PHP,mysql and Bootstrap**. This project ensures secure and proper validation of user inputs before submission.
---

## 🚀 Features
✅ **Server-side validation** using CodeIgniter 3  
✅ **Client-side validation** using JavaScript  
✅ **Custom validation rules** for form fields  
✅ **Bootstrap** for a responsive UI  
✅ **CSRF Protection** enabled for security  
✅ Displays **error messages** for invalid inputs  

---

## 🛠 Installation & Setup

### 🔹 Prerequisites
Ensure you have the following installed:
- **XAMPP** / **WAMP** (for PHP & MySQL)
- **Git** (for version control)

### Database Setup (Importing the SQL File)
Follow these steps to set up your database:

Open phpMyAdmin

Visit: http://localhost/phpmyadmin
Create a New Database

Click on Databases in the top menu.
Enter a name for your database (e.g., form_validation_db).
Click Create.
Import the Database

Select your newly created database.
Click the Import tab.
Click Choose File and select database/test_db.sql from your project.
Click Go to import the tables.
Configure Database in CodeIgniter
Open application/config/database.php and update the database settings:

php
Copy
Edit
$db['default'] = array(
    'dsn'    => '',
    'hostname' => 'localhost',
    'username' => 'root',  // Change if needed
    'password' => '',      // Change if needed
    'database' => 'form_validation_db',
    'dbdriver' => 'mysqli',
    'dbprefix' => '',
    'pconnect' => FALSE,
    'db_debug' => (ENVIRONMENT !== 'production'),
    'cache_on' => FALSE,
    'char_set' => 'utf8',
    'dbcollat' => 'utf8_general_ci',
);
Verify the Database Connection

Start XAMPP/WAMP and make sure Apache and MySQL are running.
Open http://localhost/From-validation- in your browser.
Your project should now be connected to the database.


### 🔹 Steps to Run the Project
```bash
# Clone the repository
git clone https://github.com/ShiddeshThube/From-validation-.git

# Move to the project directory
cd From-validation-

# Move the project folder to XAMPP htdocs (if not already there)
mv From-validation- /xampp/htdocs/

# Start XAMPP/WAMP server and run MySQL & Apache

# Open your browser and go to:
http://localhost/From-validation-
