<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ServiceCategory;
use Illuminate\Support\Str;

class ServiceCategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Plumbing',
                'description' => 'All plumbing services including repairs, installations, and maintenance',
                'icon' => 'fa-faucet',
            ],
            [
                'name' => 'Electrical',
                'description' => 'Electrical installations, repairs, and maintenance services',
                'icon' => 'fa-bolt',
            ],
            [
                'name' => 'Carpentry',
                'description' => 'Woodworking, furniture repair, and custom carpentry services',
                'icon' => 'fa-hammer',
            ],
            [
                'name' => 'Painting',
                'description' => 'Interior and exterior painting services',
                'icon' => 'fa-paint-roller',
            ],
            [
                'name' => 'Cleaning',
                'description' => 'Professional cleaning services for homes and offices',
                'icon' => 'fa-broom',
            ],
            [
                'name' => 'Gardening',
                'description' => 'Landscaping and garden maintenance services',
                'icon' => 'fa-leaf',
            ],
        ];

        foreach ($categories as $category) {
            ServiceCategory::create([
                'name' => $category['name'],
                'slug' => Str::slug($category['name']),
                'description' => $category['description'],
                'icon' => $category['icon'],
                'is_active' => true,
            ]);
        }
    }
}
