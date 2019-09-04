<?php 
require_once 'helpers.php';

function calculateAge($bday)
{   
    if ($bday == '0000-00-00') {
        return 0;
    }
    else {
        $from = new DateTime($bday);
        $to   = new DateTime('today');
        return $from->diff($to)->y;
    }
   
}

function gender($gender)
{
    return($gender == 1) ? 'Male' : 'Female' ;
}

function civilStatus($civilStatus)
{
    switch ($civilStatus) {
        case 0: return 'Single'; break;
            
        case 1: return 'Married'; break;
            
        case 2: return 'Widow'; break;
            
        case 3: return 'Seperated'; break;
            
        case 4: return 'Anulled'; break;            
    }
}

function bloodType($bloodType)
{
    switch ($bloodType) {
        case 1: return 'O-positive'; break;
            
        case 2: return 'O-negative'; break;
            
        case 3: return 'A-positive'; break;
            
        case 4: return 'A-negative'; break;
            
        case 5: return 'B-positive'; break; 

        case 6: return 'B-negative'; break;

        case 7: return 'AB-positive'; break;   
        
        case 8: return 'AB-negative'; break; 
    }
}

function educLevel($educLevel)
{
    switch ($educLevel) {
        case 1: return 'Elementary'; break;
            
        case 2: return 'Secondary'; break;
            
        case 3: return 'Vocational Trade Course'; break;
            
        case 4: return 'College'; break;
            
        case 5: return 'Graduate Studies'; break;  
    }
}

function schoolType($schoolType)
{
    switch ($schoolType) {
        case 1: return 'Semi Public'; break;
            
        case 2: return 'Public'; break;

        case 3: return 'Semi Private'; break;
            
        case 4: return 'Private'; break;    
    }
}






































































?>