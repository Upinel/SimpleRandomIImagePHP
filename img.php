<?php
// Array of image filenames
$images = [
    'pic1.jpg',
    'pic2.jpg',
    'pic3.jpg',
    'pic4.jpg',
];

// Select a random image
$randomImage = $images[array_rand($images)];

// Set the content type header to the type of the image
header('Content-Type: image/jpeg');

// Output the image file
readfile($randomImage);
?>
