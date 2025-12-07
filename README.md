# Web Engineering Lab 03 - Biodata Form with PHP

This project demonstrates how to collect user data using an **HTML Form** and visualize it using **PHP**.

## 📂 Files Included

1.  **`biodata.html`**
    * The front-end form designed with a "Matrimonial Theme" (Maroon & Gold).
    * Includes HTML5 validation (required fields, phone number pattern).
    * Sends data using the `POST` method.

2.  **`myForm.php`**
    * The back-end script.
    * Receives data using `$_POST`.
    * Displays the submitted information in a formal CV format.

---

## 🚀 How to Run This Project

**Important:** Since this project uses PHP, you cannot just double-click the files. You need a local server like **XAMPP**.

1.  **Install & Start XAMPP:**
    * Open XAMPP Control Panel.
    * Click **Start** next to "Apache".

2.  **Place Files:**
    * Go to your XAMPP installation folder (usually `C:\xampp\htdocs`).
    * Create a new folder named `lab_task`.
    * Copy both `biodata.html` and `myForm.php` into this folder.

3.  **Run in Browser:**
    * Open Chrome or Edge.
    * Type this URL: `http://localhost/lab_task/biodata.html`
    * Fill out the form and click "Create Profile".

---

## 🛠️ Technologies Used
* **HTML5** (Form Structure & Validation)
* **CSS3** (Styling & Responsive Design)
* **PHP** (Handling Form Data)
