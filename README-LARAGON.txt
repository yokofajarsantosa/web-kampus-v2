# CI3 HMVC - Laragon Local

## 1. Copy project
Extract `ci3-hmvc` to:
`C:\laragon\www\ci3-hmvc`

## 2. Start Laragon
Start:
- Apache
- MySQL

PHP should be enabled by Laragon.

## 3. Create database
Open HeidiSQL/phpMyAdmin/DBeaver and import:
`database/schema.sql`

The database is:
`cakrawala`

Default local connection:
- Host: 127.0.0.1
- User: root
- Password: empty
- Database: cakrawala

## 4. Open website
Use:
`http://localhost/ci3-hmvc/`

Admin:
`http://localhost/ci3-hmvc/admin`

The project also works with a Laragon virtual host if you enable Auto Virtual Hosts:
`http://ci3-hmvc.test/`

## 5. Admin login
Email:
`admin@cakrawala.ac.id`

Password:
`password`

## Important
Do not open `application/` or `system/` directly in the browser.
The entry point is `index.php`.

This package includes an HMVC router so controllers can stay under:
`application/modules/<module>/controllers/`
and module views/models are loaded using CodeIgniter package paths.
