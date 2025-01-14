<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mediprospects</title>
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

    <p style="text-align: center;">
        <strong>{{ $input['name'] }}</strong> has expressed interest for <strong>{{$input['course_name']}}</strong> course.
    </p>
    <br><br>

    <table style="width: 100%;border-spacing: 0;">
        <tr>
            <th style="text-align: right;padding: 10px;background-color: #f9f9f9;width: 35%;">Interested for the Course:</th>
            <td style="text-align: left;padding: 10px;background-color: #f9f9f9;">{{$input['course_name']}}</td>
        </tr>
        <tr>
            <th style="text-align: right;padding: 10px;background-color: #f9f9f9;width: 35%;">Name:</th>
            <td style="text-align: left;padding: 10px;background-color: #f9f9f9;">{{ $input['name'] }}</td>
        </tr>
        <tr>
            <th style="text-align: right;padding: 10px;background-color: #f9f9f9;width: 35%;">Phone:</th>
            <td style="text-align: left;padding: 10px;background-color: #f9f9f9;">{{$input['contact_number']}}</td>
        </tr>
        <tr>
            <th style="text-align: right;padding: 10px;background-color: #f9f9f9;width: 35%;">Email:</th>
            <td style="text-align: left;padding: 10px;background-color: #f9f9f9;">{{$input['email']}}</td>
        </tr>
        <tr>
            <th style="text-align: right;padding: 10px;background-color: #f9f9f9;width: 35%;">Preferred method of communication:</th>
            <td style="text-align: left;padding: 10px;background-color: #f9f9f9;">{{$input['preferred_communication_method']}}</td>
        </tr>
        <tr>
            <th style="text-align: right;padding: 10px;background-color: #f9f9f9;width: 35%;">Postcode:</th>
            <td style="text-align: left;padding: 10px;background-color: #f9f9f9;">
                {{$input['postcode']}}
            </td>
        </tr>

    </table>

    <div style="width: 100%;display: inline-block;text-align: center;margin-top: 20px;opacity: 0.5;">
        <small class="col-left">Sent On:</small> <small>{{ date('jS F, Y \a\t h:i A')}}</small>
    </div>

</body>
</html>
