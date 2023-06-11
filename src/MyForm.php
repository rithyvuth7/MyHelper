<?php

namespace MyHelper;

class MyForm
{
    /**
     * @param string $optValue
     * @param string $selectedValue
     * @return string
     */
    public static function getSelected(string $optValue, string $selectedValue):string
    {
        if ($optValue == $selectedValue) {
            return 'selected';
        }
        return '';
    }
    /**
     * @param string $optValue
     * @param array $multiSelectedValues
     * @return string
     */
    public static function getMultiSelected(string $optValue, array $multiSelectedValues):string
    {
        if (in_array($optValue, $multiSelectedValues)) {
            return 'selected';
        }
        return '';
    }

}