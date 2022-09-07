
{{-- @component('mail::message')
Here the enquiries details:

Name: {{ $data['name'] }}  
Email: {{ $data['email'] }}  
Subject: {{ $data['subject'] }}  
Message: {{ $data['message'] }}


@endcomponent --}}
<!DOCTYPE html>
<html>
<body>
    <h4>Here the details:</h4>
    <p>Name: {{ $data['name'] }}</p>  
    <p>Email: {{ $data['email'] }}</p>  
    <p>Subject: {{ $data['subject'] }}</p>  
    <p>Message: {{ $data['message'] }}</p>
</body>
</html>