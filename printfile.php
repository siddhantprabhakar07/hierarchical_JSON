<?php 
$JSON = '[
             {
              "id": 8,
              "parent": 4,
              "name": "Food & Lifestyle"
            },
            {
              "id": 2,
              "parent": 1,
              "name": "Mobile Phones"
            },
            {
              "id": 1,
              "parent": 0,
              "name": "Electronics"
            },
            {
              "id": 3,
              "parent": 1,
              "name": "Laptops"
            },
            {
              "id": 5,
              "parent": 4,
              "name": "Fiction"
            },
            {
              "id": 4,
              "parent": 0,
              "name": "Books"
            },
            {
              "id": 6,
              "parent": 4,
              "name": "Non-fiction"
            },
            {
              "id": 7,
              "parent": 1,
              "name": "Storage"
            }
        ]';
        
//print json as PHP $variable
$someArray = json_decode($JSON, true);
print_r($someArray);
echo '<br>';

$newArray =  [];
foreach ($someArray as $array) {
    
    $array['children'] = '[{
    "id": '.$array["id"].',
    "parent": '.$array["parent"].',
    "name": '.$array["name"].'
    }]';
    
    array_push($newArray, $array);
    
}

//Encode into JSON code
echo '<h2>hierarchical JSON code </h2>';
$newJSON = json_encode($newArray);
echo $newJSON;
?>