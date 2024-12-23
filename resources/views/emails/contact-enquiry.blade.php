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

A new Contact Enquiry requests has been received. <br><br>

<div class="row">
    <span class="col-left">Name:</span>
    <span>{{$input['name']}}</span>
</div>
<div class="row">
    <span class="col-left">Email Address:</span>
    <span>{{$input['email']}}</span>
</div>
<div class="row">
    <span class="col-left">City/Town:</span>
    <span>{{$input['city']}}</span>
</div>
<div class="row">
    <span class="col-left">Phone:</span>
    <span>{{$input['contact_number']}}</span>
</div>
<div class="row">
    <span class="col-left">Known From:</span>
    <span>{{$input['know_us']}}</span>
</div>
<div class="row">
    <span class="col-left">Subject:</span>
    <span>{{$input['subject']}}</span>
</div>
<div class="row">
    <span class="col-left">Message:</span>
    <span>{!! nl2br($input['message']) !!}</span>
</div>
<hr>
<div class="row">
    <span class="col-left">Requested On:</span>
    <span>{{ date('jS F, Y \a\t h:i A', strtotime($input['created_at'])) }}</span>
</div>

</body>
</html>
