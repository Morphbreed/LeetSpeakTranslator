<?php
/**
 * Created by PhpStorm.
 * User: mjaenicke
 * Date: 23.01.15
 * Time: 15:15
 */
namespace Morphbreed\LeetSpeakTranslator\Tests;

use Morphbreed\LeetSpeakTranslator\LeetSpeakTranslator;
use PHPUnit_Framework_TestCase;

class LeetSpeakTranslatorTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var LeetSpeakTranslator
     */
    protected $translator;
    protected function setup()
    {
        $this->translator = new LeetSpeakTranslator();
    }


    public function testIfTranslatorReplaceTheLetters()
    {
        $word = 'Reload';
        $level = LeetSpeakTranslator::TRANS_LEVEL_LOW;
        $expectedResult = 'R3l0ad';
        $result = $this->translator->translate($word, $level);

        $this->assertEquals(
            $expectedResult,
            $result,
            'Your word is still normal!'
        );
    }

    public function testIfFirstArgumentIsAString()
    {
        $this->setExpectedException('InvalidArgumentException', 'First argument is not a string');
        $this->translator->translate(1, 1);
    }

    public function testIfFirstArgumentIsAtLeastOneLetter()
    {
        $this->setExpectedException('InvalidArgumentException', 'First Argument has no letters');
        $this->translator->translate('', 4);
    }

    public function testIfSecondtArgumentIsANumber()
    {
        $this->setExpectedException('InvalidArgumentException', 'Second argument is not a number');
        $this->translator->translate('reload', 'lol');
    }

    public function testIfSecondArgumentIsNotHigherThanThree()
    {
        $this->setExpectedException('InvalidArgumentException', 'Second argument is higher than 3');
        $this->translator->translate('reload', 4);
    }
}
