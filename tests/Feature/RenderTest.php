<?php

test('tests with view assertions function with pages without livewire', function () {
    $this->get('/without')
        ->assertViewIs('without-livewire')
        ->assertSee('Hey!');
});

test('tests without view assertions function with pages without livewire', function () {
    $this->get('/without')
        ->assertSee('Hey!');
});

test('tests without view assertions function when pages have livewire', function () {
    $this->get('/with')
        ->assertSee('Hey!');
});

test('tests with view assertions function when pages have livewire', function () {
    $this->get('/with')
        ->assertViewIs('with-livewire')
        ->assertSee('Hey!');
});
