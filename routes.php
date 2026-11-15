<?php
$page_title = 'Our routes';
include 'includes/header.php';
?>

<main>
<label for="route-search">Find a route or a centre</label>
<input id="route-search" placeholder="e.g. Kibiko" type="search"/>
<p aria-live="polite" id="route-count"></p>
<section>
<h2>Kiserian route</h2>
<p>The lorry runs from 6.30am and again from 4.00pm.</p>
<ul>
<li>Olepolos centre</li>
<li>Kandisi centre</li>
<li>Masai Lodge centre</li>
</ul>
</section>
<section>
<h2>Ngong route</h2>
<p>The lorry runs from 6.45am and again from 4.15pm.</p>
<ul>
<li>Ngong town centre</li>
<li>Nkoroi centre</li>
<li>Oloolua centre</li>
<li>Kibiko centre</li>
</ul>
</section>
<section>
<h2>Rongai route</h2>
<p>The lorry runs from 7.00am and again from 4.30pm.</p>
<ul>
<li>Rongai market centre</li>
<li>Kiamumbi centre</li>
<li>Manguo centre</li>
</ul>
</section>
</main>

<?php include 'includes/footer.php'; ?>
