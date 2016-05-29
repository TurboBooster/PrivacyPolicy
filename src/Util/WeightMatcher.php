<?php

declare(strict_types = 1);

namespace OctoLab\Cleaner\Util;

/**
 * @author Kamil Samigullin <kamil@samigullin.info>
 */
final class WeightMatcher implements MatcherInterface
{
    /** @var array */
    private $rules;

    /**
     * {@inheritdoc}
     */
    public function match(array $devFiles)
    {
        return array();
    }

    /**
     * {@inheritdoc}
     */
    public function setRules(array $rules)
    {
        $this->rules = $rules;
        return $this;
    }
}