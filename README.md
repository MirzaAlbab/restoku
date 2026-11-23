# restoku

A Laravel restaurant application foundation with a menu interface, cart and checkout views, and order-related models.

[Repository](https://github.com/MirzaAlbab/restoku)

## Features

- Menu route handled by MenuController
- Cart and checkout view routes
- Category, item, order, and order-item models
- Role and user models

## Technology

`php` ^8.3 · `laravel/framework` ^13.0 · `laravel/tinker` ^3.0

## Getting started

Install PHP compatible with `composer.json`, Composer, Node.js, and a database supported by the application.

```bash
git clone https://github.com/MirzaAlbab/restoku.git
cd restoku
```

```bash
composer install
cp .env.example .env
php artisan key:generate
```

Set `APP_URL` and the `DB_*` values in `.env` for your local database. Configure any mail, payment, or other external service used by this project.

```bash
php artisan migrate
npm install
npm run build
php artisan serve
```

Open the URL printed by Artisan. For ongoing frontend development, run `npm run dev` in another terminal.

## Development and checks

```bash
php artisan test
```

Review `tests/` for the current test scope. A configured test runner does not imply coverage of every business workflow.

## Project structure

- `app/` — Application source
- `config/` — Application configuration
- `database/` — Migrations, factories, and seeders
- `public/` — Public web assets and entry points
- `resources/` — Frontend templates and assets
- `routes/` — HTTP route definitions
- `tests/` — Test suite and support files

## Project notes

The reviewed routes provide menu and view pages; they do not establish a complete order-processing or payment workflow. Composer declares Laravel ^13.0 and PHP ^8.3.

## Framework

Built with [Laravel](https://laravel.com/docs). Framework packages and third-party dependencies retain their own licenses.

## License

Original project code is available under the [MIT License](LICENSE). Third-party libraries, templates, datasets, and assets retain their own terms and attribution.
