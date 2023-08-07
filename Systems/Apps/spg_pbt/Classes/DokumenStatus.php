<?php


class DokumenStatus {
	public static function get($id){		
		switch($id){
			default:
			case 0: return "daftar"; break;
			case 1: return "batal"; break;
			case 2: return "iklan"; break;
			case 3: return "mula"; break;
			case 4: return "tutup"; break;
			case 5: return "siap"; break;
		}
	}
	
	public static function getAll(){
		return [
			"daftar", "batal", "iklan", "mula", "tutup", "siap"
		];
	}
}