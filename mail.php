<?
	// $_POST = json_decode(file_get_contents('php://input'), true);

	$input = json_decode(file_get_contents('php://input'), true);

	$fields = ['name','phone','email','message'];
	$errors=[];
	foreach ($fields as $key) {
		if($input[$key]==''){
			$errors[$key]=$key. ' can not be null';
		}
	}
	$ret = [];
	$ret['status'] = 'true';
	if(count($errors) > 0) $ret['status'] = 'false';
	$ret['errors'] = 'false';
	if(count($errors) > 0) $ret['errors'] = $errors;
	echo json_encode($ret);
?>
