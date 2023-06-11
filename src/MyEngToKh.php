<?php

namespace MyHelper;

class MyEngToKh
{
    /**
     * Convert the number to Khmer number
     * @param int $engNumber the number
     * @return string return the number in Khmer
     */
    public static function numToKhNum(int $engNumber):string
    {
        $array = [
            '0' => '០',
            '1' => '១',
            '2' => '២',
            '3' => '៣',
            '4' => '៤',
            '5' => '៥',
            '6' => '៦',
            '7' => '៧',
            '8' => '៨',
            '9' => '៩',
        ];
        $khNumber = '';
        $engNumber = strval($engNumber);
        $engNumber = str_split($engNumber);
        foreach ($engNumber as $num) {
            $khNumber .= $array[$num];
        }
        return $khNumber;
    }

    /**
     * Convert month to Khmer month
     * @param string $month the month in full word or only 3 first letter (Example: January, Jan, january or jan)
     * @return string return the month in Khmer word
     */
    public static function monthToKh(string $month):string
    {
        $month = substr(ucfirst($month), 0, 3);

        $arr = [
            'Jan' => 'មករា',
            'Feb' => 'កុម្ភៈ',
            'Mar' => 'មីនា',
            'Apr' => 'មេសា',
            'May' => 'ឧសភា',
            'Jun' => 'មិថុនា',
            'Jul' => 'កក្កដា',
            'Aug' => 'សីហា',
            'Sep' => 'កញ្ញា',
            'Oct' => 'តុលា',
            'Nov' => 'វិច្ឆិកា',
            'Dec' => 'ធ្នូ',
        ];
        return $arr[$month] ?? '';
    }

    /**
     * Convert day to Khmer day
     * @param string $day the day in full word or only 3 first letter (Example: Monday, Mon, monday or mon)
     * @return string return the day in Khmer word
     */
    public static function dayToKh(string $day):string
    {
        $day = substr(ucfirst($day), 0, 3);
        $arr = [
            'Mon' => 'ច័ន្ទ',
            'Tue' => 'អង្គារ',
            'Wed' => 'ពុធ',
            'Thur' => 'ព្រហស្បតិ៍',
            'Fri' => 'សុក្រ',
            'Sat' => 'សៅរ៍',
            'Sun' => 'អាទិត្យ',
        ];
        return $arr[$day] ?? '';
    }


}