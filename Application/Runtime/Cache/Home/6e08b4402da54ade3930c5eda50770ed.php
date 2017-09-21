<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>主页</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="/sou185/Public/layui/css/layui.css"  media="all">
</head>
<body>
<div style="min-width:1920px;max-width:2230px;margin:0 auto;">
    <div class="layui-container" style="height:40px;;width:100%;background-color:black;">
        <div class="layui-row" style="width:65%;margin:0 auto;height:100%;">
            <div class="layui-col-xs2" style="height:40px;">
                <div class="layui-col-xs6"><a style="color:#dddddd;line-height:40px;">收藏本页</a></div>
                <div class="layui-col-xs6"><a style="color:#dddddd;line-height:40px;">二维码</a></div>
            </div>
            <div class="layui-col-xs6" style="border:1px solid black"></div>
            <div class="layui-col-xs4" style="height:100%;">
                <div style="float:left;width:38%;">
                    <span style="color:#dddddd;line-height:40px;float:right">欢迎 客人</span>
                </div>
                <div style="width:60%;float:right;">
                    <a style="color:#dddddd;line-height:40px;margin-left:10%;">请登录</a>
                    <a style="color:#dddddd;line-height:40px;margin-left:10%;">免费注册</a>
                    <a style="color:#dddddd;line-height:40px;margin-left:10%;">忘记密码?</a>
                </div>
            </div>
        </div>
    </div>
    <div class="layui-row" style="width:65%;margin:0 auto;">
        <div style="float:left"><img src="/sou185/Public/images/asd.jpg" height="150" width="250"></div>
        <div style="height:100%;float:right;width:60%;margin-right:20%;">
            <div style="float:right;height:40px;margin-top:10%;width:300px;">
                <img src="/sou185/Public/images/asd.jpg" width="40" height="40" style="padding-bottom:3px;">
                <input type="text" placeholder="请输入关键字" style="font-size:20px;width:190px;height:40px;border:1px solid #dddddd">
                <!--<input type="button" value="搜索" style="height:100%;background-color:red;width:19%;color:white;padding-top:5px;">-->
                <button style="height:100%;background-color:red;width:50px;;color:white;padding-top:3px;">搜索</button>
            </div>
        </div>
    </div>
    <style>
        .menu_list{  width:50%;margin:0 auto;  }
        .menu_li a{float:left;line-height:50px;height:50px;width:14%;font-weight:bold;font-size:19px;color:green;  }
        .menu_li_de a{float:left;line-height:50px;height:50px;width:14%;font-weight:bold;font-size:19px;color:#9B410E  }
        .menu_li a:hover{ color:#9B410E }
    </style>
    <div class="layui-row" style="height:50px;margin-top:10px;">
        <div class="menu_list">
            <ul>
                <li class="menu_li_de"><a href="">首页</a></li>
                <li class="menu_li"><a href="">特产供应</a></li>
                <li class="menu_li"><a href="">特产资讯</a></li>
                <li class="menu_li"><a href="">特产品牌</a></li>
                <li class="menu_li"><a href="">特产百科</a></li>
                <li class="menu_li"><a href="">特产图库</a></li>
                <li class="menu_li"><a href="">论坛中心</a></li>
            </ul>
        </div>
    </div>
    <div class="layui-row" style="width:65%;margin:0 auto;margin-top:5px;">
        <div class="layui-col-xs4" style="border:1px solid #dddddd">
            <div style="width:100%;margin:0 auto;height:500px;margin-top:10px;">
                <div style="height:60px;margin-left:5%;">
                    <span style="float:left;font-size:40px;font-weight:bold;color:yellow">今日PK</span>
                    <span style="float:left;line-height:60px;font-size:16px;margin-left:15px;">豆腐脑应该怎么吃</span>
                </div>
                <div style="background-color:#FFB90F;border-radius:8px;width:90%;margin:0 auto;height:200px;padding-top:15px;">
                    <span style="text-align:center;">
                        <span style="margin-left:65px;font-size:24px;font-weight:bold;color:#dddddd">加盐</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <span style="margin-left:30px;font-size:24px;font-weight:bold;color:white">VS</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <span style="margin-left:26px;font-size:24px;font-weight:bold;color:#dddddd">加糖</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    </span>
                    <p style="margin-top:10px;">
                        <p style="width:49%;color:#FF7F00;float:left;text-align:center;">11111</p>
                        <p style="width:49.5%;color:#FF7F00;float:left;text-align:center;">11111</p>
                    </p>
                    <div style="width:90%;margin:0 auto;margin-top:40px;height:30px;">
                        <div style="height:100%;text-align:center;line-height:30px;float:left;color:white;font-size:22px;width:50%;background-color:green">20</div>
                        <div style="height:100%;text-align:center;line-height:30px;float:left;color:white;font-size:22px;width:50%;background-color:red">20</div>
                    </div>
                    <div class="layui-col-xs12" style="height:30px;margin-top:20px;">
                        <div style="height:100%;font-size:16px;text-align:center;line-height:30px;float:left;margin-left:15%;border:1px solid red;border-radius:55px;width:20%;">顶一下</div>
                        <div style="height:100%;font-size:16px;text-align:center;line-height:30px;float:right;margin-right:15%;width:20%;border:1px solid red;border-radius:55px;">顶一下</div>
                    </div>
                </div>
                <div style="width:90%;border-left:3px solid green;margin:25px auto;font-size:22px;PADDING-LEFT:5px;">历史PK</div>
                <div style="height:60px;width:90%;margin:0 auto;background-color:#fffaf0">
                    <div style="height:28px;">
                        <p style="float:left;margin-top:5px;width:60%;text-align:center;font-size:16px;">南方香菇好还是北方香菇好?</p>
                        <p style="float:left;margin-top:7px;background-color:green;width:13%;text-align:center;color:white">进行中</p>
                    </div>
                    <div style="height:30px;">
                        <div style="width:50%;float:left;height:100%;text-align:right;line-height:30px;font-size:12px;">
                            北方 &nbsp;&nbsp;   11111票 &nbsp;&nbsp;  20% &nbsp;&nbsp; 领先
                        </div>
                        <div style="width:39%;float:right;height:100%;">
                            <a href="" style="border-radius:15px;margin:2.5% 10%;text-align:center;background-color:green;color:white;width:25%;float:left">顶</a>
                            <a href="" style="border-radius:15px;margin-top:2.5%;margin-right:25%;text-align:center;background-color:red;color:white;width:25%;float:right">踩</a>
                        </div>
                    </div>
                </div>
                <div style="height:60px;width:90%;margin:0 auto;background-color:#fffaf0">
                    <div style="height:28px;">
                        <p style="float:left;margin-top:5px;width:60%;text-align:center;font-size:16px;">南方香菇好还是北方香菇好?</p>
                        <p style="float:left;margin-top:7px;background-color:green;width:13%;text-align:center;color:white">完结</p>
                    </div>
                    <div style="height:30px;">
                        <div style="width:50%;float:left;height:100%;text-align:right;line-height:30px;font-size:12px;">
                            北方 &nbsp;&nbsp;   11111票 &nbsp;&nbsp;  20% &nbsp;&nbsp; 领先
                        </div>
                        <div style="width:39%;float:right;height:100%;">
                            <!--<a href="" style="border-radius:15px;margin:2.5% 10%;text-align:center;background-color:green;color:white;width:20%;float:left">顶</a>-->
                            <a href="" style="border-radius:15px;margin-top:2.5%;margin-right:25%;text-align:center;background-color:red;color:white;width:25%;float:right">评论</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="layui-col-xs4" style="height:500px;border-right:1px solid #dddddd">
            <div style="width:90%;margin:0 auto;height:200px;">
                <div style="width:100%;height:90px;">
                    <p style="margin-top:3px;font-weight:bold;font-size:17px;font-family:'黑体';">江西吉安依靠“四重保障线”打造健康扶贫示范县</p>
                    <p style="margin-top:10px;font-family:'黑体';">&nbsp;&nbsp;&nbsp;&nbsp;内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容</p>
                </div>
                <div style="width:100%;height:100px;margin-bottom:0px;">
                    <p style="margin-top:3px;font-weight:bold;font-size:17px;font-family:'黑体';">江西吉安依靠“四重保障线”打造健康扶贫示范县</p>
                    <p style="margin-top:10px;font-family:'黑体';">&nbsp;&nbsp;&nbsp;&nbsp;内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容</p>
                </div>
            </div>
            <div style="font-family:'微软雅黑';font-weight:bold;font-size:20px;width:90%;margin:0 auto;border-bottom:1px solid #dddddd;height:33px;">
                <p style="border-bottom:3px solid green;height:33px;float:left">特产要闻</p>
            </div>
            <div style="height:250px;width:85%;margin:20px auto;">
                <ul style="width:100%;height:100%;color:#a9a9a9;">
                    <li style="margin-top:12px;"><span>福建：大力发展“三大农业”</span><a href="" style="float:right;color:#a9a9a9">【农业新闻】</a></li>
                    <li style="margin-top:12px;"><span>福建：大力发展“三大农业”</span><a href="" style="float:right;color:#a9a9a9">【农业新闻】</a></li>
                    <li style="margin-top:12px;"><span>福建：大力发展“三大农业”</span><a href="" style="float:right;color:#b8b8b8">【农业新闻】</a></li>
                    <li style="margin-top:12px;"><span>福建：大力发展“三大农业”</span><a href="" style="float:right;color:#b8b8b8">【农业新闻】</a></li>
                    <li style="margin-top:12px;"><span>福建：大力发展“三大农业”</span><a href="" style="float:right;color:#b8b8b8">【农业新闻】</a></li>
                    <li style="margin-top:12px;"><span>福建：大力发展“三大农业”</span><a href="" style="float:right;color:#b8b8b8">【农业新闻】</a></li>
                    <li style="margin-top:12px;"><span>福建：大力发展“三大农业”</span><a href="" style="float:right;color:#b8b8b8">【农业新闻】</a></li>
                    <li style="margin-top:12px;"><span>福建：大力发展“三大农业”</span><a href="" style="float:right;color:#b8b8b8">【农业新闻】</a></li>
                </ul>
            </div>
        </div>
        <div class="layui-col-xs4" style="height:500px;">
            <div style="width:90%;margin:0 auto;height:200px;">
                <div class="layui-carousel" id="test2">
                    <div carousel-item>
                        <div>
                            <img src="/sou185/Public/images/asd.jpg" width="100%" height="100%">
                            <p style="position:absolute;left:0px;bottom:0px;
                            width:100%;height:20%;background-color:rgba(0, 0, 0, .50);color:#ffffff;font-size:20px;text-align:center;padding-top:10px;">
                                新闻标题</p>
                        </div>
                        <div>
                            <img src="/sou185/Public/images/asd.jpg" width="100%" height="100%">
                            <p style="position:absolute;left:0px;bottom:0px;
                            width:100%;height:20%;background-color:rgba(0, 0, 0, .50);color:#ffffff;font-size:20px;text-align:center;padding-top:10px;">
                                新闻标题</p>
                        </div>
                    </div>
                </div>
            </div>
            <div style="width:90%;margin:5px auto;color:green;font-size:22px;font-weight:bold;">
                最热特产
            </div>
            <DIV style="width:95%;margin:0 auto;height:260px;">
                <ul>
                    <li style="width:127px;height:120px;border:1px solid #dddddd;margin:4px 7px;float:left">
                        <img src="/sou185/Public/images/asd.jpg" width="100%" height="80%">
                        <p style="text-align:center;font-family:'黑体';line-height:20px;">武夷茶</p>
                    </li><li style="width:127px;height:120px;border:1px solid #dddddd;margin:4px 7px;float:left">
                        <img src="/sou185/Public/images/asd.jpg" width="100%" height="80%">
                        <p style="text-align:center;font-family:'黑体';line-height:20px;">武夷茶</p>
                    </li><li style="width:127px;height:120px;border:1px solid #dddddd;margin:4px 7px;float:left">
                        <img src="/sou185/Public/images/asd.jpg" width="100%" height="80%">
                        <p style="text-align:center;font-family:'黑体';line-height:20px;">武夷茶</p>
                    </li><li style="width:127px;height:120px;border:1px solid #dddddd;margin:4px 7px;float:left">
                        <img src="/sou185/Public/images/asd.jpg" width="100%" height="80%">
                        <p style="text-align:center;font-family:'黑体';line-height:20px;">武夷茶</p>
                    </li><li style="width:127px;height:120px;border:1px solid #dddddd;margin:4px 7px;float:left">
                        <img src="/sou185/Public/images/asd.jpg" width="100%" height="80%">
                        <p style="text-align:center;font-family:'黑体';line-height:20px;">武夷茶</p>
                    </li><li style="width:127px;height:120px;border:1px solid #dddddd;margin:4px 7px;float:left">
                        <img src="/sou185/Public/images/asd.jpg" width="100%" height="80%">
                        <p style="text-align:center;font-family:'黑体';line-height:20px;">武夷茶</p>
                    </li>
                </ul>
            </DIV>
        </div>
    </div>
    <div style="width:64%;margin-left:17.5%;margin-top:15px;height:80px;">
        <img src="/sou185/Public/images/asd.jpg" width="100%" height="100%">
    </div>
    <div style="width:63.9%;margin-left:17.5%;margin-top:10px;height:70px;background-color:white;border-bottom:1px solid #dddddd">
        <div style="width:10%;height:100%;">
            <div style="width:100%;height:16%;background-color:green"></div>
            <div style="width:100%;height:83%;background-color:red;text-align:center;font-size:20px;line-height:56px;">特产大百科</div>
        </div>
    </div>

    <div style="width:63.9%;margin-left:17.5%;margin-top:10px;height:1000px;border:1px solid red">

    </div>


    <!--<div class="layui-row" style="width:65%;margin:20px auto;height:500px;">-->
        <!--<div style="width:98.2%;border:1px solid #dddddd;height:100%;"></div>-->
    <!--</div>-->
</div>
<script src="https://cdn.staticfile.org/html5shiv/r29/html5.min.js"></script>
<script src="https://cdn.staticfile.org/respond.js/1.4.2/respond.min.js"></script>
<script src="/sou185/Public/layui/layui.js" charset="utf-8"></script>
<script src="/sou185/Public/layui/lay/modules/jquery.js" charset="utf-8"></script>
<script>
//    var wd = window.innerWidth+'px';
//    alert(wd);
//    document.getElementById('bdw').style.height = document.body.scrollWidth+'px';
//    alert(document.getElementById('bdw').style.height);
    layui.use('element', function(){
        var element = layui.element; //导航的hover效果、二级菜单等功能，需要依赖element模块

        //监听导航点击
        element.on('nav(demo)', function(elem){
            //console.log(elem)
            layer.msg(elem.text());
        });
    });

</script>
<script>
    layui.use(['carousel', 'form'], function() {
        var carousel = layui.carousel
                , form = layui.form;

        //常规轮播
        carousel.render({
            elem: '#test2',
            arrow: 'always',
            width: '100%',
            height: '100%'
        })
    });
</script>

</body>
</html>