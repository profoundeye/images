<?php
/**
 * EvaCloudImage
 * light-weight url based image transformation php library
 *
 * @link      https://github.com/AlloVince/EvaCloudImage
 * @copyright Copyright (c) 2012 AlloVince (http://avnpc.com/)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 * @author    AlloVince
 */
$url = $_SERVER['HTTP_REFERER'];
$file = pathinfo($url);
$pregs = array("/w_630$/");
$pass = 0;
foreach ($pregs as $preg) {
	print_r(preg_match($preg, $file['filename']));
	if(preg_match($preg, $file['filename'])){$pass=1; }
}

if($pass==0){
	echo "no images";
	exit;}


require_once 'EvaCloudImage.php';
error_reporting(E_ALL);

// Check php version
if( version_compare(phpversion(), '5.3.0', '<') ) {
    printf('PHP 5.3.0 is required, you have %s', phpversion());
    exit(1);
}

$cloudImage = new EvaCloudImage(null, include 'config.inc.php');
$cloudImage->show();
