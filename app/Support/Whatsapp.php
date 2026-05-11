<?php

namespace App\Support;

class Whatsapp
{
    public const NUMBER = '6281234567890';

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

        return 'https://wa.me/' . self::NUMBER . '?text=' . rawurlencode($message);
    }
}
