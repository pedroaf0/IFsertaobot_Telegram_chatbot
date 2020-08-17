<?php 

//error_reporting(0);
require_once './db.json.php';
require_once './telegram.php';

$Body = file_get_contents('php://input');
$reply_obj = $db[json_decode($Body, true)["message"]["text"]];
while(true){
    $next = reply($reply_obj, $Body, $db);
    if ($next){
        $reply_obj = $db[$next]; 
        echo "next";
    }else{
        break;
    }

}


function reply($reply_obj, $Body, $db){

    telegram('sendChatAction', array("chat_id"=>json_decode($Body, true)["message"]["from"]["id"], "action"=>"typing"));


    if(!$reply_obj){
        echo $db["default"]["msg"]."1\n";
        $reply_obj = $db["default"]; 
        $reply_obj["reply_markup"] = array("keyboard"=>$db["default"]["inline"],"resize_keyboard"=>true ); 
    }else{
        $reply_obj["msg"] = explode( '{NAME}', $reply_obj["msg"] );
        $reply_obj["msg"] = implode(json_decode($Body, true)["message"]["from"]["first_name"], $reply_obj["msg"]); 
        $reply_obj["reply_markup"] = array("keyboard"=>$reply_obj["inline"],"resize_keyboard"=>true );   

    }

    $response = array("chat_id"=>json_decode($Body, true)["message"]["from"]["id"],
                      "text"=>$reply_obj["msg"],
                      "reply_markup"=>$reply_obj["reply_markup"]);

    switch ( $reply_obj["Action"]) {
    case "del":
        telegram('deleteMessage', array("chat_id"=>json_decode($Body, true)["message"]["from"]["id"], "message_id"=>json_decode($Body, true)["message"]["message_id"]));
        break;
    case "reply":
        $response["reply_to_message_id"] = json_decode($Body, true)["message"]["message_id"];
        break;
    default:
       // echo 0;
    }
    telegram('sendMessage', $response)."\n";
    return $reply_obj["next"];
}
?>