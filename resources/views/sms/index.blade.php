<!DOCTYPE html>
<html>

<head>
    <title>PHP SMS</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
</head>

<body>

    <h1>PHP SMS</h1>

    @if (session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <form method="post" action="{{ route('sms.send') }}">
        @csrf

        <label for="number">Number</label>
        <input type="text" name="number" id="number" value="{{ old('number') }}" />
        @error('number')
            <p style="color: red;">{{ $message }}</p>
        @enderror

        <label for="message">Message</label>
        <textarea name="message" id="message">{{ old('message') }}</textarea>
        @error('message')
            <p style="color: red;">{{ $message }}</p>
        @enderror

        <fieldset>
            <legend>Provider</legend>
            <label>
                <input type="radio" name="provider" value="infobip"
                    {{ old('provider', 'infobip') === 'infobip' ? 'checked' : '' }}> Infobip
            </label>
            <label>
                <input type="radio" name="provider" value="twilio"
                    {{ old('provider') === 'twilio' ? 'checked' : '' }}> Twilio
            </label>
        </fieldset>

        <button type="submit">Send</button>
    </form>

</body>

</html>
