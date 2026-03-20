<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Response;

class SitemapController extends Controller
{
    public function index(): Response
    {
        // IMPORTANT: nie bazujemy na APP_URL, bo w dev może być np. localhost,
        // a sitemap ma zwracać adresy z aktualnego hosta.
        $host = request()->getSchemeAndHttpHost();

        $nowAtom = now()->toAtomString();

        $urls = [
            [
                'loc' => $host . route('home', [], false),
                'lastmod' => $nowAtom,
                'priority' => '1.00',
            ],
            [
                'loc' => $host . route('about', [], false),
                'lastmod' => $nowAtom,
                'priority' => '0.80',
            ],
            [
                'loc' => $host . route('services', [], false),
                'lastmod' => $nowAtom,
                'priority' => '0.80',
            ],
            [
                'loc' => $host . route('cybersecurity', [], false),
                'lastmod' => $nowAtom,
                'priority' => '0.80',
            ],
            [
                'loc' => $host . route('systems', [], false),
                'lastmod' => $nowAtom,
                'priority' => '0.80',
            ],
            [
                'loc' => $host . route('smarthome', [], false),
                'lastmod' => $nowAtom,
                'priority' => '0.80',
            ],
            [
                'loc' => $host . route('installations', [], false),
                'lastmod' => $nowAtom,
                'priority' => '0.80',
            ],
            [
                'loc' => $host . route('websites', [], false),
                'lastmod' => $nowAtom,
                'priority' => '0.80',
            ],
            [
                'loc' => $host . route('projects', [], false),
                'lastmod' => $nowAtom,
                'priority' => '0.80',
            ],
            [
                'loc' => $host . route('contact', [], false),
                'lastmod' => $nowAtom,
                'priority' => '0.70',
            ],
        ];

        // Realizacje (posts) - dodajemy pełne URL-e po slug
        $posts = Post::query()
            ->select(['slug', 'updated_at', 'created_at'])
            ->whereNotNull('slug')
            ->where('slug', '!=', '')
            ->get();

        foreach ($posts as $post) {
            $lastmod = $post->updated_at ?? $post->created_at ?? now();
            $urls[] = [
                'loc' => $host . route('post.show', ['slug' => $post->slug], false),
                'lastmod' => $lastmod->toAtomString(),
                'priority' => '0.80',
            ];
        }

        // Prosty generator XML (bez pakietów), z poprawnym escapowaniem dla XML.
        $xmlParts = [];
        $xmlParts[] = '<?xml version="1.0" encoding="UTF-8"?>';
        $xmlParts[] = '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';

        foreach ($urls as $item) {
            $loc = htmlspecialchars($item['loc'], ENT_QUOTES | ENT_XML1, 'UTF-8');
            $lastmod = htmlspecialchars($item['lastmod'], ENT_QUOTES | ENT_XML1, 'UTF-8');
            $priority = htmlspecialchars($item['priority'], ENT_QUOTES | ENT_XML1, 'UTF-8');

            $xmlParts[] = '  <url>';
            $xmlParts[] = "    <loc>{$loc}</loc>";
            $xmlParts[] = "    <lastmod>{$lastmod}</lastmod>";
            $xmlParts[] = "    <priority>{$priority}</priority>";
            $xmlParts[] = '  </url>';
        }

        $xmlParts[] = '</urlset>';

        $xml = implode("\n", $xmlParts);

        return response($xml, 200, [
            'Content-Type' => 'application/xml; charset=UTF-8',
        ]);
    }
}

