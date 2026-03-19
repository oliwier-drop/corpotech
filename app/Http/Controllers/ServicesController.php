<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Contracts\View\View;

class ServicesController extends Controller
{
    public function cybersecurity(): View
    {
        $recentInstallationPosts = $this->getRecentPostsByCategory(
            ['cyberbezpieczenstwo', 'cybersecurity'],
            ['Cyberbezpieczenstwo', 'Cyberbezpieczeństwo', 'Cybersecurity']
        );

        return view('services.cybersecurity', compact('recentInstallationPosts'));
    }

    public function systems(): View
    {
        $recentInstallationPosts = $this->getRecentPostsByCategory(
            ['administracja-systemow', 'systems-administration'],
            ['Administracja systemow', 'Administracja systemów']
        );

        return view('services.systems', compact('recentInstallationPosts'));
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
        $recentInstallationPosts = $this->getRecentPostsByCategory(
            ['strony-internetowe', 'websites'],
            ['Strony internetowe', 'Websites']
        );

        return view('services.websites', compact('recentInstallationPosts'));
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
