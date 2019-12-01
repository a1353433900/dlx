<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>东理淘-新闻网</title>
    <link rel="stylesheet" href="css/schoolnews.css">
    <!-- Bootstrap中文字体版 -->
    <link href="css/index1.css" rel="stylesheet">
    <!-- 自定义样式 -->
    <link href="css/index2.css" rel="stylesheet">
    <script type='text/javascript' src='js/jquery.min.js'></script>
    <link rel="icon" href="image/favicon.ico" type="image/x-icon" />
    <script>
        window.onload = function () {
            var oBct = document.getElementById('bcb_top');
            var oDivt = oBct.getElementsByTagName('div');
            var oBcb = document.getElementById('bcb_bottom');
            var oDivb = oBcb.getElementsByTagName('div');
            for (var i = 0; i < oDivt.length; i++) {
                oDivt[i].index = i;
                oDivt[i].onmouseover = function () {
                    for (var i = 0; i < oDivt.length; i++) {
                        oDivt[i].className = '';
                        oDivb[i].style.display = 'none';
                    }
                    this.className = 'active';
                    oDivb[this.index].style.display = 'block';
                }
            }

        };
        window.onload = function () {
            document.getElementById('l2').setAttribute('class','active');
            document.getElementById('l6').removeAttribute('class');
        };
    </script>
</head>

<body>
    <!-- 整站通用的头部及导航条 -->
    <?php require 'header.php' ?>
    <!-- 整站通用的头部及导航条 -->

    <div id="headtop">
        <div class="Live">
            <div class="inline">
                <a href="index.html">返回首页</a>
                <a target="blank" href="http://news.ecut.edu.cn/main.htm">学校首页</a>
                <a href=# onClick="this.style.behavior='url(#default#homepage)';this.setHomePage
                ('http://study.lanwang.com');">设为首页</a>
                <script language="JavaScript">
                    function bookmarkit() {
                        window.external.addFavorite('http://www.aaa.com', '')
                    }
                    if (document.all) document.write(
                        '<a href="http://study.lanwang.com" onClick="bookmarkit()">将本站加入收藏夹</a>')
                </script>
                <a href="javascript:AddFavorite('东理淘-新闻平台','http://study.lanwang.com/schoolnews.html');">收藏本站</a>
                <a href="#">在线投稿</a>
            </div>
        </div>
    </div>
    <!-- <div id="head">
        <div class="word">
            <a href="news/list1.html"><span class="ptn_1">热门</span></a>
            <a href="news/listx1.html"><span class="ptn_1">校级新闻</span></a>
            <a href="news/listy1.html"><span class="ptn_1">院级新闻</span></a>
            <a href="news/listt1.html"><span class="ptn_1">学校通知</span></a>
            <a href="news/listj1.html"><span class="ptn_1">校园景象</span></a>
        </div>
    </div> -->
    <div class="body">
        <div class="center">
            <div class="body_l">
                <div>
                    <div class="warper">
                        <div id="wowslider-container1">
                            <div class="ws_images">
                                <ul>
                                    <li><a target="_blank" href="#"><img title="热气球设计大赛"
                                                src="../image/schoolnews/bimg1.jpg" /></a></li>
                                    <li><a target="_blank" href="#"><img title="大学生摄影大赛作品(一)"
                                                src="../image/schoolnews/bimg2.jpg" /></a></li>
                                    <li><a target="_blank" href="#"><img title="大学生摄影大赛作品(二)”"
                                                src="../image/schoolnews/bimg3.jpg" /></a></li>
                                    <li><a target="_blank" href="#"><img title="热气球设计大赛"
                                                src="../image/schoolnews/bimg1.jpg" /></a></li>
                                    <li><a target="_blank" href="#"><img title="大学生摄影大赛作品(一)"
                                                src="../image/schoolnews/bimg2.jpg" /></a></li>
                                    <li><a target="_blank" href="#"><img title="大学生摄影大赛作品(二)"
                                                src="../image/schoolnews/bimg3.jpg" /></a></li>
                                </ul>
                            </div>
                            <div class="ws_thumbs">
                                <div>
                                    <a target="_blank" href="#"><img src="../image/schoolnews/simg1.jpg" /></a>
                                    <a target="_blank" href="#"><img src="../image/schoolnews/simg2.jpg" /></a>
                                    <a target="_blank" href="#"><img src="../image/schoolnews/simg3.jpg" /></a>
                                    <a target="_blank" href="#"><img src="../image/schoolnews/simg1.jpg" /></a>
                                    <a target="_blank" href="#"><img src="../image/schoolnews/simg2.jpg" /></a>
                                    <a target="_blank" href="#"><img src="../image/schoolnews/simg3.jpg" /></a>
                                </div>
                            </div>
                            <div class="ws_shadow"></div>
                        </div>
                    </div>

                    <script type="text/javascript" src="js/slider.js"></script>
                    <script type="text/javascript">
                        jQuery("#wowslider-container1").wowSlider({
                            effect: "cube",
                            prev: "",
                            next: "",
                            duration: 20 * 100,
                            delay: 20 * 100,
                            width: 716,
                            height: 297,
                            autoPlay: true,
                            playPause: true,
                            stopOnHover: false,
                            loop: false,
                            bullets: 0,
                            caption: true,
                            captionEffect: "slide",
                            controls: true,
                            onBeforeStep: 0,
                            images: 0
                        });
                    </script>

                </div>
                <!-- <div class="warper">
                    <div id="wowslider-container1">
                        <div class="ws_images">
                            <ul>
                                <li><a target="_blank" href="#"><img title="高级职位都在这里"
                                            src="image/schoolnews/bimg1.jpg" /></a></li>
                                <li><a target="_blank" href="#"><img title="互联网设计布道者冯铁看诊把脉"
                                            src="image/schoolnews/bimg2.jpg" /></a></li>
                                <li><a target="_blank" href="#"><img title="颜值不高别装“表”"
                                            src="image/schoolnews/bimg3.jpg" /></a></li>
                                <li><a target="_blank" href="#"><img title="高级职位都在这里"
                                            src="image/schoolnews/bimg1.jpg" /></a></li>
                                <li><a target="_blank" href="#"><img title="互联网设计布道者冯铁看诊把脉"
                                            src="image/schoolnews/bimg2.jpg" /></a></li>
                                <li><a target="_blank" href="#"><img title="颜值不高别装“表”"
                                            src="image/schoolnews/bimg3.jpg" /></a></li>
                            </ul>
                        </div>
                        <div class="ws_thumbs">
                            <div>
                                <a target="_blank" href="#"><img src="image/schoolnews/simg1.jpg" /></a>
                                <a target="_blank" href="#"><img src="image/schoolnews/simg2.jpg" /></a>
                                <a target="_blank" href="#"><img src="image/schoolnews/simg3.jpg" /></a>
                                <a target="_blank" href="#"><img src="image/schoolnews/simg1.jpg" /></a>
                                <a target="_blank" href="#"><img src="image/schoolnews/simg2.jpg" /></a>
                                <a target="_blank" href="#"><img src="image/schoolnews/simg3.jpg" /></a>
                            </div>
                        </div>
                        <div class="ws_shadow"></div>
                    </div>
                </div> -->
            </div>
            <div class="p_right">
                <div class="b_bit">
                    <div class="b_tname">要闻</div>
                    <div id="b_time">
                        <script>
                            //这里代码多了几行，但是不会延迟显示，速度比较好，格式可以自定义，是理想的时间显示
                            setInterval("fun(b_time)", 1);

                            function fun(timeID) {
                                var date = new Date(); //创建对象  
                                var y = date.getFullYear(); //获取年份  
                                var m = date.getMonth() + 1; //获取月份  返回0-11  
                                var d = date.getDate(); // 获取日  
                                var w = date.getDay(); //获取星期几  返回0-6   (0=星期天) 
                                var ww = ' 星期' + '日一二三四五六'.charAt(new Date().getDay()); //星期几
                                var h = date.getHours(); //时
                                var minute = date.getMinutes() //分
                                var s = date.getSeconds(); //秒
                                var sss = date.getMilliseconds(); //毫秒
                                if (m < 10) {
                                    m = "0" + m;
                                }
                                if (d < 10) {
                                    d = "0" + d;
                                }
                                if (h < 10) {
                                    h = "0" + h;
                                }


                                if (minute < 10) {
                                    minute = "0" + minute;
                                }


                                if (s < 10) {
                                    s = "0" + s;
                                }


                                if (sss < 10) {
                                    sss = "00" + sss;
                                } else if (sss < 100) {
                                    sss = "0" + sss;
                                }


                                document.getElementById(timeID.id).innerHTML = "北京时间:" + y + "-" + m + "-" + d + "   " +
                                    h + ":" +
                                    minute + ":" + s + "  " + ww;
                                //document.write(y+"-"+m+"-"+d+"   "+h+":"+minute+":"+s);  
                            }
                        </script> 
                    </div>
                </div>
                <div class="artcletitle">
                    <h1>
                        <a target="_blank" href="#"
                            title="东华理工大学校友会第一届理事会第三次会议暨教育发展基金会第一届理事会第二次会议隆重召开">东华理工大学校友会第一届理事...</a>
                    </h1>
                    <p>
                        [
                        <a target="_blank" href="#">第一届理事会</a>
                        <a target="_blank" href="#">教育发展基金</a>
                        ]
                    </p>
                    <h1>
                        <a target="_blank" href="#" title="我校刘义保教授带队参加核能与环境国际高端论坛">我校刘义保教授带队参加核能...</a>
                    </h1>
                    <p>
                        [
                        <a target="_blank" href="#">核能与环境</a>
                        <a target="_blank" href="#">论坛</a>
                        ]
                    </p>
                    <h1>
                        <a target="_blank" href="#" title="志存高远  敦本务实  争做新时代东华理工追梦人——校学生会致全体同学倡议书">志存高远 敦本务实 争做新时...</a>
                    </h1>
                    <p>
                        [
                        <a target="_blank" href="#">校学生会</a>
                        <a target="_blank" href="#">倡议书</a>
                        ]
                    </p>
                </div>

            </div>
            <div class="body_r">

            </div>
            <div id="mod">
                <div class="mod1">
                    <div class="m1">
                        <div class="tt">
                            <h3> <span class="title" frag="标题"><a href="news/listx1.html" target="_blank"
                                        rel="noopener noreferrer">校级新闻</a></span></h3>
                        </div>
                        <div class="con">
                            <ul class="news_list">
                                <div class="bt">
                                    <a href="#" target="_blank" rel="noopener noreferrer"
                                        title="【最美园丁】孙红娟：教学相长  真心相随">【最美园丁】孙红娟：教学相长 真心相随</a>
                                    <span class="news_time">2019-04-17</span></a>
                                </div>
                                <div class="bt">
                                    <a href="#" target="_blank" rel="noopener noreferrer"
                                        title="【最美园丁】杜艳军：欲责其效   必尽其方">【最美园丁】杜艳军：欲责其效 必尽其方</a>
                                    <span class="news_time">2019-04-17</span>
                                </div>
                                <div class="bt">
                                    <a href="#" target="_blank" rel="noopener noreferrer"
                                        title="【最美园丁】管文娟：我选择教师这个职业，是因为它适合我">【最美园丁】管文娟：我选择教师这个职...</a>
                                    <span class="news_time">2019-04-17</span>
                                </div>
                                <div class="bt">
                                    <a href="#" target="_blank" rel="noopener noreferrer"
                                        title="中国地质科学院矿产资源研究所袁顺达研究员应邀来我校讲学">中国地质科学院矿产资源研究所袁顺达研...</a>
                                    <span class="news_time">2019-04-17</span>
                                </div>
                                <div class="bt">
                                    <a href="#" target="_blank" rel="noopener noreferrer"
                                        title="中科院等离子体物理研究所研究员杨庆喜应邀来校讲学">中科院等离子体物理研究所研究员杨庆喜...</a>
                                    <span class="news_time">2019-04-17</span>
                                </div>
                            </ul>
                        </div>
                    </div>
                    <div class="m2">
                        <div class="tt">
                            <h3> <span class="title" frag="标题"><a href="news/listy1.html" target="_blank"
                                        rel="noopener noreferrer">院级新闻</a></span></h3>
                        </div>
                        <div class="con">
                            <ul class="news_list">
                                <div class="bt">
                                    <a href="#" target="_blank" rel="noopener noreferrer"
                                        title="我校测绘工程专业接受专业认证现场考查">我校测绘工程专业接受专业认证现场考查</a>
                                    <span class="news_time">2019-04-17</span></a>
                                </div>
                                <div class="bt">
                                    <a href="#" target="_blank" rel="noopener noreferrer"
                                        title="我校邓居智教授带队参加重磁电国际地球物理会议">我校邓居智教授带队参加重磁电国际地球物理会议</a>
                                    <span class="news_time">2019-04-17</span>
                                </div>
                                <div class="bt">
                                    <a href="#" target="_blank" rel="noopener noreferrer"
                                        title="美国普渡大学李培军教授应邀来我校讲学">美国普渡大学李培军教授应邀来我校讲学</a>
                                    <span class="news_time">2019-04-17</span>
                                </div>
                                <div class="bt">
                                    <a href="#" target="_blank" rel="noopener noreferrer"
                                        title="饮水思源，感恩国家资助——我校开展资助育人系列活动">饮水思源，感恩国家资助——我校开展资助育人系列活动</a>
                                    <span class="news_time">2019-04-17</span>
                                </div>
                                <div class="bt">
                                    <a href="#" target="_blank" rel="noopener noreferrer"
                                        title="学校召开保密工作会议暨保密警示教育大会">学校召开保密工作会议暨保密警示教育大会</a>
                                    <span class="news_time">2019-04-17</span>
                                </div>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="mod2">
                    <div class="m1">
                        <div class="tt">
                            <h3> <span class="title" frag="标题"><a href="news/listt1.html" target="_blank"
                                        rel="noopener noreferrer">学校通知</a></span></h3>
                        </div>
                        <div class="con">
                            <ul class="news_list">
                                <div class="bt">
                                    <a href="#" target="_blank" rel="noopener noreferrer"
                                        title="坚持立德树人，建设一流本科——我校召开2019年本科教育工作会议">坚持立德树人，建设一流本科——我...</a>
                                    <span class="news_time">2019-04-17</span></a>
                                </div>
                                <div class="bt">
                                    <a href="#" target="_blank" rel="noopener noreferrer"
                                        title="学校党委召开中心组学习会传达学习习近平总书记视察江西时的重要讲话精神">学校党委召开中心组学习会传达学习...</a>
                                    <span class="news_time">2019-04-17</span>
                                </div>
                                <div class="bt">
                                    <a href="#" target="_blank" rel="noopener noreferrer"
                                        title="我校在京承办第三届全国旅游地学学科建设研讨会">我校在京承办第三届全国旅游地学学...</a>
                                    <span class="news_time">2019-04-17</span>
                                </div>
                                <div class="bt">
                                    <a href="#" target="_blank" rel="noopener noreferrer"
                                        title="中科院等离子体物理研究所研究员杨庆喜应邀来校讲学">中科院等离子体物理研究所研究员杨...</a>
                                    <span class="news_time">2019-04-17</span>
                                </div>
                                <div class="bt">
                                    <a href="#" target="_blank" rel="noopener noreferrer"
                                        title="我校邓居智教授带队参加重磁电国际地球物理会议">我校邓居智教授带队参加重磁电国际...</a>
                                    <span class="news_time">2019-04-17</span>
                                </div>
                            </ul>
                        </div>
                    </div>
                    <div class="m2">
                        <div class="tt">
                            <h3> <span class="title" frag="标题"><a href="news/listj1.html" target="_blank"
                                        rel="noopener noreferrer">校园景象</a></span></h3>
                        </div>
                        <div class="con">
                            <ul class="news_list">
                                <div class="bt">
                                    <a href="#" target="_blank" rel="noopener noreferrer"
                                        title="南昌校区校园风光（艺术学院赵魁林老师摄影作品）">南昌校区校园风光（艺术学院赵魁林老师...</a>
                                    <span class="news_time">2019-04-17</span></a>
                                </div>
                                <div class="bt">
                                    <a href="#" target="_blank" rel="noopener noreferrer"
                                        title="抚州校区校园风光（艺术学院赵魁林老师摄影作品">抚州校区校园风光（艺术学院赵魁林老师...</a>
                                    <span class="news_time">2019-04-17</span>
                                </div>
                                <div class="bt">
                                    <a href="#" target="_blank" rel="noopener noreferrer"
                                        title="【江西教育电视台】东华理工大学：搭实践平台 育军工人才">【江西教育电视台】东华理工大学：搭实...</a>
                                    <span class="news_time">2019-04-17</span>
                                </div>
                                <div class="bt">
                                    <a href="#" target="_blank" rel="noopener noreferrer"
                                        title="东华理工2016年宣传片（特色版）">东华理工2016年宣传片（特色版）</a>
                                    <span class="news_time">2019-04-17</span>
                                </div>
                                <div class="bt">
                                    <a href="#" target="_blank" rel="noopener noreferrer"
                                        title="东华理工大学2016年宣传片">东华理工大学2016年宣传片</a>
                                    <span class="news_time">2019-04-17</span>
                                </div>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="footer">
        <div class="container">
            <div class="row">
                <div class="col-xs-6 col-sm-2 footer-item">
                    <div class="footer-list">
                        <h4>常用工具</h4>
                        <ul>
                            <li><a href="#"">交易平台</a></li>
                                <li><a href=" #">图片下载</a></li>
                            <li><a href="#">资料下载</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-2 footer-item">
                    <div class="footer-list">
                        <h4>快速链接</h4>
                        <ul>
                            <li><a href="express.html">快递代取</a></li>
                            <li><a href="#">留言板</a></li>
                            <li><a href="#">公告栏</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-2 footer-item">
                    <div class="footer-list">
                        <h4>关于我们</h4>
                        <ul>
                            <li><a href="#">关于我们</a></li>
                            <li><a href="#">服务协议</a></li>
                            <li><a href="javascript:AddFavorite('东篱下-校园综合服务平台','http://study.lanwang.com/');">收藏本站</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-2 footer-item">
                    <div class="footer-wechat">
                        <img class="img-responsive" src="image/index/LW_WX.jpg">
                        <p>微信<sapn class="hidden-sm">号:</sapn>dlx</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 footer-item footer-item-last">
                    <div class="footer-contact">
                        <h2><img src="http://www.clantrip.com/static/images/icons/pc-footer-phone.png">17687974147</h2>
                        <h2><img src="http://www.clantrip.com/static/images/icons/pc-footer-qq.png">1353433900</h2>
                        <h2><img src="http://www.clantrip.com/static/images/icons/pc-footer-mob.png">17687974147</h2>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <div id="copyright">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <p>Copyright © 2019 dlt.com All Rights Reversed. 东篱下 <a target="_blank" href="#">赣ICP备18008511号</a>
                    </p>

                    <div style="width:300px;margin:0 auto; padding:20px 0; text-align: center;">
                        <a target="_blank" href="#"
                            style="display:inline-block;text-decoration:none;height:20px;line-height:20px;">
                            <img src="http://www.clantrip.com/static/images/ghs.png" style="float:left;" />
                            <p style="float:left;height:20px;line-height:20px;margin: 0px 0px 0px 5px; color:#fafafa;">
                                赣ICP备18008511号</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- 通用页脚 -->
    <script>
        var fnTextPopup = function (arr, options) {
            // arr参数是必须的
            if (!arr || !arr.length) {
                return;
            }
            // 主逻辑
            var index = 0;
            document.documentElement.addEventListener('click', function (event) {
                var x = event.pageX,
                    y = event.pageY;
                var eleText = document.createElement('span');
                eleText.className = 'text-popup';
                this.appendChild(eleText);
                if (arr[index]) {
                    eleText.innerHTML = arr[index];
                } else {
                    index = 0;
                    eleText.innerHTML = arr[0];
                }
                // 动画结束后删除自己
                eleText.addEventListener('animationend', function () {
                    eleText.parentNode.removeChild(eleText);
                });
                // 位置
                eleText.style.left = (x - eleText.clientWidth / 2) + 'px';
                eleText.style.top = (y - eleText.clientHeight) + 'px';
                // index递增
                index++;
            });
        };
        fnTextPopup(['富强', '民主', '文明', '和谐', '自由', '平等', '公正', '法治', '爱国', '敬业', '诚信', '友善']);
    </script>

</body>

</html>