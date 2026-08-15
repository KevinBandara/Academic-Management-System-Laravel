# Academic Management System (Laravel)

A full-stack MVC management portal built with **PHP** and **Laravel** designed to manage academic operations, student enrollments, teacher assignments, and course selections.

---

## Key Features

- **Role-Based Access Control (RBAC):** Distinct dashboards and permission layers for administrators, teachers, and students.
- **Course & Curriculum Management:** Relational models handling course assignments, scheduling, and prerequisites.
- **Enrollment & Selection Pipelines:** Dynamic student course registration with validation logic.
- **Relational Schema Design:** Structured database migrations and Eloquent ORM models ensuring data integrity.
- **Blade Templating & Custom UI:** Responsive, server-rendered views styled with modular CSS and Blade components.

---

## Tech Stack

- **Backend:** PHP, Laravel (Eloquent ORM, Middleware, Routing, Authentication)
- **Frontend:** Blade Templates, Modular CSS, JavaScript
- **Database:** MySQL / Relational Schema Migrations
- **Tooling:** Vite, Composer, Artisan CLI

---

## Getting Started

### Prerequisites

- PHP 8.1+
- Composer
- Node.js & npm
- MySQL / MariaDB

### Installation

1. Clone the repository:
   git clone https://github.com/KevinBandara/Academic-Management-System-Laravel.git
   cd Academic-Management-System-Laravel

2. Install backend dependencies:
   composer install

3. Install frontend dependencies:
   npm install
   npm run build

4. Set up environment variables:
   cp .env.example .env
   php artisan key:generate

5. Run database migrations:
   php artisan migrate

6. Serve the application:
   php artisan serve
