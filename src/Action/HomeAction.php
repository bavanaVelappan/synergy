<?php

namespace App\Action;

use Psr\Http\Message\ResponseInterface as res;
use Psr\Http\Message\ServerRequestInterface as req;

final class HomeAction
{
    public function __invoke(req $request, res $response) : res {
        $result = ['error' => ['message' => 'Validation failed']];
        $response->getBody()->write(json_encode($result));
        return $response
            ->withHeader('Content-Type', 'application/json')
            ->withStatus(422);
    }
}