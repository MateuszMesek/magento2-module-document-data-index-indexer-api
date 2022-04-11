<?php declare(strict_types=1);

namespace MateuszMesek\DocumentDataIndexApi\Config;

interface IndexNameResolverInterface
{
    /**
     * @param string $documentName
     * @return string|null
     */
    public function getIndexNameResolver(string $documentName): ?string;
}
