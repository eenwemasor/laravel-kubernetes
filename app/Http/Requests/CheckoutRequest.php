<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CheckoutRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'tx_ref'                            => ['required', 'string'],
            'flw_tx_ref'                        => ['required', 'string'],
            'tx_id'                             => ['required'],
            'amount'                            => ['required', 'numeric'],
            'privacy_policy'                    => ['required', 'boolean'],
            'ship_same_as_bill'                 => ['required', 'boolean'],
            'shipping_method'                   => ['required', 'in:standard,express,local-pickup'],
            'note'                              => ['string'],

            // shipping details
            'shipping_info'                     => ['required', 'array'],
            'shipping_info.address_line'        => ['required', 'string'],
            'shipping_info.city'                => ['required', 'string'],
            'shipping_info.email'               => ['required', 'email'],
            'shipping_info.first_name'          => ['required', 'string'],
            'shipping_info.last_name'           => ['required', 'string'],
            'shipping_info.note'                => ['string'],
            'shipping_info.phone_number'        => ['required', 'string'],
            'shipping_info.postal_code'         => ['required', 'string'],
            'shipping_info.state'               => ['required', 'string'],

            // billing details
            'billing_info'                      => ['required_if:ship_same_as_bill,false', 'array'],
            'billing_info.address_line'         => ['required_if:ship_same_as_bill,false', 'string'],
            'billing_info.company'              => ['string'],
            'billing_info.city'                 => ['required_if:ship_same_as_bill,false', 'string'],
            'billing_info.full_name'            => ['required_if:ship_same_as_bill,false', 'string'],
            'billing_info.phone_number'         => ['required_if:ship_same_as_bill,false', 'string'],
            'billing_info.postal_code'          => ['required_if:ship_same_as_bill,false', 'string'],
            'billing_info.state'                => ['required_if:ship_same_as_bill,false', 'string'],

            // order items
            'items'                             => ['required', 'array', 'min:1'],
            'items.*'                           => ['required', 'array', 'min:1'],
            'items.*.artwork_id'                => ['required', 'string'],
            'items.*.artwork_description'       => ['string', 'nullable', 'sometimes'],
            'items.*.product_id'                => ['string', 'nullable', 'sometimes'],
            'items.*.length'                    => ['integer', 'nullable', 'sometimes'],
            'items.*.width'                     => ['integer', 'nullable', 'sometimes'],
            'items.*.height'                    => ['integer', 'nullable', 'sometimes'],
            'items.*.quantity'                  => ['integer', 'nullable', 'sometimes'],
            'items.*.color'                     => ['string', 'nullable', 'sometimes'],
            'items.*.sizes'                     => ['array', 'nullable', 'sometimes'],
            'items.*.sizes.S'                   => ['integer', 'nullable', 'sometimes'],
            'items.*.sizes.M'                   => ['integer', 'nullable', 'sometimes'],
            'items.*.sizes.L'                   => ['integer', 'nullable', 'sometimes'],
            'items.*.sizes.XL'                  => ['integer', 'nullable', 'sometimes'],
            'items.*.sizes.2XL'                 => ['integer', 'nullable', 'sometimes'],
            'items.*.sizes.2XL'                 => ['integer', 'nullable', 'sometimes'],
        ];
    }


    /**
     * Get custom attributes for validator errors.
     *
     * @return array<string, string>
     */
    public function attributes(): array
    {
        return [
            'tx_ref'                            => "transaction reference",
            'flw_tx_ref'                        => "flutterwave transaction reference",
            'tx_id'                             => "transaction ID",
            'amount'                            => "amount",
            'privacy_policy'                    => "privacy policy",
            'ship_same_as_bill'                 => "shipping same as billing",
            'shipping_method'                   => "shipping method",
            'note'                              => "order note",

            // shipping details
            'shipping_info'                     => "shipping",
            'shipping_info.address_line'        => "shipping address line",
            'shipping_info.city'                => "shipping city",
            'shipping_info.email'               => "shipping email",
            'shipping_info.first_name'          => "shipping first name",
            'shipping_info.last_name'           => "shipping last name",
            'shipping_info.note'                => "shipping order note",
            'shipping_info.phone_number'        => "shipping phone number",
            'shipping_info.postal_code'         => "shipping postal code",
            'shipping_info.state'               => "shipping state",

            // billing details
            'billing_info'                      => "billing",
            'billing_info.address_line'         => "billing address line",
            'billing_info.company'              => "billing company",
            'billing_info.city'                 => "billing city",
            'billing_info.full_name'            => "billing full name",
            'billing_info.phone_number'         => "billing phone number",
            'billing_info.postal_code'          => "billing postal code",
            'billing_info.state'                => "billing state",

            // order items
            'items'                             => "order items",
            'items.*'                           => "order items",
            'items.*.artwork_id'                => "order item artwork ID",
            'items.*.artwork_description'       => "order item artwork description",
            'items.*.product_id'                => "order item product ID",
            'items.*.length'                    => "order item length",
            'items.*.width'                     => "order item width",
            'items.*.height'                    => "order item height",
            'items.*.quantity'                  => "order item quantity",
            'items.*.color'                     => "order item color",
            'items.*.sizes'                     => "order item sizes",
            'items.*.sizes.S'                   => "order item sizes",
            'items.*.sizes.M'                   => "order item sizes",
            'items.*.sizes.L'                   => "order item sizes",
            'items.*.sizes.XL'                  => "order item sizes",
            'items.*.sizes.2XL'                 => "order item sizes",
            'items.*.sizes.2XL'                 => "order item sizes",
        ];
    }

    /**
     * @return array
     */
    public function messages(): array
    {
        return [
            'tx_ref.required'                               => ":attribute is required",
            'tx_ref.string'                                 => ":attribute is invalid",
            'flw_tx_ref.required'                           => ":attribute is required",
            'flw_tx_ref.string'                             => ":attribute is invalid",
            'tx_id'                                         => ":attribute is required",
            'amount.required'                               => ":attribute is required",
            'amount.numeric'                                => ":attribute is invalid",
            'privacy_policy.required'                       => ":attribute is required",
            'privacy_policy.boolean'                        => ":attribute is invalid",
            'ship_same_as_bill'                             => ":attribute is required",
            'ship_same_as_bill'                             => ":attribute is invalid",
            'shipping_method.required'                      => ":attribute is required",
            'shipping_method.in'                            => ":attribute is invalid",
            'note.string'                                   => ":attribute is invalid",

            'shipping_info.required'                        => ":attribute is required",
            'shipping_info.array'                           => ":attribute is invalid",
            'shipping_info.*.required'                      => ":attribute is required",
            'shipping_info.*.string'                        => ":attribute is invalid",
            'shipping_info.*.email'                         => ":attribute is invalid",

            'billing_info.required'                         => ":attribute is required",
            'billing_info.array'                            => ":attribute is invalid",
            'billing_info.*.required'                       => ":attribute is required",
            'billing_info.*.string'                         => ":attribute is invalid",
            'billing_info.*.email'                          => ":attribute is invalid",

            'items.required'                                => ":attribute is required",
            'items.array'                                   => ":attribute is invalid",
            'items.min'                                     => ":attribute is invalid",
            'items.*.required'                              => ":attribute is required",
            'items.*.string'                                => ":attribute is invalid",
            'items.*.integer'                               => ":attribute is invalid",
            'items.*.array'                                 => ":attribute is invalid",
            'items.*.email'                                 => ":attribute is invalid",
        ];
    }
}
