<?php

namespace NovaTextCard;

use Laravel\Nova\Card;

class NovaTextCard extends Card
{

    public $component = 'nova-text-card';

    public $content = '';

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
