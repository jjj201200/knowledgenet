<?php
	/**
	 * Created by PhpStorm
	 * User:    Ruo
	 * Date:    2014/10/23
	 * Time:    13:27
	 */
	if (isset($_POST['method']) && $_POST['method'] == 'download') {
		echo file_get_contents ('net.json');
	}
	if (isset($_POST['method']) && $_POST['method'] == 'upload'&&$_POST['data']!=''&&isset($_POST['password'])) {
		$json_file = fopen ('net.json' , "w");
		if( $_POST['password']=='0037'&&fwrite ($json_file, $_POST['data'])){
			echo 0;
		}else echo 1;
	}


	/* End of file request.php */