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

    <title>廚房端</title>
</head>
<body style="background-color:orange">

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<div class="container">
    <div class="row col-md-12" style="color:saddlebrown;text-align: center;font-size:40px" >
        <table width="700" border="1">
            <tbody>
            <tr>
                <td>單號</td>
                <td>主餐</td>
                <td>小菜</td>
                <td>飲料</td>
            </tr>
            @foreach($sql as $sqls)
                <form action="/modify/{{{$sqls->number}}}" method="POST">
                    {{csrf_field()}}
                    <tr>
                        <td> {{$sqls->number}}</td>
                        <td>
                            <select class="form-control form-control-lg" style="text-align-last: center;background:transparent;color: black" name="main" >
                                <option>牛肉麵</option>
                                <option>陽春麵</option>
                                <option>乾麵</option>
                            </select>
                        </td>
                        <td>
                            <select class="form-control form-control-lg" style="text-align-last: center;background:transparent;color: black" name="dish">
                                <option>皮蛋豆腐</option>
                                <option>海帶</option>
                                <option>滷蛋</option>
                            </select>
                        </td>
                        <td>
                            <select class="form-control form-control-lg" style="text-align-last: center;background:transparent;color: black"  name="drink">
                                <option>紅茶</option>
                                <option>可樂</option>
                                <option>雪碧</option>
                            </select>
                        </td>
                        <td><button type="submit" class="btn btn-secondary" style="color: white" name="{{$sqls->number}}">修改</button></td>

                    </tr>
                </form>
            @endforeach
            </tbody>
        </table>
        <form action="/">
            <button type="submit" class="btn btn-secondary" style="width:100px;height:100px;margin-left:50px;margin-top:200px;font-size: 30px">返回</button>
        </form>
        <table width="700" border="1">
            <tbody>
            <tr>
                <td>單號</td>
                <td>主餐</td>
                <td>小菜</td>
                <td>飲料</td>
            </tr>
            @foreach($sql as $sqls)
                <form action="/out/{{{$sqls->number}}}" method="POST">
                    {{csrf_field()}}
                    <tr>
                        <td> {{$sqls->number}}</td>
                        <td> {{$sqls->main}}</td>
                        <td> {{$sqls->dish}}</td>
                        <td> {{$sqls->drink}}</td>
                    </tr>
                </form>
            @endforeach
            </tbody>
        </table>


    </div>
</div>
</body>
</html>
