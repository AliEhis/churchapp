<h3 style="background:rgb(30, 30, 141); color:white; width:295px; height:42px; text-align:center;font-size: 22px; padding-top: 5px; margin-left:300px ">{{ config('app.name', 'Laravel') }}</h3>
<h1>Goodday pastor {{$result['name']}},</h1>
<h2>Appointment has just been booked by {{$result['authuser']}}  and has been scheduled for the date below </h2>
<p style="font-size: 20px" ><b style="color:rgb(35, 35, 99)">Date:</b>{{$result['date']}}</p>
<p style="font-size: 17px">
    Please click the button below to confirm if you will be available or reject if unavailable 
  </p>
  <a href ="{{route('schedule', ['appointmentId' =>$result['id'] ])}}" style="    color: white;
  background: #1a73e8;
  padding: 10px;
  padding-right: 20px;
  padding-left: 20px;
  font-size: 18px;
  border-radius: 9px;
  text-decoration:none
">Clik Here</a>
  <p style="font-size: 17px">
    Thank you,
  </p>
  <p style="font-size: 17px">
    AFTJ Church Team
  </p>
<p>
    &copy; {{ config('app.name', 'Laravel') }} {{date('Y')}}
</p>
