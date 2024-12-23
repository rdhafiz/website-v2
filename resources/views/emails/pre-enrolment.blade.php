<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            font-size : 20px;
        }

        .row {
            padding : 7px 0;
            width   : 100%;
        }

        .col-left {
            margin-right : 10px;
            font-weight  : bold;
        }
    </style>
</head>
<body>

A Pre-Enrolment Request has been received for course <strong>{{ $input['course_name'] }}</strong>. <br><br>


<div class="row">
    <span class="col-left">Course Name:</span>
    <span>{{$input['course_name']}}</span>
</div>
<div class="row">
    <span class="col-left">Name:</span>
    <span>{{$input['name']}}</span>
</div>
<div class="row">
    <span class="col-left">Email Address:</span>
    <span>{{$input['email']}}</span>
</div>
<div class="row">
    <span class="col-left">Contact Number:</span>
    <span>{{$input['contact_number']}}</span>
</div>
@if(isset($input['time_slot']))
    <div class="row">
        <span class="col-left">Time Slot:</span>
        <span>{{$input['time_slot']}}</span>
    </div>
@endif
<hr>
<div class="row">
    <span class="col-left">Requested On:</span>
    <span>{{ date('jS F, Y \a\t h:i A', strtotime($input['created_at'])) }}</span>
</div>

</body>
</html>
