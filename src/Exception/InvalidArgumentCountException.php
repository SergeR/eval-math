<?php
/**
 * @author Serge Rodovnichenko <serge@syrnik.com>
 * @copyright Serge Rodovnichenko, 2019
 * @license BSD 2.0
 */

namespace SergeR\Util\EvalMath\Exception;


class InvalidArgumentCountException extends AbstractEvalMathException
{
    protected $message = 'Wrong number of arguments';
}