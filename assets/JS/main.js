/**
   * Frequently Asked Questions Toggle
   */
document.querySelectorAll('.faq-item h3, .faq-item .faq-toggle').forEach((faqItem) => {
    faqItem.addEventListener('click', () => {
      faqItem.parentNode.classList.toggle('faq-active');
    });
  });

  document.addEventListener('DOMContentLoaded', function () {
    var swiperElements = document.querySelectorAll('.init-swiper');
    swiperElements.forEach(function (element) {
        var config = JSON.parse(element.querySelector('.swiper-config').textContent);
        new Swiper(element, config);
    });
});