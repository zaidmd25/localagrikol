$(document).ready(function()
{
$("#form_reg").validate(
{
rules:{
'lastname':{
	required: true,
	minlength: 3,
},
'firstname':{
	required: true,
	minlength: 3,
},
'email':{
	required:true,
	email:true,
},
'phonenumber':{
	required: true,
	number:true,
	minlength:10,
	maxlength:15,
},
'zip_code':{
	required: true,
	number:true,
	maxlength:6,
},
'city':{
	required: true,
	minlength: 3,
	text:true,
},
'message':{
 required:true,
 minlength: 3,
}
},
messages:{
'lastname':{
	required: "The field is mandatory!",
	minlength: "Choose a username of at least 3 letters!",
},
'firstname':{
	required: "The field is mandatory!",
	minlength: "Choose a username of at least 3 letters!",
},

'email':{
	required: "The Email is mandatory!",
	email: "Please enter a valid email address!",
},
'phonenumber':{
	required: "The phone number is mandatory!",
	minlength: "minimum length is 10",
	maxlength: "maximum length is 15",
	number: "only numbers",
},

'zip_code':{
	required: "The zipcode is mandatory!",
	number: "only numbers",
	maxlength: "maximum length is 6!",
},
'city':{
	required: "this field is mandatory",
	minlength: "minimum 3 letters is required",
	text: "only text",
},
'message':{
	required:"This field is mandatory",
	minlength:"minimum length is 3",
},
}
});
});
