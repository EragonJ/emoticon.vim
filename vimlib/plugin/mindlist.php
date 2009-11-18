#!usr/bin/php
<?php
	trim($argv);
	switch($argv[1]){
		case 1:
		case "牡羊":
		case "牡羊座":
			$num = 0;
			break;
		case 2:
		case "金牛":
		case "金牛座":
			$num = 1;
			break;
		case 3:
		case "雙子":
		case "雙子座":
			$num = 2;
			break;
		case 4:
		case "巨蟹":
		case "巨蟹座":
			$num = 3;
			break;
		case 5:
		case "獅子":
		case "獅子座":
			$num = 4;
			break;
		case 6:
		case "處女":
		case "處女座":
			$num = 5;
			break;
		case 7:
		case "天秤":
		case "天秤座":
			$num = 6;
			break;
		case 8:
		case "天蠍":
		case "天蠍座":
			$num = 7;
			break;
		case 9:
		case "射手":
		case "射手座":
			$num = 8;
			break;
		case 10:
		case "魔羯":
		case "魔羯座":
			$num = 9;
			break;
		case 11:
		case "水瓶":
		case "水瓶座":
			$num = 10;
			break;
		case 12:
		case "雙魚":
		case "雙魚座":
			$num = 11;
			break;
	}
	$en_list  = array("aries","taurus","gemini","cancer","leo","virgo","libra",
								 "scorpio","sagittarius","capricorn" ,"aquarius","pisces");
	
	//fetching 
	$ch = curl_init();
	curl_setopt($ch,CURLOPT_URL,"http://mindcity.sina.com.tw/MC_data/west/MC-12horos/today/".$en_list[$num].".shtml");
	curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
	$result = curl_exec($ch);

	//comparing
	preg_match_all("/<div class=\"lotconts\">(.*?)<\/div>/s",$result,$final);
	$final = preg_replace("/<.*\/>/",'',$final[1][0]);
	$final .= "\n";

	//output
	echo $final;
?>
