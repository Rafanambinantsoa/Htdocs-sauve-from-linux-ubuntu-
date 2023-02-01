<?php
class Text
{

    public static function withzero($name)
    {
        if ($name < 10) {
            return $name = "0" . $name;
        } else {
            return $name;
        }
    }
}
