# ✅ Laravel To-Do List Application

A simple To-Do List Application built using Laravel, Blade Templates, Bootstrap, and MySQL. The application allows users to create, update, mark tasks as done, and delete tasks through a clean and user-friendly interface.

---

## Features

* Add new tasks
* Edit existing tasks
* Mark tasks as Done
* Task status management (Pending / Done)
* Delete tasks
* Bootstrap responsive interface
* Laravel MVC architecture
* MySQL database integration
* 
---
## 📸 Preview

Run the application and start playing!

https://github.com/shervss/laravel-todo-app/blob/main/laravel-to-do.png?raw=true

---

## Requirements

Before running the project, make sure you have:

* PHP 8.2 or later
* Composer
* MySQL Server
* Laravel dependencies
* Web browser (Chrome, Edge, Firefox, etc.)

---

## Installation

### 1. Clone the Repository

```bash
git clone https://github.com/shervss/laravel-todo-app
```

---

### 2. Navigate to the Project Folder

```bash
cd todo-app
```

---

### 3. Install Dependencies

```bash
composer install
```

---

### 4. Create Environment File

For Windows:

```bash
copy .env.example .env
```

For Linux/Mac:

```bash
cp .env.example .env
```

---

### 5. Configure Database

Open the `.env` file and update the database settings:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=todo_app
DB_USERNAME=root
DB_PASSWORD=
```

Replace the values with your own MySQL credentials if necessary.

---

### 6. Generate Application Key

```bash
php artisan key:generate
```

---

### 7. Run Database Migrations

```bash
php artisan migrate
```

This command will automatically create the required database tables.

---

### 8. Start the Laravel Development Server

```bash
php artisan serve
```

---

### 9. Open the Application

Open your browser and visit:

```text
http://127.0.0.1:8000
```

---

## How to Use

### Add a Task

1. Enter a task in the input field.
2. Click **Add Task**.

### Edit a Task

1. Click the **Edit** button beside a task.
2. Update the task information.
3. Save the changes.

### Mark a Task as Done

1. Click the **Status** dropdown.
2. Select **Done**.
3. The task will be displayed with a strikethrough line indicating completion.

### Delete a Task

1. Click the **Delete** button beside the task.
2. The task will be permanently removed from the list.

---

## Project Structure

```text
app/
├── Models/
│   └── Task.php

app/
├── Http/
│   └── Controllers/
│       └── TaskController.php

database/
└── migrations/

resources/
└── views/
    └── tasks/
        └── index.blade.php

routes/
└── web.php
```

---

## Technologies Used

* Laravel 12
* PHP
* MySQL
* Blade Templates
* Bootstrap 5
* HTML5
* CSS3

---

## Author

Created by **Shervin Marco**

---

## License

This project is open-source and available for educational purposes.
