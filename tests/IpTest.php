<?php 
use PHPUnit\Framework\TestCase;

/**
*  Corresponding Class to test Ip class
*
*  For each class in your library, there should be a corresponding Unit-Test for it
*  Unit-Tests should be as much as possible independent from other test going on.
*
*  @author Rajan Kumar
*/
class IpTest extends TestCase
{
	
  /**
  * Just check if the Ip has no syntax error 
  *
  * This is just a simple check to make sure your library has no syntax error. This helps you troubleshoot
  * any typo before you even use this library in a real project.
  *
  */
  public function testIsThereAnySyntaxError()
  {
	$var = new IpLocationFinder\Ip;
	$this->assertTrue(is_object($var));
	unset($var);
  }
  
  /**
  * Just check if the Ip has no syntax error 
  *
  * This is just a simple check to make sure your library has no syntax error. This helps you troubleshoot
  * any typo before you even use this library in a real project.
  *
  */
  public function testMethod1()
  {
	$var = new IpLocationFinder\Ip;
	$this->assertTrue($var->getInfo('192.168.0.157') !== null);
	unset($var);
  } 
}
