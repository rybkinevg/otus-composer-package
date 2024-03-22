# Groot Phrase Generator

Generates a random Groot phrase

## Requirements

- PHP ^8.1

## Installation

```bash
composer require rybkinevg/otus-composer-package
```

## Usage

```php
<?php
use RybkinEvg\OtusComposerPackage\GrootPhraseGenerator;

$phrase = (new GrootPhraseGenerator)->getRandomPhrase();
```