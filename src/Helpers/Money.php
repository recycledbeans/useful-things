<?php

namespace RecycledBeans\UsefulThings\Helpers;

trait Money
{
    /**
     * Converts float currency amounts to integer for storage and arithmetic.
     * @param float $value
     * @return int
     */
    public function toInteger($value)
    {
        $value = number_format((float)$this->stripInvalidCharacters($value), 2, '.', '');

        return (int)($value * 100);
    }

    /**
     * Converts integer value of currency back to float value in 2 decimal places.
     * @param $value
     * @return string
     */
    public function toFloat($value)
    {
        $value = (int)$value / 100;

        return number_format($value, 2, '.', '');
    }

    /**
     * Strip extra characters from numbers
     * @param $value
     * @return string|string[]|null
     */
    protected function stripInvalidCharacters($value)
    {
        return preg_replace('/[^0-9.-]/', '', $value);
    }

    /**
     * Formats float currency value and returns with currency symbol
     * @param $value
     * @param string $symbol
     * @return string
     */
    public function toMoney($value, $symbol = '$')
    {
        return $symbol . number_format($this->stripInvalidCharacters($value), 2);
    }

    /**
     * Alias method for converting to integer.
     * @param $value
     * @return int
     */
    public function toPennies($value)
    {
        return $this->toInteger($value);
    }

    /**
     * Alias method for converting to float value
     * @param $value
     * @return string
     */
    public function toDollars($value)
    {
        return $this->toFloat($value);
    }

}
