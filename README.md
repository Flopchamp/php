# Fakebook PHP Registration Project

This is a simple PHP project that demonstrates a user registration form with basic validation and password hashing, using a MySQL database.

## Features
- User registration form (username and password)
- Input validation and sanitization
- Passwords hashed with bcrypt
- MySQL database integration
- Basic error handling for duplicate usernames

## Files
- `index.php`: Main registration form and logic
- `database.php`: Database connection setup
- `retrive.php`: (Purpose not described; likely for data retrieval)

## Setup Instructions
1. **Clone or copy the project files to your web server directory (e.g., `htdocs` for XAMPP).**
2. **Create a MySQL database and a `users` table:**
   ```sql
   CREATE TABLE users (
     id INT AUTO_INCREMENT PRIMARY KEY,
     user VARCHAR(255) NOT NULL UNIQUE,
     password VARCHAR(255) NOT NULL
   );
   ```
3. **Configure your database connection in `database.php`.**
   - Set your MySQL host, username, password, and database name.
4. **Start your web server and navigate to `index.php` in your browser.**
5. **Register a new user using the form.**

## Security Notes
- Passwords are securely hashed using `password_hash()` with `PASSWORD_BCRYPT`.
- User input is sanitized using `filter_input()` with `FILTER_SANITIZE_SPECIAL_CHARS`.
- Duplicate usernames are handled with error messages.

## Requirements
- PHP 7.0 or higher
- MySQL
- Web server (e.g., Apache with XAMPP)

## License
This project is for educational purposes only.
