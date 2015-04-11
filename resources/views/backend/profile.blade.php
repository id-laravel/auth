@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">My Profile</div>

				<div class="panel-body">
					You are logged in!
                    <p>
                        <?php var_dump(Auth::user()->toArray()) ?>
                    </p>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
