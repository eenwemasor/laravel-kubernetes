@extends('layouts.mail')
@section('content')
    <tr>
        <td class="email-body" width="570" cellpadding="0" cellspacing="0">
            <table class="email-body_inner" align="center" width="570" cellpadding="0" cellspacing="0" role="presentation">
                <tr>
                    <td class="content-cell">
                        <div class="f-fallback">
                            <h1>Dear {{ $user->name }},</h1>
                            <p>Welcome aboard! We're thrilled to have you join {{ env('APP_NAME') }} - your go-to
                                destination for top-notch sticker printing. 🚀</p>
                            <p>Thank you for choosing us to bring your ideas to life and add that extra flair to your
                                projects. Whether you're looking to personalize your business branding, create unique event
                                giveaways, or simply express your creativity, we've got you covered.</p>

                            @if ($password)
                                <br />

                                <p>For added convenience, we've generated a secure password for you to use:</p>

                                Your Temporary Password: <span><strong>{{ $password }}</strong></span>

                                <p>
                                    We recommend changing this password once you log in for the first time. To do so, follow
                                    these steps:
                                </p>

                                <ol>
                                    <li>Log in to your account on <a
                                            href="https://www.stickersng.com/">{{ env('APP_NAME') }}</a>. </li>
                                    <li>Navigate to the "Account Settings" or "Profile" section.</li>
                                    <li>Select the option to change your password.</li>
                                    <li>Follow the prompts to create a new, secure password.</li>
                                </ol>
                                <br />
                            @endif

                            <p>
                                If you have any questions or need assistance, our dedicated support team is here to help.
                                Don't hesitate to reach out at <a>[support@stickersng.com]</a>.
                            </p>
                            <p>
                                Once again, welcome to the {{ env('APP_NAME') }} family. We can't wait to see the incredible
                                stickers you'll create!
                            </p>
                        </div>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
@endsection
