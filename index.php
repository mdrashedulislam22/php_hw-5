<?php

// empty practice
echo "<h3>empty example </h3>";
$user_name = "danial";
if(empty($user_name)){
    echo "Enter Your User Name <br>";
}else{
    echo "welcome $user_name in your id <br>";
};
// isset empty এর মতো কিন্তু যদি null থাকে তখন isset কাজ করে null না হয়ে যদি string , number হয় তাহলে null কাজ করেনা।

//implode practice
echo "<h3>implode example </h3>";
$my_array = [ "অনেক মানুষ দেখেছি যাদের জড়িয়ে রাখার মতোন কোন কাপড় ছিলনা ", "অনেক কাপড় দেখেছি, যা জড়িয়ে রাখা ব্যাক্তিরা মানুষ ছিলনা।" ,"-জালালুদ্দিন রুমি (রাহিঃ)","জেনে রেখো, আল্লাহর স্বরণেই অন্তর সমূহ প্রশান্তি লাভ করে।" ,"-সূরা আর-রা`দ, আয়াতঃ ২৮","জাহান্নাম ও জান্নাতবাসীরা সমান নয়, জান্নাতবাসীরাই সফলকাম।", "-সূরা হাশর, আয়াতঃ ২০","প্রিয় জিনিসটা পা-ও নিই? আল্লাহ বলেন, তুমি হয়তো এমন জিনিস পছন্দ করেছো যা তোমার জন্য অকল্যাণকর।", "-সূরা বাকারাঃ ২১৬"];

$my_imp = implode(" <br>",$my_array);
print_r($my_imp);

// explode practice
echo "<h3>explode example - 1</h3>";
$msg = "তুমি ভরসা করো, আল্লাহর উপর, কর্ম সম্পাদনে, আল্লাহ`ই যথেষ্ট " ;
print_r(explode(",", $msg));
// explode second example
echo "<h3>explode example - 2</h3>";
$my_pic = " text.jpg.jpeg.png.mp4.zip ";
$new_var = explode(".", $my_pic);
// $pic_extention = array_reverse(explode(".", $my_pic)); 
// print_r($pic_extention [0]);
print_r(end($new_var));

// explode third example 
echo "<h3>explode example - 3 without function</h3>";
$apiUrl = "https://img.youtube.com/vi/<insert-youtube-video-id-here>/0.jpg";
$videoUrl = "https://youtu.be/nplaIzBj1Oc?si=g_cEtQ3F5leSH5YA";
$mainUrl = explode("?si=", $videoUrl)[0];
$mainid = explode("/",$mainUrl);
$mainId = end($mainid);
$replaced = str_replace("<insert-youtube-video-id-here>",$mainId,$apiUrl);
echo "<img src=".$replaced ."></img>";



// explode third example with function
echo "<h3>explode example -3 with function</h3>";
function explodeExample($videoUrl){
$apiUrl = "https://img.youtube.com/vi/<insert-youtube-video-id-here>/0.jpg";
// $videoUrl = "https://youtu.be/nplaIzBj1Oc?si=g_cEtQ3F5leSH5YA";
$mainUrl = explode("?si=", $videoUrl)[0];
$mainid = explode("/",$mainUrl);
$mainId = end($mainid);
$replaced = str_replace("<insert-youtube-video-id-here>",$mainId,$apiUrl);
echo "<img src=".$replaced ."> </img>";
};
explodeExample("https://youtu.be/utbr_bTaTks?si=yMVAZ_f_deNOR7zk");
explodeExample("https://www.youtube.com/live/E6x5DgfZkWw?si=frDicXFTtgRCssh5");



//compact practice
echo "<h3>compact example</h3>";
$compacting = compact("my_array","msg");
echo "<pre>";
print_r($compacting);
echo "</pre>";

//count practice
echo "<h3>count example</h3>";
$islamic_post = ["Kalimaye Tayyab"=> "Laaa Ilaaha Illa-llaahu Muhammadur-Rasoolu-llaah", "Kalima Shahadat"=> "Ash-hadu Al-laaa Ilaaha Illa-llaahu Wahdahoo Laa Shareeka Lahoo Wa-Ash-hadu Anna Muhammadan ‘Abduhoo Wa Rasooluhu.", "Kalimaye Tamjeed"=> "Subhaana-llaahi Walhamdu Lillaahi Walaaa Ilaaha Illa-llaahu Wallaahu Akbar. Walaa Hawla Walaa Quwwata Illaa Billaahi-l ‘Aliyyil ‘Azeem","Kalimaye Touheed"=> "Laaa Ilaaha Illa-llaahu Wahdahoo Laa Shareeka-lahoo Lahu-l Mulku Walahu-l Hamdu Yuhyee Wayumeetu Wahuwa Hayyu-l Laa Yamootu Abadan Abada. Dhu-l Jalaali Wal Ikraam. Biyadihil Khair. Wahuwa Alaa Kulli Shai-’in Qadeer."];
$count_number = count($islamic_post);
print_r($count_number);


//array dff practic
echo "<h3>array dff example</h3>";
$user = ["name"=>"hamed","age"=>"23","occupation"=>"student","relation status"=>"single"];
$user2 = ["name"=>"mahmud","age"=>"23","occupation"=>"student","relation status"=>"single"];
print_r(array_diff($user,$user2));


//array_intersect practice - 1
echo "<h3>array_intersect example </h3>";
print_r(array_intersect($user,$user2));
//array_intersect practice - 2
echo "<h3>array_intersect with count example </h3>";
$counting = count(array_intersect($user,$user2));
$susgested = $counting >=2 ? "susgested" : "not susgested";
print_r($susgested);
//array_pop practice
echo "<h3>array_pop example </h3>";
$array_pop = array_pop($user);
print_r($array_pop);
//array_push practice
echo "<h3>array_push example </h3>";
$user = ["name"=>"hamed","age"=>"23","occupation"=>"student","relation status"=>"single"];
$new_tex = '"education"=> "al-jamia al-islamia patiya"';
echo "<pre>";
$array_push = array_push($user,$new_tex);
print_r($user);
echo "</pre>";

//array_rand practice
echo "<h3>array_rand example </h3>";
print_r($user[array_rand($user)]);
echo "<br><br>";



//jpg, svg picture accepting function
echo "<h3>jpg, svg extension accepting example with function</h3>";
function accepting($picture){
$separetion = explode(".", $picture);
$extension = end($separetion);
$my_extension =["jpg", "svg"];
$accepting_extension = in_array($extension,$my_extension);
if($picture ==$accepting_extension){
    echo "your picture is uploaded";
}else{
    echo "your picture is not uploaded";}
};
accepting("text.png");



echo "<br><br><br><br><br>";
