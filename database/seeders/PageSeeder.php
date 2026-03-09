<?php

namespace Database\Seeders;

use App\Models\Page;
use App\Models\PageSection;
use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Home Page
        $homePage = Page::create([
            'title' => 'Home',
            'slug' => 'home',
            'meta_title' => 'New Heroes International - Professional Clearing & Forwarding Services',
            'meta_description' => 'Leading clearing and forwarding company in Tanzania. We specialize in vehicle clearing, heavy machinery, customs documentation, and logistics coordination.',
            'meta_keywords' => 'clearing, forwarding, logistics, Tanzania, cargo, customs',
            'is_active' => true,
        ]);

        PageSection::create([
            'page_id' => $homePage->id,
            'section_key' => 'hero',
            'title' => 'Professional Clearing & Forwarding Services',
            'subtitle' => 'Your Trusted Logistics Partner in Tanzania',
            'content' => null,
            'button_text' => 'Request a Quote',
            'button_link' => '/request-quote',
            'order' => 1,
            'is_active' => true,
        ]);

        // About Page
        $aboutPage = Page::create([
            'title' => 'About Us',
            'slug' => 'about',
            'meta_title' => 'About New Heroes International Limited',
            'meta_description' => 'Learn more about New Heroes International, your trusted clearing and forwarding partner in Tanzania.',
            'is_active' => true,
        ]);

        PageSection::create([
            'page_id' => $aboutPage->id,
            'section_key' => 'overview',
            'title' => 'About New Heroes International',
            'subtitle' => 'Excellence in Clearing and Forwarding',
            'content' => '<p>New Heroes International Limited is a premier clearing and forwarding company based in Dar es Salaam, Tanzania. With years of experience in the logistics industry, we have established ourselves as a trusted partner for businesses requiring professional cargo clearance and forwarding services.</p><p>Our team of experienced professionals is dedicated to providing efficient, reliable, and cost-effective solutions for all your logistics needs.</p>',
            'order' => 1,
            'is_active' => true,
        ]);

        PageSection::create([
            'page_id' => $aboutPage->id,
            'section_key' => 'mission',
            'title' => 'Our Mission',
            'content' => '<p>To provide world-class clearing and forwarding services that exceed our clients\' expectations through professionalism, reliability, and innovative solutions.</p>',
            'order' => 2,
            'is_active' => true,
        ]);

        PageSection::create([
            'page_id' => $aboutPage->id,
            'section_key' => 'vision',
            'title' => 'Our Vision',
            'content' => '<p>To be the leading clearing and forwarding company in East Africa, recognized for our excellence in service delivery and customer satisfaction.</p>',
            'order' => 3,
            'is_active' => true,
        ]);
    }
}
