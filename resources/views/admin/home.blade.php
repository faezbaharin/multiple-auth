<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>test</h1>


	<a href="{{ route('logout') }}"
        onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
    </a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>

</body>
</html>