<?php
include('db_connect/online_test_json_angular_db_connect.php');
if(isset($_POST['submit']))
{
$question=$_POST['question'];
$qtype = $_POST['qtype'];
$ans_one = $_POST['ans_one'];
$ans_two = $_POST['ans_two'];
$ans_three = $_POST['ans_three'];
$ans_four = $_POST['ans_four'];
$correct_answer = $_POST['correct_answer'];

$qid = uniqid ();

$sql = "INSERT INTO online_test_data (qid, question, qtype, optone, opttwo, optthree, optfour, correct_answer) VALUES('$qid', '$question', '$qtype', '$ans_one', '$ans_two', '$ans_three', '$ans_four', '$correct_answer')";
//echo $sql;
if($conn->query($sql) === TRUE)
{
    echo "<script>alert('Data updated')</script>";
    echo "<script>location.href='add_question.php'</script>";
}

}
?>