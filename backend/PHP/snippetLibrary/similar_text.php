<?php
//Shows how to use the similar_text() function to compare similar words.
//It returns how similar the words are.

$word2compare = "stupid";
 
$words = array(
    'stupid',
    'stu and pid',
    'hello',
    'foobar',
    'stpid',
    'upid',
    'stuuupid',
    'sstuuupiiid',
);
 
while(list($id, $str) = each($words)){
    similar_text($str, $word2compare, $percent);
    print "Comparing '$word2compare' with '$str': ";
    print round($percent) . "%\n";
}
 
/*
Results:
 
Comparing 'stupid' with 'stupid': 100%
Comparing 'stupid' with 'stu and pid': 71%
Comparing 'stupid' with 'hello': 0%
Comparing 'stupid' with 'foobar': 0%
Comparing 'stupid' with 'stpid': 91%
Comparing 'stupid' with 'upid': 80%
Comparing 'stupid' with 'stuuupid': 86%
Comparing 'stupid' with 'sstuuupiiid': 71%
*/
