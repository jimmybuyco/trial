@extends('layouts.default.layout')

@section('title') Add Bill - Manual @endsection

@section('content')

	<form action="">
		{{ csrf_field() }}
		<table>
			<tr>
				<td>Select your biller</td>
				<td>
					<select name="" id="">
						<option selected disabled>Choose a bill</option>
						@foreach($test as $biller)
							<option value="{{ $biller->id }}">{{ $biller->name }}</option>
						@endforeach
					</select>
				</td>
			</tr>
			<tr>
				<td>Amount </td>
				<td><input type="text"></td>
			</tr>
			<tr>
				<td>Account Number </td>
				<td><input type="text"></td>
			</tr>
		</table>
	</form>

@endsection