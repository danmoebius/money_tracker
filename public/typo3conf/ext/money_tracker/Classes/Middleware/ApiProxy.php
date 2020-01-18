<?php
declare(strict_types=1);

namespace Dm\MoneyTracker\Middleware;

use Dm\MoneyTracker\Service\GroupsService;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\MiddlewareInterface;
use Psr\Http\Server\RequestHandlerInterface;
use TYPO3\CMS\Core\Http\HtmlResponse;
use TYPO3\CMS\Core\Http\JsonResponse;

class ApiProxy implements MiddlewareInterface
{
    const API_CALL = '/api';

    public function process(
        ServerRequestInterface $request,
        RequestHandlerInterface $handler
    ): ResponseInterface {

        $path = $request->getUri()->getPath();
        $route = str_replace($this::API_CALL, '', $path);

        if (
            strpos($path, '/api/') === false
//            ||
//            $this->checkRoutes($route) === false
        ) {
            return $handler->handle($request);
        }

        $statusCode = 200;
        $groupsService = new GroupsService();

        $content = [];
        try {
            $content = $groupsService->fetchGroups();
        } catch (\Exception $e) {
            $content = ['Error occured'];
            $statusCode = 500;
        }

        return new JsonResponse($content, $statusCode);
    }

    /**
     * @param string $apiCall
     *
     * @return bool
     */
    private function checkRoutes(string $apiCall): bool
    {
        foreach ($GLOBALS['TYPO3_CONF_VARS']['API_Routes'] as $route) {

            $pattern = '/' . str_replace('/', '\/', $route) . '(.*)/';
            if ((bool)preg_match($pattern, $apiCall) == true) {

                return true;
            }
        }

        return false;
    }
}
