<?php
$employee = [
    'name' => 'Tasya',
    'address' => 'Tulungagung',
    'phone' => '082339543169',
    'hobbies' => ['Tennis', 'Football'],
    'profiles' => ['facebook' => 'Tasyasya', 'twitter' => 'Football'],
];

echo $employee['name']."<br>";
echo $employee['address']."<br>";
echo $employee['phone']."<br>";
echo $employee['hobbies'][0]."<br>";
echo $employee['profiles']['twitter'];
?>