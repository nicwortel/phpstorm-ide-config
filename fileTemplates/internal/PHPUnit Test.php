<?php
#parse("PHP File Header.php")

#if (${NAMESPACE})
namespace ${NAMESPACE};
#end

#if(${NAMESPACE})use PHPUnit_Framework_TestCase;
#end

class ${NAME} extends PHPUnit_Framework_TestCase
{
    protected function setUp()
    {

    }
}
