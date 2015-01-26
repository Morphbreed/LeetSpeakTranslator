<?php
use Morphbreed\LeetSpeakTranslator\LeetSpeakTranslator;

require_once __DIR__ . '/../vendor/autoload.php';

$trans = new LeetSpeakTranslator();
var_dump($trans->translate('i am a test!', 1));