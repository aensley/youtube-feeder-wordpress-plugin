<?php
class YoutubeFeederTest extends WP_UnitTestCase {
	function testInstantiation() {
		$this->assertInstanceOf('YoutubeFeeder', new YoutubeFeeder);
	}
}
