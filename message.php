<?php 
// $conn = mysqli_connect("localhost", "root", "","bot") or die("Database error");

//get user message through ajax
// $getMsg = mysqli_real_escape_string($conn, $_POST['text']);
$getMsg = $_POST['text'];

//check user query to database
// $check_data = "SELECT replies FROM chatbot WHERE queries LIKE '%$getMsg%' ";
// $run_query = mysqli_query($conn, $check_data) or dire("Error");

// //if user query matched to database  we will show the reply otherwise it goes to else statement
// if(mysqli_num_rows($run_query) > 0 ){
//     //fetch reply according to user input
//     $fetch_data = mysqli_fetch_assoc($run_query);
//     //store reply as variable to send t ajax
//     $replay = $fetch_data['replies'];
//     echo $replay;
// }else{
//     echo "Sorry can't be able to understand you";
// }



switch ($getMsg) {
    case 'hello':
        $replay = "hello there ! can i know your name";
        break;
    case 'hi':
        $replay = "hello there ! i will be your personnal assistant <br> you can ask me my name";
        break;
    case 'what is your name':
        $replay = "my name is solomon, am a chatbot, you just said wow, ok go ahead and type wow";
        break;
    case 'my name is':
        $replay = "my name is solomon";
        break;
    case 'wow':
        $replay = "yeah, am really smart, can we be friends";
        break;
    case 'yes':
        $replay = "thank you for being my friend, you  can say bye";
        break;
    case 'no':
        $replay = "uh uh, i hope we will be friends someday, you  can say bye";
        break;
    case 'bye':
        $replay = "bye dear.";
        break;
    default:
        $replay = "Sorry i could not understand your message";
}

echo $replay;


?>