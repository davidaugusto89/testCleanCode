<?php

class Action
{
    public function doSomething(
        $param1,
        $param2,
        $param3,
        $param4,
        $param5,
        $param6
    ) {
        $return = [
            'calc_factor' => ($param1 + $param3 + $param4 + $param5) * $param6,
            'vlr_type' => '',
        ];

        foreach ($param2 as $key => $value) {
            $return['vlr_type'] = $this->tipoValor($value['vlr']);
        }

        return $return;
    }

    public function tipoValor($vlr)
    {
        if ($vlr === 0) {
            return "FREE";
        }

        if ($vlr <= 10) {
            return "CHEAP";
        }

        if ($vlr <= 20) {
            return "GOOD_VALUE";
        }

        return "EXPENSIVE";
    }
}
