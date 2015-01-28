<?php
use Morphbreed\LeetSpeakTranslator\LeetSpeakTranslator;

require_once __DIR__ . '/../vendor/autoload.php';

$trans = new LeetSpeakTranslator();
var_dump($trans->translate('i am the hero and', 3));

var_dump($trans->untranslate('! 4M 1H3 H320 4ND 1337'));