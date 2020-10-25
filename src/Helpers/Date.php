<?php

namespace RecycledBeans\UsefulThings\Helpers;

class Date
{
    /**
     * Returns list of years in the future.
     *
     * @param int  $number
     * @param bool $include_today
     *
     * @return array
     */
    public static function futureYears($number = 5, $include_today = true)
    {
        $years = [];

        for ($i = $include_today ? 0 : 1; $i <= $number; ++$i) {
            $years[date('Y', strtotime("+ $i years"))] = date('Y', strtotime("+ $i years"));
        }

        return $years;
    }

    /**
     * Returns months of the year.
     *
     * @return array
     */
    public static function months()
    {
        $months = [];

        for ($i = 0; $i < 12; ++$i) {
            $months[date('m', strtotime("+ $i months"))] = date('F', strtotime("+ $i months"));
        }

        return $months;
    }
}
