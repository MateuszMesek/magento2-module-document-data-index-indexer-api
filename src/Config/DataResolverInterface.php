<?php declare(strict_types=1);

namespace MateuszMesek\DocumentDataIndexIndexerApi\Config;

interface DataResolverInterface
{
    /**
     * @param string $documentName
     * @return string|null
     */
    public function getDataResolver(string $documentName): ?string;
}
