<?php

test('the booking product successful response', function () {
    $response = $this->get('/admin/login');

    $response->assertStatus(200);
});
