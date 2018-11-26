<?php  
$address = array(
    array('id'=>1  , 'address'=>'安徽' , 'parent_id' => 0),
    array('id'=>2  , 'address'=>'江苏' , 'parent_id' => 0),
    array('id'=>3  , 'address'=>'合肥' , 'parent_id' => 1),
    array('id'=>4  , 'address'=>'庐阳区' , 'parent_id' => 3),
    array('id'=>5  , 'address'=>'大杨镇' , 'parent_id' => 4),
    array('id'=>6  , 'address'=>'南京' , 'parent_id' => 2),
    array('id'=>7  , 'address'=>'玄武区' , 'parent_id' => 6),
    array('id'=>8  , 'address'=>'梅园新村街道', 'parent_id' => 7),
    array('id'=>9  , 'address'=>'上海' , 'parent_id' => 0),
    array('id'=>10 , 'address'=>'黄浦区' , 'parent_id' => 9),
    array('id'=>11 , 'address'=>'外滩' , 'parent_id' => 10),
    array('id'=>12 , 'address'=>'安庆' , 'parent_id' => 1),
    );
/**
 * 获取家谱树
 * @param   array        $data   待分类的数据
 * @param   int/string   $pid    要找的祖先节点
 */
function Ancestry($data , $pid) {
    static $ancestry = array();
 
    foreach($data as $key => $value) {
        if($value['id'] == $pid) {
        	Ancestry($data , $value['parent_id']);
            $ancestry[] = $value;
 			echo $value['address'].'<br>';
            
        }
    }
    return $ancestry;
}

$rs = Ancestry($address,3);

foreach ($rs as $value) {
	echo $value['address'] . '>';
}
echo "<pre>";
var_dump($rs);



/**
 * 获取子孙树
 * @param   array        $data   待分类的数据
 * @param   int/string   $id     要找的子节点id
 * @param   int          $lev    节点等级
 */
 function getSubTree($data , $id = 0 , $lev = 0) {
     static $son = array();
 
     foreach($data as $key => $value) {
         if($value['parent_id'] == $id) {
             $value['lev'] = $lev;
             $son[] = $value;
             getSubTree($data , $value['id'] , $lev+1);
         }
     }
 
     return $son;
 }
$tree = getSubTree($address , 0 , 0);
foreach($tree as $k => $v) {
    echo str_repeat('--' , $v['lev']) . $v['address'] . '<br/>';
}


$numlist = array(
	array('id'=>1,'pid'=>0,'add'=>'中国'),
	array('id'=>2,'pid'=>1,'add'=>'福建')
);

function teset($num,$data){

	static $numd = array();

	foreach($data as $value){

		if($num==$value['id']){
			$numd[]=$value; 
			teset($value['pid'],$data);
			
		}
	}
	return $numd;
}

$rs = teset(2,$numlist);
var_dump($rs);

function sss(){
	global $numlist;
	static $list = array();
	$list[] = array('id'=>1,'pid'=>0,'add'=>'中国');
	var_dump($list);
	$list[] = array('id'=>2,'pid'=>1,'add'=>'福建');
	var_dump($list);
	echo json_encode($list);
}
sss();



?>