<h1>New Client Taster Package Applicant</h1>

<p>Name: {{ $first_name }}  {{ $last_name }}</p>
<p>Mobile: {{ $mobile }}</p>
<p>Stylist: {{ getStylists($cut_spend, $colour_spend, $gender) }}</p>

{{-- action('StylistController@show', ['id' => $applicant->id]) --}}

<strong>Please contact as soon as possible!</strong>