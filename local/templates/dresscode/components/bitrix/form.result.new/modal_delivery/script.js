$(function(){

	var $modalForms = $(".webformModal");

	var webFormExit = function(event){
		$(".webFormMessage").hide();
		return event.preventDefault();
	}

	var openWebFormModal = function(event){

		var $thisForm = $("#webFormDwModal_" + $(this).data("id"));
		var $thisFormCn = $thisForm.find(".webformModalContainer");		
		
		$thisForm.addClass("visible");

		if($thisFormCn.height() < $(window).height()){
			$thisForm.addClass("small");
		}

		return event.preventDefault();

	}

	var closeWebFormModal = function(event){
		$(this).parents(".webformModal").removeClass("visible");
		return event.preventDefault();
	};

	var checkFormsHeight = function(event){

		//get window height now
		var windowHeightNow = $(this).height();

		//get web forms
		$modalForms.each(function(i, nextForm){

			//vars
			var $nextForm = $(nextForm);
			var $nextFormCn = $nextForm.find(".webformModalContainer");

			//class change
			if($nextFormCn.height() < windowHeightNow){
				$nextForm.addClass("small");
			}else{
				$nextForm.removeClass("small");
			}

		});
	}

	$(document).on("click", ".webFormModalHeadingExit", closeWebFormModal);
	$(document).on("click", ".openWebFormModal", openWebFormModal);
	$(document).on("click", ".webFormMessageExit", webFormExit);

	if($modalForms.length > 0){
		$(window).on("resize", checkFormsHeight);	
	}

});