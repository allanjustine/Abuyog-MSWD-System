<!DOCTYPE html>
<html>

<head>
    <style>
        /* Add custom styles here */
        .button {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
        }
    </style>
</head>

<body>
    <p>Hello!</p>
    <p>Please click the button below to verify your email address.</p>
    <a href="{{ $url }}" class="button">Verify Email Address</a>
    <p>If you did not create an account, no further action is required.</p>
    <p>Regards,</p>
    <p>Laravel Team</p>
</body>

</html>
