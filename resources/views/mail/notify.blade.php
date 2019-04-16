<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Invitro Fertilization Academy</title>
    <style>
        body {
            font-family: 'Open Sans', sans-serif;
            /*background-color: #f6f6f6;*/
        }
        a {
            text-decoration: none;
        }
    </style>
</head>
<body>

<div style="font-family: Open Sans; margin: 10px">
    <div style=" padding-top: 5px; padding-bottom: 20px; padding-right: 50px; padding-left: 50px; margin: 0px;">
        <h4>Training Registration</h4>
        <p>
            Hello {{ $applicant->name  }},
            <br>
            Your registration for <br>
                <strong>{{ $applicant->training->title }}</strong> <br>
            was successful.
        </p>
        <p>
            You can proceed to pay on our web site or at the venue of the training.
            <br>
            Your Training Reference code is:
                <strong>{{ $applicant->reference }}</strong> <br>
            Please ensure you keep your reference code safe and come with a copy of this mail to our office.
        </p>
    </div>
    <div style="margin: 0px; padding: 10px; text-align: center;">
        <p>Copyright &copy; <a href="{{ env('MAIN_URL') }}">IVF Academy</a> {{ date('Y') }}</p>
    </div>
</div>

</body>
</html>