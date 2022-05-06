<?php

/*
by: ABD9029
CH : dev_start
Ch2 : dev_Yemen
*/

ob_start();
$API_KEY = '5323374627:AAGFRs77_glqbacCzHcZvV4T4plII5BfnyM'; //add your bot token
$bot_id = ايدي البوت; 
$sudo = ايديك; // add your id
$e = "@معرف البوت";
define('API_KEY',$API_KEY);
function bot($method,$datas=[]){
    $url = "https://api.telegram.org/bot".API_KEY."/".$method;
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }else{
        return json_decode($res);
    }
}


$update = json_decode(file_get_contents('php://input'));
$filterlist = file_get_contents("data/$chat_id/filter.txt");
var_dump($update);
$message    = $update->message;
$message_id = $update->message->message_id;
$re_msgid   = $update->message->reply_to_message->message_id;
$from_id    = $message->from->id;
$php_i = $message->chat->id;
$alo = $message->chat->id;
$text       = $message->text;
$chat_id    = $message->chat->id;
$new        = $message->new_chat_member;
$left       = $update->message->left_chat_member;
$result2    = $json2->result;
$contact    = $update->message->contact;
$audio      = $update->message->audio;
$location   = $update->message->location;
$memb       = $update->message->message_id;
$game       = $update->message->game; 
$name       = $update->message->from->first_name;
$re         = $update->message->reply_to_message;
$re_msgid   = $update->message->reply_to_message->message_id;
$re_id      = $update->message->reply_to_message->from->id;
$gp_name    = $update->message->chat->title;
$user       = $update->message->from->username;
$for        = $update->message->from->id;
$sticker    = $update->message->sticker;
$video      = $update->message->video;
$photo      = $update->message->photo;
$voice      = $update->message->voice;
$doc        = $update->message->document;
$fwd        = $update->message->forward_from;
$re         = $update->message->reply_to_message;
$re_id      = $update->message->reply_to_message->from->id;
$re_user    = $update->message->reply_to_message->from->username;
$re_msgid   = $update->message->reply_to_message->message_id;
$type       = $update->message->chat->type;
$mid        = $message->message_id;

$number     = str_word_count($text);
$numper     = strlen($text);
$set        = file_get_contents("data/$chat_id.txt");
$ex         = explode("\n", $set);
$photo1     = $ex[0];
$sticker1   = $ex[1];
$contact1   = $ex[2];
$doc1       = $ex[3];
$fwd1       = $ex[4];
$voice1     = $ex[5];
$link1      = $ex[6];
$audio1     = $ex[7];
$video1     = $ex[8];
$tag1       = $ex[9];
$mark1      = $ex[10];
$bots1      = $ex[11];
$commands = array('/add','/lock photo','/lock voice','/lock audio','/lock video','/lock link','/lock user','/lock sticker','/lock contact','/lock doc','/promote','/ban','/kick','/pin','/setname',"قفل الصور","قفل البصمات","قفل الصوت","قفل الفيديو","قفل الروابط","قفل الجهات","قفل الملفات","حظر","طرد","رفع ادمن","ضع اسم","تثبيت","/link","الرابط");
$s = file_get_contents("https://api.telegram.org/bot$API_KEY/getChatMember?chat_id=$chat_id&user_id=".$bot_id);
$ss = json_decode($s, true);
$bot = $ss['result']['status'];
if(in_array($text, $commands) and $bot != "administrator"){
  bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"🚫┇للأسف البوت ليس ادمن في المجموعة",
  'reply_to_message_id'=>$mid
    ]);
}
$get = file_get_contents("https://api.telegram.org/bot$API_KEY/getChatMember?chat_id=$chat_id&user_id=".$from_id);
$info = json_decode($get, true);
$you = $info['result']['status'];
$gp_get = file_get_contents("data/groups.txt");
$groups = explode("\n", $gp_get);
$data=$update->callback_query->data;
$pr_get = file_get_contents("data/pr.txt");
$pr = explode("\n", $pr_get);
$z = file_get_contents("https://api.telegram.org/bot$API_KEY/getChatMember?chat_id=$chat_id&user_id=".$from_id);
$info = json_decode($z, true);
$you = $info['result']['status'];
$memo=file_get_contents("data/memo.txt");
$admins=file_get_contents("data/$chat_id/admin.txt");
$onair=file_get_contents("data/$chat_id/onair.txt");
$cretor=file_get_contents("data/$chat_id/cretor.txt");
$memberil=file_get_contents("data/$chat_id/memberil.txt");
date_default_timezone_set('Asia/Riyadh');
$date = date('h:i:s');
$d = date('A');
 $aa =preg_replace('/AM/', 'ص', $d);$aa =preg_replace('/PM/', 'م', $d);
 if($text=="/start" and $type == "private"){
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"💯¦ مـرحبآ آنآ بوت آسـمـي فير 🎖
💰¦ آختصـآصـي حمـآيهہ‌‏ آلمـجمـوعآت
📛¦ مـن آلسـبآم وآلتوجيهہ‌‏ وآلتگرآر وآلخ...
🚸¦ البوت خدمي ومتاح للكل 
👷🏽¦ فقط اضف البوت لمجموعتك وارفعه مشرف  
  ثم ارسل تفعيل

⚖️¦ مـعرف آلمـطـور  : @ABD9029
👨🏽‍🔧",
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>"آلمـطـور ™",'url'=>"https://t.me/ABD9029"]]
    ]

 
  ])
  ]);
bot('sendMessage',[
'chat_id'=>$sudo,
'text'=>"
شخص قام بالدخول إلى البوت
ــــــــــــــــــــــــــــــــــــــــــــــــــــــــ
ℓ☯️- المعرف الخاص بالعضو
ℓ🅿️- [@$user](t.me/$user)
➖➖
ℓ✳️- الاسم الخاص بالعضو
ℓ📳- [$name](t.me/$user)
➖➖
ℓ🚹- الايدي الخاص بالعضو
ℓ🆔- [$user_id](t.me/$user)
➖➖
ـ➖➖➖➖
⏰┇الساعة :: ".date("g", $time).":".date("i", $time)."
📆┇التاريخ :: ".date("Y")."/".date("n")."/".date("d")."
ـ➖➖➖➖
📮
",
disable_web_page_preview => true ,
parse_mode =>"Markdown",
]);
}
if ($new and $new->id == $bot_id) {
  bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"💯¦ مـرحبآ آنآ بوت آسـمـي فير 🎖
💰¦ آختصـآصـي حمـآيهہ‏‏ آلمـجمـوعآت
📛¦ مـن آلسـبآم وآلتوجيهہ‏‏ وآلتگرآر وآلخ...
⚖️¦ مـعرف آلمـطـور  : @ABD9029 🌿
👨🏽‍🔧",
    ]);
}

if ($type == "supergroup" and in_array($chat_id, $groups)){
  
  if($you != "creator" && $you != "administrator" && $from_id != $sudo){
    if($photo && $photo1 == "l"){
        bot('deleteMessage',[
            'chat_id'=>$chat_id,
            'message_id'=>$message->message_id
        ]);
    }

    if($voice and $voice1 == "l"){
      bot('deleteMessage',[
          'chat_id'=>$chat_id,
          'message_id'=>$message->message_id
      ]);
    } 
    if($audio && $audio1 == "l"){
      bot('deleteMessage',[
          'chat_id'=>$chat_id,
          'message_id'=>$message->message_id
      ]);
    }
    if($video && $video1 == "l"){
      bot('deleteMessage',[
          'chat_id'=>$chat_id,
          'message_id'=>$message->message_id
      ]);
    }
    if($link1 == "l" and preg_match('/^(.*)([Hh]ttp|[Hh]ttps|t.me)(.*)|([Hh]ttp|[Hh]ttps|t.me)(.*)|(.*)([Hh]ttp|[Hh]ttps|t.me)|(.*)[Tt]elegram.me(.*)|[Tt]elegram.me(.*)|(.*)[Tt]elegram.me|(.*)[Tt].me(.*)|[Tt].me(.*)|(.*)[Tt].me/',$text) ){
       bot('deleteMessage',[
         'chat_id'=>$chat_id,
         'message_id'=>$message->message_id
      ]);
    } 
    if($tag1 == "l" and  preg_match('/^(.*)@|@(.*)|(.*)@(.*)|(.*)#(.*)|#(.*)|(.*)#/',$text)){
       bot('deleteMessage',[
        'chat_id'=>$chat_id,
        'message_id'=>$message->message_id
       ]);
    }
    if($doc and $doc1 == "l"){
      bot('deleteMessage',[
          'chat_id'=>$chat_id,
          'message_id'=>$message->message_id
      ]);
    }
    if($sticker and $sticker1 == "l"){
      bot('deleteMessage',[
          'chat_id'=>$chat_id,
          'message_id'=>$message->message_id
      ]);
    }
    if($update->message->forward_from && $fwd1 == "l"){
      bot('deleteMessage',[
          'chat_id'=>$chat_id,
          'message_id'=>$message->message_id
      ]);
    }
    if($message->entities and $mark1 == "l"){
      bot('deleteMessage',[
          'chat_id'=>$chat_id,
          'message_id'=>$message->message_id
      ]);
    }
    if($new and $bots1 == "l"){
      $new_user = $new->username;
      if (preg_match('/^(.*)([Bb][Oo][Tt]/', $new_user)) {
        bot('kickChatMember',[
          'chat_id'=>$chat_id,
          'user_id'=>$new->id
          ]);
      }
    }
  }

if($bot == "administrator"){
if($you == "creator" or $you == "administrator" or $sudo) {
$re_user    = $update->message->reply_to_message->from->username;
  if($re  &&  $text == "مسح"){
    bot('deleteMessage',[
        'chat_id'=>$chat_id,
        'message_id'=>$re_msgid
    ]);
  }

if($you == "creator" or $you == "administrator" or $from_id == $sudo)
  if($re and $re_id != $bot and $re_id != $sudo and $text=="/ban" or $text == "حظر" or $text == "/kick" or $text=="طرد"){
    bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"👤¦ العضو » @$re_user
🎫¦ الايدي » ( $re_id )
🛠¦ تم الحظر 
✓️",
  'reply_to_message_id'=>$mid
      ]);
    bot('kickChatMember',[
        'chat_id'=>$chat_id,
        'user_id'=>$re_id
      ]);
  }

if($you == "creator" or $you == "administrator" or $from_id == $sudo)
  if($re and $re_id != $bot and $re_id != $sudo and $text=="/unban" or $text == "الغاء الحظر"){
    bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"👤¦ العضو » @$re_user 
🎫¦ الايدي » ( $re_id )
🛠¦ تم الغاء الحظر 
✓️",
  'reply_to_message_id'=>$mid
      ]);
    bot('unbanChatMember',[
        'chat_id'=>$chat_id,
        'user_id'=>$re_id
      ]);
    }

if($you == "creator" or $you == "administrator" or $from_id == $sudo)
  if($text == "/promote" or $text == "رفع ادمن"){
      bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"👤¦ العضو » @$re_user 
🎫¦ الايدي » ( $re_id )
🛠¦ تمت ترقيته ليصبح ادمن 
✓️",
  'reply_to_message_id'=>$mid
      ]);
      bot('promoteChatMember',[
          'chat_id'=>$chat_id,
          'user_id'=>$re_id
        ]);
  }
  $ename = str_replace("/setname ", "$ename", $text);
if($you == "creator" or $you == "administrator" or $from_id == $sudo)
  $aname = str_replace("ضع اسم ", "$aname", $text);
  if($text == "/setname $ename"){
    bot('setChatTitle',[
      'chat_id'=>$chat_id,
      'title'=>$ename 
      ]);
  }
   if($text == "ضع اسم $aname"){
     bot('setChatTitle',[
      'chat_id'=>$chat_id,
      'title'=>$aname 
      ]);
   }
  if($re and $text == "pin" or $text == "تبنبني"){
bot('pinChatMessage',[
'chat_id'=>$chat_id,
'text'=>"🙋🏼‍♂️¦ أهلا عزيزي  
📌¦ تم تثبيت الرساله 
✓",
'message_id'=>$re_msgid
]);
}

if($you == "creator" or $you == "administrator" or $from_id == $sudo)
   if($text == "/lock photo" or $text == "قفل الصور"){
    file_put_contents("data/$chat_id.txt", "l\n$sticker1\n$contact1\n$doc1\n$fwd1\n$voice1\n$link1\n$audio1\n$video1\n$tag1\n$mark1\n$bots1");
     bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم قفل الصور 
✓",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
 

   if($text=="قفل الصور" and  $you == "member" and $id !== $sudo){
     bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"📡¦ هذا الامر يخص الادمنيه فقط  🚶",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
if($you == "creator" or $you == "administrator" or $from_id == $sudo)
   if($text == "/open photo" or $text == "فتح الصور"){
    file_put_contents("data/$chat_id.txt", "o\n$sticker1\n$contact1\n$doc1\n$fwd1\n$voice1\n$link1\n$audio1\n$video1\n$tag1\n$mark1\n$bots1");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم فتح الصور 
✓",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
 
  if($text=="فتح الصور" and  $you == "member" and $id !== $sudo){
     bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"📡¦ هذا الامر يخص الادمنيه فقط  🚶",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }

if($you == "creator" or $you == "administrator" or $from_id == $sudo)
    if($text == "/lock sticker" or $text == "قفل الملصقات"){
    file_put_contents("data/$chat_id.txt", "$photo1\nl\n$contact1\n$doc1\n$fwd1\n$voice1\n$link1\n$audio1\n$video1\n$tag1\n$mark1\n$bots1");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم قفل الملصقات 
✓",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }

  if($text=="قفل الملصقات" and  $you == "member" and $id !== $sudo){
     bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"📡¦ هذا الامر يخص الادمنيه فقط  🚶",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }

if($you == "creator" or $you == "administrator" or $from_id == $sudo)
       if($text == "/open sticker" or $text == "فتح الملصقات"){
    file_put_contents("data/$chat_id.txt", "$photo1\no\n$contact1\n$doc1\n$fwd1\n$voice1\n$link1\n$audio1\n$video1\n$tag1\n$mark1\n$bots1");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم فتح الملصقات 
✓",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }


  if($text=="فتح الملصقات" and  $you == "member" and $id !== $sudo){
     bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"📡¦ هذا الامر يخص الادمنيه فقط  🚶",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }

if($you == "creator" or $you == "administrator" or $from_id == $sudo)
       if($text == "/lock contact" or $text == "قفل الجهات"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\nl\n$doc1\n$fwd1\n$voice1\n$link1\n$audio1\n$video1\n$tag1\n$mark1\n$bots1");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم قفل جهات الاتصال 
✓",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }

  if($text=="قفل الجهات" and  $you == "member" and $id !== $sudo){
     bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"📡¦ هذا الامر يخص الادمنيه فقط  🚶",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }

if($you == "creator" or $you == "administrator" or $from_id == $sudo)
 if($text == "/open contact" or $text == "فتح الجهات"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\no\n$doc1\n$fwd1\n$voice1\n$link1\n$audio1\n$video1\n$tag1\n$mark1\n$bots1");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم فتح جهات الاتصال 
✓",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }

  if($text=="فتح الجهات" and  $you == "member" and $id !== $sudo){
     bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"📡¦ هذا الامر يخص الادمنيه فقط  🚶",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }

if($you == "creator" or $you == "administrator" or $from_id == $sudo)
   if($text == "/lock doc" or $text == "قفل الملفات"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\nl\n$fwd1\n$voice1\n$link1\n$audio1\n$video1\n$tag1\n$mark1\n$bots1");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم قفل الملفات 
✓",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }

  if($text=="قفل الملفات" and  $you == "member" and $id !== $sudo){
     bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"📡¦ هذا الامر يخص الادمنيه فقط  🚶",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }

if($you == "creator" or $you == "administrator" or $from_id == $sudo)
  if($text == "/open doc" or $text == "فتح الملفات"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\no\n$fwd1\n$voice1\n$link1\n$audio1\n$video1\n$tag1\n$mark1\n$bots1");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم فتح الملفات 
✓",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }

  if($text=="فتح الملفات" and  $you == "member" and $id !== $sudo){
     bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"📡¦ هذا الامر يخص الادمنيه فقط  🚶",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }

if($you == "creator" or $you == "administrator" or $from_id == $sudo)
if($text == "/lock fwd" or $text == "قفل التوجيه"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\nl\n$voice1\n$link1\n$audio1\n$video1\n$tag1\n$mark1\n$bots1");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم قفل التوجيه 
✓",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }


  if($text=="قفل التوجيه" and  $you == "member" and $id !== $sudo){
     bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"📡¦ هذا الامر يخص الادمنيه فقط  🚶",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }

if($you == "creator" or $you == "administrator" or $from_id == $sudo)
   if($text == "/open fwd" or $text == "فتح التوجيه"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\no\n$voice1\n$link1\n$audio1\n$video1\n$tag1\n$mark1\n$bots1");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم فتح التوجيه 
✓",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }

  if($text=="فتح التوجيه" and  $you == "member" and $id !== $sudo){
     bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"📡¦ هذا الامر يخص الادمنيه فقط  🚶",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }

if($you == "creator" or $you == "administrator" or $from_id == $sudo)
   if($text == "/lock voice" or $text == "قفل البصمات"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\nl\n$link1\n$audio1\n$video1\n$tag1\n$mark1\n$bots1");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم قفل البصمات 
✓",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }

  if($text=="قفل البصمات" and  $you == "member" and $id !== $sudo){
     bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"📡¦ هذا الامر يخص الادمنيه فقط  🚶",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }

if($you == "creator" or $you == "administrator" or $from_id == $sudo)
     if($text == "/open voice" or $text == "فتح البصمات"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\no\n$link1\n$audio1\n$video1\n$tag1\n$mark1\n$bots1");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم فتح البصمات 
✓",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }

  if($text=="فتح البصمات" and  $you == "member" and $id !== $sudo){
     bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"📡¦ هذا الامر يخص الادمنيه فقط  🚶",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }

if($you == "creator" or $you == "administrator" or $from_id == $sudo)
     if($text == "/lock link" or $text == "قفل الروابط"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\n$voice1\nl\n$audio1\n$video1\n$tag1\n$mark1\n$bots1");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم قفل الروابط 
✓",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }

  if($text=="قفل الروابط" and  $you == "member" and $id !== $sudo){
     bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"📡¦ هذا الامر يخص الادمنيه فقط  🚶",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }

if($you == "creator" or $you == "administrator" or $from_id == $sudo)
   if($text == "/open link" or $text == "فتح الروابط"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\n$voice1\no\n$audio1\n$video1\n$tag1\n$mark1\n$bots1");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم فتح الروابط 
✓",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }


  if($text=="فتح الروابط" and  $you == "member" and $id !== $sudo){
     bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"📡¦ هذا الامر يخص الادمنيه فقط  🚶",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }

if($you == "creator" or $you == "administrator" or $from_id == $sudo)
   if($text == "/lock audio" or $text == "قفل الصوت"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\n$voice1\n$link1\nl\n$video1\n$tag1\n$mark1\n$bots1");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم قفل الصوت 
✓",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }

  if($text=="قفل الصوت" and  $you == "member" and $id !== $sudo){
     bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"📡¦ هذا الامر يخص الادمنيه فقط  🚶",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }

if($you == "creator" or $you == "administrator" or $from_id == $sudo)
   if($text == "/open audio" or $text == "فتح الصوت"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\n$voice1\n$link1\no\n$video1\n$tag1\n$mark1\n$bots1");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم فتح الصوت 
✓",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }

  if($text=="فتح الصوت" and  $you == "member" and $id !== $sudo){
     bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"📡¦ هذا الامر يخص الادمنيه فقط  🚶",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }

if($you == "creator" or $you == "administrator" or $from_id == $sudo)
   if($text == "/lock video" or $text == "قفل الفيديو"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\n$voice1\n$link1\n$audio1\nl\n$tag1\n$mark1\n$bots1");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم قفل الفيديو 
✓",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }

  if($text=="قفل الفيديو" and  $you == "member" and $id !== $sudo){
     bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"📡¦ هذا الامر يخص الادمنيه فقط  🚶",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }

if($you == "creator" or $you == "administrator" or $from_id == $sudo)
   if($text == "/open video" or $text == "فتح الفيديو"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\n$voice1\n$link1\n$audio1\no\n$tag1\n$mark1\n$bots1");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم فتح الفيديو 
✓",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }

  if($text=="فتح الفيديو" and  $you == "member" and $id !== $sudo){
     bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"📡¦ هذا الامر يخص الادمنيه فقط  🚶",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }

if($you == "creator" or $you == "administrator" or $from_id == $sudo)
   if($text == "/lock user" or $text == "قفل المعرفات"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\n$voice1\n$link1\n$audio1\n$video1\nl\n$mark1\n$bots1");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم قفل المعرفات @
✓",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }

  if($text=="قفل المعرفات" and  $you == "member" and $id !== $sudo){
     bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"📡¦ هذا الامر يخص الادمنيه فقط  🚶",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }


if($you == "creator" or $you == "administrator" or $from_id == $sudo)
   if($text == "/open user" or $text == "فتح المعرفات"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\n$voice1\n$link1\n$audio1\n$video1\no\n$mark1\n$bots1");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم فتح المعرفات @
✓",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }

  if($text=="فتح المعرفات" and  $you == "member" and $id !== $sudo){
     bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"📡¦ هذا الامر يخص الادمنيه فقط  🚶",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }

if($you == "creator" or $you == "administrator" or $from_id == $sudo)
    if($text == "/lock mark" or $text == "قفل الماركدون"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\n$voice1\n$link1\n$audio1\n$video1\n$tag1\nl\n$bots1");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم قفل الماركدون 
✓",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }

  if($text=="قفل الماركدون" and  $you == "member" and $id !== $sudo){
     bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"📡¦ هذا الامر يخص الادمنيه فقط  🚶",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }

if($you == "creator" or $you == "administrator" or $from_id == $sudo)
   if($text == "/open mark" or $text == "فتح الماركدون"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\n$voice1\n$link1\n$audio1\n$video1\n$tag1\no\n$bots1");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم فتح الماركدون 
✓",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }

  if($text=="فتح الماركدون" and  $you == "member" and $id !== $sudo){
     bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"📡¦ هذا الامر يخص الادمنيه فقط  🚶",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }

if($you == "creator" or $you == "administrator" or $from_id == $sudo)
  if($text == "/lock bots" or $text == "قفل البوتات"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\n$voice1\n$link1\n$audio1\n$video1\n$tag1\n$mark1\nl");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم قفل البوتات 
✓",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }

  if($text=="قفل البوتات" and  $you == "member" and $id !== $sudo){
     bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"📡¦ هذا الامر يخص الادمنيه فقط  🚶",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }

if($you == "creator" or $you == "administrator" or $from_id == $sudo)
   if($text == "/open bots" or $text == "فتح البوتات"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\n$voice1\n$link1\n$audio1\n$video1\n$tag1\n$mark1\no");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم فتح البوتات 
✓",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }

  if($text=="فتح البوتات" and  $you == "member" and $id !== $sudo){
     bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"📡¦ هذا الامر يخص الادمنيه فقط  🚶",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }

if($you == "creator" or $you == "administrator" or $from_id == $sudo)
if($text == "/lock all" or $text == "قفل الكل"){
    file_put_contents("data/$chat_id.txt", "\n1\n1\n1\n1\n1\n1\n1\n1\n1\n1\n1\no\n1");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم قفل الكل
✓",
  'reply_to_message_id'=>$mid,]);}
 
  if($text=="قفل الكل" and  $you == "member" and $id !== $sudo){
     bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"📡¦ هذا الامر يخص الادمنيه فقط  🚶",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }

if($you == "creator" or $you == "administrator" or $from_id == $sudo)
   if($text == "/open all" or $text == "فتح الكل"){
    file_put_contents("data/$chat_id.txt", "\no\no\no\no\no\no\no\no\no\no\no\no\no");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم فتح الكل
✓",
  'reply_to_message_id'=>$mid,]);}

  if($text=="فتح الكل" and  $you == "member" and $id !== $sudo){
     bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"📡¦ هذا الامر يخص الادمنيه فقط  🚶",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }

if($you == "creator" or $you == "administrator" or $from_id == $sudo)
if($text == "/lock bots" or $text == "قفل المتحرك"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\n$bsma1\n$link1\n$audio1\n$voice1\n$tag1\n$mark1\n$bots1\n$cha1\n1");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم قفل المتحرك
✓",
  'reply_to_message_id'=>$mid,]);}
   
  if($text=="قفل المتحرك" and  $you == "member" and $id !== $sudo){
     bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"📡¦ هذا الامر يخص الادمنيه فقط  🚶",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }

if($you == "creator" or $you == "administrator" or $from_id == $sudo)
   if($text == "/open bots" or $text == "فتح المتحرك"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\n$bsma1\n$link1\n$audio1\n$voice1\n$tag1\n$mark1\n$bots\n$cha1\no");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم فتح المتحرك
✓",
  'reply_to_message_id'=>$mid,]);} 

  if($text=="فتح المتحرك" and  $you == "member" and $id !== $sudo){
     bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"📡¦ هذا الامر يخص الادمنيه فقط  🚶",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }

if($you == "creator" or $you == "administrator" or $from_id == $sudo)
if($text == "/lock user" or $text == "قفل التاك"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\n$bsma1\n$link1\n$audio1\n$voice1\nl\n$mark1\n$bots1\n$cha1\n$gif1");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم قفل التاك #
✓",
  'reply_to_message_id'=>$mid,]);}

  if($text=="قفل التاك" and  $you == "member" and $id !== $sudo){
     bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"📡¦ هذا الامر يخص الادمنيه فقط  🚶",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }

if($you == "creator" or $you == "administrator" or $from_id == $sudo)
   if($text == "/open user" or $text == "فتح التاك"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\n$bsma1\n$link1\n$audio1\n$voice1\no\n$mark1\n$bots1\n$cha1\n$gif1");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم فتح التاك #
✓",
  'reply_to_message_id'=>$mid,]);}

  if($text=="فتح التاك" and  $you == "member" and $id !== $sudo){
     bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"📡¦ هذا الامر يخص الادمنيه فقط  🚶",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }

if($you == "creator" or $you == "administrator" or $from_id == $sudo)
if($text == "/lock bots" or $text == "قفل الدردشه"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\n$bsma1\n$link1\n$audio1\n$voice1\n$tag1\n$mark1\n$bots1\n1\n$gif1");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم قفل الدردشه
✓",
  'reply_to_message_id'=>$mid,]);}
   
  if($text=="قفل الدردشه" and  $you == "member" and $id !== $sudo){
     bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"📡¦ هذا الامر يخص الادمنيه فقط  🚶",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }

if($you == "creator" or $you == "administrator" or $from_id == $sudo)
   if($text == "/open bots" or $text == "فتح الدردشه"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\n$bsma1\n$link1\n$audio1\n$voice1\n$tag1\n$mark1\n$bots\no\n$gif1");
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"️🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم فتح الدردشه
✓️",
  'reply_to_message_id'=>$mid,]);}

  if($text=="فتح الدردشه" and  $you == "member" and $id !== $sudo){
     bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"📡¦ هذا الامر يخص الادمنيه فقط  🚶",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }

if($you == "creator" or $you == "administrator" or $from_id == $sudo)
  if($text=="الاوامر"){
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"❂

 ‌‌‏❋¦ مـسـآرت آلآوآمـر آلعآمـهہ‌‏ ⇊

👨‍⚖️¦ م1 » آوآمـر آلآدآرهہ‌‏
📟¦ م2 » آوآمـر آعدآدآت آلمـجمـوعهہ‌‏
🛡¦ م3 » آوآمـر آلحمـآيهہ‌‏
🕹¦ م المطور »  آوآمـر آلمـطـور


 ‌‌‏❋¦ رآسـلني للآسـتفسـآر ☜ { @ABD9029 } ✓",
      ]);
  }
 }
}

  if($text=="الاوامر" and  $you == "member" and $id !== $sudo){
     bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"📡¦ هذا الامر يخص الادمنيه فقط  🚶",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }


 if($text == "المجموعات"){
  $c = count($groups);
  bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"📮¦ عدد المجموعات المفعلة » $c  ➼"
    ]);
 }
if($text == "اذاعه" and $for == $sudo){
  file_put_contents("mode.txt", "bc");
  bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"📭¦ حسننا الان ارسل الكليشه للاذاعه للمجموعات 
🔛"
    ]);
}
$mode = file_get_contents("mode.txt");
if($text != "اذاعه" and $mode=="bc" and $for == $sudo){
  for ($i=0; $i < count($groups); $i++) { 
    bot('sendMessage',[
      'chat_id'=>$groups[$i],
      'text'=>" $text"
    ]);
  }
  unlink("mode.txt");
}
$id   = $message->from->id; 
$user = $message->from->username; 
$name = $message->from->first_name; 
if($text=="موقعي" and $you == "creator" and $id !== $sudo){
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"👨🏽‍🔧¦ اهـلا بـك عزيزي في معلوماتك 🥀 
ـ.——————————
🗯¦ الاســم •⊱{  $name  }⊰•
💠¦ المعرف •⊱ @$user ⊰•
⚜️¦ الايـدي •⊱ { $id } ⊰•
🚸¦ رتبتــك •⊱ المنشىء 👷🏼‍⚕️ ⊰•
🔰¦ ــ •⊱ { $chat_id } ⊰•
ـ.——————————
👨🏻‍💻¦ مـطـور البوت •⊱ @ABD9029 ⊰•
",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text=="موقعي" and  $you == "administrator" and $id !== $sudo){
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"👨🏽‍🔧¦ اهـلا بـك عزيزي في معلوماتك 🥀 
ـ.——————————
🗯¦ الاســم •⊱{  $name  }⊰•
💠¦ المعرف •⊱ @$user ⊰•
⚜️¦ الايـدي •⊱ { $id } ⊰•
🚸¦ رتبتــك •⊱ ادمن في البوت 👨🏼‍🎓🏼‍⚕️ ⊰•
🔰¦ ــ •⊱ { $chat_id } ⊰•
ـ.——————————
👨🏻‍💻¦ مـطـور البوت •⊱ @ABD9029 ⊰•",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text=="موقعي" and  $you == "member" and $id !== $sudo){
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"👨🏽‍🔧¦ اهـلا بـك عزيزي في معلوماتك 🥀 
ـ.——————————
🗯¦ الاســم •⊱{  $name  }⊰•
💠¦ المعرف •⊱ @$user ⊰•
⚜️¦ الايـدي •⊱ { $id } ⊰•
🚸¦ رتبتــك •⊱ فقط عضو 🙍🏼‍♂🏼‍⚕️ ⊰•
🔰¦ ــ •⊱ { $chat_id } ⊰•
ـ.——————————
👨🏻‍💻¦ مـطـور البوت •⊱ @ABD9029 ⊰•",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text=="موقعي" and $id == $sudo){
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"👨🏽‍🔧¦ اهـلا بـك عزيزي في معلوماتك 🥀 
ـ.——————————
🗯¦ الاســم •⊱{  $name  }⊰•
💠¦ المعرف •⊱ @$user ⊰•
⚜️¦ الايـدي •⊱ { $id } ⊰•
🚸¦ رتبتــك •⊱ مطور اساسي 👨🏻‍⚕️ ⊰•
🔰¦ ــ •⊱ { -$chat_id } ⊰•
ـ.——————————
👨🏻‍💻¦ مـطـور البوت •⊱ @ABD9029 ⊰•",
'reply_to_message_id'=>$message->message_id, 
]);
}


if($text == "/link" or $text == "الرابط"){
	$t =  $message->chat->title;
    $export = json_decode(file_get_contents("https://api.telegram.org/bot$API_KEY/exportChatInviteLink?chat_id=$chat_id"));
    $l = $export->result;
    bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"🔖¦رابـط مجمـــوعة: 💯
🌿¦ $t :

$l",
      'disable_web_page_preview'=>true,
      'reply_to_message_id'=>$message->message_id,
      ]);
  
   }
if(preg_match('/^(مسح) (.*)/', $text, $delmsg) and $from_id == $sudo){
for($h=$message_id; $h>=$message_id-$delmsg[2]; $h--){
bot('deletemessage',[
'chat_id' => $chat_id,
'message_id' =>$h,]);}}
$editMessage = $update->edited_message;
$chatedit = $update->edited_message->chat->id;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id = $update->callback_query->message->message_id;
$data = $update->callback_query->data;
if($editMessage){
	 bot('sendMessage',[
	 'chat_id'=>$chatedit,
	 'text'=>'لتعدل خل العالم تشوف الفضايح 🙈😂',
	 'message_id'=>$message->edited_message->message_id,
	 'reply_to_message_id'=>$update->edited_message->message_id,
	 ]);
 }
if($rep && $text == "ايدي" or $text == "ايديه"){
bot('sendmessage', [
'chat_id' => $chat_id,
'text' => " $re_id ",
]);
}
if($you == "creator" or $you == "administrator" or $from_id == $sudo)
if($text == "م1"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"•⊱ {  آوآمر الرفع والتنزيل  } ⊰•


📿¦ رفع ادمن ‿ تنزيل ادمن  

 

⦅آوآمـر آلحظـر وآلطــرد وآلتقييـد  ⦆
      
🔱¦ حظر (بالرد/بالمعرف) •⊱ لحظر العضو
⚜¦ طرد ( بالرد/بالمعرف) •⊱ لطرد العضو 
🔅¦ كتم (بالرد/بالمعرف) •⊱ لكتم العضو 
🌀¦ تقييد (بالرد/بالمعرف) •⊱ لتقييد العضو
🚸¦ الغاء الحظر (بالرد/بالمعرف) •⊱ لالغاء الحظر 
🔆¦ الغاء الكتم (بالرد/بالمعرف) •⊱ لالغاء الكتم 
〰¦ الغاء التقييد (بالرد/بالمعرف) •⊱ لالغاء تقييد العضو 

🗯┇ راسلني للاستفسار 💡↭ @ABD9029",
'reply_to_message_id'=>$message->message_id, 
]);
}

  if($text=="م1" and  $you == "member" and $id !== $sudo){
     bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"📡¦ هذا الامر يخص الادمنيه فقط  🚶",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }

if($you == "creator" or $you == "administrator" or $from_id == $sudo)
if($text == "م2"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"👨🏽‍✈️¦  اوامر الوضع للمجموعه ::

📮¦ـ➖➖➖➖➖  
💭¦ ضع اسم  ↜ لوضع اسم المحموعة
  
💭¦ الـرابـط :↜  لعرض الرابط  
📮¦ـ➖➖➖➖➖

👨🏽‍💻¦  اوامر رؤية الاعدادات ::

🗯¦ الادمنيه : لعرض  الادمنيه 
🗯¦ المطور : لعرض معلومات المطور 
🗯¦ موقعي :↜لعرض معلوماتك  

➖➖➖➖➖➖➖
🗯¦ راسلني للاستفسار 💡↭ @ABD9029",
'reply_to_message_id'=>$message->message_id, 
]);
}

  if($text=="م2" and  $you == "member" and $id !== $sudo){
     bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"📡¦ هذا الامر يخص الادمنيه فقط  🚶",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }


if($you == "creator" or $you == "administrator" or $from_id == $sudo)
if($text == "م3"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"⚡️ اوامر حماية المجموعه ⚡️
🗯¦ـ➖➖➖➖
🗯¦️ قفل «» فتح •⊱ البصمات ⊰•
🗯¦ قفل «» فتح •⊱ الــفيديو ⊰•
🗯¦ قفل «» فتح •⊱ الفيديو ⊰•
🗯¦ قفل «» فتح •⊱ الـصــور ⊰•
🗯¦ قفل «» فتح •⊱ الملصقات ⊰•

🗯¦ قفل «» فتح •⊱ المتحركه ⊰•
🗯¦ قفل «» فتح •⊱ الدردشه ⊰•

🗯¦ قفل «» فتح •⊱ الروابط ⊰•
🗯¦ قفل «» فتح •⊱ التاك ⊰•
🗯¦ قفل «» فتح •⊱ البوتات ⊰•
🗯¦ ️قفل «» فتح •⊱ المعرفات ⊰•
🗯¦ قفل «» فتح •⊱ البوتات  ⊰•
🗯¦ قفل «» فتح •⊱ التوجيه ⊰•

🗯¦ قفل «» فتح •⊱ الجهات ⊰•
🗯¦ قفل «» فتح •⊱ الــكـــل ⊰•
🔅¦ـ➖➖➖➖➖

👨🏻‍💻¦ للاستفسار 💡↭ @ABD9029",
'reply_to_message_id'=>$message->message_id, 
]);
}

  if($text=="م3" and  $you == "member" and $id !== $sudo){
     bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"📡¦ هذا الامر يخص الادمنيه فقط  🚶",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }

$admin = 5030677912 ;
if($text =="م المطور" &&$from_id==$admin ){
bot ('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"🎖¦ آهہ‏‏لآ عزيزي آلمـطـور 🍃
💰¦ آنتهہ‏‏ آلمـطـور آلآسـآسـي هہ‏‏نآ 🛠
...

🚸¦ تسـتطـيع‏‏ آلتحگم بگل آلآوآمـر آلمـمـوجودهہ‏‏

🔅¦ تفعيل : لتفعيل البوت 
🔅¦ اذاعه : لنشر كلمه لكل المجموعات
🔅¦ استخدم /admin في خاص البوت فقط : لعرض كيبود الخاص بك 💯 
🔅¦ تحديث: لتحديث ملفات البوت
🔅¦ غادر : لمغادرة  البوت 
🔅¦ حظر عام : لحظر العضو من البوت عام
🔅¦ـ➖➖➖➖➖

🗯¦ راسلني للاستفسار 💡↭ @ABD9029
",
'parse_mode'=>'MarkDown', 'disable_web_page_preview'=>true, 'reply_to_message_id'=>$message->message_id,
]);
}

  if($text=="م المطور" and  $you == "member" and $id !== $sudo){
     bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"🔅¦ للمطور الاساسي فقط  🎖",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }

  if($text=="اذاعه" and  $you == "member" and $id !== $sudo){
     bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"📛¦ هذا الامر يخص {المطور} فقط  
🚶",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }

$admin = 5030677912 ;
if($text =="تحديث ♻️" &&$from_id==$admin ){
bot ('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"🎖
🗂¦ تم تحديث الملفات
√
",
'parse_mode'=>'MarkDown', 'disable_web_page_preview'=>true, 'reply_to_message_id'=>$message->message_id,
]);
}
/*
by: ABD9029
CH : dev_start
Ch2 : dev_Yemen
*/

if($text=="رتبتي" and $you == "creator"){
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"🎫¦ رتبتك » المنشىء 🏌🏻
🌿
",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text=="رتبتي" and  $you == "administrator"){
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"🎫¦ رتبتك » ادمن في البوت 🎖
🌿",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text=="رتبتي" and  $you == "member"){
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"🎫¦ رتبتك » فقط عضو 🙍🏼‍♂️
🌿",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text=="انجب" and $you == "creator"){
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"حاظر تاج راسي انجبيت 😇
",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text=="انجب" and $you == "administrator"){
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"فوك ما مصعدك ادمن و تكلي انجب 😏 ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text=="انجب" and $you == "member"){
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"انجب انته لا تندفر 😒",
'reply_to_message_id'=>$message->message_id, 
]);
}
$me = $message->reply_to_message; 
$mem = $me->message_id;
$MEMO = explode('كله',$text);
if($MEMO){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$MEMO[1],
'reply_to_message_id'=>$mem,
]);
}
$MEMO = explode('كول',$text);
if($MEMO){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$MEMO[1],
]);
}
$u = explode("\n",file_get_contents("memb.txt"));
$m = count($u)-1;
$modxe = file_get_contents("usr.txt");
if ($update && !in_array($chat_id, $u)) {
    file_put_contents("memb.txt", $chat_id."\n",FILE_APPEND);
  }
if($text == '/admin' and $for == $sudo){ 
bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'text'=>'🎖¦ آهہ‏‏لآ عزيزي آلمـطـور 🍃
💰¦ آنتهہ‏‏ آلمـطـور آلآسـآسـي هہ‏‏نآ 🛠
...

🚸¦ تسـتطـيع‏‏ آلتحگم بگل آلآوآمـر آلمـمـوجودهہ‏‏ بآلگيبورد
⚖️¦ فقط آضـغط ع آلآمـر آلذي تريد تنفيذهہ‏‏', 
'reply_markup'=>json_encode([ 
'keyboard'=>[ 
[ 
['text'=>'🆔¦ ايديك •'] 
], 
[ 
['text'=>'💯¦ المشتركين •'],['text'=>'☑️¦ المجموعات •'] 
], 
[ 
['text'=>'🚸¦ اسمك •'] 
], 
[ 
['text'=>'💢¦ معرفك •'] 
], 
[ 
['text'=>'📊¦ الاحصائيات •'] 
], 
[ 
['text'=>'🔂¦ اذاعة •'] 
], 
[ 
['text'=>'🛠¦ المطور •'] 
], 
[ 
['text'=>'📡¦ قناة المطور •'],['text'=>'🛠¦ المساعدة •'] 
],  
] 
]) 
]); 
}
if($text == "🔂¦ اذاعة •" and $for == $sudo){
  file_put_contents("mode.txt", "bc");
  bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"📭¦ حسننا الان ارسل الكليشه للاذاعه للمجموعات 
🔛"
    ]);
}
$mode = file_get_contents("mode.txt");
if($text != "🔂¦ اذاعة •" and $mode=="bc" and $for == $sudo){
  for ($i=0; $i < count($groups); $i++) { 
    bot('sendMessage',[
      'chat_id'=>$groups[$i],
      'text'=>" $text"
    ]);
  }
  unlink("mode.txt");
}
if($text == "☑️¦ المجموعات •"){
  $c = count($groups);
  bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"📮¦ عدد المجموعات المفعلة » $c  ➼"
    ]);
 }
$id = $message->from->id;
if($text == "🆔¦ ايديك •"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>" $id ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "🚸¦ اسمك •"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>" $name ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "💢¦ معرفك •"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>" @$user ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "🛠¦ المطور •" and $for == $sudo){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>" 🏌🏻¦ مـطـور البوت : @$user 👨🏽‍🔧 ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "💯¦ المشتركين •" and $from_id == $sudo){
$m = count($u)-1;
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=> "💯¦ عدد مشتركين البوت :- { $m }" ,
'reply_to_message_id'=>$message->message_id,
]);
}
if($text == "📊¦ الاحصائيات •"){
$c = count($groups);
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>" الاحصائيات : 📈 

📊¦ عدد المجموعات المفعله : $c 
📊¦ عدد المشتركين في البوت : $m
📡 ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "📡¦ قناة المطور •"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"🛠¦   قناة مـطـور الملف : @dev_start ☑️ ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "🛠¦ المساعدة •"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"💯¦ للمساعدة او اي أراء او افكار تواصل مع مطور الملف @ABD9029 √",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($you == "creator" or $you == "administrator" or $from_id == $sudo){
if ($text == "تفعيل" or $text == '/add' and  $you == "administrator") {
$result2 = $json2->result;
$export = json_decode(file_get_contents("https://api.telegram.org/bot$API_KEY/exportChatInviteLink?chat_id=$chat_id"));
$l = $export->result;
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>" ",
'reply_to_message_id'=>$message->message_id,
]);
bot('sendMessage',[
'chat_id'=>$sudo,
'text'=>"

👮🏽¦ قام شخص بتفعيل البوت ...

ــــــــــــــــــــــــــــــــــــــــــ
📑¦ معلومات المجموعه
🗯¦ الاسم •⊱  $t   ⊰• 
📊¦ رابط المجموعة • $l •
📛¦ الايدي •⊱ $chat_id ⊰•
🙋🏻‍♂¦ ألاعـضـاء •⊱{ $count }⊰• 
ــــــــــــــــــــــــــــــــــــــــــ
⚖️¦ معلومات الشخص 
👨🏽‍💻¦ الاسـم •⊱{ ⊰ $name ⊱  }⊰•

🎟¦ الـمعرف  •⊱ @$user ⊰•
ــــــــــــــــــــــــــــــــــــــــــ
⏱¦ الساعه •⊱ $date $aa ⊰•
",
]);
}
}


if($text == "ايديي"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>" $id ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "معرفي"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>" @$user ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "اسمي"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>" $name ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "بوت"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"أسمي فير 🌚🌸",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "😔"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ليش الحلو ضايج ❤️🍃",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "😳"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ها بس لا شفت خالتك الشكره 😳😹🕷",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "😭"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"لتبجي حياتي 😭😭",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "😡"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ابرد  🚒",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "😍"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"يَمـه̷̐ إآلُحــ❤ــب يَمـه̷̐ ❤️😍",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "😉"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"😻🙈",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "😋"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"طبب لسانك جوه عيب 😌",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "☹️"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"لضوج حبيبي 😢❤️🍃",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "هلو"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"هلووات 😊🌹",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "شكرا"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"{ •• الـّ~ـعـفو •• } ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "مشكور"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"{ •• الـّ~ـعـفو •• } ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "مح"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"محات حياتي🙈❤",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "تف"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"عيب ابني/بتي اتفل/ي اكبر منها شوية 😌😹",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "تخليني"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"اخليك بزاويه 380 درجه وانته تعرف الباقي 🐸",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "اكرهك"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ديله شلون اطيق خلقتك اني😾🖖🏿🕷",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "باي"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"بايات حياتي 😍 $name",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "زاحف"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"زاحف عله خالتك الشكره 🌝",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "واو"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"قميل 🌝🌿",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "شكو ماكو"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"غيرك/ج بل كلب ماكو يبعد كلبي😍❤️️",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "شكو"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"كلشي وكلاشي🐸تگـول عبالك احنـة بالشورجـة🌝",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "معزوفه"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"طرطاا طرطاا طرطاا 😂👌",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "زاحفه"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"لو زاحفتلك جان ماكلت زاحفه 🌝🌸",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "حفلش"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"افلش راسك 🤓",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "ضوجه"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"شي اكيد الكبل ماكو 😂 لو بعدك/ج مازاحف/ة 🙊😋",
'reply_to_message_id'=>$message->message_id, 
]);
}
$message_id = $update->message->message_id;
if($text == "غنزدبليي"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"اللهم عذب المدرسين 😢 منهم الاحياء والاموات 😭🔥 اللهم عذب ام الانكليزي 😭💔 وكهربها بلتيار الرئيسي 😇 اللهم عذب ام الرياضيات وحولها الى غساله بطانيات 🙊 اللهم عذب ام الاسلاميه واجعلها بائعة الشاميه 😭🍃 اللهم عذب ام العربي وحولها الى بائعه البلبي اللهم عذب ام الجغرافيه واجعلها كلدجاجه الحافية اللهم عذب ام التاريخ وزحلقها بقشره من البطيخ وارسلها الى المريخ اللهم عذب ام الاحياء واجعلها كل مومياء اللهم عذب المعاون اقتله بلمدرسه بهاون 😂😂😂",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == 'فير'){
$rand = array('سويت هواي شغلات سخيفه بحياتي بس عمري مصحت على واحد وكلتله انجب 😑','نعم حبي 😎','اشتعلو اهل فير شتريد 😠','لك فداك فير حبيبي انت اموووح 💋','بووووووووو 👻 ها ها فزيت شفتك شفتك لا تحلف 😂','هياتني اجيت 🌚❤️','راجع المكتب حبيبي عبالك فير سهل تحجي ويا 😒','باقي ويتمدد 😎','لك دبدل ملابسي اطلع برااااا 😵😡 ناس متستحي','دا اشرب جاي تعال غير وكت 😌','هوه غير يسكت عاد ها شتريد 😷','انت مو اجيت البارحه تغلط عليه ✋🏿😒');
$ra = array_rand($rand ,1);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$rand[$ra],
'reply_to_message_id'=>$message_id
]);
}

if($text == "السلام عليكم" or $text == "السلامو عليكم" or $text == "سلام عليكم" or $text == "سلام الله عليكم" or $text == "السلام  عليكم ورحمة الله" or $text == "السلام عليكم ورحمه الله" or $text == "السلام عليكم ورحمة الله وبركاته" or $text == "السلام عليكم ورحمة الله تعالى وبركاته" or $text == "سلام عليكم كيفكم" ){
    bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"وعليكم السلام اغاتي🌝👋 ",
        'reply_to_message_id'=>$message->message_id,
    ]);
}

if($text == "رابط حذف" or $text == "رابط الحذف" or $text == "اريد احذف الحساب" or $text == "ححذف"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"🌿¦ رابط حذف حـساب التيليگرام ↯
📛¦ لتتندم فڪر قبل ڪلشي  
👨🏽‍⚖️¦ بالتـوفيـق عزيزي ...
🚸 ¦ـ  https://telegram.org/deactivate
",
'reply_to_message_id'=>$message->message_id, 
]);
}


$message = $update->message;
$text = $message->text; 
$chat_id = $message->chat->id;
$new_member = $update->message->new_chat_member;

if($new_member && $new_member->is_bot==false ){
bot('SendMessage', [
'chat_id' => $chat_id,
'text'=>"
<a href='tg://user?id=$new_member->id'>$name</a>

🔖¦ مرحباً عزيزي
🔖¦ نورت المجموعة 
💂🏼‍♀️
",
'reply_to_message_id'=>$message->message_id,
'parse_mode'=>"html"
]);
}

if($text == "السورس"){
     bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"
┇ تنصـيب سـورس آلزعيم  🔎

 ⇓⇓⇓ 

`git clone https://github.com/TH3BS/BOSS.git ;cd BOSS;chmod +x ins;./ins`

» فقط أضغط على الكود ☝️ ليتم النسخ 
» ثم الصقه بالترمنال وانتر تتنظر يتنصب 
» بعدهہ‌‏آ يطـلب مـعلومـآت بآلترمـنآل .
» تدخل مـعلومـآتگ مـن توگن ومـعرفگ 
» وسـوف يعمـل آلبوت بالسـگرين تلقآئيآ ...

💭┇ قناة السورس ☜ @dev_start",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }

if($text == "الساعة" or $text == "الزمن" or $text == "الساعه" or $text == "الوقت"){
bot ('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"📆¦ الوقت •⊱ $date $aa ⊰•
",
'parse_mode'=>'MarkDown', 'disable_web_page_preview'=>true, 'reply_to_message_id'=>$message->message_id,
]);
}

if(preg_match('/^(زخرف) (.*)/s', $text, $mtch)){
$mh = file_get_contents('http://www.api-hany.cf/zgrfa/get.php?text=' . urlencode($mtch[2]));
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"$mh\n تم زخرفه : $mtch[2] يمكنك الضغط ع الاسم ليتم نسخه",
'parse_mode'=>'MarkDown','reply_to_message_id'=>$msg,
]);
}
$mid = $message->message_id;

if($message->new_chat_members){
bot('DeleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$mid
]);
}

if($text == "هه" or $text =="ههه" or $text == "هههه" or $text =="ههههه" or $text=="هههههه" or $text== ".◦° =D °◦н̲h̲нн̲h̲нн̲h н̲h̲нн̲h̲нн̲h◦° =D °◦." or $text== "=D (..هَّـَِـَِہْہْـَِہْـَِہْـَِہْہْـَِـَِ[X_X]ـَِـَِہْہْـَِہْـَِہْـَِہْہْـَِـَِاٌاُاّيٌَ..) =))" or $text== "=D {..هہہہہہہـ( =)) )ـہہہہہہہٱٱٱي..} (y) =D" or $text== "=)) «--- فآاآطِسّ :D ضِحّگـٌے---» =)) " or $text== "هَْـٍََْ =)) ہٌهہٌ{ گــفگ يآلخبل} ہٌهـٍََْ =)) ـٍََْاْاْي" or $text== "ھَھٍھَھٍھَھٍـٌ( =)) )ـّھٍھَھٍھَھٍٱإيّےٌ "){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"⌣{دِْۈۈۈۈ/يّارٌبْ_مـْو_يـّوّمٌ/ۈۈۈۈمْ}⌣",
'reply_to_message_id'=>$message->message_id, 
]);
}

$rep = $message->reply_to_message;
$rep_msg = $rep->message_id; 
if($you == "creator" or $you == "administrator" or $from_id == $sudo)
if($rep && $text=="تثبيت"){
if($you == "creator" || $you == "administrator")
bot("pinChatMessage",[
"chat_id"=>$chat_id,
"message_id"=>$rep_msg
]);
bot('sendmessage',[
  'chat_id'=>$chat_id,
  'text'=>" 🙋🏼‍♂️¦ أهلا عزيزي  
📌¦ تم تثبيت الرساله
✓",
'reply_to_message_id'=>$message->message_id,

  ]);
}

if($you == "creator" or $you == "administrator" or $from_id == $sudo)
if($text == "رفع الادمنيه"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"📊┇ تم رفع ادمنيه المجموعه في البوت",
'reply_to_message_id'=>$message->message_id, 
]);
}

  if($text=="رفع الادمنيه" and  $you == "member" and $id !== $sudo){
     bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"📡¦ هذا الامر يخص الادمنيه فقط  🚶",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }

$admin4 = file_get_contents("http://www.api-hany.cf/admin.php?Token=".API_KEY."&chat_=".$chat_id);
if($text == "الادمنيه"){
bot('sendMessage',['chat_id'=>$chat_id,'text'=>"$admin4",'parse_mode'=>markdown,'disable_web_page_preview'=>true,
]);
}

$reply = $message->reply_to_message;
if($text == 'ضع صورة' and $reply->photo != null){
    bot('setChatPhoto',['chat_id'=>$chat_id,'photo'=>$reply->photo[2]->file_id]);
    bot('sendMessage',['chat_id'=>$chat_id,'text'=>"✅┇ تم وضع صورة للمجموعة بنجاح

✔️ ",'reply_to_message_id'=>$reply->message_id]);
}
if($text == 'حذف الصورة'){
    bot('deleteChatPhoto',['chat_id'=>$chat_id]);
    bot('sendMessage',['chat_id'=>$chat_id,'text'=>"❌┇ تم حذف صورة المجموعة بنجاح

❌ ",'reply_to_message_id'=>$message->message_id]);
}

$chat_id = $message->chat->id;
$id = $message->from->id;
$message_id = $message->message_id;

$SAEED = str_replace("غادر ","$SAEED",$text);
if($text=="غادر $SAEED"){
$get = file_get_contents("http://api.telegram.org/bot$API_KEY/getChat?chat_id=$SAEED"); 
$js = json_decode($get);
$res = $js->result;$id = $res->id; 
bot('sendmessage',[
'chat_id'=>$id,
'text'=>"عذرا لا يمكنني حماية هذا المجموعة",
]);
bot('leaveChat',[
'chat_id'=>$id,
]);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"تم الخروج من المجموعة
—
ID : $id",
'reply_to_message_id'=>$message_id,
]);
}

$getlink = file_get_contents("https://api.telegram.org/bot$API_KEY/exportChatInviteLink?chat_id=$chat_id");
$jsonlink = json_decode($getlink, true);
$getlink1 = $jsonlink['result'];
$title = $message->chat->title;
$from_id == $message->from->id;

if($text=="اطردني" and  $you == "member" and $id !== $sudo){
    bot('KickChatMember',[
        'chat_id'=>$chat_id,
        'user_id'=>$from_id,
        ]);
        bot('UnbanChatmember',[
            'chat_id'=>$chat_id,
            'user_id'=>$from_id,
            ]);
    bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"🚸| لقد تم طردك بنجاح , ارسلت لك رابط المجموعه في الخاص اذا وصلت لك تستطيع الرجوع متى شئت🏻",
        'reply_to_message_id'=>$message->message_id,
]);
bot('sendmessage',[
    'chat_id'=>$from_id,
    'text'=>"
👨🏼‍⚕️| اهلا عزيزي , لقد تم طردك من المجموعه بامر منك 
🔖| اذا كان هذا بالخطأ او اردت الرجوع للمجموعه 

🔖¦فهذا رابط المجموعه 💯

🌿¦ $getlink1 :",

'parse_mode'=>"HTML",
]);
}

if($you == "creator" or $you == "administrator" or $from_id == $sudo)
if($text == "اطردني"){
    bot('KickChatMember',[
        'chat_id'=>$chat_id,
        'user_id'=>$from_id,
        ]);
        bot('UnbanChatmember',[
            'chat_id'=>$chat_id,
            'user_id'=>$from_id,
            ]);
    bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"📛¦ لا استطيع طرد المدراء والادمنيه والمنشئين  
🚶",
        'reply_to_message_id'=>$message->message_id,
]);
bot('sendmessage',[
    'chat_id'=>$from_id,
    'text'=>"",
'parse_mode'=>"HTML",
]);
}
$sudo = 5030677912;
if($text == 'بووتي' and $chat_id ==$sudo){ 
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>" نعم حبيبي المطور 🌝❤ ",
]);
}

  if($text=="حظر عام" and  $you == "member" and $id !== $sudo){
     bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"📛¦ هذا الامر يخص {المطور الاساسي} فقط  
🚶",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }

  if($text=="تثبيت" and  $you == "member" and $id !== $sudo){
     bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"📛¦ هذا الامر يخص {الادمن,المدير,المنشئ,المطور} فقط  
🚶",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }

if($you == "creator" or $you == "administrator" or $from_id == $sudo)
if($text == "م المطور"){
     bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"🔅¦ للمطور الاساسي فقط  🎖",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }

if($you == "creator" or $you == "administrator" or $from_id == $sudo)
if($text == "اذاعه"){
     bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"📛¦ هذا الامر يخص {المطور} فقط  
🚶",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }

  if($text=="حظر" and  $you == "member" and $id !== $sudo){
     bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"📛¦ هذا الامر يخص {الادمن,المدير,المنشئ,المطور} فقط  
🚶",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }

  if($text=="الغاء الحظر" and  $you == "member" and $id !== $sudo){
     bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"📛¦ هذا الامر يخص {الادمن,المدير,المنشئ,المطور} فقط  
🚶",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }

  if($text=="طرد" and  $you == "member" and $id !== $sudo){
     bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"📛¦ هذا الامر يخص {الادمن,المدير,المنشئ,المطور} فقط  
🚶",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }

  if($text=="تحديث ♻" and  $you == "member" and $id !== $sudo){
     bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"📛¦ هذا الامر يخص {المطور الاساسي} فقط  
🚶",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }

if($you == "creator" or $you == "administrator" or $from_id == $sudo)
if($text == "تحديث ♻"){
     bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"📛¦ هذا الامر يخص {المطور الاساسي} فقط  
🚶",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }

if($text=="ضع اسم $aname" and $you == "member" and $from_id != $sudo){ 
$aname = str_replace("ضع اسم ", "$aname", $text);
     bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"📛¦ هذا الامر يخص {الادمن,المدير,المنشئ,المطور} فقط  
🚶",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }

if($you == "creator" or $you == "administrator" or $from_id == $sudo)
  if($text == "/kool" or $text == "تنزيل ادمن"){
      bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"👤¦ العضو » @$re_user 
🎫¦ الايدي » ( $re_id )
🛠¦ تمت  تنزيل الادمن 
✓️",
  'reply_to_message_id'=>$mid
      ]);
      bot('koolChatMember',[
          'chat_id'=>$chat_id,
          'user_id'=>$re_id
        ]);
  }

if($text=="/kool" and  $you == "member" and $id !== $sudo){
     bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"📛¦ هذا الامر يخص {الادمن,المدير,المنشئ,المطور} فقط  
🚶",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }

if($text=="تنزيل ادمن" and  $you == "member" and $id !== $sudo){
     bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"📛¦ هذا الامر يخص {الادمن,المدير,المنشئ,المطور} فقط  
🚶",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }

$reply = $update->message->reply_to_message;
$re_id      = $update->message->reply_to_message->from->id;
$API_KEY = API_KEY;
$get = file_get_contents("https://api.telegram.org/bot$API_KEY/getChatMember?chat_id=$chat_id&user_id=".$re_id);
$info = json_decode($get, true);
$re_rou = $info['result']['status'];
$namesaeedh = $update->message->reply_to_message->from->first_name;
$usersaeedh = $update->message->reply_to_message->from->username;
$idsaeedh = $update->message->reply_to_message->from->id;


if($reply and $text ==  "كشف"){
if($re_rou == "creator")
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"🤵🏼¦ الاسم » { $namesaeedh }
🎫¦ الايدي » { $idsaeedh } 
🎟¦ المعرف »{ @$usersaeedh }
📮¦ الرتبه » المنشىء 👷
🕵🏻️‍♀️¦ نوع الكشف » بالرد
➖",
'reply_to_message_id'=>$message->message_id,
]);
}
if($reply and $text ==  "كشف"){
if($re_rou == "administrator")
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"🤵🏼¦ الاسم » { $namesaeedh }
🎫¦ الايدي » { $idsaeedh } 
🎟¦ المعرف »{ @$usersaeedh }
📮¦ الرتبه » ادمن في البوت 👨🏼‍🎓
🕵🏻️‍♀️¦ نوع الكشف » بالرد
➖",
'reply_to_message_id'=>$message->message_id,
]);
}
if($reply and $text == "كشف"){
if($re_rou == "member")
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"🤵🏼¦ الاسم » { $namesaeedh }
🎫¦ الايدي » { $idsaeedh  }
🎟¦ المعرف »{ @$usersaeedh }
📮¦ الرتبه » فقط عضو 🙍🏼‍♂️
🕵?️‍♀️¦ نوع الكشف » بالرد
➖",
'reply_to_message_id'=>$message->message_id,
]);
}
if($reply and $text == "كشف"){
if($re_rou == "$sudo")
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"🤵🏼¦ الاسم » { $namesaeedh }
🎫¦ الايدي » { $idsaeedh  }
🎟¦ المعرف »{ @$usersaeedh }
📮¦ الرتبه » مطور اساسي 👨🏻‍⚕
🕵🏻️‍♀️¦ نوع الكشف » بالرد
➖",
'reply_to_message_id'=>$message->message_id,
]);
}


if($text == "هجري"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
 https://mrdgapi.ga/api/date.php",
'reply_to_message_id'=>$message_id,
'parse_mode'=>"markdown"
]);
}


 $user          = $update->message->from->username;
$from_id     = $message->from->id;
$from_user = $message->from->username;
$sudo = 5030677912; // add your id
$get             = file_get_contents("https://api.telegram.org/bot$API_KEY/getChatMember?chat_id=$chat_id&user_id=".$from_id);
$info            = json_decode($get, true);
$JJ117        = $info['result']['status'];
$photo = "https://t.me/$user";
if($text=="ايدي" and $from_id == $sudo and $msgs['msgs'][$chat_id][$from_id] > 3000){
$iBadlz = array(
"خوش متفاعل 🌝",
"متفاعل ✨",
"اسطورة التفاعل 🌈ء",
"الله مال تفاعل ⚜",
"نايس التفاعل 💘ء",
'قوي جدا ⚡️ ', 
 'قمه التفاعل ✨ ', 
 'اقوى تفاعل 🔥 ',
);
$JJ119 = array_rand($iBadlz,1);
bot("sendPhoto",[
'chat_id'=>$chat_id,
"photo"=>$photo,
'caption'=>"
👤¦ أســمـك •⊱ { $name } ⊰•
🎟¦ ايديــك •⊱ { $from_id} ⊰•
🎫¦ مـعرفك •⊱ @$from_user ⊰•
📡¦ رتبتـــك •⊱ مطور اساسي 👨🏻‍✈️ ⊰•
⭐️¦ تفاعـلك •⊱ $iBadlz[$JJ119] ⊰•
💬¦ رسائلك •⊱ { ".$msgs['msgs'][$chat_id][$from_id]." } ⊰•
➖;

",
"parse_mode"=>"MARKDOWN",
'message_id'=>$message->message_id,
'reply_to_message_id' =>$message->message_id, 
]);
}elseif($text=="ايدي" and $from_id == $sudo and $msgs['msgs'][$chat_id][$from_id] >500){
$iBadlz = array(
 'متوسط 🎋 ', 
 'متفاعل 💐',
);
$JJ119 = array_rand($iBadlz,1);
bot("sendPhoto",[
'chat_id'=>$chat_id,
"photo"=>$photo,
'caption'=>"
👤¦ أســمـك •⊱ { $name } ⊰•
🎟¦ ايديــك •⊱ { $from_id } ⊰•
🎫¦ مـعرفك •⊱ @$from_user ⊰•
📡¦ رتبتـــك •⊱ مطور اساسي 👨🏻‍✈️ ⊰•
⭐️¦ تفاعـلك •⊱ $iBadlz[$JJ119] ⊰•
💬¦ رسائلك •⊱ { ".$msgs['msgs'][$chat_id][$from_id]." } ⊰•
➖
",
"parse_mode"=>"MARKDOWN",
'message_id'=>$message->message_id,
'reply_to_message_id' =>$message->message_id, 
]);
}elseif($text=="ايدي" and $from_id == $sudo and $msgs['msgs'][$chat_id][$from_id] >1){
$iBadlz = array(
 'غير متفاعل ✘',
 'ضعيف 🥀 ',
);
$JJ119 = array_rand($iBadlz,1);
bot("sendPhoto",[
'chat_id'=>$chat_id,
"photo"=>$photo,
'caption'=>"
👤¦ أســمـك •⊱ { $name } ⊰•
🎟¦ ايديــك •⊱ { $from_id} ⊰•
🎫¦ مـعرفك •⊱ @$from_user ⊰•
📡¦ رتبتـــك •⊱ مطور اساسي 👨🏻‍✈️ ⊰•
⭐️¦ تفاعـلك  $iBadlz[$JJ119] 
💬¦ رسائلك •⊱ { ".$msgs['msgs'][$chat_id][$from_id]." } ⊰•
➖
",
"parse_mode"=>"MARKDOWN",
'message_id'=>$message->message_id,
'reply_to_message_id' =>$message->message_id, 
]);
}elseif($text=="ايدي" and $from_id == $sudo){
 bot("sendmessage",[
 'chat_id'=>$chat_id,
 'text'=>"
👤¦ أســمـك •⊱ { $name } ⊰•
🎟¦ ايديــك •⊱ { $from_id} ⊰•
🎫¦ مـعرفك •⊱ @$from_user ⊰•
📡¦ رتبتـــك •⊱ مطور اساسي 👨🏻‍✈️ ⊰•
⭐️¦ تفاعـلك •⊱ $iBadlz[$JJ119] ⊰•
💬¦ رسائلك •⊱ { ".$msgs['msgs'][$chat_id][$from_id]." } ⊰•
➖
• لاتمتلك صوره لحسابك ،🌈ء
",
"parse_mode"=>"MARKDOWN",
 ]);
 }
if($text=="ايدي" and $JJ117 == "creator" and $from_id != $sudo and $msgs['msgs'][$chat_id][$from_id] > 3000){
	$iBadlz = array(
"خوش متفاعل 🌝",
"متفاعل ✨",
"اسطورة التفاعل 🌈ء",
"الله مال تفاعل ⚜",
"نايس التفاعل 💘ء",
'قوي جدا ⚡️ ', 
 'قمه التفاعل ✨ ', 
 'اقوى تفاعل 🔥 ',
);
$JJ119 = array_rand($iBadlz,1);
bot("sendPhoto",[
'chat_id'=>$chat_id,
"photo"=>$photo,
'caption'=>"
👤¦ أســمـك •⊱ { $name } ⊰•
🎟¦ ايديــك •⊱ { $from_id} ⊰•
🎫¦ مـعرفك •⊱ @$from_user ⊰•
📡¦ رتبتـــك •⊱ منشئ 👷🏻‍♂ ⊰•
⭐️¦ تفاعـلك •⊱ $iBadlz[$JJ119] ⊰•
💬¦ رسائلك •⊱ { ".$msgs['msgs'][$chat_id][$from_id]." } ⊰•
➖
",
"parse_mode"=>"MARKDOWN",
'message_id'=>$message->message_id,
'reply_to_message_id' =>$message->message_id, 
]);
}elseif($text=="ايدي" and $JJ117 == "creator" and $from_id != $sudo and $msgs['msgs'][$chat_id][$from_id] > 500){
	$iBadlz = array(
 'متوسط 🎋 ', 
 'متفاعل 💐',
);
$JJ119 = array_rand($iBadlz,1);
bot("sendPhoto",[
'chat_id'=>$chat_id,
"photo"=>$photo,
'caption'=>"
👤¦ أســمـك •⊱ { $name } ⊰•
🎟¦ ايديــك •⊱ { $from_id} 
🎫¦ مـعرفك •⊱ @$from_user ⊰•
📡¦ رتبتـــك •⊱ منشئ 👷🏻‍♂ ⊰•
⭐️¦ تفاعـلك •⊱ $iBadlz[$JJ119] ⊰•
💬¦ رسائلك •⊱ { ".$msgs['msgs'][$chat_id][$from_id]." } ⊰•
➖
",
"parse_mode"=>"MARKDOWN",
'message_id'=>$message->message_id,
'reply_to_message_id' =>$message->message_id, 
]);
}elseif($text=="ايدي" and $JJ117 == "creator" and $from_id != $sudo and $msgs['msgs'][$chat_id][$from_id] > 1){
	$iBadlz = array(
 'غير متفاعل ✘',
 'ضعيف 🥀 ',
);
$JJ119 = array_rand($iBadlz,1);
bot("sendPhoto",[
'chat_id'=>$chat_id,
"photo"=>$photo,
'caption'=>"
👤¦ أســمـك•⊱ { $name } ⊰•
🎟¦ ايديــك •⊱ { $from_id} ⊰•
🎫¦ مـعرفك •⊱ @$from_user ⊰•
📡¦ رتبتـــك •⊱ منشئ 👷🏻‍♂ ⊰•
⭐️¦ تفاعـلك •⊱ $iBadlz[$JJ119] ⊰•
💬¦ رسائلك •⊱ { ".$msgs['msgs'][$chat_id][$from_id]." } ⊰•
➖
",
"parse_mode"=>"MARKDOWN",
'message_id'=>$message->message_id,
'reply_to_message_id' =>$message->message_id, 
]);
}elseif($text=="ايدي"and $JJ117 == "administrator" and $from_id != $sudo and $msgs['msgs'][$chat_id][$from_id] > 3000){
	$iBadlz = array(
"خوش متفاعل 🌝",
"متفاعل ✨",
"اسطورة التفاعل 🌈ء",
"الله مال تفاعل ⚜",
"نايس التفاعل 💘ء",
'قوي جدا ⚡️ ', 
 'قمه التفاعل ✨ ', 
 'اقوى تفاعل 🔥 ',
);
$JJ119 = array_rand($iBadlz,1);
bot("sendPhoto",[
'chat_id'=>$chat_id,
"photo"=>$photo,
'caption'=>"
👤¦ أســمـك •⊱ { $name } ⊰•
🎟¦ ايديــك •⊱ { $from_id } ⊰•
🎫¦ مـعرفك •⊱ @$from_user ⊰•
📡¦ رتبتـــك •⊱ ادمن في البوت 👨🏻‍🎓 ⊰•
⭐️¦ تفاعـلك •⊱ $iBadlz[$JJ119] ⊰•
💬¦ رسائلك •⊱ { ".$msgs['msgs'][$chat_id][$from_id]." } ⊰•
➖
",
"parse_mode"=>"MARKDOWN",
'message_id'=>$message->message_id,
'reply_to_message_id' =>$message->message_id, 
]);
}elseif($text=="ايدي"and $JJ117 == "administrator" and $from_id != $sudo and $msgs['msgs'][$chat_id][$from_id] > 500){
	$iBadlz = array(
 'متوسط 🎋 ', 
 'متفاعل 💐',
);
$JJ119 = array_rand($iBadlz,1);
bot("sendPhoto",[
'chat_id'=>$chat_id,
"photo"=>$photo,
'caption'=>"
👤¦ أســمـك •⊱ { $name } ⊰•
🎟¦ ايديــك •⊱ { $from_id} ⊰•
🎫¦ مـعرفك •⊱ @$from_user ⊰•
📡¦ رتبتـــك •⊱ ادمن في البوت 👨🏻‍🎓 ⊰•
⭐️¦ تفاعـلك •⊱ $iBadlz[$JJ119] ⊰•
💬¦ رسائلك •⊱ { ".$msgs['msgs'][$chat_id][$from_id]." } ⊰•
➖
",
"parse_mode"=>"MARKDOWN",
'message_id'=>$message->message_id,
'reply_to_message_id' =>$message->message_id, 
]);
}elseif($text=="ايدي"and $JJ117 == "administrator" and $from_id != $sudo and $msgs['msgs'][$chat_id][$from_id] > 1){
	$iBadlz = array(
 'غير متفاعل ✘',
 'ضعيف 🥀 ',
);
$JJ119 = array_rand($iBadlz,1);
bot("sendPhoto",[
'chat_id'=>$chat_id,
"photo"=>$photo,
'caption'=>"
👤¦ أســمـك •⊱ { $name } ⊰•
🎟¦ ايديــك •⊱ { $from_id} ⊰•
🎫¦ مـعرفك •⊱ @$from_user ⊰•
📡¦ رتبتـــك •⊱ ادمن في البوت 👨🏻‍🎓 ⊰•
⭐️¦ تفاعـلك •⊱ $iBadlz[$JJ119] ⊰•
💬¦ رسائلك •⊱ { ".$msgs['msgs'][$chat_id][$from_id]." } ⊰•
➖;
",
"parse_mode"=>"MARKDOWN",
'message_id'=>$message->message_id,
'reply_to_message_id' =>$message->message_id, 
]);
}elseif($text=="ايدي"and $JJ117 == "member" and $msgs['msgs'][$chat_id][$from_id] > 300){
	$iBadlz = array(
"خوش متفاعل 🌝",
"متفاعل ✨",
"اسطورة التفاعل 🌈ء",
"الله مال تفاعل ⚜",
"نايس التفاعل 💘ء",
'قوي جدا ⚡️ ', 
 'قمه التفاعل ✨ ', 
 'اقوى تفاعل 🔥 ',
);
$JJ119 = array_rand($iBadlz,1);
bot("sendPhoto",[
'chat_id'=>$chat_id,
"photo"=>$photo,
'caption'=>"
👤¦ أســمـك •⊱ { $name } ⊰•
🎟¦ ايديــك •⊱ { $from_id} ⊰•
🎫¦ مـعرفك •⊱ @$from_user ⊰•
📡¦ رتبتـــك •⊱ فقط عضو 🙍🏻‍♂ ⊰•
⭐️¦ تفاعـلك •⊱ $iBadlz[$JJ119] ⊰•
💬¦ رسائلك •⊱ { ".$msgs['msgs'][$chat_id][$from_id]." } ⊰•
➖
",
"parse_mode"=>"MARKDOWN",
'message_id'=>$message->message_id,
'reply_to_message_id' =>$message->message_id, 
]);
}elseif($text=="ايدي"and $JJ117 == "member" and $msgs['msgs'][$chat_id][$from_id] > 500){
	$iBadlz = array(
 'متوسط 🎋 ', 
 'متفاعل 💐',
);
$JJ119 = array_rand($iBadlz,1);
bot("sendPhoto",[
'chat_id'=>$chat_id,
"photo"=>$photo,
'caption'=>"
👤¦ أســمـك •⊱ { $name } ⊰•
🎟¦ ايديــك •⊱ { $from_id} ⊰•
🎫¦ مـعرفك •⊱ @$from_user ⊰•
📡¦ رتبتـــك •⊱ فقط عضو 🙍🏻‍♂ ⊰•
⭐️¦ تفاعـلك •⊱ $iBadlz[$JJ119] ⊰•
💬¦ رسائلك •⊱ { ".$msgs['msgs'][$chat_id][$from_id]." } ⊰•
➖
",
"parse_mode"=>"MARKDOWN",
'message_id'=>$message->message_id,
'reply_to_message_id' =>$message->message_id, 
]);
}elseif($text=="ايدي"and $JJ117 == "member" and $msgs['msgs'][$chat_id][$from_id] > 1){
	$iBadlz = array(
 'غير متفاعل ✘',
 'ضعيف 🥀 ',
);
$JJ119 = array_rand($iBadlz,1);
bot("sendPhoto",[
'chat_id'=>$chat_id,
"photo"=>$photo,
'caption'=>"
 👤¦ أســمـك •⊱ { $name } ⊰•
🎟¦ ايديــك •⊱ { $from_id} ⊰•
🎫¦ مـعرفك •⊱ @$from_user ⊰•
📡¦ رتبتـــك •⊱ فقط عضو 🙍🏻‍♂ ⊰•
⭐️¦ تفاعـلك •⊱ $iBadlz[$JJ119] ⊰•
💬¦ رسائلك •⊱ { ".$msgs['msgs'][$chat_id][$from_id]." } ⊰•
➖
",
"parse_mode"=>"MARKDOWN",
'message_id'=>$message->message_id,
'reply_to_message_id' =>$message->message_id, 
]);
}

$reply = $update->message->reply_to_message;
$re_id      = $update->message->reply_to_message->from->id;
$API_KEY = API_KEY;
$get = file_get_contents("https://api.telegram.org/bot$API_KEY/getChatMember?chat_id=$chat_id&user_id=".$re_id);
$info = json_decode($get, true);
$re_rou = $info['result']['status'];
$namesaeedh = $update->message->reply_to_message->from->first_name;
$usersaeedh = $update->message->reply_to_message->from->username;
$idsaeedh = $update->message->reply_to_message->from->id;


if($reply and $text ==  "الرتبه"){
if($re_rou == "creator")
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>" 👤¦ العضو » @$usersaeedh
ـ⠀•⊱ { رتـبـه الشخص } ⊰•

🤖¦ في البوت » منشئ 
💬¦ في المجموعه » منشئ .
✓
",
'reply_to_message_id'=>$message->message_id,
]);
}
if($reply and $text ==  "الرتبه"){
if($re_rou == "administrator")

bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>" 👤¦ العضو » @$usersaeedh
ـ⠀•⊱ { رتـبـه الشخص } ⊰•

🤖¦ في البوت » ادمن 
💬¦ في المجموعه » مشرف 
✓
",
'reply_to_message_id'=>$message->message_id,
]);
}
if($reply and $text == "الرتبه"){
if($re_rou == "member")
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>" 👤¦ العضو » @$usersaeedh
ـ⠀•⊱ { رتـبـه الشخص } ⊰•

🤖¦ في البوت » عضو 
💬¦ في المجموعه » عضو .!
✓
",
'reply_to_message_id'=>$message->message_id,
]);
}


$SAiED = $message->message_id;
$new = $message->new_chat_member; 
$userbot = $new->username;
$idbot = $new->id;
if($you == "creator" or $you == "administrator" or $from_id == $sudo)
if($text == "قفل البوتات بالطرد" or $text == "قفل بوتات بالطرد"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم قفل البوتات بالطرد (مع طرد الي ضافه) 
✓",
'reply_to_message_id'=>$SAiED,
'parse_mode'=>"MarkDown",
]);
file_put_contents("SAIED$chat_id.txt", "طرد");
}
if($you == "creator" or $you == "administrator" or $from_id == $sudo)
if($text == "فتح البوتات بالطرد" or $text == "فتح بوتات بالطرد"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"🙋🏼‍♂️¦ أهلا عزيزي 
📡¦ تم فتح البوتات بالطرد  
✓",
'reply_to_message_id'=>$SAiED,
'parse_mode'=>"MarkDown",
]);
unlink("SAIED$chat_id.txt");
}
$SAIED = file_get_contents("SAIED$chat_id.txt");
 if($new and preg_match('/^(.*)([Bb][Oo][Tt])/s',$userbot) and $SAIED == "طرد"){
bot('DeleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$SAiED
]);
bot('KickChatMember',[
'chat_id'=>$chat_id,
'user_id'=>$idbot,
]);
bot('KickChatMember',[
'chat_id'=>$chat_id,
'user_id'=>$id,
]);
}
if($text=="قفل البوتات بالطرد" and  $you == "member" and $id !== $sudo){
     bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"📡¦ هذا الامر يخص الادمنيه فقط  🚶",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }



$dev_start = "https://t.me/dev_start"; 
if($text == "هلو"){ 
$dev_Yemen = array( 
"[  هلوات]($dev_start)", 
"[ هلا والله ]($dev_start)", 
"[ هلا حبي ]($dev_start)", 
"[ هلاوات نورتنا]($dev_start)", 
"[  لا هلا بيك😐💔]($dev_start)", 
"[ هلا بلكمر 🌝]($dev_start)", 
"[ هلا بلناقص😑]($dev_start)",); 
$YemenAndroid1 = array_rand($dev_Yemen, 1); 
bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'parse_mode'=>'MarkDown', 
'disable_web_page_preview'=>true, 
"text"=>$dev_Yemen[$YemenAndroid1], 
'reply_to_message_id'=>$message->message_id 
]); 
}

$ch = '@dev_start'; // معرف قناتك
$dev_i   = $message->from->id; 
if($text == '/add' or $text == '/تفعيل'or $text == 'add' or $text == 'تفعيل'){$from_id = $message->from->id;
$join = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$ch&user_id=".$from_id);
if($message && (strpos($join,'"status":"left"') or strpos($join,'"Bad Request: USER_ID_INVALID"') or strpos($join,'"status":"kicked"'))!== false){
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"🚸| آشـترگ بآلقنآ‌‏هہ آولآ $ch 
🔛| ثم آرجع آرسـل تفعيل .
",
'reply_to_message_id' =>$message->message_id, 
]);return false;}
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"🎗¦ المجموعه بالتأكيد ✓️ تم تفعيلها",
'reply_to_message_id' =>$message->message_id, 
]);
}


$update     = json_decode(file_get_contents('php://input'));
$message = $update->message;
$text           = $message->text;
$chat_id     = $message->chat->id;
$user          = $update->message->from->username;
$sudo         = 5030677912;
$from_id     = $message->from->id;
$from_user = $message->from->username;
$first_name = $update->message->from->first_name;
$get             = file_get_contents("https://api.telegram.org/bot$API_KEY/getChatMember?chat_id=$chat_id&user_id=".$from_id);
$info            = json_decode($get, true);
$JJ117        = $info['result']['status'];
$mid = $message->message_id;
$iBadlz = $update->message->reply_to_message->from->id;
$TlllllT = $update->message->reply_to_message->from->username;
mkdir("miss");
mkdir("miss/$chat_id");

$reply = $message->reply_to_message->from->id;
$iBadlz = $update->message->reply_to_message->from->id;
$get_miss = file_get_contents("miss/$chat_id/miss.txt");
$miss = explode("\n",$get_miss);
if($text == "كتم" and $reply and !in_array($iBadlz,$miss) and $from_id == $sudo || $JJ117 =="administrator" || $JJ117 == "creator"){
file_put_contents("miss/$chat_id/miss.txt",$iBadlz ."\n",FILE_APPEND);
bot("sendmessage",[
'chat_id'=>$chat_id,
'text'=>"
👤¦ العضو » @$TlllllT
🎫¦ الايدي » ( $iBadlz )
🛠¦ تم كتمه
✓
",
'reply_to_message_id'=>$mid,
]);
}if($text == "كتم" and $reply and in_array($iBadlz,$miss) and $from_id == $sudo || $JJ117 =="administrator" || $JJ117 == "creator"){
file_put_contents("miss/$chat_id/miss.txt",$iBadlz ."\n",FILE_APPEND);
bot("sendmessage",[
'chat_id'=>$chat_id,
'text'=>"👤¦ العضو » @$TlllllT
🎫¦ الايدي » ( $iBadlz )
🛠¦ تم بالتأكيد كتمه  
✓",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$mid,
]);
}elseif($text == "كتم" and $reply and $JJ117 == "member"){
bot("sendmessage",[
'chat_id'=>$chat_id,
'text'=>"📛¦ هذا الامر يخص {الادمن,المدير,المنشئ,المطور} فقط  
🚶",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$mid,
]);
}

if($text and in_array($from_id, $miss)){
bot("deletemessage",[
'chat_id'=>$chat_id,
'message_id'=>$mid,
]);
}

if($text == "الغاء كتم" || $text == "الغاء الكتم" and $reply and in_array($iBadlz,$miss) and $from_id == $sudo || $JJ117 =="administrator" || $JJ117 == "creator"){
$str = str_replace($iBadlz," ","\n" . $get_miss);
file_put_contents("miss/$chat_id/miss.txt",$str);
bot("sendmessage",[
'chat_id'=>$chat_id,
'text'=>"
👤¦ العضو » @$TlllllT
🎫¦ الايدي » ( $iBadlz )
🛠¦ تم الغاء كتمه
✓
",
'reply_to_message_id'=>$mid,
]);
}elseif($text == "الغاء كتم" || $text == "الغاء الكتم" and $reply and !in_array($iBadlz,$miss) and $from_id == $sudo || $JJ117 =="administrator" || $JJ117 == "creator"){
bot("sendmessage",[
'chat_id'=>$chat_id,
'text'=>"👤¦ العضو » @$TlllllT
🎫¦ الايدي » ( $iBadlz )
🛠¦ تم بالتأكيد الغاء كتمه  
✓",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$mid,
]);
}elseif($text == "الغاء كتم" || $text == "الغاء االكتم" and $reply and $JJ117 == "member"){
bot("sendmessage",[
'chat_id'=>$chat_id,
'text'=>"📛¦ هذا الامر يخص {الادمن,المدير,المنشئ,المطور} فقط  
🚶",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$mid,
]);
}





if($text == "مسح قائمه المكتومين" || $text == "مسح المكتومين" and $from_id == $sudo || $JJ117 =="administrator" || $JJ117 == "creator"){
$str = str_replace(" ", $get_miss);
file_put_contents("miss/$chat_id/miss.txt",$str);
bot("sendmessage",[
'chat_id'=>$chat_id,
'text'=>"🙋🏼‍♂️¦ أهلا عزيزي
📛¦  تم مسح المكتومين  
✓ ",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$mid,
]);
}elseif($text == "مسح قائمه المكتومين" || $text == "مسح المكتومين" and $JJ117 == "member"){
bot("sendmessage",[
'chat_id'=>$chat_id,
'text'=>"📛¦ هذا الامر يخص {الادمن,المدير,المنشئ,المطور} فقط  
🚶",
'reply_to_message_id'=>$mid,
'parse_mode'=>"MARKDOWN",
]);
}
?> 
