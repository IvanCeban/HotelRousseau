<html>
	<head>
		<title>Laravel</title>
		
		<link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>

		<style>
			body {
				margin: 0;
				padding: 0;
				width: 100%;
				height: 100%;
				color: #B0BEC5;
				display: table;
				font-weight: 100;
				font-family: 'Lato';
			}

			.container {
				text-align: center;
				display: table-cell;
				vertical-align: middle;
			}

			.content {
				text-align: center;
				display: inline-block;
			}

			.title {
				font-size: 96px;
				margin-bottom: 40px;
			}

			.quote {
				font-size: 24px;
			}
		</style>
	</head>
	<body>
		<div class="container">
			<div class="content">
				<div class="title">Hotel Rousseau</div>
				<div class="title">{{Lang::get('content.welcome')}}</div>
                <ul class="language_bar_chooser">
                    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                        <li>
                            <a rel="alternate" hreflang="{{$localeCode}}" href="{{LaravelLocalization::getLocalizedURL($localeCode) }}">
                                {{{ $properties['native'] }}}
                            </a>
                        </li>
                    @endforeach
                </ul>
				<div class="quote">{{ Inspiring::quote() }}</div>
				<a href="{{url('admin')}}">ADMIN</a>
			</div>

            <div class="date-picker input-daterange">
                <input class="form-control" name="date_except">

                <input class="form-control" name="date_except_interval" >
            </div>
		</div>
    <script>
        $('.date-picker').datepicker({
            format: 'dd.mm.yyyy',
            todayHighlight: true,
            orientation: "left",
            autoclose: true,
            startDate: new Date()
        });
    </script>
	</body>
</html>
