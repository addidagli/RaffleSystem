<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
    <title>Eso Aile Şenliği</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>


        body {
            margin: 0;
            padding: 0;
            background: linear-gradient(to right, #A8FFFF 0%, #131b24 51%, #0f161d 100%);
        }

        .text-white {
            padding: 2px 8px;
            margin: 5px;
            width: 18rem;
            display: inline-block;
            font-size: 120%;
        }
        .cekilis_type {
            text-align: center;
            border-bottom: 1px solid rgba(0, 0, 0, 0.15);
            padding: 5px 0 10px;
            margin-bottom: 5px;
        }
        .cekilis_type img {
            height: 42.5px;
        }
        .cards .card {
            text-align: center;
        }
        .cards .card:hover {
            opacity: .85;
            cursor: pointer;
        }
    </style>

</head>
<body>

<script>

    // $(document).ready(function () {}

    let url = "http://eso.midsoft.com.tr/serverJson.php?function=getUndrewLotaries";
    //let url = "http://eso.midsoft.com.tr/serverJson.php?function=getUndrewLotaryById&lotId=40";

    $.getJSON(url, function (data) {
        for (let i = 0; i < data.length; i++) {
            /*
                       console.log(data[i]['id']);
                       console.log(data[i]['lotaryId']);
                       console.log(data[i]['phone']);
                       console.log(data[i]['name']);
                       console.log(data[i]['attendDate']);
                       console.log(data[i]['winner']);
                       console.log(data[i]['lotaryNo']);
          */

            console.log(data[i]['id']);
            console.log(data[i]['name']);
            console.log(data[i]['description']);
            console.log(data[i]['amount']);
            console.log(data[i]['createDate']);
            console.log(data[i]['drawDate']);
            console.log(data[i]['active']);
            console.log(data[i]['status']);
            console.log(data[i]['logo']);

            getir(data, i);
        }
    });

    var iDiv = document.createElement('div');
    iDiv.className = 'cards';
    iDiv.id = 'cards';

    document.getElementsByTagName('body')[0].appendChild(iDiv);

    function getir(data, i) {
        let firstDiv = document.createElement('div');       //kartların renklerinin farklı olması için
        if (i % 7 == 0) {
            firstDiv.className = 'card text-white bg-primary mb-3';
            firstDiv.id = 'zero';
        } else if (i % 7 == 1) {
            firstDiv.className = 'card text-white bg-secondary mb-3';
            firstDiv.id = 'first';
        } else if (i % 7 == 2) {
            firstDiv.className = 'card text-white bg-success mb-3';
            firstDiv.id = 'second';
        } else if (i % 7 == 3) {
            firstDiv.className = 'card text-white bg-danger mb-3';
            firstDiv.id = 'third';
        } else if (i % 7 == 4) {
            firstDiv.className = 'card text-white bg-warning mb-3';
            firstDiv.id = 'fourth';
        } else if (i % 7 == 5) {
            firstDiv.className = 'card text-white bg-info mb-3';
            firstDiv.id = 'fifth';
        } else if (i % 7 == 6) {
            firstDiv.className = 'card text-white bg-dark mb-3';
            firstDiv.id = 'sixth';
        }


        /*
        $(firstDiv).append('<div class="cekilis_id">'+ data[i]['id'] + '</div>');
        $(firstDiv).append('<div class="cekilis_lotaryId">'+ data[i]['lotaryId'] + '</div>');
        $(firstDiv).append('<div class="cekilis_phone">'+ data[i]['phone'] + '</div>');
        $(firstDiv).append('<div class="cekilis_name">'+ data[i]['name'] + '</div>');
        $(firstDiv).append('<div class="cekilis_attendDate">'+ data[i]['attendDate'] + '</div>');
        $(firstDiv).append('<div class="cekilis_winner">'+ data[i]['winner'] + '</div>');
        $(firstDiv).append('<div class="cekilis_lotaryNo">'+ data[i]['lotaryNo'] + '</div>');
         */
        // $(firstDiv).append('<div class="cekilis_id">' + data[i]['id'] + '</div>');
        $(firstDiv).append('<div class="cekilis_type"><img src="'+data[i]['logo']+'"></div>');
        $(firstDiv).append('<div class="cekilis_name">' + data[i]['name'] + '</div>');         //kartlara sadece isim miktar ve logo yazılıyor..
        // $(firstDiv).append('<div class="cekilis_description">' + data[i]['description'] + '</div>');
        $(firstDiv).append('<div class="cekilis_amount">' + data[i]['amount'] + ' Adet Hediye</div>');
        // $(firstDiv).append('<div class="cekilis_createDate">' + data[i]['createDate'] + '</div>');
        // $(firstDiv).append('<div class="cekilis_drawDate">' + data[i]['drawDate'] + '</div>');
        // $(firstDiv).append('<div class="cekilis_active">' + data[i]['active'] + '</div>');
        // $(firstDiv).append('<div class="cekilis_status">' + data[i]['status'] + '</div>');
        //$(firstDiv).append('<div class="cekilis_logo">' + data[i]['logo'] + '</div>');

        // i++;
        iDiv.appendChild(firstDiv);


        $(".text-white").click(function (e) {
            var indis = $(this).index();
            e.preventDefault();
            var cekilis_amount = $('.cekilis_amount', this).text();
            console.log(data[indis]['logo']);
            localStorage.setItem('logo', data[indis]['logo']);
            localStorage.setItem('id', data[indis]['id']);
            console.log('ekran.php?amount=' + data[indis]['amount']+'&id='+data[indis]['id']);
            window.location.href = 'ekran.php?amount=' + data[indis]['amount']+'&id='+data[indis]['id'];
        });
    }

</script>

</body>
</html>
