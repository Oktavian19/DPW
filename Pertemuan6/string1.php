<?php

$loremipsum = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum sequi enim unde tempora laudantium, voluptas reiciendis perspiciatis perferendis repudiandae dignissimos, aliquam explicabo animi aspernatur ex alias repellendus, tempore eveniet. Deserunt!";

echo "<p>{$loremipsum}</p>";
echo "Panjang karakter: ". strlen($loremipsum) . "<br>";
echo "Panjang Kata: ". str_word_count($loremipsum) . "<br>";
echo "<p>" . strtoupper($loremipsum);
echo "<p>" . strtolower($loremipsum);
?>