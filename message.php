<?php 
$conn = mysqli_connect("localhost", "root", "","bot") or die("Database error");

//get user message through ajax
$getMsg = mysqli_real_escape_string($conn, $_POST['text']);

//check user query to database
$check_data = "SELECT replies FROM chatbot WHERE queries LIKE '%$getMsg%' ";
$run_query = mysqli_query($conn, $check_data) or dire("Error");

//if user query matched to database  we will show the reply otherwise it goes to else statement
if(mysqli_num_rows($run_query) > 0 ){
    //fetch reply according to user input
    $fetch_data = mysqli_fetch_assoc($run_query);
    //store reply as variable to send t ajax
    $replay = $fetch_data['replies'];
    echo $replay;
}else{
    echo "Sorry can't be able to understand you";
}



?>