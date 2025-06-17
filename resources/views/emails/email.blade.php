@if(isset($details))
    <p><strong>Name:</strong> {{ $details['name'] ?? 'N/A' }}</p>
    <p><strong>Email:</strong> {{ $details['email'] ?? 'N/A' }}</p>
    <p><strong>Message:</strong><br>{{ $details['message_body'] ?? 'No message provided' }}</p>
@else
    <p>Error: No contact details provided.</p>
@endif
