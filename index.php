<?php

/**
 * Root index.php untuk deployment Hostinger subfolder.
 * File ini ada di: public_html/fix_monetrakeu/index.php
 * 
 * Tugasnya: mengarahkan request ke public/index.php
 * tanpa Laravel bingung soal subfolder path.
 */

// Perbaiki SCRIPT_NAME agar Laravel tahu path subfolder yang benar
$_SERVER['SCRIPT_NAME'] = '/fix_monetrakeu/index.php';

// Muat index.php asli Laravel dari folder public
require __DIR__ . '/public/index.php';
