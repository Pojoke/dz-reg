<?php

$repl = '/\b\w{1,}(?=:)\b/';
$text = "Life is full of choices: some easy, some hard, and some that leave you wondering: 'What if?' Every morning starts with decisions: coffee or tea, walk or drive, work or relax. But it goes deeper: should you follow your heart: chase dreams, or stick to the safe path? And then there's the question of purpose: what truly matters? Family, friends, success? Or something else entirely: perhaps peace of mind, or even adventure? The answers aren't always clear: sometimes you have to pause, reflect, and take it step by step.";

if (preg_match_all($repl, $text, $arr)) {
    print_r($arr);
} else {
    echo "No symbol:";
}
