$(document).ready(function(){ 

	$('.datepicker').datepicker({
		format:'MM/DD/YYYY',
		icons: {
			time: "fa fa-clock-o",
			date: "fa fa-calendar",
			up: "fa fa-chevron-up",
			down: "fa fa-chevron-down",
			previous: 'fa fa-chevron-left',
			next: 'fa fa-chevron-right',
			today: 'fa fa-screenshot',
			clear: 'fa fa-trash',
			close: 'fa fa-remove'
		}
	});
	// $('.datepicker').datepicker({
	// 	format: 'mm/dd/yyyy',
	// 	startDate: '-3d'
	// });


	$('#employeeregister').validate({ 
		rules : {

			firstname:{required:true},
			lastname:{required:true},
			initial:{required:true}

		},
		messages:
		{
			firstname:{required:"Enter The First Name"},
			lastname:{required:"Enter The Last Name"},
			initial:{required:"Enter The Initial"}
		}
	});

	$("#btnSave").click(function() {
	
		var empObj={};
		empObj['firstname']= $("#empfirstname").val();
		 empObj['lastname' ]= $("#emplastname").val();
		 empobj['initial'] = $("#empinitial").val();

		if ($("#employeeregister").valid() == false) return false;

	});


});