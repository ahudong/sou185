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
    <script src="https://cdn.staticfile.org/html5shiv/r29/html5.min.js"></script>
    <script src="https://cdn.staticfile.org/respond.js/1.4.2/respond.min.js"></script>
    <div style="width:100%;height:70px;margin-top:-5px;background-color:white">
        <div style="width:15%;height:100%;text-align:center;line-height:400%;float:left;">你好，名字</div>
        <div style="width:15%;float:right;height:100%;line-height:400%;">登录|个人中心</div>
    </div>
    <div style="width:100%;height:100px;">
        <img src="/sou185/Public/images/asd.jpg" width="100" height="100">老家特产
    </div>
    <!--轮播-->
    <div>
        <ul class="layui-nav layui-bg-cyan">
            <div style="width:70%;margin:0 auto;">
                <li style="width:19%;text-align:center;" class="layui-nav-item"><a href="">首页</a></li>
                <li style="width:19%;text-align:center;" class="layui-nav-item layui-this"><a href="">特产百科</a></li>
                <li style="width:19%;text-align:center;" class="layui-nav-item"><a href="">PK大赛</a></li>
                <li style="width:19%;text-align:center;" class="layui-nav-item"><a href="">新闻资讯</a></li>
                <li style="width:19%;text-align:center;" class="layui-nav-item"><a href="">关于我们</a></li>
            </div>
        </ul>
    </div>
    <!--end-->
    <div style="width:100%;height:500px;">
        <div class="layui-carousel" id="test1" lay-filter="test1">
            <div carousel-item="">
                <div><img src="/sou185/Public/images/asd.jpg" width="100%" height="100%"></div>
                <div><img src="/sou185/Public/images/asd.jpg" width="100%" height="100%"></div>
                <div><img src="/sou185/Public/images/asd.jpg" width="100%" height="100%"></div>
                <div><img src="/sou185/Public/images/asd.jpg" width="100%" height="100%"></div>
            </div>
        </div>
    </div>
    <div class="layui-container">
        <div class="layui-row" style="margin-top:8px;height:450px;">
            <div class="layui-col-xs4" style="border:1px solid #dddddd;height:100%;">
                <div class="layui-col-xs12" style="margin-top:1%;">
                    <p style="font-size:18px;margin-left:5px;margin-top:5px;font-weight:bold;">本期PK</p>
                </div>
                <div class="layui-col-xs12" >
                    <p style="line-height:50px;text-align:center;">标题</p>
                </div>
                <div class="layui-col-xs12" style="margin-top:1%;">
                    <div class="layui-col-xs5" style="text-align:center;line-height:200%;">
                        <img src="/sou185/Public/images/asd.jpg" width="70%" height="70%"><br>
                        支持(1111)
                    </div>
                    <div class="layui-col-xs2" style="text-align:center;">
                        <!--<p style="text-align:center;border:1px solid red;position:relative;top:50%;left:10%;">VS</p>-->
                        <img src="/sou185/Public/images/vs.jpg" width="100%" height="70%">
                    </div>
                    <div class="layui-col-xs5" style="text-align:center;">
                        <img src="/sou185/Public/images/asd.jpg" width="70%" height="70%"><br>
                        支持(1212)
                    </div>
                </div>
                <div class="layui-col-xs12" style="max-height:100px;">
                    <blockquote class="layui-elem-quote layui-quote-nm">
                        PK 介绍<br>
                        PK 介绍<br>
                        PK 介绍
                    </blockquote>
                </div>
                <div class="layui-col-xs12">
                    <ul style="min-height:100px;">
                        <li style="width:75%;margin:0 auto;min-height:25px;margin-top:1%;">
                            <p style="line-height:25px;float:left;display:block">
                                【同期】PK标题
                            </p>
                            <p style="line-height:25px;float:right;display:block"><a href="">查看>></a></p>
                        </li>
                        <li style="width:75%;margin:0 auto;min-height:25px;margin-top:1%;">
                            <p style="line-height:25px;float:left;display:block">
                                【同期】PK标题
                            </p>
                            <p style="line-height:25px;float:right;display:block"><a href="">查看>></a></p>
                        </li>
                        <li style="width:75%;margin:0 auto;min-height:25px;margin-top:1%;">
                            <p style="line-height:25px;float:left;display:block">
                                【同期】PK标题
                            </p>
                            <p style="line-height:25px;float:right;display:block"><a href="">查看>></a></p>
                        </li>
                        <li style="width:75%;margin:0 auto;min-height:25px;margin-top:1%;">
                            <p style="line-height:25px;float:left;display:block">
                                【同期】PK标题
                            </p>
                            <p style="line-height:25px;float:right;display:block"><a href="">查看>></a></p>
                        </li>

                    </ul>
                </div>
            </div>
            <div class="layui-col-xs8">
                <p style="font-size:18px;font-weight:bold;padding-left:2%;margin-top:2px;">热门推荐</p>
                <div class="layui-col-xs12">
                    <ul>
                        <li style="border:1px solid #dddddd;float:left;width:48%;height:130px;margin-left:0.7%;margin-top:0.5%;">
                            <div style="width:48%;height:100%;float:left;">
                                <img src="/sou185/Public/images/asd.jpg" style="margin-top:5.5%;margin-left:5%;" height="80%" width="100%">
                            </div>
                            <div style="float:right;width:44%;height:100%">
                                <p style="height:20%;margin-top:5%;font-size:14px;">商品名称</p>
                                <p style="width:95%;font-size:12px;line-height:14px;">
                                    商品简介商品简介商品简介商品简介商品简介商品
                                </p>
                                <div style="height:20%;font-size:14px;margin-top:15%;">
                                    收藏 赞收藏 赞
                                </div>
                            </div>
                        </li>
<li style="border:1px solid #dddddd;float:left;width:48%;height:130px;margin-left:0.7%;margin-top:0.5%;">
                            <div style="width:48%;height:100%;float:left;">
                                <img src="/sou185/Public/images/asd.jpg" style="margin-top:5.5%;margin-left:5%;" height="80%" width="100%">
                            </div>
                            <div style="float:right;width:44%;height:100%">
                                <p style="height:20%;margin-top:5%;font-size:14px;">商品名称</p>
                                <p style="width:95%;font-size:12px;line-height:14px;">
                                    商品简介商品简介商品简介商品简介商品简介商品
                                </p>
                                <div style="height:20%;font-size:14px;margin-top:15%;">
                                    收藏 赞收藏 赞
                                </div>
                            </div>
                        </li>
<li style="border:1px solid #dddddd;float:left;width:48%;height:130px;margin-left:0.7%;margin-top:0.5%;">
                            <div style="width:48%;height:100%;float:left;">
                                <img src="/sou185/Public/images/asd.jpg" style="margin-top:5.5%;margin-left:5%;" height="80%" width="100%">
                            </div>
                            <div style="float:right;width:44%;height:100%">
                                <p style="height:20%;margin-top:5%;font-size:14px;">商品名称</p>
                                <p style="width:95%;font-size:12px;line-height:14px;">
                                    商品简介商品简介商品简介商品简介商品简介商品
                                </p>
                                <div style="height:20%;font-size:14px;margin-top:15%;">
                                    收藏 赞收藏 赞
                                </div>
                            </div>
                        </li>
<li style="border:1px solid #dddddd;float:left;width:48%;height:130px;margin-left:0.7%;margin-top:0.5%;">
                            <div style="width:48%;height:100%;float:left;">
                                <img src="/sou185/Public/images/asd.jpg" style="margin-top:5.5%;margin-left:5%;" height="80%" width="100%">
                            </div>
                            <div style="float:right;width:44%;height:100%">
                                <p style="height:20%;margin-top:5%;font-size:14px;">商品名称</p>
                                <p style="width:95%;font-size:12px;line-height:14px;">
                                    商品简介商品简介商品简介商品简介商品简介商品
                                </p>
                                <div style="height:20%;font-size:14px;margin-top:15%;">
                                    收藏 赞收藏 赞
                                </div>
                            </div>
                        </li>
<li style="border:1px solid #dddddd;float:left;width:48%;height:130px;margin-left:0.7%;margin-top:0.5%;">
                            <div style="width:48%;height:100%;float:left;">
                                <img src="/sou185/Public/images/asd.jpg" style="margin-top:5.5%;margin-left:5%;" height="80%" width="100%">
                            </div>
                            <div style="float:right;width:44%;height:100%">
                                <p style="height:20%;margin-top:5%;font-size:14px;">商品名称</p>
                                <p style="width:95%;font-size:12px;line-height:14px;">
                                    商品简介商品简介商品简介商品简介商品简介商品
                                </p>
                                <div style="height:20%;font-size:14px;margin-top:15%;">
                                    收藏 赞收藏 赞
                                </div>
                            </div>
                        </li>
<li style="border:1px solid #dddddd;float:left;width:48%;height:130px;margin-left:0.7%;margin-top:0.5%;">
                            <div style="width:48%;height:100%;float:left;">
                                <img src="/sou185/Public/images/asd.jpg" style="margin-top:5.5%;margin-left:5%;" height="80%" width="100%">
                            </div>
                            <div style="float:right;width:44%;height:100%">
                                <p style="height:20%;margin-top:5%;font-size:14px;">商品名称</p>
                                <p style="width:95%;font-size:12px;line-height:14px;">
                                    商品简介商品简介商品简介商品简介商品简介商品
                                </p>
                                <div style="height:20%;font-size:14px;margin-top:15%;">
                                    收藏 赞收藏 赞
                                </div>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>
            <div class="layui-col-xs12" style="margin-top:10px;">
                <div class="layui-col-xs4" style="border:1px solid #dddddd;max-height:500px;">
                    <p style="font-size:18px;font-weight:bold">本周资讯</p>
                    <div class="layui-col-xs12" style="height:80px;margin-top:2%;">
                        <img src="/sou185/Public/images/asd.jpg" height="100%" width="40%">
                        <div class="layui-col-xs4" style="float:right;width:60%;">
                            【新闻】阿斯顿发生地方撒地方撒阿斯蒂芬
                        </div>
                    </div>
                    <div class="layui-col-xs12">
                        <ul style="margin-top:2%;">
                            <li style="padding-left:1%;margin-top:2%;">【新闻】按时发生发大水鞍山水电费</li>
                            <li style="padding-left:1%;margin-top:2%;">【新闻】按时发生发大水鞍山水电费</li>
                            <li style="padding-left:1%;margin-top:2%;">【新闻】按时发生发大水鞍山水电费</li>
                            <li style="padding-left:1%;margin-top:2%;">【新闻】按时发生发大水鞍山水电费</li>
                            <li style="padding-left:1%;margin-top:2%;">【新闻】按时发生发大水鞍山水电费</li>
                            <li style="padding-left:1%;margin-top:2%;">【新闻】按时发生发大水鞍山水电费</li>
                            <li style="padding-left:1%;margin-top:2%;">【新闻】按时发生发大水鞍山水电费</li>
                            <li style="padding-left:1%;margin-top:2%;">【新闻】按时发生发大水鞍山水电费</li>
                            <li style="padding-left:1%;margin-top:2%;">【新闻】按时发生发大水鞍山水电费</li>
                        </ul>
                    </div>
                </div>
                <div class="layui-col-xs4" style="max-height:500px;">
                    <div style="width:97%;border:1px solid #dddddd;margin:0 auto;">
                        <p style="font-size:18px;font-weight:bold;width:90%;margin:0 auto;margin-top:1%;">相关展会
                        <a href="" style="float:right">更多>></a>
                        </p>
                        <div>
                            <ul>
                                <li>
                                    <div style="width:90%;margin:0 auto;height:70px;">
                                        <img src="/sou185/Public/images/asd.jpg" width="50%" height="100%">
                                        <div style="float:right;height:100%;width:45%">
                                            <a href="">新闻标题</a>
                                            <p>内容的风格的风格的福地方个</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div style="width:90%;margin:0 auto;height:70px;">
                                        <img src="/sou185/Public/images/asd.jpg" width="50%" height="100%">
                                        <div style="float:right;height:100%;width:45%">
                                            <a href="">新闻标题</a>
                                            <p>内容的风格的风格的福地方个</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div style="width:90%;margin:0 auto;height:70px;">
                                        <img src="/sou185/Public/images/asd.jpg" width="50%" height="100%">
                                        <div style="float:right;height:100%;width:45%">
                                            <a href="">新闻标题</a>
                                            <p>内容的风格的风格的福地方个</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div style="width:90%;margin:0 auto;height:70px;">
                                        <img src="/sou185/Public/images/asd.jpg" width="50%" height="100%">
                                        <div style="float:right;height:100%;width:45%">
                                            <a href="">新闻标题</a>
                                            <p>内容的风格的风格的福地方个</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div style="width:90%;margin:0 auto;height:70px;">
                                        <img src="/sou185/Public/images/asd.jpg" width="50%" height="100%">
                                        <div style="float:right;height:100%;width:45%">
                                            <a href="">新闻标题</a>
                                            <p>内容的风格的风格的福地方个</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="layui-col-xs4">
                    <div style="height:120px;width:95.5%;border:1px solid #dddddd">
                        <p style="font-size:24px;font-weight:bold;text-align:center;margin-top:5%;">
                            特产百科
                        </p>
                        <p style="text-align:center;margin-top:2%;">共收录百科1111条</p>
                        <p style="text-align:center;margin-top:2%;">共收录词条1111条</p>
                    </div>
                    <div style="border:1px solid #dddddd;margin-top:2%;height:220px;width:95.5%">
                        <p style="font-size:20px;font-weight:bold;width:90%;margin:0 auto;margin-top:2%;">最新特产</p>
                        <ul>
                            <li style="width:32%;margin-left:2px;height:80px;float:left;margin-top:2%;">
                                <img src="/sou185/Public/images/asd.jpg" height="80%" width="100%">
                                <p style="text-align:center;">特产名称</p>
                            </li><li style="width:32%;margin-left:2px;height:80px;float:left;margin-top:2%;">
                                <img src="/sou185/Public/images/asd.jpg" height="80%" width="100%">
                                <p style="text-align:center;">特产名称</p>
                            </li><li style="width:32%;margin-left:2px;height:80px;float:left;margin-top:2%;">
                                <img src="/sou185/Public/images/asd.jpg" height="80%" width="100%">
                                <p style="text-align:center;">特产名称</p>
                            </li><li style="width:32%;margin-left:2px;height:80px;float:left;margin-top:2%;">
                                <img src="/sou185/Public/images/asd.jpg" height="80%" width="100%">
                                <p style="text-align:center;">特产名称</p>
                            </li><li style="width:32%;margin-left:2px;height:80px;float:left;margin-top:2%;">
                                <img src="/sou185/Public/images/asd.jpg" height="80%" width="100%">
                                <p style="text-align:center;">特产名称</p>
                            </li><li style="width:32%;margin-left:2px;height:80px;float:left;margin-top:2%;">
                                <img src="/sou185/Public/images/asd.jpg" height="80%" width="100%">
                                <p style="text-align:center;">特产名称</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="layui-col-xs12" style="margin-top:20px;height:200px;">
            <img src="/sou185/Public/images/asd.jpg" width="100%" height="100%">
        </div>
        <div class="layui-col-xs12" style="margin-top:20px;">
            <div class="layui-col-xs4" style="height:350px;">
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
            <div class="layui-col-xs4" style="height:350px;">
                <div style="width:95%;margin:0 auto;border:1px solid #dddddd;height:100%;">
                    <p style="font-size:20px;width:90%;margin:0 auto;margin-top:1%;">滞销信息
                        <a style="float:right;">更多>></a>
                    </p>
                    <ul style="height:90%;width:90%;margin:0 auto">
                        <li style="height:22%;margin-top:2%;">
                            <img src="/sou185/Public/images/asd.jpg" width="40%" height="100%">
                            <p style="float:right;height:90%;width:56%;margin-top:0.5%;">是多少地方水电费水电费</p>
                        </li>
                        <li style="height:22%;margin-top:2%;">
                            <img src="/sou185/Public/images/asd.jpg" width="40%" height="100%">
                            <p style="float:right;height:90%;width:56%;margin-top:0.5%;">是多少地方水电费水电费</p>
                        </li>
                        <li style="height:22%;margin-top:2%;">
                            <img src="/sou185/Public/images/asd.jpg" width="40%" height="100%">
                            <p style="float:right;height:90%;width:56%;margin-top:0.5%;">是多少地方水电费水电费</p>
                        </li>
                        <li style="height:22%;margin-top:2%;">
                            <img src="/sou185/Public/images/asd.jpg" width="40%" height="100%">
                            <p style="float:right;height:90%;width:56%;margin-top:0.5%;">是多少地方水电费水电费</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="layui-col-xs4" style="height:350px;">
                <div style="border:1px solid #dddddd;height:100%;width:98%;float:right;">

                </div>
            </div>
        </div>
    </div>
    <div style="height:2000px;"></div>
    <script src="/sou185/Public/layui/layui.js" charset="utf-8"></script>
    <script src="/sou185/Public/layui/lay/modules/jquery.js" charset="utf-8"></script>
    <script>
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
        layui.use(['carousel', 'form'], function(){
            var carousel = layui.carousel
                    ,form = layui.form;

            //常规轮播
            carousel.render({
                elem: '#test1'
                ,arrow: 'always',
                width:'100%',
                height:'100%'
            });
            carousel.render({
               elem: '#test2',
               arrow:'always',
                width:'100%',
                height:'100%'
            })



            //事件
            carousel.on('change(test4)', function(res){
                console.log(res)
            });

            var $ = layui.$, active = {
                set: function(othis){
                    var THIS = 'layui-bg-normal'
                            ,key = othis.data('key')
                            ,options = {};

                    othis.css('background-color', '#5FB878').siblings().removeAttr('style');
                    options[key] = othis.data('value');
                    ins3.reload(options);
                }
            };


        });
    </script>
</body>
</html>