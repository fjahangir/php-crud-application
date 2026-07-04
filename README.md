# PHP CRUD Application

A simple and responsive **PHP CRUD (Create, Read, Update, Delete)** application built with **PHP, MySQL, Bootstrap 5, HTML, and CSS**. This project demonstrates the fundamental database operations used in web development.

## ✨ Features

* ➕ Add new student records
* 📋 View all student records
* ✏️ Update existing student details
* 🗑️ Delete student records
* 🎨 Responsive user interface with Bootstrap 5
* 🗄️ MySQL database connectivity

## 🛠️ Technologies Used

* PHP
* MySQL
* HTML5
* CSS3
* Bootstrap 5
* XAMPP

## 📁 Project Structure

```text
php-crud-application/
│── CRUD_OPS.php
│── delete_page.php
│── footer.php
│── header.php
│── index.php
│── insert_data.php
│── update_page.php
│── style.css
└── README.md
```

## 🚀 Getting Started

### Prerequisites

* XAMPP
* PHP 8.x or later
* MySQL
* Web Browser

### Installation

1. Clone the repository:

   ```bash
   git clone https://github.com/fjahangir/php-crud-application.git
   ```

2. Move the project to the `htdocs` folder if required.

3. Start **Apache** and **MySQL** from the XAMPP Control Panel.

4. Create a MySQL database.

5. Import the SQL file (if available) or create the `students` table.

6. Update your database credentials in `CRUD_OPS.php`.

7. Open your browser and visit:

   ```
   http://localhost/php-crud-application/
   ```

## 🗄️ Database Schema

**Table Name:** `students`

| Column     | Type                           |
| ---------- | ------------------------------ |
| ID         | INT AUTO_INCREMENT PRIMARY KEY |
| FIRST_NAME | VARCHAR(100)                   |
| LAST_NAME  | VARCHAR(100)                   |
| AGE        | INT                            |

## 📸 Application Features

* Create student records
* Read and display all records
* Update student information
* Delete student records

## 📌 Future Enhancements

* Form validation
* Prepared statements for improved security
* Search and filter records
* Pagination
* Login and authentication
* Dashboard with statistics

## 👩‍💻 Author

**Fatima Jahangir**

GitHub: https://github.com/fjahangir

---

This project was developed for learning and practicing PHP, MySQL, and CRUD operations.
