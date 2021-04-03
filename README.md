 
# থিম ডেভেলপমেন্ট পার্টে আপনাকে স্বাগতম <br>
## পার্ট-১ :fire:<br>
প্রথম আমাকে থিম সেটআপ দিতে হবে <br>
থিম সেটআপ দেওয়ার জন্য নিচে স্টেপ গুলি মানতে হবে <br>
:heavy_check_mark: wp-content :arrow_right: theme :arrow_right: theme folder name :open_file_folder: ex(AlAmin)<br>
:heavy_check_mark: কিছু required ফাইল আছে <br>
  :axe: index.php <br>
  :axe: style.css <br>
  :axe: theme image (image name must be screenshot.png)<br>
থিম মধ্যে আমরা অনেক কিছু লেখা দেখি যেমন <br>
:heavy_plus_sign: থিমের নাম <br>
:heavy_plus_sign: থিম তে কোন কোম্পানি তৈরী করছে <br>
:heavy_plus_sign: অথর নাম <br>
:heavy_plus_sign: অথর ইউআরএল <br>
:heavy_plus_sign: থিম ডেসক্রিপশন <br>
:heavy_plus_sign: থিম ট্যাগ <br>
:heavy_plus_sign: থিম ভার্সন <br>
:heavy_plus_sign:Text Domain (থিম কে ট্রান্সলেট করার জন্য ) <br>
 এত টুকু কাজ করলে থিম সেটআপ শেষ <br>
:end::end::end::end::end::end::end:<br>

থিম ডেভেলপমেন্ট wp বিল্টইন ফাঙ্কশন রয়েছে সেই গুলি নিয়ে জানবো :fire:<br>
:underage:site_url() and home_url() <b>
এই ফাঙ্কশন ওয়েবসাইট ইউআরএল বের করার জন্য <b>
:underage: get_teamplate_directory_uri()<br>
এই ফাঙ্কশন টি থিমের ডিরেক্টরী লোকেশন বের করার জন্য <br>
:underage: get_stylesheet_uri()<br>
এই ফাঙ্কশনটি style.css ফাইল লোকেশন বের করার জন্য <br>
:underage: get_header() <br>
এই ফাঙ্কশন টি header ফাইলটি অ্যাড করার জন্য <br>
:underage: get_footer() <br>
এই ফাঙ্কশন টি footer ফাইলটি অ্যাড করার জন্য <br>
:underage: প্রতিটি পেজ Customize Support দেয়ার জন্য
</head> পূর্বেই wp-header() ডিফাইন করে দিবো <br>
footerশেষ হওয়ার পর্বেই wp-footer ডিফাইন করে দিবো <br>
:underage:আমরা যে পেজ যাবো সেই পেজে অনুযায়ী ক্লাস গুলি পাওয়ার জন্য body টা body_class() লিখব <br>
#এখন আমরা ওয়ার্ডপ্রেস যে title,description,languages ,charset যেন অটোমেটিক পেজ গুলি পাই সেই জন্য নিচে ফাঙ্কশন গুলি দেখবো  <br>
:recycle: bloginfo('title')<br>
:recycle: bloginfo('description')<br>
:recycle: language_attributes()<br>
:recycle: bloginfo('charset');<br>
 পার্ট-৫ <br>
 নতুন একটি থিম ডেভেলপ করার প্রসেস এন্ড Redux SetUp <br>
 ওয়ার্ডপ্রেস $() সাপোর্ট করে না তাই scripts $() কে jQuery দিয়ে convert করবো <br> 
 আর এই প্রসেস তে হইলো <br>
 (function($){<br>
 ভিতরে সব স্ক্রিপ্ট code থাকবে <br>
})(jQuery);<br>
 step -১: গিটহাব থেকে Redux ফাইল টি ডাউনলোড দিবো <br>
 setp -২: থিম ভিতরে একটি ফোল্ডার নিবো।<br> 
 step -৩: গিটহাব থেকে ডাউনলোডকিত ফাইলটি ভিতরে ফাইল গুলি কপি করে পেস্ট করবো।<br><br> 
 step -৪: থিম ভিতরে যে functions.php ফাইলটি আছে ওটি তে ডাউনলোড করে কিছু ফাইল অ্যাড করবো<br><br>
 step -৫: sample.config .php ফাইল টিকে কপি করে rename config.php করবো আর সব কাজ এর ভিতরে করবো <br>
 step -৬: require_once("inc/Redux/ReduxCore/framework.php");<br>
 step -৭: require_once("inc/Redux/sample/config.php");<br>

   
   
   
   
