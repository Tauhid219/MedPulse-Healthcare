# MedPulse Healthcare - Digitized & Simplified Health Ecosystem

MedPulse Healthcare is a state-of-the-art, next-generation patient portal and administrative dashboard application. It is designed to bridge the gap between patient physiological vitals tracking, clinical specialist diagnostics, and secure clinical communication pipelines.

---

## 🚀 Key Features

### 💻 Frontend Patient Portal
- **Real-Time Vitals Tracking:** Visual dashboard displaying heart rate, blood pressure, glucose levels, and sleep analysis.
- **Specialized Medical Services:** Interactive specialty tabs showing diagnostic information, duration/SLAs, and patient co-pay ratios.
- **Out-of-Pocket Expense Estimator:** An interactive Alpine.js-powered tool that automatically calculates custom co-pay metrics based on database prices.
- **Secure Message Dispatch:** Department-routed patient triage intake forms with CSRF tokens and validated input layers.
- **Live System Clock & Date:** Ticking footer clock displaying the current system date and time in real-time.

### 🛡️ AdminLTE Dashboard Panel
- **Breeze Auth Integration:** Secure admin authentication restyled with clean AdminLTE-3.1.0 sign-in and recovery boxes.
- **Summary Vitals Panel:** System-wide counters displaying total messages, active medical services, and doctor profiles.
- **Department Triage Inbox:** Inbox reader showing message payloads, marking them as read, and deleting them.
- **Services CRUD Manager:** Full administrative management to list, create, edit, or delete institutional services.
- **Clinical Staff CRUD Manager:** Administrative panel to create, update, and manage doctor profile details, designations, and ordering indexes.
- **Global Settings Panel:** Admin panel allowing managers to update landing page hero titles, subtitles, patient plan details, and hotline parameters.

---

## 🛠️ Technology Stack
- **Backend:** Laravel 11.x (PHP 8.x)
- **Authentication:** Laravel Breeze (Blade Stack)
- **Frontend Template:** AdminLTE 3.1.0 (Bootstrap 4)
- **Frontend Utilities:** Tailwind CSS (via Vite), Alpine.js, FontAwesome Icons, Google Fonts (Source Sans Pro, Inter)
- **Database:** MySQL

---

## ⚙️ Installation & Local Setup

### 1. Prerequisite Checklist
Ensure your local server is running **PHP >= 8.2**, **Composer**, **NodeJS**, and a **MySQL** server (e.g., via XAMPP).

### 2. Setup Database
Create a MySQL database named `medpulse_healthcare` on your local server.

### 3. Clone & Configure Application
Open your terminal in the project directory:

```bash
# 1. Install Composer dependencies
composer install

# 2. Duplicate env configuration file
copy .env.example .env

# 3. Generate application encryption key
php artisan key:generate
```

Configure your `.env` file database connection parameters:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=medpulse_healthcare
DB_USERNAME=root
DB_PASSWORD=
```

### 4. Run Migrations & Seeders
Seed default services, doctor leadership board profiles, global homepage settings, and the default admin user:

```bash
php artisan migrate --seed
```

### 5. Build Assets
Install node dependencies and compile stylesheets/scripts:

```bash
npm install
npm run build
```

### 6. Start Development Server
```bash
php artisan serve
```
Open [http://localhost:8000](http://localhost:8000) in your browser.

---

## 🔑 Default Admin Credentials
To access the Admin LTE Dashboard at `/admin/dashboard`, log in using:

* **Email:** `admin@medpulse.com`
* **Password:** `password123`

---

## 📁 Documentation Links
Explore detailed engineering plans and project updates in the `docs` folder:
- 📖 [Implementation Plan](file:///c:/xampp/htdocs/My%20Works/Infinity%20AI%20Buildfest%202026/MedPulse-Healthcare/docs/implementation_plan.md)
- 📝 [Development Diary](file:///c:/xampp/htdocs/My%20Works/Infinity%20AI%20Buildfest%202026/MedPulse-Healthcare/docs/development_diary.md)
- 🧪 [Blade Templating Walkthrough](file:///c:/xampp/htdocs/My%20Works/Infinity%20AI%20Buildfest%202026/MedPulse-Healthcare/docs/walkthrough.md)
