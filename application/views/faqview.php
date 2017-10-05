<h2><?php echo $title; ?></h2>

<?php foreach ($faq as $faq_item): ?>

    <h3><?php echo $faq_item['pertanyaan']; ?></h3>
    
    <div class="main">
        <?php echo $faq_item['jawaban']; ?>
    </div>

<?php endforeach; ?>