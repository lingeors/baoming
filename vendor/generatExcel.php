<?php
include_once("init.php");
include_once("handle.php");
include_once("./PHPExcel/PHPExcel.php");

if ($_POST['excel']) {
    if ($_POST['filename'] != '') {
        $filename = $_POST['filename'].'.xlsx';
    } else {
        $filename = "报名信息.xlsx";
    }
    $row_head = array("队名", "队员名", "学院", "专业", "班级", "宿舍", "电话");//每列的头
    $data_key = array("team_name", "member_name", "college", "professional", "class", "dormitory", "phone");
    //要填充的数据在数据库中的字段名。注意顺序要和上面row_head字段一一对应
    $data = getAllData($db);   //获取将要填充到excel表中的数据
    createExcel($data, $filename, $row_head, $data_key);
}


/**
 * 从数据库获取数据。生成excel文件并将文件下载到本地
 * @param  [type] $data     从数据库获取的数据
 * @param  [type] $filename 生成的文件名称
 * @param  [type] $row_head excel文件第一行的字段名
 * @param  [type] $data_key 数据库获取的数据字段名，需要注意字段名要和row_head对应
 * @return [type]           [description]
 */
function createExcel($data, $filename, $row_head, $data_key)
{
    
    $letter = array("A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T");
    //一般列数不会超出上面的范围
    $PHPExcel = new PHPExcel();
    $excelSheet = $PHPExcel->getActiveSheet();//获得当前活动的sheet对象
    $excelSheet->setTitle("报名表");//给当前对象设置名称
    
    $rowCount = count($row_head);//列数
    for ($i = 0; $i < $rowCount; $i++) {//根据列数对第一行进行数据填充
        $excelSheet->setCellValue($letter[$i].'1', $row_head[$i]);//填充数据
    }
    foreach ($data as $key => $value) {//填充数据
       $key += 2;//此刻从第二行开始填充
       for ($i = 0; $i < $rowCount; $i++) {
            $key_value = $data_key[$i];//数据键值
            $excelSheet->setCellValue($letter[$i].$key, $value[$key_value]);//填充数据
       }
    }
    $objWriter = PHPExcel_IOFactory::createWriter($PHPExcel, "Excel2007");
    download($filename);
    $objWriter->save('php://output');
}

/**
 * 将excel下载到本地
 * @param  [type] $filename 文件名
 * @return [type]           [description]
 */
function download($filename)
{
    //下载到本地
    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition: attachment;filename="'.$filename.'"');
    header('Cache-Control: max-age=0');
    // If you're serving to IE 9, then the following may be needed
    header('Cache-Control: max-age=1');
}