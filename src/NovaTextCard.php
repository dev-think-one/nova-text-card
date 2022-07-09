<?php

namespace NovaTextCard;

use Laravel\Nova\Card;

class NovaTextCard extends Card
{
    public $content = '';

    /**
     * Get the component name for the element.
     *
     * @return string
     */
    public function component()
    {
        return 'nova-text-card';
    }

    public function content(string $content): static
    {
        $this->content = $content;

        return $this;
    }



    public function jsonSerialize(): array
    {
        return array_merge([
            'content' => $this->content,
        ], parent::jsonSerialize());
    }
}
