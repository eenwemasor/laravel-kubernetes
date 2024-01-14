@extends('layouts.mail')
@section('content')
<tr>
    <td class="email-body" width="570" cellpadding="0" cellspacing="0">
      <table class="email-body_inner" align="center" width="570" cellpadding="0" cellspacing="0" role="presentation">
        <tr>
          <td class="content-cell">
            <div class="f-fallback">
              <h1>Dear {{$user->first_name}},</h1>
              <p>Welcome aboard! We're thrilled to have you join {{env('APP_NAME')}} - your go-to destination for top-notch sticker printing. 🚀</p>
              <p>Thank you for choosing us to bring your ideas to life and add that extra flair to your projects. Whether you're looking to personalize your business branding, create unique event giveaways, or simply express your creativity, we've got you covered.</p>
              <p>
                If you have any questions or need assistance, our dedicated support team is here to help. Don't hesitate to reach out at <a>[support@stickersng.com]</a>.
              </p>
              <p>
                Once again, welcome to the {{env('APP_NAME')}} family. We can't wait to see the incredible stickers you'll create!
              </p>
            </div>
          </td>
        </tr>
      </table>
    </td>
  </tr>
@endsection