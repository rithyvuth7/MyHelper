<?php

namespace MyHelper;

class MyDateAndTime
{
    /**
     * Convert the date to date in khmer
     * @param string $date the date in format Y-m-d (Example: 2023-01-31)
     * @param bool $convertYear convert the year to Khmer number
     * @param bool $convertDayDate convert the day to Khmer number
     * @param bool $convertMonth convert the month to Khmer word
     * @return string return the date in Khmer (Example: ៣១ មករា ២០២៣ or 31 មករា 2023)
     */
    public static function toDateInKh(string $date, bool $convertYear = false, bool $convertDayDate = false, bool $convertMonth = true):string
    {
        $date = explode('-', $date);
        if ($convertYear) {
            $date[0] = MyEngToKh::numToKhNum($date[0]);
        }
        if ($convertMonth) {
            $date[1] = MyEngToKh::monthToKh(date('F', strtotime($date[1])));
        }
        if ($convertDayDate) {
            $date[2] = MyEngToKh::numToKhNum($date[2]);
        }

        return $date[2] . ' ' . $date[1] . ' ' . $date[0];
    }

    /**
     * Convert the date to date in khmer full form (Example: ថ្ងៃសុក្រ ទី៣១ ខែមករា ឆ្នាំ២០២៣)
     * @param string $date the date in format Y-m-d (Example: 2023-01-31)
     * @param bool $day convert the day to Khmer word
     * @param bool $convertYear convert the year to Khmer number
     * @param bool $convertDayDate convert the day(date) to Khmer number
     * @param bool $convertMonth convert the month to Khmer word
     * @return string return the date in Khmer (Example: ថ្ងៃសុក្រ ទី៣១ ខែមករា ឆ្នាំ២០២៣ or ថ្ងៃទី៣១ ខែមករា ឆ្នាំ២០២៣)
     */
    public static function toDateInKhFullForm(string $date, bool $day = true,  bool $convertYear = false, bool $convertDayDate = false, bool $convertMonth = true):string
    {
        $tmp = $date;
        $date = explode('-', $date);
        $date[3] = '';
        $result ='ថ្ងៃ';
        if ($convertYear) {
            $date[0] = MyEngToKh::numToKhNum($date[0]);
        }
        if ($convertMonth) {
            $date[1] = MyEngToKh::monthToKh(date('F', strtotime($date[1])));
        }
        if ($convertDayDate) {
            $date[2] = MyEngToKh::numToKhNum($date[2]);
        }
        if ($day) {
            $date[3] = MyEngToKh::dayToKh(date('D', strtotime($tmp)));
            $result .= ' ' . $date[3] . ' ';
        }
        $result .= 'ទី ' . $date[2] . ' ខែ ' . $date[1] . ' ឆ្នាំ ' . $date[0];
        return $result;
    }

    /**
     * Conut the date between two dates (Example: 2021-01-01 to 2021-01-04  // 4 days)
     * @param string $start_date the start date in format Y-m-d (Example: 2021-01-01)
     * @param string $end_date the end date in format Y-m-d (Example: 2021-01-04)
     * @return int return the number of days between two dates (Example: 4)
     */

    public static function countDate(string $start_date, string $end_date):int
    {
        $start_date = strtotime($start_date);
        $end_date = strtotime($end_date);
        $diff = $end_date - $start_date;
        return ($diff / (60 * 60 * 24)) + 1;
    }
    

}