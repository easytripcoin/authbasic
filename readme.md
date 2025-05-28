# AuthBasic: Secure PHP Login & Registration System

AuthBasic is a comprehensive and secure user authentication system built with PHP, MySQL, and Bootstrap 5. It implements modern security best practices and provides a solid foundation for web applications requiring user management. The system features a front controller pattern for clean URLs, email verification, password reset functionality, and more, with core application logic organized for clarity and scalability. Configuration, including sensitive credentials, is managed via a `.env` file for enhanced security.

## Key Features

* **Secure User Authentication:**
    * User registration with email verification.
    * Secure login with password hashing (bcrypt).
    * "Remember Me" functionality with secure tokens, processed during application bootstrap.
    * Password reset via email with time-limited tokens.
    * Secure POST-based logout with CSRF protection.
* **Security Best Practices:**
    * **Environment-Based Configuration:** Sensitive credentials (database, SMTP) managed via a `.env` file, not committed to version control.
    * **Password Hashing:** Utilizes `password_hash()` and `password_verify()`.
    * **Prepared Statements (PDO):** Protects against SQL injection vulnerabilities.
    * **CSRF Protection:** Implemented on all forms that change state.
    * **Session Security:** Includes session regeneration on login and other sensitive actions.
    * **Input Sanitization & Validation:** Employs server-side and client-side validation.
    * **Rate Limiting:** Basic protection against brute-force login attempts and frequent form submissions.
    * **HTTPS Enforced (Recommended):** Designed and recommended to be run over HTTPS in production.
* **User Account Management:**
    * User profile viewing and updating (username, email).
    * Secure password change functionality for logged-in users.
* **Email Handling:**
    * Integrates PHPMailer for reliable email sending.
    * HTML email templates with plain text alternatives.
    * Centralized SMTP configuration via `.env`.
* **Modern Architecture:**
    * **Front Controller Pattern:** All web requests routed through `index.php` for clean URLs.
    * **Organized Core Logic:** Business logic and action handlers centralized in a `core/` directory.
    * **Namespaced Code:** PHP code organized using namespaces.
    * **Centralized Configuration:** `config/config.php` loads environment variables and sets up application-wide settings.
    * **Templating:** Basic separation with reusable HTML partials (navbar, footer).
* **User Interface & Experience:**
    * Responsive design with Bootstrap 5.
    * User-friendly forms with client-side validation, password visibility toggles, and strength indicators.
    * Session-based feedback messages.
* **Logging:**
    * Comprehensive logging for important events and errors to the `logs/` directory.

## Project Structure

* **`authbasic/`** (Project Root)
    * **`assets/`**: Static frontend assets.
        * `css/style.css`
        * `js/script.js`
    * **`config/`**: Application configuration.
        * `config.php`: Loads `.env`, sets up constants, DB connection, session, includes functions.
        * `functions.php`: Global helper functions.
    * **`core/`**: Core application logic and action handlers.
        * **`auth/`**: Authentication-specific logic.
            * `login.php`, `register.php`, `logout.php`, `remember_me.php`, `change-password.php`, `forgot-password.php`, `reset-password.php`, `update-profile.php`.
        * **`contact/`**: Contact form logic.
            * `submit.php`
        * _(Future modules like `ecommerce/` would reside here)_
    * **`logs/`**: Application log files (ensure writable by web server).
        * `.gitkeep` (Recommended for tracking the directory).
    * **`pages/`**: View files for rendering HTML content.
        * `home.php`, `login.php`, `register.php`, `dashboard.php`, etc.
        * `404.php` (Custom "Not Found" page).
    * **`templates/`**: Reusable HTML template partials.
        * `navbar.php`, `footer.php`.
    * **`vendor/`**: Composer-managed dependencies (e.g., PHPMailer, phpdotenv).
    * `.env` (Local environment configurations - **NOT version controlled**)
    * `.env.example` (Template for environment configurations - version controlled)
    * `.htaccess`: Apache configuration for URL rewriting.
    * `composer.json`: Project dependencies for Composer.
    * `composer.lock`: Records exact installed dependency versions.
    * `database.sql`: SQL schema for database setup.
    * `index.php`: **Front Controller** - single entry point for all requests.
    * `readme.md`: This file.
    * `.gitignore`: Specifies files/directories for Git to ignore.
    * `LICENSE`: Project's open-source license.

## Requirements

* PHP 7.4 or higher (PHP 8.x recommended).
    * PDO Extension (with MySQL driver).
    * OpenSSL Extension.
    * Mbstring Extension.
* MySQL 5.7+ or MariaDB 10.2+.
* Composer (PHP dependency manager).
* Web Server (Apache with `mod_rewrite`, or Nginx).

## Installation & Setup

1.  **Clone Repository:**
    ```bash
    git clone [https://github.com/yourusername/authbasic.git](https://github.com/yourusername/authbasic.git)
    cd authbasic
    ```
    (Replace `yourusername` with your GitHub username/organization.)

2.  **Install Dependencies:**
    Ensure [Composer](https://getcomposer.org/download/) is installed.
    ```bash
    composer install
    ```
    This installs PHPMailer, `vlucas/phpdotenv`, and other dependencies.

3.  **Database Setup:**
    * Create a MySQL/MariaDB database (e.g., `authbasic_db`).
    * Import the schema from `database.sql`:
        ```bash
        mysql -u your_db_user -p your_db_name < database.sql
        ```

4.  **Environment Configuration (`.env` file):**
    * In the project root, copy `.env.example` to a new file named `.env`:
        ```bash
        cp .env.example .env
        ```
    * **Edit your `.env` file** and provide your specific configuration values for:
        * `APP_ENV`, `APP_DEBUG`, `APP_URL`, `APP_SUBDIRECTORY` (if applicable).
        * `DB_HOST`, `DB_PORT`, `DB_DATABASE`, `DB_USERNAME`, `DB_PASSWORD`.
        * `MAIL_HOST`, `MAIL_PORT`, `MAIL_USERNAME`, `MAIL_PASSWORD`, `MAIL_ENCRYPTION` (`tls` or `ssl`), `MAIL_FROM_ADDRESS`, `MAIL_FROM_NAME`. **For Gmail, use an "App Password" if 2-Step Verification is enabled.**
        * `APP_TIMEZONE` (e.g., `Asia/Manila`, `UTC`).
    * **Important:** The `.env` file contains sensitive credentials and **must NOT be committed to Git**. It is already listed in `.gitignore`.

5.  **Web Server Configuration:**
    Configure your web server to route all non-file/directory requests to `index.php`.

    * **Apache:**
        The provided `.htaccess` file should handle this. Ensure `mod_rewrite` is enabled and `AllowOverride All` (or suitable overrides) is configured for your project directory. If your project is in a subdirectory, update `RewriteBase /your-subdirectory/` in `.htaccess`.

    * **Nginx:**
        A typical Nginx server block configuration:
        ```nginx
        server {
            listen 80; # Or 443 for SSL
            server_name yourdomain.com; # Or localhost
            root /path/to/your/authbasic; # Project root

            index index.php;

            location / {
                try_files $uri $uri/ /index.php?$query_string;
            }

            location ~ \.php$ {
                include snippets/fastcgi-php.conf;
                fastcgi_pass unix:/var/run/php/phpX.Y-fpm.sock; # Adjust to your PHP-FPM
                fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;
                include fastcgi_params;
            }

            # Deny access to sensitive files and directories
            location ~ /\.ht { deny all; }
            location = /.env { deny all; } # Protect .env file
            location = /.env.example { deny all; } # Optionally protect example too
            location ~ ^/(core|config|logs|templates|vendor)/.*\.php$ { deny all; }
            location ~ /logs/ { deny all; }
            location = /composer.json { deny all; }
            location = /composer.lock { deny all; }
            location = /database.sql { deny all; }
        }
        ```
        Adjust `root`, `server_name`, and `fastcgi_pass` for your environment.

6.  **Permissions:**
    Ensure the `logs/` directory is writable by your web server user. `config/config.php` attempts to create it.

7.  **Access Application:**
    Navigate to the `APP_URL` configured in your `.env` file (e.g., `http://localhost/authbasic/` or `http://authbasic.test/`).

## Usage Guide

The application uses clean URLs managed by the front controller (`index.php`).

* **Homepage:** `/` or `/home`
* **User Registration:** `/register` (Form submits to `/register-action`)
* **User Login:** `/login` (Form submits to `/login-action`)
* **User Logout:** POST request to `/logout-action`.
* **Dashboard:** `/dashboard` (Protected)
* **Profile:** `/profile` (Protected, form submits to `/update-profile-action`)
* **Change Password:** `/change-password` (Protected, form submits to `/change-password-action`)
* **Forgot Password:** `/forgot-password` (Form submits to `/forgot-password-action`)
* **Reset Password:** `/reset-password?token=TOKEN` (Form submits to `/reset-password-action`)
* **Email Verification:** `/verify-email?token=TOKEN`
* **Static Pages:** `/about`, `/contact` (form submits to `/contact-action`), `/privacy`, `/terms`.

## Security Considerations & Best Practices Checklist

* **HTTPS:** **Essential for production.** Encrypt all communication.
* **Error Reporting:** Disable `display_errors` in production; log errors to files.
* **Regular Updates:** Keep PHP, web server, database, and Composer packages (run `composer update`) current.
* **Strong Credentials & Secrets Management:** Use strong, unique passwords. Manage all sensitive credentials (DB, SMTP, API keys) via the `.env` file, which is not version controlled.
* **File & Directory Permissions:** Apply least privilege. `config/config.php` and `.env` should not be web-accessible or writable by the web server after setup if possible. `logs/` must be writable.
* **Content Security Policy (CSP):** Implement CSP headers to mitigate XSS.
* **Other HTTP Security Headers:** Add `X-Content-Type-Options`, `X-Frame-Options`, `Strict-Transport-Security` (HSTS), `Referrer-Policy`.
* **Regular Backups:** Backup database and application files.
* **Firewall:** Restrict server ports.
* **Security Audits:** Periodically review code and configurations.

## Contributing

Contributions are welcome! Please fork the repository, create a feature branch, and submit a pull request with your changes. Ensure adherence to coding style and security best practices.

## License

This project is licensed under the MIT License. See the `LICENSE` file for details.