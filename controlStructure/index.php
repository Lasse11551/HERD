<?php

// Control Structures (if / else / elseif / else if)
// Control structure gør det muligt at gruppere flere statements, og styre flowet af code executionen


$score = 95;
if($score > 90) { //Udføres kun hvis $condition er true
    echo 'A';
} elseif($score > 80) {
    echo 'B';
} elseif($score > 70) {
    echo 'C';
}  elseif($score < 60) {
    echo 'D';
} else { //Default code som køres hvis intet andet er true
    echo 'F';
}

//elseif kan bruges direkte i html