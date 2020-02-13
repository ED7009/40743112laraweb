<!doctype html>
<html lang="zh_tw">
<head>
    <!-- Required meta tags -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <title>點餐頁面</title>
</head>
<body >

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<div class="container" style="background-color:lemonchiffon;width:450px" >
    <div class="" style="font-size:30px; text-align: center;width:420px">
        <form action="/submit" method="POST">
            {{csrf_field()}}
            <p style="">主餐</p>
            <select class="form-control form-control-lg" style="text-align-last: center;background:transparent;color: black" name="main" >
                <option>牛肉麵</option>
                <option>陽春麵</option>
                <option>乾麵</option>
            </select>
            <p style="">小菜</p>
            <select class="form-control form-control-lg" style="text-align-last: center;background:transparent;color: black" name="dish">
                <option>皮蛋豆腐</option>
                <option>海帶</option>
                <option>滷蛋</option>
            </select>
            <p style="">飲料</p>
            <select class="form-control form-control-lg" style="text-align-last: center;background:transparent;color: black"  name="drink">
                <option>紅茶</option>
                <option>可樂</option>
                <option>雪碧</option>
            </select>
            <button type="submit" class="btn btn-outline-secondary btn-block" style="margin-top: 30px" >訂餐</button>
        </form>
        <form action="/modify">
            <button type="submit" class="btn btn-outline-secondary btn-block" >修改</button>
        </form>
        <form action="/">
            <button type="submit" class="btn btn-outline-secondary btn-block" >返回</button>
        </form>
        @if (isset($k1))

            <script>
                $(function(){
                    alert("訂單內容如下\n" +
                        "訂單編號:{{$k1}}\n"+
                        "主餐:{{$k2}}\n"+
                        "小菜:{{$k3}}\n"+
                        "飲料:{{$k4}}")
                });
            </script>
        @endif
    </div>
</div>
</body>
</html>
