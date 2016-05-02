SmartAjax_load('/assets/js/smartajax/', function(){
	SmartAjax.isDebug = false;
	SmartAjax.setOptions({
		cache: false,
		reload: false,
		containers:
		[
			{selector: '#content'}
		],

		before: function()
		{
			$('#ajax-loader').show();

			SmartAjax.proceed();
		},
		success: function()
		{
			$('#site_middle').slideUp(500, SmartAjax.proceed);
		},
		done: function()
		{
			$('#ajax-loader').hide();
			$('#site_middle').slideDown(500);
		}
	});

	SmartAjax.bind('a');
	SmartAjax.bindForms('form');
}, true);
