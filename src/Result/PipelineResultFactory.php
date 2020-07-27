<?php declare(strict_types = 1);

namespace PhpPipeline\Result;

final class PipelineResultFactory implements PipelineResultFactoryInterface
{

    /**
     * @param mixed $payload
     * @return PipelineResultInterface
     */
    public function createResult($payload): PipelineResultInterface
    {
        return new PipelineResult($payload);
    }
}