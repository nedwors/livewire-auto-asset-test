<?php

test('pages without livewire render', function () {
    $this->get('/without')
        ->assertViewIs('without-livewire')
        ->assertSee('Hey!');
});

test('pages with livewire render', function () {
    $this->get('/with')
        ->assertViewIs('with-livewire')
        ->assertSee('Hey!');
});
