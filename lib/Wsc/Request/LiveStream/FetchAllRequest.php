<?php declare(strict_types=1);

namespace Ticketpark\Wsc\Request\LiveStream;

use Ticketpark\Wsc\Request\Request;
use Ticketpark\Wsc\Request\RequestCommonsTrait;
use Ticketpark\Wsc\Response\LiveStream\FetchAllResponse;

class FetchAllRequest extends Request
{
    const API_PATH = '/live_streams';
    const RESPONSE_CLASS = FetchAllResponse::class;

    use RequestCommonsTrait;

    /**
     * @var int
     */
    private $page;

    /**
     * @var int
     */
    private $perPage;

    public function getPage(): ?int
    {
        return $this->page;
    }

    public function setPage(int $page): self
    {
        $this->page = $page;

        return $this;
    }

    public function getPerPage(): ?int
    {
        return $this->perPage;
    }

    public function setPerPage(int $perPage): self
    {
        $this->perPage = $perPage;

        return $this;
    }

    protected function getQueryParameters(): array
    {
        return [
            $this->getPage(),
            $this->getPerPage()
        ];
    }

    public function getHttpMethod(): string
    {
        return self::HTTP_METHOD_GET;
    }
}
