<x-mail::message>
# New Contact Message from {{ $name }}

Hello Admin,

You have received a new message from your **Contact Us** form. Here are the details:

---

### Sender Information:

- **Name:** {{ $name }}
- **Email:** {{ $email }}

---

### Message:
{{ $message }}

<x-mail::panel>
Please respond to the message as soon as possible.
</x-mail::panel>

<x-mail::button :url="''" color="success">
Reply Now
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}

<x-slot:footer>
<x-mail::subcopy>
If you’re having trouble clicking the "Reply Now" button, copy and paste the URL below into your web browser:
[{{ url('') }}]({{ url('') }})
</x-mail::subcopy>
</x-slot:footer>
</x-mail::message>
