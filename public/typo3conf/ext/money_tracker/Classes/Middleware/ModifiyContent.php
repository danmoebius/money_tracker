<?php
declare(strict_types=1);

namespace Dm\MoneyTracker\Middleware;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\MiddlewareInterface;
use Psr\Http\Server\RequestHandlerInterface;
use TYPO3\CMS\Core\Http\HtmlResponse;

class ModifiyContent implements MiddlewareInterface
{

    public function process(
        ServerRequestInterface $request,
        RequestHandlerInterface $handler
    ): ResponseInterface {

        $response = $handler->handle($request);
        $content = (string)$response->getBody();

        $newContent = str_replace('Welcome', 'Foobar', $content);

        return new HtmlResponse($newContent, $response->getStatusCode(), $response->getHeaders());
    }
}
