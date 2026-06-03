<?php
$age = 25;
$is_member = true;
$is_student = false;

if ($age >= 18 && $is_member) {
    echo "割引が適用されます<br>";
}else{
    echo "割引は適用されません";
}

if ($age >= 65 || $is_student) {
    echo "シニア・学生割引が適用されます<br>";
}else{
    echo "シニア・学生割引は適用されません";
}
