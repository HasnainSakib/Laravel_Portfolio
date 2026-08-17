<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Certification;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Admin User
        User::updateOrCreate(
            ['email' => 'admin@hasnainsakib.com'],
            [
                'name' => 'Hasnain Sakib Admin',
                'email' => 'admin@hasnainsakib.com',
                'password' => Hash::make('adminpassword123'),
            ]
        );

        // Initial Certifications
        $initialCerts = [
            [
                'title' => 'Google Analytics Certification',
                'issuer' => 'Google',
                'year' => '2024',
                'badge_text' => 'GA',
                'sort_order' => 1,
            ],
            [
                'title' => 'SEO Fundamentals',
                'issuer' => 'SEMrush',
                'year' => '2024',
                'badge_text' => 'SEO',
                'sort_order' => 2,
            ],
            [
                'title' => 'Digital Marketing Certification',
                'issuer' => 'HubSpot',
                'year' => '2024',
                'badge_text' => 'DM',
                'sort_order' => 3,
            ],
            [
                'title' => 'Paid Search / PPC',
                'issuer' => 'Google Ads',
                'year' => '2023',
                'badge_text' => 'PPC',
                'sort_order' => 4,
            ],
            [
                'title' => 'Content Marketing',
                'issuer' => 'HubSpot',
                'year' => '2023',
                'badge_text' => 'CM',
                'sort_order' => 5,
            ],
        ];

        foreach ($initialCerts as $cert) {
            Certification::updateOrCreate(
                ['title' => $cert['title']],
                $cert
            );
        }
    }
}
