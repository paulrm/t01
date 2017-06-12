<?php
echo "cwd=" . getcwd() . "\n";
include_once 'src/init.php';

#use PHPUnit\Framework\TestCase;
#require_once ('PHPUnit/Framework/TestCase.php');
#require_once 'PHPUnit/Autoload.php';
class initTest extends PHPUnit_Framework_TestCase {
		
private $example_instance = null;
	public function __construct(){
		$this->example_instance = new init;
	}
		
	public function testVerifica_array(){
		$this->assertTrue($this->example_instance->verifica_array());
	}
			
}
?>
