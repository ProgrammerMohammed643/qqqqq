<?php
$TOKEN = '7498694042:AAHfDRfVZq8p3zC0Bfc6pnyRi_-rF13-lgw';
$admin = 6264668799; #ايديك تلي
define("API_KEY", $TOKEN); 
function bot($method, $datas = [])
{
  $url = "https://api.telegram.org/bot" . API_KEY . "/" . $method;
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_HEADER, true);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $datas);
  $res = curl_exec($ch);
  if (curl_error($ch)) {
    var_dump(curl_error($ch));
  } else {
    return json_decode($res);
  }
}
mkdir('data');
if (!file_exists('data/users.json')) {
  file_put_contents('data/users.json','');
}
if (!file_exists('data/emails.json')) {
  file_put_contents('data/emails.json','');
}
if (!file_exists('data/command.json')) {
  file_put_contents('data/command.json','');
}
function SaveData($file,$array){
  file_put_contents($file,json_encode($array));
}
$array1 = json_decode(file_get_contents('data/users.json'),true);
$array2 = json_decode(file_get_contents('data/emails.json'),true);
$array3 = json_decode(file_get_contents('data/command.json'),true);

$update = json_decode(file_get_contents('php://input'));
$message= $update->message;
$text = $message->text;
$chat_id= $message->chat->id;
$name = $message->from->first_name;
$user = $message->from->username;
$message_id = $update->message->message_id;
$from_id = $update->message->from->id;
$a = strtolower($text);
$message = $update->message;
$chat_id = $message->chat->id;
$text = $message->text;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id = $update->callback_query->message->message_id;
$data = $update->callback_query->data;
$from_id = $message->from->id;

$msg = file_get_contents("msg.php");
$forward = file_get_contents("forward.php");
$midea = file_get_contents("midea.php");
$inlin = file_get_contents("inlin.php");
$photoi = file_get_contents("photoi.php");
$upq = file_get_contents("up.php");
$skor = file_get_contents("skor.php");

mkdir("data");

$channel = file_get_contents("link.php");
$link = file_get_contents("link2.php");
$ch = "$channel"; #لا تلعب هنا
$join = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$ch&user_id=".$from_id);
if($message && (strpos($join,'"status":"left"') or strpos($join,'"Bad Request: USER_ID_INVALID"') or strpos($join,'"status":"kicked"'))!== false){
bot('sendMessage', [
'chat_id'=>$chat_id,
 'text'=>"
🚸| عذرا عزيزي
🔰| عليك الاشتراك بقناة البوت لتتمكن من استخدامه

- [اضغط هنا للشتراك في القناة]($link)

‼️| اشترك ثم ارسل /start",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
]);return false;}

$uuser = file_get_contents("uuser.php");
$join = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$uuser&user_id=".$from_id);
if($message && (strpos($join,'"status":"left"') or strpos($join,'"Bad Request: USER_ID_INVALID"') or strpos($join,'"status":"kicked"'))!== false){
bot('sendMessage', [
'chat_id'=>$chat_id,
 'text'=>"
🚸| عذرا عزيزي
🔰| عليك الاشتراك بقناة البوت لتتمكن من استخدامه

- $uuser

‼️| اشترك ثم ارسل /start",
]);return false;}

$users = explode("\n",file_get_contents("abbas.json"));

if($message){
if(!in_array($from_id,$users)){
file_put_contents("abbas.json",$from_id."\n",FILE_APPEND);}}

$tc = $message->chat->type;
$abbas09 = json_decode(file_get_contents("abbas09.json"),true);
$suodo = $abbas09['sudoarr'];
$al = $abbas09['addmessage'];
$ab = $abbas09['messagee'];
$xll = $al + $ab;
if($message and $from_id !== $admin){
$abbas09['messagee'] = $abbas09['messagee']+1;
file_put_contents("abbas09.json",json_encode($abbas09,32|128|265));
}
if($message and $from_id == $admin){
$abbas09['addmessage'] = $abbas09['addmessage']+1;
file_put_contents("abbas09.json",json_encode($abbas09,32|128|265));
}

$all = count($users)-1;

$adminss = explode("\n",file_get_contents("ad.json"));

$k088 = file_get_contents("data/k088.txt");
$q1 = file_get_contents("data/q1.txt");
$q2 = file_get_contents("q2.txt");
$q3 = file_get_contents("data/q3.txt");
$q4 = file_get_contents("q4.txt");
$q5 = file_get_contents("data/q5.txt");
$aralikan = file_get_contents("q6.txt");


if($message){
if(!in_array($admin,$adminss)){
bot('sendmessage',[
'chat_id'=>$admin,
'text'=>"
تم تحديث القائمه /start
",
]);
file_put_contents("ad.json",$admin."\n",FILE_APPEND);
}}

$d = date('D');
$day = explode("\n",file_get_contents($d.".txt"));
$todayuser = count($day);
if($d == "Sat"){
unlink("Fri.txt");
}
if($d == "Sun"){
unlink("Sat.txt");
}
if($d == "Mon"){
unlink("Sun.txt");
}
if($d == "Tue"){
unlink("Mon.txt");
}
if($d == "Wed"){
unlink("The.txt");
}
if($d == "Thu"){
unlink("Wedtxt");
}
if($d == "Fri"){
unlink("Thu.txt");
}
if($message and !in_array($from_id, $day)){ 
file_put_contents($d.".txt",$from_id. "\n",FILE_APPEND);
}

$from_id = $message->from->id;
$name = $message->from->first_name;
$id = $message->from->id;
$user = $message->from->username;
if($user){
$user = "@$user";
}
elseif(!$uaer){
$user = "بلا معرف";
}
if($text =="/start" and !in_array($from_id,$users)){
bot('sendmessage',[
'chat_id'=>$admin,
'text'=>"
✧︙تم دخول شخص جديد الى البوت 🌚🩶
•–––––––––––––––––––––––––•
✧︙ معلومات الشخص 📜👤🤍 

✧︙ الاسم ↫⦗ $name ⦘
✧︙ المعرف↫⦗ $user ⦘
✧︙ الايدي↫⦗ $id ⦘
 •–––––––––––––––––––––––––•
✧︙عدد الاعضاء الكلي ↫⦗ $all ⦘
",
]);
}

$bot = file_get_contents("bot.txt");

if($text =="/start" and in_array($from_id,$adminss)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"-•
🤍 | اهلا بك عزيزي المطور
🤍 | اليك قائمه الاوامر الخاصه بك
",
'parse_mode'=>"Markdown",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"• قفل البوت •","callback_data"=>"abcd"],["text"=>"• فتح البوت •","callback_data"=>"abcde"]],
[["text"=>"• اعضاء البوت •","callback_data"=>"userd"]],
[["text"=>"• تفعيل التنبيه •","callback_data"=>"ont"],["text"=>"• تعطيل التنبيه •","callback_data"=>"oft"]],
[["text"=>"• قسم الاذاعةه •","callback_data"=>"for"]],
[['text' => "• قائمةه الاشتراك •", 'callback_data' => "channel"],['text' => "• الاشتراك ($skor) •", "callback_data" => "off"]],
[['text' => "• نسخة احتياطيةه •", 'callback_data' => "file"],['text' => "• رفع النسخةه •", 'callback_data' => "up"]],
[['text' => "• الاحصائيات •", 'callback_data' => "pannel"],['text' => "• قسم الادمن •", 'callback_data' => "lIllabbas"]],
[['text' => "• التعديلات •", 'callback_data' => "xxxtentacionllllo"]],
[['text' => "• كليشةه /start •", 'callback_data' => "editstart"]],
]])
]);   
}

//
if($data =="lIllabbas"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"اهلا", 
'parse_mode'=>"Markdown",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"• رفع ادمن •","callback_data"=>"adl"]],
[["text"=>"• اخر الادمن •","callback_data"=>"addmin"]],
[["text"=>"• حذف الادمنيه •","callback_data"=>"delateaddmin"]],
]])
]);   
}

if($data == "adl"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
قم بارسال ايدي العضو
 ",
]); 
file_put_contents("data/k088.txt","k088");
}
if($text !="/start" and $k088 == "k088" and !in_array($text,$adminss)){
file_put_contents("data/k088.txt","none");
file_put_contents("ad.json",$text."\n",FILE_APPEND);} 

if($text != "/start" and $k088 == "k088" and !in_array($text,$adminss)){
file_put_contents("data/k088.txt","none");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"تم رفع العضو", 
]);
bot('sendmessage',[
'chat_id'=>$text,
'text'=>"تم رفعك ادمن في البوت", 
]);
}
if($text !="/start" and $k088 == "k088" and in_array($text,$adminss)){
file_put_contents("data/k088.txt","none");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"العضو ادمن بالفعل", 
]);
}
if($data =="addmin"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"اخر خمس ادمنيه :
 1 - ".$adminss[count($adminss)-2]."
 2 - ️".$adminss[count($adminss)-3]."
 3 - ️".$adminss[count($adminss)-4]."
 4 - ️".$adminss[count($adminss)-5]."
 5 - ️".$adminss[count($adminss)-6]."
",
'parse_mode'=>"Markdown",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"- الصفحه الرئيسيه.","callback_data"=>"bak"]],
]])
]);   
}
if($data =="delateaddmin" and $chat_id2 =="$admin"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
هل انت متاكد من الحذف
",'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'لا' ,'callback_data'=>"bak"]],
[['text'=>'نعم' ,'callback_data'=>"yesaarsslan"]],
]])
]);
}
if($data =="yesaarsslan"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
تم حذف الادمنيه
",'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'الصفحه الرئيسيه' ,'callback_data'=>"bak"]],
]])
]);
unlink("ad.json");
}

if($data =="abcde"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"- اهلا بك عزيزي
- تم فتح البوت 
- /start",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'الصفحه الرئيسيه' ,'callback_data'=>"bak"]],
]])
]);
file_put_contents("bot.txt","مفتوح");
} 
if($data =="abcd"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"- اهلا بك عزيزي
- تم قفل البوت
- /start ",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'الصفحه الرئيسيه' ,'callback_data'=>"bak"]],
]])
]); 
file_put_contents("bot.txt","متوقف");
} 

if($text =="/start" and $bot =="متوقف" and $chat_id != "$admin"){
 bot("sendmessage",[
 "chat_id"=>$chat_id,
 "text"=>"عذرا البوت يخضع للتحديث الان",]);
}

if($data =="userd"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
 اهلا بك عزيزي الادمن
 عدد الاعضاء : ( $all )",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'الصفحه الرئيسيه' ,'callback_data'=>"bak"]],
]])
]);
}

if($data == 'ont'){
file_put_contents("ont.php", "on");
bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'message_id'=>$message_id,
'text'=>"
 مرحبا عزيزي
 تم تفعيل الاشعارات في البوت
",
'show_alert'=>true
]);
}
if($data == 'oft'){
file_put_contents("ont.php", "off");
bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'message_id'=>$message_id,
'text'=>"
 مرحبا عزيزي
⚠ تم تعطيل الاشعارات في البوت
",
'show_alert'=>true
]);
}
$ont = file_get_contents("ont.php");
if($ont == "on"){
if($from_id != $admin){
if($message){
bot('ForwardMessage',[
'chat_id'=>$admin,
'from_chat_id'=>$chat_id,
'message_id'=>$message->message_id,
]);
}}}

if($data == "for"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
 حسنا عزيزي
 قم باختيار ما يناسبك",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"اذاعه صورة ",'callback_data'=>"photoi"]],
[['text' => "اذاعه رسالة ", 'callback_data' => "msg"],['text' => "اذاعه توجيه ", 'callback_data' => "forward"]],
[['text' => "اذاعه ميديا ", 'callback_data' => "midea"],['text' => "اذاعه انلاين ", 'callback_data' => "inline"]],
[['text'=>"رجوع ",'callback_data'=>"bak"]],
]])
]);
}
if($data == "msg"){
file_put_contents("msg.php", "on");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
 حسنا عزيزي
 قم بأرسال رسالتك لتحويلها لجميع المشتركين",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"الغاء",'callback_data'=>"bak"]],
]])
]);
}
if($msg == "on"){
if($message){
for($i=0;$i<count($users); $i++){
bot('sendmessage',[
'chat_id'=>$users[$i],
'text'=>"$text",
]);
}
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
 حسنا عزيزي
 تم عمل اذاعه بنجاح
 الى ( $all ) مشترك",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"رجوع ",'callback_data'=>"bak"]],
]])
]);
unlink("msg.php");
}}
if($data == "forward"){
file_put_contents("forward.php", "on");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
 حسنا عزيزي
 قم بأرسال رسالتك لتحويلها لجميع المشتركين على شكل توجيه",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"الغاء ",'callback_data'=>"bak"]],
]])
]);
}
if($forward == "on"){
if($message){
for($i=0;$i<count($users); $i++){
bot('ForwardMessage',[
'chat_id'=>$users[$i],
'from_chat_id'=>$chat_id,
'message_id'=>$message->message_id,
]);
}
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
 حسنا عزيزي
 تم عمل اذاعه توجيه بنجاح
 الى ( $all ) مشترك",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"رجوع",'callback_data'=>"bak"]],
]])
]);
unlink("forward.php");
}}
if($data == "midea"){
file_put_contents("midea.php", "on");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
 حسنا عزيزي
 يمكنك استخدام جميع انوع الميديا ماعدى الصوره
 (ملصق - فيديو - بصمه - ملف صوتي - ملف - متحركه - جهة اتصال )",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"الغاء",'callback_data'=>"bak"]],
]])
]);
}
$up = json_decode(file_get_contents('php://input'),true);
if(!isset($message->text)){
$types = ['voice','audio','video','photo','contact','document','sticker'];
foreach($up['message'] as $key => $val){
if(in_array($key,$types) and $midea == "on"){
for($i=0;$i<count($users); $i++){
bot('send'.$key,[
'chat_id'=>$users[$i],
'caption'=>$message->caption,
$key=>$val['file_id']]);
unlink("midea.php");
}
}
}}
if($data == "photoi"){
file_put_contents("photoi.php", "on");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
 حسنا عزيزي
 قم بأرسال الصورة لنشرها لجميع المشتركين",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"الغاء ",'callback_data'=>"bak"]],
]])
]);
}
if($photoi == "on"){
if($message->photo){
for($i=0;$i<count($users); $i++){
bot('sendphoto',[
'chat_id'=>$users[$i],
'photo'=>$message->photo[0]->file_id,
'caption'=>$message->caption,
]);
}
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
 حسنا عزيزي
 تم نشر الصورة بنجاح
 الى ( $all ) مشترك",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"رجوع ",'callback_data'=>"bak"]],
]])
]);
unlink("photoi.php");
}}
if($data == "inline"){
file_put_contents("inlin.php", "on");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
 حسنا عزيزي
 قم بتوجيه نص الانلاين لاقوم بنشره للمشتركين",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"الغاء",'callback_data'=>"bak"]],
]])
]);
}
if($inlin == "on"){
if($message->forward_from or $message->forward_from_chat){
for($i=0;$i<count($users); $i++){
bot('forwardmessage',[
'chat_id'=>$users[$i],
'from_chat_id'=>$chat_id,
'message_id'=>$message->message_id,
]);
}
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
 حسنا عزيزي
 تم نشر الانلاين بنجاح
 الى ( $all ) مشترك",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"رجوع ",'callback_data'=>"bak"]],
]])
]);
unlink("inlin.php");
}}

if($data == "channel"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
 حسنا عزيزي
 قم بتحديد الامر لأتمكن من تنفيذه",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"قناة خاصة ",'callback_data'=>"link"]],
[['text'=>"قناة عامة ",'callback_data'=>"user"]],
[['text'=>"رجوع ",'callback_data'=>"bak"]],
]])
]);
}
if($data == "link"){
file_put_contents("link.php", "on");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
 حسنا عزيزي
 قم برفع البوت ادمن في القناة
 ثم ارسل توجيه من القناة الى هنا",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"رجوع ",'callback_data'=>"bak"]],
]])
]);
}
$channel_id = $message->forward_from_chat->id;
if($channel == "on"){
if($message->forward_from_chat){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
 حسنا عزيزي
 قم الان بأرسال رابط القناة هنا",
]);
file_put_contents("link.php", $channel_id);
file_put_contents("link2.php", "on");
}}
if($link == "on"){
if(preg_match('/^(.*)([Hh]ttp|[Hh]ttps|t.me)(.*)|([Hh]ttp|[Hh]ttps|t.me)(.*)|(.*)([Hh]ttp|[Hh]ttps|t.me)|(.*)[Tt]elegram.me(.*)|[Tt]elegram.me(.*)|(.*)[Tt]elegram.me|(.*)[Tt].me(.*)|[Tt].me(.*)|(.*)[Tt].me|(.*)telesco.me|telesco.me(.*)/i',$text)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
 حسنا عزيزي
 تم تفعيل الاشتراك بنجاح",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"اتمام العملية",'callback_data'=>"bak"]],
]])
]);
file_put_contents("link2.php", $text);
file_put_contents("skor.php", "مفعل ✅");
}else{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
 عذرا عزيزي
 قم بأرسال الرابط بصورة صحيحه",
]);
}
}

if($data == "user"){
bot('editmessagetext',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
 حسنا عزيزي
 قم برفع البوت ادمن في القناة
 ثم ارسل يوزر القناة لتفعيل الاشتراك",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"رجوع ",'callback_data'=>"bak"]],
]])
]);
file_put_contents("uuser.php", "on");
}
if($uuser == "on"){
if(preg_match('/^(.*)@|@(.*)|(.*)@(.*)|(.*)#(.*)|#(.*)|(.*)#/',$text)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
 حسنا عزيزي
 تم تفعيل الاشتراك بنجاح",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"اتمام العملية ⏱",'callback_data'=>"bak"]],
]])
]);
file_put_contents("skor.php", "مفعل ✅");
file_put_contents("uuser.php", $text);
}else{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
 عذرا عزيزي
 قم بأرسال يوزر بصورة صحيحه",
]);
}
}

if($skor == "معطل ⚠️"){
if($data == 'off'){
bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'message_id'=>$message_id,
'text'=>'
 مرحبا عزيزي
 حالة الاشتراك الاجباري معطل
 قم بختيار - قائمةه الاشتراك .وقم بتفعيله
',
 'show_alert'=>true
 ]); 
}}
if($skor == "مفعل ✅"){
if($data == 'off'){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'
 حسنا عزيزي
 حالت الاشتراك الخاص بك مفعل
 هل انت متأكد من رغبتك في تعطيل الاشتراك
',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'نعم ', 'callback_data'=>'yesde2'],
['text'=>'لا ','callback_data'=>'bak'],
]
]])
]);
}}

if($data == "yesde2"){
unlink("uuser.php");
unlink("link.php");
file_put_contents("skor.php", "معطل ⚠️");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
 حسنا عزيزي
 تم تعطيل الاشتراك في جميع القنواة
 يمكنك تفعيل الاشتراك لقناتك في مابعد",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"رجوع",'callback_data'=>"bak"]],
]])
]);
}

$bloktime = date('h:i:s A');
if($data == "file"){
$path = realpath("abbas.json");
bot('senddocument',[
'chat_id'=>$chat_id2,
'document'=>new CURLFile($path),
'caption'=>"
 نسخة لمشتركينك
 وقت الارسال : ( $bloktime )
 عدد المشتركين : ( $all )
",
]);
}

if($data == "up"){
bot('editmessagetext',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
 حسنا عزيزي
 قم بأرسال ملف الاعضاء الان
 ارسل الملف بأسم : abbas.json",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"رجوع ",'callback_data'=>"bak"]],
]])
]);
file_put_contents("up.php", "on");
}
$rep = $message->document->file_name;
if($upq == "on"){
if($message->document and $message->document->file_name == "abbas.json" ){
$file = "https://api.telegram.org/file/bot".API_KEY."/".bot('getfile',['file_id'=>$message->reply_to_message->document->file_id])->result->file_path;
file_put_contents($message->reply_to_message->document->file_name,file_get_contents($file));
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"* تم رفع الملف  : $rep*",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
]);
unlink("up.php");
}else{
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"* لايمكن رفع الملف  : $rep*",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"الغاء",'callback_data'=>"bak"]],
]])
]);
}
}

if($data =="pannel"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"*اهلا بك في قسم - الاحصائيات . 📊
--------------------------
 عدد اعضاء بوتك : $all
 المتفاعلين اليوم  : $todayuser
 عدد الرسائل المرسله : ".$abbas09['addmessage']."
 عدد الرسائل المستلمه : ".$abbas09['messagee']."
 مجموع الرسائل : $xll
--------------------------
 اخر خمس مشتركين :
▫️ 1- ".$users[count($users)-2]."
▫️ 2- ️".$users[count($users)-3]."
▫️ 3- ️".$users[count($users)-4]."
▫️ 4- ️".$users[count($users)-5]."
▫️ 5- ️".$users[count($users)-6]."
--------------------------*",'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'الصفحه الرئيسيه' ,'callback_data'=>"bak"]],
]])
]);
}

if($data == "editstart"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
قم بارسال رسالة الاستارت الان
 ",
]); 
file_put_contents("data/q1.txt","q1");
}
if($text != "/start" and $q1 == "q1"){
file_put_contents("data/q1.txt","none");
file_put_contents("q2.txt","$text");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"تم التعين بنجاح", 
]);
}

if ($data == 'bak'){
$msg = unlink("msg.php");
unlink("forward.php");
unlink("midea.php");
unlink("inlin.php");
unlink("photoi.php");
unlink("up.php");
unlink("up.php");
bot('editmessagetext',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"-•
🤍 | اهلا بك عزيزي المطور
🤍 | اليك قائمه الاوامر الخاصه بك
",
'parse_mode'=>"Markdown",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"• قفل البوت •","callback_data"=>"abcd"],["text"=>"• فتح البوت •","callback_data"=>"abcde"]],
[["text"=>"• اعضاء البوت •","callback_data"=>"userd"]],
[["text"=>"• تفعيل التنبيه •","callback_data"=>"ont"],["text"=>"• تعطيل التنبيه •","callback_data"=>"oft"]],
[["text"=>"• قسم الاذاعةه •","callback_data"=>"for"]],
[['text' => "• قائمةه الاشتراك •", 'callback_data' => "channel"],['text' => "• الاشتراك ($skor) •", "callback_data" => "off"]],
[['text' => "• نسخة احتياطيةه •", 'callback_data' => "file"],['text' => "• رفع النسخةه •", 'callback_data' => "up"]],
[['text' => "• الاحصائيات •", 'callback_data' => "pannel"],['text' => "• قسم الادمن •", 'callback_data' => "lIllabbas"]],
[['text' => "• التعديلات •", 'callback_data' => "xxxtentacionllllo"]],
[['text' => "• كليشةه /start •", 'callback_data' => "editstart"]],
]])
]);   
}


$update     = json_decode(file_get_contents('php://input'));
$message = $update->message;
$message_id = $message->message_id;
$text           = $message->text;
$chat_id    = $message->chat->id;
$from_id     = $message->from->id;
$data = $update->callback_query->data;
$chatid = $update->callback_query->message->chat->id;
$messageid = $update->callback_query->message->message_id;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id2 = $update->callback_query->message->message_id;
$username = $message->from->username;
$type       = $message->chat->type;
$name = $message->from->first_name;
$name2 = $update->callback_query->from->first_name;
$name_tag = "[$name](tg://user?id=$from_id)";
$name_tag2 = "[$name2](tg://user?id=$chat_id2)";
$admin = '6264668799';
if ($text == "/start") {
  bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"• اهلا بك عزيزي ⦗ $name_tag ⦘
• في بوت انشاء ايميلات وهميه 
• يمكنك استخدامها في جميع البرامج والمواقع
• اختر ما تريد من الازار 👇🏻.",
    'parse_mode'=>'markdown',
    'disable_web_page_preview'=>true,
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'⦗ ايميل عشوائي 📧 ⦘','callback_data'=>'rndemail']],
        [['text'=>'⦗ صنع ايميل خاص 📨 ⦘','callback_data'=>'specifemail']],
        [['text'=>'⦗ جميع الايميلات 📦 ⦘','callback_data'=>'myemail']],
        [['text'=>'⦗ حذف جميع الايميلات 🗑 ⦘','callback_data'=>'deleteall']],
        ]
    ])
  ]);
}
if ($data == 'back') {
  unset($array3[$chat_id2]['commands']);
  unset($array3[$chat_id2]['commands_data']);
  SaveData('data/command.json',$array3);
  bot('editMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
    'text'=>"• اهلا بك عزيزي ⦗ $name_tag2 ⦘
• في بوت انشاء ايميلات وهميه 
• يمكنك استخدامها في جميع البرامج والمواقع
• اختر ما تريد من الازار 👇🏻.",
    'parse_mode'=>'markdown',
    'disable_web_page_preview'=>true,
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'⦗ ايميل عشوائي 📧 ⦘','callback_data'=>'rndemail']],
        [['text'=>'⦗ صنع ايميل خاص 📨 ⦘','callback_data'=>'specifemail']],
        [['text'=>'⦗ جميع الايميلات 📦 ⦘','callback_data'=>'myemail']],
        [['text'=>'⦗ حذف جميع الايميلات 🗑 ⦘','callback_data'=>'deleteall']],
        ]
    ])
  ]);
}
if($data == 'deleteall'){
  unset($array2[$chat_id2]['emails']);
  SaveData('data/emails.json',$array2);
  bot('editMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
    'text'=>"*
✅ - تم حذف جميع رسائل البريد
    *",
      'parse_mode'=>'markdown',
      'disable_web_page_preview'=>true,
      'reply_markup'=>json_encode([
        'inline_keyboard'=>[
          [['text'=>'⦗ رجــوع ⦘','callback_data'=>'back']],
        ]
      ])
    ]);
}
if ($data == 'rndemail') {
  $api = json_decode(randomEmail(),true);
  $array2[$chat_id2]['emails'][] = $api['email'];
  SaveData('data/emails.json',$array2);
  bot('editMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
    'text'=>"*
- 📮 الايمل الوهمي الخاص بك: 

{$api['email']} 

- ✅ الايميل جاهز لتلقي الرسائل
    *",
    'parse_mode'=>'markdown',
    'disable_web_page_preview'=>true,
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'⦗ جلب رسائل الايميل 📥 ⦘','callback_data'=>'getemails:'.$api['email']]],
        [['text'=>'⦗ حذف الايميل 🗑 ⦘','callback_data'=>'delete:'.$api['email']]],
        [['text'=>'⦗ رجــوع ⦘','callback_data'=>'back']],
        ]
    ])
  ]);
}
if ($data == 'specifemail') {
  $domains = json_decode(file_get_contents('https://api.internal.temp-mail.io/api/v4/domains'),true);
  foreach($domains['domains'] as $domain){
    $keyboards['inline_keyboard'][] = [['text'=>$domain['name'],'callback_data'=>'domainis:'.$domain['name']]];
  }
    $keyboards['inline_keyboard'][] = [['text'=>'⦗ رجــوع ⦘','callback_data'=>'back']];
  bot('editMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
    'text'=>"*- 🔎 قم باختيار الدومين الذي تريده*",
    'parse_mode'=>'markdown',
    'disable_web_page_preview'=>true,
    'reply_markup'=>json_encode($keyboards),
  ]);
}
$ex = explode(':',$data);
if ($ex[0] == 'domainis') {
  $array3[$chat_id2]['commands'] = 'emailname';
  $array3[$chat_id2]['commands_data'] = ['domain'=>$ex[1]];
  SaveData('data/command.json',$array3);
  bot('editMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
    'text'=>"*- ✅ تم اختار الدومين بنجاح

 {$ex[1]} 

- 🏷 الان ارسل اسم الايميل*",   
'parse_mode'=>'markdown',
    'disable_web_page_preview'=>true,
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>'⦗ رجــوع ⦘','callback_data'=>'back']],
        ]
    ])
  ]);
}
if ($text and $array3[$chat_id]['commands'] == 'emailname') {
  if(preg_match("/([أ-ي])/",$text)){
    bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"*- ⚠️ الاسم الذي قمت باختياره غير صالح استخدم اسما اخر*",
    ]);
  } else {
    $api = json_decode(privateEmail($text,$array3[$chat_id]['commands_data']['domain']),true);
    unset($array3[$chat_id]['commands']);
    unset($array3[$chat_id]['command_data']);
    $array2[$chat_id]['emails'][] = $api['email'];
    SaveData('data/emails.json',$array2);
    SaveData('data/command.json',$array3);
    bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"*
- 📮 الايمل الوهمي الخاص بك: 

{$api['email']} 

- ✅ الايميل جاهز لتلقي الرسائل
      *",
      'parse_mode'=>'markdown',
      'disable_web_page_preview'=>true,
      'reply_markup'=>json_encode([
        'inline_keyboard'=>[
          [['text'=>'⦗ جلب رسائل الايميل 📥 ⦘','callback_data'=>'getemails:'.$api['email']]],
          [['text'=>'⦗ حذف الايميل 🗑 ⦘','callback_data'=>'delete:'.$api['email']]],
          [['text'=>'⦗ رجــوع ⦘','callback_data'=>'back']],
          ]
      ])
  ]);
  }
} 
if ($data == 'myemail') {
  foreach($array2[$chat_id2]['emails'] as $emailss){
    $keyboards['inline_keyboard'][] = [['text'=>$emailss,'callback_data'=>'selectmail:'.$emailss]];
  }
  $keyboards['inline_keyboard'][] = [['text'=>'⦗ رجــوع ⦘','callback_data'=>'back']];
  bot('editMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
    'text'=>"- 🗃 جميع الايميلات التي لديك",
'reply_markup'=>json_encode($keyboards) 
    ]);
}
$ex = explode(':',$data);
if($ex[0] == 'selectmail'){
  bot('editMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
    'text'=>"*- 🔖 البريد المحدد
{$ex[1]}*",
    'parse_mode'=>'markdown',
      'disable_web_page_preview'=>true,
      'reply_markup'=>json_encode([
        'inline_keyboard'=>[
          [['text'=>'⦗ جلب رسائل الايميل 📥 ⦘','callback_data'=>'getemails:'.$ex[1]]],
          [['text'=>'⦗ حذف الايميل 🗑 ⦘','callback_data'=>'delete:'.$ex[1]]],
          [['text'=>'⦗ رجــوع ⦘','callback_data'=>'back']],
        ]
      ])
  ]);
  }
$ex = explode(':',$data);
if($ex[0] == 'delete'){
  $ak = array_search($ex[1],$array2[$chat_id2]['emails']);
  unset($array2[$chat_id2]['emails'][$ak]);
  SaveData('data/emails.json',$array2);
  bot('editMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
    'text'=>"*- ✅ تم حذف الايميل بنجاح*",
      'parse_mode'=>'markdown',
      'disable_web_page_preview'=>true,
      'reply_markup'=>json_encode([
        'inline_keyboard'=>[
          [['text'=>'⦗ رجــوع ⦘','callback_data'=>'back']],
        ]
      ])
    ]);
  }
$ex = explode(':',$data);
  if($ex[0] == 'getemails'){
    bot('sendMessage',[
        'chat_id'=>$chat_id2,
        'text'=>"- 🎯 انتضر قليلا يتم جلب الرسائل الخاصه بالايميل ...",
    ]);
    $api = json_decode(getMessages($ex[1]),true);
    $msgnum = 1;
    foreach ($api as $apis) {
      $body_text = $apis['body_text'];
      $created_at = $apis['created_at'];
      $subject = $apis['subject'];
      $to = $apis['to'];
      $from = $apis['from'];
      $msgid = $apis['id'];
      bot('sendMessage',[
        'chat_id'=>$chat_id2,
        'text'=>"
- 📜 رساله جديده {$msgnum}
ٴ---------------------------------
- ↩️ من : {$from}
- ↪️ الى : {$to}
- 🛎 الوقت : {$created_at}
- 🧾 الموضوع : {$subject}
- 💬 الرساله : {$body_text}
        ",
        'parse_mode'=>'markdown',
        'reply_markup'=>json_encode([
        'inline_keyboard'=>[
          [['text'=>'⦗ عرض في الموقع ⦘','url'=>'https://temp-mail.io/ar/message/'.$msgid]],
        ]
        ])
      ]);
      $msgnum++;
    }
  }
  
function randomEmail(){
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, 'https://api.internal.temp-mail.io/api/v3/email/new');
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
  curl_setopt($ch, CURLOPT_HTTPHEADER, [
      'authority' => 'api.internal.temp-mail.io',
      'accept' => 'application/json, text/plain, */*',
      'accept-language' => 'en-US,en;q=0.9,ar-AE;q=0.8,ar;q=0.7,de-DE;q=0.6,de;q=0.5',
      'application-name' => 'web',
      'application-version' => '2.2.29',
      'content-type' => 'application/json;charset=UTF-8',
      'origin' => 'https://temp-mail.io',
      'referer' => 'https://temp-mail.io/',
      'save-data' => 'on',
      'sec-ch-ua' => '"Chromium";v="107", "Not=A?Brand";v="24"',
      'sec-ch-ua-mobile' => '?1',
      'sec-ch-ua-platform' => '"Android"',
      'sec-fetch-dest' => 'empty',
      'sec-fetch-mode' => 'cors',
      'sec-fetch-site' => 'same-site',
      'user-agent' => 'Mozilla/5.0 (Linux; Android 12; SM-A217F) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Mobile Safari/537.36',
      'Accept-Encoding' => 'gzip',
  ]);
  curl_setopt($ch, CURLOPT_COOKIE, '_ga=GA1.2.995418899.1671812382; _gid=GA1.2.69815888.1671812382; _gat=1');
  curl_setopt($ch, CURLOPT_POSTFIELDS, '{"min_name_length":10,"max_name_length":10}');
  $response = curl_exec($ch);
  curl_close($ch);
  return $response;
}
echo randomEmail();
function privateEmail($name,$domain){
  $ch = curl_init();
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_URL, 'https://api.internal.temp-mail.io/api/v3/email/new');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');
$headers = array();
$headers[] = 'Authority: api.internal.temp-mail.io';
$headers[] = 'Accept: application/json, text/plain, */*';
$headers[] = 'Accept-Language: ar,en-US;q=0.9,en;q=0.8';
$headers[] = 'Application-Name: web';
$headers[] = 'Application-Version: 2.2.29';
$headers[] = 'Content-Type: application/json;charset=UTF-8';
$headers[] = 'Cookie: _ga=GA1.2.1180998638.1676029697; _gid=GA1.2.371055554.1676029697; __gads=ID=a63fa7c096457897-226fe16bb0db00a0:T=1676029700:RT=1676029700:S=ALNI_Ma39Bpi3J5pPfT7sP2MBQRHWUBf9w; __gpi=UID=00000bd72bdbbd4a:T=1676029700:RT=1676113613:S=ALNI_MY0De_4-54404rL-bZuCsi0JafsDA; _gat=1';
$headers[] = 'Origin: https://temp-mail.io';
$headers[] = 'Referer: https://temp-mail.io/';
$headers[] = 'Sec-Ch-Ua: \"Not_A Brand\";v=\"99\", \"Google Chrome\";v=\"109\", \"Chromium\";v=\"109\"';
$headers[] = 'Sec-Ch-Ua-Mobile: ?0';
$headers[] = 'Sec-Ch-Ua-Platform: \"macOS\"';
$headers[] = 'Sec-Fetch-Dest: empty';
$headers[] = 'Sec-Fetch-Mode: cors';
$headers[] = 'Sec-Fetch-Site: same-site';
$headers[] = 'User-Agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_POSTFIELDS,'{"name":"'.$name.'","domain":"'.$domain.'"}');
$response = curl_exec($ch);
curl_close($ch);
  return $response;
}
function getMessages($email){
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, 'https://api.internal.temp-mail.io/api/v3/email/'.$email.'/messages');
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
  curl_setopt($ch, CURLOPT_HTTPHEADER, [
      'authority' => 'api.internal.temp-mail.io',
      'accept' => 'application/json, text/plain, */*',
      'accept-language' => 'en-US,en;q=0.9,ar-AE;q=0.8,ar;q=0.7,de-DE;q=0.6,de;q=0.5',
      'application-name' => 'web',
      'application-version' => '2.2.29',
      'origin' => 'https://temp-mail.io',
      'referer' => 'https://temp-mail.io/',
      'save-data' => 'on',
      'sec-ch-ua' => '"Chromium";v="107", "Not=A?Brand";v="24"',
      'sec-ch-ua-mobile' => '?1',
      'sec-ch-ua-platform' => '"Android"',
      'sec-fetch-dest' => 'empty',
      'sec-fetch-mode' => 'cors',
      'sec-fetch-site' => 'same-site',
      'user-agent' => 'Mozilla/5.0 (Linux; Android 12; SM-A217F) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Mobile Safari/537.36',
      'Accept-Encoding' => 'gzip',
  ]);
  curl_setopt($ch, CURLOPT_COOKIE, '_ga=GA1.2.995418899.1671812382; _gid=GA1.2.69815888.1671812382');
  $response = curl_exec($ch);
  curl_close($ch);
  return $response;
}
