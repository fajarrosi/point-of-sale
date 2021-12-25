<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <style>
    .btn {
    border-radius: 20px;
    color: white;
    padding: 14px 28px;
    font-size: 16px;
    cursor: pointer;
    }

    .btn-warning{background-color: #f44336;
        color: white;
        font-size: 0.875rem;
        line-height: 1.5;}
    .warning:hover {background: #da190b;}

    </style>
</head>
<table style="border-radius: 20px; border: 2px solid black;">
    <tr>
        <td align="center" style="padding: 20px 0 10px 0; border-bottom: 2px solid black; border-top-right-radius:20px; border-top-left-radius:20px;">
            <img src=""  style="width:300px; height:auto;"/>
        </td>
    </tr>
    <tr>
        <td style="padding: 40px 30px 40px 30px;">
            <table cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse; line-height:25px;">
                <tr>
                    <td>
                        <p style="margin: 0;">New Password</p>
                    </td>
                </tr>

                <tr>
                    <td style="padding: 30px 0 30px 0; text-align: center !important;">
                        <p>Berikut Password baru akun Anda adalah "{{ $password }}"</p>
                    </td>
                </tr>
            </table>
        </td>
    </tr>

    <tr>
        <td>
            <table cellpadding="0" cellspacing="0" width="100%" style="border-bottom-left-radius:20px; border-bottom-right-radius:20px; background-color:#8cbae0; line-height:25px; text-align: center;">
                <tr>
                    <td>
                    <p style="color:white; font-size:12px; margin:8px;">Copyright 2021 Point of Sales</p>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>


