<?php

class Url{
	public static function get($type){		
		$arr = explode("/", Input::get("route"));
		
		if(count($arr) > 0){
			switch($type){
				case "main":
					$v = "index";
					if(isset($arr[0]) && !empty($arr[0])){
						$v = $arr[0];
					}
					
					return $v;
				break;
				
				case "sub":
					return isset($arr[1]) ? $arr[1] : false;
				break;
				
				case "view":
					return isset($arr[2]) ? $arr[2] : false;
				break;
				
				case "path":
					array_shift($arr);
					return implode("/", $arr);
				break;
				
				default:
					if($type == 0){
						$v = "index";
						
						if(isset($arr[$type]) && !empty($arr[$type])){
							$v = $arr[$type];
						}
						
						return $v;
					}
					
					return isset($arr[$type]) ? $arr[$type] : "";
				break;
			}
		}else{
			return "index";
		}
	}
}