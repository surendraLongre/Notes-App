$('#sign-up').click(function(){
//	$('html').css('filter', 'blur(8px)');
	$('#signupform').toggleClass('hide');
	$('#loginform').addClass('hide');
});

$('#login-btn').click(function(){
//	$('html').css('filter', 'blur(8px)');
	$('#loginform').toggleClass('hide');
	$('#signupform').addClass('hide');
});

$('#edit-btn').click(function(){
	$('.delete').toggleClass('hide');
	if($('#edit-btn').text()=='Edit'){
		$(this).text('Done');
	}
	else $(this).text('Edit');
});

$('.add-note').click(function(){
	if($('.add-note').text()=='Add note') {
		$('textarea').val('');
		$.ajax({
			url: "create_notes.php",
			success: function(data){
				active_note=data;
				console.log(active_note);
				if(data=='error'){}	
			},
			error: function(){

			},
		});
		$('.add-note').text('All notes');
		$('#edit-btn').addClass('hide');
		$('.textarea').removeClass('hide');
		$('#display-notes').css('display','none');
	}
	else {
		$.ajax({
			url: "load_notes.php",
			success: function(data){
				$('#display-notes').html(data);
				clickOnNote();
				clickOnDelete();
			},
		});
		$('.add-note').text('Add note');
		$('#edit-btn').removeClass('hide');
		$('.textarea').addClass('hide');
		$('#display-notes').css('display','flex');
	}
});

$('#profile p:odd').mouseover(function(){
	$(this).addClass('bg-white');
	$(this).addClass('pointer');
});
$('#profile p:odd').mouseout(function(){
	$(this).removeClass('bg-white');
});

// change username email password in profile

$('#username').click(function(){
	$('#usernameform').removeClass('hide');
	$('#usernameform input[type=text]').attr('value', $(this).text());

});

$('#email').click(function(){
	$('#emailform').removeClass('hide');
	$('#emailform input[type=email]').attr('value', $(this).text());
});

$('#password').click(function(){
	$('#passwordform').removeClass('hide');
});

// sign up  form is submitted
$('#signupform').submit(function(event){
	event.preventDefault();
	//collect user data
	var datatopost=$(this).serializeArray();
	$.ajax({
		url:'signup.php',
		type: "post",
		data: datatopost,
		success: function(data){
		    if(data){
			$('#error').html(`<div class='text-red bg-crimson padding15'>${data}</div>`);
		    }
			else $('#error').html(`<div class=success>You signed up successfully</div>`);
		},
		error: function(){
			$('#error').html(`<div class='red bg-red padding15'>There was some error with the ajax call please try after some time</div>`);
		}


	});
});

$('#loginform').submit(function(){
	event.preventDefault();
	var datatopost=$(this).serializeArray();
	$.ajax({
		url: 'login.php',
		type: "post",
		data: datatopost,
		success: function(data){
			if(data=='success') window.location.href="loggedin.php";
			$('#login-error').html(`<div class='text-red bg-crimson padding15'>${data}</div>`);
		},
		error: function(){
			$('#login-error').html("<div class='red bg-red padding15'>There was some error with the ajax call please try again after some time</div>");
		}


	});
});

//define variables
//load notes on page load: Ajax call to loadnotes.php

$.ajax({
	url: "load_notes.php",
	success: function(data){
		$('#display-notes').html(data);
		clickOnNote();
		clickOnDelete();
	},
});

//add a new note: Ajax call to create_notes.php
//
/*$('.add-note').click(function(){

	$.ajax({
		url: "create_notes.php",
		success: function(data){
			console.log($('.add-note').text());
			if(data=='error'){}	
		},
		error: function(){

		},
	});
});*/
//update note: Ajax call to upadte_notes.php
$('.textarea').keyup(function(){
	$.ajax({
		url:"update_notes.php",
		type: "POST",
		data: {note:$('textarea').val(), id: active_note},
		success: function(data){
			if(data=='error') console.log('There was some problem in upating the notes');
		},
		error: function(){
			console.log('There was some problem with the ajax call');
		},
	});	
});

function clickOnNote(){
	$(".note").click(function(){
		$('.add-note').text('All notes');
		id=$(this).attr('id');
		active_note=id;
		console.log(active_note);
		var edit=$('#edit-btn').text()=='Edit';
		if(edit){
			$('.textarea').removeClass('hide');
			$('textarea').val($(this).find('h3').text());
			$('#edit-btn').addClass('hide');
			$('.note').addClass('hide');
			$('textarea').focus();
		}
	});
}
//click on all notes button
//click on done button: load notes again
//click on edit: go to edit mode

//function
//click on note 
//$(function(){


//});
//click on delete
function clickOnDelete(){
	$('.delete').click(function(){
		datatopost=$(this).next().attr("id");  
		console.log(datatopost);
		$(this).hide();
		$(`#${datatopost}`).hide();
		$.ajax({
			url:"delete_notes.php",
			type: "POST",
			data: {id:datatopost},
			success:function(data){
				if(data=='error') console.log('Unable to delete');
				console.log(data);
			},
			error: function(){
				console.log('There was something wrong with the ajax call');
			},
		});
	});
}
