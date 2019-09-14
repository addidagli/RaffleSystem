<?php


require_once('inc/settings.php');
require_once('inc/atti.php');

if ($_GET['amount']) {
    $amount = $_GET['amount'];

}

?>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
    <title>Eso Aile Şenliği</title>
    <style>
        body {

            margin: 0;
            padding: 0;
            background: #212121;
            color: #a09148;;
            background: linear-gradient(to right, #A8FFFF 0%, #131b24 51%, #0f161d 100%);
        url(http://re3ker.de/raffle/images/metal.jpg) 50 % 50 % no-repeat;
            background-size: cover;
            -moz-background-size: cover;
            -webkit-background-size: cover;
            width: 100%;
            font-family: 'Open Sans', sans-serif;
        }

        html {
            width: 100%;
        }

        .container {
            background: linear-gradient(to right, #A8FFFF 0%, #131b24 51%, #0f161d 100%);
        url(http://re3ker.de/raffle/images/metal.jpg) 50 % 50 % no-repeat;
            background-size: cover;
            -moz-background-size: cover;
            -webkit-background-size: cover;
            width: 100%;
        }

        .topbox {
            background: white;
            padding-bottom: 50px;
            background: #A8FFFF; /* Old browsers */
            background: -moz-linear-gradient(left, #0f161d 0%, #131b24 51%, #0f161d 100%); /* FF3.6+ */
            background: -webkit-gradient(linear, left top, right top, color-stop(0%, #0f161d), color-stop(51%, #131b24), color-stop(100%, #0f161d)); /* Chrome,Safari4+ */
            background: -webkit-linear-gradient(left, #A8FFFF 0%, #A8FFFF 51%, #A8FFFF 100%); /* Chrome10+,Safari5.1+ */
            background: -o-linear-gradient(left, #A8FFFF 0%, #A8FFFF 51%, #A8FFFF 100%); /* Opera 11.10+ */
            background: -ms-linear-gradient(left, #A8FFFF 0%, #A8FFFF 51%, #A8FFFF 100%); /* IE10+ */
            background: linear-gradient(to right, #A8FFFF 0%, #131b24 51%, #0f161d 100%); /* W3C */
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#A8FFFF', endColorstr='#A8FFFF', GradientType=1); /* IE6-9 */
            box-shadow: 0 0 0 0;
        }

        .rollbox {
            margin-top: 50px;
            height: 30%;
            background: linear-gradient(to right, #A8FFFF 0%, #131b24 51%, #0f161d 100%);
            overflow-x: auto;
            overflow: hidden;
            position: relative;
            padding: 0;
        }

        .rollbox > table {
            width: auto;
            height: 200px;
            margin: 0;
            padding: 0;
            border-collapse: collapse;
            border-spacing: 0;
        }

        #loadout {
            position: absolute;
            top: 10px;
            left: 5px;
            z-index: 1;
            background: #131b24);
        }

        .roller {
            position: relative;
            display: block;
            height: 100%;
            text-align: center;
            color: white;
            line-height: 180px;
            font-size: 1.2em;
            font-weight: bold;
            font-family: sans-serif;
        }

        .roller div {
            display: block;
            height: 50px;
            line-height: 50px;
            position: absolute;
            bottom: 0;
            width: 100%;
            left: 0;

        }

        .badge {
            padding-top: 5px;
            text-shadow: 1px 1px 1px black;
            margin-bottom: 20px;
        }

        .line {
            width: 2px;
            height: 65%;
            top: 9px;
            left: 50%;
            position: absolute;
            background: #fefefe;
            opacity: 0.6;
            z-index: 2;

        }

        #log {
            margin-top: 30px;
            text-align: center;
            font-size: 2em;
            color: #ddd;

        }

        #log span {
            font-size: 2em;
            font-weight: bold;
            color: #ffffff;
        }

        #roll {
            margin-top: 30px;
            width: 30%;
            position: relative;
            height: 40px;
            background: rgba(60, 232, 177, 0.3);
            border: 1px solid #3ce8b1;
            border-radius: 30px;
            padding: 0 20px;
            color: #3ce8b1;
            cursor: pointer;
            box-sizing: border-box;
            text-transform: uppercase;
            font-family: 'Open Sans', sans-serif;
            font-size: 17px;
        }

        #roll:hover {
            background-color: #00ffad;
            color: #000;
        }

        .roller {
            height: 160px;

            width: 250px;
            padding: 10px;
            margin-right: 0 !important;
            box-shadow: 0 0 5px 0 black;

            background: url(http://eso.midsoft.com.tr/images/eosb/logo.png) no-repeat center center;
            background-size: 30% auto;
        }

        .inside img {
        }

        tr, table, td {
            margin: 0;
            padding: 0;
        }

        img {
            margin: 0;
            padding: 0;
            position: absolute;
            width: 100%;
        }

        .logo {
            margin: 0;
            padding: 0;
            width: 100%;
        }

        .right {
            position: fixed;
            width: 22%;
            height: 24px;
            float: right;
            right: 0;
            bottom: 36px;
        }

        .left {
            position: fixed;
            width: 250px;
            height: 75px;
            float: left;
            left: 150px;
            bottom: 50px;
        }

        .sponsored {
            text-align: center;
        }

        .sponsored img {
            position: relative;
            display: inline-block;
            max-width: 100px;
            height: auto;
            vertical-align: middle;
            padding: 0 30px;
        }

    </style>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">

    <script>

        let lot_id = '';
        $(document).ready(function () {
            lot_id = localStorage.getItem('id');
            var url = "http://eso.midsoft.com.tr/serverJson.php?function=getUndrewLotaryById&lotId="+lot_id;
            var users = [],
                usersOrg = [],
                shuffled = [],			//dizinin kaıştırılmış hali atılacak olan dizi
                winners = [],
                loadout = $("#loadout"),
                insert_times = 30,
                duration_time = 10000,
                remove = "", 			//katılımcı dizisinden çıkarılıp winner dizisine eklenecek değişken
                removeId = 0,
                usersId = [],
                winnersId = [];

            var miktar = amount = <?php echo $amount ?>;                  //amount ve miktar sayısını urlden alıyoruz


            $.getJSON(url, function (data) {
                // console.log(data[0]['phone']);
                for (var i = 0; i < data.length; i++) {
                    // console.log(data[i]['name']);
                    // users.push(data[i]['name']);
                    // usersId.push(data[i]['id']);
                    // console.log(data[i]['id']);
                    var yourObject = {"name": data[i]['name'], "id": data[i]['id'] , "phone" :data[i]['phone'] };
                    users.push(yourObject);
                    usersOrg.push(yourObject);

                }
            });


            let logo = localStorage.getItem('logo');
            console.log("LOGO : " + logo);
            if( logo ) {
                $(".sponsored img").attr("src", logo);
            } else {
                $(".sponsored img").attr("src", "http://localhost/addi/static/images/midsoft.png");
            }
            // $(".roller").css("background", "url(" + logo + ") no-repeat center center");

            var rollCounter = 0;				     //döngüyü kontrol etmek için
            window.check_thisinterval = true;
            window.thisinterval = 0;
            $("#roll").click(function () {
                ++rollCounter;
                // console.log(users.length);
                // console.log(users);
                // console.log(remove)
                //  console.log(winners+" "+winnersId);
                // $('.buthide').hide();                         //butonu gizler



                $("#roll").attr("disabled", true);

                if (rollCounter < miktar + 2) {		//miktar +2 yapıyoruz çünkü buton sonuçları 1 kez fazladan clicklemeli diğer 1 ise küçüktür işaretinden dolayı..
                    setTimeout(function () {
                        clickRoll(users);
                    }, 500);
                }


                if (remove == "") {				//ilk döngüde seçim olmadığı için burda boş elaman atıyor winnersa ve users dizisinin son elemanını çıkarıyor. bu yüzden son elemanı tekrar ekliyoruz..
                    users.push(data[((data.length) - 1)]);
                    miktar++;			//yukarıdaki sebepten bu turda hiçbir işlem yapılmadığı için döngüyü 1 artırıyoruz
                } else if (winners.indexOf(remove) != -1) {		//gösterge çubuğu boşluğa geldiği zaman winnersa yazılan son eleman tekrar yazılıyor bu yüzden winnersdan önce son elemanı çıkarıp bu elemanı ekliyoruz

                    winners.splice($.inArray(remove, users), 1);
                    // winnersId.splice($.inArray(removeId,usersId), 1);
                    winners.push(remove);
                    //  winnersId.push(removeId);
                    miktar++; 			                            //yukarıdaki sebepten bu turda değişiklik olmadığı için döngüyü 1 artırıyoruz
                } else if (remove != "" || winners.indexOf(remove) === -1) {
                    for (let i = 0; i < users.length ; i++) {
                        if (users[i]['name'].includes(remove)) {
                            users.splice(i, 1);
                            // usersId.splice($.inArray(removeId, usersId), 1);
                            winners.push(remove);
                            //winnersId.push(removeId);

                        }
                    }
                    console.log(winners);

                    // $.getJSON(url, function (data) {
                    //     // console.log(data[0]['phone']);
                    //     for (var i = 0; i < data.length; i++) {
                    //         usersId.push (data[i]['id']);
                    //         console.log(usersId);
                    //
                    //
                    //     }
                    // });

                }

                // console.log(users.length);
                // console.log(users);

            });


            Array.prototype.shuffle = function () {
                var counter = this.length, temp, index;
                while (counter > 0) {
                    index = (Math.random() * counter--) | 0;
                    temp = this[counter];
                    this[counter] = this[index];
                    this[index] = temp;
                }
            };

            function randomEx(min, max) {
                return Math.floor(Math.random() * (max - min + 1) + min);
            }


            function clickRoll(users) {
                var scrollsize = 0,
                    diff = 0;
                $(loadout).html("");
                $("#log").html("");
                loadout.css("left", "100%");
                if (users.length < 10) {										//dönüş süresi
                    insert_times = 20;
                    duration_time = 1000;
                } else {

                    insert_times = 10;
                    duration_time = 1000;
                }

                for (var times = 0; times < insert_times; times++) {
                    shuffled = users;
                    shuffled.shuffle();											//users dizisini karıştırıyor
                    // users.shuffle();
                    // usersId.shuffle();
                    for (var i = 0; i < users.length; i++) {
                        //loadout.append('<td><div class="roller"><img src="static/images/midsoft.png"><div>'+shuffled[i]+'</div></div></td>');
                        loadout.append('<td>' +
                            '<div class="roller">' +
                            '<div style="position: relative;" class="inside" id="user-name">' + shuffled[i]['name'] + '</div>' +
                            // '<div style="position: relative;" class="inside" id="user-name"><img src="'+localStorage.getItem('logo')+'" alt="Firma logo">' + shuffled[i]['name'] + '</div>' +
                            '</div></td>');
                        scrollsize = scrollsize + 192;
                    }
                }


                diff = Math.round(scrollsize / 2);
                diff = randomEx(diff - 300, diff + 300);

                var text = "";
                var id = 0;

                $("#loadout").animate({
                    left: "-=" + diff
                }, duration_time, function () {
                    $("#roll").attr("disabled", false);
                    $('#loadout').children('td').each(function () {
                        var center = window.innerWidth / 2;
                        if ($(this).offset().left < center && $(this).offset().left + 255 > center) {
                            text = $(this).children().text();
                            id = $('#user-id').text();
                            remove = text;		//text roller döndükten sonra seçilen isim
                            removeId = id;
                            var needsUpdate = true;
                            if (needsUpdate) {
                                $("#log").append("KAZANAN <br/> <span class=\"badge\">" + text+ "</span>");		//rollerdan seçilen eleman yazdırır
                                if(window.check_thisinterval) {
                                    console.log('tekrar');
                                    $("#roll").click();
                                }
                                needsUpdate = false;
                            }
                        }

                    });
                });

                if (winners.length == amount) {		//eğer winner sayısı verilecek hediye sayısına eşitse döngü biter ve ekrana yazdırılır..
                    $('.hide').hide();		//kazananlar ekrana yazdırılırken buton ve roller hide edilir
                    $("#log").append("KAZANANLAR <br/>");
                    for (i = 0; i < winners.length; i++) {
                        $("#log").append(winners[i] + "<br>");
                        for (let j = 0; j < usersOrg.length ; j++) {
                            if (winners[i]===usersOrg[j]['name']) {
                                console.log(usersOrg[j]['id']);
                                let winnerId = usersOrg[j]['id'];

                                let url = "http://eso.midsoft.com.tr/serverJson.php?function=setWinner&id="+winnerId;
                                $.getJSON(url, function(data) {
                                });
                            }
                        }
                    }
                    let urlDone = "http://eso.midsoft.com.tr/serverJson.php?function=setDrawDone&id="+lot_id;
                    $.getJSON(urlDone, function(data) {

                    });
                }

                return 1;
            }

            // window.onload = function () {			//butonun otomatik tıklaması için
            //     var button = document.getElementById('roll');
            //     setInterval(function () {
            //         button.click();
            //     }, 3000);  // this will make it click again every 1000 miliseconds
            // };

        });


    </script>
</head>
<body>
<div class="container">
    <div class="row" style="text-align: center">
        <div class="col-md-6 col-md-offset-3">
            <div class="page-header">
                <h1 style="font-size: 4em">ESO AİLE ŞENLİĞİ</h1>
            </div>
        </div>
    </div>

    <div class="row topbox hide">
        <div class="col-md-6 col-md-offset-3 rollbox">
            <div class="line"></div>
            <table>
                <tr id="loadout">

                </tr>
            </table>
        </div>
    </div>

    <div class="row hide buthide">
        <div class="col-md-6 col-md-offset-3">
            <div class="sponsored">
                <img src="https://cdn.freebiesupply.com/logos/large/2x/ulker-1-logo-png-transparent.png">
                <button id="roll" class="btn btn-success form-control">Çekilişi Başlat</button>
                <img src="https://cdn.freebiesupply.com/logos/large/2x/ulker-1-logo-png-transparent.png">
            </div>

        </div>
    </div>

    <div class="row">
        <div class="col-md-12" style="text-align:center">
            <div id="log"></div>
        </div>
    </div>
</div>
<div class="logo">
    <div class="right">
        <img src="static/images/midsoft.png" style="max-width: 185px"/>
    </div>
    <div class="left">
        <img src="http://eso.midsoft.com.tr/images/eosb/logo.png" style="max-width: 100px"/>
    </div>
</div>
</body>
</html>
