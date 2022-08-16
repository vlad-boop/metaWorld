<?php
/******************************************************************************/
//                                                                            //
//                             Smarty plugin                                  //
//                            @package Smarty                                 //
//							 @subpackage plugins                              //
//                        http://life-style.uz/                               //
//                   produced by Life Style, life-style.uz                    //
//                                                                            //
/******************************************************************************/

function smarty_function_images_sections($params, &$smarty){
	
	global $tbl;
	
	$assign 	= fetch_getParam ( 'assign', $params, 'sections' );
	$limit 		= ( int ) fetch_getParam ( 'limit', $params );
	$perPage 	= ( int ) fetch_getParam ( 'perPage', $params, $limit );
	$query 		= fetch_getParam ( 'query', $params, NULL );
	$order 		= fetch_getParam ( 'order', $params, NULL );
	$orderBy 	= fetch_getParam ( 'orderBy', $params, $order );
	$section 	= fetch_getParam ( 'section', $params );
	$page 		= ( int ) fetch_getParam ( 'page', $params );
	$getFrom 	= fetch_getParam ( 'getFrom', $params );
	
	$assignPagination = fetch_getParam ( 'assignPagination', $params );
	
	$path 		= fetch_getParam ( 'path', $params );
	$seFriendly = ( boolean ) fetch_getParam ( 'seFriendly', $params );
	$pnFirst 	= ( int ) fetch_getParam ( 'pnFirst', $params, 0 );
	$pnBefore 	= ( int ) fetch_getParam ( 'pnBefore', $params, 4 );
	$pnAfter 	= ( int ) fetch_getParam ( 'pnAfter', $params, 4 );
	$pnLast 	= ( int ) fetch_getParam ( 'pnLast', $params, 0 );
	
	if (empty ( $path ))
		$path = array ();
		
	if (empty ( $assign )){
		$smarty->_trigger_fatal_error ( 'fetch_sections: "assign" must not be empty' );
		return;
	}
	if($getFrom == 'gallery'){
    	
		$table = 'section_gallerys';
		$fields = 'imageId, fileName, description, link';
		$orderBy = 'imageId';
		
	} else {
    	
		$table = 'section_images';
		$fields = 'fileId, fileName, description';
		
	}
	
	/* conditions */
	$where = array ();
	if (!empty($section))$where[] = "sectionId='$section'";
	if (!is_null($query) && is_array($path))$path [] = "query=".urlencode ( $query );
		
	if (is_null($orderBy))$orderBy = (is_null($query) ? 'fileId DESC' : '');

	if ($page < 1) $page = 1;
	if ($perPage < 1) $perPage = 99;
	
		
	$fileList = dbQuery ($table, DB_ARRAYS, array('fields'=>'SQL_CALC_FOUND_ROWS imageId, fileName, url, description, link', 'order'=>$orderBy, 'where'=>$where, 'start'=>($page - 1)*$perPage, 'limit'=>$perPage));
	//print_r($fileList);
	$smarty->assign ( $assign, $fileList );
	$result = dbRawQuery("SELECT FOUND_ROWS() AS total", '', 'total');
	
	$smarty->assign($assign.'_inAlbum', $result[0]);
	
	$smarty->assign($assign.'Count', count($fileList));
	
	if (isset ( $assignPagination )){
		/* page numbering */
		$total = dbQuery ( $table, DB_VALUE, array('fields' => 'COUNT(*)', 'where' => $where ) );
		if (is_array ( $path ))
		{
			$path = SITE_URL . '/' . basename ( $_SERVER ['PHP_SELF'] ) . '?' . (! empty ( $path ) ? implode ( '&', $path ) . '&' : '');
			$seFriendly = false;
		}
		$pagination = getPageNums ( $total, $page, $perPage, $pnFirst, $pnBefore, $pnAfter, $pnLast, $path, $seFriendly );
		$smarty->assign ( $assignPagination, $pagination );
	}
	return null;
}
?>