<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    login
                </div>

                <div class="links">

                    <a href="http://mcs.cn/api/login?token=111">oms</a>
                </div>
            </div>
        </div>
    </body>
</html>
<?php
$str = stripslashes("<?xml version=\"1.0\" encoding=\"UTF-8\"?><request><entryOrder><entryOrderCode>190902RTV00148CDa<\/entryOrderCode><ownerCode>smcp_vip<\/ownerCode><warehouseCode>BQJX01<\/warehouseCode><entryOrderId\/><entryOrderType>VIPTHRK<\/entryOrderType><extendProps><receivedQty>35<\/receivedQty><erpOrderId>0<\/erpOrderId><\/extendProps><outBizCode>190902RTV00148CDa-671481<\/outBizCode><confirmType>1<\/confirmType><status>PARTFULFILLED<\/status><operateTime\/><remark\/><\/entryOrder><orderLines><orderLine><orderLineNo>755<\/orderLineNo><itemCode>3607170967576<\/itemCode><ownerCode>smcp_vip<\/ownerCode><itemId>3607170967576<\/itemId><itemName>T10348E<\/itemName><inventoryType>ZP<\/inventoryType><batchCode\/><batchCode\/><snList\/><planQty>1<\/planQty><actualQty>1<\/actualQty><produceCode\/><remark\/><extendProps><packageCode>PJ5028244184586<\/packageCode><\/extendProps><\/orderLine><orderLine><orderLineNo>757<\/orderLineNo><itemCode>3607170933878<\/itemCode><ownerCode>smcp_vip<\/ownerCode><itemId>3607170933878<\/itemId><itemName>sandro\u5973\u88c5\u957f\u8896\u5bbd\u677e\u9488\u7ec7\u5957\u5934\u886b\u4e24\u8272\u5165S0900E<\/itemName><inventoryType>ZP<\/inventoryType><batchCode\/><batchCode\/><snList\/><planQty>1<\/planQty><actualQty>1<\/actualQty><produceCode\/><remark\/><extendProps><packageCode>PJ5028244184586<\/packageCode><\/extendProps><\/orderLine><orderLine><orderLineNo>764<\/orderLineNo><itemCode>3607170967583<\/itemCode><ownerCode>smcp_vip<\/ownerCode><itemId>3607170967583<\/itemId><itemName>T10348E<\/itemName><inventoryType>ZP<\/inventoryType><batchCode\/><batchCode\/><snList\/><planQty>3<\/planQty><actualQty>2<\/actualQty><produceCode\/><remark\/><extendProps><packageCode>PJ5028244184586<\/packageCode><\/extendProps><\/orderLine><orderLine><orderLineNo>765<\/orderLineNo><itemCode>3607171135004<\/itemCode><ownerCode>smcp_vip<\/ownerCode><itemId>3607171135004<\/itemId><itemName>sandro\u5973\u88c5 \u82b1\u8fb9\u88c5\u9970V\u9886\u7cfb\u5e26\u77ed\u8896\u9488\u7ec7\u886bS1789E<\/itemName><inventoryType>ZP<\/inventoryType><batchCode\/><batchCode\/><snList\/><planQty>2<\/planQty><actualQty>1<\/actualQty><produceCode\/><remark\/><extendProps><packageCode>PJ5028244184586<\/packageCode><\/extendProps><\/orderLine><orderLine><orderLineNo>773<\/orderLineNo><itemCode>3607171269945<\/itemCode><ownerCode>smcp_vip<\/ownerCode><itemId>3607171269945<\/itemId><itemName>sandro\u5973\u88c5 \u5706\u9886\u65e0\u8896\u9488\u7ec7\u4e0a\u8863E11314E<\/itemName><inventoryType>ZP<\/inventoryType><batchCode\/><batchCode\/><snList\/><planQty>1<\/planQty><actualQty>1<\/actualQty><produceCode\/><remark\/><extendProps><packageCode>PJ5028244184586<\/packageCode><\/extendProps><\/orderLine><orderLine><orderLineNo>774<\/orderLineNo><itemCode>3607170967590<\/itemCode><ownerCode>smcp_vip<\/ownerCode><itemId>3607170967590<\/itemId><itemName>T10348E<\/itemName><inventoryType>ZP<\/inventoryType><batchCode\/><batchCode\/><snList\/><planQty>2<\/planQty><actualQty>1<\/actualQty><produceCode\/><remark\/><extendProps><packageCode>PJ5028244184586<\/packageCode><\/extendProps><\/orderLine><orderLine><orderLineNo>778<\/orderLineNo><itemCode>3607171287888<\/itemCode><ownerCode>smcp_vip<\/ownerCode><itemId>3607171287888<\/itemId><itemName>sandro\u7537\u88c5\u5bbd\u677e\u6c34\u6d17\u725b\u4ed4\u88e4P6148S<\/itemName><inventoryType>ZP<\/inventoryType><batchCode\/><batchCode\/><snList\/><planQty>1<\/planQty><actualQty>1<\/actualQty><produceCode\/><remark\/><extendProps><packageCode>PJ5028244184586<\/packageCode><\/extendProps><\/orderLine><orderLine><orderLineNo>779<\/orderLineNo><itemCode>3607171176502<\/itemCode><ownerCode>smcp_vip<\/ownerCode><itemId>3607171176502<\/itemId><itemName>sandro\u5973\u88c5 \u5706\u9886\u957f\u8896\u8936\u8fb9\u8bbe\u8ba1\u9488\u7ec7\u886bG1966H<\/itemName><inventoryType>ZP<\/inventoryType><batchCode\/><batchCode\/><snList\/><planQty>1<\/planQty><actualQty>1<\/actualQty><produceCode\/><remark\/><extendProps><packageCode>PJ5028244184586<\/packageCode><\/extendProps><\/orderLine><orderLine><orderLineNo>780<\/orderLineNo><itemCode>3607171176496<\/itemCode><ownerCode>smcp_vip<\/ownerCode><itemId>3607171176496<\/itemId><itemName>sandro\u5973\u88c5 \u5706\u9886\u957f\u8896\u8936\u8fb9\u8bbe\u8ba1\u9488\u7ec7\u886bG1966H<\/itemName><inventoryType>ZP<\/inventoryType><batchCode\/><batchCode\/><snList\/><planQty>1<\/planQty><actualQty>1<\/actualQty><produceCode\/><remark\/><extendProps><packageCode>PJ5028244184586<\/packageCode><\/extendProps><\/orderLine><\/orderLines><extendProps><ownerCode>smcp_vip<\/ownerCode><\/extendProps><\/request>");
echo $str;
