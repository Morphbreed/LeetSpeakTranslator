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
        $errors = [];
        if (!is_string($word)) {
            $errors[] = 'First argument is not a string';
        }
        if (strlen($word) < 1) {
            $errors[] = 'First Argument has no letters';
        }
        if (!is_numeric($level)) {
            $errors[] = 'Second argument is not a number';
        }
        if ($level > 3) {
            $errors[] = 'Second argument is higher than 3';
        }

        if (!empty($errors)) {
            throw new InvalidArgumentException(implode(', ', $errors));
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