<div class="container-fluid">
	<nav class="navbar navbar-default pjScHeader" role="navigation">
    	<div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
            	<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                	<span class="sr-only">Toggle navigation</span>
                	<span class="icon-bar"></span>
                	<span class="icon-bar"></span>
                	<span class="icon-bar"></span>
              </button>
              <a class="scStoreName navbar-brand" href="#"><?php __('lblStoreName')?></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

              	<ul class="nav navbar-nav navbar-right">
              		<?php
					$myFavs = array();
					$number_of_favs = 0;
					if (isset($_COOKIE[$controller->defaultCookie]) && !empty($_COOKIE[$controller->defaultCookie]))
					{
						$myFavs = unserialize(stripslashes($_COOKIE[$controller->defaultCookie]));
						$number_of_favs = count($myFavs);
						foreach ($myFavs as $fav => $whatever)
						{
							$item = unserialize($fav);
							$product = NULL;
							if(in_array($item['product_id'], $tpl['hidden_ids_arr']))
							{
								$number_of_favs--;
							}
						}
					}
              		?>
                	<li<?php echo $_GET['action'] == 'pjActionFavs' ? ' class="active"' : null;?>><a href="<?php echo pjUtil::getReferer(); ?>#!/Favs" ><?php __('front_favs'); ?><span class="badge"><?php echo !empty($myFavs) ? sprintf(" (%u)", $number_of_favs): NULL; ?></span></a></li>
                	<?php
                	if (!$controller->isLoged())
                	{ 
	                	?>
	                	<li<?php echo $_GET['action'] == 'pjActionLogin' ? ' class="active"' : null;?>><a href="<?php echo pjUtil::getReferer(); ?>#!/Register" class="scSelectorLogin"><?php __('front_login'); ?></a></li>
	                	<li<?php echo $_GET['action'] == 'pjActionRegister' ? ' class="active"' : null;?>><a href="<?php echo pjUtil::getReferer(); ?>#!/Login" class="scSelectorRegister"><?php __('front_register'); ?></a></li>
	                	<?php
                	}else{
                		?>
	                	<li><a href="<?php echo pjUtil::getReferer(); ?>#!/Logout" class="scSelectorLogout"><?php __('front_logout'); ?></a></li>
	                	<li<?php echo $_GET['action'] == 'pjActionProfile' ? ' class="active"' : null;?>><a href="<?php echo pjUtil::getReferer(); ?>#!/Profile" class="scSelectorProfile"><?php __('front_profile'); ?></a></li>
	                	<?php
                	}                	
                	if(isset($_SESSION[$controller->defaultLangMenu]) && $_SESSION[$controller->defaultLangMenu] == 'show')
                	{ 
                		if (isset($tpl['locale_arr']) && is_array($tpl['locale_arr']) && !empty($tpl['locale_arr']) && count($tpl['locale_arr']) > 1)
                		{
                			$locale_id = $controller->pjActionGetLocale();
                			$selected_title = null;
							$selected_src = NULL;
                			foreach ($tpl['locale_arr'] as $locale)
                			{
                				if($locale_id == $locale['id'])
                				{
                					$selected_title = $locale['language_iso'];
									$lang_iso = explode("-", $selected_title);
									if(isset($lang_iso[1]))
									{
										$selected_title = $lang_iso[1];
									}
									if (!empty($locale['flag']) && is_file(PJ_INSTALL_PATH . $locale['flag']))
									{
										$selected_src = PJ_INSTALL_URL . $locale['flag'];
									} elseif (!empty($locale['file']) && is_file(PJ_FRAMEWORK_LIBS_PATH . 'pj/img/flags/' . $locale['file'])) {
										$selected_src = PJ_INSTALL_URL . PJ_FRAMEWORK_LIBS_PATH . 'pj/img/flags/' . $locale['file'];
									}
									break;
                				}
                			}
                			?>
		                	<li class="dropdown pjScLocale">
		                  		<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><img src="<?php echo $selected_src; ?>" alt=""><span class="title"><?php echo $selected_title;?></span> <span class="caret"></span></a>
			                  	<ul class="dropdown-menu" role="menu">
			                  		<?php
			                  		foreach ($tpl['locale_arr'] as $locale)
			                  		{
			                  			$selected_src = NULL;
			                  			if (!empty($locale['flag']) && is_file(PJ_INSTALL_PATH . $locale['flag']))
			                  			{
			                  				$selected_src = PJ_INSTALL_URL . $locale['flag'];
			                  			} elseif (!empty($locale['file']) && is_file(PJ_FRAMEWORK_LIBS_PATH . 'pj/img/flags/' . $locale['file'])) {
			                  				$selected_src = PJ_INSTALL_URL . PJ_FRAMEWORK_LIBS_PATH . 'pj/img/flags/' . $locale['file'];
			                  			}
			                  			?>
			                  				<li>
			                  					<a href="#" class="scSelectorLocale<?php echo $locale_id == $locale['id'] ? ' scLocaleFocus' : NULL; ?>" data-id="<?php echo $locale['id']; ?>">
			                  						<img src="<?php echo $selected_src; ?>" alt="">
													<?php echo pjSanitize::html($locale['name']); ?>
			                  					</a>
			                  				</li>
			                  			<?php
			                  		}
			                  		?>
			                  	</ul>
		                	</li>
		                	<?php
                		}
                	} 
	                ?>
              	</ul>
            </div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>
	<div class="row pjScBar">
		<div class="col-sm-6">
            <form action="" method="get" class="scSearchForm scSelectorSearchForm">
            	<div class="input-group">
                	<input type="text" name="q" value="<?php echo pjSanitize::html(urldecode(@$_GET['q'])); ?>" class="form-control" placeholder="<?php echo pjSanitize::html(__('front_search', true)); ?>">
                	<span class="input-group-btn">
                  		<button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                	</span>
              	</div>
            </form>
            <br>
		</div>
		<?php
		$isCheckoutReady = isset($tpl['price_arr']) && $tpl['price_arr']['status'] == 'OK';
		if ((int) $tpl['option_arr']['o_disable_orders'] === 0)
		{
			$qty = 0;
			foreach($tpl['cart_arr'] as $v)
			{
				$qty += $v['qty'];
			}
			?>
	        <div class="col-sm-6">
	            <div class="clearfix">
	              	<div class="btn-group pull-right" role="group" aria-label="...">
	                	<a href="<?php echo pjUtil::getReferer(); ?>#!/Cart" class="btn btn-default">
	                  		<span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
	                  		<span class="text-warning"><?php echo $qty; ?></span>
	                  		<span class="text-uppercase"><?php $qty !== 1 ? __('front_items') : __('front_item'); ?></span>
	                	</a>
	                	<a href="<?php echo pjUtil::getReferer(); ?>#!/Cart" class="btn btn-default">
	                  		<span class="text-warning"><?php echo pjUtil::formatCurrencySign($isCheckoutReady ? number_format($tpl['price_arr']['data']['total'], 2) : '0.00', $tpl['option_arr']['o_currency']); ?></span>
	                	</a>
	                	<a href="<?php echo pjUtil::getReferer(); ?>#!/Cart" class="btn btn-default"><?php __('front_cart'); ?></a>
	              	</div>
	            </div>
			</div>
			<?php
		} 
		?>
	</div>
	<br class="visible-xs-inline-block">
	<?php
	if(isset($_SESSION[$controller->defaultCategoryMenu]) && (int) $_SESSION[$controller->defaultCategoryMenu] == 0)
	{
		$isProduct = $_GET['controller'] == 'pjFrontPublic' && $_GET['action'] == 'pjActionProduct';
		$isProducts = $_GET['controller'] == 'pjFrontPublic' && $_GET['action'] == 'pjActionProducts' && isset($_GET['category_id']) && (int) $_GET['category_id'] > 0;
		if ($isProduct || $isProducts)
		{
			$category_id = NULL;
			if ($isProduct)
			{
				if (!empty($tpl['product_arr']['category_ids']))
				{
					$category_id = max($tpl['product_arr']['category_ids']);
					$_GET['category_id'] = $category_id;
				}
			} elseif ($isProducts) {
				$category_id = (int) $_GET['category_id'];
			}
		}
		?>
		<ul class="hidden-xs nav nav-pills pjScSort">
			<li class="<?php echo (!isset($_GET['category_id']) || empty($_GET['category_id'])) && !in_array($_GET['action'],
				array('pjActionCart', 'pjActionCheckout', 'pjActionPreview', 'pjActionLogin',
				'pjActionRegister', 'pjActionForgot', 'pjActionFavs', 'pjActionProfile', 'pjActionGetPaymentForm')) ? ' active' : NULL; ?>" role="presentation">
				<a href="#"><?php __('front_all'); ?></a>
			</li>
			
			<?php
			if (isset($tpl['category_arr']) && !empty($tpl['category_arr']))
			{
				if (isset($_GET['category_id']) && (int) $_GET['category_id'] > 0)
				{
					$ancestor = pjUtil::getAncestor($tpl['category_arr'], $_GET['category_id']);
				}
				
				foreach ($tpl['category_arr'] as $category)
				{
					if ($category['deep'] == 0)
					{
						?>
						<li class="dropdown<?php echo !isset($ancestor) || $ancestor != $category['data']['id'] ? NULL : ' active'; ?>" role="presentation">
							<a aria-expanded="false" role="button" href="javascript:void(0);" data-href="<?php echo pjUtil::getReferer(); ?>#!/Products/q:/category:<?php echo $category['data']['id']; ?>/page:1" data-hover="dropdown" class="scDropDownMenu dropdown-toggle">
				             	<?php echo pjSanitize::html($category['data']['name']); ?> <span class="caret"></span>
				            </a>
				            <?php pjUtil::treeMenuLayout3($tpl['category_arr'], $category); ?>
						</li>
						<?php
					}
				}
			}
			?>
		</ul>
		<select name="category_id" class="form-control visible-xs scSelectorCategoryId">
			<option value=""><?php __('front_select_category'); ?></option>
			<?php
			foreach ($tpl['category_arr'] as $category)
			{
				?><option value="<?php echo $category['data']['id']; ?>"<?php echo !isset($_GET['category_id']) || (int) $_GET['category_id'] != $category['data']['id'] ? NULL : ' selected="selected"'; ?>><?php echo str_repeat("-----", $category['deep']) . " " .pjSanitize::html($category['data']['name']); ?></option><?php
			}
			?>
		</select>
		<br>
		<?php
	} 
	?>
</div>