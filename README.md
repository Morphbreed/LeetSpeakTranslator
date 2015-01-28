LeetSpeakTranslator
========

Translate normal boring text into 4W350M3 73315P34K.

Installation
------------

With your command-line:

	git clone https://github.com/Morphbreed/LeetSpeakTranslator.git
	composer install


Usage
-----
```php

<?php
use Morphbreed\LeetSpeakTranslator\LeetSpeakTranslator;

require_once __DIR__ . '/../vendor/autoload.php';

$trans = new LeetSpeakTranslator();

// First argument is the word or sentence you want to translate
// With the second argument you can choose between 1 and 3 to decide how 1337 your word/sentence should be
var_dump($trans->translate('I am the hero and 1337', 3)); //! 4M 1H3 H320 4ND 1337

//Add as argument a word or sentence translated with my leetSpeakTranslator to transform the text into "normal"
var_dump($trans->revert('! 4M 1H3 H320 4ND 1337')); //I am the hero and 1337
```

Author
------

- [Matthias Jänicke]
