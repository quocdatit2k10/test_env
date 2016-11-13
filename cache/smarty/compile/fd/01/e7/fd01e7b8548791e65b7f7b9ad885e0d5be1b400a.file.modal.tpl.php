<?php /* Smarty version Smarty-3.1.19, created on 2016-11-13 10:47:04
         compiled from "/var/www/html/ngoinhatoiyeu/admin782dlqtq3/themes/default/template/helpers/modules_list/modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16014922155827e238bcbaf5-18367214%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fd01e7b8548791e65b7f7b9ad885e0d5be1b400a' => 
    array (
      0 => '/var/www/html/ngoinhatoiyeu/admin782dlqtq3/themes/default/template/helpers/modules_list/modal.tpl',
      1 => 1474520955,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16014922155827e238bcbaf5-18367214',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5827e238bcddc8_69347418',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5827e238bcddc8_69347418')) {function content_5827e238bcddc8_69347418($_smarty_tpl) {?><div class="modal fade" id="modules_list_container">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="modal-title"><?php echo smartyTranslate(array('s'=>'Recommended Modules and Services'),$_smarty_tpl);?>
</h3>
			</div>
			<div class="modal-body">
				<div id="modules_list_container_tab_modal" style="display:none;"></div>
				<div id="modules_list_loader"><i class="icon-refresh icon-spin"></i></div>
			</div>
		</div>
	</div>
</div>
<?php }} ?>
