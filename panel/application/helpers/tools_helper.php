<?php
/**
 * User: Mustafa Emre Ilhan
 * Job: Junior Software Developer
 */

function convertToSeo($text)
{
    $turkce = array("ç","Ç","ğ","Ğ","ü","Ü","ö","Ö","ı","İ","ş","Ş",".",",","!","\""," ","?","*","_","|","=","(",")","[","]","{","}");
    $convert = array("c","c","g","g","u","u","o","o","i","i","s","s","-","-","-","-","-","-","-","-","-","-","-","-","-","-","-","-");

    //$seo1 = str_replace($turkce,$convert,$title);
    return  strtolower(str_replace($turkce,$convert,$text));
}
