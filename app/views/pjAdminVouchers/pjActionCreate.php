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
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>?controller=pjAdminVouchers&amp;action=pjActionCreate" method="post" id="frmCreateVoucher" class="form">
		<input type="hidden" name="voucher_create" value="1" />
		<p>
			<label class="title"><?php __('voucher_code'); ?></label>
			<span class="inline_block"><input type="text" name="code" id="code" class="pj-form-field w100 required" /></span>
		</p>
		<p>
			<label class="title"><?php __('voucher_discount'); ?></label>
			<span class="inline_block">
				<input type="text" name="discount" id="discount" class="pj-form-field w80 align_right number required" />
				<select name="type" id="type" class="pj-form-field">
					<?php
					foreach (__('voucher_types', true) as $k => $v)
					{
						?><option value="<?php echo $k; ?>"><?php echo $k == 'amount' ? $tpl['option_arr']['o_currency'] : $v; ?></option><?php
					}
					?>
				</select>
			</span>
		</p>
		<div class="p" style="overflow: visible; position: relative;">
			<label class="title"><?php __('voucher_products'); ?></label>
			<select id="product_id" name="product_id[]" class="pj-form-field w400" multiple="multiple" data-placeholder="-- <?php __('voucher_choose'); ?> --">
				<?php
				foreach ($tpl['product_arr'] as $product)
				{
					?><option value="<?php echo $product['id']; ?>"><?php echo pjSanitize::html($product['name'] . " (" . $product['sku'] . ")"); ?></option><?php
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
				<label class="block float_left t5 r20"><input type="radio" id="apply_each" name="apply" value="each" checked="checked" class="block float_left r5"/> <?php echo $apply_arr['each'];?></label>
				<label class="block float_left t5"><input type="radio" id="apply_total" name="apply" value="total" class="block float_left r5"/> <?php echo $apply_arr['total'];?></label>
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
						?><option value="<?php echo $k; ?>"><?php echo $v; ?></option><?php
					}
					?>
				</select>
			</span>
		</p>
		<div id="vFixed" class="vBox" style="display: none">
			<p>
				<label class="title"><?php __('voucher_date'); ?></label>
				<span class="pj-form-field-custom pj-form-field-custom-after">
					<input type="text" id="f_date" name="f_date" class="pj-form-field pointer w80 datepick" readonly="readonly" rel="<?php echo $week_start; ?>" rev="<?php echo $jqDateFormat; ?>" />
					<span class="pj-form-field-after"><abbr class="pj-form-field-icon-date"></abbr></span>
				</span>
			</p>
			<p>
				<label class="title"><?php __('voucher_time_from'); ?></label>
				<span class="inline_block">
				<?php echo pjTime::factory()
					->attr('name', 'f_hour_from')
					->attr('id', 'f_hour_from')
					->attr('class', 'pj-form-field')
					->hour(); ?>
				<?php echo pjTime::factory()
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
					->attr('name', 'f_hour_to')
					->attr('id', 'f_hour_to')
					->attr('class', 'pj-form-field')
					->hour(); ?>
				<?php echo pjTime::factory()
					->prop('step', 5)
					->attr('name', 'f_minute_to')
					->attr('id', 'f_minute_to')
					->attr('class', 'pj-form-field')
					->minute(); ?>
				</span>
				<em style="display: none;"><label id="validate_fixedtime" class="err"><?php __('lblValidateTime'); ?></label></em>
			</p>
		</div>
		<div id="vPeriod" class="vBox" style="display: none">
			<p>
				<label class="title"><?php __('voucher_date_from'); ?></label>
				<span class="inline_block">
					<span class="float_left pj-form-field-custom pj-form-field-custom-after">
						<input type="text" id="p_date_from" name="p_date_from" class="pj-form-field pointer w80 datepick" readonly="readonly" rel="<?php echo $week_start; ?>" rev="<?php echo $jqDateFormat; ?>" />
						<span class="pj-form-field-after"><abbr class="pj-form-field-icon-date"></abbr></span>
					</span>
					<span class="float_left l5">
					<?php echo pjTime::factory()
						->attr('name', 'p_hour_from')
						->attr('id', 'p_hour_from')
						->attr('class', 'pj-form-field')
						->hour(); ?>
					<?php echo pjTime::factory()
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
						<input type="text" id="p_date_to" name="p_date_to" class="pj-form-field pointer w80 datepick" readonly="readonly" rel="<?php echo $week_start; ?>" rev="<?php echo $jqDateFormat; ?>" />
						<span class="pj-form-field-after"><abbr class="pj-form-field-icon-date"></abbr></span>
					</span>
					<span class="float_left l5">
					<?php echo pjTime::factory()
						->attr('name', 'p_hour_to')
						->attr('id', 'p_hour_to')
						->attr('class', 'pj-form-field')
						->hour(); ?>
					<?php echo pjTime::factory()
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
		<div id="vRecurring" class="vBox" style="display: none">
			<p>
				<label class="title"><?php __('voucher_every'); ?></label>
				<select name="r_every" id="r_every" class="pj-form-field">
					<option value=""><?php __('voucher_choose'); ?></option>
					<?php
					foreach ($daynames as $k => $v)
					{
						?><option value="<?php echo $k; ?>"><?php echo $v; ?></option><?php
					}
					?>
				</select>
			</p>
			<p>
				<label class="title"><?php __('voucher_time_from'); ?></label>
				<span class="inline_block">
				<?php echo pjTime::factory()
					->attr('name', 'r_hour_from')
					->attr('id', 'r_hour_from')
					->attr('class', 'pj-form-field')
					->hour(); ?>
				<?php echo pjTime::factory()
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
					->attr('name', 'r_hour_to')
					->attr('id', 'r_hour_to')
					->attr('class', 'pj-form-field')
					->hour(); ?>
				<?php echo pjTime::factory()
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