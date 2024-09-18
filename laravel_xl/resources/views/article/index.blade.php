<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<h1>{{$art->title}}</h1>
	<h1>{{ $art }}</h1>
	<h1>{{json_encode($art)}}</h1>

	@if($art->title =='title')
			{{$art->title}}
	@elseif($art->title != 'title')
		{{$art->introduction}}
	@else
		{{$art}}

	@endif
</body>
</html>