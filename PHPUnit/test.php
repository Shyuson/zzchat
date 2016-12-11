<!*************************************/
/*            test.php                */
/**************************************/
/* In this file, we tried to test our */
/* functions, but we didn't succeeded */
/**************************************/>

<?php
use PHPUnit\FrameWork\TestCase;

class functionTest extends TestCase{

	public function setUp(){
		//require_once 'function.php';
		//session_start ();
		//$_SESSION['langue'] = "fr";
	}

	public function testFailure2(){
        	$this->assertEquals("Location", "Location");
    	}
}?>
