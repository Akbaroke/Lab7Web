<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title><?= $title; ?></title>
  <link rel="stylesheet" href="<?= base_url('/style.css'); ?>">
</head>

<body>
  <div id="container">
    <header>
      <h1>Layout Sederhana</h1>
    </header>
    <nav>
      <a href="<?= base_url('/home'); ?>" class="<?= $page === 'home' ? 'active' : '' ?>">Home</a>
      <a href="<?= base_url('/artikel'); ?>" class="<?= $page === 'artikel' ? 'active' : '' ?>">Artikel</a>
      <a href="<?= base_url('/about'); ?>" class="<?= $page === 'about' ? 'active' : '' ?>">About</a>
      <a href="<?= base_url('/kontak'); ?>" class="<?= $page === 'kontak' ? 'active' : '' ?>">Kontak</a>
    </nav>
    <section id="wrapper">
      <section id="main">