# MedPulse-Healthcare Backend & AdminLTE Integration Implementation Plan

এই প্ল্যানটি `MedPulse-Healthcare` প্রজেক্টের জন্য একটি প্রফেশনাল ব্যাকএন্ড তৈরি এবং `AdminLTE-3.1.0` বুটস্ট্র্যাপ টেমপ্লেট ব্যবহার করে একটি ডাইনামিক এডমিন প্যানেল তৈরির ধাপগুলো বিস্তারিতভাবে বর্ণনা করে। প্রতিটি ফেজের অগ্রগতি ট্র্যাক করার জন্য প্রগ্রেস মার্কার ব্যবহার করা হবে। প্রতিটি ফেজের শেষে `development_diary.md` আপডেট করা হবে।

## Status Markers
- `[ ]` Pending / অসম্পূর্ণ
- `[/]` In Progress / চলমান
- `[x]` Completed / সম্পন্ন

---

## Phase 1: গিট ও গিটহাব ইনিশিয়ালাইজেশন এবং পুশ [x]
- [x] গিট রিপোজিটরি কনফিগারেশন চেক করা।
- [x] গিটহাব রিমোট রিপোজিটরি (`https://github.com/Tauhid219/MedPulse-Healthcare`) যুক্ত করা।
- [x] বর্তমান কোডবেস গিটহাবে প্রথম পুশ (Initial Push) করা।
- [x] `docs/development_diary.md` আপডেট করা।

---

## Phase 2: ডাটাবেস ডিজাইন এবং মাইগ্রেশন [x]
- [x] **Contact Messages Table (`contact_messages`):**
  - Fields: `id`, `name`, `health_id`, `routing_target`, `message`, `status` (unread/read), `created_at`, `updated_at`.
- [x] **Services Table (`services`):**
  - Fields: `id`, `title`, `description`, `icon`, `category`, `price_estimate`, `co_pay_ratio`, `created_at`, `updated_at`.
- [x] **Team Members Table (`team_members`):**
  - Fields: `id`, `name`, `role`, `department`, `bio`, `image_url`, `order_index`, `created_at`, `updated_at`.
- [x] **Settings Table (`settings`):**
  - Fields: `id`, `key` (unique), `value` (text), `created_at`, `updated_at` (যেমন: hero_title, hero_subtitle, hospital_phone, hospital_email ইত্যাদি)।
- [x] **Database Seeder:**
  - ফ্রন্টএন্ডে বর্তমানে থাকা সকল স্ট্যাটিক ডাটা (Services, Team Members, এবং Hero Section, Stats, contact details এর মত সেটিংস) সংগ্রহ করে Laravel Seeders তৈরি করা। এর ফলে সিড করার সাথে সাথে পুরো সাইটটি আগের মতোই সব স্ট্যাটিক ডাটা সহ সচল থাকবে, কিন্তু ডাটা আসবে ডাটাবেস থেকে।
- [x] ডাটাবেস মাইগ্রেশন ও সিডিং রান করে লোকাল ডাটাবেস প্রিপেয়ার করা।
- [x] `docs/development_diary.md` আপডেট করা।

---

## Phase 3: লারাভেল ব্রিজ ইন্সটলেশন এবং এডমিনএলটিই অথ স্টাইলিং [x]
- [x] লারাভেল ব্রিজ (`laravel/breeze`) কম্পোজার প্যাকেজ ইন্সটল করা।
- [x] ব্লেড স্ট্যাকের জন্য Breeze ইন্সটলেশন রান করা (`php artisan breeze:install blade`)।
- [x] AdminLTE static assets (`dist` এবং `plugins` ফোল্ডার) লারাভেলের `public/adminlte` ডিরেক্টরিতে কপি করা।
- [x] Breeze-এর ডিফল্ট অথ ভিউগুলো পরিবর্তন করে `AdminLTE-3.1.0` স্টাইল অনুসারে আপডেট করা:
  - `login.blade.php` -> AdminLTE login box ডিজাইন।
  - `register.blade.php` -> AdminLTE register box ডিজাইন।
  - `forgot-password.blade.php` -> AdminLTE forgot password ডিজাইন।
  - `reset-password.blade.php` -> AdminLTE recover password ডিজাইন।
- [x] `docs/development_diary.md` আপডেট করা।

---

## Phase 4: এডমিন লেআউট এবং ড্যাশবোর্ড তৈরি [ ]
- [ ] AdminLTE-এর `starter.html` ডিজাইনকে কেন্দ্র করে `resources/views/layouts/admin.blade.php` লেআউট তৈরি করা।
- [ ] ড্যাশবোর্ড ভিউ (`resources/views/admin/dashboard.blade.php`) তৈরি করা:
  - গুরুত্বপূর্ণ স্ট্যাটিস্টিক্স কার্ডস (Total Messages, Active Services, Total Team Members)।
  - রিসেন্ট মেসেজ এবং সিস্টেম লগ স্ট্যাটাস।
- [ ] এডমিন রাউট গ্রুপ ও মিডলওয়্যার (`auth`, `verified`) কনফিগার করা।
- [ ] `docs/development_diary.md` আপডেট করা।

---

## Phase 5: ডাইনামিক কন্টাক্ট মেসেজ এবং এডমিন ট্রায়াজ ম্যানেজমেন্ট [ ]
- [ ] ফ্রন্টএন্ডের `contact.blade.php` ফর্মটি আপডেট করে ডাটাবেসে মেসেজ সাবমিশনের ব্যবস্থা করা।
- [ ] মেসেজ সাবমিশনের জন্য রিকোয়েস্ট ভ্যালিডেশন এবং কন্ট্রোলার লজিক তৈরি করা।
- [ ] এডমিন প্যানেলে মেসেজ দেখার জন্য `Admin/MessageController` এবং মেসেজ লিস্ট পেজ তৈরি করা।
- [ ] মেসেজ ডিটেইলস ভিউ এবং ডিলিট করার সুবিধা যুক্ত করা।
- [ ] `docs/development_diary.md` আপডেট করা।

---

## Phase 6: সার্ভিস এবং টিম মেম্বার CRUD এডমিন প্যানেল [ ]
- [ ] **Services Controller & CRUD Views:**
  - সার্ভিসের তালিকা, নতুন সার্ভিস যোগ, এডিট এবং ডিলিট করার এডমিন ইন্টারফেস।
- [ ] **Team Members Controller & CRUD Views:**
  - টিম মেম্বারদের তালিকা, নতুন মেম্বার যোগ, ছবি আপলোড/ইউআরএল সেট, বায়ো এডিট এবং ডিলিট করার এডমিন ইন্টারফেস。
- [ ] **Global Settings Controller & View:**
  - ফ্রন্টএন্ডের হোম পেজের Hero টেক্সট, ফোন নম্বর, ইমেইল ইত্যাদি এডিট করার অপশন।
- [ ] `docs/development_diary.md` আপডেট করা।

---

## Phase 7: ফ্রন্টএন্ড ডাইনামিক ইন্টিগ্রেশন এবং রিয়েল-টাইম ক্লক [ ]
- [ ] `PageController` আপডেট করে ডাটাবেস থেকে `services`, `team_members` এবং `settings` এর ডাটা ফ্রন্টএন্ড পেজগুলোতে পাস করা।
- [ ] ফ্রন্টএন্ড পেজগুলোকে ডাইনামিক লুপ ও ভেরিয়েবল দিয়ে রেন্ডার করা:
  - `home.blade.php` (Hero, Stats, Services Summary)
  - `services.blade.php` (Dynamic list with estimator integration)
  - `about.blade.php` (Dynamic Team Members)
- [ ] ফুটার পারশিয়াল (`footer.blade.php`)-এ একটি জাভাস্ক্রিপ্ট রিয়েল-টাইম ক্লক (Real-Time System Clock) যুক্ত করা।
- [ ] `docs/development_diary.md` আপডেট করা।

---

## Phase 8: ভেরিফিকেশন এবং গিট পুশ [ ]
- [ ] লোকাল এনভায়রনমেন্টে সব ফিচার ভেরিফাই করা (Auth, Form submits, Dashboard charts/stats, CRUD operations)।
- [ ] ভেরিফিকেশন রিপোর্ট এবং ওয়াকথ্রু ডক্যুমেন্ট আপডেট করা।
- [ ] গিটহাবে ফাইনাল কোড পুশ করা।
- [ ] `docs/development_diary.md` এর ফাইনাল আপডেট করা।

---

## Verification Plan

### Automated & Manual Tests
- `php artisan db:seed` চালিয়ে ডাটা ঠিকমতো ডাটাবেসে পপুলেট হচ্ছে কিনা তা নিশ্চিত করা।
- Breeze-এর নতুন অথ ফ্লো পরীক্ষা করা।
- কন্টাক্ট ফর্ম পূরণ করে সাবমিট করলে তা ডাটাবেস এবং এডমিন প্যানেলে সাকসেসফুলি শো করছে কিনা তা দেখা।
- ফুটারের রিয়েল-টাইম ঘড়ি প্রতি সেকেন্ডে আপডেট হচ্ছে কিনা পরীক্ষা করা।
