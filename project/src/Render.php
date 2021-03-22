<?php

namespace KCS;

class Render
{
    public function render($duom): void
    {
         $str = '';
        if (is_array($duom)) {
            foreach ($duom as $item) {
                $str .= "\n" . implode(',', $item);
            }
            echo $str ?: 'Missing data.';
        } else {
            echo $duom;
        }
    }
}
