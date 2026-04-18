<p align="center">
  <img src="public/img/logo.png" alt="dot.files logo" width="220" />
</p>

<h1 align="center">dot.files</h1>

<p align="center">
  A secure, team-based digital file storage and sharing platform — organize, collaborate, and access your documents anywhere.
</p>

<p align="center">
  <img src="https://img.shields.io/badge/Laravel-12.x-FF2D20?style=flat-square&logo=laravel&logoColor=white" alt="Laravel 12" />
  <img src="https://img.shields.io/badge/PHP-8.4-777BB4?style=flat-square&logo=php&logoColor=white" alt="PHP 8.4" />
  <img src="https://img.shields.io/badge/Livewire-3.x-4E56A6?style=flat-square&logo=livewire&logoColor=white" alt="Livewire 3" />
  <img src="https://img.shields.io/badge/License-MIT-green?style=flat-square" alt="MIT License" />
</p>

---

## Table of Contents

- [About](#about)
- [Features](#features)
- [Tech Stack](#tech-stack)
- [Prerequisites](#prerequisites)
- [Installation](#installation)
- [Configuration](#configuration)
- [Running the Application](#running-the-application)
- [Running Tests](#running-tests)
- [Project Structure](#project-structure)
- [Contact](#contact)
- [License](#license)

---

## About

**dot.files** gives teams a secure way to share, store, and access information digitally. It is the digital file storage platform for all your important documents, images, and files — at work, in school, or on the go.

Organize your files into nested folders and subfolders. Easily stay in sync while collaborating on projects or reviewing presentations, without sending attachments back and forth over email.

---

## Features

| Feature | Description |
|---|---|
| **File Upload** | Upload documents, images, archives, audio, and video files up to 100 MB |
| **File Download** | Securely download files with policy-based access control |
| **Folder Management** | Create nested folders and subfolders with unlimited depth |
| **Team Workspaces** | Each team has its own isolated file system |
| **Full-Text Search** | Search files and folders by name or path using TNTSearch |
| **Real-Time UI** | Reactive file browser powered by Laravel Livewire |
| **Authentication** | Registration, login, email verification, and two-factor authentication via Laravel Fortify |
| **Profile & Teams** | Profile photos, team creation, and team membership management via Laravel Jetstream |
| **API Tokens** | Sanctum-based personal access tokens for API access |

### Supported File Types

`pdf` `csv` `txt` `doc` `docx` `xls` `xlsx` `ppt` `pptx` `jpg` `jpeg` `png` `gif` `webp` `svg` `zip` `tar` `gz` `mp4` `mp3` `mov` `avi`

---

## Tech Stack

| Layer | Technology |
|---|---|
| Framework | [Laravel 12](https://laravel.com) |
| Language | PHP 8.4 |
| Frontend Reactivity | [Livewire 3](https://livewire.laravel.com) |
| Auth Scaffolding | Laravel Jetstream + Fortify |
| API Auth | Laravel Sanctum |
| Search | Laravel Scout + TNTSearch |
| Recursive Relations | staudenmeir/laravel-adjacency-list |
| Styling | Tailwind CSS |
| Asset Bundling | Laravel Mix (Webpack) |
| Database | SQLite (default) · MySQL · PostgreSQL |
| Storage | Local filesystem (configurable to S3) |

---

## Prerequisites

- PHP **8.4+** with extensions: `pdo`, `mbstring`, `openssl`, `tokenizer`, `xml`, `ctype`, `json`, `bcmath`
- [Composer](https://getcomposer.org) 2.x
- [Node.js](https://nodejs.org) 18+ and npm
- SQLite, MySQL, or PostgreSQL

---

## Installation

```bash
# 1. Clone the repository
git clone https://github.com/sakhileb/Dot.Files.git
cd Dot.Files

# 2. Install PHP dependencies
composer install

# 3. Install Node dependencies
npm install

# 4. Copy the environment file
cp .env.example .env

# 5. Generate the application key
php artisan key:generate

# 6. Run database migrations
php artisan migrate

# 7. Build frontend assets
npm run dev
```

---

## Configuration

Edit the `.env` file to match your environment. Key variables:

```dotenv
APP_NAME=dot.files
APP_URL=http://localhost

# Database — SQLite (default)
DB_CONNECTION=sqlite
DB_DATABASE=/absolute/path/to/database/database.sqlite

# Database — MySQL (alternative)
# DB_CONNECTION=mysql
# DB_HOST=127.0.0.1
# DB_PORT=3306
# DB_DATABASE=dotfiles
# DB_USERNAME=root
# DB_PASSWORD=secret

# File Storage — local (default) or s3
FILESYSTEM_DISK=local

# AWS S3 (optional)
AWS_ACCESS_KEY_ID=
AWS_SECRET_ACCESS_KEY=
AWS_DEFAULT_REGION=us-east-1
AWS_BUCKET=

# Mail
MAIL_MAILER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_FROM_ADDRESS=hello@dotfiles.app
MAIL_FROM_NAME="${APP_NAME}"
```

---

## Running the Application

```bash
# Development server
php artisan serve

# Watch and recompile assets on change
npm run watch

# Production build
npm run prod
```

The application will be available at `http://localhost:8000`.

---

## Running Tests

```bash
php artisan test
```

Tests are organised into two suites:

- **Unit** — `tests/Unit/`
- **Feature** — `tests/Feature/`

---

## Project Structure

```
app/
├── Http/
│   ├── Controllers/
│   │   └── FileController.php      # File index & download
│   └── Livewire/
│       ├── FileBrowser.php         # Reactive file/folder browser
│       └── NavigationDropdown.php  # Team switcher dropdown
├── Models/
│   ├── Obj.php                     # Polymorphic tree node (files & folders)
│   ├── File.php                    # File entity with size helpers
│   ├── Folder.php                  # Folder entity
│   ├── Team.php                    # Team workspace
│   └── User.php                    # User with Jetstream traits
└── Policies/
    └── FilePolicy.php              # Download authorization

routes/
├── web.php                         # Dashboard, file browser & download
└── api.php                         # API routes (Sanctum protected)

resources/views/
├── files.blade.php                 # File browser view
├── dashboard.blade.php             # User dashboard
└── welcome.blade.php               # Landing page
```

---

## Contact

Created by [BluPin Incorporated](https://www.blupininc.com/)

---

## License

This project is open source and available under the [MIT License](LICENSE).

