<?php
namespace vovanches;
class Log extends \core\LogAbstract implements \core\LogInterface
{
	public static function log($str) 
	{
		self::Instance()->log[] = $str;
	}
	public function _write() 
	{
		$d = new \DateTime();
		$fileName = $d->format("d.m.Y\_H.i.s.u") . ".log";
		$file = fopen("log/$fileName", "w+");
	
		foreach($this->log as $val) 
		{
			echo $val . "\n";
			fwrite($file, $val . "\n");
		}
	}
	public static function write() 
	{
		static::Instance()->_write();
	}
}
?>
