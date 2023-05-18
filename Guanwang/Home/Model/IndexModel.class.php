<?php
namespace Home\Model;
use Think\Model;

class IndexModel extends Model {
	
	
	
	public function __construct(){
        
    }
	
	public function indexjson(){
		
		$json = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/Public/json/index.json');
        $result = json_decode($json, true);
		
		return $result;
		
	}
	
	public function modelist(){
		
		
		$json = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/Public/json/modelist.json');
        $result = json_decode($json, true);
		
		return $result;
		
	}
	
	public function modelshow(){
		
		
		$json = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/Public/json/modelshow.json');
        $result = json_decode($json, true);
		
		return $result;
		
	}
	
}