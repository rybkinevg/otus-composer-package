<?php

declare(strict_types=1);

namespace RybkinEvg\OtusComposerPackage;

class GrootPhraseGenerator
{
    private const PHRASE = 'I am Groot';

    public function getRandomPhrase(): string
    {
        return self::PHRASE;
    }
}