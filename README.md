# Blog

OrizzontiSelvaggi.com is a procedural PHP web application for browsing and managing illustrated blog posts about wild landscapes.

![PHP](https://img.shields.io/badge/PHP-Web%20application-777BB4?logo=php&logoColor=white)
![Category](https://img.shields.io/badge/Category-Academic%20project-orange)
![UI](https://img.shields.io/badge/UI-HTML%20%2B%20CSS-1572B6?logo=html5&logoColor=white)
![Year](https://img.shields.io/badge/Year-2024-lightgrey)

> [!NOTE]
> This repository contains an academic project originally developed during earlier programming studies. It is preserved as a record of the technical knowledge, design decisions, and development experience acquired at the time.

## Overview

The application renders posts from a relational database and provides separate public and authenticated workflows. Visitors can browse posts, filter them by publication year, search titles, and open an individual post. Authenticated users can create posts with images, edit existing posts, and mark posts as deleted.

The implementation is intentionally compact: PHP pages contain the request handling and HTML rendering, shared header and footer fragments provide common layout elements, CSS files provide page-specific styling, and `db/blogulivi.sql` contains the database schema and sample content.

## Features

- Browse non-deleted posts grouped by publication year.
- Search post titles from the home page.
- Open a post detail page with its title, date, description, and image.
- Authenticate with a username and password backed by the `tutente` table.
- Create posts with a title, description, and JPEG or PNG upload.
- Edit a post's title, description, and optionally its image.
- Mark posts as deleted without removing their database row.
- Log out and clear the active PHP session.

## Technology stack

- **Backend and rendering:** PHP
- **Database access:** MySQLi
- **Database:** MySQL/MariaDB-compatible SQL dump
- **Frontend:** HTML, CSS, and browser-side JavaScript
- **Assets:** Repository-hosted JPEG and PNG images

## Project structure

```text
.
├── index.php                  # Post listing, search, and year navigation
├── dettaglio_post.php         # Individual post view
├── login.php                  # Login form
├── auth.php                   # Credential check and session setup
├── logout.php                 # Session cleanup
├── nuovo_post.php             # New-post form
├── aggiungi_post_db.php       # Post creation handler
├── modifica_elimina.php       # Edit/delete page
├── modifica_post.php          # Post update handler
├── elimina_post.php           # Soft-delete handler
├── variabili_connessione.php  # Database connection and session bootstrap
├── header.html
├── footer.html
├── css/                       # Page-specific stylesheets
├── img/                       # Logos and post images
└── db/blogulivi.sql           # Schema and sample data
```

## Getting started

### Prerequisites

- PHP with the MySQLi extension.
- A MySQL or MariaDB server.

The repository does not include a package manifest, dependency lockfile, build configuration, or automated test suite.

### Database setup

1. Create a local database named `blogulivi`.
2. Import [`db/blogulivi.sql`](db/blogulivi.sql) into that database.
3. Review `variabili_connessione.php` and set its connection values for the local database. Do not publish credentials or reuse credentials from the repository in another environment.

The SQL dump creates the `tpost`, `tmodificapost`, and `tutente` tables and includes sample records.

### Run locally

From the repository root, serve the files with a PHP-enabled web server whose document root is this directory. With the PHP CLI installed, the built-in server can be started with:

```bash
php -S localhost:8000
```

Then open <http://localhost:8000/index.php>.

The repository does not define a separate build step. No automated test command is provided.

## Implementation notes

The application uses a page-oriented procedural structure rather than a framework. `index.php` and `dettaglio_post.php` provide public browsing, while the authentication and post-management handlers use the PHP session initialized in `variabili_connessione.php`. Post records remain in the database after deletion and are excluded from public queries when `dataEliminazionePost` is set.

This is an educational implementation and should not be treated as a production-ready service without further security, validation, and deployment work.

## Project status

The Git history records the project as ready for delivery on February 11, 2024, followed by fixes for a new server and a presentation-text change later that month. The repository is documented here as a historical academic project; no current maintenance or deployment status is claimed.

## License

This project is shared for educational and portfolio purposes. All rights reserved unless otherwise stated.
