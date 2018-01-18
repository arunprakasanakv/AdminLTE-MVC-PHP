<?php 
	
	function update($column_names, $table_name, $conditions, $con){
		$sql = get_update_query($column_names, $table_name, $conditions);
		// print_r($sql);
		if($result = execute_query($sql, $con)){
			return 1;
		} else{
			return 0;
		}
	}

	function get_update_query($column_names, $table_name, $conditions){
		$column = update_parse_column($column_names);
		if(empty($conditions)){
			$query = "UPDATE ".$table_name." SET ".$column;
		} else{
			$condition = update_parse_condition($conditions);
			$query = "UPDATE ".$table_name ." SET ".$column." WHERE ".$condition;
		}
		return $query;
	}

	function update_parse_column($column_names){
		if(is_array($column_names)){
			$i = 1;
			foreach ($column_names as $column_name => $column_value) {
				if($i == 1){
					$colum_sql = $column_name ." = '". $column_value."'";
					++$i;
				} else{
					$colum_sql = $colum_sql." ,".$column_name ." = '". $column_value."'";
				}
			}
		} else{
			$colum_sql = $column_names;
		}
		return $colum_sql;
	}

	function update_parse_condition($column_names){
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
