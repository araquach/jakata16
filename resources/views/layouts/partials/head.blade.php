<head>
	
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="description" content="{{ $description or 'Jakata is a fashion forward, award winning hair salon in Warrington, Cheshire. With a team of twelve talented hairdressers looking after you, you know you\'re in good hands. Based on Bridge street in Warrington Town Centre the salon is located perfectly to serve Lymm, Stockton Heath, Culcheth, Great Sankey, Widnes and Runcorn. If you\'re looking for the most fashion forward hairdressing then look no further. Our hairdressing services will far outweigh your expectations plus you\'ll be blown away by our friendly, approachable staff. Jakata, 90/92 Bridge Street, Warrington, WA1 2RF, 01925 242960' }}">
	<meta name="keywords" content="{{ $keywords or 'hair, hairdressers, hairdressing, hairdressers in Warrington, men\'s hairdresing, fashion colour, brazilian blowdry, wedding hair, Daniel Anderson, Warrington, Lymm, Stockton Heath, Culcheth, Great Sankey, Widnes and Runcorn' }}">
    <meta property="og:title" content="{{ $ogtitle or 'Jakata Salon' }}">
    <meta property="og:description" content="{{ $ogdescription or 'Jakata is a fashion forwars, award winning salon in Warrington' }}">
	<meta property="og:image" content="{{ $ogimage or 'default.png' }}">
	<meta property="og:url" content="{{ isset($url) ? $url : str_replace('http://', 'https://', Request::url()) }}">

	<meta name="author" content="Contra Design">
	<meta name="viewport" content="width=device-width" />

	<link rel="stylesheet" type="text/css" href="{{ elixir('css/app.css') }}" />
	<link rel="stylesheet" type="text/css" media="only screen and (max-device-width: 640px), only screen and (min-device-width : 719px) and (max-device-width : 721px) and (-webkit-min-device-pixel-ratio : 2) and (orientation : portrait)" href="{{ URL::asset('css/mobile.css') }}"
	/>

	<script type="text/javascript" src="{{ URL::asset('scripts/jquery.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('scripts/mootools-core.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('scripts/mootools-more.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('scripts/modernizr.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('scripts/selectivizr-min.js') }}"></script>

	<title>{{ $title or 'Jakata Salon - Hairdressers in Warrington' }}</title>

</head>