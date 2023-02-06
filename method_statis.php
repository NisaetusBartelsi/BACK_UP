<?php

use santri as GlobalSantri;

class buah {
    static function sirsat ()
    {
        echo "ini adalah buah sirsat \n";
    }
}
class santri {
    static function pengen_buah ()
    {
        buah::sirsat();
    }
}

santri::pengen_buah();