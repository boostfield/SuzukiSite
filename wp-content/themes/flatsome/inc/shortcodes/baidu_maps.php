<?php
// [bmap]
function shortcode_bmap($atts, $content=null, $code) {

    
	extract(shortcode_atts(array(
	'bkey'=>'',
	'lat'  => '116.417854',
    'long' => '39.921988',
    'height' => '400px',
	'zoom' => '15',
    'title' => '点金主题网',
    'address' => '中国某个地方',
	'image' => '',
	), $atts));
	ob_start();
	$bkey=$bkey?$bkey:'B3f7707c25da5b29a6ff69618788a296';
	$output=null; 
    $output.='
	<style type="text/css">
	#allmap {width:100%;margin-bottom:20px;height:'.$height.';overflow: hidden;}
	.BMapLib_SearchInfoWindow{font-family:"微软雅黑"!important;}	
	dl,dt,dd,ul,li{
		margin:0;
		padding:0;
		list-style:none;
	}
	dt{
		font-size:14px;
		font-family:"微软雅黑";
		font-weight:bold;
		border-bottom:1px dotted #000;
		padding:5px 0 5px 5px;
		margin:5px 0;
	}
	dd{
		padding:5px 0 0 5px;
	}
	li{
		line-height:28px;
	}
	</style>
	<script type="text/javascript" src="http://api.map.baidu.com/api?v=1.4"></script>
	<script type="text/javascript" src="http://api.map.baidu.com/library/SearchInfoWindow/1.5/src/SearchInfoWindow_min.js"></script>
	<link rel="stylesheet" href="http://api.map.baidu.com/library/SearchInfoWindow/1.5/src/SearchInfoWindow_min.css" />
	<div id="allmap"></div>
	<script type="text/javascript">
	var map = new BMap.Map("allmap");
    var poi = new BMap.Point('.$long.','.$lat.');
    map.centerAndZoom(poi, '.$zoom.');
    map.disableScrollWheelZoom();

    var content = "<div style=\'margin:0;line-height:20px;padding:2px;\'>" +
                    "<img src=\''.$image.'\' alt=\'\' style=\'float:right;zoom:1;overflow:hidden;width:100px;height:80px;margin-left:3px;\'/>" +
                    "'.$address.'" +
                  "</div>";    
    var searchInfoWindow = null;
	searchInfoWindow = new BMapLib.SearchInfoWindow(map, content, {
			title  : "'.$title.'",      
			width  : 310,             
			height : 105,              
			panel  : "panel",         
			enableAutoPan : true,    
			searchTypes   :[
				BMAPLIB_TAB_SEARCH,   
				BMAPLIB_TAB_TO_HERE,  
				BMAPLIB_TAB_FROM_HERE 
			]
		});
	var pt = new BMap.Point('.$long.','.$lat.');
	var myIcon = new BMap.Icon("'.get_bloginfo("template_url").'/css/marker.png", new BMap.Size(64,64));
	var marker2 = new BMap.Marker(pt,{icon:myIcon}); 
	map.addOverlay(marker2);     
    marker2.enableDragging(); 
    marker2.addEventListener("click", function(e){
	    searchInfoWindow.open(marker2);
    })
    map.addOverlay(marker2); 
	
</script>';	   
   
	
	return $output;
}

add_shortcode('bmap', 'shortcode_bmap');