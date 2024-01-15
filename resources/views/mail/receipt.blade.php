@extends('layouts.mail')
@section('content')
    <tr>
        <td class="email-body" width="570" cellpadding="0" cellspacing="0">
            <table class="email-body_inner" align="center" width="570" cellpadding="0" cellspacing="0" role="presentation">
                <!-- Body content -->
                <tr>
                    <td class="content-cell">
                        <div class="f-fallback">
                            <h1>Hi {{ $user->name}},</h1>
                            <p>Thank you for using {{ env('APP_NAME') }}.</p>
                            <p>We want to inform you that your order with reference number #{{ $order->order_id }} has been
                                received and is currently in the process of being handled.</p>
                            <table class="purchase" width="100%" cellpadding="0" cellspacing="0" role="presentation">
                                <tr>
                                    <td>
                                        <h3>[Order ID #{{ $order->order_id }}]</h3>
                                    </td>
                                    <td>
                                        <h3 class="align-right">{{ $order->formatted_created_at }}</h3>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <table class="purchase_content" width="100%" cellpadding="0" cellspacing="0">
                                            <tr>
                                                <th width="80%" class="purchase_heading" align="left">
                                                    <p class="f-fallback">Description</p>
                                                </th>
                                                <th width="20%" class="purchase_heading" align="right">
                                                    <p class="f-fallback">Amount</p>
                                                </th>
                                            </tr>
                                            @foreach ($order->items as $item)
                                                <tr>
                                                    <td class="purchase_item " align="left">
                                                        <p class="f-fallback">
                                                            <span><strong>Description:</strong> </span>
                                                            <span>{{ $item->product->name }}</span>
                                                        </p>
                                                        @if ($item->width)
                                                            <p class="f-fallback">
                                                                <span><strong>Width:</strong> </span>
                                                                <span>{{ $item->width }}</span>
                                                            </p>
                                                        @endif

                                                        @if ($item->color)
                                                            <p class="f-fallback">
                                                                <span><strong>Color:</strong> </span>
                                                                <span style="display:inline-block;background: {{$item->color}}; width: 50px; height: 10px; padding:3px; border-radius: 3px"></span>
                                                            </p>
                                                        @endif
                                                        @if ($item->sizes)
                                                            <p class="f-fallback">
                                                                <span><strong>Sizes:</strong> </span>
                                                                <span> {{ json_encode($item->sizes) }}</span>
                                                            </p>
                                                        @endif
                                                        @if ($item->length)
                                                            <p class="f-fallback">
                                                                <span><strong>Length:</strong> </span>
                                                                <span> {{ $item->length }}</span>
                                                            </p>
                                                        @endif
                                                        @if ($item->height)
                                                            <p class="f-fallback">
                                                                <span><strong>Height:</strong></span>
                                                                <span> {{ $item->height }}</span>
                                                            </p>
                                                        @endif
                                                        @if ($item->quantity)
                                                            <p class="f-fallback">
                                                                <span><strong>Quantity:</strong></span>
                                                                <span> {{ $item->quantity }}</span>
                                                            </p>
                                                        @endif
                                                    </td>
                                                    <td class="purchase_item purchase_item_amount" align="right">
                                                        <p class="f-fallback">
                                                            {{ formattedAmount($item->amount)}}
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </table>
                                <tr>
                                    <td width="80%" class="purchase_footer" valign="middle">
                                        <p class="f-fallback purchase_total purchase_total--label">Total</p>
                                    </td>
                                    <td width="20%" class="purchase_footer" valign="middle">
                                        <p class="f-fallback purchase_total">{{ formattedAmount($order->amount)}}</p>
                                    </td>
                                </tr>
                    </td>
                </tr>
            </table>
            <p>If you have any questions about this receipt, simply reply to this email or reach out to our
                <a href="https://www.stickersng.com/support">support team</a> for help.
            </p>
            <p>Cheers,
                <br>The {{ env('APP_NAME') }} team
            </p>
            </div>
        </td>
    </tr>
    </table>
    </td>
    </tr>
@endsection
