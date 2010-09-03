<?php
class ShowtimesControllerTest extends PHPUnit_Framework_TestCase
{
	public function setUp() {
		// $root = realpath($_SERVER["DOCUMENT_ROOT"]);
		// 	set_include_path("$root/adapters/:$root/helpers/:$root/cinemas/");
	}
    public function testShowtimes(){
		$controller = new ShowtimesController('br','porto-alegre');
		$showtimes = $controller->getShowtimes();

    }
}

function __autoload($class_name) {
	$folder = classFolder($class_name);

	if($folder)
		require_once($folder.$class_name.".php");
}

function classFolder($className, $sub = "/") {
	$class_dir = getcwd();

	$dir = dir($class_dir.$sub);

	if(file_exists($class_dir.$sub.$className.".php"))
		return $class_dir.$sub;

	while(false !== ($folder = $dir->read())) {
		if($folder != "." && $folder != "..") {
			if(is_dir($class_dir.$sub.$folder)) {
				$subFolder = classFolder($className, $sub.$folder."/");

				if($subFolder)
					return $subFolder;
			}
		}
	}
	$dir->close();
	return false;
}

?>