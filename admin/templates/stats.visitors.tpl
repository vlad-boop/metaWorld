{include file="header.tpl" activeItem="visitors" title="{stats:visitorsTitle} - {header:statistics}"}
<div class="content-frame" style="margin-bottom:10px;">
    <div class="content-frame-top">                        
        <div class="page-title"><h2>{stats:visitorsTitle}</h2></div>                           
    </div>
</div>
<div class="form-group main">                                        
    <div class="col-md-12">
        {include file="stats.type-selector.tpl" action="stats.visitors.php"}
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
                            <th class="text-center">{stats:firstVisit}</th>
                            <th class="text-center">{stats:referer}</th>
                            <th class="text-center">{stats:visits}</th>
                            <th class="text-center">Просмотреть</th>
                        </tr>
                    </thead>
                    <tbody>                                            
                    {if $visitors}
                    {foreach item=visitor from=$visitors}
                   	<tr class="">
                  		<td nowrap="nowrap">{$visitor.firstVisitOn nofilter}</td>
                  		<td class="" width="100%">
	                  		{if $visitor.refererWebsite}
	                  			<a href="{$visitor.referer}" target="_blank">{$visitor.refererWebsite|truncate:30}</a>
	                  			{if $visitor.searchPhrase} ({$visitor.searchPhrase|truncate:50}){/if}
	                  		{elseif $visitor.refererUrl}
	                  			<a href="{$visitor.refererUrl}" target="_blank">{$visitor.refererUrl|truncate:80}</a>
	                  		{/if}
	                  	</td>
                  		<td class="data action" style="cursor: pointer;" onClick="window.open('stats.visitor.php?visitorId={$visitor.visitorId}{if $filterTypeId}&filterTypeId={$filterTypeId}{/if}')" align="center">{$visitor.totalVisits}</td>
                  		<td class="data action" style="cursor: pointer;" onClick="window.open('stats.visitor.php?visitorId={$visitor.visitorId}{if $filterTypeId}&filterTypeId={$filterTypeId}{/if}')" align="center"><span class="fa fa-eye"></span></td>
                   	</tr>
                   	{/foreach}
                   	<tr>
                    <table cellpadding="0" cellspacing="0" width="100%"><tr>
                 	 <td class="small">{general:results}</td>
                     <td align="right">
          		     {if $pageNums}             
                        <ul class="pagination pagination-sm pull-right push-down-10 push-up-10">
                            {foreach from=$pageNums.pages item=number}
                                {if $number eq $page}
                                    <li class="active"><a href="stats.visitors.php?page={$number}{if $filterTypeId}&filterTypeId={$filterTypeId}{/if}{if $domain}&domain={$domain}{/if}" class="pageNum">{$number}</a></li>
                                {else}
                				    <li><a href="stats.visitors.php?page={$number}{if $filterTypeId}&filterTypeId={$filterTypeId}{/if}{if $domain}&domain={$domain}{/if}" class="pageNum">{$number}</a></li>
                                {/if}
                            {/foreach}
                        </ul>  
                    {/if}
                    </tr></table>
                   	</td></tr>
                    {else}
                   	<tr class="odd"><td class="data none" colspan="4" align="center">- {general:none} -</td></tr>
                    {/if}
                    </tbody>
                </table>
            </div>                                
        </div>
    </div>
</div>
{include file="footer.tpl"}