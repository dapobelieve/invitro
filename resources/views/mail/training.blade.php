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
        <h4>IVF Academy - Training Registration</h4>
        <p>
            You just registered for a Training,
            <br>
                <strong>{{ $applicant->training->title }}</strong>
            <br>on
            <a href="{{ env('MAIN_URL') }}">IVF Academy</a>.
        </p>
        <p>
            Below are your details
        </p>
        <p>
            Training Reference is: <strong>{{ $applicant->reference }}</strong>
            <br>
            <small>Please ensure you keep your reference code safe.</small>
        </p>
        <p>
            Amount: <strong>N{{ number_format($applicant->training->price) }}</strong>
        </p>
    </div>
    <div style="margin: 0px; padding: 10px; text-align: center;">
        <p>Copyright &copy; <a href="{{ env('APP_URL') }}">IVF Academy</a> {{ date('Y') }}</p>
    </div>
</div>

</body>
</html>