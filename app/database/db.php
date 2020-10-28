<?php 

require('connect.php');



function dd($value){ //for testing will delete
    echo "<pre>", print_r($value, true), "</pre>";
    die();
}

function executeQuery($sql, $data){

    global $conn;
    $stmt = $conn->prepare($sql);
    $values = array_values($data);
    $types = str_repeat('s', count($values));
    $stmt->bind_param($types, ...$values);
    $stmt->execute();
    return $stmt;
}

function selectAll($table, $conditions = []){
    global $conn;
    $sql = "SELECT * FROM $table";
    if(empty($conditions)){
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
        return $records;
    } else {
        
        $i = 0;
        foreach ($conditions as $key => $value){
            if($i === 0){
                $sql = $sql . " WHERE $key=?";
            } else{
                $sql = $sql . " AND $key=?";
            }
            $i++;
        }
        
        $stmt = executeQuery($sql, $conditions);
        $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
        return $records;
    }

}


function selectOne($table, $conditions){
    global $conn;
    $sql = "SELECT * FROM $table";
        
    $i = 0;
    foreach ($conditions as $key => $value){
        if($i === 0){
            $sql = $sql . " WHERE $key=?";
        } else{
            $sql = $sql . " AND $key=?";
        }
         $i++;
    }
        
    $stmt = $conn->prepare($sql);
    $values = array_values($conditions);
    $types = str_repeat('s', count($values));
    $stmt->bind_param($types, ...$values);
    $stmt->execute();
    $records = $stmt->get_result()->fetch_assoc();
    return $records;

}

function create($table, $data){

    global $conn;
    $sql ="INSERT INTO users SET ";

    $i = 0;
    foreach ($data as $key => $value){
        if($i === 0){
            $sql = $sql . "  $key=?";
        } else{
            $sql = $sql . ",  $key=?";
        }
         $i++;
    }
    
    $stmt = executeQuery($sql, $data);
    $id = $stmt->insert_id;
    return $id;

}

$conditions = [
    'admin' => 1,
    'username' => 'asad'
];

// $data = [
//     'username' => 'asad',
//     'admin' => 1,
//     'email' => 'asad@hotmail.com',
//     'password' => '123'

// ];


//$users = selectOne('users', $conditions);
$users = selectOne('users', $conditions);
dd($users);