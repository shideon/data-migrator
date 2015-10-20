<?php
/**
 * @package spamroast/data-migrator
 * @copyright (c) 2015 John Pancoast
 * @author John Pancoast <johnpancoaster@gmail.com>
 * @license MIT
 */

namespace SpamRoast\DataMigrator\Field;

use SpamRoast\DataMigrator\AbstractField;

/**
 * SpamRoast\DataMigrator\Field\CsvField
 *
 * @author John Pancoast <johnpancoaster@gmail.com>
 */
class CsvField extends AbstractField
{
    /**
     * @var int Position of this field in an iteration of input data
     */
    private $fieldPosition;

    /**
     * @inheritDoc
     * @param int $fieldPosition Position of this field in an iteration of input data
     */
    public function __construct($name, array $constraints, $fieldPosition)
    {
        parent::__construct($name, $constraints);
        $this->fieldPosition = $fieldPosition;
    }

    /**
     * @inheritDoc
     */
    public function extractValue($iterationInput)
    {
        return $iterationInput[$this->fieldPosition];
    }
}