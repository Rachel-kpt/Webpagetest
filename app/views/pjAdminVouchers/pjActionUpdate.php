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
	$titles = __('error_titles', true);
	$bodies = __('error_bodies', true);
	$week_start = isset($tpl['option_arr']['o_week_start']) && in_array((int) $tpl['option_arr']['o_week_start'], range(0,6)) ? (int) $tpl['option_arr']['o_week_start'] : 0;
	$jqDateFormat = pjUtil::jqDateFormat($tpl['option_arr']['o_date_format']);
	?>
    <style type="text/css">
    .ui-autocomplete-loading { background: white url('<?php echo PJ_INSTALL_URL . PJ_IMG_PATH; ?>backend/ajax-loader.gif') right center no-repeat; }
    .ui-helper-hidden-accessible{position: static !important;}
    </style>
    
	<?php pjUtil::printNotice(@$titles['AV10'], @$bodies['AV10']); ?>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>?controller=pjAdminVouchers&amp;action=pjActionUpdate&amp;id=<?php echo $tpl['arr']['id']; ?>" method="post" id="frmUpdateVoucher" class="form">
		<input type="hidden" name="voucher_update" value="1" />
		<input type="hidden" name="id" value="<?php echo $tpl['arr']['id']; ?>" />
		<p>
			<label class="title"><?php __('voucher_code'); ?></label>
			<span class="inline_block"><input type="text" name="code" id="code" class="pj-form-field w100 required" value="<?php echo pjSanitize::html($tpl['arr']['code']); ?>" /></span>
		</p>
		<p>
			<label class="title"><?php __('voucher_discount'); ?></label>
			<span class="inline_block">
				<input type="text" name="discount" id="discount" class="pj-form-field w80 align_right number required" value="<?php echo (float) $tpl['arr']['discount']; ?>" />
				<select name="type" id="type" class="pj-form-field required">
					<option value=""><?php __('voucher_choose'); ?></option>
					<?php
					foreach (__('voucher_types', true) as $k => $v)
					{
						?><option value="<?php echo $k; ?>"<?php echo $k == $tpl['arr']['type'] ? ' selected="selected"' : NULL; ?>><?php echo $k == 'amount' ? $tpl['option_arr']['o_currency'] : $v; ?></option><?php
					}
					?>
				</select>
			</span>
		</p>
		<div class="p" style="overflow: visible">
			<label class="title"><?php __('voucher_products'); ?></label>
			<select id="product_id" name="product_id[]" class="pj-form-field w400" multiple="multiple" data-placeholder="-- <?php __('voucher_choose'); ?> --">
				<?php
				foreach ($tpl['product_arr'] as $product)
				{
					?><option value="<?php echo $product['id']; ?>"<?php echo in_array($product['id'], $tpl['vp_arr']) ? ' selected="selected"' : 'none';?>><?php echo pjSanitize::html($product['name'] . " (" . $product['sku'] . ")"); ?></option><?php
				}
				?>
			</select>
		</div>
		<?php
		$apply_arr = __('apply_arr', true); 
		?>
		<p>
			<label class="title"><?php __('lblApplyDiscountFor'); ?></label>
			<span class="inline_block">
				<label class="block float_left t5 r20"><input type="radio" id="apply_each" name="apply" value="each"<?php echo $tpl['arr']['apply'] == 'each' ? ' checked="checked"' : NULL; ?> class="block float_left r5"/> <?php echo $apply_arr['each'];?></label>
				<label class="block float_left t5"><input type="radio" id="apply_total" name="apply" value="total"<?php echo $tpl['arr']['apply'] == 'total' ? ' checked="checked"' : NULL; ?> class="block float_left r5"/> <?php echo $apply_arr['total'];?></label>
			</span>
		</p>
		<p>
			<label class="title"><?php __('voucher_valid'); ?></label>
			<span class="inline_block">
				<select name="valid" id="valid" class="pj-form-field required">
					<option value=""><?php __('voucher_choose'); ?></option>
					<?php
					foreach (__('voucher_valids', true) as $k => $v)
					{
						?><option value="<?php echo $k; ?>"<?php echo $k == $tpl['arr']['valid'] ? ' selected="selected"' : NULL; ?>><?php echo $v; ?></option><?php
					}
					?>
				</select>
			</span>
		</p>
		<?php
		$date_from = $date_to = $hour_from = $hour_to = $minute_from = $minute_to = NULL;
		if (!empty($tpl['arr']['date_from']))
		{
			$date_from = date($tpl['option_arr']['o_date_format'], strtotime($tpl['arr']['date_from']));
		}
		if (!empty($tpl['arr']['date_to']))
		{
			$date_to = date($tpl['option_arr']['o_date_format'], strtotime($tpl['arr']['date_to']));
		}
		if (!empty($tpl['arr']['time_from']) && strpos($tpl['arr']['time_from'], ":") !== false)
		{
			list($hour_from, $minute_from,) = explode(":", $tpl['arr']['time_from']);
		}
		if (!empty($tpl['arr']['time_to']) && strpos($tpl['arr']['time_to'], ":") !== false)
		{
			list($hour_to, $minute_to,) = explode(":", $tpl['arr']['time_to']);
		}
		?>
		<div id="vFixed" class="vBox" style="display: <?php echo $tpl['arr']['valid'] == 'fixed' ? 'block' : 'none'; ?>">
			<p>
				<label class="title"><?php __('voucher_date'); ?></label>
				<span class="float_left pj-form-field-custom pj-form-field-custom-after">
					<input type="text" name="f_date" class="pj-form-field pointer w80 datepick" readonly="readonly" rel="<?php echo $week_start; ?>" rev="<?php echo $jqDateFormat; ?>" value="<?php echo $date_from; ?>" />
					<span class="pj-form-field-after"><abbr class="pj-form-field-icon-date"></abbr></span>
				</span>
			</p>
			<p>
				<label class="title"><?php __('voucher_time_from'); ?></label>
				<span class="inline_block">
				<?php echo pjTime::factory()
					->prop('selected', $hour_from)
					->attr('name', 'f_hour_from')
					->attr('id', 'f_hour_from')
					->attr('class', 'pj-form-field')
					->hour(); ?>
				<?php echo pjTime::factory()
					->prop('selected', $minute_from)
					->prop('step', 5)
					->attr('name', 'f_minute_from')
					->attr('id', 'f_minute_from')
					->attr('class', 'pj-form-field')
					->minute(); ?>
				</span>
			</p>
			<p>
				<label class="title"><?php __('voucher_time_to'); ?></label>
				<span class="inline_block">
				<?php echo pjTime::factory()
					->prop('selected', $hour_to)
					->attr('name', 'f_hour_to')
					->attr('id', 'f_hour_to')
					->attr('class', 'pj-form-field')
					->hour(); ?>
				<?php echo pjTime::factory()
					->prop('selected', $minute_to)
					->prop('step', 5)
					->attr('name', 'f_minute_to')
					->attr('id', 'f_minute_to')
					->attr('class', 'pj-form-field')
					->minute(); ?>
				</span>
				<em style="display: none;"><label id="validate_fixedtime" class="err"><?php __('lblValidateTime'); ?></label></em>
			</p>
		</div>
		<div id="vPeriod" class="vBox" style="display: <?php echo $tpl['arr']['valid'] == 'period' ? 'block' : 'none'; ?>">
			<p>
				<label class="title"><?php __('voucher_date_from'); ?></label>
				<span class="inline_block">
					<span class="float_left pj-form-field-custom pj-form-field-custom-after">
						<input type="text" name="p_date_from" class="pj-form-field pointer w80 datepick" readonly="readonly" rel="<?php echo $week_start; ?>" rev="<?php echo $jqDateFormat; ?>" value="<?php echo $date_from; ?>" />
						<span class="pj-form-field-after"><abbr class="pj-form-field-icon-date"></abbr></span>
					</span>
					<span class="float_left l5">
					<?php echo pjTime::factory()
						->prop('selected', $hour_from)
						->attr('name', 'p_hour_from')
						->attr('id', 'p_hour_from')
						->attr('class', 'pj-form-field')
						->hour(); ?>
					<?php echo pjTime::factory()
						->prop('selected', $minute_from)
						->prop('step', 5)
						->attr('name', 'p_minute_from')
						->attr('id', 'p_minute_from')
						->attr('class', 'pj-form-field')
						->minute(); ?>
					</span>
				</span>
			</p>
			<p>
				<label class="title"><?php __('voucher_date_to'); ?></label>
				<span class="inline_block">
					<span class="float_left pj-form-field-custom pj-form-field-custom-after">
						<input type="text" name="p_date_to" class="pj-form-field pointer w80 datepick" readonly="readonly" rel="<?php echo $week_start; ?>" rev="<?php echo $jqDateFormat; ?>" value="<?php echo $date_to; ?>" />
						<span class="pj-form-field-after"><abbr class="pj-form-field-icon-date"></abbr></span>
					</span>
					<span class="float_left l5">
					<?php echo pjTime::factory()
						->prop('selected', $hour_to)
						->attr('name', 'p_hour_to')
						->attr('id', 'p_hour_to')
						->attr('class', 'pj-form-field')
						->hour(); ?>
					<?php echo pjTime::factory()
						->prop('selected', $minute_to)
						->prop('step', 5)
						->attr('name', 'p_minute_to')
						->attr('id', 'p_minute_to')
						->attr('class', 'pj-form-field')
						->minute(); ?>
					</span>
				</span>
				<em style="display: none;"><label id="validate_datetime" class="err"><?php __('lblValidateVoucherDateTime'); ?></label></em>
			</p>
		</div>
		<?php
		extract(__('daynames', true));
		switch ((int) $tpl['option_arr']['o_week_start'])
		{
			case 0:
				$daynames = compact('sunday', 'monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday');
				break;
			case 1:
				$daynames = compact('monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday', 'sunday');
				break;
			case 2:
				$daynames = compact('tuesday', 'wednesday', 'thursday', 'friday', 'saturday', 'sunday', 'monday');
				break;
			case 3:
				$daynames = compact('wednesday', 'thursday', 'friday', 'saturday', 'sunday', 'monday', 'tuesday');
				break;
			case 4:
				$daynames = compact('thursday', 'friday', 'saturday', 'sunday', 'monday', 'tuesday', 'wednesday');
				break;
			case 5:
				$daynames = compact('friday', 'saturday', 'sunday', 'monday', 'tuesday', 'wednesday', 'thursday');
				break;
			case 6:
				$daynames = compact('saturday', 'sunday', 'monday', 'tuesday', 'wednesday', 'thursday', 'friday');
				break;
		}
		//$daynames = compact('monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday', 'sunday');
		?>
		<div id="vRecurring" class="vBox" style="display: <?php echo $tpl['arr']['valid'] == 'recurring' ? 'block' : 'none'; ?>">
			<p>
				<label class="title"><?php __('voucher_every'); ?></label>
				<select name="r_every" id="r_every" class="pj-form-field">
					<option value=""><?php __('voucher_choose'); ?></option>
					<?php
					foreach ($daynames as $k => $v)
					{
						?><option value="<?php echo $k; ?>"<?php echo $k == $tpl['arr']['every'] ? ' selected="selected"' : NULL; ?>><?php echo $v; ?></option><?php
					}
					?>
				</select>
			</p>
			<p>
				<label class="title"><?php __('voucher_time_from'); ?></label>
				<span class="inline_block">
				<?php echo pjTime::factory()
					->prop('selected', $hour_from)
					->attr('name', 'r_hour_from')
					->attr('id', 'r_hour_from')
					->attr('class', 'pj-form-field')
					->hour(); ?>
				<?php echo pjTime::factory()
					->prop('selected', $minute_from)
					->prop('step', 5)
					->attr('name', 'r_minute_from')
					->attr('id', 'r_minute_from')
					->attr('class', 'pj-form-field')
					->minute(); ?>
				</span>
			</p>
			<p>
				<label class="title"><?php __('voucher_time_to'); ?></label>
				<span class="inline_block">
				<?php echo pjTime::factory()
					->prop('selected', $hour_to)
					->attr('name', 'r_hour_to')
					->attr('id', 'r_hour_to')
					->attr('class', 'pj-form-field')
					->hour(); ?>
				<?php echo pjTime::factory()
					->prop('selected', $minute_to)
					->prop('step', 5)
					->attr('name', 'r_minute_to')
					->attr('id', 'r_minute_to')
					->attr('class', 'pj-form-field')
					->minute(); ?>
				</span>
				<em style="display: none;"><label id="validate_time" class="err"><?php __('lblValidateTime'); ?></label></em>
			</p>
		</div>
		<p>
			<label class="title">&nbsp;</label>
			<input type="submit" value="<?php __('btnSave'); ?>" class="pj-button" />
			<input type="button" value="<?php __('btnCancel'); ?>" class="pj-button" onclick="window.location.href='<?php echo PJ_INSTALL_URL; ?>index.php?controller=pjAdminVouchers&action=pjActionIndex';" />
		</p>
	</form>
	
	<div id="dialogProductUnlink" title="<?php echo pjSanitize::html(__('voucher_p_del_title', true)); ?>" style="display: none"><?php __('voucher_p_del_body'); ?></div>
	<?php
}
?>
<script type="text/javascript">
var myLabel = myLabel || {};
myLabel.choose = "-- <?php __('voucher_choose'); ?> --";
myLabel.same_code = "<?php __('lblSameVoucherCode'); ?>";
myLabel.validate_datetime = "<?php __('lblValidateVoucherDateTime', false, true); ?>";
myLabel.validate_time = "<?php __('lblValidateTime', false, true); ?>";
</script>