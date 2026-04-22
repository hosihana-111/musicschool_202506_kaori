<div class="c-breadcrumbs">
  <div class="c-breadcrumbs__inner">
    <?php if ( function_exists( 'bcn_display' ) ) {
      bcn_display();
    } ?>
  </div>
</div>

<?php if ( is_page( 'contact' ) ) : ?>
<script>
document.addEventListener('DOMContentLoaded', function () {
  const form = document.querySelector('.snow-monkey-form');
  const breadcrumbCurrent = document.querySelector('.c-breadcrumbs .current-item');

  if (!form || !breadcrumbCurrent) return;

  function updateBreadcrumbText() {
    const screen = form.getAttribute('data-screen');

    if (screen === 'complete') {
      breadcrumbCurrent.textContent = '送信完了';
    } else {
      breadcrumbCurrent.textContent = 'お問い合わせ';
    }
  }

  updateBreadcrumbText();

  const observer = new MutationObserver(function () {
    updateBreadcrumbText();
  });

  observer.observe(form, {
    attributes: true,
    attributeFilter: ['data-screen']
  });
});
</script>
<?php endif; ?>