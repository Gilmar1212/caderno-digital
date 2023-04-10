<?php
include_once("../connect.php");
	function fetch_query($query){
		$fodasi = $query->fetchAll();
		return $fodasi;
	}
?>