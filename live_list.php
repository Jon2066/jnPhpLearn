<?php
/**
 * Created by PhpStorm.
 * User: jonathan
 * Date: 2018/11/17
 * Time: 7:00 PM
 */
header('Content-type:text/json;charset=utf-8');

$list = array(
    array(
        "title"=>"内地",
        "data" => array(
            array(
                "name"=>"CCTV-1",
                "url"=>"http://ivi.bupt.edu.cn/hls/cctv1hd.m3u8"
            ),
            array(
                "name"=>"CCTV-2",
                "url"=>"http://ivi.bupt.edu.cn/hls/cctv2hd.m3u8"
            ),
            array(
                "name"=>"CCTV-6",
                "url"=>"http://ivi.bupt.edu.cn/hls/cctv6hd.m3u8"
            ),
        )
    ),
    array(
        "title"=>"香港",
        "data"=> array(
            array(
                "name"=>"成龙影视",
                "url"=>"http://aldirect.hls.huya.com/huyalive/94525224-2460685722-10568564701724147712-2789253838-10057-A-0-1_1200.m3u8"
            ),
            array(
                "name"=>"翡翠台",
                "url"=>"http://pullhls6.inke.cn/live/1542196929080215/playlist.m3u8"
            ),
        )
    )
);

$json = json_encode($list);

echo $json;

?>