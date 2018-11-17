<?php
/**
 * Created by PhpStorm.
 * User: jonathan
 * Date: 2018/11/17
 * Time: 7:00 PM
 */
header('Content-type:text/json;charset=utf-8');

$list = array(
    "内地"=> array(
        "CCTV-1"=>"http://ivi.bupt.edu.cn/hls/cctv1hd.m3u8",
        "CCTV-2"=>"http://ivi.bupt.edu.cn/hls/cctv2hd.m3u8",
        "CCTV-6"=>"http://ivi.bupt.edu.cn/hls/cctv6hd.m3u8",
        "CCTV-7"=>"http://ivi.bupt.edu.cn/hls/cctv7hd.m3u8"
    ),
    "香港"=> array(
        "成龙影视" =>"http://aldirect.hls.huya.com/huyalive/94525224-2460685722-10568564701724147712-2789253838-10057-A-0-1_1200.m3u8",
        "翡翠台"=>"http://pullhls6.inke.cn/live/1542196929080215/playlist.m3u8",
    )

);

$json = json_encode($list);

echo $json;

?>