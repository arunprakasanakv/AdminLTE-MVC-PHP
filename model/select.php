<?php 
	
	function select($column_names, $table_name, $conditions, $con){
		$sql = get_select_query($column_names, $table_name, $conditions);
		// print_r($sql);
		if($result = execute_query($sql, $con)){
			while($row = get_array_from_object($result)) {
				$selected_rows[] = $row;
			}
			if(empty($selected_rows)){
				$selected_rows = "empty";
			}
			return $selected_rows;
		} else{
			return $selected_rows = "empty";
		}
	}

	function get_select_query($column_names, $table_name, $conditions){
		$column = parse_column($column_names);
		if(empty($conditions)){
			$query = "SELECT ".$column." FROM ".$table_name;
		} else{
			$condition = parse_condition($conditions);
			$query = "SELECT ".$column." FROM ".$table_name . " WHERE ".$condition;
		}
		return $query;
	}

	function parse_column($column_names){
		if(is_array($column_names)){
			$i = 1;
			foreach ($column_names as $key => $column_name) {
				if($i == 1){
					$colum_sql = $column_name;
					++$i;
				} else{
					$colum_sql = $colum_sql.",".$column_name;
				}
			}
		} else{
			$colum_sql = $column_names;
		}
		return $colum_sql;
	}

	function parse_condition($column_names){
		if(is_array($column_names)){
			$i = 1;
			foreach ($column_names as $column_name => $column_value) {
				if($i == 1){
					$condition_sql = $column_name ." = '". $column_value."'";
					++$i;
				} else{
					$condition_sql = $condition_sql." AND ".$column_name ." = '". $column_value."'";
				}
			}
		} else{
			$condition_sql = $column_names;
		}
		return $condition_sql;
	}
