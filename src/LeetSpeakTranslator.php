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
    protected $search1 = array('E', 'O');
    protected $replace1 = array('3', '0');

    protected $search2 = array('E', 'O', 'L', 'A');
    protected $replace2 = array('3', '0', '7', '4');

    protected $search3 = array('E', 'O', 'L', 'A', 'I', 'R');
    protected $replace3 = array('3', '0', '7', '4' ,'!','2');

    const TRANS_LEVEL_LOW = 1;


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

        if ($level == 1) {
            return str_replace($this->search1, $this->replace1, strtoupper($word));
        } else if ($level == 2) {
            return str_replace($this->search2, $this->replace2, strtoupper($word));
        } else {
            return str_replace($this->search3, $this->replace3, strtoupper($word));
        }
    }
}