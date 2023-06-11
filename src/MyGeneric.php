<?php

namespace MyHelper;

class MyGeneric
{
    /**
     * Get days of the week
     * @param bool $onlyWorkDays get only work days
     * @return array return days of the week
     */
    public static function getWeekDays(bool $onlyWorkDays = false):array
    {
        $weekDays = [
            'monday' => 'Monday',
            'tuesday' => 'Tuesday',
            'wednesday' => 'Wednesday',
            'thursday' => 'Thursday',
            'friday' => 'Friday',
            'saturday' => 'Saturday',
            'sunday' => 'Sunday',
        ];
        if ($onlyWorkDays) {
            unset($weekDays['saturday']);
            unset($weekDays['sunday']);
        }
        return  $weekDays;
    }

    /**
     * Get days of the week in Khmer
     * @param bool $onlyWorkDays get only work days
     * @return string[] return days of the week in Khmer in form of array
     * ['monday' => 'ច័ន្ទ', 'tuesday' => 'អង្គារ', 'wednesday' => 'ពុធ', 'thursday' => 'ព្រហស្បតិ៍', 'friday' => 'សុក្រ', 'saturday' => 'សៅរ៍', 'sunday' => 'អាទិត្យ']
     */
    public static function getWeekDaysInKh(bool $onlyWorkDays = false):array
    {
        $days = [
            'monday' => 'ច័ន្ទ',
            'tuesday' => 'អង្គារ',
            'wednesday' => 'ពុធ',
            'thursday' => 'ព្រហស្បតិ៍',
            'friday' => 'សុក្រ',
            'saturday' => 'សៅរ៍',
            'sunday' => 'អាទិត្យ',
        ];
        if ($onlyWorkDays) {
            unset($days['saturday']);
            unset($days['sunday']);
        }
        return  $days;
    }

    /**
     * Get months of the year
     * @return array return months of the year
     */
    public static function getMonths():array
    {
        return [
            'january' => 'January',
            'february' => 'February',
            'march' => 'March',
            'april' => 'April',
            'may' => 'May',
            'june' => 'June',
            'july' => 'July',
            'august' => 'August',
            'september' => 'September',
            'october' => 'October',
            'november' => 'November',
            'december' => 'December',
        ];
    }

    /**
     * Get months of the year in Khmer
     * @return array return months of the year in Khmer
     */
    public static function getMonthsInKh():array
    {
        return [
            'january' => 'មករា',
            'february' => 'កុម្ភៈ',
            'march' => 'មីនា',
            'april' => 'មេសា',
            'may' => 'ឧសភា',
            'june' => 'មិថុនា',
            'july' => 'កក្កដា',
            'august' => 'សីហា',
            'september' => 'កញ្ញា',
            'october' => 'តុលា',
            'november' => 'វិច្ឆិកា',
            'december' => 'ធ្នូ',
        ];
    }
}