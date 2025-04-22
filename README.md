# Laravel Project

This application was built for the Vocational Competency Exam in the Software Engineering major, using Laravel 12 as the backend to make the testing process more structured and easier to maintain.

## Requirements

-   PHP >= 8.2
-   Composer
-   Node.js & NPM
-   MySQL/PostgreSQL (or your preferred database)

## Installation

1. Clone the repository

```bash
git clone [your-repository-url]
cd [project-directory]
```

2. Install PHP dependencies

```bash
composer install
```

3. Install NPM dependencies

```bash
npm install
```

4. Create environment file

```bash
cp .env.example .env
```

5. Generate application key

```bash
php artisan key:generate
```

6. Configure your database in `.env` file

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

7. Run database migrations

```bash
php artisan migrate
```

8. Start the development server

```bash
php artisan serve
```

9. In a separate terminal, run Vite for frontend assets

```bash
npm run dev
```

## Development

The project uses Laravel 12.x and includes the following development tools:

-   Laravel Sail for Docker development environment
-   Laravel Pint for PHP code styling
-   PHPUnit for testing
-   Laravel Pail for logging

### Running Tests

```bash
php artisan test
```

### Code Style

```bash
./vendor/bin/pint
```

## Project Structure

-   `app/` - Contains the core code of your application
-   `config/` - All configuration files
-   `database/` - Database migrations and seeders
-   `public/` - Publicly accessible files
-   `resources/` - Views, raw assets, and language files
-   `routes/` - All route definitions
-   `storage/` - Logs, compiled templates, and file uploads
-   `tests/` - Automated tests

## Contributing

1. Fork the repository
2. Create your feature branch (`git checkout -b feature/amazing-feature`)
3. Commit your changes (`git commit -m 'Add some amazing feature'`)
4. Push to the branch (`git push origin feature/amazing-feature`)
5. Open a Pull Request

## License

This project is licensed under the MIT License - see the LICENSE file for details.
