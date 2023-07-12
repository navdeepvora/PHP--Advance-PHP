What Is T_PAAMAYIM_NEKUDOTAYIM (Scope Resolution Operator (::) with Example
=> The Scope Resolution Operator (also called Paamayim Nekudotayim) or in simpler terms, the double colon, is a token that allows access to static, constant, and overridden properties or methods of a class.The Scope Resolution Operator (also called Paamayim Nekudotayim) or in simpler terms, the double colon, is a token that allows access to static, constant, and overridden properties or methods of a class.

<br><br>
EX. <br>
<?php

class myclass{
    const CONST_VALUE ='A constant value';
}

$classname='myclass';

echo $classname::CONST_VALUE;

echo Myclass::CONST_VALUE;
?>