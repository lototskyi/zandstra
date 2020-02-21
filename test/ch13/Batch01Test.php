<?php
declare(strict_types=1);

namespace popp\ch13\batch01;

set_include_path(get_include_path () . ':/application');

//echo get_include_path () . PHP_EOL; exit;

require_once("vendor/autoload.php");

use popp\test\BaseUnit;

class Batch01Test extends BaseUnit 
{

    public function testRunner()
    {
        $val = $this->capture(function() { Runner::run(); });
        //print $val;
        
        $val = $this->capture(function() { Runner::run2(); });
        //print $val;
        
        $val = $this->capture(function() { Runner::run3(); });
        //print $val;

        $val = $this->capture(function() { Runner::run4(); });
        //print $val;

        $val = $this->capture(function() { Runner::run5(); });
        print $val;
    }
}
