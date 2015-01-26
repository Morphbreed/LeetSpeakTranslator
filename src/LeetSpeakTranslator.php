<?php
/**
 * Created by PhpStorm.
 * User: mjaenicke
 * Date: 23.01.15
 * Time: 15:04
 */

namespace Morphbreed\LeetSpeakTranslator;

use Doctrine\Instantiator\Exception\InvalidArgumentException;

class LeetSpeakTranslator
{

    protected $replacements = [
        1 => [
            'E'=>'3',
            'O'=>'0'
        ],
        2 => [
            'L'=>'7',
            'A'=>'4'
        ],
        3 => [
            'I'=>'!',
            'R'=>'2',
            'S'=>'5',
            'T'=>'1',
            'G'=>'6'
        ]
    ];

    public function translate($word, $level)
    {
        if (!is_string($word)) {
            throw new InvalidArgumentException('First argument is not a string');
        } else if (strlen($word) < 1) {
            throw new InvalidArgumentException('First Argument has no letters');
        } else if (!is_numeric($level)) {
            throw new InvalidArgumentException('Second argument is not a number');
        } else if ($level > 3) {
            throw new InvalidArgumentException('Second argument is higher than 3');
        }

        $word = strtoupper($word);
        foreach ($this->replacements as $min_level => $replacement) {
            if ($level >= $min_level) {
                $word = str_replace(array_keys($replacement), array_values($replacement), $word);
            }
        }
        return $word;
    }
}