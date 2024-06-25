## task-manager
### Simple Task Management System with Laravel 11.x and Herd

This is a basic task management system built with Laravel 11.x and designed for a smooth development experience using Herd to help manage tasks and projects efficiently.

### Prerequisites

* Herd ([https://herd.laravel.com/docs/1/getting-started/installation](https://herd.laravel.com/docs/1/getting-started/installation))
* Composer ([https://getcomposer.org/](https://getcomposer.org/))
* PHP 8.0 or later

### Installation

1. **Create a new Laravel project:**

   ```bash
   herd laravel new task-manager
   ```

2. **Navigate to the project directory:**

   ```bash
   cd task-manager
   ```

3. **Install dependencies:**

   ```bash
   composer install
   ```

4. **Generate a key:**

   ```bash
   php artisan key:generate
   ```

5. **Configure database (optional):**

   Herd includes a built-in SQLite database by default. If you prefer a different database, refer to the Laravel documentation for configuration ([https://laravel.com/docs/11.x/database](https://laravel.com/docs/11.x/database)).

### Usage

1. **Build Frontend Assets**

   ```bash
   npm run dev
   ```

2. **Start the development server:**

   ```bash
   herd serve
   ```

   This will start the application on your local machine, usually accessible at http://localhost:8000/.



### Contribution

This is a basic boilerplate. Feel free to extend it with features like:

* User authentication and authorization
* Task categories and priorities
* Due dates and reminders
* Task editing and deletion
* Data persistence using a database

If you wish to contribute, Contributions are welcome! Please follow these steps:

1. Fork the repository.
2. Create a new branch (`git checkout -b feature-branch`).
3. Make your changes and commit them (`git commit -m 'Add new feature'`).
4. Push to the branch (`git push origin feature-branch`).
5. Open a pull request.

## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.
