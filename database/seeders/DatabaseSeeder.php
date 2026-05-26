<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Service;
use App\Models\TeamMember;
use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Seed default admin user
        User::updateOrCreate(
            ['email' => 'admin@medpulse.com'],
            [
                'name' => 'Admin User',
                'password' => Hash::make('password123'),
            ]
        );

        // Seed settings
        $settings = [
            'hero_title' => 'Your health ecosystem,<br><span class="text-blue-600">digitized and simplified.</span>',
            'hero_subtitle' => 'Access real-time health analytics, book virtual consultations instantly, and securely manage your medical history all from one centralized hub.',
            'doctors_online_text' => 'All systems operational • 420 Doctors Online',
            'health_plan_title' => 'Premium Family Care',
            'health_plan_id' => '#MP-9842',
            'deductible_progress_text' => '$1,200 / $3,000',
            'deductible_progress_percentage' => '40',
            'next_refill_text' => 'In 3 Days',
            'pending_claims_text' => '1 Active',
            'hospital_phone' => '+1 (800) 555-4200',
            'hospital_email' => 'triage@medpulse.com',
        ];

        foreach ($settings as $key => $value) {
            Setting::updateOrCreate(['key' => $key], ['value' => $value]);
        }

        // Seed services
        $services = [
            [
                'title' => 'High-Density Genomic Sequencing',
                'description' => 'Map raw genetic biomarkers to predict baseline health vulnerabilities, pharmacogenomic drug responses, and inherited oncology mutations.',
                'icon' => 'fa-dna',
                'category' => 'diagnostics',
                'price_estimate' => 350.00,
                'co_pay_ratio' => 10,
                'duration' => 'Turnaround: 5-7 Business Days',
            ],
            [
                'title' => 'Multi-Phase Echocardiography',
                'description' => 'Advanced localized ultra-high frequency acoustic mapping used to reconstruct multi-chamber structural flow models of cardiac ventricles.',
                'icon' => 'fa-wave-square',
                'category' => 'cardiovascular',
                'price_estimate' => 220.00,
                'co_pay_ratio' => 20,
                'duration' => 'Duration: 45 Mins • In-Clinic Only',
            ],
            [
                'title' => 'Quantitative EEG Neuro-mapping',
                'description' => 'Digital tracking arrays monitoring microvoltage cortical electrical dynamics to isolate focal vectors causing structural insomnia or persistent neural fatigue.',
                'icon' => 'fa-diagram-project',
                'category' => 'neurology',
                'price_estimate' => 180.00,
                'co_pay_ratio' => 15,
                'duration' => 'Telehealth Review Available',
            ],
            [
                'title' => 'Precision Metabolic Modulation',
                'description' => 'Continuous cellular fuel monitoring optimization frameworks balancing glycemic variance arrays through deep nutrition tailoring.',
                'icon' => 'fa-apple-whole',
                'category' => 'wellness',
                'price_estimate' => 150.00,
                'co_pay_ratio' => 10,
                'duration' => 'Quarterly Tracking Plan',
            ],
            [
                'title' => 'Advanced Lipid Subfractionation',
                'description' => 'Nuclear magnetic resonance panel measuring exact particle count concentration sizes rather than arbitrary traditional cholesterol aggregates.',
                'icon' => 'fa-droplet',
                'category' => 'diagnostics',
                'price_estimate' => 85.00,
                'co_pay_ratio' => 10,
                'duration' => 'Next-day Dashboard Sync',
            ],
            [
                'title' => 'Adaptive Immunological Profiling',
                'description' => 'Comprehensive tracking mapping active/latent T-cell populations to catalog systematic resilience benchmarks against seasonal shifts.',
                'icon' => 'fa-shield-virus',
                'category' => 'wellness',
                'price_estimate' => 120.00,
                'co_pay_ratio' => 15,
                'duration' => 'Annual Checkup Standard',
            ],
        ];

        foreach ($services as $service) {
            Service::updateOrCreate(['title' => $service['title']], $service);
        }

        // Seed team members
        $teamMembers = [
            [
                'name' => 'Dr. Elena Rostova, MD',
                'role' => 'Chief Medical Officer',
                'department' => 'Molecular Informatics',
                'bio' => 'Former Director of Molecular Informatics at Johns Hopkins University. Over 15 years optimizing biometric clinical diagnostic paradigms.',
                'image_url' => 'https://images.unsplash.com/photo-1559839734-2b71ea197ec2?auto=format&fit=crop&w=400&q=80',
                'order_index' => 1,
            ],
            [
                'name' => 'Marcus Vance, MD, FACC',
                'role' => 'Head of Cardiovascular Innovation',
                'department' => 'Cardiology',
                'bio' => 'Pioneered remote multi-phase myocardial telemetry models. Board-certified structural cardiologist specializing in non-invasive tracking protocols.',
                'image_url' => 'https://images.unsplash.com/photo-1622253692010-333f2da6031d?auto=format&fit=crop&w=400&q=80',
                'order_index' => 2,
            ],
            [
                'name' => 'Siddharth Mehta, PhD',
                'role' => 'VP of Network Infrastructures',
                'department' => 'Network Security',
                'bio' => 'Lead security engineer for medical cryptographic storage patterns. Focuses on maintaining SOC2 compliance and zero-knowledge database safety loops.',
                'image_url' => 'https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&w=400&q=80',
                'order_index' => 3,
            ],
        ];

        foreach ($teamMembers as $member) {
            TeamMember::updateOrCreate(['name' => $member['name']], $member);
        }
    }
}
