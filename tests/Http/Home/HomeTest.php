<?php

declare(strict_types=1);

it('can see the homepage', function () {
    $response = $this->get(route('home.index'));

    $response->assertOk()
        ->assertSee('Lochness CMS Documentation');
});
