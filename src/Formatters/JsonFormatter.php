<?php
namespace Consolidation\OutputFormatters\Formatters;

use Consolidation\OutputFormatters\FormatterInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Json formatter
 *
 * Convert an array or ArrayObject into Json.
 */
class JsonFormatter implements FormatterInterface
{
    /**
     * @inheritdoc
     */
    public function write(OutputInterface $output, $data, $options = [])
    {
        $output->writeln(json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES));
    }
}
