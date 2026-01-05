<?php

declare(strict_types=1);

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class TokenAuth implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        // Allow CORS preflight
        if (strtoupper($request->getMethod()) === 'OPTIONS') {
            return null;
        }

        $expectedToken = (string) (env('API_TOKEN') ?? '');
        if ($expectedToken === '') {
            $expectedToken = 'rashidmay';
        }

        $authHeader = (string) $request->getHeaderLine('Authorization');
        $tokenHeader = (string) $request->getHeaderLine('X-Api-Token');

        $token = '';
        if ($authHeader !== '' && preg_match('/^Bearer\s+(.*)$/i', $authHeader, $m) === 1) {
            $token = trim($m[1]);
        } elseif ($tokenHeader !== '') {
            $token = trim($tokenHeader);
        }

        if ($token === '' || !hash_equals($expectedToken, $token)) {
            return service('response')
                ->setStatusCode(401)
                ->setJSON([
                    'status' => 401,
                    'error'  => 'Unauthorized',
                    'message'=> 'Invalid or missing API token',
                ]);
        }

        return null;
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // no-op
    }
}
