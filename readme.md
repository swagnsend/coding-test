# SwagNSend Tech Test


### First Part - Laravel
1. Create a new laravel project called "blogger". We will be creating a basic "blog" with CRUD functionality. It should have post, title and author. 
2. Create it using Blade with Alpine & SQL Lite
3. You can use blueprint (https://blueprint.laravelshift.com/docs/installation/) to generate components
4. Add in CRUD functionality
5. Add in validation for saving posts.The title should not be greater than 100 characters in length. 
6. Add in another complex validation which you can think is applicable. 
7. Now update the styling in a way which you think looks good. Feel free to use tailwind CSS. 
8. Explain what changes you would make to productionise this? 

### Second Part - PHP Logic
1. Complete the problem in part2/question1.php, commit and push your code

2. Complete the problem in part2/question2.php, commit and push your code

3. Complete the problem in part2/question3.php, commit and push your code



# 📝 Blogger - Laravel Blog App

A modern, clean blog application built with **Laravel 10**, **Blade UI**, **Tailwind CSS** 
Easily create, edit, view, and delete blog posts.  
Works **MySQL**. Mobile-friendly and super easy to set up!

---

## 🚀 Features

- Full blog post CRUD (Create, Read, Update, Delete)
- Blade + Tailwind = simple UI
- Fields: Title, Author, Content
- SQLite/MySQL database support
- Pagination & validation
- Responsive/mobile-first design(limited)
- One-command local development

---

## ⚙️ Requirements

- PHP 8.1 or higher
- Composer
- Node.js & NPM (for Tailwind assets) 
- SQLite **or** MySQL

---

## 🛠️ Setup & Installation

### 1. Clone the Repository

```sh
git clone https://github.com/yourusername/blogger.git
cd blogger
cp .env.example .env

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=blogger
DB_USERNAME=root
DB_PASSWORD=


php artisan key:generate
php artisan migrate
php artisan serve

---

## **👨‍💻 Author**  
**Arun Pragash Alwar**  
---