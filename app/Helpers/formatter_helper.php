<?php
if (!function_exists('phone')) {

    /**
     * phone formatter
     *
     * @param string $phone
     * @return string
     */
    function phone($phone)
    {
        //do we have an extension?

        //strip out non-numerics
        $phone = preg_replace("/[^0-9]/", "", $phone);

        //area code
        if (strlen($phone) == 10) {
            $phone = '(' . substr($phone, 0, 3) . ') ' . substr($phone, 3, 3) . '-' . substr($phone, 6, 4);
        } //no area code
        else if (strlen($phone) == 7) {
            $phone = substr($phone, 0, 3) . '-' . substr($phone, 3, 4);
        }

        //return
        return $phone;
    }
}
