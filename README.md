 
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
# এখন আমরা ওয়ার্ডপ্রেস যে title,description,languages ,charset যেন অটোমেটিক পেজ গুলি পাই সেই জন্য নিচে ফাঙ্কশন গুলি দেখবো  <br>
:recycle: bloginfo('title')<br>
:recycle: bloginfo('description')<br>
:recycle: language_attributes()<br>
:recycle: bloginfo('charset');<br>
 
পার্ট-২: :fire: <br>
আমাদের ব্যাকএন্ড সকল কাজ functions.php ভিতরে হবে।<br>
function গুলিকে কাজ করাতে গেলে আমাকে wp hocks use করতে হবে। দুইটি hocks যথা :<br>
১.add_action();<br>
২.add_filter();<br>
add_action(): ডিফল্ট ভাবে যে ফাঙ্কশন গুলি আছে সেই ফাঙ্কশন গুলি কে কাজ করানোর। <br>
add_filter(): ফাঙ্কশন গুলি কে modify করে ব্যবহার করার জন্য এই ফাঙ্কশন ব্যবহার করে হয়.<br>
Menu Register করার জন্য নিচে কাজ গুলি করবো <br>
single Menu ও Multi-Menu রেজিস্টার করার জন্য <br>
 ```
 function coder_it_theme(){
	add_theme_support("title-tag");

	// Menu
  //single-menu Register 
	 register_nav_menu("main-menu","Main Menu"); 
	// multi-menu Register
	register_nav_menus(array(
		"Main-menu" => "main-menu",
		"Footer-menu" => "footer-menu"

	));

}
add_action("after_setup_theme","coder_it_theme")
 ```
ওয়ার্ডপ্রেস ড্যাশবোর্ড থেকে appearence-menus ওইখানে আমরা menu গুলি অ্যাড করবো <br> .
তারপর header.php নিচে কোড গুলি করবো 
```
<!DOCTYPE html>
<html>
<head>
	
	<?php wp_head(); ?>
</head>
<body>
<div class="header-menu">
	<?php 

     wp_nav_menu(array(

     	"theme_location" => "Main-menu"
     ))

	?>
</div>

```

যতগুলি মেনু তৈরি করবো ঠিক ততো গুলি functions.php তে মেনু রেজিস্টার করবো  <br>
আমাদের কাছে মেনু register id গুলি খুব important . <br>
 এত টুকু কাজ করলে মেনু রেজিস্টার শেষ <br>
 :end::end::end::end::end:
 
 :red_circle: SideBar কি ভাবে রেজিস্টার করতে হয় সেই সম্পর্কে জানব <br>
 
 প্রথম আমাকে slidebar functions.php register করে নিতে হবে <br>
 ```
 // Sidebar Register
function first_sidebar(){
	register_sidebar(array(

		"name" => "Right Sidebar",
		"id" => "right-sidebar"
	));
}
add_action("widgets_init","first_sidebar");
 ```
 
 আমরা মাল্টিপল slide-bar ব্যবহার করবো যা ভাবে 
 
 ```
 // Sidebar Register
function first_sidebar(){
	register_sidebar(array(

		"name" => "Right Sidebar",
		"id" => "right-sidebar",
		"before_widget" => '<div class="sidebar-1">',
		"after_widget" => '</div>'
	));

	register_sidebar(array(

		"name" => "Footer Slidebar",
		"id" => "footer-slidebar"
	));
}
add_action("widgets_init","first_sidebar");
 ```
 
 দ্বিতীয় যে পেজে widget গুলি দেখাবো
 ```
 <div class="sidebar-area">
		<h1>Our Sidebar</h1>
		<?php dynamic_sidebar('right-sidebar'); ?>

	</div>	sfddsa
 ```
 :end::end::end::end::end:
 
 পার্ট-৩ :fire: <br>
 Feature Image কিভাবে অ্যাড করবো তা জানবো :point_right: <br>
 ```
 function coder_it_theme(){
	add_theme_support("post-thumbnails");

}
add_action("after_setup_theme","coder_it_theme");
 ```
কিভাবে পোস্ট শো করাবো ?:point_right: 
```
<?php while(have_posts()):the_post(); ?>
<hr>
 <div class="single-post">
	<h1>Title:<?php the_title(); ?></h1>
	<?php the_post_thumbnail(); ?>
	<p>Content:<?php the_content(); ?></p>
	<p>Date :<?php the_time('j F Y g:i:A');?></p>
	<p>Author :<?php the_author(); ?></p>
	<p>Comments:<?php comments_popup_link("comment nai","1 comment","% comments","comment_className","Disable Comments"); ?></p>
	<a href="<?php the_permalink(); ?>">Read more..</a>
</div>
<hr>
<?php endwhile; ?>
```
:end::end::end::end::end::end::end::end::end::end:

পার্ট-৪ <br>
আজকে আমরা জানবো কিভাবে post-type-register করতে হয় <br>
আমরা যেভাবে menu-register করেছি ঠিক সেই ভাবে post-type-register .<br>
post-type-register বলতে blog-post মতো repited এমন কিছু জন্য নতুন অ্যাড পোস্ট তৈরি করাকে বুঝাই <br>
```
// Post type register
	register_post_type("service",array(
		"labels" => array(
			"name" => "Service",
			"add_new" => "Add New Service",
			"add_new_item" => "Add New Service",
			"featured_image" => "Service Image",
			"set_featured_image" => "Set Service Image",
			"remove_featured_image" => "Remove Service Image",
			"use_featured_image" => "Use Service Image"

		),
		"public" => true,
		"supports" => array('title', 'editor','thumbnail'),
		"menu_position" => 5,
		"menu_icon" => "dashicons-admin-generic"

	));
```

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

   
   
   
   
