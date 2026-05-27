# MedPulse Healthcare - Project Overview & Summary

This document provides a comprehensive overview of the MedPulse Healthcare application, details of all development phases, system architectures, and deployment processes. It is designed to be readable by both programmers and non-programmers.

---

# Part 1: English Version

## 1. Project Concept
MedPulse Healthcare is a digitized healthcare portal designed to connect patients with clinical services and medical administrators. 
- **For Patients:** It acts as a live landing page where they can review available specialized medical services, estimate clinic visitation out-of-pocket costs, read about the clinical staff, and securely send medical triage questions.
- **For Administrators:** It offers a secure, protected administrative panel to manage clinical departments, customize landing page metrics, view patient inquiries, update profile credentials, and register or manage internal administrative staff.

## 2. Technical Stack
- **Backend Framework:** Laravel 12.x (PHP 8.x) — selected for industry-standard security, clean routing, MVC architecture, and database migrations.
- **Authentication:** Laravel Breeze (Blade Stack) — provides robust sign-in, password reset, and session management.
- **Admin Panel Theme:** AdminLTE 3.1.0 (Bootstrap 4) — offers a premium, responsive dashboard user interface with rich styling components.
- **Frontend Utilities:** Tailwind CSS v4, Alpine.js (for the interactive calculator), Google Fonts, and FontAwesome Icons.
- **Database:** MySQL.

---

## 3. Implementation Phases & Features

### Phase 1: Blade Templating & Layout Architecture
- Converted static HTML files into dynamic Laravel Blade views.
- Created a master layout (`layouts/app.blade.php`) containing common assets and scripts.
- Separated standard layouts into reusable partial components (`navigation.blade.php`, `footer.blade.php`).

### Phase 2: Database Schema & Seeder Design
- Programmed migrations to establish relational and structured database tables:
  - `settings`: Holds global text, plan IDs, progress rates, phone numbers, and emails.
  - `services`: Tracks medical procedures, prices, categories, and duration details.
  - `team_members`: Catalogs physician names, departments, bios, image URLs, and custom display priorities.
  - `contact_messages`: Captures patient triage details, department routes, and read/unread statuses.
- Created `DatabaseSeeder` so that fresh installations immediately populate the landing page with pre-existing services and doctors.

### Phase 3: Authentication Overhaul & AdminLTE Styling
- Installed `laravel/breeze` to handle account safety.
- Redesigned Breeze auth pages (Login, Forgot Password, Reset Password) using AdminLTE structures to keep branding uniform.

### Phase 4: Administrative Dashboard Setup
- Developed the main dashboard view (`admin/dashboard.blade.php`).
- Integrated dynamic statistic widgets that calculate and display the total number of patient messages, active services, and team members in real-time.

### Phase 5: Dynamic Triage Message Center
- Connected the frontend contact form to the database.
- Created validation rules to ensure only clean data enters the system.
- Designed a mailbox reader in the admin panel to view full message payloads, mark messages as read/unread, and delete completed records.

### Phase 6: Services & Staff CRUD Dashboard
- Programmed full administrative CRUD (Create, Read, Update, Delete) dashboards for both **Services** and **Team Members**.
- Created an interface to update institutional settings (titles, hotline phone numbers, intake emails) globally without editing source files.

### Phase 7: Dynamic Frontend Integration & Real-Time Footer
- Connected page templates to pull data directly from database models instead of raw HTML.
- Implemented an Alpine.js-powered outpatient cost calculator that reads database price estimates dynamically.
- Programmed a real-time running system clock and current date display in the footer using JavaScript.

### Phase 8: Profile Management & User CRUD
- Replaced Breeze's default Tailwind profile edit page with AdminLTE-styled Bootstrap cards:
  - Profile Details (Name, Email modifications).
  - Password Updates.
  - Secure Account Deletion (with password confirmation modal).
- Programmed an administrative user CRUD dashboard to create and edit secondary admin users.
- Implemented a safety mechanism preventing logged-in admins from deleting themselves from the user list.
- Disabled public registration routes (`register`) to restrict account creation solely to the admin panel.

### Phase 9: Secure cPanel Hosting & Symlink Architecture
- Deployed the project on a live shared hosting server under a dedicated subdomain (`project.rezatauhid.top`).
- Kept the core Laravel code files (`app`, `config`, `routes`, etc.) secure outside the public web directory.
- Created a symbolic link mapping `/home2/rezatauh/MedPulse-Healthcare/public` to `/home2/rezatauh/project.rezatauhid.top`.
- Compiled frontend assets locally and tracked them under `public/build/` to support environments where Node.js/NPM are unavailable on the server.

---

# Part 2: Bengali Version (বাংলা অংশ)

## ১. প্রজেক্টের মূল ধারণা (Project Concept)
মেডপালস হেলথকেয়ার (MedPulse Healthcare) একটি ডাইনামিক ডিজিটালাইজড স্বাস্থ্যসেবা পোর্টাল। এটি সাধারণ পেশেন্ট এবং হসপিটালের এডমিনিস্ট্রেটরের মধ্যকার সম্পর্ক ও যোগাযোগ সহজ করার লক্ষ্যে তৈরি করা হয়েছে।
- **পেশেন্টদের জন্য (For Patients):** এটি একটি আকর্ষণীয় ওয়েবসাইট হিসেবে কাজ করে, যেখানে পেশেন্টরা হাসপাতালের বিভিন্ন চিকিৎসা সেবা (Services) দেখতে পাবেন, চিকিৎসকদের প্রোফাইল পড়তে পারবেন, ওপিডি খরচ ক্যালকুলেট করতে পারবেন এবং সরাসরি মেডিকেল বার্তা পাঠাতে পারবেন।
- **এডমিনদের জন্য (For Administrators):** এটি একটি সম্পূর্ণ সুরক্ষিত নিয়ন্ত্রণ প্যানেল (Administrative Panel) প্রদান করে। এখান থেকে হাসপাতালের সার্ভিসসমূহ, ডক্টরদের তালিকা, পেশেন্টদের পাঠানো বার্তা এবং হাসপাতালের গ্লোবাল সেটিংস (যেমন: ফোন নম্বর, ইমেল, ব্যানার টেক্সট ইত্যাদি) পরিবর্তন ও নিয়ন্ত্রণ করা যায়।

## ২. ব্যবহৃত টেকনোলজি (Technical Stack)
- **Backend Framework:** Laravel 12.x (PHP 8.x) — এটি ব্যবহারের মূল কারণ লারাভেলের উন্নত নিরাপত্তা ব্যবস্থা, চমৎকার Routing সিস্টেম, MVC আর্কিটেকচার এবং সহজ Database Migration সুবিধা।
- **Authentication (ইউজার লগইন ও নিরাপত্তা):** Laravel Breeze (Blade Stack) — যা অত্যন্ত সুরক্ষিতভাবে এডমিন লগইন, পাসওয়ার্ড রিসেট এবং সেশন ম্যানেজমেন্ট সম্পন্ন করে।
- **Admin Panel Theme:** AdminLTE 3.1.0 (Bootstrap 4) — এটি ব্যবহারে ড্যাশবোর্ডটি অত্যন্ত দৃষ্টিনন্দন, রেসপনসিভ এবং ব্যবহার উপযোগী হয়েছে।
- **Frontend Utilities:** Tailwind CSS v4, Alpine.js (ক্যালকুলেটর ইন্টারেকশনের জন্য), Google Fonts এবং FontAwesome Icons।
- **Database:** MySQL।

---

## ৩. উন্নয়ন ধাপ ও বৈশিষ্ট্যসমূহ (Implementation Phases & Features)

### ধাপ ১: ব্লেড টেমপ্লেটিং এবং লেআউট আর্কিটেকচার
- স্ট্যাটিক HTML ফাইলগুলোকে লারাভেলের ডাইনামিক Blade View-তে রূপান্তর করা হয়েছে।
- একটি মাস্টার লেআউট (`layouts/app.blade.php`) তৈরি করা হয়েছে যেখানে সিএসএস ও জেএস ফাইলগুলো থাকে।
- সাইটের অংশগুলোকে ভাগ করে রিইউজেবল পারশিয়াল ফাইল (`navigation.blade.php`, `footer.blade.php`) হিসেবে সেট করা হয়েছে।

### ধাপ ২: ডাটাবেস ডিজাইন ও সিডিং (Database Schema & Seeding)
- প্রজেক্টের তথ্য সংরক্ষণের জন্য ৪টি মূল টেবিল তৈরি করা হয়েছে:
  - `settings`: হাসপাতালের গ্লোবাল সেটিংস (যেমন: ফোন নম্বর, ইমেল, ব্যানার কন্টেন্ট)।
  - `services`: চিকিৎসা পদ্ধতি, মূল্য তালিকা, কো-পে রেশিও এবং ডুরেশন ট্র্যাক করার জন্য।
  - `team_members`: চিকিৎসকদের নাম, ডিপার্টমেন্ট, সংক্ষিপ্ত জীবনবৃত্তান্ত (Bio), প্রোফাইল ইমেজের ইউআরএল এবং তাদের সিরিয়াল অর্ডার সংরক্ষণের জন্য।
  - `contact_messages`: পেশেন্টের নাম, হেলথ আইডি, বার্তা এবং মেসেজের রিড/আনরিড স্ট্যাটাস সেভ করার জন্য।
- `DatabaseSeeder` ফাইল কনফিগার করা হয়েছে যাতে প্রজেক্ট রান করার সাথে সাথে ডাটাবেস অটোমেটিকভাবে প্রয়োজনীয় ডামি ডাটা দিয়ে সচল হয়ে যায়।

### ধাপ ৩: অথেনটিকেশন ও AdminLTE স্টাইলিং
- `laravel/breeze` ব্যবহার করে প্রজেক্টের নিরাপত্তা নিশ্চিত করা হয়েছে।
- ডিফল্ট লগইন, পাসওয়ার্ড রিকোয়েস্ট এবং পাসওয়ার্ড চেঞ্জ ভিউগুলোকে পরিবর্তন করে AdminLTE ডিজাইনে রূপান্তর করা হয়েছে।

### ধাপ ৪: এডমিন ড্যাশবোর্ড প্যানেল
- একটি মূল ড্যাশবোর্ড স্ক্রিন (`admin/dashboard.blade.php`) তৈরি করা হয়েছে।
- ডাটাবেস থেকে রিয়েল-টাইম তথ্য কুয়েরি করে মোট কতটি মেসেজ এসেছে, কয়টি সার্ভিস অ্যাক্টিভ আছে এবং কতজন ডক্টর আছেন তা বড় উইজেট বক্সে দেখানোর ব্যবস্থা করা হয়েছে।

### ধাপ ৫: ডায়নামিক মেসেজ ট্রায়াজ ইনবক্স
- ওয়েবসাইটের কন্টাক্ট ফর্মটিকে ডাটাবেসের সাথে যুক্ত করা হয়েছে।
- কন্টাক্ট ফর্মে সঠিক Validation ব্যবহার করা হয়েছে যাতে কেউ ভুল ডেটা পাঠাতে না পারে।
- এডমিনদের জন্য একটি মেইলবক্স জেনারেট করা হয়েছে যেখান থেকে যেকোনো মেসেজের ডিটেইলস পড়া যায়, মার্ক এজ রিড করা যায় এবং অপ্রয়োজনীয় মেসেজ ডিলিট করা যায়।

### ধাপ ৬: সার্ভিস এবং টিম মেম্বার CRUD ইন্টারফেস
- এডমিন প্যানেল থেকে যেকোনো সার্ভিস এবং টিম মেম্বার (ডক্টর) যুক্ত করার, এডিট করার এবং ডিলিট করার (CRUD) সম্পূর্ণ অপশন বুটস্ট্র্যাপ দিয়ে ডিজাইন করা হয়েছে।
- ফাইল এডিট না করেই এডমিন প্যানেলের গ্লোবাল সেটিংস থেকে হাসপাতালের ফোন নম্বর ও ইমেইল আপডেট করার সুবিধা যুক্ত করা হয়েছে।

### ধাপ ৭: ডায়নামিক ফ্রন্টএন্ড এবং ফুটার ডিজিটাল ক্লক
- হোমপেজের সার্ভিস কার্ড ও ডক্টর কার্ডগুলো ডাটাবেস থেকে লুপের মাধ্যমে ডাইনামিকালি রেন্ডার করা হয়েছে।
- ওপিডি কস্ট ক্যালকুলেটর টুলটিতে Alpine.js ইন্টিগ্রেশন করা হয়েছে, যাতে এটি ডাটাবেসের প্রাইস ভ্যালুর সাথে রিয়েল-টাইমে হিসেব করতে পারে।
- ফুটারে জাভাস্ক্রিপ্ট ব্যবহার করে একটি রিয়েল-টাইম চলমান ঘড়ি ও তারিখ প্রদর্শন করা হয়েছে।

### ধাপ ৮: প্রোফাইল সেটিংস পরিবর্তন এবং এডমিন ইউজার CRUD
- Breeze-এর ডিফল্ট টেইলউইন্ড প্রোফাইল পেজ বাদ দিয়ে AdminLTE স্টাইলে রূপান্তর করা হয়েছে:
  - প্রোফাইল তথ্য (নাম, ইমেল পরিবর্তন)।
  - পাসওয়ার্ড পরিবর্তন।
  - পাসওয়ার্ড ভেরিফিকেশন পপ-আপ মোডাল সহ অ্যাকাউন্ট স্থায়ীভাবে ডিলিট করার সুবিধা।
- হাসপাতালের অন্যান্য এডমিনদের অ্যাকাউন্ট তৈরি ও এডিট করার জন্য একটি আলাদা ইউজার CRUD প্যানেল তৈরি করা হয়েছে।
- লগইন থাকা এডমিন যেন নিজের অ্যাকাউন্ট ডিলিট না করতে পারেন, তার জন্য সেলফ-ডিলিট প্রটেকশন কোড যুক্ত করা হয়েছে।
- বাইরে থেকে যেকোনো সাধারণ ইউজারের রেজিস্ট্রেশন বন্ধ করতে পাবলিক `register` রাউটগুলো সম্পূর্ণ নিষ্ক্রিয় করা হয়েছে।

### ধাপ ৯: সিকিউর cPanel হোস্টিং ও সিমলিংক (Symlink) আর্কিটেকচার
- প্রজেক্টটি লাইভ শেয়ার্ড হোস্টিং সার্ভারে সাবডোমেইন `project.rezatauhid.top` এর আন্ডারে ডেপ্লয় করা হয়েছে।
- সিকিউরিটির জন্য প্রজেক্টের কোর ফাইলগুলো (`app`, `config`, `routes` ইত্যাদি) পাবলিক ডিরেক্টরির বাইরে হোম ডিরেক্টরিতে নিরাপদ রাখা হয়েছে।
- একটি সিমলিংক (Symlink) তৈরি করে `/home2/rezatauh/MedPulse-Healthcare/public` ডিরেক্টরিকে `/home2/rezatauh/project.rezatauhid.top` ফোল্ডারের সাথে সংযুক্ত করা হয়েছে।
- সার্ভারে Node.js/NPM সুবিধা না থাকায় লোকাল পিসি থেকে অ্যাসেট বিল্ড কমপ্লিট করে তা গিটহাবে ট্র্যাকিং করার ব্যবস্থা নেওয়া হয়েছে।

---

## ৪. ভবিষ্যৎ ডেপ্লয়মেন্ট কমান্ড নির্দেশিকা (CI/CD Terminal Cheat Sheet)
ভবিষ্যতে কোড আপডেট লাইভ সার্ভারে যুক্ত করতে cPanel Terminal-এ প্রবেশ করে এই কমান্ডগুলো রান করবেন:
```bash
cd /home2/rezatauh/MedPulse-Healthcare
git pull origin main
php artisan migrate --force
php artisan optimize
```
