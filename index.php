<?
include 'simple_html_dom.php';
$html = file_get_html('source.html');

// Find all <div> with the id attribute
$meta = $html->find('meta');

foreach ($meta as $element) {
	$element->outertext = '';
	$html->save('result.html');
}

$html->clear(); 
unset($html);
?>