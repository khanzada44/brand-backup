<?php
return [
    'name_min' => 2,
    'name_max' => 100,
    'email_max' => 254,
    'phone_min_digits' => 7,
    'phone_max_digits' => 15,
    'message_min' => 10,
    'message_max' => 5000,
    'upload_max_bytes' => 10 * 1024 * 1024,
    'upload_types' => ['pdf' => 'application/pdf', 'png' => 'image/png', 'jpg' => 'image/jpeg', 'jpeg' => 'image/jpeg'],
    'services' => ['Ghostwriting', 'Book Editing', 'Book Publishing', 'Book Promotion', 'Book Cover Design', 'Illustration', 'Audio Book', 'Author Website', 'Book Video', 'Other'],
    'stages' => ['Idea', 'Manuscript', 'Editing', 'Production', 'Ready to publish'],
    'rate_limit' => 5,
    'ip_rate_limit' => 20,
    'rate_window_seconds' => 600,
];
