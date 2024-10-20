<?php
$text="You... really didn’t know?! How come? Everyone absolutely everyone! told you about this... Or am I confusing something? No, that's impossible! Listen, maybe you just... didn’t get it? Although, how could you not understand that?.. Anyway, I'm surprised: after all, everything seemed so obvious! Oh, how strange... Well, let's try to figure it out: what exactly did you miss, and... why?";
$preg_reg=preg_split("/[\s,;?.!]+/", $text);
$uniq=array_unique($preg_reg);
print_r($preg_reg) ;