<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./bower_components/bootstrap/dist/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="./Public/stylesheets/style.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <title>无协招新报名录入页</title>
</head>
<body>
    <div class="container">
        <div class="content">
            <nav>
                <a href="input.php">录入</a>
                <a href="preview.php">预览</a>
            </nav>
            
            <header>
                <h2>无协报名情况录入页</h2>
            </header> 
            <div class="form">
                <form method="post" action="./vendor/handle.php">
                      <div class="form-group">
                        <label for="team_name">队名</label>
                        <input type="text" class="form-control" id="team_name">
                      </div>
                      <div class="form-group">
                        <label for="member_name">队员名</label>
                        <input type="text" class="form-control" id="member_name">
                      </div>
                      <div class="form-group">
                        <label for="college">学院名</label>
                        <input type="text" class="form-control" id="college">
                      </div>
                      <div class="form-group">
                        <label for="professional">专业</label>
                        <input type="text" class="form-control" id="professional">
                      </div>
                      <div class="form-group">
                        <label for="team_name">队名</label>
                        <input type="text" class="form-control" id="exampleInputEmail1">
                      </div>
                      <div class="form-group">
                        <label for="class">班级</label>
                        <input type="text" class="form-control" id="class">
                      </div>
                      <div class="form-group">
                        <label for="dormitory">宿舍</label>
                        <input type="text" class="form-control" id="dormitory">
                      </div>
                      <div class="form-group">
                        <label for="dormitory">宿舍</label>
                        <input type="text" class="form-control" id="dormitory">
                      </div>
                      <div class="form-group">
                        <label for="phone">长号/短号</label>
                        <input type="text" class="form-control" id="phone">
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox"> 是否队长
                        </label>
                      </div>
                      <button type="submit" class="btn btn-default">提交</button>
                </form>
            </div>
        </div>
    </div>



    
    <link rel="stylesheet" href="./bower_components/bootstrap/dist/js/bootstrap.min.js">
    <script src="./bower_components/jquery/dist/jquery.min.js"></script>
    <script src="./Public/js/input.js"></script>
</body>
</html>