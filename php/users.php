<?php

switch ($_POST['choice']) {
    case 1:
        get_users();
        break;
    case 2:
        delete_user();
        break;
    case 3:
        add_user();
        break;
    case 4:
        edit_subject();
        break;
}

function get_users()
{

    include 'db_functions.php';

    $privilage = $_POST['get_option'];
    $my_q = "SELECT * FROM users WHERE privilage='$privilage'";
    $res = select($my_q);
    echo json_encode($res);
}

function delete_user()
{

    include 'db_functions.php';

  /*  $subject_id = $_POST['subject_id'];
    $my_q = "UPDATE agenda SET pending='YES' WHERE subject_id='$subject_id' AND Type <> 'STANDARD'";
    $res = select($my_q);
    echo json_encode($res);*/
  $id=$conn->quote($_POST['get_id']);
    $my_q = "delete FROM users WHERE id=$id";
    $res = delete($my_q);
    echo $res;
}

function edit_subject()
{
    include 'db_functions.php';

    $title = $conn->quote($_POST['title']);
    $description = $conn->quote($_POST['description']);
    $subject_id = $_POST['subject_id'];
    $decision = $_POST['decision'];

    $my_q = "UPDATE agenda SET title=$title, description=$description, decision='$decision' WHERE subject_id=$subject_id";
//    $my_q = "INSERT INTO agenda (title,description)	VALUES ($title,$description)";
    $res = update($my_q);
    if ($res) {
        echo 1;
    } else {
        echo $res;
    }
}

function add_user()
{
    include 'db_functions.php';
    parse_str($_POST['get_data'], $data);

    $name = $data['name'];
    $surname = $data['surname'];
    $id = $data['id'];
    $email = $data['email'];
    $privilage = $data['privilage'];
    $my_q = "SELECT * FROM users WHERE id='$id'";
    $res = select($my_q);
    $my_q1 = "SELECT * FROM users WHERE email='$email'";
    $res1 = select($my_q1);
    if (count($res) == 1) { // if A single entry is found
        echo "dublicate";
    } elseif (count($res1) == 1) {
        echo "email_exist";
    } else {
        $my_q = "INSERT INTO users (id,name,surname,privilage,email) VALUES ('$id','$name','$surname','$privilage','$email')";
        $res = insert($my_q);
        echo $res;
    }
}

