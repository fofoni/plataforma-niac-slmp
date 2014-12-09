<!-- File: /app/View/Posts/view_pdf.ctp -->

<h1>Chave nova: <?php echo h($post['Post']['Chave Nova']); ?></h1>
<h1><?php echo h($post['Post']['Nome']); ?></h1>

<p><small>Created: <?php echo $post['Post']['created']; ?></small></p>

<p><?php echo h($post['Post']['Anotacoes']); ?></p>