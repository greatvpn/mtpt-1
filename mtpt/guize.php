<?
$id = $_GET['id'];
switch($id){
	case '401':
		echo "[国别][年份][影片中文名][英文全名][电影类型][字幕情况][格式][其他信息]";
		break;
	case '413':
		echo "[国别][年份][影片中文名][英文全名][电影类型][字幕情况][格式][其他信息]";
		break;
	case '404':
		echo "[来源][年份][中文名][英文全名][字幕情况][格式][其他信息]";
		break;
	case '405':
		echo "[中文名][英文名][集数][字幕组信息][数据格式][完结/连载][其他]";
		break;
	case '402':
		echo "[国别][年份][文件名/英文名][S季度E集数][语言字幕][格式][完结/连载][其他]";
		break;
	case '403':
		echo "[具体时间(2011-01-01)][国别][中文/英文名称][格式][其他说明]";
		break;
	case '406':
		echo "[国别][具体发布时间][艺术家][资源名称][类型/风格][文件格式][分辨率][其它介绍]";
		break;
	case '407':
		echo "[具体日期][发布内容(体育类型)][节目名称][字幕说明][格式][其他说明]";
		break;
	case '414':
		echo "[发行时间][艺术家][资源名称][文件格式][文件码率][音乐类型][其他介绍]";
		break;
	case '408':
		echo "[应用平台][软件名称及版本][软件语言][软件格式][软件类型][其他说明]";
		break;
	case '410':
		echo "[游戏中文名][游戏英文名][游戏类型][制作公司][数据格式][版本][其他]";
		break;
	case '411':
		echo "[类别][发行日期][资料名称][其他介绍][文件类型]";
		break;
	case '412':
		echo "";
		break;
	case '409':
		echo "此类型较特殊，请按情况用[]括号分隔，自行起格式填写";
		break;
}
?>
