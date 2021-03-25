var jQuery_1_8_2 = jQuery_1_8_2 || $.noConflict();
(function ($, undefined) {
	$(function () {
		"use strict";
	
		var $frmCreateVoucher = $('#frmCreateVoucher'),
			$frmUpdateVoucher = $('#frmUpdateVoucher'),
			voucher_id = "",
			$dialogDelete = $("#dialogDelete"),
			$dialogProductUnlink = $("#dialogProductUnlink"),
			$datepick = $(".datepick"),
			datagrid = ($.fn.datagrid !== undefined),
			validate = ($.fn.validate !== undefined),
			dialog = ($.fn.dialog !== undefined),
			chosen = ($.fn.chosen !== undefined),
			dOpts = {};
			
		if ($datepick.length > 0) {
			dOpts = $.extend(dOpts, {
				firstDay: $datepick.attr("rel"),
				dateFormat: $datepick.attr("rev")
			});
		}
		if (chosen) {
			$("#product_id").chosen();
		}
		function formatDiscount(str, obj) {
			return obj.discount_f;
		}
		function formatValid(str, obj) {
			return obj.valid_f;
		}
		
		if ($("#grid").length > 0 && datagrid) {
			
			var $grid = $("#grid").datagrid({
				buttons: [{type: "edit", url: "index.php?controller=pjAdminVouchers&action=pjActionUpdate&id={:id}"},
				          {type: "delete", url: "index.php?controller=pjAdminVouchers&action=pjActionDeleteVoucher&id={:id}"}
				          ],
				columns: [{text: myLabel.code, type: "text", sortable: true, editable: true, width: 230},
				          {text: myLabel.discount, type: "text", sortable: true, editable: true, align: "right", renderer: formatDiscount, editableWidth: 70, width: 120},
				          {text: myLabel.valid, type: "text", sortable: false, editable: false, renderer: formatValid, width: 250}
				       ],
				dataUrl: "index.php?controller=pjAdminVouchers&action=pjActionGetVoucher",
				dataType: "json",
				fields: ['code', 'discount', 'valid'],
				paginator: {
					actions: [
					   {text: myLabel.delete_selected, url: "index.php?controller=pjAdminVouchers&action=pjActionDeleteVoucherBulk", render: true, confirmation: myLabel.delete_confirmation}
					],
					gotoPage: true,
					paginate: true,
					total: true,
					rowCount: true
				},
				saveUrl: "index.php?controller=pjAdminVouchers&action=pjActionSaveVoucher&id={:id}",
				select: {
					field: "id",
					name: "record[]"
				}
			});
		}
		
		$("#content").on("focusin", ".datepick", function (e) {
			$(this).datepicker(dOpts);
		}).delegate("#valid", "change", function () {
			switch ($("option:selected", this).val()) {
				case 'fixed':
					$(".vBox").hide();
					$("#vFixed").show();
					break;
				case 'period':
					$(".vBox").hide();
					$("#vPeriod").show();
					break;
				case 'recurring':
					$(".vBox").hide();
					$("#vRecurring").show();
					break;
			}
		}).on("click", ".productRemove", function (e) {
			if (e && e.preventDefault) {
				e.preventDefault();
			}
			$(this).parent().remove();
			return false;
		}).on("click", ".productDelete", function (e) {
			if (e && e.preventDefault) {
				e.preventDefault();
			}
			$("#dialogProductUnlink").data("lnk", $(this)).dialog("open");
			return false;
		});
		
		$(document).on("click", ".btn-all", function (e) {
			if (e && e.preventDefault) {
				e.preventDefault();
			}
			$(this).addClass("pj-button-active").siblings(".pj-button").removeClass("pj-button-active");
			var content = $grid.datagrid("option", "content"),
				cache = $grid.datagrid("option", "cache");
			$.extend(cache, {
				valid: "",
				q: ""
			});
			$grid.datagrid("option", "cache", cache);
			$grid.datagrid("load", "index.php?controller=pjAdminVouchers&action=pjActionGetVoucher", "code", "DESC", content.page, content.rowCount);
			return false;
		}).on("click", ".btn-filter", function (e) {
			if (e && e.preventDefault) {
				e.preventDefault();
			}
			var $this = $(this),
				content = $grid.datagrid("option", "content"),
				cache = $grid.datagrid("option", "cache"),
				obj = {};
			$this.addClass("pj-button-active").siblings(".pj-button").removeClass("pj-button-active");
			obj.valid = "";
			obj[$this.data("column")] = $this.data("value");
			$.extend(cache, obj);
			$grid.datagrid("option", "cache", cache);
			$grid.datagrid("load", "index.php?controller=pjAdminVouchers&action=pjActionGetVoucher", "code", "DESC", content.page, content.rowCount);
			return false;
		}).on("submit", ".frm-filter", function (e) {
			if (e && e.preventDefault) {
				e.preventDefault();
			}
			var $this = $(this),
				content = $grid.datagrid("option", "content"),
				cache = $grid.datagrid("option", "cache");
			$.extend(cache, {
				q: $this.find("input[name='q']").val()
			});
			$grid.datagrid("option", "cache", cache);
			$grid.datagrid("load", "index.php?controller=pjAdminVouchers&action=pjActionGetVoucher", "id", "ASC", content.page, content.rowCount);
			return false;
		});
		
		
		if ($.fn.autocomplete !== undefined) {
			var lastXhr,
				$product = $("#product"),
				cache = {};
			
			$product.autocomplete({
				minLength: 3,
				source: function(request, response) {
					var term = request.term;
					if (term in cache) {
						response(cache[term]);
						return;
					}
					lastXhr = $.getJSON("index.php?controller=pjAdminVouchers&action=pjActionGetProducts&voucher_id=" + voucher_id, request, function(data, status, xhr) {
						cache[term] = data;
						if (xhr === lastXhr) {
							response(data);
						}
					});
				},
				select: function(event, ui) {
					$('<span class="vProduct"><input type="hidden" name="product_id[]" value="'+ui.item.value+'" /><a href="#" class="pj-icon-delete align_middle productRemove"></a> ' + ui.item.label + '<br /></span>').appendTo("#boxProducts");
					$("#boxProducts").show();
					$product.val("");
					return false;
				}
			});
		}

		if ($dialogProductUnlink.length > 0 && dialog) {
			$dialogProductUnlink.dialog({
				autoOpen: false,
				resizable: false,
				draggable: false,
				modal: true,
				buttons: {
					'Delete': function() {
						var $lnk = $(this).data("lnk");
						$.post("index.php?controller=pjAdminVouchers&action=pjActionUnlinkProduct", {
							voucher_id: $lnk.data('voucher_id'),
							product_id: $lnk.data('product_id')
						}).done(function (data) {
							$lnk.parent().remove();
						});
						$(this).dialog('close');			
					},
					'Cancel': function() {
						$(this).dialog('close');
					}
				}
			});
		}
		
		
		function validateTime()
		{
			var start_hour = parseInt($('#r_hour_from').val(), 10),
	     		start_min =  parseInt($('#r_minute_from').val(), 10),
	     		end_hour =  parseInt($('#r_hour_to').val(), 10),
	     		end_min =  parseInt($('#r_minute_to').val(), 10);
			
			if(end_hour < start_hour)
			{
				return false;
			}else if(end_hour == start_hour){
				if(end_min <= start_min)
				{
					return false;
				}else{
					return true;
				}
			}else{
				return true;
			}
		}
		function validateFixedTime()
		{
			var start_hour = parseInt($('#f_hour_from').val(), 10),
	     		start_min =  parseInt($('#f_minute_from').val(), 10),
	     		end_hour =  parseInt($('#f_hour_to').val(), 10),
	     		end_min =  parseInt($('#f_minute_to').val(), 10);
			
			if(end_hour < start_hour)
			{
				return false;
			}else if(end_hour == start_hour){
				if(end_min <= start_min)
				{
					return false;
				}else{
					return true;
				}
			}else{
				return true;
			}
		}
			
		if ($frmCreateVoucher.length > 0) {
							
			$frmCreateVoucher.validate({
				rules: {
					"code": {
						required: true,
						remote: "index.php?controller=pjAdminVouchers&action=pjActionCheckCode"
					}, 
					"f_date" :{
						required: function(){
							if($("#valid").val() == 'fixed'){
								return true;
							}else{
								return false;
							}
						}
					},
					"p_date_from" :{
						required: function(){
							if($("#valid").val() == 'period'){
								return true;
							}else{
								return false;
							}
						}
					},
					"p_date_to" :{
						required: function(){
							if($("#valid").val() == 'period'){
								return true;
							}else{
								return false;
							}
						}
					}
				},
				messages: {
					"code": {
						remote: myLabel.code_exist
					},
					"f_date" : {
						required: myLabel.field_required
					},
					"p_date_from" : {
						required: myLabel.field_required
					},
					"p_date_to" : {
						required: myLabel.field_required
					}
				},
				errorPlacement: function (error, element) {
					if(element.attr('name') == 'p_date_from' || element.attr('name') == 'p_date_to')
					{
						error.insertAfter(element.parent().parent());
					}else{
						error.insertAfter(element.parent());
					}
				},
				onkeyup: false,
				errorClass: "err",
				wrapper: "em",
				ignore: "",
				submitHandler: function(){
					if($("#valid").val() == 'period' && $("#p_date_from").val() != '' && $("#p_date_to").val() != ''){
						$.ajax({
							url: "index.php?controller=pjAdminVouchers&action=pjActionCheckDate",
							type: "post",
							dataType: 'html',
							data: {
								p_date_from: function() {
									return $frmCreateVoucher.find('input[name="p_date_from"]').val();
								},
								p_hour_from: function() {
									return $( "#p_hour_from" ).val();
								},
								p_minute_from: function() {
									return $( "#p_minute_from" ).val();
								},
								p_date_to: function() {
									return $frmCreateVoucher.find('input[name="p_date_to"]').val();
								},
								p_hour_to: function() {
									return $( "#p_hour_to" ).val();
								},
								p_minute_to: function() {
									return $( "#p_minute_to" ).val();
								}
							},
							success: function(data){
								if(data == 'true')
								{
									$frmCreateVoucher.off('submit');
									$('#validate_datetime').parent().css('display', 'none');
									$frmCreateVoucher.submit();
								}else{
									$('#validate_datetime').css('display', 'block');
									$('#validate_datetime').html(myLabel.validate_datetime);
									$('#validate_datetime').parent().css('display', 'block');
								}
							}
						});
						return false;
					}else if($("#valid").val() == 'fixed'){
						if(validateFixedTime() == true)
						{
							$frmCreateVoucher.off('submit');
							$('#validate_fixedtime').parent().css('display', 'none');
							$frmCreateVoucher.submit();
						}else{
							$('#validate_fixedtime').css('display', 'block');
							$('#validate_fixedtime').html(myLabel.validate_time);
							$('#validate_fixedtime').parent().css('display', 'block');
						}
						return false;
					}else if($("#valid").val() == 'recurring'){
						if(validateTime() == true)
						{
							$frmCreateVoucher.off('submit');
							$('#validate_time').parent().css('display', 'none');
							$frmCreateVoucher.submit();
						}else{
							$('#validate_time').css('display', 'block');
							$('#validate_time').html(myLabel.validate_time);
							$('#validate_time').parent().css('display', 'block');
						}
						return false;
					}
				}
			});
		}
		if ($frmUpdateVoucher.length > 0) {
			$frmUpdateVoucher.validate({
				rules: {
					"code": {
						required: true,
						remote: "index.php?controller=pjAdminVouchers&action=pjActionCheckCode&id=" + $frmUpdateVoucher.find("input[name='id']").val()
					},
					"f_date" :{
						required: function(){
							if($("#valid").val() == 'fixed'){
								return true;
							}else{
								return false;
							}
						}
					},
					"p_date_from" :{
						required: function(){
							if($("#valid").val() == 'period'){
								return true;
							}else{
								return false;
							}
						}
					},
					"p_date_to" :{
						required: function(){
							if($("#valid").val() == 'period'){
								return true;
							}else{
								return false;
							}
						}
					}
				},
				messages: {
					"code": {
						remote: myLabel.code_exist
					},
					"f_date" : {
						required: myLabel.field_required
					},
					"p_date_from" : {
						required: myLabel.field_required
					},
					"p_date_to" : {
						required: myLabel.field_required
					}
				},
				errorPlacement: function (error, element) {
					if(element.attr('name') == 'p_date_from' || element.attr('name') == 'p_date_to')
					{
						error.insertAfter(element.parent().parent());
					}else{
						error.insertAfter(element.parent());
					}
				},
				onkeyup: false,
				errorClass: "err",
				wrapper: "em",
				ignore: "",
				submitHandler: function(){
					if($("#valid").val() == 'period' && $("#p_date_from").val() != '' && $("#p_date_to").val() != ''){
						$.ajax({
							url: "index.php?controller=pjAdminVouchers&action=pjActionCheckDate",
							type: "post",
							dataType: 'html',
							data: {
								p_date_from: function() {
									return $frmUpdateVoucher.find('input[name="p_date_from"]').val();
								},
								p_hour_from: function() {
									return $( "#p_hour_from" ).val();
								},
								p_minute_from: function() {
									return $( "#p_minute_from" ).val();
								},
								p_date_to: function() {
									return $frmUpdateVoucher.find('input[name="p_date_to"]').val();
								},
								p_hour_to: function() {
									return $( "#p_hour_to" ).val();
								},
								p_minute_to: function() {
									return $( "#p_minute_to" ).val();
								}
							},
							success: function(data){
								if(data == 'true')
								{
									$frmUpdateVoucher.off('submit');
									$('#validate_datetime').parent().css('display', 'none');
									$frmUpdateVoucher.submit();
								}else{
									$('#validate_datetime').css('display', 'block');
									$('#validate_datetime').html(myLabel.validate_datetime);
									$('#validate_datetime').parent().css('display', 'block');
								}
							}
						});
						
						return false;
					}else if($("#valid").val() == 'fixed'){
						if(validateFixedTime() == true)
						{
							$frmUpdateVoucher.off('submit');
							$('#validate_fixedtime').parent().css('display', 'none');
							$frmUpdateVoucher.submit();
						}else{
							$('#validate_fixedtime').css('display', 'block');
							$('#validate_fixedtime').html(myLabel.validate_time);
							$('#validate_fixedtime').parent().css('display', 'block');
						}
						
						return false;
					}else if($("#valid").val() == 'recurring'){
						if(validateTime() == true)
						{
							$frmUpdateVoucher.off('submit');
							$('#validate_time').parent().css('display', 'none');
							$frmUpdateVoucher.submit();
						}else{
							$('#validate_time').css('display', 'block');
							$('#validate_time').html(myLabel.validate_time);
							$('#validate_time').parent().css('display', 'block');
						}
						
						return false;
					}
				}
			});
		}
	});
})(jQuery_1_8_2);