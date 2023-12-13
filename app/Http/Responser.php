<?php

namespace App\Http;

use App\Http\Collections\ApiPaginatedCollection;
use Illuminate\Http\JsonResponse;
use Illuminate\Pagination\LengthAwarePaginator;
use JsonSerializable;

class Responser
{
    /**
     * Return a new JSON response with mixed(object|JsonSerializable) data
     * 
     * @param int $status
     * @param mixed $data
     * @param string|null $message
     * @return Illuminate\Http\JsonResponse
     */
    public static function send(int $status, $data = [], string $message = null): mixed
    {
        switch (true) {
            case ($data instanceof ApiPaginatedCollection):
                return self::sendPaginated($status, $data, $message);
                break;
            case ($data instanceof LengthAwarePaginator):
                return self::sendLengthAwarePaginatorData($status, $data, $message);
                break;
            default:
                return self::sendUnpaginatedData($status, $data, $message);
        }

    }

    /**
     * Return a new JSON response with paginated data
     * 
     * @param int $status
     * @param StaffStrength\ApiMgt\Http\Collections\ApiPaginatedCollection $data
     * @param string|null $message
     * @return Illuminate\Http\JsonResponse
     */
    public static function sendPaginated(int $status, ApiPaginatedCollection $data, string $message = null): JsonResponse
    {
        $data = $data->toArray();
        $response = [
            'status' => $status,
            'data' => $data['data'],
            'meta' => $data['meta'],
            "message" => ucfirst($message)
        ];
        return response()->json($response, $status);
    }


    /**
     * Return a new JSON response with paginated data
     * 
     * @param int $status
     * @param Illuminate\Pagination\LengthAwarePaginator $data
     * @param string|null $message
     * @return Illuminate\Http\JsonResponse
     */
    public static function sendLengthAwarePaginatorData(int $status, LengthAwarePaginator $data, string $message = null): JsonResponse
    {
        $data = $data->toArray();
        $response = [
            'status' => $status,
            'data' => $data['data'],
            'meta' => collect($data)->except('data'),
            "message" => ucfirst($message),
        ];
        return response()->json($response, $status);
    }

    /**
     * Return a new JSON response with mixed(object|JsonSerializable) data
     * 
     * @param int $status
     * @param mixed $data
     * @param string|null $message
     * @return Illuminate\Http\JsonResponse
     */
    public static function sendUnpaginatedData(int $status, $data = [], string $message = null): JsonResponse
    {
        $response = [
            'status' => $status,
            'data' => $data,
            "message" => ucfirst($message)
        ];
        return response()->json($response, $status);
    }

    /**
     * Return a new JSON response with error string
     * 
     * @param int $status
     * @param string $error
     * @param string|null $message
     * @return Illuminate\Http\JsonResponse
     */
    public static function sendError(int $status, string $error, string $message = null): JsonResponse
    {
        $response = [
            'status' => $status,
            'error' => $error,
            "message" => ucfirst($message)
        ];
        return response()->json($response, $status);
    }

    /**
     * Return a new JSON response with errors array
     *
     * @param int $status
     * @param \JsonSerializable $erorrs
     * @param string|null $message
     * @return Illuminate\Http\JsonResponse
     */
    public static function sendErrors(int $status, JsonSerializable $errors, string $message = null): JsonResponse
    {
        $response = [
            'status' => $status,
            "erorrs" => $errors,
            "errors" => $errors,
            "message" => ucfirst($message)
        ];
        return response()->json($response, $status);
    }
}
