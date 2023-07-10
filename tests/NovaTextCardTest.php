<?php

namespace NovaTextCard\Tests;

use NovaTextCard\NovaTextCard;

class NovaTextCardTest extends TestCase
{

    /** @test */
    public function card_return_correct_component()
    {
        $this->assertEquals('nova-text-card', NovaTextCard::make()->component());

        $this->assertEquals('foo-bar', NovaTextCard::make('foo-bar')->component());
    }

    /** @test */
    public function card_content_is_changable()
    {
        $card = NovaTextCard::make();

        $this->assertEmpty($card->content);

        $card->content('Foo Bar');

        $this->assertEquals('Foo Bar', $card->content);
        $this->assertEquals('Foo Bar',  $card->jsonSerialize()['content']);
    }

}
