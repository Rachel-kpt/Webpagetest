<?php
if (isset($tpl['status']))
{
	$status = __('status', true);
	switch ($tpl['status'])
	{
		case 2:
			pjUtil::printNotice(NULL, $status[2]);
			break;
	}
} else {
	?>
	<div class="dashboard_header">
		<div class="dashboard_header_item">
			<div class="dashboard_info">
				<abbr><?php echo (int) @$tpl['info_arr'][0]['orders']; ?></abbr>
				<?php (int) @$tpl['info_arr'][0]['orders'] !== 1 ? __('dashboard_orders_today') : __('dashboard_order_today'); ?>
			</div>
		</div>
		<div class="dashboard_header_item">
			<div class="dashboard_info">
				<abbr><?php echo (int) @$tpl['info_arr'][0]['products']; ?></abbr>
				<?php (int) @$tpl['info_arr'][0]['products'] !== 1 ? __('lblProductsOrderedToday') : __('lblProductOrderedToday'); ?>
			</div>
		</div>
		<div class="dashboard_header_item dashboard_header_item_last">
			<div class="dashboard_info">
				<abbr><?php echo (int) @$tpl['cnt_orders']; ?> / <?php echo pjUtil::formatCurrencySign(number_format($tpl['amount'], 0), $tpl['option_arr']['o_currency'])?></abbr>
				<br/>
				<?php (int) @$tpl['cnt_orders'] !== 1 ? __('lblTotalOrders') : __('lblTotalOrder'); ?>
			</div>
		</div>
	</div>
	
	<div class="dashboard_box">
		<div class="dashboard_top">
			<div class="dashboard_column_top"><?php __('dashboard_last_orders'); ?> (<a href="<?php echo $_SERVER['PHP_SELF']; ?>?controller=pjAdminOrders&amp;action=pjActionIndex"><?php __('lblViewAll');?></a>)</div>
			<div class="dashboard_column_top"><?php __('lblDashProductsOrderedToday'); ?></div>
			<div class="dashboard_column_top dashboard_column_top_last"><?php __('lblSummary'); ?></div>
		</div>
		<div class="dashboard_middle">
			<div class="dashboard_column">
				<?php
				if(!empty($tpl['order_arr']))
				{
					$order_statuses = __('order_statuses', true);
					$payment_methods = __('payment_methods', true);
					foreach ($tpl['order_arr'] as $k => $order)
					{
						?>
						<div class="dashboard_item">
							<div class="bold fs16">
								<a href="<?php echo $_SERVER['PHP_SELF']; ?>?controller=pjAdminOrders&amp;action=pjActionUpdate&amp;id=<?php echo $order['id']; ?>"><?php echo $order['uuid']; ?></a>
							</div>
							<div><?php echo mb_strtolower(__('dashboard_status', true), 'UTF-8');?>: <strong class="bold"><?php echo $order_statuses[$order['status']]; ?></strong></div>
							<div><?php echo mb_strtolower(__('dashboard_date_time', true), 'UTF-8');?>: <?php echo date($tpl['option_arr']['o_date_format'] . ', ' . $tpl['option_arr']['o_time_format'], strtotime($order['created'])); ?></div>
							<div><?php echo mb_strtolower(__('dashboard_client', true), 'UTF-8');?>: <a href="<?php echo $_SERVER['PHP_SELF']; ?>?controller=pjAdminClients&amp;action=pjActionUpdate&amp;id=<?php echo $order['client_id']; ?>"><?php echo pjSanitize::html($order['client_name']); ?></a></div>
							<div><?php echo mb_strtolower(__('dashboard_total', true), 'UTF-8');?>: <?php echo pjUtil::formatCurrencySign($order['total'], $tpl['option_arr']['o_currency']); ?></div>
							<div><?php echo mb_strtolower(__('dashboard_payment', true), 'UTF-8');?>: <?php echo $payment_methods[$order['payment_method']]; ?></div>
						</div>
						<?php
					}
				}else{
					?>
					<div class="dashboard_item">
						<div><?php __('lblDashNoOrdersFound');?></div>
					</div>
					<?php
				}
				?>
			</div>
			<div class="dashboard_column">
				<?php
				if(!empty($tpl['product_arr']))
				{
					foreach ($tpl['product_arr'] as $product_id => $orders)
					{
						$order_arr = array();
						foreach($orders as $k => $v)
						{
							$order_arr[] = '<a href="'.$_SERVER['PHP_SELF'].'?controller=pjAdminOrders&amp;action=pjActionUpdate&amp;id='.$v['order_id'].'">'.$v['uuid'].'</a>';
						}
						?>
						<div class="dashboard_item">
							<div class="fs14 bold">
								<?php echo pjSanitize::html($orders[0]['name']); ?>
							</div>
							<div>
								<?php __('lblDashOrders');?>: <?php echo join('; ', $order_arr);?>
							</div>
						</div>
						<?php
					}
				}else{
					?>
					<div class="dashboard_item">
						<div><?php __('lblDashNoProductsOrderedToday');?></div>
					</div>
					<?php
				}
				?>
			</div>
			<div class="dashboard_column dashboard_brief dashboard_column_last">
				<?php
				if($tpl['cnt_new_orders'] > 0)
				{
					?><a href="<?php echo $_SERVER['PHP_SELF']; ?>?controller=pjAdminOrders&amp;action=pjActionIndex&amp;status=new"><?php echo $tpl['cnt_new_orders'];?>&nbsp;<?php echo $tpl['cnt_new_orders'] == 1 ? __('lblNewOrder') : __('lblNewOrders');?></a><?php
				}else{
					?><label><?php echo $tpl['cnt_new_orders'];?>&nbsp;<?php echo __('lblNewOrders');?></label><?php
				}
				if($tpl['cnt_pending_orders'] > 0)
				{
					?><a href="<?php echo $_SERVER['PHP_SELF']; ?>?controller=pjAdminOrders&amp;action=pjActionIndex&amp;status=pending"><?php echo $tpl['cnt_pending_orders'];?>&nbsp;<?php echo $tpl['cnt_pending_orders'] == 1 ? __('lblPendingOrder') : __('lblPendingOrders');?></a><?php
				}else{
					?><label><?php echo $tpl['cnt_pending_orders'];?>&nbsp;<?php echo __('lblPendingOrders');?></label><?php
				}
				?>
				<label class="empty">&nbsp;</label>
				<a href="<?php echo $_SERVER['PHP_SELF']; ?>?controller=pjAdminProducts&amp;action=pjActionIndex"><?php echo $tpl['cnt_products'];?>&nbsp;<?php echo $tpl['cnt_products'] == 1 ? __('dashboard_product') : __('dashboard_products'); ?> / <?php echo $tpl['cnt_active_products'];?>&nbsp;<?php echo $tpl['cnt_active_products'] == 1 ? __('dashboard_active_product') : __('dashboard_active_products'); ?></a>
				<a href="<?php echo $_SERVER['PHP_SELF']; ?>?controller=pjAdminProducts&amp;action=pjActionIndex&is_out=yes"><?php echo $tpl['cnt_out_stock'];?>&nbsp;<?php echo $tpl['cnt_out_stock'] == 1 ? __('dashboard_product_out_of_stock') : __('dashboard_products_out_of_stock'); ?></a>
				<a href="<?php echo $_SERVER['PHP_SELF']; ?>?controller=pjAdminProducts&amp;action=pjActionIndex&is_active_out=yes"><?php echo $tpl['cnt_active_out_stock'];?>&nbsp;<?php echo $tpl['cnt_active_out_stock'] == 1 ? __('dashboard_active_product_out_of_stock') : __('dashboard_active_products_out_of_stock'); ?></a>
				<a href="<?php echo $_SERVER['PHP_SELF']; ?>?controller=pjAdminProducts&amp;action=pjActionStock"><?php __('lblViewStock');?></a>
				<label class="empty">&nbsp;</label>
				<label><?php __('dashboard_active_vouchers');?>:</label>
				<?php
				if(!empty($tpl['voucher_arr']))
				{
					foreach($tpl['voucher_arr'] as $v)
					{
						?><label class="bold"><a href="<?php echo $_SERVER['PHP_SELF']; ?>?controller=pjAdminVouchers&action=pjActionUpdate&id=<?php echo $v['id']?>"><?php echo $v['code']?> - <?php echo $v['type'] == 'percent' ? $v['discount'] . '%' : pjUtil::formatCurrencySign($v['discount'], $tpl['option_arr']['o_currency']) ;?></a></label><?php
					}
				}else{
					?><label><b><?php __('dashboard_none');?></b></label><?php
				} 
				?>
				<label class="empty">&nbsp;</label>
				<a href="<?php echo $_SERVER['PHP_SELF']; ?>?controller=pjAdminCategories&amp;action=pjActionIndex"><?php echo $tpl['cnt_categories'];?>&nbsp;<?php echo $tpl['cnt_categories'] == 1 ? __('dashboard_category_in_use') : __('dashboard_categories_in_use'); ?></a>
				<label class="empty">&nbsp;</label>
			</div>
		</div>
		<div class="dashboard_bottom"></div>
	</div>
	<?php
	$months = __('months', true);
	$day_names = __('days', true);
	?>
	<div class="clear_left t20 overflow">
		<div class="float_left black pt15">
			<span class="gray"><?php echo ucfirst(__('dashboard_last_login', true)); ?>:</span>
			<?php
			list($month_index, $other) = explode("_", date("n_d, Y H:i", strtotime($_SESSION[$controller->defaultUser]['last_login'])));
			printf("%s %s", $months[$month_index], $other);
			?>
		</div>
		<div class="float_right overflow">
		<?php
		list($hour, $day, $month_index, $other) = explode("_", date("H:i_w_n_d, Y"));
		?>
			<div class="dashboard_date">
				<abbr><?php echo $day_names[$day]; ?></abbr>
				<?php printf("%s %s", $months[$month_index], $other); ?>
			</div>
			<div class="dashboard_hour"><?php echo $hour; ?></div>
		</div>
	</div>
	<?php
}
?>