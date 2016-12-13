<!*************************************/
/*            test.php                */
/**************************************/
/* In this file, we tried to test our */
/* functions, but we didn't succeeded */
/**************************************/>

<?php


session_start ();
$_SESSION['langue'] = "eng";

class FunctionTest extends PHPUnit_Framework_TestCase {

	public function setUp(){
		require_once '../function/function.php';
		
	}

	public function testLangue(){
			$variable=changeFRinscript();
			$langue=$_SESSION['langue'];
        	$this->assertEquals("Location: ../inscription.php", $variable);
        	$this->assertEquals("fr", $langue);

			$variable1=changeENGinscript();
			$langue1=$_SESSION['langue'];
        	$this->assertEquals("Location: ../inscriptionENG.php", $variable1);
        	$this->assertEquals("eng", $langue1);

        	$variable2=changeFR();
			$langue2=$_SESSION['langue'];
        	$this->assertEquals("Location: ../pagechat.php", $variable2);
        	$this->assertEquals("fr", $langue2);

        	$variable3=changeENG();
			$langue3=$_SESSION['langue'];
        	$this->assertEquals("Location: ../pagechatENG.php", $variable3);
        	$this->assertEquals("eng", $langue3);

        	$variable4=changeFRindex();
			$langue4=$_SESSION['langue'];
        	$this->assertEquals("Location: ../index.php", $variable4);
        	$this->assertEquals("fr", $langue);

        	$variable5=changeENGindex();
			$langue5=$_SESSION['langue'];
        	$this->assertEquals("Location: ../indexENG.php", $variable5);
        	$this->assertEquals("eng", $langue5);
      	

    }

    public function testDirection(){
    	$permision=false;
    	$_SESSION['langue'] = "eng";
    	$variable=direction($permision);
    	$this->assertEquals("Location: ../error.html", $variable);

    	$permision=true;
    	$variable1=direction($permision);
    	$this->assertEquals("Location: ../pagechatENG.php", $variable1);

    	$_SESSION['langue'] = "fr";
    	$variable2=direction($permision);
    	$this->assertEquals("Location: ../pagechat.php", $variable2);


    	$exist=true;
    	$control=true;
    	$variable3=direction2($exist, $control);
    	$this->assertEquals("Location: ../error.html", $variable3);

    	$exist=false;
    	$control=true;
    	$variable3=direction2($exist, $control);
    	$this->assertEquals("Location: ../error.html", $variable3);

    	$exist=true;
    	$control=false;
    	$variable3=direction2($exist, $control);
    	$this->assertEquals("Location: ../error.html", $variable3);

    	$exist=false;
    	$control=false;
    	$_SESSION['langue'] = "eng";
    	$variable4=direction2($exist, $control);
    	$this->assertEquals("Location: ../indexENG.php", $variable4);

    	$_SESSION['langue'] = "fr";
    	$variable5=direction2($exist, $control);
    	$this->assertEquals("Location: ../index.php", $variable5);
    }

    public function testRecup(){
    	$data=fopen("fichierPourTest.txt","r");
    	$message=recupID($data);
    	$this->assertEquals("salut", $message);
    }

    public function testCorrectPass(){
    	$mdp=crypt("bonjour","abcd");
    	$pass="bonjour";
    	$pseudo="moi";
    	$login="moi";
    	$resultat=CorrectPass($mdp, $pass, $pseudo, $login);
    	$this->assertTrue($resultat);

    	$pass="bonjous";
    	$resultat=CorrectPass($mdp, $pass, $pseudo, $login);
    	$this->assertNotTrue($resultat);

    	$pseudo="moiu";
    	$pass="bonjour";
    	$resultat=CorrectPass($mdp, $pass, $pseudo, $login);
    	$this->assertNotTrue($resultat);
    }

    public function testWrite(){
    	$resultat="PHPunit>MessageTest<br>\n";
    	$nom="PHPunit";
    	$message="MessageTest";
    	writeMessage($nom,$message);
    	$tab=file(__DIR__.'/../data/ac.txt');
    	$message1=$tab[count($tab)-1];
    	$this->assertEquals($resultat, $message1);


    }
}

?>
