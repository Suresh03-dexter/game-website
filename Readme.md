# Project Setup Instructions

## Requirements
- Apache2
- PHP ^8.2
- MySQL ^8.*

## Installation Steps

1. **Install Apache2, PHP, and MySQL**
   - Use XAMPP or Laragon which comes pre-installed with Apache, PHP, and MySQL.
   - Ensure PHP version is 8.2 or above and MySQL version is 8 or above.

2. **Import the Database**
   - Locate the SQL file provided inside the project folder.
   - Open **phpMyAdmin** or use the MySQL CLI to import the database.

3. **Update Database Configuration**
   - Open `config.php` inside the project folder.
   - Set your database connection details (`host`, `username`, `password`, `database`).

4. **Move the Project to XAMPP or Laragon**
   - Copy the entire project folder into:
     - For **XAMPP**: `C:\xampp\htdocs\`
     - For **Laragon**: `C:\laragon\www\`

5. **Start Apache and MySQL**
   - Open the XAMPP or Laragon control panel.
   - Start both **Apache** and **MySQL** services.

6. **Access the Application**
   - **Website Page**: [http://localhost/Test/views/website](http://localhost/Test/views/website)
   - **Admin Panel**: [http://localhost/Test/views/admin/loginpage.php](http://localhost/Test/views/admin/loginpage.php)

## Default Admin Credentials

- **Username**: `admin@gmail.com`  
- **Password**: `12345678`

> You can change the admin credentials in `config.php`.

---

**Note:** Make sure your project folder name is `Test` or adjust the URLs accordingly.
