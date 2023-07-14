<?php
// try this html listing example for all nodes / includes a few getElementsByTagName options:

$file = $DOCUMENT_ROOT. "test.html";
$doc = new DOMDocument();
$doc->loadHTMLFile($file);

// example 1:
$elements = $doc->getElementsByTagName('*');
// example 2:
$elements = $doc->getElementsByTagName('html');
// example 3:
//$elements = $doc->getElementsByTagName('body');
// example 4:
//$elements = $doc->getElementsByTagName('table');
// example 5:
//$elements = $doc->getElementsByTagName('div');

if (!is_null($elements)) {
  foreach ($elements as $element) {
    echo "<br/>". $element->nodeName. ": ";

    $nodes = $element->childNodes;
    foreach ($nodes as $node) {
      echo $node->nodeValue. "\n";
    }
  }
}
?>
