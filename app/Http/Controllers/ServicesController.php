<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Contracts\View\View;

class ServicesController extends Controller
{
    public function cybersecurity(): View
    {
        $recentCybersecurityPosts = $this->getRecentPostsByCategory(
            ['cyberbezpieczenstwo', 'cybersecurity'],
            ['Cyberbezpieczenstwo', 'Cyberbezpieczeństwo', 'Cybersecurity']
        );

        return view('services.cybersecurity', compact('recentCybersecurityPosts'));
    }

    public function systems(): View
    {
        $recentSystemsPosts = $this->getRecentPostsByCategory(
            ['administracja-systemow', 'systems-administration'],
            ['Administracja systemow', 'Administracja systemów']
        );

        return view('services.systems', compact('recentSystemsPosts'));
    }

    public function smarthome(): View
    {
        $recentSmartHomePosts = $this->getRecentPostsByCategory(
            ['smart-home'],
            ['Smart Home', 'Smart home']
        );

        return view('services.smarthome', compact('recentSmartHomePosts'));
    }

    public function installations(): View
    {
        $recentInstallationPosts = $this->getRecentPostsByCategory(
            ['instalacje-techniczne'],
            ['Instalacje techniczne']
        );

        return view('services.installations', compact('recentInstallationPosts'));
    }

    public function websites(): View
    {
        $recentWebsitePosts = $this->getRecentPostsByCategory(
            ['strony-internetowe', 'websites'],
            ['Strony internetowe', 'Websites']
        );

        return view('services.websites', compact('recentWebsitePosts'));
    }

    private function getRecentPostsByCategory(array $categorySlugs, array $categoryNames): \Illuminate\Database\Eloquent\Collection
    {
        return Post::query()
            ->with(['categories', 'author'])
            ->whereNotNull('slug')
            ->whereHas('categories', function ($query) use ($categorySlugs, $categoryNames) {
                $query->whereIn('slug', $categorySlugs)
                    ->orWhereIn('name', $categoryNames);
            })
            ->latest()
            ->limit(3)
            ->get();
    }
}
