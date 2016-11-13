<?php /*%%SmartyHeaderCode:9523784175827dd6d7bfab3-28571969%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e242fbedee9e1cd7df638125397d32c6df0893b4' => 
    array (
      0 => '/var/www/html/ngoinhatoiyeu/themes/default-bootstrap/modules/blockcms/blockcms.tpl',
      1 => 1474520956,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9523784175827dd6d7bfab3-28571969',
  'variables' => 
  array (
    'block' => 0,
    'cms_titles' => 0,
    'cms_key' => 0,
    'cms_title' => 0,
    'cms_page' => 0,
    'link' => 0,
    'show_price_drop' => 0,
    'PS_CATALOG_MODE' => 0,
    'show_new_products' => 0,
    'show_best_sales' => 0,
    'display_stores_footer' => 0,
    'show_contact' => 0,
    'contact_url' => 0,
    'cmslinks' => 0,
    'cmslink' => 0,
    'show_sitemap' => 0,
    'footer_text' => 0,
  ),
  'has_nocache_code' => true,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5827dd6d86f2d6_75370752',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5827dd6d86f2d6_75370752')) {function content_5827dd6d86f2d6_75370752($_smarty_tpl) {?>
	<!-- Block CMS module footer -->
	<section class="footer-block col-xs-12 col-sm-2" id="block_various_links_footer">
		<h4>Hổ trợ thông tin</h4>
		<ul class="toggle-footer">
							<li class="item">
					<a href="http://japandomestic.com/san-pham-hot" title="SALE đặc biệt">
						SALE đặc biệt
					</a>
				</li>
									<li class="item">
				<a href="http://japandomestic.com/hang-moi-ve" title="Sản phẩm mới">
					Sản phẩm mới
				</a>
			</li>
															<li class="item">
				<a href="http://japandomestic.com/lien-he" title="Liên hệ">
					Liên hệ
				</a>
			</li>
															<li class="item">
						<a href="http://japandomestic.com/content/4-gioi-thieu" title="Giới thiệu">
							Giới thiệu
						</a>
					</li>
																<li class="item">
						<a href="http://japandomestic.com/content/category/2-ho-tro-khach-hang" title="Hỗ trợ khách hàng">
							Hỗ trợ khách hàng
						</a>
					</li>
																<li class="item">
						<a href="http://japandomestic.com/content/category/3-goc-se-chia" title="Góc Sẻ Chia">
							Góc Sẻ Chia
						</a>
					</li>
													<li>
				<a href="http://japandomestic.com/sitemap" title="Sơ đồ trang web">
					Sơ đồ trang web
				</a>
			</li>
					</ul>
		
	</section>
	<section class="bottom-footer col-xs-12">
		<div>
			<?php echo smartyTranslate(array('s'=>'[1] %3$s %2$s - Thiết kế bởi %1$s [/1]','mod'=>'blockcms','sprintf'=>array('Ngôi nhà tôi yêu™',date('Y'),'©'),'tags'=>array('<a class="_blank" href="">')),$_smarty_tpl);?>

		</div>
	</section>
	<!-- /Block CMS module footer -->
<?php }} ?>
