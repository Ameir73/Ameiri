<?php
$info = json_decode(file_get_contents("info.json"),1);
function save(){
	global $info;
	if(! empty ($info)) 
	file_put_contents("info.json",json_encode($info,448));
}
$token = "7000234461:AAE3NOWpfzP5ixTdHrwH0m_bWf5zoCvEm1w" ; 
$ch = "2090113410"; //ايدي قناة الصيد
$admin = "7000234461"; //الادمن حق البوت
$api_key ="6873705092"; //api key حق حسابك
$user = "@Ameir_a"; //اسم المستخدم حق حسابك
$pass = "735310"; // كلمة السر حق حسابك
require "class.php";
require "Telegram.php";
$bot = new Telegram ($token);
$api = new MainClass($user,$pass,$api_key);
/*
النصوص التالية بامكانك التعديل عليها
لكن انتبه من حذف اي كلمة موجوده داخل 
__الكلمة__
مثل 
__number__
لان هذه الكلمة سيتم استبدالها بقيمة معينة
*/
//ملف الصيد
$txt["رسالة الصيد"] =
"
تم شراء رقم جديد
الرقم : __number__
رابط الرقم للتحقق منه
wa.me/__number__
";
$txt["حظر الرقم"] = "
حظر الرقم
"
;
$txt["طلب الكود"]="
طلب الكود
";
#--------------------------------
//ملف التحكم
$txt["القائمة الرئيسية"]="
/work لجعل البوت يبدا الصيد
/stop لجعل البوت يتوقف عن الصيد

عند ايقاف الصيد لا يتوقف مباشرة وانما يتوقف بعد مرور دقيقة
";

$txt["تشغيل الصيد"] ="
تم تشغيل الصيد
";
$txt["ايقاف الصيد"] ="
تم ايقاف الصيد
";


$txt["الكود"]="
تم وصول الكود بنجاح
الرقم : __number__
الكود : __code__
";






