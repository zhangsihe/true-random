<?php

namespace sihe\trueRandom;

class TrueRandom
{
    public function integerGenerator($num,$min,$max,$col,$base,$format = 'plain',$rnd = 'new')
    {
        return file_get_contents("https://www.random.org/integers/?num=$num&min=$min&max=$max&col=$col&base=$base&format=$format&rnd=$rnd");
    }
}