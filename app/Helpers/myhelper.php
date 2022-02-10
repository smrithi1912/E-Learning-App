<?php

function getMyText()
{
    return "Welcome to E-Learning App";
}

function makeArray($val)
{
    $myarr = explode(" ",$val);     //split the sentence in to words using space
    return $myarr;
}