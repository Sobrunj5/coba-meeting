@component('mail::message')
# Aktivasi akun anda

Terima kasih  sudah mendaftar, mohon aktivasi akun anda

@component('mail::button', ['url' => route('adminmitra.activate',[
                                    'token' => $mitra->activation_token,
                                    'email' => $mitra->email
                                ])
                            ]
            )
Aktivasi
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
