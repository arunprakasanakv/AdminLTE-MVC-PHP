<?php 

	function insert($table_name, $column_names_and_values, $conn){
		$table_name = sanitize($table_name, $conn);
		$sql = get_insert_query($table_name, $column_names_and_values, $conn);
		// print_r($sql);
		return execute_query($sql, $conn);
	}

	function get_insert_query($table_name, $column_names_and_values, $conn){
		$sql = "INSERT INTO ";
		if(!empty($table_name)){
			$sql = $sql.$table_name;
		}
		$i = 1;
		foreach ($column_names_and_values as $column_name => $value) {
			$column_name = sanitize($column_name, $conn);
			$value = sanitize($value, $conn);
			if($i == 1){
				$total_column_name = '`'.$column_name.'`';
				$total_column_value = '"'.$value.'"';
				++$i;
			} else{
				$total_column_name = $total_column_name.', `'.$column_name.'`';
				$total_column_value = $total_column_value.', "'.$value.'"';
			}
		}
		return $sql." ( ".$total_column_name." ) VALUES ( ".$total_column_value." )";
	}