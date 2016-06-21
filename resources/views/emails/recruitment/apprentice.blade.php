<h2>There is a new apprentice application for Jakata</h2>

<p>Name: {{ $applicant->first_name }} {{ $applicant->second_name }}</p>
<p>Email Address: {{ $applicant->email }}</p>
<p>Mobile Number: {{ $applicant->mobile }}</p>
<p>Phone Number: {{ $applicant->phone }}</p>

{{ action('ApprenticeController@show', ['id' => $applicant->id]) }}