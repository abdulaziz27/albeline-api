<?php

namespace App\Providers;

use App\StatusCode;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Response;

class ResponseMacroServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Response::macro('success', function ($data, $status = StatusCode::OK) {
            $response = [
                'error' => false,
                'data' => $data,
            ];
            return Response::json($response, $status);
        });

        Response::macro('successWithMessage', function ($message, $status = StatusCode::OK) {
            $response = [
                'error' => false,
                'message' => $message,
            ];
            return Response::json($response, $status);
        });

        Response::macro('successWithKey', function ($data, $key = 'data', $status = StatusCode::OK) {
            $response = [
                'error' => false,
                "$key" => $data,
            ];
            return Response::json($response, $status);
        });

        Response::macro('error', function ($message, $status = StatusCode::BAD_REQUEST) {
            return Response::json([
                'error' => true,
                'message' => $message,
            ], $status);
        });
    }
}
