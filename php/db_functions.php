<?php


//header('Content-Type:text/plain; charset=UTF-8');
include 'connection.php';
function select($our_query) {
    include 'connection.php';
	try {
	  //  global $conn;
//If the exception is thrown, this text will not be shown
//	include 'connection.php';
	$res = $conn->query($our_query);
	return $res->fetchAll(PDO::FETCH_ASSOC);//returns array
}
//catch exception
	catch(Exception $e) {
  echo 'Message: ' .$e->getMessage();
}
}

function update($our_query) {
    include 'connection.php';
    try {
		
 //If the exception is thrown, this text will not be shown

//	include 'connection.php';
	$res = $conn->exec($our_query);
	if ($res){
		return true;
	}
	else {
		return false;
	}
}
//catch exception
catch(Exception $e) {
  echo 'Message: ' .$e->getMessage();
}
}

function insert($our_query) {
    include 'connection.php';

    try {
		
 //If the exception is thrown, this text will not be shown

//	include 'connection.php';
	$res = $conn->exec($our_query);
	if ($res){
		return true;
	}
	else {
		return false;
	}
}
//catch exception
catch(Exception $e) {
  echo 'Message: ' .$e->getMessage();
}

}
function delete($our_query) {
    include 'connection.php';

    try {

        $res = $conn->exec($our_query);
        if ($res){
            return true;
        }
        else {
            return false;
        }
    }

    catch(Exception $e) {
        echo 'Message: ' .$e->getMessage();
    }

}
