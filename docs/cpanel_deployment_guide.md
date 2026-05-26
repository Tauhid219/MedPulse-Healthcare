# MedPulse-Healthcare cPanel Deployment & Manual CI/CD Guide

এই গাইডটিতে প্রজেক্টের হোস্টিং আর্কিটেকচার এবং ভবিষ্যতে গিটহাবের রিমোট আপডেটগুলো লাইভ সার্ভারে কীভাবে ম্যানুয়ালি ডেপ্লয় (CI/CD) করবেন তার বিবরণ দেওয়া হলো।

---

## ১. হোস্টিং ইনফরমেশন (Hosting Details)
* **সাবডোমেন লিংক:** `https://project.rezatauhid.top`
* **হোম ডিরেক্টরি পাথ:** `/home2/rezatauh`
* **কোডবেস লোকেশন:** `/home2/rezatauh/MedPulse-Healthcare`
* **ওয়েব রুট/ডকুমেন্ট রুট:** `/home2/rezatauh/project.rezatauhid.top` (Symlink to `MedPulse-Healthcare/public`)

---

## ২. সম্পন্ন করা ডেপ্লয়মেন্ট ধাপসমূহ (Steps Performed)

### ক. প্রজেক্ট ক্লোন করা
হোম ডিরেক্টরি থেকে গিটহাব রিপোজিটরি ক্লোন করা হয়েছে:
```bash
cd /home2/rezatauh
git clone https://github.com/Tauhid219/MedPulse-Healthcare.git
```

### খ. সিকিউর সিমলিংক (Secure Symlink) তৈরি
cPanel এর ডিফল্ট ফোল্ডার সরিয়ে লারাভেলের `public` ফোল্ডারটিকে ওয়েব রুটের সাথে সিমলিংক করা হয়েছে:
```bash
mv project.rezatauhid.top project.rezatauhid.top_old
ln -s /home2/rezatauh/MedPulse-Healthcare/public /home2/rezatauh/project.rezatauhid.top
```

### গ. ডিপেন্ডেন্সি ইনস্টলেশন
সার্ভারে থাকা `composer.phar` ব্যবহার করে প্রোডাকশন ডিপেন্ডেন্সি ইনস্টল করা হয়েছে:
```bash
cd MedPulse-Healthcare
php /home2/rezatauh/composer.phar install --no-dev --optimize-autoloader
```

### ঘ. এনভায়রনমেন্ট কনফিগারেশন
`.env` ফাইল কপি করে ডাটাবেস ও অ্যাপের সেটিংস কনফিগার করা হয়েছে এবং সিকিউর কি জেনারেট করা হয়েছে:
```bash
cp .env.example .env
php artisan key:generate
```

### ঙ. ডাটাবেস মাইগ্রেশন ও সিডিং
ডাটাবেসের সব স্কিমা তৈরি করে সেটিংস, সার্ভিস, ডক্টরদের বায়ো এবং ডিফল্ট এডমিন ইউজার সিড করা হয়েছে:
```bash
php artisan migrate --seed
```

### চ. স্টোরেজ লিংক ও ক্যাশ অপ্টিমাইজেশন
মিডিয়া ফাইলের অ্যাক্সেসের জন্য স্টোরেজ লিংক তৈরি এবং ক্যাশিং করা হয়েছে:
```bash
php artisan storage:link
php artisan optimize
```

---

## ৩. ম্যানুয়াল CI/CD এবং সার্ভার আপডেট গাইড (Manual CI/CD Workflow)

ভবিষ্যতে আপনি যখন লোকাল পিসিতে কোডে কোনো পরিবর্তন করে গিটহাবে পুশ করবেন, সার্ভারে সেই আপডেটগুলো লাইভ করতে টার্মিনালে প্রবেশ করে নিচের নির্দেশনাবলী অনুসরণ করবেন:

### ১. প্রজেক্ট ডিরেক্টরিতে যাওয়া
```bash
cd /home2/rezatauh/MedPulse-Healthcare
```

### ২. গিটহাব থেকে লেটেস্ট কোড পুল করা
```bash
git pull origin main
```

### ৩. নতুন কোনো প্যাকেজ যুক্ত হলে কম্পোজার আপডেট
(যদি `composer.json`-এ নতুন কোনো লাইব্রেরি অ্যাড করেন, তবেই এটি রান করবেন, অন্যথায় স্কিপ করতে পারেন):
```bash
php /home2/rezatauh/composer.phar install --no-dev --optimize-autoloader
```

### ৪. ডাটাবেসের কোনো পরিবর্তন থাকলে মাইগ্রেশন রান
```bash
php artisan migrate --force
```
*(প্রোডাকশনে প্রম্পট এড়াতে `--force` ফ্ল্যাগ ব্যবহার করা হয়)*

### ৫. ক্যাশ ক্লিয়ার ও পুনরায় ক্যাশ জেনারেট করা
সার্ভারের ক্যাশ ডাটা ও ভিউ আপডেট করতে নিচের কমান্ডটি রান করবেন:
```bash
php artisan optimize
```

---

## ৪. ডিফল্ট এডমিন ক্রেডেনশিয়াল (Default Credentials)
* **লগইন লিংক:** `https://project.rezatauhid.top/login`
* **ইমেল:** `admin@medpulse.com`
* **পাসওয়ার্ড:** `password123`
