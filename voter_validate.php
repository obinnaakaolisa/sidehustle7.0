<?php

// declare variable for storing validation messages
$message = [];

// Assign voter information
$voter = [
    'age'=> 25,
    'hasPVC' => true,
    'polling_unit' => '020'
    ];

    // check if voter is greater than 18 years (the eligible voting age)
    if ($voter['age'] < 18)
    {
        $message['error']['age'] = "Voter is too young to vote!";
    }

    // check if voter has been issued a PVC
    if ($voter['hasPVC'] !== true)
    {
        $message['error']['hasPVC'] = "Voter does not have PVC!";
    }

    // check if voter is in the correct polling unit (Polling unit 020)
    if ($voter['polling_unit'] !== '020')
    {
        $message['error']['polling_unit'] = "Voter is in the wrong polling unit!";
    }

    // check if any validation failed and display the errors, if not display success message.
    if(!empty($message['error']))
    {
        echo "<pre>";
        print_r($message);
        echo "</pre>";
    } else
    {
        $message['success'] = "Voter is eligible to vote";
        echo "<pre>";
        print_r($message);
        echo "</pre>";
    }
