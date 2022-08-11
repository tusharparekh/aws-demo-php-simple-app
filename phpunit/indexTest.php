<?php
use PHPUnit\Framework\TestCase;
class indexTest extends TestCase
	{
	public function testSiteIndex()
		{
		ob_start();
		include('www/index.php');
		$output = ob_get_clean();
		ob_end_clean();
		$this->assertContains("Overview of major system components", $output);
		}
	}

?>
