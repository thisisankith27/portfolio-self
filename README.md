# Personal Portfolio Website – Web Programming Laboratory (22CS505)

This is my personal portfolio website developed as part of the Web Programming Laboratory mini-project.  
It showcases my profile, skills, education, projects, achievements, certifications, and includes a resume download link and a contact form (PHP + MySQL).

---

## Features
- XHTML-based webpages  
- Styled using external CSS  
- JavaScript for interactivity and form validation  
- Projects rendered using XML + XSLT  
- PHP + MySQL backend to store contact form messages  
- Hosted using GitHub Pages  
- Organized folder structure and proper Git commits

---

## Technologies Used
- **HTML / XHTML**  
- **CSS**  
- **JavaScript**  
- **XML + XSLT**  
- **PHP**  
- **MySQL (via XAMPP)**  
- **GitHub & GitHub Pages**

---

## Folder Structure
PORTFOLIO/
├── assets/
│ ├── Certificates/
│ │ ├── data-mining.pdf
│ │ └── ethical.pdf
│ ├── css/
│ │ └── style.css
│ ├── images/
│ │ ├── hero.jpg
│ │ └── project-portfolio.png
│ └── js/
│ └── script.js
│
├── anki-cv.pdf
├── .gitattributes
├── contact.php
├── db.sql
├── index.php
└── README.md


---

## How to Run PHP + MySQL (Using XAMPP)
1. Install XAMPP and start **Apache** and **MySQL**.  
2. Copy the project folder to:  
   `C:\xampp\htdocs\portfolio\`  
3. Open phpMyAdmin and create database:  
   `portfolio_db`  
4. Create table:
   ```sql
CREATE DATABASE portfolio_db;
USE portfolio_db;

CREATE TABLE contacts (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(150),
  email VARCHAR(200),
  message TEXT,
  created_at DATETIME
);

5. Configure php/db.php with:

$pdo = new PDO("mysql:host=127.0.0.1;dbname=portfolio_db;charset=utf8mb4", "root", "");


6. Run the site locally:
http://localhost/portfolio/index.xhtml

GitHub Pages Deployment

Link:
https://Anki-2706.github.io/portfolio/

Author

Ankith H S
Computer Science & Engineering Student
