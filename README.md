# 🔐 DashAuth

A simple **PHP & MySQL authentication system** with a user dashboard.
This project demonstrates how to build a complete login and signup system with session handling and a clean UI.

---

## 🚀 Features

* ✅ User Signup (with password hashing)
* ✅ User Login (with password verification)
* ✅ Session Management
* ✅ Protected Dashboard Page
* ✅ Logout Functionality
* ✅ Simple and clean UI (HTML + CSS)

---

## 🛠️ Tech Stack

* **Frontend:** HTML, CSS
* **Backend:** PHP
* **Database:** MySQL
* **Server:** XAMPP

---

## 📂 Project Structure

```
AuthNest/
│
├── db.php            # Database connection
├── signup.php        # Handles user registration
├── login.php         # Handles login logic
├── dashboard.php     # User dashboard
├── logout.php        # Ends session
├── index.html        # Login/Signup page
└── style.css         # Styling
```

---

## ⚙️ How to Run the Project

1. Start **Apache** and **MySQL** in XAMPP

2. Open **phpMyAdmin**

3. Create a database:

   ```
   auth_system
   ```

4. Create a `users` table:

   ```sql
   CREATE TABLE users (
       id INT AUTO_INCREMENT PRIMARY KEY,
       username VARCHAR(100),
       email VARCHAR(100),
       password VARCHAR(255)
   );
   ```

5. Place the project in:

   ```
   C:\xampp\htdocs\
   ```

6. Open in browser:

   ```
   http://localhost/AuthNest/
   ```

---

## 🔐 Security Notes

* Passwords are hashed using `password_hash()`
* Login uses `password_verify()`
* ⚠️ Future improvement: Use prepared statements to prevent SQL injection

---

## 📸 Screenshots (Optional)

*Add screenshots of your login page and dashboard here*

---

## 💡 Future Improvements

* Add email validation
* Implement password reset
* Use prepared statements (security)
* Add user roles (admin/user)
* Improve UI/UX design

---

## 👨‍💻 Author

Built by **Jenny** 💻
Learning backend development with PHP & MySQL 🚀

---

## ⭐️ Show your support

If you like this project, give it a ⭐ on GitHub!
