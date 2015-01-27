 <!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Title of the document</title>
</head>

<body>
	{{ Session::get('message') }}
{{ Form::open(array('route' => 'sms.store')) }}
	{{ Form::label('number', 'SMS Number') }}
	{{ Form::text('number','',array('placeholder' => 'SMS Number')) }}

	{{ Form::label('message', 'Message') }}
	{{ Form::text('message','',array('placeholder' => 'Message')) }}

	{{ Form::submit('Send SMS') }}
{{ Form::close() }}
</body>

</html> 