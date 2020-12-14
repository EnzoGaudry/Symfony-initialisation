<?php

namespace App\Service;

class Slugify
{
    /**
     * @param string|null $imput
     * @return string
     */
    public function generate(string $slug = null): string
    {
        $slug = iconv('utf-8', 'us-ascii//TRANSLIT', $slug);
        $slug = preg_replace('/\p{P}+/u', '', $slug);
        $slug = preg_replace('#[^-\w]+#', '-', $slug);
        $slug = trim($slug, '-');
        $slug = strtolower($slug);

        return $slug;
    }
}