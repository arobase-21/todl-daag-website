<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    @foreach($companyServices as $service)
{{--    @foreach ($entries as $entry)--}}
        <url>
            <loc>https://{{ request()->header('host') }}/services/{{ $service['alias'] }}</loc>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
    @endforeach
</urlset>
