
## Prerequisite

- PHP v8.1
- Node.js v18.17.0
- npm v10.0.0

## Installation

- Install Composer dependencies
	```bash
	composer install
	```

- Install Node.js dependencies
	```bash
	npm install
	```

- Create `.env` file, copy `.env.example` content to `.env`

- Install Craftable files
	```bash
	php artisan craftable:install
	```

## Getting Started

- Start local development server
	```bash
	php artisan serve
	```

- Generate and compile Craftable assets
	```
	npm run craftable-dev
	```

## Migration

- Migrate newly created tables
	```bash 
	php artisan migrate
	```

- Generate CRUD interface
	```bash
	php artisan admin:generate {table_name}
	```

- Re-compile all Craftable assets
	```bash
	npm run craftable-dev
	```

## Notes

- After any changes regarding Craftable assets, we need to re-compile Craftable assets