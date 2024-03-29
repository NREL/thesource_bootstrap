$(window).on('load', function () {

	$("input:text").on('input', function () {
		$(this).next('.label-important:first').remove();
		return false;
	});

	$("textarea").on('input', function () {
		$(this).next('.label-important:first').remove();
		return false;
	});

	$("select").change(function () {
		if($(this).val() !== ''){
			$(this).next('.label-important:first').remove();
			return false;
		};
	});

	$(":checkbox").change(function(){
		$(this).parents('.controls').next('.label-important:first').remove();
		return false;
	});

	$(":radio").change(function(){
		$(this).parents('.controls').next('.label-important:first').remove();
		return false;
	});

	$("input.datetime[type='text']").change(function () {
		$(this).next('.label-important:first').remove();
		return false;
	});

	$("[type='submit']").off('click').on('click', function () {
		var f_element = $(this);
		var bid = f_element.attr("id");
		var toRemove = 'btn_';
		var skid = bid.replace(toRemove, '');
		
		if(f_element.hasClass('ou-find-form-no')){
            $(".ou-find-form-yes").hide();
            $('#buttontype input').val("no");
            $('#url input').val(window.location.href);
        }
        else if(f_element.hasClass('ou-find-form-yes')){
            $(".ou-find-form-no").hide();
            $('#buttontype input').val("yes");
            $('#url input').val(window.location.href);
        }
        else if(f_element.hasClass('ldp-nrel-feedback-form')){
            $('#feedbackurl input').val(window.location.href);
        }
		
		var form_data = $("#forms_" + skid).serialize();

		$("#form_" + skid).off('submit').on('submit', function (e) {
			e.preventDefault();
			$("#btn_"+skid).hide();

			$("#form_" + skid).append("<span id='spin'> <img src='/_resources/ldp/loading.gif' height='50' width='50'></img> Submitting, Please Wait .. </span>");

			// disable submit while waiting for server response, to prevent multiple submissions
			$("#btn_"+skid).hide();
			$("#clr_"+skid).hide();

			$("#form_" + skid + ".label-important").remove();

			if ($("#form_" + skid + " #hp"+ skid ).val().length > 0) {

			} else {

				$.ajax({
					type: "POST",
					cache: false,
					url: "/_resources/php/ldp/forms.php",
					data: $(this).serialize(),
					success: function (data) {
						var resultObj = jQuery.parseJSON(data);
						var errC = /[faultcode]+\s:/;
						var faultCode = errC.exec(resultObj.message);
						if (resultObj.active == false) {
							if (! this.faultCode) {
								$("#status_" + skid).addClass("alert alert-error");
								var dataSet = resultObj.message + "<br/>";
								$.each(resultObj.data, function (i, data) {
									var d = data.message;
									highlightID = "#id_" + data.name;
									errorHTML = '<span style="margin-left:8px; color: #FF0000;" class="label label-important" id="' + data.name + 'Error">' + data.message + '<br/></span>';
									if ($('#' + data.name + 'Error').length == 0) {
										$(highlightID).after(errorHTML);
									}
								});
								$("#status_" + skid).html(dataSet);

								// re-enable submit button, so that user may fix errors and try again

								$("#btn_"+skid).show();
								$("#clr_"+skid).show();
								$("#spin").remove();
							} else {
								var dataSet = resultObj.message + " " + resultObj.data[0].message;
								$("#status_" + skid).addClass("alert alert-error");
								$("#status_" + skid).html(dataSet);
								$(document).scrollTop($("#status_" + skid).offset().top);

							}
						} else {
							if(typeof redirectPath != 'undefined' && redirectPath != ''){ //check if there is a url to redirect to when the form is submitted
								window.location.href = redirectPath;
							}else{
								$("#status_" + skid).removeClass("alert alert-error");
								$("#status_" + skid).addClass("alert alert-success");	

								$("#form_" + skid).remove();
							
								if(resultObj.message == "find_response_good"){
                                    $("#status_" + skid).hide();
                                    $(".find-prompt").hide();
                                    $('#feedback-secondary').fadeIn().removeClass('hide');
                                }
                                else{
                                    $("#status_" + skid).html(resultObj.message);
                                }
								
								$(document).scrollTop($("#status_" + skid).offset().top);
							}
						}
					},
					error: function (data) {
					}
				});
				return false;
			}
		});
	});

	//	date/time picker configs

	if(typeof OUC !== "undefined" && typeof OUC.dateTimePickers !== "undefined"){

		$.datetimepicker.setLocale('en');

		$(OUC.dateTimePickers).each(function(index, options){

			if(options.format == "datetime"){
				$(options.id).datetimepicker({
										value: options.default,
										format: 'm/d/y g:i A',
										formatTime: 'g:i A',
										step: 15
									});
			}
			else if(options.format == "date"){
				$(options.id).datetimepicker({
										value: options.default,
										timepicker:false,
										format:'m/d/Y',
										step: 15
									});
			}
			else if(options.format == "time"){
				$(options.id).datetimepicker({
										value: options.default,
										datepicker:false,
										format:'g:i A',
										formatTime: 'g:i A',
										step: 15
									});
			}
		});
	}

});
