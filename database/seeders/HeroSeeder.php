<?php
namespace Database\Seeders;

use App\Models\Hero;
use Illuminate\Database\Seeder;

class HeroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Hero::insert([

            [
                'title'       => 'My First Day at Medical College',
                'description' => 'The beginning of an unforgettable journey into the world of medicine. Every lecture, every face, and every moment became part of a lifelong dream.',
                'image'       => 'https://images.unsplash.com/photo-1576091160550-2173dba999ef?w=1200',
                'is_active'   => true,
                'sort_order'  => 1,
            ],

            [
                'title'       => 'Late Night Study Sessions',
                'description' => 'Long nights with anatomy books, coffee, and determination. Medical school teaches resilience before medicine.',
                'image_url'   => 'https://images.unsplash.com/photo-1523240795612-9a054b0db644?w=1200',
                'is_active'   => true,
                'sort_order'  => 2,
            ],

            [
                'title'       => 'First Anatomy Lab',
                'description' => 'The anatomy lab was where textbooks became reality. It was challenging, emotional, and unforgettable.',
                'image_url'   => 'https://images.unsplash.com/photo-1532938911079-1b06ac7ceec7?w=1200',
                'is_active'   => true,
                'sort_order'  => 3,
            ],

            [
                'title'       => 'Clinical Ward Experience',
                'description' => 'Stepping into the hospital ward for the first time changed my understanding of patient care forever.',
                'image_url'   => 'https://images.unsplash.com/photo-1580281657527-47f249e8f4df?w=1200',
                'is_active'   => true,
                'sort_order'  => 4,
            ],

            [
                'title'       => 'Friends Who Became Family',
                'description' => 'Medical school is easier when you have friends who study, struggle, and celebrate with you.',
                'image_url'   => 'https://images.unsplash.com/photo-1523050854058-8df90110c9f1?w=1200',
                'is_active'   => true,
                'sort_order'  => 5,
            ],

            [
                'title'       => 'Preparing for Professional Exams',
                'description' => 'Weeks of preparation, countless revisions, and finally the confidence to face professional exams.',
                'image_url'   => 'https://images.unsplash.com/photo-1516321318423-f06f85e504b3?w=1200',
                'is_active'   => true,
                'sort_order'  => 6,
            ],

            [
                'title'       => 'White Coat Ceremony',
                'description' => 'Wearing the white coat for the first time reminded me of the responsibility that comes with this profession.',
                'image_url'   => 'https://images.unsplash.com/photo-1559839734-2b71ea197ec2?w=1200',
                'is_active'   => true,
                'sort_order'  => 7,
            ],

            [
                'title'       => 'Hospital Duty Life',
                'description' => 'Busy shifts, patient interactions, and real clinical experience shaped my growth as a future doctor.',
                'image_url'   => 'https://images.unsplash.com/photo-1584515933487-779824d29309?w=1200',
                'is_active'   => true,
                'sort_order'  => 8,
            ],

            [
                'title'       => 'Medical Conference Journey',
                'description' => 'Presenting research and learning from experts inspired me to continue growing beyond the classroom.',
                'image_url'   => 'https://images.unsplash.com/photo-1519389950473-47ba0277781c?w=1200',
                'is_active'   => true,
                'sort_order'  => 9,
            ],

            [
                'title'       => 'Graduation Is Just the Beginning',
                'description' => 'Graduation marks the end of one chapter and the beginning of a lifelong commitment to patient care.',
                'image_url'   => 'https://images.unsplash.com/photo-1527613426441-4da17471b66d?w=1200',
                'is_active'   => true,
                'sort_order'  => 10,
            ],

        ]);
    }
}
