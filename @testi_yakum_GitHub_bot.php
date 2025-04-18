<?php 

$API_KEY = '7845637634:AAH7ncvpGHd2U6cUaOPRRjtlx5z5Xx4zLkA'; 
$admin= "6785122532"; 
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

function SendMessage($chat_id, $text, $mode, $reply, $keyboard = null){
 bot('SendMessage',[
 'chat_id'=>$chat_id,
 'text'=>$text,
 'parse_mode'=>$mode,
 'reply_to_message_id'=>$reply,
 'reply_markup'=>$keyboard
 ]);
 }

function save($filename, $data)
{
    $file = fopen($filename, 'w');
    fwrite($file, $data);
    fclose($file);
}

$update = json_decode(file_get_contents('php://input'));
$setchnl = file_get_contents("Dade/setchannel.txt");
$mych = file_get_contents("Dade/channelset.txt");
$message = $update->message;
$message_id = $update->message->id;
$from_id = $message->from->id;
$lock = file_get_contents("Dade/channel.txt");
$save = file_get_contents("data/$chat_id/save.txt");
$Channel = $mych;
$contact = $update->channel_post->contact;
$stick = file_get_contents("Dade/stick.txt");
$video = file_get_contents("Dade/video.txt");
$lockch = file_get_contents("Dade/locking.txt");
$add = file_get_contents("Dade/aadmin.txt");
$addm = file_get_contents("Dade/admin.txt");
$file = file_get_contents("Dade/file.txt");
$num = file_get_contents("Dade/num.txt");
$video_msg = file_get_contents("Dade/video_msg.txt");
$texts = file_get_contents("Dade/text.txt");
$fwd = file_get_contents("Dade/fwd.txt");
$chat_id = $message->chat->id;
$lex = $update->message->forward_from->id;
$lexo = $update->message->forward_from_chat->id;
$lexot = $update->message->forward_from_chat->username;
$lexos = $update->message->forward_from_chat->title;
$floooood = file_get_contents("data/setflood.txt");
$max_flood = file_get_contents("data/mizanspam.txt");
$file_channel = $update->channel_post->document;
$lockchn = $update->channel_post;
$text = $message->text;
$no = file_get_contents("Dade/co.txt");
$gifs = file_get_contents("Dade/gifs.txt");
$author_signature=$update->channel_post->author_signature;
$datass=file_get_contents('https://api.telegram.org/bot'.$API_KEY.'/getChatAdministrators?chat_id='.$mych);
$datal = json_decode($datass,true);
foreach($datal['result'] as $user){
if($user['user']['first_name'] == $author_signature){
$id = $user['user']['id'];}}
$un = file_get_contents("Dade/del.txt");
$en_text = file_get_contents("Dade/$chat_id/tarjomeh.txt");
$reply = $update->message->reply_to_message;
$tc = $update->message->chat->type;
$spams = file_get_contents("data/lockspam.txt");
$first_name = $update->message->from->first_name;
$username = $update->message->username;
$sticker_channel=$update->channel_post->sticker;
$gif_channel=$update->channel_post->animation;
$video_note_channel=$update->channel_post->video_note;
$forward_channel=$update->channel_post->forward_signature;
$video_channel=$update->channel_post->video;
$reply = $update->message->reply_to_message;
$photo_channel = $update->channel_post->photo;
$chatid=$update->callback_query->message->chat->id;
$messageid=$update->callback_query->message->message_id;
$data=$update->callback_query->data;
$OKL = file_get_contents("Dade/coj.txt");
$pol = file_get_contents("member.txt");
$DD = file_get_contents("Dade/spamingg.txt");
mkdir("Dade");
mkdir("data");
mkdir("data/users");
mkdir("check");
$channel_id=$update->channel_post->chat->id;
$text_channel=$update->channel_post->text;
$channel_message_id=$update->channel_post->message_id;
$channelmessage_id=$update->channel_post->reply_to_message->message_id;
$data=$update->callback_query->data;
$fromid = $update->callback_query->from->id;
if($channel_id != $mych) {
bot('LeaveChat', [
'chat_id'=>$channel_id, 
]);} 
if($text == "/start" && $from_id == $admin) {
	bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"Salom, Kanalni Boshqaruvchi Botga Hush Kelibsiz!
 Kerakli Bo'limni Tanlang 📡Bosh homiy: @Uz_Coderlar",
				    'reply_markup'=>json_encode([
            'inline_keyboard'=>[
		     	[['text'=>"🔎Kanal Sozlamalari",'callback_data'=>"help"]]
            ],
            ])]);
}
if($data=='back' && $fromid == $admin){
	bot('editmessagetext',[
	'chat_id'=>$chatid,
	'message_id'=>$messageid,
  'text'=>"Salom, Kanalni Boshqaruvchi Botga Hush Kelibsiz!
 Kerakli Bo'limni Tanlang 📡Bosh homiy: @BotKoders",
				    'reply_markup'=>json_encode([
            'inline_keyboard'=>[
		     	[['text'=>"🔎Kanal Sozlamalari",'callback_data'=>"help"]]
            ],
            ])
 ]);
}
if($data == 'help' && $fromid == $admin) {
unlink("Dade/setchannel.txt");
unlink("Dade/admin.txt");
unlink("Dade/del.txt");
bot('editmessagetext',[
	'chat_id'=>$chatid,
	'message_id'=>$messageid,
    'parse_mode'=>'html',
	'text'=>"Demak, <b> $no </b> Kanalingiz Uchun Sozlamalarni Tanlang 👤Admin: @MasteriX",
	'reply_markup'=>json_encode([
            'inline_keyboard'=>[
[['text'=>"🚫 Taqiqlar",'callback_data'=>"addm"]],
[['text'=>"📵 Spam",'callback_data'=>"setspam"]],
[['text'=>"⚙ Adminlar",'callback_data'=>"addo"]],
[['text'=>"🗑 Habarlar",'callback_data'=>"delmsg"]],
[['text'=>"📡 Kanal",'callback_data'=>"wol"]], 
[['text'=>"↩️ Ortga",'callback_data'=>"back"]]
[['text'=>"👤Admin",'url'=>"t.me/Koderchik"]]    	
],
])
]);
}
if($data == 'delmsg' && $fromid == $admin) {
bot('editmessagetext',[
	'chat_id'=>$chatid,
	'message_id'=>$messageid,
	'text'=>"Kerakli bolimni tanlang 👤Admin: @MasteriX", 
	'reply_markup'=>json_encode([
            'inline_keyboard'=>[
[['text'=>"10 Habarni o'chirish",'callback_data'=>"dell"]],
[['text'=>"Kanal Sozlamalari",'callback_data'=>"help"]] 
            ],
            ])
	]);} 
	if($data == 'dell' && $fromid == $admin) {
bot('editmessagetext',[
	'chat_id'=>$chatid,
	'message_id'=>$messageid,
	'text'=>"Postga javoban quyidagi so'zlardan birini yuboring
tozalavor
Представить
Shunda post va undan avvalgi 10 ta post kanaldan o'chiriladi!",
	'reply_markup'=>json_encode([
            'inline_keyboard'=>[
[['text'=>"↩️ Ortga",'callback_data'=>"help"]] 
            ],
            ])
	]);
}
if($update->channel_post->reply_to_message && $text_channel == "tozalavor")
if($id == $admin){
bot('deleteMessage', [
'chat_id'=>$mych, 
'message_id'=>$channel_message_id, 
]);
bot('deleteMessage', [
'chat_id'=>$mych, 
'message_id'=>$channelmessage_id, 
]);
bot('deleteMessage', [
'chat_id'=>$mych, 
'message_id'=>$channelmessage_id-1, 
]);
bot('deleteMessage', [
'chat_id'=>$mych, 
'message_id'=>$channelmessage_id-2, 
]);
bot('deleteMessage', [
'chat_id'=>$mych, 
'message_id'=>$channelmessage_id-3, 
]);
bot('deleteMessage', [
'chat_id'=>$mych, 
'message_id'=>$channelmessage_id-4, 
]);
bot('deleteMessage', [
'chat_id'=>$mych, 
'message_id'=>$channelmessage_id-5, 
]);
bot('deleteMessage', [
'chat_id'=>$mych, 
'message_id'=>$channelmessage_id-6, 
]);
bot('deleteMessage', [
'chat_id'=>$mych, 
'message_id'=>$channelmessage_id-7, 
]);
bot('deleteMessage', [
'chat_id'=>$mych, 
'message_id'=>$channelmessage_id-8, 
]);
bot('deleteMessage', [
'chat_id'=>$mych, 
'message_id'=>$channelmessage_id-9, 
]);
}
if($data == 'setspam' && $fromid == $admin) {
bot('editmessagetext',[
	'chat_id'=>$chatid,
	'message_id'=>$messageid,
	'text'=>"📡 Kanalingiz $no
✅ Kanal Spamdan Ximoyalangan
❌ Ximoyalash o'chirilgan 👤Admin: @MasteriX",
	'reply_markup'=>json_encode([
            'inline_keyboard'=>[
[['text'=>"Ximoya Xolati [$spams]",'callback_data'=>"null"]],
[['text'=>"❌ Ximoyani Ochirish",'callback_data'=>"unspam"],['text'=>"✅ Ximoyalash",'callback_data'=>"lockspam"]],
[['text'=>"🔽 1 Daqiqada yuborilishi mumkin habarlar soni",'callback_data'=>"null"]],
[['text'=>"➕ Spamni Sozlash",'callback_data'=>"setspaming"]],
[['text'=>"♻️ Yangilash.",'callback_data'=>"setspamd"]],
[['text'=>"↩️ Ortga",'callback_data'=>"help"]] 
            ],
            ])
				]);
				}
if($data=='setspaming' && $fromid == $admin){
bot('editmessagetext', [
'chat_id'=>$chatid,
'message_id'=>$messageid, 
'text'=>"1 Daqiqada qancha habar yuborishga ruxsat berasiz?, Tanlang,
Hozirgi xolat: [$max_flood] 👤Admin: @MasteriX ", 
'reply_markup'=>json_encode([
            'inline_keyboard'=>[
[
['text'=>"1",'callback_data'=>"1"],['text'=>"2",'callback_data'=>"2"],['text'=>"3",'callback_data'=>"3"]
],
[
['text'=>"4",'callback_data'=>"4"],['text'=>"5",'callback_data'=>"5"],['text'=>"6",'callback_data'=>"6"]
],
[
['text'=>"7",'callback_data'=>"7"],['text'=>"8",'callback_data'=>"8"],['text'=>"9",'callback_data'=>"9"]
],
[
['text'=>"♻️ Yangilash",'callback_data'=>"setspaming"],['text'=>"10",'callback_data'=>"10"],['text'=>"↩️ Ortga",'callback_data'=>"setspam"]
],
],
            ])
				]);
}
/*
Ushbu kod @MasteriX tomonidan  
@BotKoders kanali orqali tarqatildi
*/
if($fromid == $admin) {
if($data == '1' or $data == '2' or $data == '3' or $data == '4' or $data == '5' or $data == '6' or $data == '7' or $data == '8' or $data == '9' or $data == '10'){
save("data/mizanspam.txt","$data");
bot('editmessagetext', [
'chat_id'=>$chatid,
'message_id'=>$messageid, 
'text'=>"1 Daqiqada qancha habar yuborishga ruxsat berasiz?, Tanlang,
Hozirgi xolat: [$max_flood] 👤Admin: @MasteriX", 
'reply_markup'=>json_encode([
            'inline_keyboard'=>[
[
['text'=>"1",'callback_data'=>"1"],['text'=>"2",'callback_data'=>"2"],['text'=>"3",'callback_data'=>"3"]
],
[
['text'=>"4",'callback_data'=>"4"],['text'=>"5",'callback_data'=>"5"],['text'=>"6",'callback_data'=>"6"]
],
[
['text'=>"7",'callback_data'=>"7"],['text'=>"8",'callback_data'=>"8"],['text'=>"9",'callback_data'=>"9"]
],
[
['text'=>"♻️ Yangilash",'callback_data'=>"setspaming"],['text'=>"10",'callback_data'=>"10"],['text'=>"↩️ Ortga",'callback_data'=>"setspam"]
],
],
            ])
				]);
bot('answercallbackquery', [
'callback_query_id'=>$update->callback_query->id,
'text'=>"1 daqiqada mumkin bo'lgan habarlar soni $data  👤Admin: @MasteriX", 
]);
}} 
if($data == 'setspamd' && $fromid == $admin) {
bot('editmessagetext',[
	'chat_id'=>$chatid,
	'message_id'=>$messageid,
	'text'=>"📡 Kanalingiz $no
✅ Kanal Spamdan Ximoyalangan
❌ Ximoyalash o'chirilgan",
    'reply_markup'=>json_encode([
            'inline_keyboard'=>[
[['text'=>"Ximoya Xolati [$spams]",'callback_data'=>"null"]],
[['text'=>"❌ Ximoyani Ochirish",'callback_data'=>"unspam"],['text'=>"✅ Ximoyalash",'callback_data'=>"lockspam"]],
[['text'=>"🔽 1 Daqiqada yuborilishi mumkin habarlar soni",'callback_data'=>"null"]],
[['text'=>"➕ Spamni Sozlash",'callback_data'=>"setspaming"]],
[['text'=>"♻️ Yangilash.",'callback_data'=>"setspamd"]],
[['text'=>"↩️ Ortga",'callback_data'=>"help"]]    	
            ],
            ])
				]);
bot('answercallbackquery', [
'callback_query_id'=>$update->callback_query->id,
'text'=>"✅ Yangilandi", 
]);
}
if($data=='unspam' && $fromid == $admin) {
file_put_contents("data/lockspam.txt","❌");
bot('answercallbackquery', [
'callback_query_id'=>$update->callback_query->id,
'text'=>"Ximoya o'chirildi", 
]);
}
if($data=='lockspam' && $fromid == $admin) {
file_put_contents("data/lockspam.txt","✅");
bot('answercallbackquery', [
'callback_query_id'=>$update->callback_query->id,
'text'=>"Ximoya yoqildi", 
]);
}
if($data == 'wol' && $fromid == $admin) {
bot('editmessagetext',[
	'chat_id'=>$chatid,
	'message_id'=>$messageid,
	'text'=>"Kerakli bolimni tanlang",
	'reply_markup'=>json_encode([
            'inline_keyboard'=>[
[['text'=>"✅ Kanalni tanlash",'callback_data'=>"wo"],['text'=>"❓ Amaldagi kanal",'callback_data'=>"Linux"]],
		 [['text'=>"↩️ Ortga",'callback_data'=>"help"]]    	
            ],
            ])
				]);
				}
if($data=='wo' && $fromid == $admin) {
 file_put_contents("Dade/setchannel.txt","set");
 bot('editmessagetext', [
 'chat_id'=>$chatid, 
'message_id'=>$messageid,
 'text'=>"Meni Kanalingizga admin qiling va kanalingizdan menga post forward qiling",
'reply_markup'=>json_encode([
            'inline_keyboard'=>[
		     	[['text'=>"↩️ Ortga",'callback_data'=>"help"]]
            ],
            ])
]);
sleep(10);
                bot('deleteMessage', [
'chat_id'=>$chatid, 
'message_id'=>$messageid, 
]);
}
  elseif($setchnl == "set" && $update->message->forward_from_chat) {
if($data != 'help' && $from_id == $admin){
 file_put_contents("Dade/setchannel.txt","none");
save("Dade/channelset.txt","$lexo");
save("Dade/co.txt","$lexos");
save("Dade/coj.txt","@$lexot");
 bot('sendmessage', [
 'chat_id'=>$chat_id, 
 'text'=>"کانال :
@$lexot
$lexos
 $lexo
 Sozlash;

Eslatib otaman, men kanalingizda admin bo'lsamgina boshqara olaman",
 'reply_markup'=>json_encode([
            'inline_keyboard'=>[
		     	[['text'=>"↩️ Ortga",'callback_data'=>"help"]]
            ],
            ])
]);
}
}
elseif($setchnl == "set" && !$update->message->forward_from_chat) {
if($data != 'help' && $from_id == $admin){
 file_put_contents("Dade/setchannel.txt","none");
 bot('sendmessage', [
 'chat_id'=>$chat_id, 
 'text'=>"Faqat oldinga!!",
 'reply_markup'=>json_encode([
            'inline_keyboard'=>[
		     	[['text'=>"↩️ Ortga",'callback_data'=>"help"]]
            ],
            ])
]);
sleep(10);
    bot('deleteMessage', [
'chat_id'=>$chat_id, 
'message_id'=>$message_id, 
]);
}
}
if($data=='Linux' && $fromid == $admin) {
 bot('editmessagetext', [
 'chat_id'=>$chatid, 
'message_id'=>$messageid,
 'text'=>"Kanal o'rnatildi:
$OKL
<code> $no </code>
<code> $mych </code>",
'parse_mode'=>html,
'reply_markup'=>json_encode([
            'inline_keyboard'=>[
		     	[['text'=>"↩️ Ortga",'callback_data'=>"help"]]
            ],
            ])
]);
}
/*
Ushbu kod @Koderchik tomonidan  
@Uz_Coderlar kanali orqali tarqatildi
*/
if($data=='addm' && $fromid == $admin){
	bot('editmessagetext',[
	'chat_id'=>$chatid,
	'message_id'=>$messageid,
                'text'=>"
📡 Kanal $no
✅ Kanalda qoladigan kontent
❌ Kanaldan o'chiriladigan kontent",
                    'reply_markup'=>json_encode([
            'inline_keyboard'=>[
            [['text'=>"Post tashlash [$lockch]",'callback_data'=>"null"]],
            [['text'=>"✅",'callback_data'=>"unch"],['text'=>"❌",'callback_data'=>"lockch"]],
            [['text'=>"GIF [$gifs]",'callback_data'=>"null"]],
            [['text'=>"✅",'callback_data'=>"ungif"],['text'=>"❌",'callback_data'=>"lockgif"]],
            [['text'=>"Kontakt [$num]",'callback_data'=>"null"]],
            [['text'=>"✅",'callback_data'=>"unnum"],['text'=>"❌",'callback_data'=>"locknum"]],
            [['text'=>"Forward [$fwd]",'callback_data'=>"null"]],
            [['text'=>"✅",'callback_data'=>"unfwd"],['text'=>"❌",'callback_data'=>"lockfwd"]],
            [['text'=>"Video Habar [$video_msg]",'callback_data'=>"null"]],
            [['text'=>"✅",'callback_data'=>"unvideomsg"],['text'=>"❌",'callback_data'=>"lockvideomsg"]],
            [['text'=>"Sticker [$stick]",'callback_data'=>"null"]],
            [['text'=>"✅",'callback_data'=>"unstick"],['text'=>"❌",'callback_data'=>"lockstick"]],
            [['text'=>"Matn [$texts]",'callback_data'=>"null"]],
            [['text'=>"✅",'callback_data'=>"untext"],['text'=>"❌",'callback_data'=>"locktext"]],
            [['text'=>"Rasm [$add]",'callback_data'=>"null"]],
            [['text'=>"✅",'callback_data'=>"unphoto"],['text'=>"❌",'callback_data'=>"lockphoto"]],
            [['text'=>"Video [$video]",'callback_data'=>"null"]],
            [['text'=>"✅",'callback_data'=>"unvoi"],['text'=>"❌",'callback_data'=>"lockvoi"]],
            [['text'=>"Fayl [$file]",'callback_data'=>"null"]],
            [['text'=>"✅",'callback_data'=>"unfile"],['text'=>"❌",'callback_data'=>"lockfile"]],
            [['text'=>"♻️ Yangilash",'callback_data'=>"update"]],
                [['text'=>"↩️ Ortga",'callback_data'=>"help"]]
            ],
            ])
                ]);
}
if($data=='update' && $fromid == $admin){
    bot('editmessagetext',[
    'chat_id'=>$chatid,
    'message_id'=>$messageid,
                'text'=>"
📡 Kanal $no
✅ Kanalda qoladigan kontent
❌ Kanaldan o'chiriladigan kontent",
                    'reply_markup'=>json_encode([
            'inline_keyboard'=>[
            [['text'=>"Post tashlash [$lockch]",'callback_data'=>"null"]],
            [['text'=>"✅",'callback_data'=>"unch"],['text'=>"❌",'callback_data'=>"lockch"]],
            [['text'=>"GIF [$gifs]",'callback_data'=>"null"]],
            [['text'=>"✅",'callback_data'=>"ungif"],['text'=>"❌",'callback_data'=>"lockgif"]],
            [['text'=>"Kontakt [$num]",'callback_data'=>"null"]],
            [['text'=>"✅",'callback_data'=>"unnum"],['text'=>"❌",'callback_data'=>"locknum"]],
            [['text'=>"Forward [$fwd]",'callback_data'=>"null"]],
            [['text'=>"✅",'callback_data'=>"unfwd"],['text'=>"❌",'callback_data'=>"lockfwd"]],
            [['text'=>"Video Habar [$video_msg]",'callback_data'=>"null"]],
            [['text'=>"✅",'callback_data'=>"unvideomsg"],['text'=>"❌",'callback_data'=>"lockvideomsg"]],
            [['text'=>"Sticker [$stick]",'callback_data'=>"null"]],
            [['text'=>"✅",'callback_data'=>"unstick"],['text'=>"❌",'callback_data'=>"lockstick"]],
            [['text'=>"Matn [$texts]",'callback_data'=>"null"]],
            [['text'=>"✅",'callback_data'=>"untext"],['text'=>"❌",'callback_data'=>"locktext"]],
            [['text'=>"Rasm [$add]",'callback_data'=>"null"]],
            [['text'=>"✅",'callback_data'=>"unphoto"],['text'=>"❌",'callback_data'=>"lockphoto"]],
            [['text'=>"Video [$video]",'callback_data'=>"null"]],
            [['text'=>"✅",'callback_data'=>"unvoi"],['text'=>"❌",'callback_data'=>"lockvoi"]],
            [['text'=>"Fayl [$file]",'callback_data'=>"null"]],
            [['text'=>"✅",'callback_data'=>"unfile"],['text'=>"❌",'callback_data'=>"lockfile"]],
            [['text'=>"♻️ Yangilash",'callback_data'=>"update"]],
                [['text'=>"↩️ Ortga",'callback_data'=>"help"]]
            ],
            ])
                ]);
bot('answercallbackquery', [
'callback_query_id'=>$update->callback_query->id, 
'text'=>"Sozlamalar Yangilandi ♻️", 
]);
}
if($data=='lockfile' && $fromid == $admin) {
    file_put_contents("Dade/file.txt","❌");
bot('answercallbackquery', [
'callback_query_id'=>$update->callback_query->id, 
'text'=>"Endi fayl yuborilmaydi ❌", 
]);
}
if($data=='unfile' && $fromid == $admin) {
    file_put_contents("Dade/file.txt","✅");
bot('answercallbackquery', [
'callback_query_id'=>$update->callback_query->id, 
'text'=>"Endi Fayl Yuborsa Boladi ✅", 
]);
}
if($data=='lockvoi' && $fromid == $admin) {
    file_put_contents("Dade/video.txt","❌");
bot('answercallbackquery', [
'callback_query_id'=>$update->callback_query->id, 
'text'=>"Endi Video yuborilmaydi ❌", 
]);
}
if($data=='unvoi' && $fromid == $admin) {
    file_put_contents("Dade/video.txt","✅");
bot('answercallbackquery', [
'callback_query_id'=>$update->callback_query->id, 
'text'=>"Endi Video Yuborsa Boladi ✅", 
]);
}
if($data=='lockphoto' && $fromid == $admin) {
    file_put_contents("Dade/aadmin.txt","❌");
bot('answercallbackquery', [
'callback_query_id'=>$update->callback_query->id, 
'text'=>"Endi Rasm yuborilmaydi ❌", 
]);
}
if($data=='unphoto' && $fromid == $admin) {
    file_put_contents("Dade/aadmin.txt","✅");
bot('answercallbackquery', [
'callback_query_id'=>$update->callback_query->id, 
'text'=>"Endi Rasm Yuborsa Boladi ✅", 
]);
}
if($data=='locktext' && $fromid == $admin) {
    file_put_contents("Dade/text.txt","❌");
bot('answercallbackquery', [
'callback_query_id'=>$update->callback_query->id, 
'text'=>"Endi Matn yuborilmaydi ❌", 
]);
}
if($data=='untext' && $fromid == $admin) {
    file_put_contents("Dade/text.txt","✅");
bot('answercallbackquery', [
'callback_query_id'=>$update->callback_query->id, 
'text'=>"Endi Matn Yuborsa Boladi ✅", 
]);
}
if($data=='lockvideomsg' && $fromid == $admin) {
    file_put_contents("Dade/video_msg.txt","❌");
bot('answercallbackquery', [
'callback_query_id'=>$update->callback_query->id, 
'text'=>"Endi Video Habar yuborilmaydi ❌", 
]);
}
if($data=='unvideomsg' && $fromid == $admin) {
    file_put_contents("Dade/video_msg.txt","✅");
bot('answercallbackquery', [
'callback_query_id'=>$update->callback_query->id, 
'text'=>"Endi Video Habar Yuborsa Boladi ✅", 
]);
}
if($data=='lockfwd' && $fromid == $admin) {
    file_put_contents("Dade/fwd.txt","❌");
bot('answercallbackquery', [
'callback_query_id'=>$update->callback_query->id, 
'text'=>"Endi Forward yuborilmaydi ❌", 
]);
}
if($data=='unfwd' && $fromid == $admin) {
    file_put_contents("Dade/fwd.txt","✅");
bot('answercallbackquery', [
'callback_query_id'=>$update->callback_query->id, 
'text'=>"Endi Forward Yuborsa Boladi ✅", 
]);
}
if($data=='locknum' && $fromid == $admin) {
    file_put_contents("Dade/num.txt","❌");
bot('answercallbackquery', [
'callback_query_id'=>$update->callback_query->id, 
'text'=>"Endi Kontakt yuborilmaydi ❌", 
]);
}
if($data=='unnum' && $fromid == $admin) {
    file_put_contents("Dade/num.txt","✅");
bot('answercallbackquery', [
'callback_query_id'=>$update->callback_query->id, 
'text'=>"Endi Kontakt Yuborsa Boladi ✅", 
]);
}
if($data=='lockgif' && $fromid == $admin) {
    file_put_contents("Dade/gifs.txt","❌");
bot('answercallbackquery', [
'callback_query_id'=>$update->callback_query->id, 
'text'=>"Endi GIF yuborilmaydi ❌", 
]);
}
if($data=='ungif' && $fromid == $admin) {
    file_put_contents("Dade/gifs.txt","✅");
bot('answercallbackquery', [
'callback_query_id'=>$update->callback_query->id, 
'text'=>"Endi GIF Yuborsa Boladi ✅", 
]);
}
if($data=='lockstick' && $fromid == $admin) {
    file_put_contents("Dade/stick.txt","❌");
bot('answercallbackquery', [
'callback_query_id'=>$update->callback_query->id, 
'text'=>"Endi Sticker yuborilmaydi ❌", 
]);
}
if($data=='unstick' && $fromid == $admin) {
    file_put_contents("Dade/stick.txt","✅");
bot('answercallbackquery', [
'callback_query_id'=>$update->callback_query->id, 
'text'=>"Endi Sticker Yuborsa Boladi ✅", 
]);
}
if($data=='lockch' && $fromid == $admin) {
    file_put_contents("Dade/locking.txt","❌");
bot('answercallbackquery', [
'callback_query_id'=>$update->callback_query->id, 
'text'=>"Endi Post Tashlash Yopildi ❌", 
]);
}
if($data=='unch' && $fromid == $admin) {
    file_put_contents("Dade/locking.txt","✅");
bot('answercallbackquery', [
'callback_query_id'=>$update->callback_query->id, 
'text'=>"Endi Post Yuborsa Boladi ✅", 
]);
}
    elseif($lockch == "❌" && $lockchn) {
  bot('deleteMessage', [
 'chat_id'=>$Channel, 
 'message_id'=>$channel_message_id,
]);
  } 
    elseif($gifs == "❌" && $gif_channel) {
  bot('deleteMessage', [
 'chat_id'=>$Channel, 
 'message_id'=>$channel_message_id,
]);
  } 
    elseif($num == "❌" && $contact) {
  bot('deleteMessage', [
 'chat_id'=>$Channel, 
 'message_id'=>$channel_message_id,
]);
  } 
    elseif($fwd == "❌" && $forward_channel) {
  bot('deleteMessage', [
 'chat_id'=>$Channel, 
 'message_id'=>$channel_message_id,
]);
  } 
    elseif($video_msg == "❌" && $video_note_channel) {
  bot('deleteMessage', [
 'chat_id'=>$Channel, 
 'message_id'=>$channel_message_id,
]);
  } 
    elseif($stick == "❌" && $sticker_channel) {
  bot('deleteMessage', [
 'chat_id'=>$Channel, 
 'message_id'=>$channel_message_id,
]);
  }             
    elseif($add == "❌" && $photo_channel) {
  bot('deleteMessage', [
 'chat_id'=>$Channel, 
 'message_id'=>$channel_message_id,
]);
  } 
    elseif($texts == "❌" && $text_channel) {
  bot('deleteMessage', [
 'chat_id'=>$Channel, 
 'message_id'=>$channel_message_id,
]);
  } 
    elseif($video == "❌" && $video_channel) {
  bot('deleteMessage', [
 'chat_id'=>$Channel, 
 'message_id'=>$channel_message_id,
]);
  } 
    elseif($file == "❌" && $file_channel) {
  bot('deleteMessage', [
 'chat_id'=>$Channel, 
 'message_id'=>$channel_message_id,
]);
  } 
//------A------D------D------//
if($data=='addo' && $fromid == $admin){
	bot('editmessagetext',[
	'chat_id'=>$chatid,
	'message_id'=>$messageid,
                'text'=>"Kerakli tugmani tanlang",
				    'reply_markup'=>json_encode([
            'inline_keyboard'=>[
		     	[['text'=>"❇️ Adming qo'shish",'callback_data'=>"add"],['text'=>"⛔ Adminni o'chirish",'callback_data'=>"deladd"]],
[['text'=>"↩️ Ortga",'callback_data'=>"help"]]
            ],
            ])
                ]);
}
if($data=='add' && $fromid == $admin){
file_put_contents("Dade/admin.txt","administrator");
	bot('editmessagetext',[
	'chat_id'=>$chatid,
	'message_id'=>$messageid,
                'text'=>"Admin qilinadigan odam habarini menga forward qiling",
				    'reply_markup'=>json_encode([
            'inline_keyboard'=>[
		     	[['text'=>"↩️ Ortga",'callback_data'=>"help"]]
            ],
            ])
                ]);
                sleep(10);
                bot('deleteMessage', [
'chat_id'=>$chatid, 
'message_id'=>$messageid, 
]);
}
elseif($addm == "administrator" && $update->message->forward_from){
if($data != 'help' && $from_id == $admin){
file_put_contents("Dade/admin.txt","none");
bot('promoteChatMember', [
'chat_id'=>$mych,
'user_id'=>$update->message->forward_from->id,
'can_post_messages'=>true,
'can_edit_messages'=>true,
]);
bot('sendmessage', [
'chat_id'=>$chat_id, 
'text'=>"<a href='tg://user?id=$lex'>$lex</a>
✅ Ushbu odam kanalga admin qilindi",
'parse_mode'=>'HTML',
]);
}}
elseif($addm == "administrator" && !$update->message->forward_from){
if($data != 'help' && $from_id == $admin){
bot('sendmessage', [
'chat_id'=>$chat_id, 
'text'=>"Faqat oldinga!",
]);
sleep(10);
    bot('deleteMessage', [
'chat_id'=>$chat_id, 
'message_id'=>$message_id, 
]);
}}
if($data=='deladd' && $fromid == $admin){
file_put_contents("Dade/admin.txt","deladministrator");
	bot('editmessagetext',[
	'chat_id'=>$chatid,
	'message_id'=>$messageid,
                'text'=>"Admin qilinadigan odam habarini menga forward qiling",
				    'reply_markup'=>json_encode([
            'inline_keyboard'=>[
		     	[['text'=>"↩️ Ortga",'callback_data'=>"help"]]
            ],
            ])
                ]);
                sleep(10);
                bot('deleteMessage', [
'chat_id'=>$chatid, 
'message_id'=>$messageid, 
]);
}
elseif($addm == "deladministrator" && $update->message->forward_from){
if($data != 'help' && $from_id == $admin){
file_put_contents("Dade/admin.txt","none");
bot('promoteChatMember', [
'chat_id'=>$mych,
'user_id'=>$update->message->forward_from->id,
'can_post_messages'=>true
]);
bot('sendmessage', [
'chat_id'=>$chat_id, 
'text'=>"<a href='tg://user?id=$lex'>$lex</a>
✅ Lavozimdan chetlatildi",
'parse_mode'=>'HTML',
]);
}}
elseif($addm == "deladministrator" && !$update->message->forward_from){
if($data != 'help' && $from_id == $admin){
bot('sendmessage', [
'chat_id'=>$chat_id, 
'text'=>"Faqat oldinga!",
]);
sleep(10);
    bot('deleteMessage', [
'chat_id'=>$chat_id, 
'message_id'=>$message_id, 
]);
}}
$timing = date("1i");
$timing = str_replace("am","",$timing);
$timing = str_replace("pm","",$timing);

$metti_khan = file_get_contents("check/$timing-$id.txt");
$timing_spam = $metti_khan+1;
file_put_contents("check/$timing-$id.txt","$timing_spam");

$metti_khan2 = file_get_contents("check/$timing-$id.txt");
if($channel_id == $mych) {
if($spams == "✅"){
if($id != $admin){
if($update->channel_post && $metti_khan2 >= $max_flood){
if($max_flood == 1){
$promoteChatMember=bot('promoteChatMember',[
				'chat_id'=>$mych,
      'user_id'=>$id,
				'can_change_info'=>false,
				'can_post_messages'=>false,
				'can_edit_messages'=>false,
				'can_delete_messages'=>false,
				'can_invite_users'=>false,
				'can_restrict_members'=>false,
				'can_pin_messages'=>false,
				'can_promote_members'=>false,	
                ]);
				if($promoteChatMember->ok == 'true'){
bot('deleteMessage', [
'chat_id'=>$mych, 
'message_id'=>$channel_message_id, 
]);
					for($G=$metti_khan2; $G <= $max_flood; $G++ ){
						bot('deleteMessage', [
						'chat_id'=>$mych, 
						'message_id'=>$channel_message_id, 
						]);
  save("Dade/adagin.txt","$id");
			                bot('sendmessage',[
                'chat_id'=>$id,
                'text'=>"Foydalanuvchi: [$author_signature](tg://user?id=$id) Kanalga kop habar tashlagani uchun kanaldan chiqarildi", 'parse_mode'=>'MarkDown', 
  ]);
              bot('sendmessage',[
                'chat_id'=>$admin,
                'text'=>"Hurmatli Admin 
 Foydalanuvchi [$author_signature](tg://user?id=$id) Habarlari Shubhali bolgani uchun cheklangan edi",
				'parse_mode'=>'MarkDown', 
				'reply_markup'=>json_encode([
            'inline_keyboard'=>[
		     	[['text'=>"⛔️ Kanaldan chiqarish",'callback_data'=>"sicch"],['text'=>"✅ Qayta Tiklash",'callback_data'=>"agadd"]],
            ],
            ])]);
}}else{  
	   bot('sendmessage',[
    'chat_id'=>$admin,
    'text'=>"Xatolik! 
Mendan admin qo'shish uchun kanalda ruxsat yo'q, shuning uchun [$author_signature](tg://user?id=$id) ni boshqarolmadim",
				'parse_mode'=>'MarkDown', 
                ]);
}}}}}} 
if($channel_id == $mych) {
if($spams == "✅"){
if($id != $admin){
if($update->channel_post && $metti_khan2 >= $max_flood){
if($max_flood == 2){
$promoteChatMember=bot('promoteChatMember',[
				'chat_id'=>$mych,
                'user_id'=>$id,
				'can_change_info'=>false,
				'can_post_messages'=>false,
				'can_edit_messages'=>false,
				'can_delete_messages'=>false,
				'can_invite_users'=>false,
				'can_restrict_members'=>false,
				'can_pin_messages'=>false,
				'can_promote_members'=>false,	
                ]);
				if($promoteChatMember->ok == 'true'){
bot('deleteMessage', [
'chat_id'=>$mych, 
'message_id'=>$channel_message_id, 
]);
bot('deleteMessage', [
'chat_id'=>$mych, 
'message_id'=>$channel_message_id-1, 
]);
					for($G=$metti_khan2; $G <= $max_flood; $G++ ){
						bot('deleteMessage', [
						'chat_id'=>$mych, 
						'message_id'=>$channel_message_id, 
						]);
  save("Dade/adagin.txt","$id");
			                bot('sendmessage',[
                'chat_id'=>$id,
                'text'=>"Foydalanuvchi : [$author_signature](tg://user?id=$id) Kanaldagi spam tufayli siz o'chirilgingiz", 
                'parse_mode'=>'MarkDown', 
                ]);
              bot('sendmessage',[
                'chat_id'=>$admin,
                'text'=>"Hurmatli Admin! 
 Foydalanuvchi [$author_signature](tg://user?id=$id) Habarlari Shubhali bolgani uchun cheklangan edi",
				'parse_mode'=>'MarkDown', 
				'reply_markup'=>json_encode([
            'inline_keyboard'=>[
		     	[['text'=>"⛔️ Kanaldan chiqarish",'callback_data'=>"sicch"],['text'=>"✅ Qayta Tiklash",'callback_data'=>"agadd"]],
            ],
            ])
                ]);
	 
				
   }}    else{  
	                bot('sendmessage',[
                'chat_id'=>$admin,
                'text'=>"Xatolik! 
Mendan admin qo'shish uchun kanalda ruxsat yo'q, shuning uchun [$author_signature](tg://user?id=$id) ni boshqarolmadim",
				'parse_mode'=>'MarkDown', 
                ]);
}}}}} }
if($channel_id == $mych) {
if($spams == "✅"){
if($id != $admin){
if($update->channel_post && $metti_khan2 >= $max_flood){
if($max_flood == 3){
$promoteChatMember=bot('promoteChatMember',[
				'chat_id'=>$mych,
                'user_id'=>$id,
				'can_change_info'=>false,
				'can_post_messages'=>false,
				'can_edit_messages'=>false,
				'can_delete_messages'=>false,
				'can_invite_users'=>false,
				'can_restrict_members'=>false,
				'can_pin_messages'=>false,
				'can_promote_members'=>false,	
                ]);
				if($promoteChatMember->ok == 'true'){
bot('deleteMessage', [
'chat_id'=>$mych, 
'message_id'=>$channel_message_id, 
]);
bot('deleteMessage', [
'chat_id'=>$mych, 
'message_id'=>$channel_message_id-1, 
]);
bot('deleteMessage', [
'chat_id'=>$mych, 
'message_id'=>$channel_message_id-2, 
]);
					for($G=$metti_khan2; $G <= $max_flood; $G++ ){
						bot('deleteMessage', [
						'chat_id'=>$mych, 
						'message_id'=>$channel_message_id, 
						]);
  save("Dade/adagin.txt","$id");
			                bot('sendmessage',[
                'chat_id'=>$id,
                'text'=>"Foydalanuvchi : [$author_signature](tg://user?id=$id) Kanaldagi spam tufayli siz o'chirilgingiz", 
                'parse_mode'=>'MarkDown', 
                ]);
              bot('sendmessage',[
                'chat_id'=>$admin,
                'text'=>"Hurmatli Admin! 
 Foydalanuvchi [$author_signature](tg://user?id=$id) Habarlari Shubhali bolgani uchun cheklangan edi",
				'parse_mode'=>'MarkDown', 
				'reply_markup'=>json_encode([
            'inline_keyboard'=>[
		     	[['text'=>"⛔️ Kanaldan chiqarish",'callback_data'=>"sicch"],['text'=>"✅ Qayta Tiklash",'callback_data'=>"agadd"]],
            ],
            ])
                ]);
	 
				
   }}    else{  
	                bot('sendmessage',[
                'chat_id'=>$admin,
                'text'=>"Xatolik! 
Mendan admin qo'shish uchun kanalda ruxsat yo'q, shuning uchun [$author_signature](tg://user?id=$id) ni boshqarolmadim",
				'parse_mode'=>'MarkDown', 
                ]);
}}}}} }if($spams == "✅"){
if($spams == "✅"){
if($id != $admin){
if($update->channel_post && $metti_khan2 >= $max_flood){
if($max_flood == 4){
$promoteChatMember=bot('promoteChatMember',[
				'chat_id'=>$mych,
                'user_id'=>$id,
				'can_change_info'=>false,
				'can_post_messages'=>false,
				'can_edit_messages'=>false,
				'can_delete_messages'=>false,
				'can_invite_users'=>false,
				'can_restrict_members'=>false,
				'can_pin_messages'=>false,
				'can_promote_members'=>false,	
                ]);
				if($promoteChatMember->ok == 'true'){
bot('deleteMessage', [
'chat_id'=>$mych, 
'message_id'=>$channel_message_id, 
]);
bot('deleteMessage', [
'chat_id'=>$mych, 
'message_id'=>$channel_message_id-1, 
]);
bot('deleteMessage', [
'chat_id'=>$mych, 
'message_id'=>$channel_message_id-2, 
]);
bot('deleteMessage', [
'chat_id'=>$mych, 
'message_id'=>$channel_message_id-3, 
]);
					for($G=$metti_khan2; $G <= $max_flood; $G++ ){
						bot('deleteMessage', [
						'chat_id'=>$mych, 
						'message_id'=>$channel_message_id, 
						]);
  save("Dade/adagin.txt","$id");
			                bot('sendmessage',[
                'chat_id'=>$id,
                'text'=>"Foydalanuvchi : [$author_signature](tg://user?id=$id) Kanaldagi spam tufayli siz o'chirilgingiz", 
                'parse_mode'=>'MarkDown', 
                ]);
              bot('sendmessage',[
                'chat_id'=>$admin,
                'text'=>"Hurmatli Admin! 
 Foydalanuvchi [$author_signature](tg://user?id=$id) Habarlari Shubhali bolgani uchun cheklangan edi",
				'parse_mode'=>'MarkDown', 
				'reply_markup'=>json_encode([
            'inline_keyboard'=>[
		     	[['text'=>"⛔️ Kanaldan chiqarish",'callback_data'=>"sicch"],['text'=>"✅ Qayta Tiklash",'callback_data'=>"agadd"]],
            ],
            ])
  ]);
   }}else{  
	  bot('sendmessage',[
   'chat_id'=>$admin,
   'text'=>"Xatolik! 
Mendan admin qo'shish uchun kanalda ruxsat yo'q, shuning uchun [$author_signature](tg://user?id=$id) ni boshqarolmadim",
				'parse_mode'=>'MarkDown', 
                ]);
}}}}} }if($channel_id == $mych) {
if($spams == "✅"){
if($id != $admin){
if($update->channel_post && $metti_khan2 >= $max_flood){
if($max_flood == 5){
$promoteChatMember=bot('promoteChatMember',[
				'chat_id'=>$mych,
                'user_id'=>$id,
				'can_change_info'=>false,
				'can_post_messages'=>false,
				'can_edit_messages'=>false,
				'can_delete_messages'=>false,
				'can_invite_users'=>false,
				'can_restrict_members'=>false,
				'can_pin_messages'=>false,
				'can_promote_members'=>false,	
                ]);
				if($promoteChatMember->ok == 'true'){
bot('deleteMessage', [
'chat_id'=>$mych, 
'message_id'=>$channel_message_id, 
]);
bot('deleteMessage', [
'chat_id'=>$mych, 
'message_id'=>$channel_message_id-1, 
]);
bot('deleteMessage', [
'chat_id'=>$mych, 
'message_id'=>$channel_message_id-2, 
]);
bot('deleteMessage', [
'chat_id'=>$mych, 
'message_id'=>$channel_message_id-3, 
]);
bot('deleteMessage', [
'chat_id'=>$mych, 
'message_id'=>$channel_message_id-4, 
]);
					for($G=$metti_khan2; $G <= $max_flood; $G++ ){
						bot('deleteMessage', [
						'chat_id'=>$mych, 
						'message_id'=>$channel_message_id, 
						]);
  save("Dade/adagin.txt","$id");
			                bot('sendmessage',[
                'chat_id'=>$id,
                'text'=>"Foydalanuvchi : [$author_signature](tg://user?id=$id) Kanaldagi spam tufayli siz o'chirilgingiz", 
                'parse_mode'=>'MarkDown', 
                ]);
              bot('sendmessage',[
                'chat_id'=>$admin,
                'text'=>"Hurmatli Admin! 
 Foydalanuvchi [$author_signature](tg://user?id=$id) Habarlari Shubhali bolgani uchun cheklangan edi",
				'parse_mode'=>'MarkDown', 
				'reply_markup'=>json_encode([
            'inline_keyboard'=>[
		     	[['text'=>"⛔️ Kanaldan chiqarish",'callback_data'=>"sicch"],['text'=>"✅ Qayta Tiklash",'callback_data'=>"agadd"]],
            ],
            ])
                ]);
	 
				
   }}    else{  
	                bot('sendmessage',[
                'chat_id'=>$admin,
                'text'=>"Xatolik! 
Mendan admin qo'shish uchun kanalda ruxsat yo'q, shuning uchun [$author_signature](tg://user?id=$id) ni boshqarolmadim",
				'parse_mode'=>'MarkDown', 
                ]);
}}}}}}if($channel_id == $mych) {
if($spams == "✅"){
if($id != $admin){
if($update->channel_post && $metti_khan2 >= $max_flood){
if($max_flood == 6){
$promoteChatMember=bot('promoteChatMember',[
				'chat_id'=>$mych,
                'user_id'=>$id,
				'can_change_info'=>false,
				'can_post_messages'=>false,
				'can_edit_messages'=>false,
				'can_delete_messages'=>false,
				'can_invite_users'=>false,
				'can_restrict_members'=>false,
				'can_pin_messages'=>false,
				'can_promote_members'=>false,	
                ]);
				if($promoteChatMember->ok == 'true'){
bot('deleteMessage', [
'chat_id'=>$mych, 
'message_id'=>$channel_message_id, 
]);
bot('deleteMessage', [
'chat_id'=>$mych, 
'message_id'=>$channel_message_id-1, 
]);
bot('deleteMessage', [
'chat_id'=>$mych, 
'message_id'=>$channel_message_id-2, 
]);
bot('deleteMessage', [
'chat_id'=>$mych, 
'message_id'=>$channel_message_id-3, 
]);
bot('deleteMessage', [
'chat_id'=>$mych, 
'message_id'=>$channel_message_id-4, 
]);
bot('deleteMessage', [
'chat_id'=>$mych, 
'message_id'=>$channel_message_id-5, 
]);
					for($G=$metti_khan2; $G <= $max_flood; $G++ ){
						bot('deleteMessage', [
						'chat_id'=>$mych, 
						'message_id'=>$channel_message_id, 
						]);
  save("Dade/adagin.txt","$id");
			                bot('sendmessage',[
    'chat_id'=>$id,
    'text'=>"Foydalanuvchi : [$author_signature](tg://user?id=$id) Kanaldagi spam tufayli siz o'chirilgingiz",'parse_mode'=>'MarkDown', 
                ]);
  bot('sendmessage',[
  'chat_id'=>$admin,
  'text'=>"Hurmatli Admin!
  Foydalanuvchi [$author_signature](tg://user?id=$id) Habarlari Shubhali bolgani uchun cheklangan edi",
				'parse_mode'=>'MarkDown', 
				'reply_markup'=>json_encode([
            'inline_keyboard'=>[
		     	[['text'=>"⛔️ Kanaldan chiqarish",'callback_data'=>"sicch"],['text'=>"✅ Qayta Tiklash",'callback_data'=>"agadd"]],
            ],
            ])
                ]);
	 
				
   }}    else{  
	                bot('sendmessage',[
                'chat_id'=>$admin,
                'text'=>"Xatolik! 
Mendan admin qo'shish uchun kanalda ruxsat yo'q, shuning uchun [$author_signature](tg://user?id=$id) ni boshqarolmadim",
				'parse_mode'=>'MarkDown', 
                ]);
}}}}} }if($channel_id == $mych) {
if($spams == "✅"){
if($id != $admin){
if($update->channel_post && $metti_khan2 >= $max_flood){
if($max_flood == 7){
$promoteChatMember=bot('promoteChatMember',[
				'chat_id'=>$mych,
                'user_id'=>$id,
				'can_change_info'=>false,
				'can_post_messages'=>false,
				'can_edit_messages'=>false,
				'can_delete_messages'=>false,
				'can_invite_users'=>false,
				'can_restrict_members'=>false,
				'can_pin_messages'=>false,
				'can_promote_members'=>false,	
                ]);
				if($promoteChatMember->ok == 'true'){
bot('deleteMessage', [
'chat_id'=>$mych, 
'message_id'=>$channel_message_id, 
]);
bot('deleteMessage', [
'chat_id'=>$mych, 
'message_id'=>$channel_message_id-1, 
]);
bot('deleteMessage', [
'chat_id'=>$mych, 
'message_id'=>$channel_message_id-2, 
]);
bot('deleteMessage', [
'chat_id'=>$mych, 
'message_id'=>$channel_message_id-3, 
]);
bot('deleteMessage', [
'chat_id'=>$mych, 
'message_id'=>$channel_message_id-4, 
]);
bot('deleteMessage', [
'chat_id'=>$mych, 
'message_id'=>$channel_message_id-5, 
]);
bot('deleteMessage', [
'chat_id'=>$mych, 
'message_id'=>$channel_message_id-6, 
]);
					for($G=$metti_khan2; $G <= $max_flood; $G++ ){
						bot('deleteMessage', [
						'chat_id'=>$mych, 
						'message_id'=>$channel_message_id, 
						]);
  save("Dade/adagin.txt","$id");
			                bot('sendmessage',[
                'chat_id'=>$id,
                'text'=>"Foydalanuvchi : [$author_signature](tg://user?id=$id) Kanaldagi spam tufayli siz o'chirilgingiz", 
                'parse_mode'=>'MarkDown', 
                ]);
              bot('sendmessage',[
                'chat_id'=>$admin,
                'text'=>"Hurmatli Admin! 
 Foydalanuvchi [$author_signature](tg://user?id=$id) Habarlari Shubhali bolgani uchun cheklangan edi",
				'parse_mode'=>'MarkDown', 
				'reply_markup'=>json_encode([
            'inline_keyboard'=>[
		     	[['text'=>"⛔️ Kanaldan chiqarish",'callback_data'=>"sicch"],['text'=>"✅ Qayta Tiklash",'callback_data'=>"agadd"]],
            ],
            ])
                ]);
	 
				
   }}    else{  
	                bot('sendmessage',[
                'chat_id'=>$admin,
                'text'=>"Xatolik! 
Mendan admin qo'shish uchun kanalda ruxsat yo'q, shuning uchun [$author_signature](tg://user?id=$id) ni boshqarolmadim",
				'parse_mode'=>'MarkDown', 
                ]);
}}}}} }if($channel_id == $mych) {
if($spams == "✅"){
if($id != $admin){
if($update->channel_post && $metti_khan2 >= $max_flood){
if($max_flood == 8){
$promoteChatMember=bot('promoteChatMember',[
				'chat_id'=>$mych,
                'user_id'=>$id,
				'can_change_info'=>false,
				'can_post_messages'=>false,
				'can_edit_messages'=>false,
				'can_delete_messages'=>false,
				'can_invite_users'=>false,
				'can_restrict_members'=>false,
				'can_pin_messages'=>false,
				'can_promote_members'=>false,	
                ]);
				if($promoteChatMember->ok == 'true'){
bot('deleteMessage', [
'chat_id'=>$mych, 
'message_id'=>$channel_message_id, 
]);
bot('deleteMessage', [
'chat_id'=>$mych, 
'message_id'=>$channel_message_id-1, 
]);
bot('deleteMessage', [
'chat_id'=>$mych, 
'message_id'=>$channel_message_id-2, 
]);
bot('deleteMessage', [
'chat_id'=>$mych, 
'message_id'=>$channel_message_id-3, 
]);
bot('deleteMessage', [
'chat_id'=>$mych, 
'message_id'=>$channel_message_id-4, 
]);
bot('deleteMessage', [
'chat_id'=>$mych, 
'message_id'=>$channel_message_id-5, 
]);
bot('deleteMessage', [
'chat_id'=>$mych, 
'message_id'=>$channel_message_id-6, 
]);
bot('deleteMessage', [
'chat_id'=>$mych, 
'message_id'=>$channel_message_id-7, 
]);
					for($G=$metti_khan2; $G <= $max_flood; $G++ ){
						bot('deleteMessage', [
						'chat_id'=>$mych, 
						'message_id'=>$channel_message_id, 
						]);
  save("Dade/adagin.txt","$id");
			                bot('sendmessage',[
                'chat_id'=>$id,
                'text'=>"Foydalanuvchi : [$author_signature](tg://user?id=$id) Kanaldagi spam tufayli siz o'chirilgingiz", 
                'parse_mode'=>'MarkDown', 
                ]);
              bot('sendmessage',[
                'chat_id'=>$admin,
                'text'=>"Hurmatli Admin! 
 Foydalanuvchi [$author_signature](tg://user?id=$id) Habarlari Shubhali bolgani uchun cheklangan edi",
				'parse_mode'=>'MarkDown', 
				'reply_markup'=>json_encode([
            'inline_keyboard'=>[
		     	[['text'=>"⛔️ Kanaldan chiqarish",'callback_data'=>"sicch"],['text'=>"✅ Qayta Tiklash",'callback_data'=>"agadd"]],
            ],
            ])
                ]);
	 
				
   }}    else{  
	                bot('sendmessage',[
                'chat_id'=>$admin,
                'text'=>"Xatolik! 
Mendan admin qo'shish uchun kanalda ruxsat yo'q, shuning uchun [$author_signature](tg://user?id=$id) ni boshqarolmadim",
				'parse_mode'=>'MarkDown', 
                ]);
}}}}} }if($channel_id == $mych) {
if($spams == "✅"){
if($id != $admin){
if($update->channel_post && $metti_khan2 >= $max_flood){
if($max_flood == 9){
$promoteChatMember=bot('promoteChatMember',[
				'chat_id'=>$mych,
                'user_id'=>$id,
				'can_change_info'=>false,
				'can_post_messages'=>false,
				'can_edit_messages'=>false,
				'can_delete_messages'=>false,
				'can_invite_users'=>false,
				'can_restrict_members'=>false,
				'can_pin_messages'=>false,
				'can_promote_members'=>false,	
                ]);
				if($promoteChatMember->ok == 'true'){
bot('deleteMessage', [
'chat_id'=>$mych, 
'message_id'=>$channel_message_id, 
]);
bot('deleteMessage', [
'chat_id'=>$mych, 
'message_id'=>$channel_message_id-1, 
]);
bot('deleteMessage', [
'chat_id'=>$mych, 
'message_id'=>$channel_message_id-2, 
]);
bot('deleteMessage', [
'chat_id'=>$mych, 
'message_id'=>$channel_message_id-3, 
]);
bot('deleteMessage', [
'chat_id'=>$mych, 
'message_id'=>$channel_message_id-4, 
]);
bot('deleteMessage', [
'chat_id'=>$mych, 
'message_id'=>$channel_message_id-5, 
]);
bot('deleteMessage', [
'chat_id'=>$mych, 
'message_id'=>$channel_message_id-6, 
]);
bot('deleteMessage', [
'chat_id'=>$mych, 
'message_id'=>$channel_message_id-7, 
]);
bot('deleteMessage', [
'chat_id'=>$mych, 
'message_id'=>$channel_message_id-8, 
]);
					for($G=$metti_khan2; $G <= $max_flood; $G++ ){
						bot('deleteMessage', [
						'chat_id'=>$mych, 
						'message_id'=>$channel_message_id, 
						]);
  save("Dade/adagin.txt","$id");
			                bot('sendmessage',[
                'chat_id'=>$id,
                'text'=>"Foydalanuvchi : [$author_signature](tg://user?id=$id) Kanaldagi spam tufayli siz o'chirilgingiz", 
                'parse_mode'=>'MarkDown', 
                ]);
              bot('sendmessage',[
                'chat_id'=>$admin,
                'text'=>"Hurmatli Admin!
Foydalanuvchi [$author_signature](tg://user?id=$id) Habarlari Shubhali bolgani uchun cheklangan edi",
				'parse_mode'=>'MarkDown', 
				'reply_markup'=>json_encode([
            'inline_keyboard'=>[
		     	[['text'=>"⛔️ Kanaldan chiqarish",'callback_data'=>"sicch"],['text'=>"✅ Qayta Tiklash",'callback_data'=>"agadd"]],
            ],
            ])
                ]);
	 
				
   }}    else{  
	                bot('sendmessage',[
                'chat_id'=>$admin,
                'text'=>"Xatolik! 
Mendan admin qo'shish uchun kanalda ruxsat yo'q, shuning uchun [$author_signature](tg://user?id=$id) ni boshqarolmadim",
				'parse_mode'=>'MarkDown', 
                ]);
}}}}} }if($channel_id == $mych) {
if($spams == "✅"){
if($id != $admin){
if($update->channel_post && $metti_khan2 >= $max_flood){
if($max_flood == 10){
$promoteChatMember=bot('promoteChatMember',[
				'chat_id'=>$mych,
                'user_id'=>$id,
				'can_change_info'=>false,
				'can_post_messages'=>false,
				'can_edit_messages'=>false,
				'can_delete_messages'=>false,
				'can_invite_users'=>false,
				'can_restrict_members'=>false,
				'can_pin_messages'=>false,
				'can_promote_members'=>false,	
                ]);
				if($promoteChatMember->ok == 'true'){
bot('deleteMessage', [
'chat_id'=>$mych, 
'message_id'=>$channel_message_id, 
]);
bot('deleteMessage', [
'chat_id'=>$mych, 
'message_id'=>$channel_message_id-1, 
]);
bot('deleteMessage', [
'chat_id'=>$mych, 
'message_id'=>$channel_message_id-2, 
]);
bot('deleteMessage', [
'chat_id'=>$mych, 
'message_id'=>$channel_message_id-3, 
]);
bot('deleteMessage', [
'chat_id'=>$mych, 
'message_id'=>$channel_message_id-4, 
]);
bot('deleteMessage', [
'chat_id'=>$mych, 
'message_id'=>$channel_message_id-5, 
]);
bot('deleteMessage', [
'chat_id'=>$mych, 
'message_id'=>$channel_message_id-6, 
]);
bot('deleteMessage', [
'chat_id'=>$mych, 
'message_id'=>$channel_message_id-7, 
]);
bot('deleteMessage', [
'chat_id'=>$mych, 
'message_id'=>$channel_message_id-8, 
]);
bot('deleteMessage', [
'chat_id'=>$mych, 
'message_id'=>$channel_message_id-9, 
]);
					for($G=$metti_khan2; $G <= $max_flood; $G++ ){
						bot('deleteMessage', [
						'chat_id'=>$mych, 
						'message_id'=>$channel_message_id, 
						]);
  save("Dade/adagin.txt","$id");
			                bot('sendmessage',[
                'chat_id'=>$id,
                'text'=>"Foydalanuvchi : [$author_signature](tg://user?id=$id) Kanaldagi spam tufayli siz o'chirilgingiz", 
                'parse_mode'=>'MarkDown', 
                ]);
              bot('sendmessage',[
                'chat_id'=>$admin,
                'text'=>"Hurmatli Admin!
Foydalanuvchi [$author_signature](tg://user?id=$id) Habarlari Shubhali bolgani uchun cheklangan edi",
				'parse_mode'=>'MarkDown', 
				'reply_markup'=>json_encode([
            'inline_keyboard'=>[
		     	[['text'=>"⛔️ Kanaldan chiqarish",'callback_data'=>"sicch"],['text'=>"✅ Qayta Tiklash",'callback_data'=>"agadd"]],
            ],
            ])
                ]);
	 
				
   }}    else{  
	                bot('sendmessage',[
                'chat_id'=>$admin,
                'text'=>"Xatolik! 
Mendan admin qo'shish uchun kanalda ruxsat yo'q, shuning uchun [$author_signature](tg://user?id=$id) ni boshqarolmadim",
				'parse_mode'=>'MarkDown', 
                ]);
}}}}} }
$Lordam = file_get_contents("Dade/adagin.txt");
if($data=='agadd') {
bot('promoteChatMember', [
'chat_id'=>$mych,
'user_id'=>$Lordam,
'can_post_messages'=>true, 
]);
bot('answercallbackquery', [
'callback_query_id'=>$update->callback_query->id, 
'text'=>"Lavozimga Qaytarildingiz",
]);
bot('deleteMessage', [
'chat_id'=>$chatid, 
'message_id'=>$messageid, 
]);
}
$Lordam = file_get_contents("Dade/adagin.txt");
if($data=='sicch') {
bot('KickChatMember', [
'chat_id'=>$mych,
'user_id'=>$Lordam,
]);
bot('answercallbackquery', [
'callback_query_id'=>$update->callback_query->id, 
'text'=>"Foydalanuvchi kanaldan haydaldi",
]);
bot('deleteMessage', [
'chat_id'=>$chatid, 
'message_id'=>$messageid, 
]);
}
if(file_exists('error_log')){unlink('error_log');}
/*
Ushbu kod @Koderchik tomonidan  
@Uz_Coderlar kanali orqali tarqatildi
*/
?>
