<?php

namespace src\Buvettes;

class BuvFonctions {

    private $date_naissance;

    public function CheckAge($date_naissance)
    {
        $age=0;
        $age = date('Y') - $date_naissance;
        if (date('md') < date('md', strtotime($date_naissance)))
        {
            return $age - 1;
        }
        return $age;
    }
}

?>