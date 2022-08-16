{include file="header.tpl" activeItem="banners" title="{banners:sectionName}"}
<div class="page-content-wrap">
	{if $bannerDeleted}
		<p align="center">{$l.banners.deleted}</p>
	{elseif $bannerSaved}
		<p align="center">{$l.banners.saved}</p>
	{/if}

  {if $messages.saved}<span id="savedMessage" onclick = "{literal}noty({text: '{/literal}{banners:messages:0}{literal}', layout: 'topRight', type: 'success'});{/literal}"></span>{/if}
  {if $messages.deleted}<span id="deletedMessage" onclick = "{literal}noty({text: '{/literal}{banners:messages:1}{literal}', layout: 'topRight', type: 'success'});{/literal}"></span>{/if} 
 
  {if $errors.access_denied}<span id="accessDeniedError" onclick = "{literal}noty({text: '{/literal}{banners:errors:1}{literal}', layout: 'topRight', type: 'error'});{/literal}"></span>{/if} 
	{if $errors.not_saved}<span id="notSavedError" onclick = "{literal}noty({text: '{/literal}{banners:errors:0}{literal}', layout: 'topRight', type: 'error'});{/literal}"></span>{/if}
	{if $error.fileType}<span id="fileTypeError" onclick = "{literal}noty({text: '{/literal}{$l.banners.errorFileType}{literal}', layout: 'topRight', type: 'error'});{/literal}"></span>{/if}
  {if $error.bannerName} <span id="bannerNameError" onclick = "{literal}noty({text: '{/literal}{banners:errors:2}{literal}', layout: 'topRight', type: 'error'});{/literal}"></span>{/if}
  <script>
  	{literal}
    $(document).ready(function () {
      {/literal}
      {if $errors.access_denied} $('#accessDeniedError').click();{/if}
      {if $errors.not_saved} $('#notSavedError').click(); {/if}
      {if $error.fileType} $('#fileTypeError').click();{/if}
      {if $error.bannerName} $('#bannerNameError').click();{/if}
      
      {if $messages.saved} $('#savedMessage').click();{/if}
      {if $messages.deleted} $('#deletedMessage').click();{/if}
      {literal}
    });
  {/literal}           
  </script>
  
  
{if $action.edit}
  <div class="content-frame" style="margin-bottom:10px;">
    <div class="content-frame-top"> 
      <div class="col-md-3 nopadding"><h2>{banners:sectionName}</h2></div>
      <div class="col-md-6 content-frame-body-left" >
        <div id="ajaxStatus" class="alert alert-warning col-md-6 info-box-img" role="alert"> </div>
				
		  </div>
		</div>
	</div>
	<div class="col-md-12">
    <form action="" method="post" enctype="multipart/form-data">
      {if $error.fileType}<p align="center" style="color:red">{$l.banners.errorFileType}</p>{/if}
      
      <div class="panel panel-default tabs">                   
        <ul class="nav nav-tabs nav-justified"><li class="active"><a href="#general" data-toggle="tab" aria-expanded="true">{banners:general}</a></li></ul> 
  			<div class="panel-body tab-content nopadding">
  				<div class="tab-pane active" id="general">
            <div class="panel-body" id="generalPane"> 
              <div class="col-md-8 col-xs-12">                                                                        
                <div class="form-group">
                  
                  <div class="col-md-3 nopadding_left">{banners:isActive}</div>
                  <div class="col-md-9 nopadding_right">
                    <div class="check_block_box">
                      <div class="check_box">
                        <label class="switch switch-small">
                          <input type="checkbox" name="banner[isActive]" value="1" {if $banner.isActive}checked="checked"{/if}><span></span>
                        </label>
                      </div>
                    </div>	
{*
                    <div class="input-group">
                      <label class="switch">
                        <input type="hidden" name="banner[isActive]" value="0" />
                        <input type="checkbox" name="banner[isActive]" value="1" {if $banner.isActive}checked="checked"{/if} id="isActive"><span></span>
                      </label>
                    </div>
*}
                  </div>
                </div>
  					  	<div class="form-group">
    					  	<div class="col-md-3 nopadding_left">{banners:bannerName}</div>
    					  	<div class="col-md-9 nopadding_right"><input class="form-control" type="text" name="banner[bannerName]" value="{$banner.bannerName|escape}"/></div>
    					  </div>
                <div class="form-group">
                  <div class="col-md-3 nopadding_left">{banners:bannerUrl}</div>
                  <div class="col-md-9 nopadding_right"><input class="form-control" type="text" name="banner[bannerUrl]" value="{$banner.bannerUrl|escape}" placeholder="http://" /></div>
                </div>
                <div class="form-group">
                  <div class="col-md-3 nopadding_left">{banners:alternativeText}</div>
                  <div class="col-md-9 nopadding_right"><input class="form-control" type="text" name="banner[alternativeText]" value="{$banner.alternativeText|escape}" /></div>
                </div>
              </div>
              <div class="col-md-4 col-xs-12">
                
                <div class="form-group" style="text-align:center;padding: 20px 0px;"><div class="col-md-12 col-xs-12 banners_images">{$banner.generatedCode nofilter}</div></div>
                <div class="form-group"><input type="file" name="file" class="btn btn-danger btn-file fileinput" data-filename-placement="inside" title="{banners:selectFile}"></div>
              </div>
            
            </div>
          </div>
        </div> 
  		</div>                        
  		<!-- END TABS -->		
      <div align="center" class="col-md-12 main main_buttons">
        <input type="hidden"  name="banner[bannerId]" value="{$banner.bannerId}" />
        <input type="hidden"  name="banner[bannerWidth]" value="{$banner.bannerWidth}" />
        <input type="hidden"  name="banner[bannerHeight]" value="{$banner.bannerHeight}" />
        <input type="hidden"  name="banner[bannerType]" value="{$banner.bannerType}" />
        <input type="hidden"  name="banner[fileUrl]" value="{$banner.fileUrl}" />
        <input class="btn btn-primary" type="submit"  name="action[save]" value="&nbsp; {general:save} &nbsp;" />
        <input class="btn btn-primary" type="button" value="{general:cancel}" onclick="javascript:document.location='banners.php?page={$page}'" />
  		</div>
    </form>
  </div>
{elseif $action.confirmDelete}

  <div class="content-frame" style="margin-bottom:10px;">
    <div class="content-frame-top"><div class="page-title"><h2>{banners:sectionName}</h2></div></div>
  </div>
  <div class="col-md-4"></div>
  <div class="col-md-4">
    <form action="" method="post">
      <div class="panel panel-colorful">
        <div class="panel-heading"></div>
        <div class="panel-body">{banners:confirmDelete} "<b>{$banner.bannerName}</b>" ?</div>
        <div class="panel-footer">
          <input class="btn btn-danger" type="submit" name="action[delete]" value=" {general:yes} ">
          <input class="btn btn-primary pull-right" type="button" onclick="location.href='banners.php'"  value=" {general:no} ">
        </div>
      </div>
      <input type="hidden" name="banner[bannerId]" value="{$banner.bannerId}" />
	  </form>
  </div>
  <div class="col-md-4"></div> 
{elseif $action.generateCode}

  <table align="center">
	  <tr><td><b>{banners:directCode}:</b><br /><textarea cols="100" rows="5">{$banner.frame|escape}</textarea></td></tr>
    <tr><td><input type="button" onclick="location.href='banners.php'" value="{banners:listBanners}"></td></tr>
  </table>
	
{else}
	<div class="content-frame" style="margin-bottom:10px;">
    <div class="content-frame-top">                        
      <div class="col-md-3 nopadding"><h2>{banners:sectionName}</h2></div> 
      <div class="col-md-6 content-frame-body-left">
        <div id="ajaxStatus" class="alert alert-warning col-md-6 info-box-img" role="alert"> </div> 
      </div>
      <div class="col-md-3 nopadding">                                                 
        <a class="btn btn-danger pull-right" href="banners.php?action[edit]=true" data-toggle="tooltip" data-placement="left" data-original-title="{banners:new}"><i class="fa fa-plus"></i></a>
      </div>
    </div>
	</div>
	

  <div class="col-md-12">
    <form action="" method="post" >
      <div class="panel panel-default">
        <div class="panel-body panel-body-table">
          <div class="table-responsive">
            <table class="table table-striped table-actions table-hover" id="banners">
              <thead>
                <tr>
                  <th class="text-center" width="50">Id</th>
                  <th class="">{banners:tableTitle}</th>
                  <th class="text-center" width="110">{general:action}</th>
                </tr>
              </thead>
              <tbody>
                {if $adBanners}{foreach item=banner from=$adBanners}
                <tr>
                  <td class="data" align="center"> {$banner.bannerId} {$languages} </td>
                  <td class="data" nowrap="nowrap" width="100%">{$banner.bannerName}</td>
                  <td  class="btn-link-action">
                    <a class="btn btn-rounded" href="banners.php?action[edit]=true&banner[bannerId]={$banner.bannerId}"><span class="fa fa-pen"></span></a>
                    <a class="btn btn-danger btn-rounded" href="banners.php?action[confirmDelete]=true&banner[bannerId]={$banner.bannerId}" id="{$user.userId}"><span class="fa fa-trash"></span></a>
                  </td>	
                </tr>
                {/foreach}
                {else}
                <tr class="odd"><td class="data none" colspan="5" align="center">- {general:none} -</td></tr>
                {/if}   
              </tbody>
            </table>
          </div>
        </div>
      </div> 
    </form> 	
</div>
{/if}

</div>


{include file="footer.tpl"}