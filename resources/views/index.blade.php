<html>
	<head>
		<title>Laravel</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="assets/bootstrap-daterangepicker/daterangepicker-bs3.css" />
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

            <input type="text" name="daterange" value="01/01/2015 - 01/31/2015" />
		</div>
        <!-- Latest compiled and minified JavaScript -->
        <script src="assets/js/jquery-1.11.2.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/bootstrap-daterangepicker/moment.min.js"></script>
        <script src="assets/bootstrap-daterangepicker/daterangepicker.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('input[name="daterange"]').daterangepicker();
            });
        </script>
	</body>
</html>
