<?php

namespace App\Helpers;

class CommonHelper
{
    /**
     * @param $search
     * @param $replace
     * @param $subject
     * @return mixed
     */
    public static function lreplace($search, $replace, $subject)
    {

        $pos = strrpos($subject, $search);
        if ($pos !== false) {
            $subject = substr_replace($subject, $replace, $pos, strlen($search));
        }
        return $subject;
    }
}