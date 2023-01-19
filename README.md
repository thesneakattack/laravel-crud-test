## Laravel Setup (Docker Development)

```bash
curl -s "https://laravel.build/laravel-crud-test?with=redis,mailhog&devcontainer" | bash
```

This will install Laravel Sail for docker based development, and includes a .devcontainer for VSCode
See: https://laravel.com/docs/9.x/installation#choosing-your-sail-services

Services include:
- Redis
- Mailhog

Other options for Docker include Laradock, or a compatible native installation 

## Configure .env file

-Note database config and session config

## Install and Configure Vite/Tailwind + Typography Plugin

Typography Info - https://tailwindcss.com/docs/typography-plugin

via Sail:

```bash
sail npm install -D tailwindcss postcss autoprefixer
sail npx tailwindcss init -p
sail npm install -D @tailwindcss/typography
```

via devContainer:

```bash
npm install -D tailwindcss postcss autoprefixer
npx tailwindcss init -p
npm install -D @tailwindcss/typography
```

Configure tailwind.config.js:

tailwind.config.js
```js
/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
  ],
  theme: {
    extend: {},
  },
  plugins: [
      require('@tailwindcss/typography'),
  ],
}
```

Add tailwind to app.css, Remove app.css from vite, and re-add via app.js

resources/css/app.css
```css
@tailwind base;
@tailwind components;
@tailwind utilities;
```


vite.config.js
```js
import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/js/app.js'],
            refresh: true,
        }),
    ],
});
```

resources/js/app.js
```js
import './bootstrap';
import '../css/app.css';
```


Include vite resources to view:

resources/views/welcome.blade.php
```html
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
        @vite(['resources/js/app.js'])

    </head>
```

Add "watch" script to package.json for auto rebuild on updates:

```json
{
    "private": true,
    "scripts": {
        "dev": "vite",
        "build": "vite build",
        "watch": "vite build --watch"
    },
    "devDependencies": {
        "@tailwindcss/typography": "^0.5.9",
        "autoprefixer": "^10.4.13",
        "axios": "^1.1.2",
        "laravel-vite-plugin": "^0.7.2",
        "lodash": "^4.17.19",
        "postcss": "^8.4.21",
        "tailwindcss": "^3.2.4",
        "vite": "^4.0.0"
    }
}
```

## Install Laravel Jetstream (Livewire + Blade)

Install jetstream library
```bash
composer require laravel/jetstream
```

Install livewire components, (teams can be disabled later)
```bash
# php artisan jetstream:install livewire
php artisan jetstream:install livewire --teams
```

Publish components
```bash
php artisan vendor:publish --tag=jetstream-views
```

Finalizing The Installation
Build NPM dependencies and migrate datbase

```bash
npm install
npm run build
php artisan migrate
```

## Install kitloong/laravel-migrations-generator

https://github.com/kitloong/laravel-migrations-generator

```bash
composer require --dev kitloong/laravel-migrations-generator
```

Sample Usage:
```bash
php artisan migrate:generate
```

## Install kitloong/laravel-migrations-generator

https://github.com/krlove/eloquent-model-generator

```bash
composer require --dev krlove/eloquent-model-generator
```

Register GeneratorServiceProvider:
```php
'providers' => [
    // ...
    Krlove\EloquentModelGenerator\Provider\GeneratorServiceProvider::class,
];
```

Sample Usage:
```bash
php artisan krlove:generate:models --skip-table=users --skip-table=roles
```