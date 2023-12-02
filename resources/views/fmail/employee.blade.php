<span>Hallo {{ $nama }}... Aku mau kasih tahu nih ke kamu kalau ini adalah kredensial pendaftaran aplikasi, disimpen ya, jangan sampe ilang.</span>

<br/><br/>
<span>Nama Admin : </span>
<span>{{ $nama }}</span>
<br/>
<span>Email : </span>
<span>{{ $email }}</span>
<br/>
<span>Password : </span>
<span>{{ $password }}</span>
<br/>
<span>Role : </span>
<span>{{ $role }}</span>
<br/><br/>

<span>Regards,<span><br>
{{ config('app.name') }}
