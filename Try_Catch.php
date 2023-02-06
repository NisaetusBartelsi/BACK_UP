<?php

function pembagian($dibagi,$pembagi)
{
    if ($pembagi === 0)
    {
        throw new exception('pembagian tidak boleh 0 \n');
    }
    $hasil = $dibagi/$pembagi;
    return $hasil;
}


try {
$h = pembagian(10, 0);
}catch(Exception $e){
    echo "error pada baris ke ". $e->getLine()."\n";
    echo $e->getMessage();
}finally {
    echo "hasil : $h \n";
}