<?php
use mikehaertl\wkhtmlto\Pdf;

$pdf = new Pdf;

// Add a HTML file, a HTML string or a page from a URL
$pdf->addPage('/home/joe/page.html');
$pdf->addPage('<html>....</html>');
$pdf->addPage('http://google.com');

// Add a cover (same sources as above are possible)
$pdf->addCover('mycover.html');

// Add a Table of contents
$pdf->addToc();

// Save the PDF
$pdf->saveAs('/tmp/new.pdf');

// ... or send to client for inline display
$pdf->send();