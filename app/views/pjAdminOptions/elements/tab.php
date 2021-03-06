<?php
if (isset($tpl['arr']))
{
	if (is_array($tpl['arr']))
	{
		$count = count($tpl['arr']);
		if ($count > 0)
		{
			?>
			<form id="frmUpdateOptions" action="<?php echo $_SERVER['PHP_SELF']; ?>?controller=pjAdminOptions&amp;action=pjActionUpdate" method="post" class="form pj-form">
				<input type="hidden" name="options_update" value="1" />
				<input type="hidden" name="tab" value="<?php echo @$_GET['tab']; ?>" />
				<input type="hidden" name="next_action" value="pjActionIndex" />
				<table class="pj-table b10" cellpadding="0" cellspacing="0" style="width: 100%">
					<thead>
						<tr>
							<th><?php __('lblOption'); ?></th>
							<th><?php __('lblValue'); ?></th>
						</tr>
					</thead>
					<tbody>

			<?php
			for ($i = 0; $i < $count; $i++)
			{
				if (!in_array($tpl['arr'][$i]['tab_id'], array(1,2,3)) ||
					(int) $tpl['arr'][$i]['is_visible'] === 0 ||
					$tpl['arr'][$i]['tab_id'] != @$_GET['tab'])
				{
					continue;
				}
				
				$rowClass = NULL;
				$rowStyle = NULL;
				if (in_array($tpl['arr'][$i]['key'], array('o_smtp_host', 'o_smtp_port', 'o_smtp_user', 'o_smtp_pass')))
				{
					$rowClass = " boxSmtp";
					$rowStyle = "display: none";
					switch ($tpl['option_arr']['o_send_email'])
					{
						case 'smtp':
							$rowStyle = NULL;
							break;
					}
				} elseif (in_array($tpl['arr'][$i]['key'], array('o_authorize_mid', 'o_authorize_tz', 'o_authorize_key', 'o_authorize_hash'))) {
					$rowClass = " boxAuthorize";
					$rowStyle = "display: none";
					switch ($tpl['option_arr']['o_allow_authorize'])
					{
						case '1':
							$rowStyle = NULL;
							break;
					}
				} elseif (in_array($tpl['arr'][$i]['key'], array('o_paypal_address'))) {
					$rowClass = " boxPaypal";
					$rowStyle = "display: none";
					switch ($tpl['option_arr']['o_allow_paypal'])
					{
						case '1':
							$rowStyle = NULL;
							break;
					}
				} elseif (in_array($tpl['arr'][$i]['key'], array('o_bank_account'))) {
					$rowClass = " boxBank";
					$rowStyle = "display: none";
					switch ($tpl['option_arr']['o_allow_bank'])
					{
						case '1':
							$rowStyle = NULL;
							break;
					}
				}
				?>
				<tr class="pj-table-row-odd<?php echo $rowClass; ?>" style="<?php echo $rowStyle; ?>">
					<td><?php __('opt_' . $tpl['arr'][$i]['key']); ?></td>
					<td>
						<?php
						switch ($tpl['arr'][$i]['type'])
						{
							case 'string':
								?><input type="text" name="value-<?php echo $tpl['arr'][$i]['type']; ?>-<?php echo $tpl['arr'][$i]['key']; ?>" class="pj-form-field w200" value="<?php echo pjSanitize::html($tpl['arr'][$i]['value']); ?>" /><?php
								break;
							case 'text':
								?><textarea name="value-<?php echo $tpl['arr'][$i]['type']; ?>-<?php echo $tpl['arr'][$i]['key']; ?>" class="pj-form-field" style="width: 400px; height: 80px;"><?php echo pjSanitize::html($tpl['arr'][$i]['value']); ?></textarea><?php
								break;
							case 'int':
								?><input type="text" name="value-<?php echo $tpl['arr'][$i]['type']; ?>-<?php echo $tpl['arr'][$i]['key']; ?>" class="pj-form-field w60<?php echo $tpl['arr'][$i]['key'] == 'o_products_per_page' ? ' positiveNumber' : ' field-int';?>" value="<?php echo pjSanitize::html($tpl['arr'][$i]['value']); ?>" /><?php
								break;
							case 'float':
								switch ($tpl['arr'][$i]['key'])
								{
									case 'o_insurance':
										?><input type="text" name="value-<?php echo $tpl['arr'][$i]['type']; ?>-<?php echo $tpl['arr'][$i]['key']; ?>" class="pj-form-field field-float w60" value="<?php echo pjSanitize::html($tpl['arr'][$i]['value']); ?>" /><?php
										$default = explode("::", $tpl['o_arr']['o_insurance_type']['value']);
										$enum = explode("|", $default[0]);
										
										$enumLabels = array();
										if (!empty($tpl['o_arr']['o_insurance_type']['label']) && strpos($tpl['o_arr']['o_insurance_type']['label'], "|") !== false)
										{
											$enumLabels = explode("|", $tpl['o_arr']['o_insurance_type']['label']);
										}
										list(,$enumLabels[0]) = explode("::", $tpl['o_arr']['o_currency']['value']);
										?>
										<select name="value-enum-o_insurance_type" class="pj-form-field">
										<?php
										foreach ($enum as $k => $el)
										{
											?><option value="<?php echo $default[0].'::'.$el; ?>"<?php echo $default[1] == $el ? ' selected="selected"' : NULL; ?>><?php echo array_key_exists($k, $enumLabels) ? pjSanitize::html($enumLabels[$k]) : pjSanitize::html($el); ?></option><?php
										}
										?>
										</select>
										<?php
										break;
									case 'o_security':
										?>
										<span class="pj-form-field-custom pj-form-field-custom-before">
											<span class="pj-form-field-before"><abbr class="pj-form-field-icon-text"><?php echo pjUtil::formatCurrencySign(NULL, $tpl['option_arr']['o_currency'], ""); ?></abbr></span>
											<input type="text" name="value-<?php echo $tpl['arr'][$i]['type']; ?>-<?php echo $tpl['arr'][$i]['key']; ?>" value="<?php echo pjSanitize::html($tpl['arr'][$i]['value']); ?>" class="pj-form-field number w60" />
										</span>
										<?php
										break;
									case 'o_tax':
										?>
										<span class="pj-form-field-custom pj-form-field-custom-before">
											<span class="pj-form-field-before"><abbr class="pj-form-field-icon-text">%</abbr></span>
											<input type="text" name="value-<?php echo $tpl['arr'][$i]['type']; ?>-<?php echo $tpl['arr'][$i]['key']; ?>" value="<?php echo pjSanitize::html($tpl['arr'][$i]['value']); ?>" class="pj-form-field field-float w60" />
										</span>
										<?php
										break;
									default:
										?><input type="text" name="value-<?php echo $tpl['arr'][$i]['type']; ?>-<?php echo $tpl['arr'][$i]['key']; ?>" class="pj-form-field field-float w60" value="<?php echo pjSanitize::html($tpl['arr'][$i]['value']); ?>" /><?php
								}
								break;
							case 'enum':
								?><select name="value-<?php echo $tpl['arr'][$i]['type']; ?>-<?php echo $tpl['arr'][$i]['key']; ?>" class="pj-form-field">
								<?php
								$default = explode("::", $tpl['arr'][$i]['value']);
								$enum = explode("|", $default[0]);
								
								$enumLabels = array();
								if (!empty($tpl['arr'][$i]['label']) && strpos($tpl['arr'][$i]['label'], "|") !== false)
								{
									$enumLabels = explode("|", $tpl['arr'][$i]['label']);
								}
								
								foreach ($enum as $k => $el)
								{
									if ($default[1] == $el)
									{
										?><option value="<?php echo $default[0].'::'.$el; ?>" selected="selected"><?php echo array_key_exists($k, $enumLabels) ? pjSanitize::html($enumLabels[$k]) : pjSanitize::html($el); ?></option><?php
									} else {
										?><option value="<?php echo $default[0].'::'.$el; ?>"><?php echo array_key_exists($k, $enumLabels) ? pjSanitize::html($enumLabels[$k]) : pjSanitize::html($el); ?></option><?php
									}
								}
								?>
								</select>
								<?php
								break;
							case 'bool':
								?><input type="checkbox" name="value-<?php echo $tpl['arr'][$i]['type']; ?>-<?php echo $tpl['arr'][$i]['key']; ?>"<?php echo $tpl['arr'][$i]['value'] == '1|0::1' ? ' checked="checked"' : NULL; ?> value="1|0::1" /><?php
								break;
						}
						?>
					</td>
				</tr>
				<?php
			}
			?>
					</tbody>
				</table>
				
				<p><input type="submit" value="<?php __('btnSave'); ?>" class="pj-button" /></p>
			</form>
			<script type="text/javascript">
			var myLabel = myLabel || {};
			myLabel.positive_number = "<?php __('lblPositiveNumber', false, true); ?>";
			</script>
			<?php
		}
	}
}
?>