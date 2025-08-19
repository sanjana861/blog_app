# Task 2 – Basic CRUD Application

This repository contains **Task 2** of my Apexplanet Internship, where I built a **Basic CRUD (Create, Read, Update, Delete) Application** using **PHP, MySQL, and XAMPP**.  
The main objective of this task was to understand and implement the fundamental operations that every dynamic web application needs.

---

## 🚀 Features Implemented
1. **Create** – Add new posts through a form and save them into the database.  
2. **Read** – Display all posts in a structured list/table format.  
3. **Update** – Edit an existing post and update it in the database.  
4. **Delete** – Remove unwanted posts from the database permanently.  
5. **Validation** – Basic form validation to ensure required fields are not empty.  
6. **Database Connection** – Reusable PDO-based connection file for secure database access.  
7. **Clean Code Structure** – Separate PHP files for each operation (`create.php`, `edit.php`, `delete.php`, `index.php`) for better maintainability.  

---

## 🛠️ Tech Stack
- **Backend:** PHP (Core PHP with PDO)  
- **Database:** MySQL  
- **Server:** Apache (XAMPP)  
- **Frontend:** HTML, CSS (basic styling)  

---

## 📂 File Structure
basic_crud_app/
│
├── db.php # Database connection
├── index.php # List all posts (Read)
├── create.php # Form to create a new post
├── edit.php # Form to edit an existing post
├── delete.php # Handle deleting a post
└── README.md # Project documentation

## ⚡ How to Run the Project
1. Install **XAMPP** (or any PHP + MySQL setup).  
2. Clone or download this repository into your `htdocs` folder.  
3. Create a new database (e.g., `crud_app`) in **phpMyAdmin**.  
4. Run the following SQL query to create the table:
   ```sql
   CREATE TABLE posts (
       id INT AUTO_INCREMENT PRIMARY KEY,
       title VARCHAR(255) NOT NULL,
       content TEXT NOT NULL
   );
Update db.php with your MySQL username and password if needed.

Start Apache & MySQL in XAMPP.

## Open your browser and go to:

http://localhost/basic_crud_app/

