<?= $this->include('template/header'); ?>
<article class="entry">
  <h2><?= $artikel['judul']; ?></h2>
  <img src="/img/<?= $artikel['gambar'] == null ? 'image-null.png' : $artikel['gambar'] ?>" alt="<?= $artikel['judul']; ?>">
  <p><?= $artikel['isi']; ?></p>
</article>
<?= $this->include('template/footer'); ?>