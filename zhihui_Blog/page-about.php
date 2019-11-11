<?php   
/*
Template Name: 关于博客  
*/  
?>  
<!DOCTYPE html>
<html lang="en">
<head>
    <title>我的博客我做主&nbsp;-&nbsp;了解智慧博客从这里开始&nbsp;|&nbsp;<?php echo get_bloginfo('description'); ?></title>
    <?php require ('common.php'); ?>
</head>
    <body>
    <!--头部文件引用start-->
	<?php get_header();?>
	<!--头部文件引用end-->

    <!-- 正文区域start -->
    <div class="continar">
         <div class="continar-left" id="details">
             <!-- 用户中心头部start -->
             <div class="head_user_b"> 
                   <div class="head_user"> 
                    <div class="head_user_a"> 
                     <div class="head_avatar"> 
                      <a href="javascript:;"> 
                       <m class="head_user_avatar_aa"> 
                             <img src="<?php bloginfo('template_url'); ?>/images/head_portrait.jpg" class="avatar" width="160" height="160" alt="<?php echo get_bloginfo('name'); ?>" />
                       </m> <span class="verify_1"></span></a> 
                     </div> 
                     <div class="head_avatar_a">
                      <p>Admin<i class="img-icon icon_male"></i><span title="等级：45级" style="vertical-align: 0px;" class="lv lv45"></span> <a href="/author/0?info=vip#user_menu" title="VIP 6" class="vip_aa"><img src="<?php bloginfo('template_url'); ?>/images/vip9.png" class="vip_ico vip6" alt="<?php echo get_bloginfo('name'); ?>" /></a></p>
                     </div> 
                     <div class="head_avatar_b">
                        <p> 管理员 </p>
                     </div> 
                     <div class="head_avatar_c"> 
                        <a href="https://jq.qq.com/?_wv=1027&k=4BemYKg">
                            <span class="follow-btn unfollowed" onclick="jinsom_pop_login_style();"><i class="fa fa-plus"></i> 关 注</span>
                        </a>
                     </div> 
                    </div> 
                    <div class="head_user_data">
                         <span>人气：9999+</span> 
                         <span>粉丝：998</span> 
                         <span>关注：1983</span>
                    </div> 
                   </div> 
             </div>
             <!-- 用户中心头部end -->
             <h4 class="h4">站长简介</h4>
             <ul class="clearfix">
                    <!-- <li class="photo limit_w">
                        <a href="#" title="李俊">
                            <img src="<?php bloginfo('template_url'); ?>/images/IMG_0028.JPG" width="150" alt="<?php echo get_bloginfo('name'); ?>" title="李俊">
                        </a>
                    </li> -->
                    <li class="limit_w"><span>姓名：刘龙根</span><span>名族：汉</span></li>
                    <li class="limit_w"><span>星座：金牛座</span><span>学历：大专</span></li>
                    <li class="limit_w"><span>籍贯：陕西商洛</span></li>
                    <li class="limit_w"><span>专业：软件技术</span></li>
                    <li class="" style="margin-bottom:0"><span>职业：Web前端开发工程师</span></li>
                    <li><span>坐标：陕西 - 西安</span></li>
                    <!-- <li>
                        <span class="zym">
                            原创座右铭：放弃，不会更舒服，撑住，才有后来的一切！
                        </span>
                    </li> -->
                    <li class="zw_li h5"><span class="career">自我说明：</span></li>
                    <li class="index">
						欢迎来到智慧博客！本人前端小萌新，目前大二学生、、喜欢各种有趣的事。父母务农，高中就喜欢计算机（那时，做过免流软件，个人网站开发*^_^*），于是大学报读西北大学软件技术系。当进入大学后，我骤然发现人与人的区别竟然是那么的明显，有同学城市户口，有的家里开公司办厂，和同学一比难免无比自卑（感觉自己毫无优势）。加之如今的大学含金量真是。。。老师讲的课无力吐槽。。。于是想，未来该怎么办？如何在这个社会立足？
                    </li>
                    <li class="index">
                        18年进大学-期间在班级就任团支书，总觉得只是小打小闹，恪尽职守完成组织安排的各种事情；课余没事就打打王者荣耀 ，当然也充过不少钱，小打小闹到了大一期末，感觉自己这样混吃等死一样的窝囊，什么也不会，基础知识一窍不通！
                    </li>
                    <li class="index">
                        偶然机会在"腾讯课堂"看到了公开课讲网页制作（还不算前端）,顿时被震撼，那时候我觉得视频里老师就是神一般的存在，他就像一个画家，在苍白的屏幕上点缀了闪烁的光彩，才觉悟，原来这才是真正的开发，让我重新燃起了希望。然在在大一暑假里看各种视频教程学前端。现在勉强入门懂那么一丢丢了，但还需努力，要成为更好的自己。
                    </li>
					<li class="index">
						未完待续
                    </li>
                    <li><span class="career">职业生涯：</span></li>
                    <li class="index">
                        还没经历 既期待又迷茫。但更多的是坚信！
                    <li class="index">
                       
                    </li>
                    <li class="index">
                       
                    </li>
                    <li class="index">
                       
                    </li>
                    <li class="index">
                      
                    </li>
                    <li class="index">
                        
                    </li>
                    <li class="index">
                       
                    </li>
                </ul>
                <h4 class="h4">博客介绍</h4>
                <p class="px">
                    此网站后台采用WordPress，前端模块是参考开发(参考开发，如有雷同纯属你懂得。。。)，运用大量js+css3运动，整体页面华丽的同时也会暗藏bug，尽管本人多次测试，但难免在众多设备或不同人不同见解下任有所不足之处，如有好的意见欢迎给我留言，博客会适当改进，慢慢改版。最后感谢大家的关注，尤其谢谢<a href="<?php bloginfo('template_url'); ?>/thanks.html">各位</a>提供的帮助！
                </p>
                <p class="px">
                   智慧博客个人博客，是我第二次创建的个人博客，主要用于记录学习前端学习、工作笔记、心得的地方，抒发自己情感的地方，在今后的岁月里会慢慢来打磨并持续更新维护。通过这个博客网站，时常勉励自己，一定不能偷懒，学无止境。同时，也希望认识了积极热爱学习的朋友，互联网将我们团聚在一起，我们就要共同探讨工作、学习、生活，不仅增长技术，还可以释放压力。通过这个博客网站，我善待我的每一个朋友，如果是正在学习的学生，我希望我总结的文章，能帮到你们，少走一些弯路。如果你在学习前端或者工作过程中，有什么问题，都可以咨询我或者加入我的微信：1661163785。
                </p>
                <p class="px">
                    也有人说，你花那么多时间去自己开发和维护这么一个小小个人博客网站有多大意义？这种网站遍地都是，开发完了还浪费时间维护更新，
                    既没什么收益，又耗费时间，何不去把这些时间去用于更高级的技术层面研究上。其实这个问题问的一针见血，开发维护这个网站确实占用了很大一部分课余时间，但是，
                    既然当初花那么大的精力想做出来了，为啥不继续维护好呢？毕竟很多时候你会发现，养了一只巴掌大宠物时间久了，也会有感情的，尤其是：
                    你能独立做一个网站和你独立做成过一个网站其实是两回事。还可以通过博客这个平台，还可以让全世界的人有更多机会认识到自己和了解自己，互相有所交流，也是一件有趣的事情。
                </p>
                <h4 class="h4">后记</h4>
                <p class="px">
                    有些同学觉得，做技术类博客就要做似乎很牛逼的，让别人看了懵逼的，看完似乎懂了，又好像什么都不会的。但事实上，个人博客首先只是记录个人笔记。其次，在工作过程中，遇到问题你是先百度当前问题急需寻找解决答案？又或者是找学术性文章研究源码追溯本源？
                </p>
                <div class="px">
                    其实无论是牛逼的，还是基础的，语文功底100分，59的，这不是重点，重点是只要你能用最直白简单的语言表达出了你想说的意思，那就是优秀文章，你要做的只是让需要这篇文章的不同层级阶段的小伙伴能看到后快速学习并解决掉当前问题，那就是优秀的博客。
                </div>
         </div>
         <!-- 左侧区域end -->
    </div>
    <!-- 正文区域end -->
    
	<!-- 底部引用区域start -->
    <?php get_footer()?>
    <!-- 底部引用区域end -->
</body>
</html>