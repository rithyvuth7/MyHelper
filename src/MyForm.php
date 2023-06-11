<?php

namespace MyHelper;

class MyForm
{
    /**
     * Check if this select option is selected
     * @param string $optValue the value of the option
     * @param string $selectedValue the value of the selected option
     * @return string return 'selected' if the option value is equal to the selected value
     */
    public static function getSelected(string $optValue, string $selectedValue):string
    {
        if ($optValue == $selectedValue) {
            return 'selected';
        }
        return '';
    }
    /**
     * Check if this select option is selected in multiple select
     * @param string $optValue the value of the option
     * @param array $multiSelectedValues the values of the selected options
     * @return string return 'selected' if the option value is equal to one of the selected values
     */
    public static function getMultiSelected(string $optValue, array $multiSelectedValues):string
    {
        if (in_array($optValue, $multiSelectedValues)) {
            return 'selected';
        }
        return '';
    }

}