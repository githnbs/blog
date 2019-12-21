<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>hello</title>
    <link rel="stylesheet" href="../layui/css/layui.css" media="all">
    <style>
        body {
            margin: 10px;
        }

        .demo-carousel {
            height: 200px;
            line-height: 200px;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="layui-carousel" id="test1">
        <div carousel-item>
            <div>
                <p class="layui-bg-black demo-carousel"></p>
            </div>
            <div>
                <p class="layui-bg-black demo-carousel"></p>
            </div>
            <div>
                <p class="layui-bg-black demo-carousel"></p>
            </div>
            <div>
                <p class="layui-bg-black demo-carousel"></p>
            </div>
            <div>
                <p class="layui-bg-black demo-carousel"></p>
            </div>
        </div>
    </div>
    <div class="layui-tab layui-tab-brief" lay-filter="demo">
        <ul class="layui-tab-title">
            <li>热门企业</li>
            <li>精选企业</li>
            <li>猜你喜欢</li>
        </ul>
        <div class="layui-tab-content">
            <div class="layui-tab-item">
                <div id="laydateDemo">
                    <ul class="flow-default" id="LAY_demo1"></ul>
                </div>
            </div>
            <div class="layui-tab-item">
                <div id="laydateDemo">
                    <ul class="flow-default" id="LAY_demo2"></ul>
                </div>
            </div>
            <div class="layui-tab-item">
                <div id="laydateDemo">
                    <ul class="flow-default" id="LAY_demo3"></ul>
                </div>
            </div>
        </div>
    </div>
    <script src="../layui/layui.js"></script>
    <script>
        layui.use(['layer', 'jquery', 'flow', 'carousel', 'element'], function() {
            var carousel = layui.carousel //轮播
                ,
                element = layui.element //元素操作
                ,
                flow = layui.flow //滑块
                ,
                $ = layui.jquery //滑块
            flow.load({
                elem: '#LAY_demo1', //指定列表容器
                done: function(page, next) { //到达临界点（默认滚动触发），触发下一页
                    var lis = [];
                    //以jQuery的Ajax请求为例，请求下一页数据（注意：page是从2开始返回）
                    $.get('/api/list?page=' + page, function(res) {
                        //假设你的列表返回在data集合中
                        layui.each(res.data, function(index, item) {
                            lis.push('<li>' + item.title + '</li>');
                        });

                        //执行下一页渲染，第二参数为：满足“加载更多”的条件，即后面仍有分页
                        //pages为Ajax返回的总页数，只有当前页小于总页数的情况下，才会继续出现加载更多
                        next(lis.join(''), page < res.pages);
                    });
                }
            });
            flow.load({
                elem: '#LAY_demo2', //指定列表容器
                done: function(page, next) { //到达临界点（默认滚动触发），触发下一页
                    var lis = [];
                    //以jQuery的Ajax请求为例，请求下一页数据（注意：page是从2开始返回）
                    $.get('/api/list?page=' + page, function(res) {
                        //假设你的列表返回在data集合中
                        layui.each(res.data, function(index, item) {
                            lis.push('<li>' + item.title + '</li>');
                        });

                        //执行下一页渲染，第二参数为：满足“加载更多”的条件，即后面仍有分页
                        //pages为Ajax返回的总页数，只有当前页小于总页数的情况下，才会继续出现加载更多
                        next(lis.join(''), page < res.pages);
                    });
                }
            });
            flow.load({
                elem: '#LAY_demo3', //指定列表容器
                done: function(page, next) { //到达临界点（默认滚动触发），触发下一页
                    var lis = [];
                    //以jQuery的Ajax请求为例，请求下一页数据（注意：page是从2开始返回）
                    $.get('/api/list?page=' + page, function(res) {
                        //假设你的列表返回在data集合中
                        layui.each(res.data, function(index, item) {
                            lis.push('<li>' + item.title + '</li>');
                        });

                        //执行下一页渲染，第二参数为：满足“加载更多”的条件，即后面仍有分页
                        //pages为Ajax返回的总页数，只有当前页小于总页数的情况下，才会继续出现加载更多
                        next(lis.join(''), page < res.pages);
                    });
                }
            });


            //执行一个轮播实例
            carousel.render({
                elem: '#test1',
                width: '100%' //设置容器宽度
                    ,
                height: 200,
                arrow: 'none' //不显示箭头
                    ,
                anim: 'fade' //切换动画方式
            });
        });
    </script>
</body>

</html>