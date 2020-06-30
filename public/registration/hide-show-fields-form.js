$("#seeAnotherField").change(function() {
			if ($(this).val() == "Middleclass")
			 {

$('#otherFieldDiv1').hide();
			 	$('#otherField1').removeAttr('required');
			 	$('#otherField1').removeAttr('data-error');
			 	$('#otherFieldDiv2').hide();
			 	$('#otherField2').removeAttr('required');
			 	$('#otherField2').removeAttr('data-error');
			 	$('#otherFieldDiv3').hide();
			 	$('#otherField3').removeAttr('required');
			 	$('#otherField3').removeAttr('data-error');
			 	$('#otherFieldDiv4').hide();
			 	$('#otherField4').removeAttr('required');
			 	$('#otherField4').removeAttr('data-error');

				$('#otherFieldDiv').show();
				$('#otherField').attr('required','');
				$('#otherField').attr('data-error', 'This field is required.');
			}

			

else if ($(this).val() == "Lowerclass")
{

$('#otherFieldDiv').hide();
			 	$('#otherField').removeAttr('required');
			 	$('#otherField').removeAttr('data-error');
			 	$('#otherFieldDiv1').hide();
			 	$('#otherField1').removeAttr('required');
			 	$('#otherField1').removeAttr('data-error');
			 	$('#otherFieldDiv2').hide();
			 	$('#otherField2').removeAttr('required');
			 	$('#otherField2').removeAttr('data-error');
			 	$('#otherFieldDiv4').hide();
			 	$('#otherField4').removeAttr('required');
			 	$('#otherField4').removeAttr('data-error');

	$('#otherFieldDiv3').show();
	$('#otherField3').attr('required','');
	$('#otherField3').attr('data-error', 'This field is required.');
}


else if ($(this).val() == "Volunteer")
{
	$('#otherFieldDiv').hide();
			 	$('#otherField').removeAttr('required');
			 	$('#otherField').removeAttr('data-error');
			 	$('#otherFieldDiv2').hide();
			 	$('#otherField2').removeAttr('required');
			 	$('#otherField2').removeAttr('data-error');
			 	$('#otherFieldDiv3').hide();
			 	$('#otherField3').removeAttr('required');
			 	$('#otherField3').removeAttr('data-error');
			 	$('#otherFieldDiv4').hide();
			 	$('#otherField4').removeAttr('required');
			 	$('#otherField4').removeAttr('data-error');

	$('#otherFieldDiv1').show();
	$('#otherField1').attr('required','');
	$('#otherField1').attr('data-error', 'This field is required.');
}


else if ($(this).val() == "Poor")
{
	$('#otherFieldDiv').hide();
			 	$('#otherField').removeAttr('required');
			 	$('#otherField').removeAttr('data-error');
			 	$('#otherFieldDiv1').hide();
			 	$('#otherField1').removeAttr('required');
			 	$('#otherField1').removeAttr('data-error');
			 	$('#otherFieldDiv3').hide();
			 	$('#otherField3').removeAttr('required');
			 	$('#otherField3').removeAttr('data-error');
			 	$('#otherFieldDiv4').hide();
			 	$('#otherField4').removeAttr('required');
			 	$('#otherField4').removeAttr('data-error');

	$('#otherFieldDiv2').show();
	$('#otherField2').attr('required','');
	$('#otherField2').attr('data-error', 'This field is required.');
}


else if ($(this).val() == "Donor")
{
	$('#otherFieldDiv').hide();
			 	$('#otherField').removeAttr('required');
			 	$('#otherField').removeAttr('data-error');
			 	$('#otherFieldDiv1').hide();
			 	$('#otherField1').removeAttr('required');
			 	$('#otherField1').removeAttr('data-error');
			 	$('#otherFieldDiv2').hide();
			 	$('#otherField2').removeAttr('required');
			 	$('#otherField2').removeAttr('data-error');
			 	$('#otherFieldDiv3').hide();
			 	$('#otherField3').removeAttr('required');
			 	$('#otherField3').removeAttr('data-error');	

	$('#otherFieldDiv4').show();
	$('#otherField4').attr('required','');
	$('#otherField4').attr('data-error', 'This field is required.');
}

			 else {
			 	$('#otherFieldDiv').hide();
			 	$('#otherField').removeAttr('required');
			 	$('#otherField').removeAttr('data-error');
			 	$('#otherFieldDiv1').hide();
			 	$('#otherField1').removeAttr('required');
			 	$('#otherField1').removeAttr('data-error');
			 	$('#otherFieldDiv2').hide();
			 	$('#otherField2').removeAttr('required');
			 	$('#otherField2').removeAttr('data-error');
			 	$('#otherFieldDiv3').hide();
			 	$('#otherField3').removeAttr('required');
			 	$('#otherField3').removeAttr('data-error');
			 	$('#otherFieldDiv4').hide();
			 	$('#otherField4').removeAttr('required');
			 	$('#otherField4').removeAttr('data-error');				
			 }
		});
		$("#seeAnotherField").trigger("change");
		