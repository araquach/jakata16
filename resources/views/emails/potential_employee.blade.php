<h2>There is a new potential employee for Jakata</h2>

<p>Name: {{ $applicant->full_name }}</p>
<p>Current Position: {{ $applicant->position }}</p>
<p>Mobile Number: {{ $applicant->mobile }}</p>

{{ action('PotentialEmployeeController@index') }}