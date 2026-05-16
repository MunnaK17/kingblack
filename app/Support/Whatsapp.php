<?php

namespace App\Support;

class Whatsapp
{
    private const MESSAGES = [
        'hero' => 'Halo, saya ingin konsultasi program KINGBLACK',
        'executive' => 'Halo, saya tertarik dengan Program Executive KINGBLACK',
        'jasmani' => 'Halo, saya ingin konsultasi Program Jasmani KINGBLACK',
        'psikotest' => 'Halo, saya ingin konsultasi Program Psikotest KINGBLACK',
        'akademik' => 'Halo, saya ingin konsultasi Program Akademik KINGBLACK',
    ];

    public static function url(string $context): string
    {
        $message = self::MESSAGES[$context] ?? self::MESSAGES['hero'];
        $number = config('seo.whatsapp_number', '6289655655144');

        return 'https://wa.me/' . $number . '?text=' . rawurlencode($message);
    }
}
