<?php
/**
 * 物流单号
 */

class TrackingController extends XFrontBase
{

    public function actionIndex ()
    {
      
      
          
      
      
      //对输入的内容进行过滤
      $transNo = trim($_POST['transNo']);
      
      if($transNo == ''){
          $transNo = '空';
      }
       
      //构造出网址:$track_url
      //http://114.215.84.38:8001/Service1.asmx/GetBillRoute?transNo=$_POST['transNo']
      $track_url = "http://114.215.84.38:8001/Service1.asmx/GetBillRoute?transNo=".$transNo;
      
      //得到网址的内容赋值到$track_content
      $content = file_get_contents($track_url);
      
      $count = explode("BillRoute",$content);
      $count = (sizeof($count)-2) / 2;
      
      
      $vals = array();
      $index = array();
      
      
      $p = xml_parser_create();
      xml_parse_into_struct($p, $content, $vals, $index);
      xml_parser_free($p);   

      //得到具体内容
      $newcontent = $vals[0]["value"];
      
      $result = array();
      
      $result = explode($transNo,$newcontent);
      

      $this->render('index',array(result => $result,count => $count,transNo =>$transNo));
      
      
      
      
    }

}