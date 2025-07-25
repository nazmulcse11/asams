# Authorize Sales Agent Management System (ASAMS)

ASAMS is a web-based application built with Laravel to manage sales agents efficiently. It enables businesses to authorize, track, and manage their sales agents, employees, and super admin operations seamlessly.

---

## Features

- **User Management**
    - Super Admin (Full control)
    - Employees (Operational roles)
    - Agents (Sales representatives)

- **Agent Authorization & Management**
    - Register, approve, and deactivate agents
    - Assign sales targets and monitor performance

- **Sales Tracking & Reporting**
    - Track agent sales activities
    - Generate detailed reports

- **Commission & Payment Management**
    - Calculate commissions based on sales
    - Track agent payouts

- **Role-Based Access Control (RBAC)**
    - Secure authentication and role-based permissions
    - Different dashboards for Super Admin, Employees, and Agents

- **Notifications & Alerts**
    - Real-time updates for approvals, payments, and performance

- **Audit Logs & Activity Tracking**
    - Logs for agent activity, sales, and admin actions

---

## Installation Guide

### 1. Prerequisites
Make sure you have the following installed:
- PHP 8.1+
- Laravel 10+
- MySQL / PostgreSQL
- Composer
- Node.js & NPM (for frontend assets)

### 2. Clone the Repository
```sh
git clone https://repo.transmit2build.tech/ittransmit/inhouse/laravel/asams.git
cd asams
```

### 3. Install Dependencies
```sh
composer install
npm install && npm run dev
```
### 4. Setup Environment Variables
```sh
cp .env.example .env
php artisan key:generate
```
Update the `.env` file:

```sh
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=asams
DB_USERNAME=root
DB_PASSWORD=
```

### 5. Run Database Migrations
```sh
php artisan migrate --seed
```
