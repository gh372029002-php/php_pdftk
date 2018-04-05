<?php
require(dirname(__FILE__).'/mikehaertl/php-shellcommand/src/Command.php');
require(dirname(__FILE__).'/mikehaertl/php-tmpfile/src/File.php');
require(dirname(__FILE__).'/mikehaertl/php-pdftk/src/Pdf.php');
require(dirname(__FILE__).'/mikehaertl/php-pdftk/src/Command.php');
require(dirname(__FILE__).'/mikehaertl/php-pdftk/src/FdfFile.php');
require(dirname(__FILE__).'/mikehaertl/php-pdftk/src/XfdfFile.php');
require(dirname(__FILE__).'/mikehaertl/php-pdftk/src/DataFields.php');
require_once dirname(__FILE__).'/mikehaertl/php-pdftk/tests/vendor/autoload.php';

use mikehaertl\pdftk\Pdf;

// Fill form with data array
$dir = dirname(__FILE__).'/mikehaertl/php-pdftk/tests/files';
$file = $dir.'/form.pdf';
$pdf = new Pdf($file);

$pdf->fillForm([
	'name'=>'ÄÜÖ äüö мирано čárka',
	'nested.name' => 'valX',
])
	->needAppearances()
	->saveAs(time().'.pdf');
