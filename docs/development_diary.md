# MedPulse-Healthcare ডেভেলপমেন্ট ডায়েরী (Development Diary)

এই ফাইলটিতে প্রজেক্টের প্রতিদিনের কাজের তারিখসহ বিস্তারিত বিবরণ ডায়েরী আকারে লিপিবদ্ধ করা হবে, যাতে যে কেউ এটি পড়েই সহজেই কাজের অগ্রগতি বুঝতে পারেন।

---

### ২৬ মে, ২০২৬ (মঙ্গলবার)
#### কাজ: স্ট্যাটিক HTML টেমপ্লেট থেকে লারাভেল ব্লেড (Blade) টেমপ্লেটে রূপান্তর

আজ প্রজেক্টের প্রথম ধাপে স্ট্যাটিক HTML টেমপ্লেটগুলোকে লারাভেল ব্লেড ফাইলে রূপান্তর করার মূল কাজ সম্পন্ন করা হয়েছে। আজকের কাজের বিবরণ নিচে দেওয়া হলো:

1. **ডিফল্ট ওয়েলকাম পেজ রিমুভাল:**
   - লারাভেলের ফ্রেশ প্রজেক্টের সাথে আসা ডিফল্ট `resources/views/welcome.blade.php` ফাইলটি ডিলিট করা হয়েছে।

2. **মাস্টার লেআউট ও পারশিয়াল তৈরি:**
   - **মাস্টার লেআউট (`resources/views/layouts/app.blade.php`):** সম্পূর্ণ ওয়েবসাইটের মূল স্ট্রাকচার ফাইলটি তৈরি করা হয়েছে। এখানে Google Fonts, Font Awesome এবং Alpine.js CDN ইন্টিগ্রেট করা হয়েছে এবং Tailwind CSS v4 লোড করার জন্য Vite কনফিগার করা হয়েছে।
   - **নেভিগেশন বার (`resources/views/partials/navigation.blade.php`):** সাইটের হেডার এবং নেভিগেশন বার আলাদা করা হয়েছে। এখানে প্রতিটি পেজের মেনু আইটেমের লিংক আপডেট করা হয়েছে এবং লারাভেলের রাউটের সাথে সমন্বয় করে ডায়নামিক অ্যাক্টিভ স্টেট ক্লাস যোগ করা হয়েছে।
   - **ফুটার (`resources/views/partials/footer.blade.php`):** সাইটের ফুটার আলাদা করা হয়েছে এবং কপিরাইট ডাইনামিক করা হয়েছে।

3. **চারটি মূল পেজ ব্লেড ভিউতে রূপান্তর:**
   - **হোমপেজ (`resources/views/home.blade.php`):** মূল ড্যাশবোর্ড পেজটি মাস্টার লেআউটের আন্ডারে পোর্ট করা হয়েছে।
   - **সার্ভিস পেজ (`resources/views/services.blade.php`):** সার্ভিস সমূহের লিস্ট এবং খরচ ক্যালকুলেটর ভিউ পোর্ট করা হয়েছে।
   - **পরিচিতি পেজ (`resources/views/about.blade.php`):** আমাদের ইতিহাস ও টিম মেম্বারদের বিবরণ যুক্ত ব্লেড ভিউ তৈরি করা হয়েছে।
   - **যোগাযোগ পেজ (`resources/views/contact.blade.php`):** যোগাযোগের ফর্ম ও লাইভ চ্যাট উইজেট সম্পন্ন ব্লেড ভিউ তৈরি করা হয়েছে।

4. **রাউটিং ও কন্ট্রোলার সেটআপ:**
   - **`app/Http/Controllers/PageController.php`:** পেজ রেন্ডার করার জন্য একটি কন্ট্রোলার তৈরি করা হয়েছে এবং চারটি পেজ রেন্ডার করার মেথড লেখা হয়েছে।
   - **`routes/web.php`:** কন্ট্রোলারের সাথে ম্যাচ করে ৪টি Named Routes (`home`, `services`, `about`, `contact`) ডিফাইন করা হয়েছে।

5. **অ্যাসেট কম্পাইলেশন ও টেস্টিং:**
   - `npm run build` দিয়ে সমস্ত স্টাইল সাকসেসফুলি বিল্ড করা হয়েছে।
   - `php artisan route:list` দিয়ে সব রাউটের রেজিস্ট্রেশন সাকসেসফুলি ভেরিফাই করা হয়েছে।

---

### ২৬ মে, ২০২৬ (মঙ্গলবার - রাত)
#### কাজ: গিট ইনিশিয়ালাইজেশন এবং গিটহাবে পুশ (Phase 1)

আজ প্রজেক্টের দ্বিতীয় ধাপের জন্য গিট রিপোজিটরি ইনিশিয়ালাইজ করে দূরবর্তী গিটহাব রিপোজিটরিতে প্রথম পুশ সম্পন্ন করা হয়েছে। কাজের বিবরণ:
1. **লোকাল গিট রিপোজিটরি ইনিশিয়ালাইজেশন:** `git init` কমান্ড দিয়ে লোকাল ফোল্ডারে গিট ইনিশিয়ালাইজ করা হয়েছে।
2. **রিমোট রিপোজিটরি সংযোগ:** `git remote add origin https://github.com/Tauhid219/MedPulse-Healthcare` কমান্ডের সাহায্যে গিটহাব রিপোজিটরির সাথে লোকাল রিপোজিটরি যুক্ত করা হয়েছে।
3. **প্রথম কমিট ও পুশ:** লোকাল ফাইলগুলো স্টেজ করে `Initial commit` এর মাধ্যমে গিটহাবের `main` ব্রাঞ্চে সাকসেসফুলি পুশ করা হয়েছে।

---

### ২৬ মে, ২০২৬ (মঙ্গলবার - মধ্যরাত)
#### কাজ: ডাটাবেস ডিজাইন, মাইগ্রেশন এবং সিডিং (Phase 2)

আজ প্রজেক্টের ব্যাকএন্ডের জন্য প্রফেশনাল ডাটাবেস আর্কিটেকচার ডিজাইন করা হয়েছে। কাজের বিবরণ:
1. **মাইগ্রেশন ফাইল তৈরি:** `contact_messages`, `services`, `team_members` এবং `settings` টেবিলের জন্য মাইগ্রেশন ফাইলগুলো জেনারেট করা হয়েছে এবং সঠিক ডেটা টাইপ সহ কলামগুলো নির্ধারণ করা হয়েছে।
2. **Eloquent Models তৈরি:** `ContactMessage`, `Service`, `TeamMember`, এবং `Setting` মডেলগুলো তৈরি করে `protected $fillable` ফিল্ড এবং `Setting` মডেলে দ্রুত ডাটা রিট্রিভ করার জন্য `getValue` স্ট্যাটিক হেল্পার মেথড যুক্ত করা হয়েছে।
3. **Database Seeder ও ডাটা কালেকশন:** ফ্রন্টএন্ডের সকল স্ট্যাটিক ডাটা (৬টি সার্ভিস, ৩জন ডক্টর/লিডারশিপ মেম্বার এবং হোম পেজের সেটিংস ডাটা) সংগ্রহ করে `DatabaseSeeder.php` ফাইলে সেট করা হয়েছে।
4. **মাইগ্রেশন ও সিডিং সম্পন্নকরণ:** `php artisan migrate --seed` চালিয়ে ডাটাবেস স্ট্রাকচার তৈরি এবং স্ট্যাটিক ডাটা সাকসেসফুলি ডাটাবেসে পপুলেট করা হয়েছে।

---

### ২৬ মে, ২০২৬ (মঙ্গলবার - গভীর রাত)
#### কাজ: লারাভেল ব্রিজ ইনস্টলেশন এবং এডমিনএলটিই অথ স্টাইলিং (Phase 3)

আজ প্রজেক্টে Laravel Breeze অথেনটিকেশন সেটআপ এবং AdminLTE থিম অনুসারে অথ ভিউ স্টাইলিং সম্পন্ন করা হয়েছে। কাজের বিবরণ:
1. **Breeze ইনস্টলেশন:** `composer require laravel/breeze --dev` এবং `php artisan breeze:install blade --no-interaction` দিয়ে লারাভেলের ডিফল্ট অথেনটিকেশন স্কাফোল্ডিং সেটআপ করা হয়েছে। (ইনস্টলারের সুবিধার্থে সাময়িকভাবে একটি টেম্পোরারি `welcome.blade.php` তৈরি করে পরবর্তীতে তা ডিলিট করা হয়েছে)।
2. **অ্যাসেট কপি:** `C:\Reza\Tauhid\Templates\AdminLTE-3.1.0` থেকে `dist` এবং `plugins` ডিরেক্টরিগুলো লারাভেলের `public/adminlte` ডিরেক্টরিতে সাকসেসফুলি কপি করা হয়েছে।
3. **অথ লেআউট তৈরি:** এডমিন অথেনটিকেশনের জন্য একটি মাস্টার লেআউট `resources/views/layouts/admin-auth.blade.php` তৈরি করা হয়েছে যা AdminLTE এর সিএসএস ও জেএস ফাইলগুলো লোড করে।
4. **অথ পেজ স্টাইলিং:** Breeze এর ডিফল্ট ভিউগুলোকে পরিবর্তন করে AdminLTE ডিজাইন অনুযায়ী সাজানো হয়েছে:
   - `login.blade.php` (AdminLTE login-page থিম)
   - `register.blade.php` (AdminLTE register-page থিম)
   - `forgot-password.blade.php` (AdminLTE পাসওয়ার্ড রিকোয়েস্ট থিম)
   - `reset-password.blade.php` (AdminLTE পাসওয়ার্ড রিকভারি থিম)

---

### ২৬ মে, ২০২৬ (মঙ্গলবার - গভীর রাত)
#### কাজ: এডমিন লেআউট এবং ড্যাশবোর্ড তৈরি (Phase 4)

আজ প্রজেক্টের এডমিন ইন্টারফেসের মূল ফ্রেমওয়ার্ক এবং ড্যাশবোর্ড স্ক্রিন তৈরি করা হয়েছে। কাজের বিবরণ:
1. **এডমিন মাস্টার লেআউট:** `starter.html` এর উপর ভিত্তি করে `resources/views/layouts/admin.blade.php` ফাইল তৈরি করা হয়েছে। এতে সাইডবার মেনু (Dashboard, Messages, Services, Team Members, Settings), হেডার নেভিগেশন, লগআউট অপশন এবং প্রয়োজনীয় স্ক্রিপ্ট ইনক্লুড করা হয়েছে।
2. **ড্যাশবোর্ড ভিউ:** `resources/views/admin/dashboard.blade.php` ড্যাশবোর্ড পেজটি তৈরি করা হয়েছে। এতে মোট মেসেজ, মোট সার্ভিস এবং মোট টিম মেম্বারদের কার্ড উইজেট এবং সাম্প্রতিক কন্টাক্ট মেসেজের টেবিল লিস্ট যুক্ত করা হয়েছে।
3. **ড্যাশবোর্ড কন্ট্রোলার:** `DashboardController` তৈরি করে ডাটাবেস থেকে রিয়েল-টাইম তথ্য ও মেসেজ সংগ্রহ করে ড্যাশবোর্ডে পাস করা হয়েছে।
4. **রাউট ও রিডাইরেকশন:** `routes/web.php` ফাইলে এডমিন রাউট গ্রুপ ও মিডলওয়্যার ডিফাইন করা হয়েছে এবং Breeze-এর ডিফল্ট `/dashboard` রাউটকে `/admin/dashboard` এ রিডাইরেক্ট করা হয়েছে যাতে সফল লগইনের পর ইউজার সরাসরি এডমিন ড্যাশবোর্ডে প্রবেশ করতে পারেন।
5. **অন্যান্য এডমিন কন্ট্রোলার:** এডমিন রাউট লোড হওয়ার সুবিধার জন্য `MessageController`, `ServiceController`, `TeamMemberController`, এবং `SettingController` এর স্ট্রাকচারাল কন্ট্রোলার ফাইলগুলো তৈরি করা হয়েছে।

---

### ২৬ মে, ২০২৬ (মঙ্গলবার - গভীর রাত)
#### কাজ: ডাইনামিক কন্টাক্ট মেসেজ এবং এডমিন ট্রায়াজ ম্যানেজমেন্ট (Phase 5)

আজ প্রজেক্টের কন্টাক্ট ফর্মটিকে ডাটাবেসের সাথে সংযুক্ত করে ডায়নামিক করা হয়েছে এবং এডমিন প্যানেলে মেসেজ ম্যানেজমেন্ট ফিচার যুক্ত করা হয়েছে। কাজের বিবরণ:
1. **ফ্রন্টএন্ড কন্টাক্ট ফর্ম আপডেট:** [contact.blade.php](file:///c:/xampp/htdocs/My%20Works/Infinity%20AI%20Buildfest%202026/MedPulse-Healthcare/resources/views/contact.blade.php) ফাইলে মেসেজ পাঠানোর ফর্মটিতে `@csrf` টোকেন, সঠিক মেথড (`POST`), রুট অ্যাকশন (`contact.store`), এবং ইনপুট ফিল্ডগুলোতে `name` অ্যাট্রিবিউট যোগ করা হয়েছে। এছাড়াও সফল সাবমিশন মেসেজ এবং ভ্যালিডেশন এরর প্রদর্শনের অ্যালার্ট বক্স বসানো হয়েছে।
2. **কন্টাক্ট সাবমিশন কন্ট্রোলার লজিক:** [PageController.php](file:///c:/xampp/htdocs/My%20Works/Infinity%20AI%20Buildfest%202026/MedPulse-Healthcare/app/Http/Controllers/PageController.php) ফাইলে `storeMessage` মেথড যোগ করে মেসেজের ডাটা ভ্যালিডেশন এবং `ContactMessage` মডেলে স্টোর করার কাজ সম্পন্ন করা হয়েছে।
3. **এডমিন মেসেজ লিস্ট ভিউ:** [index.blade.php](file:///c:/xampp/htdocs/My%20Works/Infinity%20AI%20Buildfest%202026/MedPulse-Healthcare/resources/views/admin/messages/index.blade.php) তৈরি করা হয়েছে, যেখানে সমস্ত ট্রায়াজ মেসেজের লিস্ট (নাম, আইডি, টার্গেট, স্ট্যাটাস) দেখা যায়, মার্ক এজ রিড করা যায় এবং মেসেজ ডিলিট করা যায়।
4. **মেসেজ ডিটেইলস ভিউ:** [show.blade.php](file:///c:/xampp/htdocs/My%20Works/Infinity%20AI%20Buildfest%202026/MedPulse-Healthcare/resources/views/admin/messages/show.blade.php) তৈরি করা হয়েছে যা AdminLTE এর mailbox রিডার স্টাইলে যেকোনো মেসেজের সম্পূর্ণ তথ্য সুন্দরভাবে প্রদর্শন করে।
5. **মেসেজ কন্ট্রোলার আপডেট:** [MessageController.php](file:///c:/xampp/htdocs/My%20Works/Infinity%20AI%20Buildfest%202026/MedPulse-Healthcare/app/Http/Controllers/Admin/MessageController.php) ফাইলে মেসেজ দেখার সময় তা রিড স্ট্যাটাসে কনভার্ট করা, ম্যানুয়ালি রিড মার্ক করা এবং ডাটাবেস থেকে ডিলিট করার অ্যাকশন লজিকগুলো সম্পন্ন করা হয়েছে।

---

### ২৬ মে, ২০২৬ (মঙ্গলবার - গভীর রাত)
#### কাজ: সার্ভিস, টিম মেম্বার CRUD এবং সেটিংস পেজ তৈরি (Phase 6)

আজ এডমিন প্যানেলের সার্ভিস, টিম মেম্বার এবং গ্লোবাল সেটিংস আপডেট করার পেজগুলোর জন্য সম্পূর্ণ ইন্টারফেস তৈরি করা হয়েছে:
1. **সার্ভিস CRUD ভিউ সমূহ:**
   - [index.blade.php](file:///c:/xampp/htdocs/My%20Works/Infinity%20AI%20Buildfest%202026/MedPulse-Healthcare/resources/views/admin/services/index.blade.php): সমস্ত সার্ভিসের বিবরণ, দাম, কো-পে রেশিও এবং ডুরেশনের টেবিল ভিউ।
   - [create.blade.php](file:///c:/xampp/htdocs/My%20Works/Infinity%20AI%20Buildfest%202026/MedPulse-Healthcare/resources/views/admin/services/create.blade.php): নতুন সার্ভিস অ্যাড করার ফর্ম উইথ সঠিক ভ্যালিডেশন শোয়িং।
   - [edit.blade.php](file:///c:/xampp/htdocs/My%20Works/Infinity%20AI%20Buildfest%202026/MedPulse-Healthcare/resources/views/admin/services/edit.blade.php): বর্তমান সার্ভিসগুলো এডিট এবং আপডেট করার ব্যবস্থা।
2. **টিম মেম্বার CRUD ভিউ সমূহ:**
   - [index.blade.php](file:///c:/xampp/htdocs/My%20Works/Infinity%20AI%20Buildfest%202026/MedPulse-Healthcare/resources/views/admin/team/index.blade.php): চিকিৎসকদের তালিকা, ছবি, পজিশন এবং সর্ট অর্ডার ইনডেক্স সহ ভিউ।
   - [create.blade.php](file:///c:/xampp/htdocs/My%20Works/Infinity%20AI%20Buildfest%202026/MedPulse-Healthcare/resources/views/admin/team/create.blade.php): নতুন টিম মেম্বার বা ডক্টর যুক্ত করার ফর্ম।
   - [edit.blade.php](file:///c:/xampp/htdocs/My%20Works/Infinity%20AI%20Buildfest%202026/MedPulse-Healthcare/resources/views/admin/team/edit.blade.php): ডক্টরের প্রোফাইল আপডেট বা পরিবর্তনের ফর্ম।
3. **গ্লোবাল সেটিংস ভিউ:**
   - [index.blade.php](file:///c:/xampp/htdocs/My%20Works/Infinity%20AI%20Buildfest%202026/MedPulse-Healthcare/resources/views/admin/settings/index.blade.php): হোম পেজের টেক্সটসমূহ, হসপিটালের ফোন নম্বর ও ইমেইল এবং পেশেন্ট কার্ডের মেম্বারশিপ রিয়েল-টাইম ডাটা আপডেট করার ফর্ম ইন্টারফেস।

---

### ২৬ মে, ২০২৬ (মঙ্গলবার - গভীর রাত)
#### কাজ: ফ্রন্টএন্ড ডাইনামিক ইন্টিগ্রেশন এবং রিয়েল-টাইম ক্লক (Phase 7)

আজ ফ্রন্টএন্ডের সমস্ত স্ট্যাটিক ডাটাকে ডাটাবেসের ডাটা ও সেটিংসের সাথে সিঙ্ক করা হয়েছে এবং ফুটার ডাইনামিক করা হয়েছে:
1. **PageController আপডেট:** [PageController.php](file:///c:/xampp/htdocs/My%20Works/Infinity%20AI%20Buildfest%202026/MedPulse-Healthcare/app/Http/Controllers/PageController.php) এর `home`, `services`, `about` এবং `contact` অ্যাকশনগুলোতে ডাটাবেসের `Setting`, `Service` ও `TeamMember` মডেল থেকে রিয়েল-টাইম তথ্য কুয়েরি করে ব্লেড ফাইলে পাস করা হয়েছে।
2. **হোমপেজ ইন্টিগ্রেশন:** [home.blade.php](file:///c:/xampp/htdocs/My%20Works/Infinity%20AI%20Buildfest%202026/MedPulse-Healthcare/resources/views/home.blade.php) এ হিরো সেকশন টেক্সট, ডক্টরস অনলাইন স্ট্যাটাস, এবং পেশেন্ট পোর্টাল মেম্বারশিপ কার্ডের ভ্যালুগুলো গ্লোবাল সেটিংস থেকে ডাইনামিকালি নিয়ে আসা হয়েছে। এছাড়া উপলব্ধ স্পেশালিস্টদের ডাটাবেসের টিম মেম্বারদের তথ্য লুপ দিয়ে রেন্ডার করা হয়েছে।
3. **সার্ভিস ও কস্ট ক্যালকুলেটর ডাইনামিককরণ:** [services.blade.php](file:///c:/xampp/htdocs/My%20Works/Infinity%20AI%20Buildfest%202026/MedPulse-Healthcare/resources/views/services.blade.php) পেজে ডাটাবেসের সব সার্ভিস ও ক্যাটাগরি ক্যাবলিং করে শো করা হয়েছে এবং ওপিডি কস্ট ক্যালকুলেটর টুলের প্রাইজ ডাটাবেসের প্রাইস ভ্যালুর সাথে ডাইনামিকালি বাইন্ড করা হয়েছে।
4. **পরিচিতি ও টিম বোর্ড আপডেট:** [about.blade.php](file:///c:/xampp/htdocs/My%20Works/Infinity%20AI%20Buildfest%202026/MedPulse-Healthcare/resources/views/about.blade.php) এ লিডারশিপ বোর্ডের ডক্টর প্রোফাইলগুলো ডাটাবেসের টিম মেম্বারদের তথ্য দিয়ে সর্ট অর্ডার অনুযায়ী রেন্ডার করা হয়েছে।
5. **ফুটার রিয়েল-টাইম ডিজিটাল ক্লক:** [footer.blade.php](file:///c:/xampp/htdocs/My%20Works/Infinity%20AI%20Buildfest%202026/MedPulse-Healthcare/resources/views/partials/footer.blade.php) এ জাভাস্ক্রিপ্টের `setInterval` ও `toLocaleTimeString` ব্যবহার করে একটি সেকেন্ড-বাই-সেকেন্ড চলমান রিয়েল-টাইম সিস্টেম ঘড়ি যুক্ত করা হয়েছে।

