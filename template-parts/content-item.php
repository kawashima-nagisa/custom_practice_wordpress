<p>商品名<?php the_title(); ?></p>
<?php $price = get_post_meta(get_the_ID(), '価格', true); ?>
<!-- //get_the_ID 表示しようとしている記事のIDを取得する -->
<?php $publisher = get_post_meta(get_the_ID(), '出版社', true); ?>
<?php $writer = get_post_meta(get_the_ID(), '著者', false); ?>
<!-- falseなら配列を取得する -->

<dl class="table">
    <?php if ($price !== '') : ?>
        <dt>価格</dt>
    <?php endif; ?>
    <dd><?php echo esc_html(number_format($price)); ?>円だよん</dd>
    <?php if ($publisher !== '') : ?>
        <dt>出版社</dt>
        <dd><?php echo esc_html($publisher); ?></dd>
    <?php endif; ?>
    <?php if ($writer) : ?>
        <dt>著者</dt>
        <?php foreach ($writer as $w) : ?>
            <dd><?php echo esc_html($w); ?></dd>
        <?php endforeach; ?>
    <?php endif; ?>



</dl>