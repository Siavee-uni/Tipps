//Replace simplexml_load_string

$replace = array("  "," ","_",".");
$vCardUrl = $_SERVER['HTTP_ORIGIN'] . '/signatur/v-cards/' . str_replace($replace,"-",strtolower($pFirstName)) . '-' . strtolower($pName) .'.vcf';

//Echo in php ohne Laravel:

echo '<pre>' . print_r(str_replace($replace,"-",strtolower($pFirstName)), true) . '</pre>';
