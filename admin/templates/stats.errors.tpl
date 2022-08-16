{include file="header.tpl" activeItem="errors" title="{stats:errorsTitle} - {header:statistics}"}
<div class="content-frame" style="margin-bottom:10px;">
    <div class="content-frame-top">                        
        <div class="page-title"><h2>{stats:errorsTitle}</h2></div>                           
    </div>
</div>
<div class="form-group main">                                        
    <div class="col-md-12">
        {include file="stats.error-code-selector.tpl" action="stats.errors.php"}
        {include file="stats.date-selector.tpl"}
    </div>
</div>
<div class="clear"></div>
<div class="col-md-12">
    <div class="panel panel-default">
        <div class="panel-body panel-body-table">
            <div class="table-responsive">
                <table class="table table-bordered table-striped table-actions">
                    <thead>
                        <tr>
                            <th class="text-center" width="100">{stats:code}</th>
                            <th class="text-center">{stats:requestUri}</th>
                            <th class="text-center" width="100">{stats:visits}</th>
                            <th  class="text-center" width="100">Просмотреть</th>
                        </tr>
                    </thead>
                    <tbody>
                    {if $errors}
					{foreach item=error from=$errors}
                	<tr class="{cycle values='odd,even' advance=false}" onmouseover="this.oldClassName=this.className; this.className='{cycle values='odd,even'}Hov'" onmouseout="this.className=this.oldClassName">
						<td class="data small code{$error.errorCode}" align="center">{$error.errorCode}</td>
						<td class="data small" width="100%"><a href="{$error.requestUri}" target="_blank">{$error.requestUri|urldecode|truncate:80|escape nofilter}</a></td>
						<td class="data small action" style="cursor: pointer;" onClick="window.open('stats.error.php?requestUri={$error.requestUri|urlencode nofilter}')" align="center">{$error.totalVisits}</td>
						<td class="data action" style="cursor: pointer;" onClick="window.open('stats.error.php?requestUri={$error.requestUri|urlencode nofilter}')" align="center"><span class="fa fa-eye"></span></td>
					</tr>
                	{/foreach}
                  	<tr>
	                  	<td colspan="4">
	                    <table cellpadding="0" cellspacing="0" width="100%"><tr>
	                 	 	<td class="small">{general:results}</td>
					 	 	<td align="right">
					 	 	{if $pageNums}             
		                        <ul class="pagination pagination-sm pull-right push-down-10 push-up-10">
		                           
		                            {foreach from=$pageNums.pages item=number}
		                                {if $number eq $page}
		                                    <li class="active"><a href="stats.errors.php?page={$number}{if $filterErrorCode}&filterErrorCode={$filterErrorCode}{/if}" class="pageNum">{$number}</a></li>
		                                {elseif $number eq '...'}
		                				   <li><a>... </a></li>
		                                {else}
		                				    <li><a href="stats.errors.php?page={$number}{if $filterErrorCode}&filterErrorCode={$filterErrorCode}{/if}" class="pageNum">{$number}</a></li>
		                                {/if}
		                            {/foreach}
		                        </ul>  
							{/if}
	                    </tr></table>
                   		</td>
                   	</tr>
                   	<tr>
	                   	<td colspan="4">
		                   	<table width="100%" cellpadding="5" cellspacing="0">
						   		<tr>
							   		<td class="small">
								   		<span class="code404">404</span> - {stats:errorCodes:404}, 
								   		<span class="code503">503</span> - {stats:errorCodes:503}, 
								   		<span class="code301">301</span> - {stats:errorCodes:301}
								   	</td>
								</tr>
							</table>
	                   	</td>
                   	</tr>
                    {else}
                   	<tr class="odd">
                  		<td class="data none" colspan="4" align="center">- {general:none} -</td>
                   	</tr>
                   	<tr><td colspan="3">&nbsp;</td></tr>
                    {/if}
                    </tbody>
                </table>
            </div>                                
        </div>
    </div>
</div>


{include file="footer.tpl"}