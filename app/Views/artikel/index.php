<?= $this->include('template/header'); ?>
<h1><?= $title; ?></h1>
<hr>
<div id="artikel">
  <?php if ($artikel) : foreach ($artikel as $row) : ?>
      <article class="artikel">
        <a href="<?= base_url('/artikel/' . $row['slug']); ?>">
          <img src="/img/<?= $row['gambar'] == null ? 'image-null.png' : $row['gambar'] ?>" alt="<?= $row['judul']; ?>">
          <div>
            <h2>
              <?= $row['judul']; ?>
            </h2>
            <p><?= substr($row['isi'], 0, 200); ?></p>
          </div>
        </a>
      </article>
      <hr class="divider" />
    <?php endforeach;
  else : ?>
    <article class="entry">
      <h2>Belum ada data.</h2>
    </article>
  <?php endif; ?>
</div>
<?= $this->include('template/footer'); ?>