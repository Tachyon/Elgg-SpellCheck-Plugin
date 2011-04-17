$(document).ready(function(){
	$(".spellcheck-button").click(function(e){
			e.preventDefault();
			$(".loading").show();
			var target = $(this).attr('href');
			var id = $(target).attr('id');
			if(typeof tinyMCE !== 'undefined'){
				if (tinyMCE.get(id)) {
					tinyMCE.execCommand('mceRemoveControl', false, id);
					tinyMCE.execCommand('mceAddControl', false, id);
				} 
			}

			$("#"+id).spellchecker({
				url: "<?php echo $vars['url']; ?>spellcheck/",
				lang: "en",
				engine: "google",
				suggestBoxPosition: "above"
			})
			.spellchecker("check", function(result){

				// spell checker has finished checking words
				$(".loading").hide();

				// if result is true then there are no badly spelt words
				if (result) {
					alert('There are no incorrectly spelt words.');
				}
			});			
		});
	});
