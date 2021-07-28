<!DOCTYPE html>

<html lang="en">

@include('layout.partial.head')


	<body>
		
		<div id="site-content">
			
			@include('layout.partial.header')

			@yield('content')

			@include('layout.partial.footer')

		</div>
		<!-- Default snippet for navigation -->
		


		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/plugins.js"></script>
		<script src="js/app.js"></script>
		
	</body>

</html>