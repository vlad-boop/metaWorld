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

function smarty_function_fetch_prod($params, &$smarty){
	global $SECTIONS, $gmNow, $fetchedArticles, $config, $MUSQLILINK;
	
	$assign        = fetch_getParam('assign', $params, 'articles');
	$fields        = fetch_getParam('fields', $params, 'articleId, sectionId, publishedOn, title, alias, url, summary, content, isFeatured, orderBy, price, discount, discountprice, type_content, articul, nomVm, polVm, massa, visota, diametr, venchik, pogruzka');
	$status        = fetch_getParam('status', $params, 'visible');
	//$productstatus = fetch_getParam('productstatus', $params, 'visible');
	$limit         = (int) fetch_getParam('limit', $params);
	$perPage       = (int) fetch_getParam('perPage', $params, $limit);
	$isFeatured    = fetch_getParam('isFeatured', $params, NULL);
	$hasImage      = fetch_getParam('hasImage', $params, NULL);
	$query         = fetch_getParam('query', $params, NULL);
	$match         = fetch_getParam('match', $params, 'any');
	$order         = fetch_getParam('order', $params, NULL);
	$orderBy       = fetch_getParam('orderBy', $params, $order);
	$section       = fetch_getParam('section', $params);
	$type_content  = fetch_getParam('type_content', $params);
	$page          = (int) fetch_getParam('page', $params);
	$skip          = fetch_getParam('skip', $params, NULL);
	$noSubsections = (boolean) fetch_getParam('noSubsections', $params, false);
	
	$nomVm    	   = fetch_getParam('nomVm', $params);

	$label    	   = fetch_getParam('label', $params);
	$atrtable      = fetch_getParam('atrtable', $params);
	$min_price 		= (int) fetch_getParam('min_price', $params);
	$max_price 		= (int) fetch_getParam('max_price', $params);
	
	$product_labels =  getRequestVar('product_labels');
	
	$assignPagination = fetch_getParam('assignPagination', $params);
	$path             = fetch_getParam('path', $params);
	$seFriendly       = (boolean) fetch_getParam('seFriendly', $params);
	$pnFirst          = (int) fetch_getParam('pnFirst', $params, 0);
	$pnBefore         = (int) fetch_getParam('pnBefore', $params, 4);
	$pnAfter          = (int) fetch_getParam('pnAfter', $params, 4);
	$pnLast           = (int) fetch_getParam('pnLast', $params, 0);
	
	if(empty($assign)){
		$smarty->_trigger_fatal_error('fetch_articles: "assign" must not be empty');
		return;
	}
	
	if(empty($path)) $path = array();

	/* conditions */
	$where = array();
	$where[] = "publishedOn <= '$gmNow'";
	
	if(!empty($status)) $where[] 		= "status='".mysqli_real_escape_string($MUSQLILINK, $status)."'";
	if(!empty($type_content)) $where[] 	= "type_content='".mysqli_real_escape_string($MUSQLILINK, $type_content)."'";
	if(!is_null($isFeatured)) $where[] 	= 'isFeatured = '.((boolean) $isFeatured ? 1 : 0);
	if(!is_null($hasImage)) $where[] 	= 'hasImage = '.((boolean) $hasImage ? 1 : 0);
	if(is_null($orderBy)) $orderBy 		= (is_null($query) ? 'publishedOn DESC' : '');

	if(!empty($nomVm)) $where[] 	    = "nomVm='".mysqli_real_escape_string($MUSQLILINK, $nomVm)."'";
	
	if(!empty($label)) $where[] 	    = "label='".mysqli_real_escape_string($MUSQLILINK, $label)."'";
	
	
	//if(!empty($min_price)) $where[] = "price>='".mysql_real_escape_string($min_price)."'";
	//if(!empty($max_price)) $where[] = "price<='".mysql_real_escape_string($max_price)."'";
	
	
	if(!is_null($query) && is_array($path)) $path[] = "query=".urlencode($query);

	/* query conditions */
	fetch_articles_addQueryConditions($query, $match, $where, $fields, $orderBy);

	/* add section conditions */
	fetch_articles_addSectionConditions($section, $noSubsections, $where);

	/* skipping articles */
	fetch_articles_addSkipConditions($skip, $where);

	/* checking article fields */
	fetch_articles_filterFields($fields);
	
	/* calculate article popularity article fields */
	fetch_articles_calculatePopularity($orderBy);
  
	if($page < 1) $page = 1;
	if($perPage < 1) $perPage = $config['cont_section'];

	if(!is_null($query) && empty($query)){
		$articles = array();
	} else {
		$articles = dbQuery('articles', DB_ARRAYS, array('fields'=>$fields, 'order'=>$orderBy, 'where'=>$where, 'start'=>($page-1)*$perPage, 'limit'=>$perPage));
		$articles = prepareArticles($articles);
		//print_r($articles);
	}
	$smarty->assign($assign, $articles);

	/* saving fetched articles for SKIP ability */
	if(empty($fetchedArticles[$assign])) $fetchedArticles[$assign] = array();
	if(!empty($articles)) foreach($articles as $article) $fetchedArticles[$assign][] = $article['articleId'];
	
	if(!empty($assignPagination)){
		/* page numbering */
		$total = dbQuery('articles', DB_VALUE, array('fields'=>'COUNT(*)', 'where'=>$where));
		if(is_array($path)){
			$path = SITE_URL.'/'.basename($_SERVER['PHP_SELF']).'?'.(!empty($path) ? implode('&', $path).'&' : '');
			$seFriendly = false;
		}
		$pagination = getPageNums($total, $page, $perPage, $pnFirst, $pnBefore, $pnAfter, $pnLast, $path, $seFriendly);
		$smarty->assign($assignPagination, $pagination);
	}

	return null;
}
?>