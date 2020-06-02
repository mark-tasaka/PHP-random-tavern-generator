<?php


function getRandomSex1()
{
    $sex = "";

    $sexIdentity = rand (0, 9);

    if($sexIdentity <= 3)
    {
        $sex = 'Female';
    }
    else
    {
        $sex = 'Male';
    }

    return $sex;

}


function getRandomSex2()
{
    $sex = "";

    $sexIdentity = rand (0, 9);

    if($sexIdentity <= 3)
    {
        $sex = 'Male';
    }
    else
    {
        $sex = 'Female';
    }

    return $sex;

}


function getGenderPronoun($sex)
{
    if($sex == 'Male')
    {
        $genderProun = array('male', 'he', 'him', 'his');
        return $genderProun;
    }
    else
    {
        $genderProun = array('female', 'she', 'her', 'hers');
        return $genderProun;
    }

}

?>