<!DOCTYPE html>
<?php 
    include_once("./vendor/init.php");
    include_once("./vendor/handle.php");
    $re = getAllData($db);
    
?>  
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

    <title>无协报名打印页</title>
</head>
<body>

    <div class="container">
        <div class="content">
            <nav>
                <a href="input.php">录入</a>
                <a href="preview.php">预览</a>
            </nav>
            
            <header>
                <h2>无协报名情况预览页</h2>
            </header> 
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>队名</th>
                  <th>队员名</th>
                  <th>学院</th>
                  <th>专业</th>
                  <th>班级</th>
                  <th>宿舍</th>
                  <th>电话</th>
                </tr>
              </thead>
              <tbody>
                <?php
                   foreach ($re as $value) {
                ?> 
                <tr id="<?php echo $value['id'] ?>">
                  <th><?php echo $value['team_name'] ?></th>
                  <th><?php echo $value['member_name'] ?></th>
                  <th><?php echo $value['college'] ?></th>
                  <th><?php echo $value['professional'] ?></th>
                  <th><?php echo $value['class'] ?></th>
                  <th><?php echo $value['dormitory'] ?></th>
                  <th><?php echo $value['phone'] ?></th>
                </tr>
                <?php  } ?>
              </tbody>
            </table>
            <form method="post" action="./vendor/generatExcel.php">
              <div class="form-group">
                <label for="filename">Excel文件名称：</label>
                <input type="text" name="filename" value="报名表" placeholder="报名表">
                <input type="submit" class="btn btn-default" value="生成excel表格" name="excel">
                <!-- <input type="hidden" name="count" value="<?php $count ?>"> -->
              </div>
            </form>

            <div class="dataHanding">
                <span>报名总人数：</span>
                <?php 
                  echo getCount($db);
                ?>
                <br>
                <span>其他信息...</span>
            </div>
        </div>
    </div>

    <link rel="stylesheet" href="./bower_components/bootstrap/dist/js/bootstrap.min.js">
    <script src="./bower_components/jquery/dist/jquery.min.js"></script>
    <script src="./Public/js/preview.js"></script>
</body>
</html>