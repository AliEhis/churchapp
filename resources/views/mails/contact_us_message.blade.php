<h4>{{ config('app.name', 'Laravel') }}</h4>
<p>Sender: {{$data->name}}</p>
<p>E-Mail: {{$data->email}}</p>
<p>Message:</p>
{{$data->message}}
<p>
    &copy; {{ config('app.name', 'Laravel') }} {{date('Y')}}
</p>
